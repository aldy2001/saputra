@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulir</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css" />

	
</head>
<body style="background-color: #95F3A0;">
	<br> 
<div class="container mt-2">
    <div class="row">
        <div class="col">
            <p style="color: white;">&larr; <a href="index.php" style="color: white;">Home</a> </p>

            <h3>Silahkan isi data di bawah ini...</h3>
            <h5>Untuk melakukan peminjaman<h5>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">


        <form action="/formulir/daftar" method="POST">
          @csrf
                                                  <div class="form-grup">
                              <label for="title">Nama Kamu</label>
                              <input type="text" name="name" class="form-control" placeholder="Nama Kamu">
                          </div>

                          <div class="form-grup">
                          <label for="title">Alamat Lengkap</label>
                          <input type="text" name="alamat_lengkap" class="form-control" placeholder="Alamat Lengkap">
                          </div>

                          <div class="form-grup">
                          <label for="title">Email</label>
                          <input type="text" name="email" class="form-control" placeholder="Email">
                          </div>

                      
                          <div class="form-grup">
                          <label for="title">Jumlah Pinajaman</label>
                          <input type="text" name="jumlah_pinjaman" class="form-control" placeholder="Jumalah Pinjaman">
                          </div>
                           <br>
                          <div>
                                <select class="form-control" name="masa_pinjaman">
                                <option>--Masa pinjaman --</option>
                                <option value="1 Bulan">1 Bulan</option>
                                <option value="3 Bulan">3 Bulan</option>
                                <option value="5 Bulan">5 Bulan</option>
                                <option value="8 Bulan">8 Bulan</option>
                                <option value="1 Tahun">1 Tahun</option>
                          </select> 
                          </div>
                        </div>

                        <div class="col-md-6">

                          <div class="form-grup">
                            <label for="title">Penghasilan Perbulan</label>
                            <input type="text" name="penghasilan_perbulan" class="form-control" placeholder="Penghasilan Perbulan">
                          </div>
                              <br>
                              <div>
                              <select class="form-control" name="pekerjaan">
                              <option>--Pekerjaan--</option>
                              <option value="Pegawai Swasta">Pegawai Swasta</option>
                              <option value="Pegawai Negri">Pegawi Negri</option>
                              <option value="Kontrak">Kontrak</option>
                              <option value="Wiraswasta">Wiraswasta</option>
                              <option value="TNI atau POLISI">TNI atau POLISI</option>
                          </select>
                          </div>
                          
                          <div class="form-grup">
                          <label for="title">Provinsi</label>
                          <input type="text" name="Provinsi" class="form-control" placeholder="Provinsi">
                          </div>

                          <div class="form-grup">
                          <label for="title">Kota</label>
                          <input type="text" name="Kota" class="form-control" placeholder="Kota">
                          </div>

                          <div class="form-grup">
                          <label for="title">Umur</label>
                          <input type="text" name="umur" class="form-control" placeholder="Umur">
                          </div>

                          <br>
                          <div>
                            <select class="form-control" name="jenis_klamin">
                            <option>--Jenis Klamin--</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Permepuan</option>
                            </select>
                          </div>


                        <br>
                        <input type="submit" class="btn btn-success btn-block" value="selesai">
                        
                        
                        </form>

                      </div>

                        <script src="../js/jquery.min.js"></script>
					    <script src="../js/jquery.easing.1.3.js"></script>
					    <script src="../js/bootstrap.min.js"></script> 
	
</body>
</html>
