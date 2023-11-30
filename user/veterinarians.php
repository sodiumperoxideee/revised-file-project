<!DOCTYPE html>
<html lang="en">

<?php
  $title = 'Our Veterinarians';
  $aboutus_page = 'active';
  require_once '../include/head.php';
?>

<body>
  <?php
    require_once '../include/header-user.php';
  ?>
    <main>
        <div class="veterinarians-title">
          <div class="veterinarians text-white d-flex justify-content-center">
              <h1>About Us</h1>            
          </div>        
        </div>
  
        <div class="vet-content col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="row" id="clinic-facilities">
            <div class="col-lg-6 col-md-12 col-sm-8 ml-4 my-5 d-flex vet-pic">
              <img src="../img/veterinarians1.webp" class="d-block h-30 w-100" alt="...">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-8 mr-4 my-5 text-white">
              <h3 class="mt-5">Discover Our Pet-Care Passion</h3>
              <p>We're dedicated to promoting the health and happiness of your beloved pets. Our experienced team of veterinarians, groomers, and pet lovers treats every animal as if they were our own. We understand that pets are more than just animals; they are cherished members of your family, providing unconditional love and companionship. That's why, at PurrPaws, we treat every pet as if they were our own, ensuring they receive the care, attention, and compassion they deserve.</p>
            </div>
          </div>
      </div>
        
        <div class="container-board">
            <div class="board-flex justify-content-center">
                <h3>Our Veterinarians</h3>
            </div>
  
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 my-3">
                    <div class="rounded-circle text-center">
                        <img src="../img/veti2.png" class="img-fluid" alt="">
                        <p class="vet-name my-3 py-3 mx-5">Dr. Emily Johnson</p>
                        <p class="my-3 mx-5">Graduated from Colorado State University College of Veterinary Medicine and Biomedical Sciences</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 my-3">
                    <div class="rounded-circle text-center">
                        <img src="../img/veti4.jpg" class="img-fluid" alt="">
                        <p class="vet-name my-3 py-3 mx-5">Dr. James Anderson</p>
                        <p class="my-3 mx-5">Graduated from Cornell University College of Veterinary Medicine</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 my-3">
                    <div class="rounded-circle text-center">
                        <img src="../img/veti3.jpg" class="img-fluid" alt="">
                        <p class="vet-name my-3 py-3 mx-5">Dr. Olivia Davis</p>
                        <p class="my-3 mx-5">Graduated from University of Florida College of Veterinary Medicine</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 my-3">
                    <div class="rounded-circle text-center">
                        <img src="../img/veti1.jpg" class="img-fluid" alt="">
                        <p class="vet-name my-3 py-3 mx-5">Dr. Sophia Patel</p>
                        <p class="my-3 mx-5">Graduated from North Carolina State University College of Veterinary Medicine</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 my-3">
                    <div class="rounded-circle text-center">
                        <img src="../img/veti6.jpg" class="img-fluid" alt="">
                        <p class="vet-name my-3 py-3 mx-5">Dr. Samuel Roberts</p>
                        <p class="my-3 mx-5">Graduated from University of California, Davis School of Veterinary Medicine</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mx-auto my-3">
                    <div class="rounded-circle text-center">
                        <img src="../img/veti5.jpg" class="img-fluid" alt="">
                        <p class="vet-name my-3 py-3 mx-5">Dr. Isabella Lopez</p>
                        <p class="my-3 mx-5">Graduated from Texas A&M University College of Veterinary Medicine & Biomedical Sciences</p>
                    </div>
                </div>
            </div>
  
            <div class="urgent d-flex justify-content-center text-center">
              <h1>Our Milestones</h1>
              <p>Every milestone is a testament to our journey, a step closer to our vision, and a reminder of the incredible team that made it all possible.</p>
            </div>

            <div id="carouselExampleCaptions" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../img/animal-help.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../img/animal-help4.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../img/animal-help1.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../img/animal-help5.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../img/animal-help2.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../img/animal-help6.jpeg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-6 ml-4 my-5 mx-auto position-relative">
                  <img src="../img/veticap.jpg" class="img-veticap" alt="...">
                  <div class="journey my-3  d-flex justify-content-center text-center">
                    <h1 class="">Our Journey</h1>
                  </div>
                  <div class="overlay px-4">
                      <div class="overlay-content text-black text-center">
                          <p class="justified-p mt-5 mb-5">
                              Six dedicated veterinarians, Dr. James Anderson, Dr. Samuel Roberts, Dr. Emily Johnson, Dr. Olivia Davis, Dr. Sophia Patel, and Dr. Isabella Lopez, joined forces to establish a clinic with a mission to provide exceptional animal care. 
                              Their friendship grew as they worked tirelessly to create their first clinic.
                              With a commitment to excellence, they expanded, opening branches locally and internationally, overcoming challenges along the way.
                              Their clinics became beacons of hope, offering compassionate care and education on animal welfare.
                              Together, they turned their shared dream into a global reality, leaving a lasting legacy of friendship and compassion.
                          </p>                            
                      </div>
                  </div>
              </div>
          </div>         
        </div>
      </main>

      <?php
        require_once '../include/user-footer.php';
      ?>
</body>
</html>