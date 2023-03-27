<?php

$koneksi = mysqli_connect('localhost','root','', 'db_spp_ryan');

if(!$koneksi){
    echo"Koneksi Anda Gagal";
}