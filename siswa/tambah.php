<?php include '../config/koneksi.php';
if(isset($_POST['simpan'])){
$n=$_POST['nama'];$e=$_POST['email'];$j=$_POST['jurusan'];$a=$_POST['alamat'];
mysqli_query($koneksi,"INSERT INTO siswa(nama,email,jurusan,alamat) VALUES('$n','$e','$j','$a')");
header('Location: index.php');
}
?>
<!doctype html><html><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="container mt-4"><div class="card"><div class="card-body">
<h3>Tambah Siswa</h3>
<form method="post">
<input class="form-control mb-3" name="nama" placeholder="Nama">
<input class="form-control mb-3" name="email" placeholder="Email">
<input class="form-control mb-3" name="jurusan" placeholder="Jurusan">
<textarea class="form-control mb-3" name="alamat" placeholder="Alamat"></textarea>
<button class="btn btn-success" name="simpan">Simpan</button>
</form></div></div></body></html>