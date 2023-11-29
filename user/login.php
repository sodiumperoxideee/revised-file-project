<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Login to your account';
    $login_page = 'active';
    require_once '../include/head.php';
?>

<body>
  <?php
      require_once '../include/header-user.php';
  ?>

  <div class="login">
    <div class="row">
        <div class="col-7 login-left text-center">
          <div class="left-container py-5">
            <h1>Welcome back!</h1>
            <p class="mt-3 mx-5">Log back in to book appointments for us to check up on your fur friend's health.</p>
            <p class="alr mt-5">Don't have an account yet?</p>
            <a href="signup.html" class="btn px-5 py-1 align-self-center">Sign Up</a>
          </div>
        </div>
        <div class="col-5 login-right my-2 py-5">
            <h1 class="mb-5">Login to your account</h1>
            <div class="login-container">
              <form action="home.html" method="get" class="login-user">
                <div class="my-2">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
                </div>
                <div class="my-2">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                </div>
                <div class="form-check my-2 mr-sm-2">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="inlineFormCheck"
                  />
                  <label class="form-check-label" for="inlineFormCheck">
                    Remember me? 
                    <a href="forgot password.html" class="forgotpass ms-5">Forgot password?</a>
                  </label>
                </div>
                
                <input class="btn px-3 py-2 mt-4" type="submit" value="Login">
                <p class="my-4 text-center">or with</p>
                <input class="btn px-5 py-2 my-2" type="submit" value="Facebook">
                <input class="btn px-5 py-2 my-2" type="submit" value="Google">
              </form>
            </div>
        </div>
  </div>

    <script src="script.js"></script>
</body>
</html>