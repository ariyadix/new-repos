<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Support\Facades\DB;

use App\Models\Reviewer;



class Matriks extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    protected $table = 'matriks';
    protected $fillable = [
        'id',
        'row_id',
        't_group',
        'grade',
        'skor',
        'bukti',
        'prodi_id',
        'user_id',
        'komentar',
    ];

    protected $auditExclude = [
        'id',
    ];
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public static function getSummary($prodi_id, $rev_id)
    {
        $matriks = DB::table('matriks')
            ->where('prodi_id', $prodi_id)
            ->where('user_id', $rev_id)
            ->select(DB::raw('t_group as id, sum(skor) as skor , count(*) - count(skor) + count(*) - count(bukti) as remainingField'))
            ->groupBy("t_group")
            ->get();
        return $matriks;
    }
    public static function getSummaryRev($prodi_id, $rev_id)
    {
        $matriks = DB::table('matriks')
            ->where('prodi_id', $prodi_id)
            ->where('user_id', $rev_id)
            ->select(DB::raw('t_group as id, sum(skor) as skor , count(*) - count(skor) as remainingField'))
            ->groupBy("t_group")
            ->get();
        return $matriks;
    }
    public static function getSummaryRow($prodi_id, $rev_id)
    {
        $matriks = DB::table('matriks')
            ->where('prodi_id', $prodi_id)
            ->where('user_id', $rev_id)
            ->select(DB::raw('row_id as id, count(*) - count(bukti) as remainingField' ))
            ->groupBy("row_id")
            ->get();

        return $matriks;
    }
    public static function getSummaryRowAdm($prodi_id, $rev_id)
    {
        $matriks = DB::table('matriks')
        ->where('prodi_id', $prodi_id)
            ->where('user_id', $rev_id)
            ->select(DB::raw('row_id as id, count(*) - count(skor) + count(*) - count(bukti) as remainingField'))
            ->groupBy("row_id")
            ->get();

        return $matriks;
    }
    public static function getSummaryRowRev($prodi_id, $rev_id)
    {
        $matriks = DB::table('matriks')
            ->where('prodi_id', $prodi_id)
            ->where('user_id', $rev_id)
            ->select(DB::raw('row_id as id, count(*) - count(skor) as remainingField'))
            ->groupBy("row_id")
            ->get();

        return $matriks;
    }
    public static function getSummarySingleRev($prodi_id, $rev_id)
    {
        $array1 = array();
        $revs = DB::table('reviewer')
            ->join('users', 'users.rev_id', '=', 'reviewer.id')
            ->select('users.id')
            ->limit(1)
            ->get();

        $matriks = DB::table('matriks')
            ->where('prodi_id', $prodi_id)
            ->where('user_id', $rev_id)
            ->select(DB::raw('t_group as id, sum(skor) as skor , count(*) - count(skor) + count(*) - count(bukti) as remainingField'))
            ->groupBy("t_group")
            ->get();
        // $matriks = DB::table('matriks')
        //     ->where('prodi_id', $prodi_id)
        //     ->select(DB::raw('t_group, sum(skor) as skor , count(*) - count(skor) + count(*) - count(bukti) as remainingField'))
        //     ->groupBy("t_group")
        //     ->get();

        return $array1;
    }
    public static function getSummaryAllRev($prodi_id)
    {
        $array1 = array();
        $revs = DB::table('reviewer')
            ->join('users', 'users.rev_id', '=', 'reviewer.id')
            ->select('users.id')
            ->orderBy('id', 'ASC')
            ->get();

        // return $revs;
        foreach ($revs as $n) {
            $matriks = DB::table('matriks')
                ->where('prodi_id', $prodi_id)
                ->where('user_id', $n->id)
                ->select(DB::raw('t_group as id, sum(skor) as skor , count(*) - count(skor) + count(*) - count(bukti) as remainingField'))
                ->groupBy("t_group")
                ->get();
            array_push($array1, $matriks);
        }

        // $matriks = DB::table('matriks')
        //     ->where('prodi_id', $prodi_id)
        //     ->select(DB::raw('t_group, sum(skor) as skor , count(*) - count(skor) + count(*) - count(bukti) as remainingField'))
        //     ->groupBy("t_group")
        //     ->get();

        return $array1;
    }
    public static function getAllRev()
    {
        $revs = DB::table('reviewer')
            ->join('users', 'users.rev_id', '=', 'reviewer.id')
            ->orderBy('reviewer.id', 'ASC')
            ->get();

        return $revs;
    }
    public static function getSummaryAll($prodi_id, $rev_id)
    {
        $matriks = Matriks::all()
            ->where('prodi_id', $prodi_id)
            ->where('user_id', $rev_id)
            ->sum('skor');
        return $matriks;
    }
    public static function getSummaryEveryReviewers($prodi_id)
    {
        $array1 = array();
        $revs = DB::table('reviewer')
            ->join('users', 'users.rev_id', '=', 'reviewer.id')
            ->select('users.id')
            ->get();

        foreach ($revs as $n) {
            $matriks = Matriks::all()
                ->where('user_id', $n->id)
                ->sum('skor');
            array_push($array1, $matriks);
        }
        return $array1;
    }
    public static function getAllCommentCount($prodi_id, $rev_id = null)
    {
        if ($rev_id) {
            $rows = DB::table('matriks')
                ->where('prodi_id', $prodi_id)
                ->where('user_id', $rev_id)
                ->where('komentar', '!=', '')
                ->whereNotNull('komentar')
                ->select('row_id')
                ->groupBy('row_id')
                ->get();
        } else {
            $rows = DB::table('matriks')
                ->where('prodi_id', $prodi_id)
                ->where('komentar', '!=', '')
                ->whereNotNull('komentar')
                ->select('row_id')
                ->groupBy('row_id')
                ->get();
        }
        return $rows;
    }
    public static function getAllComment($row_id, $prodi_id, $rev_id = null)
    {
        $response = (object) [];
        $array2 = array();
        $revs = DB::table('reviewer')
            ->join('users', 'users.rev_id', '=', 'reviewer.id')
            ->select('users.id')
            ->get();

        if ($rev_id) {
            $user = User::find($rev_id)->reviewer;
            $user_id = User::find($rev_id)->id;
            $matriks = Matriks::where('row_id', $row_id)
                ->where('prodi_id', $prodi_id)
                ->where('user_id', $rev_id)
                ->get(['id', 'row_id', 'komentar as comment'])
                ->first();

            if ($matriks != null) {
                if ($matriks->comment != null) {
                    $matriks->user = $user;
                    $matriks->user_id = $user_id;
                    array_push($array2, $matriks);
                }
            }
            $response->rev_id = $rev_id;
            $response->user = $user;
        } else {
            foreach ($revs as $n) {
                $user = User::find($n->id)->reviewer;
                $user_id = User::find($n->id)->id;
                $matriks = Matriks::where('row_id', $row_id)
                    ->where('prodi_id', $prodi_id)
                    ->where('user_id', $n->id)
                    ->get(['id', 'komentar as comment'])
                    ->first();
                if ($matriks != null) {
                    if ($matriks->comment != null) {
                        $matriks->user = $user;
                        $matriks->user_id = $user_id;
                        array_push($array2, $matriks);
                    }
                }
            }
        }
        $response->row_id = $row_id;
        $response->prodi_id = $prodi_id;

        if (empty($array2)) {
            $response->comments = [];
        } else {
            $response->comments = $array2;
        }
        return $response;
    }
}
