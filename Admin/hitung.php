<?php
$harga = $_POST['harga'];
$modal = $_POST['modal'];

if ($harga > $modal) {
    $laba = $harga - $modal;
    echo "Anda Mendapat LABA Sebesar = " . $laba;
} elseif ($modal > $harga) {
    $rugi = $modal - $harga;
    echo "Anda Mendapat RUGI Sebesar = " . $rugi;
} else {
    echo "Tidak laba tidak rugi";
}
