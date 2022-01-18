<?php
//Require reserverings data to use variable in this file
/** @var $db */
require_once "database.php";

//Get the result set from the database with a SQL query
$query = "SELECT * FROM reserveringen";
$result = mysqli_query($db, $query);

//Loop through the result to create a custom array
$reservering = [];
while ($row = mysqli_fetch_assoc($result)) {
    $reserveringen[] = $row;
}
//Close connection
mysqli_close($db);
?>
<tbody>

</tbody>
<!doctype html>
<html lang="en">
<head>
    <title>alle reserveringen</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>reserveringen in de database</h1>

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>voornaam</th>
        <th>achternaam</th>
        <th>email</th>
        <th>telefoonnummer</th>
        <th>behandeling</th>
        <th>datum</th>
        <th>tijd</th>
        <th>edit</th>
        <th colspan="2"></th>
    </tr>
    </thead>
    <tfoot>
    <tr>

    </tr>
    </tfoot>
    <tbody>
    <?php foreach ($reserveringen as $reservering) { ?>
        <tr>
            <td><?= $reservering['id'] ?></td>
            <td><?= $reservering['first_name'] ?></td>
            <td><?= $reservering['last_name'] ?></td>
            <td><?= $reservering['email'] ?></td>
            <td><?= $reservering['phone'] ?></td>
            <td><?= $reservering['behandeling'] ?></td>
            <td><?= $reservering['date'] ?></td>
            <td><?= $reservering['time'] ?></td>
            <td><a href="edit.php?id=<?= $reservering['id'] ?>">Edit</a></td>
            <td><a href="delete.php?id=<?= $reservering['id'] ?>">Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>