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
      $subtitle = $_POST['subtitle'];
    }
  }
}