<?php
/** @var mysqli $db */
require_once "DB/database.php";

//Check if Post isset, else do nothing
if (isset($_POST['submit'])) {


//Require database in this file
    require_once "DB/database.php";

//Postback with the data showed to the user, first retrieve data from 'Super global'
    $first_name = mysqli_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_escape_string($db, $_POST['last_name']);
    $email = mysqli_escape_string($db, $_POST['email']);
    $phone = mysqli_escape_string($db, $_POST['phone']);
    $behandeling = mysqli_escape_string($db, $_POST['behandeling']);
    $date = mysqli_escape_string($db, $_POST['date']);
    $time = mysqli_escape_string($db, $_POST['time']);

//Require the form validation handling
    require_once "DB/errordata/error.php";


    if (empty($errors)) {
//Save the record to the database
        $query = "INSERT INTO reserveringen (first_name, last_name, email, phone, behandeling, date, time)
                  VALUES ('$first_name', '$last_name', '$email', '$phone', '$behandeling', '$date','$time')";
        $result = mysqli_query($db, $query) or die('Error: ' . mysqli_error($db) . ' with query ' . $query);

        if ($result) {
            header('Location: mainp.html');
            exit;
        } else {
            $errors['db'] = 'Something went wrong in your database query: ' . mysqli_error($db);
        }

        //Close connection
        mysqli_close($db);
    }
}
?>
/voor behandelingen stuurt het niet de specifieke behandeling naar de database...
<body>
<link rel="stylesheet" href="css/reservering.css" />

<h2>Reservering Maken</h2>
<?php if (isset($errors['db'])) { ?>
    <div><span class="errors"><?= $errors['db']; ?></span></div>
<?php } ?>

<!-- enctype="multipart/form-data" no characters will be converted -->
<form action="" method="post" enctype="multipart/form-data">
    <div class="data-field">
        <label for="first_name">Voornaam</label>
        <input id="first_name" type="text" name="first_name"
               value="<?= isset($first_name) ? htmlentities($first_name) : '' ?>"/>
        <span class="errors"><?= $errors['first_name'] ?? '' ?></span>
    </div>
    <div class="data-field">
        <label for="last_name">Achternaam</label>
        <input id="last_name" type="text" name="last_name"
               value="<?= isset($last_name) ? htmlentities($last_name) : '' ?>"/>
        <span class="errors"><?= isset($errors['last_name']) ? $errors['last_name'] : '' ?></span>
    </div>
    <div class="data-field">
        <label for="email">E-mailadres</label>
        <input id="email" type="text" name="email" value="<?= isset($email) ? htmlentities($email) : '' ?>"/>
        <span class="errors"><?= isset($errors['email']) ? $errors['email'] : '' ?></span>
    </div>
    <div class="data-field">
        <label for="phone">Telefoonnummer</label>
        <input id="phone" type="text" name="phone" value="<?= isset($phone) ? htmlentities($phone) : '' ?>"/>
        <span class="errors"><?= isset($errors['phone']) ? $errors['phone'] : '' ?></span>
    </div>
    <div class="data-field">
        <label for="behandeling">Behandeling</label>
        <select id="behandeling" name="behandeling">
            <option value="<?= isset($behandeling) ? htmlentities($behandeling) : '' ?>">Wimperkort</option>
            <option value="<?= isset($behandeling) ? htmlentities($behandeling) : '' ?>">Wimperlang</option>
            <option value="<?= isset($behandeling) ? htmlentities($behandeling) : '' ?>">Nail kort</option>
            <option value="<?= isset($behandeling) ? htmlentities($behandeling) : '' ?>">Nail lang</option>
            <span class="errors"><?= isset($errors['behandeling']) ? $errors['behandeling'] : '' ?></span>
        </select>
    </div>

    <div class="data-field">
        <label for="start">Datum en Tijd:</label>
        <input type="date" id="date" name="date"
               value="<?= date('j/n/Y')  ?>"
               min="<?= date('j/n/Y') ?>" max="2050-12-31">
        <span class="errors"><?= isset($errors['date']) ? $errors['date'] : '' ?></span>
    </div>
    <div class="data-field">
        <input type="time" id="time" name="time"
               min="10:00" max="18:00" required>
    </div>
    <div class="data-submit">
        <input type="submit" name="submit" value="Reservering Maken"/>
    </div>
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/reserveringdone.php".</p>

</body>

