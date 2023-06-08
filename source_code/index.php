<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

include_once("model/Template.class.php");
include_once("model/DB.class.php");
include_once("model/Pasien.class.php");
include_once("model/TabelPasien.class.php");
include_once("view/TampilPasien.php");

$tp = new TampilPasien();

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'delete') {
        $tp->deleteData($_GET['id']);
    } else if ($_GET['action'] == 'add') {
        $tp->Form($_GET['id']);
    }
}

else if (isset($_POST['action'])) {
    if ($_POST['action'] == 'addPasien') {
        $tp->addData($_POST['nik'], $_POST['nama'], $_POST['tempat'], $_POST['tl'], $_POST['gender'], $_POST['email'], $_POST['telp']);
    } else if ($_POST['action'] == 'editPasien') {
        $tp->editData($_POST['id'], $_POST['nik'], $_POST['nama'], $_POST['tempat'], $_POST['tl'], $_POST['gender'], $_POST['email'], $_POST['telp']);
    }
}

else {
    $data = $tp->tampil();
}