<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = trim(strip_tags($_POST["name"]));
}

// SONG
if (empty($_POST["song"])) {
    $errorMSG .= "Song is required ";
} else {
    $song = trim(strip_tags($_POST["song"]));
}



$EmailTo = "anastasia.oudin@gmail.com";
$Subject = "New Wedding Song";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Song: ";
$Body .= $song;
$Body .= "\n";


// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$name);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>
