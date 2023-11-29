<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Our Clinic Facilities';
    require_once '../include/head.php';
?>

<body>
    <?php
        require_once '../include/header-user.php';
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="fluid">
            <div class="fluid-square">
                <h1>Specialized animal healthcare at PurrPaws.</h1>
                <p>Our clinic offers a wide range of services, including check-ups, surgeries, and emergency care for pets and sometimes livestock. Staffed by experienced professionals, they provide a clean environment and advanced equipment for animal health. Some also offer grooming, boarding, and nutritional advice for pets, making them a one-stop destination for pet owners seeking expert care.</p>
                <p><span >Address: 185 Don Alfaro St, Zamboanga City, Zamboanga del Sur</span></p>
            </div>
            </div> 
        </div>

        <div class="facilities d-flex justify-content-center text-center">
            <h1>Facilities</h1>
            <p>PurrPaws Clinic boasts a comprehensive range of specialized facilities designed to cater to your pets' health needs.</p>
        </div>

        <div class="row clinic-facilities">
            <div class="col-lg-4 col-md-6 col-sm-6 my-3">
                <div class="container-card">
                <img src="../img/receivingarea.jpg" class="d-block w-100" alt="...">
                <p class="my-3 text-center">Receiving Area</p>
                <button class="learn-more-btn btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#receiving">Learn More</button>
                </div>

                <div class="modal fade" id="receiving" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="receivingModalLabel">WHAT OUR RECEIVING AREA PROVIDES?</h5>
                        </div>
                        <div class="modal-body" style="max-height: 250px; overflow-y: auto;">
                            <p>In the receiving area of PurrPaws Veterinary Clinic, you can expect a warm, efficient, and welcoming environment. The friendly and knowledgeable staff ensures a smooth check-in process and clear communication about your pet's needs. The comfortable waiting area, pet-friendly amenities, and educational resources create a soothing atmosphere for both pets and their owners. Above all, you'll receive empathetic support, making your pet's visit as stress-free and comfortable as possible. PurrPaws Veterinary Clinic prioritizes the well-being of your furry friends from the moment you arrive.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
                        </div>
                        </div>
                    </div>
                </div>            
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-6 my-3">
                <div class="container-card">
                    <img src="../img/exam_room.jpg" class="d-block h-30 w-100" alt="...">
                    <p class="my-3 text-center">Examination Room</p>
                    <button class="learn-more-btn btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#examination">Learn More</button>
                </div>

                <div class="modal fade" id="examination" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="examinationModalLabel">WHAT OUR EXAMINATION PROVIDES?</h5>
                        </div>
                        <div class="modal-body" style="max-height: 250px; overflow-y: auto;">                
                            <p>The Examination Room at PurrPaws Veterinary Clinic offers comprehensive care for your pets. Expect thorough physical examinations, advanced diagnostic tools, and skilled veterinarians. We provide timely and accurate diagnoses and create tailored treatment plans. Our compassionate team ensures a calm environment, and we offer ongoing support for your pet's health. At PurrPaws, your pet's well-being is our top priority.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
                        </div>
                        </div>
                    </div>
                </div>            
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 my-3">
            <div class="container-card">
                <img src="../img/treatment_room.jpg" class="d-block h-30 w-100" alt="...">
                <p class="my-3 text-center">Treatment Room</p>
                <button class="learn-more-btn btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#treatment">Learn More</button>
            </div>

            <div class="modal fade" id="treatment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="treatmentModalLabel">WHAT OUR TREATMENT PROVIDES?</h5>
                        </div>
                        <div class="modal-body" style="max-height: 250px; overflow-y: auto;">                          
                            <p>In the Treatment Room of PurrPaws Veterinary Clinic, you can expect top-notch care for your pets. Skilled veterinary professionals provide customized treatment plans using advanced medical equipment. The room is equipped for pain management, rehabilitation, and continuous monitoring. Compassionate care is at the forefront of every procedure, and thorough follow-up ensures your pet's ongoing health and well-being. Your pets are in capable and caring hands at PurrPaws Veterinary Clinic, where their health and happiness are the top priorities.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
                        </div>
                    </div>
                </div>
            </div>          
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 my-3">
            <div class="container-card">
                <img src="../img/infectious.jpg" class="d-block h-30 w-100" alt="...">
                <p class="my-3 text-center">Infectious or Non-Infectious Ward</p>
                <button class="learn-more-btn btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#InfectiousOrNonInfectiousWard">Learn More</button>
            </div>

            <div class="modal fade" id="InfectiousOrNonInfectiousWard" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="InfectiousOrNonInfectiousWardModalLabel">WHAT OUR INFECTIOUS OR NON-INFECTIOUS WARD PROVIDES?</h5>
                        </div>
                        <div class="modal-body" style="max-height: 250px; overflow-y: auto;">
                            <p>In the Infectious or Non-Infectious Ward of PurrPaws Veterinary Clinic, expect a specialized and compassionate environment. Contagious pets are isolated with strict hygiene measures, while non-contagious cases receive specialized care. The staff is dedicated and trained, and all pets receive tailored care plans, continuous monitoring, and treatments. Comfort, support, and regular updates for pet owners are a priority. PurrPaws Veterinary Clinic ensures the health and safety of all pets, providing professional and compassionate care for their recovery and well-being. Your pet's health is in trusted hands at PurrPaws.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
                        </div>
                    </div>
                </div>
            </div>          
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 my-3">
            <div class="container-card">
                <img src="../img/isol.jpg" class="d-block h-30 w-100" alt="...">
                <p class="my-3 text-center">Isolation Room</p>
                <button class="learn-more-btn btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#isolationroom">Learn More</button>
            </div>

            <div class="modal fade" id="isolationroom" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="isolationroomModalLabel">WHAT OUR ISOLATION ROOM PROVIDES?</h5>
                        </div>
                        <div class="modal-body" style="max-height: 250px; overflow-y: auto;">            
                            <p>In PurrPaws Veterinary Clinic's Isolation Room, expect a specialized and controlled environment for pets with contagious illnesses or specific medical conditions. The room is staffed by highly trained professionals who prioritize hygiene and sanitation. Each pet receives a tailored care plan, continuous monitoring, and treatment. Comfort and emotional support are provided to reduce stress. Pet owners receive regular updates, ensuring transparency and involvement in their pet's care. The Isolation Room at PurrPaws Veterinary Clinic prioritizes the health and safety of all patients, offering professional and compassionate care for their recovery and well-being. Your pet's health is in trusted hands at PurrPaws.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
                        </div>
                    </div>
                </div>
            </div>          
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 my-3">
            <div class="container-card">
                <img src="../img/xray_2.jpg" class="d-block h-30 w-100" alt="...">
                <p class="my-3 text-center">Xray and Ultrasound Room</p>
                <button class="learn-more-btn btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#XrayAndUltrasoundRoom">Learn More</button>
            </div>
        </div>

        <div class="modal fade" id="XrayAndUltrasoundRoom" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="XrayAndUltrasoundRoomModalLabel">WHAT OUR XRAY AND ULTRASOUND ROOM PROVIDES?</h5>
                    </div>
                    <div class="modal-body" style="max-height: 250px; overflow-y: auto;">
                        <p>In PurrPaws Veterinary Clinic's X-ray and Ultrasound Room, expect a technologically advanced diagnostic facility specializing in imaging services for pets. Skilled technicians use state-of-the-art equipment to provide accurate and non-invasive imaging, ensuring the comfort and well-being of your pet. Services include X-rays, ultrasounds, and various diagnostic tests, leading to detailed and precise diagnoses. Quick results enable timely treatment plans tailored to your pet's specific needs, with the ultimate goal of enhancing their overall well-being. Your pet's health is the top priority at PurrPaws Veterinary Clinic's X-ray and Ultrasound Room, where advanced technology and compassionate care come together for your beloved companion.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-6 col-sm-6 my-3">
            <div class="container-card">
                <img src="../img/lab2_2.jpg" class="d-block h-30 w-100" alt="...">
                <p class="my-3 text-center">Laboratory</p>
                <button class="learn-more-btn btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#laboratory">Learn More</button>
            </div>

            <div class="modal fade" id="laboratory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="laboratoryModalLabel">WHAT OUR LABORATORY PROVIDES?</h5>
                        </div>
                        <div class="modal-body" style="max-height: 250px; overflow-y: auto;">                          
                            <p>In the Laboratory at PurrPaws Veterinary Clinic, expect a state-of-the-art diagnostic facility staffed by skilled technicians. Advanced equipment enables a wide range of diagnostic tests, including blood work, urinalysis, and fecal examinations, with rapid results. Precise diagnoses and monitoring of chronic conditions are priorities, supporting timely and informed treatment plans. The laboratory is crucial in emergency situations and provides client education to empower pet owners with a deeper understanding of their pet's health. PurrPaws Veterinary Clinic's laboratory combines precision, efficiency, and a commitment to your pet's well-being, ensuring they receive the best possible care.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 mx-auto my-3">
            <div class="container-card">
                <img src="../img/surgery_2.jpg" class="d-block h-30 w-100" alt="...">
                <p class="my-3 text-center">Surgery Room</p>
                <button class="learn-more-btn btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#surgeryroom">Learn More</button>
            </div>
        
            <div class="modal fade" id="surgeryroom" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="surgeryroomModalLabel">WHAT OUR SURGERY ROOM PROVIDES?</h5>
                        </div>
                        <div class="modal-body" style="max-height: 250px; overflow-y: auto;">
                            <p>In PurrPaws Veterinary Clinic's Surgery Room, expect a sterile and dedicated environment where skilled veterinarians and surgical staff perform a wide range of procedures with precision and care. The facility is equipped with advanced surgical equipment and follows strict hygiene protocols. The experienced team prioritizes safety, anesthesia, and post-operative care. Surgery is tailored to your pet's needs, with compassionate support throughout. Clear communication with pet owners and post-operative rehabilitation services are provided. PurrPaws Veterinary Clinic ensures the safety and well-being of your pets during surgical interventions, aiming for successful outcomes and a healthy recovery.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
                
        <div class="col-lg-4 col-md-6 col-sm-6 mx-auto my-3">
            <div class="container-card">
                <img src="../img/icu_2.jpg" class="d-block h-30 w-100" alt="...">
                <p class="my-3 text-center">Intensive Care</p>
                <button class="learn-more-btn btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#intensivecare">Learn More</button>
            </div>
        
            <div class="modal fade" id="intensivecare" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="careModalLabel">WHAT OUR ER PROVIDES?</h5>
                        </div>
                        <div class="modal-body" style="max-height: 250px; overflow-y: auto;">
                            <p>In PurrPaws Veterinary Clinic's Intensive Care Unit (ICU), expect a highly specialized and 24/7 monitored environment dedicated to the critical care of pets facing severe medical conditions or emergencies. Skilled veterinarians and technicians provide individualized treatment plans, advanced monitoring, and pain management. The ICU is equipped to handle emergencies, offering transparent communication with pet owners and emotional support during challenging times. PurrPaws Veterinary Clinic's ICU prioritizes immediate well-being and recovery, ensuring the best possible outcomes for pets in critical situations. Your pet is in capable and compassionate hands at PurrPaws.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
                        </div>                    
                    </div>
                </div>
            </div> 
        </div>

        <div class="loc d-flex justify-content-center text-center">
            <h1>Locate Us</h1>
            <p>Our central and accessible location ensures that you can reach us effortlessly for the best care of your pets.</p>
        </div>

        <div class="map-container">
            <div class="row">
                <div class="col-12 col-sm-3 col-md-9 offset-sm-3 col-lg-8 offset-lg-2">
                    <div class="location d-flex justify-content-center">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8523209897908!2d122.07160484658277!3d6.9082560544242035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3250414e1f428311%3A0xbc1f780ff572d1e6!2sPerro%20Y%20Gato%20Veterinary%20Clinic!5e0!3m2!1sen!2sph!4v1696705509332!5m2!1sen!2sph" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    </div>
                </div>
            </div>
        </div>                     
</body>

<?php
    require_once '../include/user-footer.php';
?>
</html>