<?php
  class PagesController {
    public function home() {
      $first_name = 'Joseph';
      $last_name  = 'Gichane';
      require_once('views/home.php');
    }

    public function error() {
      require_once('views/error.php');
    }
  }
?>