<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Home - Welcome to Purrpaws Veterinary Clinic';
    $book_page = 'active';
    require_once '../include/head.php';
?>

<body>
  <?php
    require_once '../include/header-user.php';
  ?>

  <main>
    <div class="container-fluid">
        <div class="row" id="emergency-care">
            <div class="col-lg-10 col-md-12 col-sm-12 my-5 text-white mx-auto d-flex justify-content-center">
                <div class="content col-lg-10 col-md-12 col-sm-12 my-5 mx-auto">
                    <div class="content-container col-lg-12 col-md-12 col-sm-12">
                        <h2 class="my-3">Emergency Care</h2>
                        <p class="d-flex">Our veterinary clinic specializes in providing urgent medical attention to pets facing critical health issues, including life-threatening conditions, injuries, and severe infections. Our dedicated team of veterinarians is ready to offer compassionate and skilled care for your beloved animals.</p>
                        <i class="icon fa-solid fa-location-dot col-12">   185 Don Alfaro St, Zamboanga City, Zamboanga del Sur</i>
                        <div class="butt my-3">
                          <a href="tel:+63275150836" class="btn">Emergency Check In Now</a>
                      </div>                          
                    </div>
                </div>
            </div>
        </div>

        <div class="urgent d-flex justify-content-center text-center">
          <h1>Emergency Services</h1>
          <p>Trust us to be your reliable partner in times of pet emergencies.</p>
        </div> 

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 my-3 text-white">
              <div class="cardibee position-relative">
                  <img src="./img/check-mark.png" alt="">
                  <h4 class="my-3">REQUIREMENTS</h4>
                  <p class="my-2">The things that you must not forget!</p>
                <div class="position-absolute bottom-0 end-0 my-4 mx-3">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Learn More</button>
                </div>

                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">WHAT TO BRING?</h5>
                        </div>
                        <div class="modal-body" style="max-height: 250px; overflow-y: auto;">
                          <p><strong>When bringing your pet to our veterinary clinic's emergency department, we recommend that you bring:</strong></p>
                          <p>1. A list of any medications your pet is currently taking.</p>
                          <p>2. Information about any known allergies your pet may have.</p>
                          <p>3. Copies of recent medical records or test results, if available.</p>
                          <p>4. Any specific care preferences or restrictions for your pet.</p>
                          <p>5. Contact information for a responsible adult or someone we can reach in case of emergency.</p>
                          <p>6. Your pet's vaccination records, if applicable, for their safety and the safety of other animals in the clinic.</p>
                          <h6 class="my-4">Don't forget this! Just think how much you love your pets.</h6>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
          </div>

        <div class="col-lg-4 col-md-6 col-sm-6 my-3 text-white">
          <div class="cardibee position-relative">
            <img src="./img/first-aid-kit.png" alt="">
            <h4 class="my-3">EMERGENCIES</h4>
            <p class="my-2">Triage system to prioritize cases based on urgency.</p>
            <div class="position-absolute bottom-0 end-0 my-4 mx-3">
              <button  type="button" class="btn" data-bs-toggle="modal" data-bs-target="#emergencyModal">Learn More</button>
            </div>

            <div class="modal fade" id="emergencyModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="emergencyModalLabel">EMERGENCY TREATMENT</h5>
                  </div>
                  <div class="modal-body" style="max-height: 250px; overflow-y: auto;">
                    <p><strong>Emergency conditions we treat:</strong></p>
                    <p>1. Trauma care</p>
                    <p>2. Toxicity and poisoning cases</p>
                    <p>3. Respiratory distress</p>
                    <p>4. Orthopedic injuries</p>
                    <p>5. Neurological issues</p>
                    <p>6. Cardiac emergencies</p>
                    <p>7. High or persistent temperatures</p>
                    <p>8. Seizure management</p>
                    <p>9. Critical infections</p>
                    <p>10. Pain management</p>
                    <p>11. Rehabilitation</p>
                    <h6 class="my-4">When patients arrive at our emergency room, they are triaged. This means that patients with severe injuries or serious conditions are seen before patients with less serious conditions.</h6>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 my-3 text-white mx-auto">
          <div class="cardibee position-relative">
            <img src="./img/pet-care.png" alt="">
            <h4 class="my-3">ER OFFERINGS</h4>
            <p class="my-3">When pet emergencies arise, immediate medical care is essential.</p>
            <div class="position-absolute bottom-0 end-0 my-4 mx-3">
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#careModal">Learn More</button>
            </div>
          </div>
        </div>

        <div class="modal fade" id="careModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="careModalLabel">WHAT OUR ER PROVIDES?</h5>
              </div>
              <div class="modal-body" style="max-height: 250px; overflow-y: auto;">
                  <p><strong>We take pride in offering convenient emergency care for pets of all ages.</strong></p>
                  <p>1. 10 fully monitored treatment rooms</p>
                  <p>2. A welcoming and well-designed environment</p>
                  <p>3. An intensive care unit with six private beds</p>
                  <p>4. Advanced veterinary care for critical situations</p>
                  <p>5. Board-certified emergency veterinarians</p>
                  <p>6. Experienced veterinary staff</p>
                  <p>7. Pet-friendly emergency care</p>
                  <p>8. Registered veterinary nurses</p>
                  <h6 class="my-4">Providing top-notch care for your beloved pets.</h6>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
              </div>
            </div>
          </div>
        </div>

        <div class="urgency d-flex justify-content-center text-center my-5">
          <h1>Our Story</h1>
          <p>Founded on compassion and expertise, the clinic prioritizes pets' well-being, offering cutting-edge medical care and building a community of pet lovers.</p>
        </div>

        <div class="row" id="emergency-fac">
          <div class="col-lg-6 col-md-12 col-sm-8 ml-4 my-5 d-flex justify-content-center">
            <img src="../img/emergency (5).png" class="d-block h-30 w-100" alt="...">
          </div>
          <div class="emergency-faci col-md-12 col-sm-10 col-lg-6 emergency-container my-5 text-white mx-auto">
            <h3 class="mt-5">Emergency Pet Care You Can Trust</h3>
            <p>Our dedicated team of experienced veterinarians and staff is always ready to handle a wide range of urgent situations. We value your trust and are committed to offering more than just medical care; we provide reassurance and unwavering support during challenging times. Your peace of mind is our priority, making us the reliable ally you can count on when your pet needs emergency assistance.</p>
          </div>
        </div>
      </div>   
  </main>

  <?php
    require_once('../include/user-footer.php')
  ?>
</body>
</html>