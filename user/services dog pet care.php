<!DOCTYPE html>
<?php
    $title = 'Services: Pet Care for Dogs';
    $aboutus_page = 'active';
    require_once '../include/head.php';
?>

<body>
  <?php
    require_once '../include/header-user.php';
  ?>
  

  <section class="services-body">
    <div class="bg-container">
    
    </div>
    <section class="services d-flex justify-content-center">
      <h1 class="my-4">Our Services</h1>
    </section>
    
    <section class="services-container mx-5">
      <div class="services-nav py-1">
        <a class="nav-link active my-1" aria-current="page" href="services dog pet care.php">Pet Care</a>
        <a class="nav-link my-1" aria-current="page" href="services dog emergency care.php">Emergency Care</a>
      </div>
      <div class="services-nav mt-2 py-1">
        <a class="nav-link active my-1" aria-current="page" href="services dog pet care.php">For Dogs</a>
        <a class="nav-link my-1" aria-current="page" href="services cat pet care.php">For Cats</a>
      </div>
    </section>

    <section class="pet-care-dogs my-3 py-5 px-5">
      <div class="row mx-auto">
      <h1>Pet Care Services for Dogs</h1>
      <div class="col mt-3">
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/grooming.webp" alt="Our Services">
          <div class="card-body">
            <h5 class="card-title">Grooming</h5>
            <p class="card-text">Basic grooming services such as baths, haircuts, nail trims, and ear cleaning.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱350</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/vax.jpg" alt="Our Services">
          <div class="card-body">
            <h5 class="card-title">Vaccinations</h5>
            <p class="card-text">Essential vaccines for common canine diseases, including rabies, distemper, parvovirus, and others.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱1,500</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/rehab.jpg" alt="Our Services">
          <div class="card-body">
            <h5 class="card-title">Rehabilitation Services</h5>
            <p class="card-text">Physical therapy and rehabilitation for dogs recovering from injuries or surgeries.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱2,500</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/lab_services.jpg" alt="Our Services">
          <div class="card-body">
            <h5 class="card-title">Laboratory Services</h5>
            <p class="card-text">Comprehensive blood tests and diagnostic screenings to detect underlying conditions.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱500</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
      </div>
      <div class="col mt-3">
        <div class="card my-3">
          <img class="card-img-top" src="../img/wellness.jpg" alt="Our Vets">
          <div class="card-body">
            <h5 class="card-title">Wellness Check-up</h5>
            <p class="card-text">Routine veterinary visits for overall health assessments, preventive care, and vaccinations.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱350</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/para.jpg" alt="Our Services">
          <div class="card-body">
            <h5 class="card-title">Parasite Prevention</h5>
            <p class="card-text">Preventative measures against fleas, ticks, heartworm, and intestinal worms.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱550</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/puppycare.jpg" alt="Our Services">
          <div class="card-body">
            <h5 class="card-title">Puppy Care</h5>
            <p class="card-text">Specialized care for young puppies, including vaccinations, socialization, and training.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱750</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div><div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/painmanagement.jpg" alt="Our Services">
          <div class="card-body">
            <h5 class="card-title">Pain Management</h5>
            <p class="card-text">Treatment and medications to alleviate pain and discomfort in dogs.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱250</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
      </div>
      <div class="col mt-3">
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/dental.jpg" alt="Clinic Facilities">
          <div class="card-body">
            <h5 class="card-title">Dental Care</h5>
            <p class="card-text">Services such as dental cleanings, extractions, and treatments for dental issues like gum disease.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱600</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/diet.webp" alt="Clinic Facilities">
          <div class="card-body">
            <h5 class="card-title">Nutrition & Diet Counseling</h5>
            <p class="card-text">Guidance on suitable diets and nutrition plans tailored to the dog's specific needs.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱200</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/seniordogcare.jpg" alt="Clinic Facilities">
          <div class="card-body">
            <h5 class="card-title">Senior Dog Care</h5>
            <p class="card-text">Tailored for older dogs: health monitoring, pain management, and dietary adjustments.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱300</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/allergy.jpg" alt="Clinic Facilities">
          <div class="card-body">
            <h5 class="card-title">Allergy Testing and Treatment</h5>
            <p class="card-text">Identification and management of allergies and skin conditions.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱500</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
      </div>
      <div class="col mt-3">
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/spay.jpg" alt="Contact Us">
          <div class="card-body">
            <h5 class="card-title">Spaying/Neutering</h5>
            <p class="card-text">Surgical procedures to control the pet population and provide health benefits.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱1,000</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/deworm.webp" alt="Contact Us">
          <div class="card-body">
            <h5 class="card-title">Deworming</h5>
            <p class="card-text">Treatments to control and eliminate intestinal parasites. Your dog will get healthy and feel better.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱380</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/xray.jpg" alt="Contact Us">
          <div class="card-body">
            <h5 class="card-title">X-rays and Imaging</h5>
            <p class="card-text">Diagnostic imaging for detecting and diagnosing internal health issues.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱500</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/hospice.jpg" alt="Contact Us">
          <div class="card-body">
            <h5 class="card-title">Hospice and End-of-Life Care</h5>
            <p class="card-text">Compassionate care and support for dogs with terminal illnesses.</p>
            <p><a href="../user/clinic-facilities.php">View Facilities</a></p>
            <h5>₱250</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
      </div>
    </div>
    </section>
  </section>
</body>
<?php
    require_once '../include/user-footer.php';
  ?>
</html>