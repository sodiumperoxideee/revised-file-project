<?php
require_once '../classes/facilities.class.php';
require_once '../tools/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $facilities = new Facilities();

    $facilitiesArray = $facilities->show();
    $counter = 1;
?>
<table id="facilities" class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Facility Name</th>
            <th scope="col" width="40%">Description</th>
            <th scope="col">Availability</th>
            <th scope="col" width="5%">Action</th>
        </tr>
    </thead>
    <tbody id="facilitiesTableBody">
<?php
    if ($facilitiesArray) {
        foreach ($facilitiesArray as $item) {
?>
            <tr>
                <td><?= $counter ?></td>
                <td><?= $item['facilitiesName'] ?></td>
                <td><?= $item['description'] ?></td>
                <td><?= $item['availability'] ?></td>
                <td class="text-center"><a href="editfacilities.php?facilitiesID=<?= $item['facilitiesID'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            </tr>
<?php
            $counter++;
        }
    }
}
?>
    </tbody>
</table>

