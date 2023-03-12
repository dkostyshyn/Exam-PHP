<?php

$upload_dir = 'uploads/';

// print_r($_FILES);

if(move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_dir . $_FILES['userfile']['name'])) {
    echo "Success";
}