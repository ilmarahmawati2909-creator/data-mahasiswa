<?php include '../config/koneksi.php'; if(!isset($_SESSION['login'])) header('Location: ../auth/login.php');
$cari = $_GET['cari'] ?? '';
$q = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nama LIKE '%$cari%' ORDER BY id DESC");
?>
<!doctype html><html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="container mt-4">
<h3>Data Siswa</h3>
<div class="mb-3">
<a class="btn btn-primary" href="tambah.php">Tambah Data</a>
<a class="btn btn-secondary" href="../dashboard.php">Dashboard</a>
</div>
<form class="mb-3"><input class="form-control" name="cari" placeholder="Cari nama..." value="<?= $cari ?>"></form>
<table class="table table-striped table-bordered">
<tr><th>No</th><th>Nama</th><th>Email</th><th>Jurusan</th><th>Aksi</th></tr>
<?php $n=1; while($d=mysqli_fetch_assoc($q)){ ?>
<tr>
<td><?= $n++ ?></td><td><?= $d['nama'] ?></td><td><?= $d['email'] ?></td><td><?= $d['jurusan'] ?></td>
<td>
<a class="btn btn-warning btn-sm" href="edit.php?id=<?= $d['id'] ?>">Edit</a>
<a class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')" href="hapus.php?id=<?= $d['id'] ?>">Hapus</a>
</td>
</tr>
<?php } ?>
</table></body></html>