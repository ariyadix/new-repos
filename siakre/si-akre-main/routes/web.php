<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\{
    HomeController,
    UserProfileController,
    LkpsController,
    DataLkpsController,
    LedController,
    MatriksController,
    AdminProdiController,
    ReviewerController,
    DosenController,
    MahasiswaController,
    AdminController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::name('utils')
    ->middleware('level:1,2,3')
    ->group(function () {
        Route::post('/utils/update', [DataLkpsController::class, 'updateTsYear']);
    });

Route::middleware('admin')
->prefix('admin')
->group(
    function () {
        Route::post('/profile/update', [AdminController::class, 'updateProfile']);
        Route::post('/profile/update-credential', [AdminController::class, 'updateCredential']);
    }
);
Route::middleware('prodi')
->prefix('prodi')
->group(
    function () {
        Route::post('/profile/update', [AdminProdiController::class, 'updateProfile']);
        Route::post('/profile/update-credential', [AdminProdiController::class, 'updateCredential']);
    }
);
Route::middleware('reviewer')
->prefix('reviewer')
->group(
    function () {
        Route::post('/profile/update', [ReviewerController::class, 'updateProfile']);
        Route::post('/profile/update-credential', [ReviewerController::class, 'updateCredential']);
    }
);
Route::middleware('dosen')
    ->prefix('dosen')
    ->group(
        function () {
            Route::post('/profile/update', [DosenController::class, 'updateProfile']);
            Route::post('/profile/update-credential', [DosenController::class, 'updateCredential']);
        }
    );
Route::middleware('mahasiswa')
    ->prefix('mhs')
    ->group(
        function () {
            Route::post('/profile/update', [MahasiswaController::class, 'updateProfile']);
            Route::post('/profile/update-credential', [MahasiswaController::class, 'updateCredential']);
        }
    );


Route::prefix('led')
    ->middleware('level:1,2')
    ->group(function () {
        Route::post('/update', [LedController::class, 'updateLed']);
        Route::get('/', [LedController::class, 'index']);
        Route::get('/{id}', [LedController::class, 'form'])->name('viewLed');
    });
Route::name('matriks')
    ->prefix('matriks')
    ->middleware('level:1,5')
    ->group(function () {
        Route::get('/prodi', [MatriksController::class, 'index_prodi']);
    });

Route::name('matriks')
    ->prefix('matriks')
    ->middleware('level:1,2,5')
    ->group(function () {
        Route::post('/update', [MatriksController::class, 'updateMatriks']);
        Route::get('/cetak_pdf', [MatriksController::class, 'cetak_pdf']);
        Route::post('/update-bukti', [MatriksController::class, 'updateMatriksBukti']);
        Route::get('/', [MatriksController::class, 'index'])->name('indexMatriks');
        Route::get('/komentar', [MatriksController::class, 'komentar']);
        Route::post('/komentar', [MatriksController::class, 'postKomentar']);

        Route::get('/view/{id}', [MatriksController::class, 'form'])->name('viewLed');
    });
Route::name('lkps')
    ->prefix('lkps')
    ->group(function () {
        Route::get('/view/{id}', [LkpsController::class, 'form']);
        Route::get('/input/{id}', [LkpsController::class, 'input']);
        Route::get('/', [LkpsController::class, 'index']);

        Route::get('/edit/{id}', [DataLkpsController::class, 'edit']);
        Route::get('/delete/{tableId}/{id}', [DataLkpsController::class, 'deleteLkps']);
        Route::post('/insert/{id}', [DataLkpsController::class, 'insertLkps']);
        Route::post('/update/jcmb', [DataLkpsController::class, 'updateJCMB']);

    });

Route::get('/profile', [UserProfileController::class, 'index'])->name('pageProfile');
Route::get('/profile/edit', [UserProfileController::class, 'editProfile'])->name('pageEditProfile');
Route::get('/profile/edit-password', [UserProfileController::class, 'editPassword'])->name('pageEditPassword');



Route::get('/dosen/prodi', [AdminProdiController::class, 'index_prodi']);

Route::middleware('admin')
    ->group(
        function () {
            Route::get('/admin/iaps', [AdminController::class, 'index_iaps']);
            Route::get('/audit-log', [AdminController::class, 'index_audit_log'])->name('auditLog');
            Route::get('/audit-log/{id}', [AdminController::class, 'audit_log_detail'])->name('auditLogDetail');

            Route::get('/form-access', [AdminController::class, 'index_form_access'])->name('formAccess');
            Route::post('/form-access/update', [AdminController::class, 'update_form_access']);

            Route::get('/manage/prodi', [AdminController::class, 'index_prodi'])->name('prodiList');
            Route::get('/manage/prodi/json', [AdminController::class, 'prodi_data']);
            Route::get('/manage/prodi/{id}', [AdminController::class, 'detailProdi'])->name('prodiDetail');
            Route::get('/manage/add-prodi', [AdminController::class, 'addProdi']);
            Route::post('/manage/prodi/insert', [AdminController::class, 'insertProdi']);
            Route::get('/manage/prodi/delete/{id}', [AdminController::class, 'deleteProdi']);
            Route::get('/manage/prodi/edit/{id}', [AdminController::class, 'editProdi']);
            Route::post('/manage/prodi/update/{id}', [AdminController::class, 'updateProdi']);
            Route::get('/manage/prodi/edit-password/{id}', [AdminController::class, 'editProdiPassword'])->name('pageProdiEditPassword');
            Route::post('/manage/prodi/update-credential/{id}', [AdminController::class, 'updateProdiCredential']);

            Route::get('/manage/mhs', [AdminController::class, 'index_mhs'])->name('mhsList');
            // Route::get('/manage/mhs/json', [AdminController::class, 'mhs_data']);
            Route::get('/manage/mhs/{id}', [AdminController::class, 'detailMhs'])->name('mhsDetail');
            Route::get('/manage/add-mhs', [AdminController::class, 'addMhs']);
            Route::post('/manage/mhs/insert', [AdminController::class, 'insertMhs']);
            Route::get('/manage/mhs/delete/{id}', [AdminController::class, 'deleteMhs']);
            Route::get('/manage/mhs/edit/{id}', [AdminController::class, 'editMhs']);
            Route::post('/manage/mhs/update/{id}', [AdminController::class, 'updateMhs']);
            Route::get('/manage/mhs/edit-password/{id}', [AdminController::class, 'editMhsPassword'])->name('pageMhsEditPassword');
            Route::post('/manage/mhs/update-credential/{id}', [AdminController::class, 'updateMhsCredential']);

            Route::get('/manage/dosen', [AdminController::class, 'index_dosen'])->name('dosenList');
            // Route::get('/manage/mhs/json', [AdminController::class, 'mhs_data']);
            Route::get('/manage/dosen/{id}', [AdminController::class, 'detailDosen'])->name('dosenDetail');
            Route::get('/manage/add-dosen', [AdminController::class, 'addDosen']);
            Route::post('/manage/dosen/insert', [AdminController::class, 'insertDosen']);
            Route::get('/manage/dosen/delete/{id}', [AdminController::class, 'deleteDosen']);
            Route::get('/manage/dosen/edit/{id}', [AdminController::class, 'editDosen']);
            Route::post('/manage/dosen/update/{id}', [AdminController::class, 'updateDosen']);
            Route::get('/manage/dosen/edit-password/{id}', [AdminController::class, 'editDosenPassword'])->name('pageDosenEditPassword');
            Route::post('/manage/dosen/update-credential/{id}', [AdminController::class, 'updateDosenCredential']);

            Route::get('/manage/reviewer', [AdminController::class, 'index_reviewer'])->name('reviewerList');
            Route::get('/manage/reviewer/{id}', [AdminController::class, 'detailReviewer'])->name('reviewerDetail');
            Route::get('/manage/add-reviewer', [AdminController::class, 'addReviewer']);
            Route::post('/manage/reviewer/insert', [AdminController::class, 'insertReviewer']);
            Route::get('/manage/reviewer/delete/{id}', [AdminController::class, 'deleteReviewer']);
            Route::get('/manage/reviewer/edit/{id}', [AdminController::class, 'editReviewer']);
            Route::post('/manage/reviewer/update/{id}', [AdminController::class, 'updateReviewer']);
            Route::get('/manage/reviewer/edit-password/{id}', [AdminController::class, 'editReviewerPassword'])->name('pageReviewerEditPassword');
            Route::post('/manage/reviewer/update-credential/{id}', [AdminController::class, 'updateReviewerCredential']);

            Route::get('/lkps/prodi', [LkpsController::class, 'index']);
            Route::get('/lkps/prodi/view/{id}', [LkpsController::class, 'admin_form']);
            Route::get('/lkps/prodi/input/{id}', [LkpsController::class, 'admin_input']);
            // Route::prefix('led')
            //     ->group(function () {
            //         Route::post('/update', [LedController::class, 'updateLed']);
            //         Route::get('/', [LedController::class, 'index']);
            //         Route::get('/{id}', [LedController::class, 'form'])->name('viewLed');
            //     });
        }
    );
