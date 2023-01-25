<?php

$heading = "Movie Page";

require 'models/movie.model.php';

$posts = getPosts();

require "views/seller/seller.view.php";