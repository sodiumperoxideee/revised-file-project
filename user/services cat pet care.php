<!DOCTYPE html>
<html lang="en">
<?php
  $title = 'Services: Pet Care for Cats';
  $aboutus_page = 'active';
  require_once '../include/head.php';
?>

<body>
  <?php
    require_once '../include/header-user.php';
  ?>
  

  <section class="services-body cat">
    <section class="services d-flex justify-content-center">
      <h1 class="my-4">Our Services</h1>
    </section>
    
    <section class="services-container mx-5">
      <div class="services-nav py-1">
        <a class="nav-link active my-1" aria-current="page" href="services cat pet care.php">Pet Care</a>
        <a class="nav-link my-1" aria-current="page" href="services cat emergency care.php">Emergency Care</a>
      </div>
      <div class="services-nav mt-2 py-1">
        <a class="nav-link my-1" aria-current="page" href="services dog pet care.php">For Dogs</a>
        <a class="nav-link active my-1" aria-current="page" href="services cat pet care.php">For Cats</a>
      </div>
    </section>

    <section class="pet-care-dogs my-3 py-5 px-5">
      <div class="row mx-auto">
      <h1>Pet Care Services for Cats</h1>
      <div class="col mt-3">
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/catwell.jpg" alt="Our Services">
          <div class="card-body">
            <h5 class="card-title">Wellness Check-up</h5>
            <p class="card-text">Routine veterinary visits to assess your cat's overall health, monitor, and administer preventive care.</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱350</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/trauma.png" alt="Our Services">
          <div class="card-body">
            <h5 class="card-title">Parasite Prevention</h5>
            <p class="card-text">Treatment for dogs involved in accidents, falls, or any traumatic injuries.</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱550</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/res.jpg" alt="Our Services">
          <div class="card-body">
            <h5 class="card-title">Respiratory Support</h5>
            <p class="card-text">Assistance for dogs with breathing difficulties: oxygen therapy, intubation, and ventilator support.</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱500</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/cardiology.jpg" alt="Our Services">
          <div class="card-body">
            <h5 class="card-title">Cardiac Care</h5>
            <p class="card-text">For heart-related emergencies: arrhythmias, congestive heart failure, or cardiac arrest.</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱250</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
      </div>
      <div class="col mt-3">
        <div class="card my-3">
          <img class="card-img-top" src="../img/catVaccinations.jpg" alt="Our Vets">
          <div class="card-body">
            <h5 class="card-title">Vaccinations</h5>
            <p class="card-text">Essential vaccinations: feline distemper (panleukopenia) and feline leukemia virus (FeLV).</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱1,650</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/allrec.jpg" alt="Our Services">
          <div class="card-body">
            <h5 class="card-title">Allergic Reactions</h5>
            <p class="card-text">Preventative measures against fleas, ticks, heartworm, and intestinal worms.</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱500</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/seiz.jpg" alt="Our Services">
          <div class="card-body">
            <h5 class="card-title">Seizure Management</h5>
            <p class="card-text">Evaluation and management of seizures: administering medications to stop prolonged seizures.</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱350</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/GastrointestinalEmergencies.jpg" alt="Our Services">
          <div class="card-body">
            <h5 class="card-title">Gastrointestinal Emergencies</h5>
            <p class="card-text">Care for dogs with gastric dilation volvulus, severe diarrhea, etc.</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱250</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
      </div>
      <div class="col mt-3">
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/catdental.webp" alt="Clinic Facilities">
          <div class="card-body">
            <h5 class="card-title">Dental Care</h5>
            <p class="card-text">Services such as dental cleanings, tooth extractions, and treatments for dental issues like gingivitis.</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱700</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/Wound Care and Surgery.jpg" alt="Clinic Facilities">
          <div class="card-body">
            <h5 class="card-title">Wound Care and Surgery</h5>
            <p class="card-text">Cleaning and suturing wounds, performing emergency surgeries, and managing injuries from bites.</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱250</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/Fracture Management.png_-_en" alt="Clinic Facilities">
          <div class="card-body">
            <h5 class="card-title">Fracture Management</h5>
            <p class="card-text">Stabilizing and treating broken bones or fractures, which may involve splints, casts, or surgery.</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱1,400</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/Blood Transfusions.jpg_-_en" alt="Clinic Facilities">
          <div class="card-body">
            <h5 class="card-title">Blood Transfusions</h5>
            <p class="card-text"> For dogs with severe anemia or blood clotting disorders; emergency blood transfusions.</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱100</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
      </div>
      <div class="col mt-3">
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/spaying-cat_De-Visu_Shutterstock.jpg" alt="Contact Us">
          <div class="card-body">
            <h5 class="card-title">Spaying/Neutering</h5>
            <p class="card-text">Surgical procedures to control the pet population and provide health benefits.</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱1,500</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/Fluid Therapy.jpg" alt="Contact Us">
          <div class="card-body">
            <h5 class="card-title">Fluid Therapy</h5>
            <p class="card-text">Treatments to control and eliminate intestinal parasites. Your dog will get healthy and feel better.</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱650</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/Intravenous Medications.jpg" alt="Contact Us">
          <div class="card-body">
            <h5 class="card-title">Intravenous Medications</h5>
            <p class="card-text">Administered to dogs to quickly deliver essential drugs during critical situations.</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱350</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
        <div class="card my-3" style="width: 18rem;">
          <img class="card-img-top" src="../img/head.jpg" alt="Contact Us">
          <div class="card-body">
            <h5 class="card-title">Neurological Emergencies</h5>
            <p class="card-text">Addressing seizures, head trauma, or other neurological issues requiring urgent care.</p>
            <p><a href="../users/clinic-facilities.php">View Facilities</a></p>
            <h5>₱450</h5>
            <a href="#" class="btn px-3 py-2">Book an Appointment</a>
          </div>
        </div>
      </div>
    </div>
    </section>
  </section>

  <?php
    require_once '../include/user-footer.php';
  ?>
</body>
</html>