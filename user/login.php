<?php
    session_start();

    if(isset($_SESSION['user']) && $_SESSION['user'] == 'client'){
      header('location: ../index.php');
    }

    require_once '../classes/account.class.php';
    if(isset($_POST['login'])){
        $client = new Account();
        //sanitize
        $client->email = htmlentities($_POST['email']);
        $client->password = htmlentities($_POST['password']);
        if($client->sign_in_client()){
            $_SESSION['user'] = 'client';
            header('location: ../index.php');
        }else{
            $error = 'Invalid email/password';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Login to your account';
    $login_page = 'active';
    require_once '../include/head.php';
    require_once '../tools/functions.php';
?>

<body>
<?php
    require_once '../include/header-user.php';
  ?>

  <div class="login">
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-md-6 login-left text-center">
        <div class="left-container py-5">
          <h2>Hello, Hooman!</h2>
          <p class="mt-2">Log in to book appointments with us and for us to be able to check up on your fur friend's health.</p>
          <p class="alr">Don't have an account yet?</p>
          <a href="signup.php" class="btn px-5 py-1 align-self-center">Sign Up</a>
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 login-right">
        <h2 class="mb-1 mx-auto">Login to your account</h2>
        <div class="user-signup-container">
          <form action="" method="POST" class="login-user">
            <div class="py-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
            </div>
            <div class="py-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" value="<?php if(isset($_POST['password'])){ echo $_POST['password']; } ?>">
            </div>
            <button type="submit" name="login" class="btn btn-primary px-3 py-2 mt-4 brand-bg-color btn-create-account">Login</button>
            
            <?php
            if(isset($_POST['login']) && isset($error)){
            ?>
                <p class="text-danger text-center">
                    <?= $error ?>
                </p>
            <?php
            }
            ?>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
    require_once('../include/js.php')
  ?>
</body>
</html>