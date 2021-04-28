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
        color: salmon;
      }
	  h4 {
        text-transform: uppercase;
        color:#999999;
      }
	   h5 {
        text-transform: uppercase;
        color:#999999;
      }
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: crimson 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #DDEEEE;
        text-decoration: none;
    }
    table tbody td {
        border: crimson 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-shadow: 1px 1px 1px #DDEEEE;
    }
    a {
          background-color: crimson;
          color: #DDEEEE;
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


    <center><h2>Data SISWA</h2><center>
    <center><a href="tambah_kelas.php">+ &nbsp; Tambah SISWA</a><center>
    <br/>
    <table>
      <thead>
        <tr>
		<th>NO</th>
    <th>ID KELAS</th>
          <th>NAMA KELAS</th>
		  <th>KOMPETENSI KEAHLIAN</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
      $query = "SELECT * FROM tb_kelas  ORDER BY id_kelas ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>	
          <td><?php echo $no; ?></td>
          <td><?php echo $row['id_kelas']; ?></td>
          <td><?php echo $row['nama_kelas']; ?></td>
		  <td><?php echo $row['kompetensi_keahlian']; ?></td>


          <td width="150px">
              <a href="edit_kelas.php?id=<?php echo $row['id_kelas']; ?>">Edit</a> |
              <a href="proses_hapuskelas.php?id=<?php echo $row['id_kelas']; ?>" onClick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
</body>
</html>