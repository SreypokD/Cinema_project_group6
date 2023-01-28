<?php session_start(); ?>
<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<?php require "views/partials/banner.php" ?>
<?php require "database/database.php" ?>


<!-- <main class="h-screen">
  <div class="p-3">
    <p>Hello movie page</p>
  </div>
</main> -->
<div class="ml-16 mb-10 grid grid-cols-4 ">
<?php 
    global $connection;
    $movies = getMovie();
    foreach($movies as $movie) {
        
?>
                <div class="bg-red-600 p-3 flex flex-col justify-center mt-10" id="card">
                    <div class=" max-w-sm flex justify-center items-center content-div rounded-md">
                
                        <img src="<?php echo $movie['picture']; ?>" alt="" class="ml-8 rounded-md " id="img">
                        <!-- <div></div> -->
                    <div>
                    <div  class="w-full image-cover rounded-t-md" ></div>
                        <div class="py-8 px-4 rounded-b-md fd-cl group-hover:opacity-25">
                            <span class="block text-gray-400 text-sm"> </span>
                        </div>
                    </div>
                    <div class="absolute opacity-0 fd-sh group-hover:opacity-100 group-hover:buttom-0">
                        <span class="text-2xl text-white tracking-wider leading-relaxed font-sans">Movie time</span> 
                    <div class="pt-8 text-center flex flex-col items-center ">
                    <button class="text-white p-2 bg-red-600  text-white font-bold text-sm w-30 rounded-md"><a href="/detail">SEE MORE</a></button>
                    <button class="text-white p-2 bg-red-600  text-white font-bold text-sm w-30 mt-5 rounded-md"><a href="https://majorcineplex.com.kh/home">BUY NOW</a></button>
                </div>
                </div>
                </div>
        
        <div class="flex flex-center">
            <p class="text-white text-xl mt-5 font-medium " ><?php echo $movie['title']; ?></p>
        </div>
</div>

                              
        


<?php
    }
?>
</div>








<?php require "views/partials/footer.php" ?>

