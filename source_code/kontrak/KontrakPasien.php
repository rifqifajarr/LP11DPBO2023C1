<?php

  interface KontrakPasienView {
      public function tampil();
  }

  interface KontrakPasienPresenter {
      public function prosesDataPasien();
      public function addDataPasien($nik, $nama, $tempat, $tl, $gender, $email, $telp);
      public function editDataPasien($id, $nik, $nama, $tempat, $tl, $gender, $email, $telp);
      public function deleteDataPasien($i);
      public function getId($i);
      public function getNik($i);
      public function getNama($i);
      public function getTempat($i);
      public function getTl($i);
      public function getGender($i);
      public function getEmail($i);
      public function getTelp($i);
      public function getSize();
  }
