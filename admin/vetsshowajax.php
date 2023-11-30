<?php
require_once '../classes/vets.class.php';
require_once '../tools/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $vets = new Vets();

    // Fetch staff data (you should modify this to retrieve data from your database)
    $vetsArray = $vets->show();
    $counter = 1;
?>
<table id="vets" class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">Vet ID</th>
            <th scope="col">Vet Name</th>
            <th scope="col">Email</th>
            <th scope="col">Alma Mater</th>
            <th scope="col">Degree</th>
            <th scope="col" width="5%">Action</th>
        </tr>
    </thead>
    <tbody id="vetsTableBody">
<?php
    if ($vetsArray) {
        foreach ($vetsArray as $item) {
?>
            <tr>
                <td><?= $counter ?></td>
                <td><?= $item['vetName'] ?></td>
                <td><?= $item['email'] ?></td>
                <td><?= $item['almaMater'] ?></td>
                <td><?= $item['degree'] ?></td>
                <td class="text-center"><a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            </tr>
<?php
            $counter++;
        }
    }
}
?>
    </tbody>
</table>

