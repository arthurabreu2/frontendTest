<?php
$upload_dir = './uploads/';

if(isset( $_POST['removefile'])) {
    $remove_file = $upload_dir . $_POST['removefile'];
    if( unlink( $remove_file) ) {
        echo $_POST['removefile'] . ': removeed.';
    } else {
        echo $_POST['removefile'] . ': unable to remove';
    }
    exit;
}

if(isset( $_FILES['file']['name'] ) ) {
    //safe unique name from file data
    $file_unique_name = sha1_file($_FILES['file']['tmp_name']);
    $file_name = $_FILES['file']['name'];

    $destination = $upload_dir . $file_name;

    //save file 
    if(move_uploaded_file($_FILES['files']['tmp_files'], $destination) === TRUE)
        echo 'File uploaded succesfuly';

    else
        echo 'Error: Upload failed';

}