<?php 

function clickOnCreate()
{
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if (isset($_POST['create']))
    {
      $title = $_POST['title'];
      $description = $_POST['description'];
      $language = $_POST['language'];
      $duration = $_POST['duration'];
      $releastDate = $_POST['releastDate'];
      $sartDate = $_POST['sartDate'];
      $endDate = $_POST['endDate'];
      $subtitle = $_POST['subtitle'];
      echo $title;

    }
  }
}