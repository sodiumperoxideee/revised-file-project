<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Vets';
    $vets_page = 'active';
    require_once('../include/head.php');
?>
<body>
    <?php
        require_once('../include/header-admin.php')
    ?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php
                    require_once('../include/sidepanel.php')
                ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <h2 class="h3 brand-color pt-3 pb-2">Veterinarians</h2>
                    <div class="table-responsive overflow-hidden">
                    <div class="row g-2 mb-2 m-0">
                        <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
                        <!-- <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0 ms-lg-auto">
                            <select name="staff-role" id="staff-role" class="form-select me-md-2">
                                <option value="">All Roles</option>
                                <option value="Manager">Manager</option>
                                <option value="Staff">Staff</option>
                                <option value="Cashier">Cashier</option>
                            </select>
                        </div> -->
                        <!-- <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0">
                            <select name="staff-status" id="staff-status" class="form-select me-md-2">
                                <option value="">All Status</option>
                                <option value="Active">Active</option>
                                <option value="Deactivated">Deactivated</option>
                            </select>
                        </div> -->
                        <div class="search-keyword col-12 flex-lg-grow-0 d-flex">
                            <div class="input-group">
                                <input type="text" name="keyword" id="keyword" placeholder="Search Vets" class="form-control">
                                <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class="fa fa-search color-white" aria-hidden="true"></i></button>
                            </div>
                            <button class="btn btn-outline-secondary btn-add" type="button" data-bs-toggle="modal" data-bs-target="#addVetsModal"><i class="fa fa-plus brand-color" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div id="table-container">
                        <!-- The staff data will be loaded here via AJAX -->
                    </div>
                </main>
            </div>
        </div>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="addVetsModal" tabindex="-1" aria-labelledby="addVetsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addVetsModalLabel">Add Veterinarians</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        <div class="mb-2">
                            <label for="vetName" class="form-label">Veterinarian Name</label>
                            <input type="text" class="form-control" id="vetName" name="vetName" required>
                            <p id="firstname_error" class="modal-error text-danger my-1">Your custom error message here</p>
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <p id="email_error" class="modal-error text-danger my-1">Your custom error message here</p>
                        </div>
                        <div class="mb-2">
                            <label for="almaMater" class="form-label">Alma Mater</label>
                            <input type="text" class="form-control" id="almaMater" name="almaMater" required>
                            <p id="almaMater_error" class="modal-error text-danger my-1">Your custom error message here</p>
                        </div>
                        <div class="mb-2">
                            <label for="degree" class="form-label">Degree</label>
                            <input type="text" class="form-control" id="degree" name="degree" required>
                            <p id="degree_error" class="modal-error text-danger my-1">Your custom error message here</p>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 brand-bg-color" id="addVetsButton">Add Veterinarian</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        require_once('../include/js.php')
    ?>
    <script src="../js/staff.js"></script>
</body>
</html>