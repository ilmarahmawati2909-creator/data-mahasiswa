<?php include '../config/koneksi.php';
$id=$_GET['id']; $d=mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM siswa WHERE id=$id"));
if(isset($_POST['update'])){
$n=$_POST['nama'];$e=$_POST['email'];$j=$_POST['jurusan'];$a=$_POST['alamat'];
mysqli_query($koneksi,"UPDATE siswa SET nama='$n',email='$e',jurusan='$j',alamat='$a' WHERE id=$id");
header('Location: index.php');
}
?>
<!doctype html><html><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="container mt-4"><div class="card"><div class="card-body">
<h3>Edit Siswa</h3>
<form method="post">
<input class="form-control mb-3" name="nama" value="<?= $d['nama'] ?>">
<input class="form-control mb-3" name="email" value="<?= $d['email'] ?>">
<input class="form-control mb-3" name="jurusan" value="<?= $d['jurusan'] ?>">
<textarea class="form-control mb-3" name="alamat"><?= $d['alamat'] ?></textarea>
<button class="btn btn-primary" name="update">Update</button>
</form></div></div></body></html>