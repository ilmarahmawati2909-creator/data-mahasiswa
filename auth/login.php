<?php
include '../config/koneksi.php';
if(isset($_POST['login'])){
    $u=$_POST['username']; $p=md5($_POST['password']);
    $q=mysqli_query($koneksi,"SELECT * FROM users WHERE username='$u' AND password='$p'");
    if(mysqli_num_rows($q)>0){ $_SESSION['login']=true; header('Location: ../dashboard.php'); exit; }
    $error='Username atau password salah';
}
?>
<!doctype html><html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light">
<div class="container mt-5"><div class="row justify-content-center"><div class="col-md-4">
<div class="card shadow"><div class="card-body">
<h3 class="text-center mb-4">Login Admin</h3>
<?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
<form method="post">
<input class="form-control mb-3" name="username" placeholder="Username">
<input type="password" class="form-control mb-3" name="password" placeholder="Password">
<button class="btn btn-primary w-100" name="login">Login</button>
</form></div></div></div></div></div></body></html>