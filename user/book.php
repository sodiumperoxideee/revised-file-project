<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Book Now!';
    $book_page = 'active';
    require_once('../include/head.php');
?>

<body>
    <?php
        require_once('../include/header-user.php')
    ?>
    
    <main>
        <div class="booking-title">
            <div class="booking-title-text text-white">
                <h1>Pet Care Booking</h1>
                <p class="mx-auto">Quality Care at Your Fingertips – Book Now</p>
            </div>        
        </div>

        <div class="facilities d-flex justify-content-center text-center pb-3">
            <h1>Services</h1>
            <P>Choose a service you want; you can optionally select options.</P>
        </div>

        <form class="booking-body">
                <div class="booking-container mb-2 px-5 pb-5">
                    <div class="book-services-title my-5 mb-2">
                        <h4>Choose from any of our services</h4>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="Wellness Check-up" aria-label="...">
                                    Wellness Check-up
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Vaccination
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Grooming
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Dental Care
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Spaying
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Neutering
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Parasite Prevention
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Deworming
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Rehabilitation Services
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Puppy Care
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Senior Dog Care
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    X-rays and Imaging
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Laboratory Services
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Pain Management
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Allergy Testing and Treatment
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Hospice and End-of-Life Care
                                </li>
                            </ul>
                        </div>
                        <a href="services dog pet care.php" class="mt-4" style="color: #6b9cac; text-decoration: none; text-align: end;">Learn More</a>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
                        <div class="booking-container mb-2 px-5 py-5">
                            <h4>Choose a schedule</h4>
                            <div class="form-group mb-3 mt-1 col-lg-4 col-md-12 col-sm-12 mx-auto">
                                <label for="appointmentDate">Appointment Date</label>
                                <input type="date" class="form-control" id="appointmentDate" required>
                            </div>
                            <div class="form-group mb-3 col-lg-4 col-md-12 col-sm-12 mx-auto">
                                <label for="appointmentTime">Appointment Time</label>
                                <input type="time" class="form-control" id="appointmentTime" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="facilities d-flex justify-content-center text-center pb-3">
                    <h1>Veterinarians</h1>
                    <P>Choose what you want; you can optionally select options.</P>
                </div>

                <div class="booking-container mb-5 px-5 pb-5">            
                    <div class="book-services-title my-5 mb-2">
                        <h4>Choose a Vet</h4>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Dr. Emily Johnson
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Dr. James Anderson
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Dr. Olivia Davis
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Dr. Sophia Patel
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Dr. Samuel Roberts
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Dr. Isabella Lopez
                                </li>
                            </ul>
                        </div>
                        <a href="vet.php" class="mt-4" style="color: #67b2c9; text-decoration: none; text-align: end;">Learn More</a>
                    </div>
                </div>
                
                <input class="btn px-5 py-2 my-3" type="submit" value="Submit Appointment" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
                        <button type="button" class="btn btn-primary"><a href="account history.php" class="text-decoration-none" style="color: white;">View Activity</button>
                        </div>
                    </div>
                    </div>
                </div>
        </form>
    </main>
</body>

    <?php
        require_once('../include/user-footer.php')
    ?>
</html>