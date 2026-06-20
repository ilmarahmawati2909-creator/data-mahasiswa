<?php include 'config/koneksi.php'; if(!isset($_SESSION['login'])) header('Location: auth/login.php');
$total=mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT COUNT(*) jml FROM siswa"))['jml'];
?>
<!doctype html><html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
<nav class="navbar navbar-dark bg-dark"><div class="container"><span class="navbar-brand">Dashboard Sekolah</span>
<a href="auth/logout.php" class="btn btn-danger">Logout</a></div></nav>
<div class="container mt-4">
<div class="card bg-primary text-white mb-4"><div class="card-body"><h5>Total Siswa</h5><h1><?= $total ?></h1></div></div>
<a class="btn btn-success" href="siswa/index.php">Kelola Data Siswa</a>
</div></body></html>