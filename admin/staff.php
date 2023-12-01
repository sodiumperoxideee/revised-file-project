<?php
    session_start();

    if (!isset($_SESSION['user']) || $_SESSION['user'] != 'staff'){
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Staff';
    $staff_page = 'active';
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
                    <h2 class="h3 brand-color pt-3 pb-2">Staff</h2>
                    <div class="table-responsive overflow-hidden">
                    <div class="row g-2 mb-2 m-0">
                        <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
                        <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0 ms-lg-auto">
                            <select name="staff-role" id="staff-role" class="form-select me-md-2">
                                <option value="">All Roles</option>
                                <option value="Manager">Manager</option>
                                <option value="Staff">Staff</option>
                                <option value="Cashier">Cashier</option>
                            </select>
                        </div>
                        <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0">
                            <select name="staff-status" id="staff-status" class="form-select me-md-2">
                                <option value="">All Status</option>
                                <option value="Active">Active</option>
                                <option value="Deactivated">Deactivated</option>
                            </select>
                        </div>
                            <div class="input-group">
                                <input type="text" name="keyword" id="keyword" placeholder="Search Facility" class="form-control">
                                <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class="fa fa-search color-white" aria-hidden="true"></i></button>
                                <a href="addstaff.php" class="btn brand-bg-color ms-2">Add Staff</a>
                            </div>
                        </div>
                    </div>
                    <div id="table-container">
                    <?php
                        require_once '../classes/staff.class.php';
                        require_once '../tools/functions.php';

                        $staff = new Staff();

                        $staffArray = $staff->show();
                        $counter = 1;
                            
                    ?>
                        <table id="staff" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Staff Name</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="staffTableBody">
                        <?php
                            if ($staffArray) {
                                foreach ($staffArray as $item) {
                        ?>
                                    <tr>
                                        <td><?= $counter ?></td>
                                        <td><?= $item['firstname'] . ' ' . $item['lastname'] ?></td>
                                        <td><?= $item['role'] ?></td>
                                        <td><?= $item['email'] ?></td>
                                        <td><?= $item['status'] ?></td>
                                        <td class="text-center"><a href="editstaff.php?user_id=<?= $item['user_id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                    </tr>
                        <?php
                                    $counter++;
                                }
                            }
                        ?>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
    </main>
    <?php
        require_once('../include/js.php')
    ?>
</body>
