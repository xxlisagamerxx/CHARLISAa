<?php

//Check if data is valid & generate error if not so
$errors = [];
if ($first_name == "") {
    $errors['first_name'] = 'Voornaam kan niet leeg zijn';
}
if ($last_name == "") {
    $errors['last_name'] = 'Achternaam kan niet leeg zijn';
}
if ($phone == "") {
    $errors['phone'] = 'Telefoonnummer kan niet leeg zijn';
}
if ($date == "") {
    $errors['date'] = 'datum kan niet leeg zijn';
}
if ($time == "") {
    $errors['time'] = 'tijd kan niet leeg zijn';
}