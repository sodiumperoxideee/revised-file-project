<?php
    session_start();

    if (!isset($_SESSION['user']) || $_SESSION['user'] != 'staff'){
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Users';
    $users_page = 'active';
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
                    <h2 class="h3 brand-color pt-3 pb-2">Users</h2>
                    <div class="table-responsive overflow-hidden">
                    <div class="row g-2 mb-2 m-0">
                        <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
                            <div class="input-group">
                                <input type="text" name="keyword" id="keyword" placeholder="Search User" class="form-control">
                                <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class="fa fa-search color-white" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div id="table-container">
                    <?php
                        require_once '../classes/client.class.php';
                        require_once '../tools/functions.php';

                        $client = new Client();

                        $clientArray = $client->show();
                        $counter = 1;
                    ?>
                        <table id="client" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User ID</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                </tr>
                            </thead>
                            <tbody id="staffTableBody">
                        <?php
                            if ($clientArray) {
                                foreach ($clientArray as $item) {
                        ?>
                                    <tr>
                                        <td><?= $counter ?></td>
                                        <td><?= $item['user_id'] ?></td>
                                        <td><?= $item['firstname'] . ' ' . $item['lastname'] ?></td>
                                        <td><?= $item['gender'] ?></td>
                                        <td><?= $item['email'] ?></td>
                                        <td><?= $item['phoneno'] ?></td>
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
