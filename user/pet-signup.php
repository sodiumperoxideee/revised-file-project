<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Your Pet Info';
    $signup_page = 'active';
    require_once '../include/head.php';
?>

<body>
  <?php
    require_once '../include/header-user.php';
  ?>

  <div class="signup mx-5 my-5">
            <h1 class="d-flex justify-content-center">Your Pet's Details</h1>
              <div class="pet-signup-container">
                  <form action="" method="post" class="signup-user">
                    <div class="form-group row">
                        <div class="col-sm-12 align-self-center my-2 form-check-inline">
                            <label for="petname">Pet Name</label>
                            <input type="petname" class="form-control" id="petname" name="petname" placeholder="Enter your pet's name" value="<?php if(isset($_POST['petname'])){echo $_POST['petname'];} ?>">
                            <?php
                              if(isset($_POST['petname']) && !validate_field($_POST)){
                            ?>
                              <div class="invalid-feedback d-block">
                              Please enter valid pet name.
                              </div>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="col-sm-12 align-self-center my-2 form-check-inline">
                            <label for="lastname">Last Name</label>
                            <input type="lastname" class="form-control" id="lastname" name="lastname" placeholder="Enter your last name" value="<?php if(isset($_POST['lastname'])){echo $_POST['lastname'];} ?>">
                            <?php
                              if(isset($_POST['signup']) && !validate_ln($_POST)){
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
                        if(isset($_POST['signup']) && !validate_gender($_POST)){
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
                        if(isset($_POST['signup']) && !validate_email($_POST)){
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
                      if(isset($_POST['signup']) && !validate_pw($_POST)){
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
                      if(isset($_POST['signup']) && !validate_cpw($_POST)){
                      ?>
                        <div class="invalid-feedback d-block">
                          Please re-enter valid password.
                        </div>
                      <?php
                      }
                      ?>
                    </div>


                    <div class="form-group row">
                      <div class="col-sm-12 align-self-center my-2">
                        <label for="phoneno">Phone Number</label>
                        <input type="tel" class="form-control" name="phoneno" id="phoneno" placeholder="Enter your phone number" value="<?php if(isset($_POST['phoneno'])){echo $_POST['phoneno'];} ?>">
                      </div>

                      <?php
                      if(isset($_POST['signup']) && !validate_phoneno($_POST)){
                      ?>
                        <div class="invalid-feedback d-block">
                          Please enter valid phone number.
                        </div>
                      <?php
                      }
                      ?>
                    </div>

                    <button type="submit" class="btn px-5 py-2 my-3" name="signup" value="signup" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign Up</button>
                    <!-- Button trigger modal -->
                    
                    <?php
                    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && validate_fn($_POST) && validate_ln($_POST) && validate_email($_POST) && validate_pw($_POST) && validate_cpw($_POST) && validate_phoneno($_POST)){
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