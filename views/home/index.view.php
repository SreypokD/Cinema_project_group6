<?php session_start(); ?>
<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<?php require "views/partials/banner.php" ?>
<?php require "database/database.php" ?>

<main class="mx-10 grid grid-cols-5 ">
    <?php 
        global $connection;
        $movies = getNewMovie();
        foreach($movies as $movie) {  
      ?>

      <div class="rounded overflow-hidden shadow-lg bg-black w-64 h-96 mb-10 ">
        <div class="w-full">
            <img class="w-full h-72" src="<?php echo $movie['picture']; ?>" alt="">
        </div>
        <div class="px-6">
          <div class="font-bold text-xl mb-2 text-white"><?php echo $movie['title']; ?></div>
        </div>

        <a href="/movie?id=<?php echo $movie['movie_id'] ?>"><button id="button-card"
          class="text-white p-2 border-red-600 border-2 text-white text-sm w-30 rounded-md hover:bg-red-600 transition-all ml-8">See More
        </button></a>
      </div>
 <?php
    }
?>     
</main>

<?php require "views/partials/footer.php" ?>
