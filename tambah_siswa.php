<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    h2 {
        text-transform: uppercase;
        color: black;
      }
    h3 {
        text-transform: uppercase;
        color: silver;
      }
    h5 {
        text-transform: uppercase;
        color:#999999;
      }
    button {
          background-color: silver;
          color: #000000;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: silver;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
<body>
   <?php
  include ('header.php');
?>



      <center>
        <h2>TAMBAH SISWA</h2>
      <center>
      <form method="POST" action="proses_tambahsiswa.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>NISN</label>
          <input type="text" name="nisn" autofocus="" required="" />
        </div>
        <div>
          <label>NIS</label>
         <input type="text" name="nis" required=""/>
        </div>
        
    <div>
          <label>NAMA SISWA</label>
         <input type="text" name="nama" required=""/>
        </div>
    
    <div>
          <label>KELAS</label>
         <input type="text" name="id_kelas" required=""/>
        </div>
    
    <div>
          <label>ALAMAT</label>
         <input type="text" name="alamat" required=""/>
        </div>
    
    <div>
          <label>NO TELEPON</label>
         <input type="text" name="no_telp" required=""/>
        </div>
    <div>
          <label>ID SPP</label>
         <input type="text" name="id_spp" required=""/>
        </div>
    
    <div>
          <label>TAHUN MASUK</label>
         <input type="text" name="tahun" required=""/>
        </div>
    

    
        <div>
         <button type="submit">Simpan Kelas</button>
        </div>
        </section>
      </form>
</body>
</html>