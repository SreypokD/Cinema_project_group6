<?php
require 'models/movie.model.php';


$posts = getMovie();

require "views/movie/movie.view.php";



