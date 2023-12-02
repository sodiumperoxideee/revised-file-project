<?php
  session_start();

  if (!isset($_SESSION['user']) || $_SESSION['user'] != 'staff'){
      header('location: index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<?php
  $title = 'Account Profile';
  $accountprofile_page = 'active';
  include '../include/head.php';
?>

<body>
  <?php
    include '../include/header-logged-in-user.php';
    include '../classes/pet.class.php';
  ?>
  

  <div class="acc-history-container my-5 mx-5 px-5 py-3">
      
      <div class="settings-title mx-5 px-3 my-4">
      <h2>My Pet Information</h2>
      
      <div class="table-responsive overflow-hidden">
      <div id="table-container">
      <?php
          require_once '../classes/pet.class.php';
          require_once '../tools/functions.php';

          $pet = new Pet();
          $pet_id = 1; 
          $result = $pet->show($pet_id);


          $petArray = $pet->show();
          $counter = 1;
      ?>
          <table id="pet" class="table table-striped table-sm">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Pet ID</th>
                      <th scope="col">Pet Name</th>
                      <th scope="col">Type</th>
                      <th scope="col">Breed</th>
                      <th scope="col">Age</th>
                      <th scope="col">Gender</th>
                  </tr>
              </thead>
              <tbody id="apptTableBody">
          <?php
              if ($petArray) {
                  foreach ($petArray as $item) {
          ?>
                      <tr>
                          <td><?= $counter ?></td>
                          <td><?= $item['pet_id'] ?></td>
                          <td><?= $item['petname'] ?></td>
                          <td><?= $item['type'] ?></td>
                          <td><?= $item['breed'] ?></td>
                          <td><?= $item['age'] ?></td>
                          <td><?= $item['gender'] ?></td>
                      </tr>
          <?php
                      $counter++;
                  }
              }
          ?>
              </tbody>
          </table>
        </div>
     </div>
    </div>
  </div>

  <div class="acc-history-container my-5 mx-5 px-5 py-3">
    <h2>Account History</h2>
    <p>View your past bookings if applicable.</p>
    <table class="table">
      <thead>
          <tr>
              <th>Date and Time</th>
              <th>Service Type</th>
              <th>Status</th>
              <th>Vet</th>
              <th>Pet Health Record</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>2023-10-15 10:30 AM</td>
              <td>Checkup</td>
              <td>Upcoming</td>
              <td>Dr. Smith</td>
              <td>No File</td>
          </tr>
          <tr>
              <td>2023-09-25 03:15 PM</td>
              <td>Vaccination</td>
              <td>Completed</td>
              <td>Dr. Johnson</td>
              <td><a href="link_to_pet_health_record1.pdf" target="_blank"><img src="file-icon.png" alt="Pet Health Record" class="file-icon"></a></td>
          </tr>
          <tr>
              <td>2023-08-12 11:45 AM</td>
              <td>Surgery</td>
              <td>Completed</td>
              <td>Dr. Martinez</td>
              <td><a href="link_to_pet_health_record2.pdf" target="_blank"><img src="file-icon.png" alt="Pet Health Record" class="file-icon"></a></td>
          </tr>
          <tr>
              <td>2023-07-05 02:00 PM</td>
              <td>Grooming</td>
              <td>Completed</td>
              <td>Dr. Lee</td>
              <td><a href="link_to_pet_health_record3.pdf" target="_blank"><img src="file-icon.png" alt="Pet Health Record" class="file-icon"></a></td>
          </tr>
          <!-- Add more rows as needed -->
      </tbody>
  </table>
</div>


<?php
  include '../include/user-footer.php';
  include '../include/js.php';
?>

</body>
</html>