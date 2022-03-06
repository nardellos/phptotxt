<?php  
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])) {
    $data = $_POST['firstname'] . ' - ' . $_POST['lastname'] . ' - ' . $_POST['email'] . "\n";
    $ret = file_put_contents('contacts.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "Thanks for submitting your information. Now I will distribute to telemarketers! ";
        

    }
}
else {
   die('no post data to process');
}

?>


