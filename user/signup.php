<?php

    session_start();

    if(isset($_SESSION['user']) && $_SESSION['user'] == 'user'){
        header('location: ./index.php');
    }

    require_once '../classes/user.class.php';
    require_once '../tools/functions.php';

    if(isset($_POST['save'])){
        $user = new User();
        //sanitize
        $user->firstname = htmlentities($_POST['firstname']);
        $user->lastname = htmlentities($_POST['lastname']);
        $user->gender = htmlentities($_POST['gender']);
        $user->email = htmlentities($_POST['email']);
        $user->password = htmlentities($_POST['password']);
        $user->phoneno = htmlentities($_POST['phoneno']);

        //validate inputs of the users
        if (validate_field($user->firstname) && 
        validate_field($user->lastname) &&
        validate_field($user->gender) &&
        validate_field($user->email) &&
        validate_field($user->password) && validate_password($user->password) &&
        validate_field($user->phoneno)){
            //proceed with saving
            if($user->add()){
                header('location: login.php');
                $message = 'You successfully created an account!';
            }else{
                echo 'Something went wrong in creating your account.';
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
              <a href="login.html" class="btn px-5 py-1 align-self-center">Login</a>
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
                    
                    <div class="col-sm-12 align-self-center mt-2">
                      <p class="my-0">Gender:</p>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="gender_male" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] === 'male') echo 'checked'; ?>>
                          <label class="form-check-label" for="gender_male">Male</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="gender_female" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] === 'female') echo 'checked'; ?>>
                          <label class="form-check-label" for="gender_female">Female</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="gender_others" value="others" <?php if(isset($_POST['gender']) && $_POST['gender'] === 'others') echo 'checked'; ?>>
                          <label class="form-check-label" for="gender_others">Others</label>
                      </div>
                      <?php
                        if(isset($_POST['gender']) && !validate_field($_POST['gender'])){
                      ?>
                        <div class="invalid-feedback d-block">
                        Please select valid gender.
                        </div>
                      <?php
                        }
                      ?>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 align-self-center my-2">
                            <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>">
                        <?php
                        if(isset($_POST['email']) && !validate_field($_POST['email'])){
                        ?>
                          <div class="invalid-feedback d-block">
                          Please enter valid email.
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
                      </div>

                      <?php
                      if(isset($_POST['password']) && !validate_password  ($_POST['password']) !== "success"){
                      ?>
                        <div class="invalid-feedback d-block">
                          Please enter valid password.
                        </div>
                      <?php
                      }
                      ?>
                    </div>


                    <div class="form-group row">
                      <div class="col-sm-12 align-self-center my-2">
                        <label for="confirmpassword">Confirm password</label>
                        <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Enter your password again" value="<?php if(isset($_POST['confirmpassword'])){echo $_POST['confirmpassword'];} ?>">
                      </div>

                      <?php
                      if(isset($_POST['password']) && isset($_POST['confirmpassword']) && !validate_password($_POST['password'], $_POST['confirmpassword'])){
                      ?>
                        <div class="invalid-feedback d-block">
                        Your confirm password didn't match
                        </div>
                      <?php
                      }
                      ?>
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

                    <button type="submit" class="btn px-5 py-2 my-3" name="save" value="save" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign Up</button>
                    <!-- Button trigger modal -->
                    
                    <?php
                    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['gender']) && isset($_POST['email']) && validate_field($_POST['firstname']) &&
                     validate_field($_POST['lastname']) && validate_field($_POST['gender']) && validate_field($_POST)['email'] && validate_field($_POST['password']) && validate_password($_POST['password']) && validate_phoneno($_POST['phoneno'])){
                    ?>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Request for appointment has been successful</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Thank you for choosing Purrpaws. Your confirmation details will be sent via email.
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <?php 
                    }
                    ?>
                  </form>
              </div>
          </div>
      </div>
  </div>
</body>
</html>