<?php 
session_start();
 require "views/partials/head.php";
 require "views/partials/nav.php";
 require "models/movie.model.php";

//  require "models/movies/movie.edit.model.php";

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
            <div class="flex justify-end mt-4">
                <a href="/edit?movie=<?php echo $movie['movie_id']; ?>">
                    <svg class= "w-8 h-8 text-white font-bold cursor-pointer" value="<?php echo $movie['movie_id']; ?>" name="edit" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" ">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                </a>
                <a href="/delete?movie=<?php echo $movie['movie_id'];?>">
                    <svg class="w-8 h-8 text-red-500 font-bold cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" " >
                        <path strokeLinecap="round" strokeLinejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </a>
        </div>
    </div>
    <?php
        }
    ?>
</div>


<?php require "views/partials/footer.php" ?>
