<?php
$hostname='localhost';
$username='root';
$password='';
$database='2for1';
$con = mysqli_connect($hostname,$username,$password,$database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


function generate_uuid_v4() {
    $data = openssl_random_pseudo_bytes(16);

    // Set version to 4
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Set bits 6-7 to 10
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
};

function generateUUID() {
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',

        mt_rand(0, 0xffff), mt_rand(0, 0xffff),

        mt_rand(0, 0xffff),

        mt_rand(0, 0x0fff) | 0x4000,

        mt_rand(0, 0x3fff) | 0x8000,

        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}

?>