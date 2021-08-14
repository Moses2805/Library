<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rand = rand(3, 10);
    sleep(rand(1, 4));

    // delete
    if(isset($_POST['uuid'], $_POST['name']) && (bool) $_POST['delete']) {
        die(json_encode(['success' => true])); // json response
    }

    if ($_FILES['file']) {
        //print_r($_FILES);

        json_encode(['success' => true]); // json response
    }
}