<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_icecream";

$koneksi = mysqli_connect($server,$username,$password,$database);

// if($koneksi){
//     echo "berhasil terkoneksi";
// }else{
//     echo "tidak terkoneksi";
// }

function unique_id(){
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charLength = strlen($chars);
    $randomString = '';
    for ($i=0; $i < 20; $i++){
        $randomString=$chars[mt_rand(0, $charLength - 1)];
    }
    return $randomString;
}
?>