<?php

  session_start();

  if(isset($_SESSION['user']) && $_SESSION['user'] == 'client'){
      header('location: ./index.php');
  }

  require_once '../classes/client.class.php';
  require_once '../classes/pet.class.php';
  require_once '../tools/functions.php';

  if(isset($_POST['pet-signup'])){
    $pet = new Pet();
    //sanitize
    $pet->petname = htmlentities($_POST['petname']);
    $pet->type = isset($_POST['type']) ? htmlentities($_POST['type']) : '';
    $pet->breed = htmlentities($_POST['breed']);
    $pet->age = htmlentities($_POST['age']);
    $pet->gender = isset($_POST['gender']) ? htmlentities($_POST['gender']) : '';

    //validate inputs of the users
    if (validate_field($pet->petname) && 
    validate_field($pet->type) &&
    validate_field($pet->breed) &&
    validate_field($pet->age) &&
    validate_field($pet->gender)){
        //proceed with saving
        if($pet->add()){ 
            header('location: login.php');
            echo "<script>alert('Your pet's info has been successfully saved!');window.location.href='index.php'</script>";
        }else{
          echo 'An error occured while adding in the database.';
        }
    }
    var_dump($pet);
  }
?>

<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Sign your pet up';
    $signup_page = 'active';
    require_once '../include/head.php';
    require_once '../include/js.php';
    require_once '../tools/functions.php';
?>

<body>
  <?php
    require_once '../include/header-user.php';
  ?>

  <div class="signup my-5 mx-5">
      <div class="pet-signup-container">
          <h1 class="mb-4">Pet's Information</h1>
              <form action="" method="POST" class="signup-user">
                <div class="form-group row">
                  <div class="form-group mb-2">
                    <div class="col-sm-12 align-self-center my-2 form-check-inline">
                      <label for="petname">Pet Name</label>
                      <input type="text" class="form-control" id="petname" name="petname" placeholder="Enter your pet's name" value="<?php if(isset($_POST['petname'])){echo $_POST['petname'];} ?>">
                      <?php
                        if(isset($_POST['petname']) && !validate_field($_POST['petname'])){
                      ?>
                        <div class="invalid-feedback d-block">
                        Please enter valid pet name.
                        </div>
                      <?php
                          }
                      ?>
                    </div>
                  </div>

                  <div class="form-group mb-2">
                    <label class="form-label">Pet Type</label>
                    <div class="d-flex">
                      <div class="form-check">
                          <input type="radio" class="form-check-input" id="dog" name="type" value="Dog" <?php if(isset($_POST['type']) && $_POST['type'] == 'Dog') { echo 'checked'; } ?>>
                          <label class="form-check-label" for="dog">Dog</label>
                      </div>
                      <div class="form-check ms-3">
                          <input type="radio" class="form-check-input" id="cat" name="type" value="Cat" <?php if(isset($_POST['type']) && $_POST['type'] == 'Cat') { echo 'checked'; } ?>>
                          <label class="form-check-label" for="type">Cat</label>
                      </div>
                      <?php
                        if((!isset($_POST['type']) && isset($_POST['signup'])) || (isset($_POST['type']) && !validate_field($_POST['type']))){
                      ?>
                        <p class="text-danger my-1">Select your pet's type</p>
                      <?php
                      }
                      ?>
                    </div>
                  </div>
                    
                  <div class="form-group mb-2">
                    <div class="col-sm-12 align-self-center my-2 form-check-inline">
                        <label for="breed">Breed</label>
                        <input type="text" class="form-control" id="breed" name="breed" placeholder="Enter your pet's breed" value="<?php if(isset($_POST['breed'])){echo $_POST['breed'];} ?>">
                        <?php
                          if(isset($_POST['breed']) && !validate_field($_POST['breed'])){
                        ?>
                          <div class="invalid-feedback d-block">
                          Please enter valid pet breed.
                          </div>
                        <?php
                            }
                        ?>
                    </div>
                  </div>

                  <div class="form-group mb-2">
                    <div class="col-sm-12 align-self-center my-2 form-check-inline">
                      <label for="age">Age</label>
                      <input type="number" min="0" class="form-control" name="age" id="age" placeholder="How many months old is your pet?" value="<?php if(isset($_POST['age'])){echo $_POST['age'];} ?>">
                    
                      <?php
                      if(isset($_POST['age']) && !validate_field($_POST['age'])){
                      ?>
                        <div class="invalid-feedback d-block">
                          Please enter valid pet's age.
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
                    </div>
                    <?php
                      if((!isset($_POST['gender']) && isset($_POST['signup'])) || (isset($_POST['gender']) && !validate_field($_POST['gender']))){
                    ?>
                      <p class="text-danger my-1">Select your pet's gender</p>
                    <?php
                    }
                    ?>
                  </div>

                  <button type="submit" class="btn py-2 my-3" name="pet-signup" id="pet-signup" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Submit</button>
                </div> 
              </form>
          </div>
      </div>
      </div>
  </div>
</body>
</html>