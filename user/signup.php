<?php

  session_start();

  if(isset($_SESSION['user']) && $_SESSION['user'] == 'client'){
      header('location: ./index.php');
  }

  require_once '../classes/client.class.php';
  require_once '../tools/functions.php';

  if(isset($_POST['signup'])){
      $client = new Client();
      //sanitize
      $client->firstname = htmlentities($_POST['firstname']);
      $client->lastname = htmlentities($_POST['lastname']);
      $client->gender = isset($_POST['gender']) ? htmlentities($_POST['gender']) : '';
      $client->email = htmlentities($_POST['email']);
      $client->password = htmlentities($_POST['password']);
      $client->phoneno = htmlentities($_POST['phoneno']);

      //validate inputs of the users
      if (validate_field($client->firstname) && 
      validate_field($client->lastname) &&
      validate_field($client->gender) &&
      validate_cpw($client->password, $_POST['confirmpassword']) &&
      validate_email($client->email) && !$user->is_email_exist() &&
      validate_field($client->phoneno)){
          //proceed with saving
          if($client->add()){ 
              header('location: login.php');
              $message = 'You successfully created an account!';
          }else{
            echo 'An error occured while adding in the database.';
          }
      }
  }

?>

<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Sign Up - Get Started with Purrpaws Veterinary Clinic';
    $signup_page = 'active';
    require_once '../include/head.php';
    require_once '../tools/functions.php';
?>

<body>
  <?php
    require_once '../include/header-user.php';
  ?>

  <div class="signup">
      <div class="row">
          <div class="col-7 signup-left text-center">
            <div class="left-container py-5">
              <h1>Hello, welcome!</h1>
              <p class="mt-3 mx-5">Please enter your details to sign up to book appointments for your fur friends with ease.</p>
              <p class="alr mt-5">Already have an account?</p>
              <a href="login.php" class="btn px-5 py-1 align-self-center">Login</a>
            </div>
          </div>
          <div class="col-5 signup-right my-5">
            <h1 class="">Create an account</h1>
              <div class="user-signup-container">
                  <form action="" method="post" class="signup-user">
                    <div class="form-group row">
                        <div class="col-sm-12 align-self-center my-2 form-check-inline">
                            <label for="firstname">First Name</label>
                            <input type="firstname" class="form-control" id="firstname" name="firstname" placeholder="Enter your first name" value="<?php if(isset($_POST['firstname'])){echo $_POST['firstname'];} ?>">
                            <?php
                              if(isset($_POST['firstname']) && !validate_field($_POST['firstname'])){
                            ?>
                              <div class="invalid-feedback d-block">
                              Please enter valid first name.
                              </div>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="col-sm-12 align-self-center my-2 form-check-inline">
                            <label for="lastname">Last Name</label>
                            <input type="lastname" class="form-control" id="lastname" name="lastname" placeholder="Enter your last name" value="<?php if(isset($_POST['lastname'])){echo $_POST['lastname'];} ?>">
                            <?php
                              if(isset($_POST['lastname']) && !validate_field($_POST['lastname'])){
                            ?>
                              <div class="invalid-feedback d-block">
                              Please enter valid last name.
                              </div>
                            <?php
                              }
                            ?>
                        </div>
                    </div>
                    
                    <div class="form-group mb-2">
                      <label class="form-label">Gender</label>
                      <div class="d-flex">
                          <div class="form-check">
                              <input type="radio" class="form-check-input" id="male" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Male') { echo 'checked'; } ?>>
                              <label class="form-check-label" for="male">Male</label>
                          </div>
                          <div class="form-check ms-3">
                              <input type="radio" class="form-check-input" id="female" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Female') { echo 'checked'; } ?>>
                              <label class="form-check-label" for="female">Female</label>
                          </div>
                          <div class="form-check ms-3">
                              <input type="radio" class="form-check-input" id="non-binary" name="gender" value="Non-binary" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Non-binary') { echo 'checked'; } ?>>
                              <label class="form-check-label" for="non-binary">Non-binary</label>
                          </div>
                      </div>
                      <?php
                        if((!isset($_POST['gender']) && isset($_POST['signup'])) || (isset($_POST['gender']) && !validate_field($_POST['gender']))){
                      ?>
                        <p class="text-danger my-1">Select your gender</p>
                      <?php
                      }
                      ?>
                    </div>
                    

                    <div class="form-group row">
                        <div class="col-sm-12 align-self-center my-2">
                            <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>">
                        <?php
                          $new_user = new Client();
                          if(isset($_POST['email'])){
                              $new_user->email = htmlentities($_POST['email']);
                          }else{
                              $new_user->email = '';
                          }

                          if(isset($_POST['email']) && strcmp(validate_field($_POST['email']), 'success') != 0){
                        ?>
                          <p class="text-danger my-1"><?php echo validate_field($_POST['email']) ?></p>
                        <?php
                          }else if ($new_user->is_email_exist() && $_POST['email']){
                        ?>
                          <div class="invalid-feedback d-block">
                          Email already exists
                          </div>
                        <?php      
                          }
                        ?>
                    </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12 align-self-center my-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>">
                      <?php
                        if(isset($_POST['password']) && validate_password($_POST['password']) !== "success"){
                      ?>
                        <p class="text-danger my-1"><?= validate_password($_POST['password']) ?></p>
                      <?php
                      }
                      ?>
                      </div>       
                    </div>


                    <div class="form-group row">
                      <div class="col-sm-12 align-self-center my-2">
                        <label for="confirmpassword">Confirm password</label>
                        <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Enter your password again" value="<?php if(isset($_POST['confirmpassword'])){echo $_POST['confirmpassword'];} ?>">
                        <?php
                        if(isset($_POST['password']) && isset($_POST['confirmpassword']) && !validate_cpw($_POST['password'], $_POST['confirmpassword'])){
                        ?>
                          <div class="invalid-feedback d-block">
                          Your confirm password didn't match
                          </div>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                    
                        
                    <div class="form-group row">
                      <div class="col-sm-12 align-self-center my-2">
                        <label for="phoneno">Phone Number</label>
                        <input type="number" step="any" class="form-control" name="phoneno" id="phoneno" placeholder="Enter your phone number" value="<?php if(isset($_POST['phoneno'])){echo $_POST['phoneno'];} ?>">
                      </div>

                      <?php
                      if(isset($_POST['phoneno']) && !validate_field($_POST['phoneno'])){
                      ?>
                        <div class="invalid-feedback d-block">
                          Please enter valid phone number.
                        </div>
                      <?php
                      }
                      ?>
                    </div>

                    <button type="submit" class="btn px-5 py-2 my-3" name="signup" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign Up</button>
                    
                  </form>
              </div>
          </div>
      </div>
  </div>
</body>
</html>