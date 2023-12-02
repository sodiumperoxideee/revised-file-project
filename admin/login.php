

<style>
    .container-fluid {
        background-image: linear-gradient(to top, rgba(245, 246, 252, 0), rgba(8, 45, 56, 0.9)), url('../img/loginadm.jpg');
        background-size: cover;
    }
    .admin-login-page {
        background-color: white;
        border-radius: 20px;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Staff Login';
    require_once('../include/head.php');
?>
<body>
    <main>
        <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
            <div class="admin-login-page p-5 mx-5 w-50">
                <p class="text-center">
                    <img src="../img/logo.png" class="img-fluid" alt="">
                </p>
                <h1 class="h4 my-4 mb-4 text-center brand-color">Admin Login</h1>
                <form method="post" action="">
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required value="<?php if(isset($_POST['password'])) { echo $_POST['password']; } ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 brand-bg-color w-100" name="login">Login</button>
                    
                    <?php
                    if (isset($_POST['login']) && isset($error)){
                    ?>
                        <p class="text-danger mt-3 text-center"><?= $error ?></p>
                    <?php
                    }
                    ?>
                </form>
            </div>
        </div>
    </main>
</body>
</html>