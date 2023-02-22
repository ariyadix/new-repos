<html>
    <head>
        <!--menggunakan bootstrap CDN untuk mendapatkan source-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.1/css/scroller.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../ini.css">
        <div class="neato-header">


<div class="header">
  <div class="sides">
       <a href="#" class="logo">Tesis</a>
     <!--<a href="indextesis.php" class="logo">Tesis</a>-->
     <!--<a href="indexdisertasi.php" class="logo">Disertasi</a>-->
     <!--<a href="indexkta.php" class="logo">Karya Tulis Akhir</a>-->
     <!--<a href="indexkti.php" class="logo">Karya Tulis Ilmiah</a>-->
     </div>
     <div class="sides"> <a href="https://fkg.ulm.ac.id/" class="menu"></a></div>
   
  <div class="">
  <center>    <img src="../logo/logo ulm.png" width="220" height="220"><br><br>
  <h1><a href="#category">Digital Library</a></h1>
    <h1>FAKULTAS KEDOKTERAN GIGI ULM</h1>
    <div class="meta">
          <a href="../kta/indexkta.php" class="logo">Karya Tulis Akhir</a>
          <a href="../index.php" class="logo">Skripsi</a>
          <a href="../tesis/indextesis.php" class="logo">Tesis</a>
          <a href="../disertasi/indexdisertasi.php" class="logo">Disertasi</a>
          <a href="../kti/indexkti.php" class="logo">Karya Tulis Ilmiah</a>
           <a  href="https://www.instagram.com/fkg.ulm" target="_b" class=""></a><br>
      By <a href="https://www.instagram.com/fkg.ulm" target="_b">KIT FKG ULM</a> on Januari 09, 2023     
  </center>
      
    </div>
  </div>
</div>
<!--<section class="content">-->
<!--<p>-</p>-->
<!--  <p align="center"><a href="https://twitter.com/nodws" class="btn twtr" target="_b">Follow me on Twitter</a>-->
<!--  </p>-->
<!--</section>-->


    </head>
    <body>
       
        <!--memberi jarak-->
        <br>
            <!--<div class="container">-->
                <div class="jumbotron"> <!--memberi efek kotak berwarna abu-abu dengan class jumbotron-->
                <button data-toggle="modal" data-target="#modaltambah"  class="btn btn-danger">Tambah Data Buku</button>

                <!--Modal untuk tambah data buku-->
                <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Formulir Pendaftaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               <form action="proses.php?proses=tambah&id=" method="post" enctype="multipart/form-data">
                                    <div class="formgroup">
                                        <label>Judul</label>
                                        <input type="text" name="namabuku" class="form-control" placeholder="Silahkan Masukan Judul">
                                    </div>
                                    <div class="formgroup">
                                        <label>Jenis Buku</label>
                                        <select name="jenisbuku" class="form-control">
                                            <!--<option value="Skripsi">Skripsi</option>-->
                                            <option value="Tesis">Tesis</option>
                                            <!--<option value="Disertasi">Disertasi</option>-->
                                            <!--<option value="Karya Tulis Akhir">Karya Tulis Akhir</option>-->
                                            <!--<option value="Karya Tulis Ilmiah">Karya Tulis Ilmiah</option>-->
                                        </select>
                                    </div>
                                    <div class="formgroup">
                                        <label>Penulis</label>
                                        <input type="text" name="pengarang" class="form-control" placeholder="Silahkan Masukan Nama Penulis Buku">
                                    </div>
                                    <div class="formgroup">
                                        <label>Pembimbing 1</label>
                                        <input type="text" name="pembimbing1" class="form-control" placeholder="Silahkan Masukan Nama Pembimbing 1">
                                    </div>
                                    <div class="formgroup">
                                        <label>Pembimbing 2</label>
                                        <input type="text" name="pembimbing2" class="form-control" placeholder="Silahkan Masukan Nama Pembimbing 2">
                                    </div>
                                    <div class="formgroup">
                                        <label>Penguji 1</label>
                                        <input type="text" name="penguji1" class="form-control" placeholder="Silahkan Masukan Nama Penguji 1">
                                    </div>
                                    <div class="formgroup">
                                        <label>Penguji 2</label>
                                        <input type="text" name="penguji2" class="form-control" placeholder="Silahkan Masukan Nama Penguji 2">
                                    </div>
                                    <div class="formgroup">
                                        <label>Penguji 3</label>
                                        <input type="text" name="penguji3" class="form-control" placeholder="Silahkan Masukan Nama Penguji 3">
                                    </div>
                                    <div class="formgroup">
                                        <label>Departemen</label>
                                        <input type="text" name="departemen" class="form-control" placeholder="Silahkan Masukan Departemen">
                                    </div>
                                    <div class="formgroup">
                                        <label>Tahun Terbit</label>
                                        <input type="year" name="tahunterbit" class="form-control" placeholder="Silahkan Masukan Tahun Terbit">
                                    </div>
                                    <div class="formgroup">
                                        <label>Tahun Penelitian</label>
                                        <input type="year" name="tahunpenelitian" class="form-control" placeholder="Silahkan Masukan Tahun Penelitian">
                                    </div>
                                    <!--<div class="formgroup">-->
                                    <!--    <label>penerbit</label>-->
                                    <!--    <input type="text" name="penerbit" class="form-control" placeholder="Silahkan Masukan Penerbit">-->
                                    <!--</div>-->
                                    <!--<div class="formgroup">-->
                                    <!--    <label>ISBN</label>-->
                                    <!--    <input type="text" name="isbn" class="form-control" placeholder="Silahkan Masukan No ISBN">-->
                                    <!--</div>-->
                                     <!--<div class="formgroup">-->
                                        <!--<label>File Buku</label>-->
                                    <!--<form action="proses.php" method="post" enctype="multipart/form-data">-->
                                        <!--<p>Upload <input type='file' name='foto' /></p>-->
                                    <!--</div>-->
                                    
                                        <div class="formgroup">
			                    	<label>Upload File :</label><br>
				                    <small style="align: left; color:grey;">Tambahkan File</small>
			                    	<input type="file" name="upload_file" required />
		                    		</div>
                                </div>
                                <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                  
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                    <table class="table table-striped" id="example" style="width:100%"> <!--menggunakan datatable client side-->
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Jenis Buku</th>
                                <th>Penulis</th>
                                <th>Pembimbing 1</th>
                                <th>Pembimbing 2</th>
                                <th>Penguji 1</th>
                                <th>Penguji 2</th>
                                <th>Penguji 3</th>
                                <th>Departemen</th>
                                <th>Tahun Terbit</th>
                                <th>Tahun Penelitian</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../koneksi.php';
                            $no=1;
                            $sql = "SELECT * FROM tesis";
                            $data = $conn->query($sql);
                            foreach($data as $hasil){ ?> 
                            <tr>
                                <td><?=$no++; ?></td>
                                <td><?=$hasil['namabuku'];?></td>
                                <td><?=$hasil['jenisbuku'];?></td>
                                <td><?=$hasil['pengarang'];?></td>
                                <td><?=$hasil['pembimbing1'];?></td>
                                <td><?=$hasil['pembimbing2'];?></td>
                                <td><?=$hasil['penguji1'];?></td>
                                <td><?=$hasil['penguji2'];?></td>
                                <td><?=$hasil['penguji3'];?></td>
                                <td><?=$hasil['departemen'];?></td>
                                <td><?=$hasil['tahunterbit'];?></td>
                                <td><?=$hasil['tahunpenelitian'];?></td>
                                <td><?=$hasil['upload_file'];?></td>
                                <td>
                                    <button data-toggle="modal" data-target="#modaledit<?=$hasil['idbuku']; ?>" class="btn btn-primary">Edit</button>
                                    <div class="modal fade" id="modaledit<?=$hasil['idbuku']; ?>">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <!--<form action="proses.php?proses=edit&id=<?=$hasil['idbuku'];?>" method="post">-->
                                                    <form action="proses.php?proses=edit&id=<?=$hasil['idbuku'];?>" method="post" enctype="multipart/form-data">
                                                        <div class="formgroup">
                                                            <label>Judul</label>
                                                            <input type="text" name="namabuku" value="<?=$hasil['namabuku'];?>" class="form-control" placeholder="Silahkan Masukan Judul">
                                                        </div>
                                                        <div class="formgroup">
                                                            <label>Jenis Buku</label>
                                                            <select name="jenisbuku" class="form-control">
                                                               
                                                                <option <?=$hasil['jenisbuku'] == 'Tesis' ? 'selected':''; ?> value="Tesis">Tesis</option>
                                                               
                                                                </select>
                                                        </div>
                                                        <div class="formgroup">
                                                            <label>Penulis</label>
                                                            <input type="text" name="pengarang" class="form-control" value="<?=$hasil['pengarang'];?>" placeholder="Silahkan Masukan Nama Penulis Buku">
                                                        </div>
                                                        <div class="formgroup">
                                                            <label>Pembimbing 1</label>
                                                            <input type="text" name="pembimbing1" class="form-control" value="<?=$hasil['pembimbing1'];?>" placeholder="Silahkan Masukan Nama Pembimbing 1">
                                                        </div>
                                                        <div class="formgroup">
                                                            <label>Pembimbing 2</label>
                                                            <input type="text" name="pembimbing2" class="form-control" value="<?=$hasil['pembimbing2'];?>" placeholder="Silahkan Masukan Nama Pembimbing 2">
                                                        </div>
                                                        <div class="formgroup">
                                                            <label>Penguji 1</label>
                                                            <input type="text" name="penguji1" class="form-control" value="<?=$hasil['penguji1'];?>" placeholder="Silahkan Masukan Nama Penguji 1">
                                                        </div>
                                                        <div class="formgroup">
                                                            <label>Penguji 2</label>
                                                            <input type="text" name="penguji2" class="form-control" value="<?=$hasil['penguji2'];?>" placeholder="Silahkan Masukan Nama Penguji 2">
                                                        </div>
                                                        <div class="formgroup">
                                                            <label>Penguji 3</label>
                                                            <input type="text" name="penguji3" class="form-control" value="<?=$hasil['penguji3'];?>" placeholder="Silahkan Masukan Nama Penguji 3">
                                                        </div>
                                                        <div class="formgroup">
                                                            <label>Departemen</label>
                                                            <input type="text" name="departemen" class="form-control" value="<?=$hasil['departemen'];?>" placeholder="Silahkan Masukan Nama Departemen">
                                                        </div>
                                                        <div class="formgroup">
                                                            <label>Tahun terbit</label>
                                                            <input type="text" name="tahunterbit" class="form-control" value="<?=$hasil['tahunterbit'];?>" placeholder="Silahkan Masukan Tahun Terbit">
                                                        </div>
                                                        <div class="formgroup">
                                                            <label>Tahun Penelitian</label>
                                                            <input type="text" name="tahunpenelitian" class="form-control" value="<?=$hasil['tahunpenelitian'];?>" placeholder="Silahkan Masukan Tahun Penelitian">
                                                        </div>
                                                             <br> <div class="formgroup">
                                    					<label> File :</label><br>
                                    					<small>Current File: <?= $hasil['upload_file']; ?></small>
                                    					<!--<a href="file/<?php echo $d['upload_file']; ?>" target=”_blank”>Lihat File</a>-->
                                    					<br><small style="align: left; color:grey;">Ganti File </small>
                                    					<input type="file" name="upload_file"  value="<?=$hasil['upload_file'];?>">
                                    			    	</div>
                                             
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="proses.php?proses=hapus&id=<?=$hasil['idbuku'];?>" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/scroller/2.0.1/js/dataTables.scroller.min.js"></script>
    </body>
</html>