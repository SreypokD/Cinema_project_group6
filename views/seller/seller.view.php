<?php 
session_start();
 require "views/partials/head.php";
 require "views/partials/nav.php";
 require "models/movie.model.php";
 require "models/show.model.php";
?>
<div class="m-8 text-white">
    <button>
        <a href="/form-movie"><button class=" bg-transparent hover:ront-bold bg-gradient-to-r from-black via-red-600 to-black font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded" >     Add Movie
        </button></a>
    </button>
</div>
    
<div class="mx-28 mt-2" >
      <?php 
        global $connection;
        $movies = getMovie();
        foreach($movies as $movie) {  
     ?>  
    <div class="flex justify-between items-center border-b-2 border-white mt-2 bg-gray-900 rounded-xl hover:bg-gray-800">
        <div class="h-56 w-48 m-4">
            <div class="w-full bg-red-800">
                <img src="<?php echo $movie['picture']; ?>" alt="" class="h-56 w-48">
            </div>
        </div>
        <div class="w-96">

            <div class="flex text-white flex-col justify-center">
                <p class = "hover:text-gray-400"><strong class ="text-red-500">Title :</strong> <?php echo $movie['title'];?> </p>
                <p class = "hover:text-gray-400"><strong class ="text-red-500">Description :</strong> <?php echo $movie['description'] ;?></p> 
                <p class = "hover:text-gray-400"><strong class ="text-red-500">Release date :</strong> <?php echo $movie['release_date']; ?></p>                                                                                                                                                         
                <p class = "hover:text-gray-400"><strong class ="text-red-500">Start date :</strong> <?php echo $movie['start_date']; ?></p>                                                                                                                                                         
                <p class = "hover:text-gray-400"><strong class ="text-red-500">End date :</strong> <?php echo $movie['end_date']; ?></p>                                                                                                                                                         
                <p class = "hover:text-gray-400"><strong class ="text-red-500">Show Date: </strong></p>   
                <?php $shows = getShowById($movie['movie_id']);
                    // print_r ($show);
                    // echo $movie['movie_id'];
                foreach ($shows as $show){?>
                    <div class="flex">
                        <p class = "bg-gray-500 p-1 rounded-xl m-1"><?php echo $show['date'] ?></p>
                        <p class = "bg-gray-500 p-1 rounded-xl m-1"><?php echo $show['time'] ?></p>
                        <p class = "bg-gray-500 p-1 rounded-xl m-1"><?php echo $show['format'] ?></p>
                        <p class = "bg-gray-500 p-1 rounded-xl m-1"><?php echo $show['cinema'] ?></p>
                        <p class = "bg-gray-500 p-1 rounded-xl m-1"><?php echo $show['hall'] ?></p>
                    </div>
                <?php } ?>
                                                                                                                                                                         
            </div>
        </div>
        <div class="flex justify-end mt-4">
                <a href="/show?id=<?php echo $movie['movie_id']; ?>">
                    <span class="text-blue-600 bg-white p-2 text-xs font-bold cursor-pointer rounded-lg hover:bg-gray-300">CREATE SHOW</span>
                </a>
                <span class="px-2 text-white font-bold cursor-pointer">|</span>
                <a href="/edit?id=<?php echo $movie['movie_id']; ?>">
                    <span class="text-white bg-blue-500 p-2 text-xs font-bold cursor-pointer rounded-lg hover:bg-blue-800">EDIT</span>
                </a>
                <span class="px-2 text-white font-bold cursor-pointer">|</span>
                <a href="/delete?id=<?php echo $movie['movie_id'];?>">
                    <span class="mr-2 text-white bg-red-600 p-2 text-xs font-bold cursor-pointer rounded-lg hover:bg-red-700">DELETE</span>
                </a>
        </div>
    </div>
    <?php
        }
    ?>
</div>


<?php require "views/partials/footer.php" ?>
