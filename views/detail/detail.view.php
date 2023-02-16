<?php 
session_start();
require "views/partials/head.php";
require "views/partials/nav.php";
?>

<div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
  <div class="transform text-left text-base transition w-4/5">
    <div class="relative w-full px-16 pt-14 pb-8 bg-gray-900 rounded-3xl mt-8">
      <div>
        <span class="bg-red-600 px-4 text-xl py-1 text-white">Movie Detail</span>
      </div>
      <hr class="h-1 mb-8">
      <div class="flex mb-8 justify-between">
        <div class="grid w-full h-full grid-cols-3 sm:grid-cols-6">
          <div class="text-center aspect-w-2 aspect-h-3 overflow-hidden rounded-lg sm:col-span-4 lg:col-span-5">
            <img src="<?php echo $item['picture']; ?>" class="object-cover object-center text-center h-full w-full">
          </div>
        </div>
        <div class="w-3/3 h-full leading-10 flex flex-col text-xl">
          <div class="w-full text-white mb-2 mt-8 flex items-center">
            <p class = "text-white text-xl w-60">TITLE</p>
            <span class="text-white hover:text-gray-400 w-20">
                :
            </span>
            <span class="text-white text-lg hover:text-gray-400">
                <?php echo $item['title'] ?>
            </span>
          </div>
          <div class="w-full text-white mb-2 flex items-center">
            <p class = "text-white text-xl w-60">LANGUAGE</p>
            <span class="text-white hover:text-gray-400 w-20">
                :
            </span>
            <span class="text-white text-lg hover:text-gray-400">
                <?php echo $item['language'] ?>
            </span>
          </div>
          <div class="w-full text-white mb-2 flex items-center">
            <p class = "text-white text-xl w-60">SUBTITLE</p>
            <span class="text-white hover:text-gray-400 w-20">
                :
            </span>
            <span class="text-white text-lg hover:text-gray-400">
                <?php echo $item['sub_title']; ?>
            </span>
          </div>
          <div class="w-full text-white mb-2 flex items-center">
            <p class = "text-white text-xl w-60">RUNNING TIME</p>
            <span class="text-white hover:text-gray-400 w-20">
                :
            </span>
            <span class="text-white text-lg hover:text-gray-400">
                <?php echo $item['duration'] ?>
            </span>
          </div>
          <div class="w-full text-white mb-2 flex items-center">
            <p class = "text-white text-xl w-60">RELEAST DATE</p>
            <span class="text-white hover:text-gray-400 w-20">
                :
            </span>
            <span class="text-white text-lg hover:text-gray-400">
              <?php echo $item['releast_date'] ?></span>
          </div>
          <div class="w-full text-white mb-2 flex items-center">
            <p class = "text-white text-xl w-60">START DATE</p>
            <span class="text-white hover:text-gray-400 w-20">
                :
            </span>
            <span class="text-white text-lg hover:text-gray-400">
              <?php echo $item['start_date'] ?></span>
            </div>
          <div class="w-full text-white mb-2 flex items-center">
            <p class = "text-white text-xl w-60">END DATE</p>
            <span class="text-white hover:text-gray-400 w-20">
                :
            </span>
            <span class="text-white text-lg hover:text-gray-400">
              <?php echo $item['end_date'] ?></span>
            </div>
          <div class="w-full text-white mb-2flex items-center">
            <p class = "text-white text-xl">DECRIPTION :</p>
            <span class="text-gray-400 text-lg hover:text-gray-400">
              <?php echo $item['description'] ?></span>
            </div>
        </div>

      </div>
      <div class="mt-8">
        <div>
          <span class="bg-red-600 px-4 py-1 text-white"><?php if (isset($show['cinema'])){ echo $show['cinema'];}else{echo "This movie will have show soon";} ?></span>
        </div>
        <hr class="h-2 mb-2">
        <?php if (isset($show['date'])){ ?>
        <p class="text-lg text-white"><?php if (isset($show['hall'])){echo $show['hall']; } ?></p>
        <div>
          <hr class="h-1 mt-1">
          <div class="flex space-x-4 mt-2 mb-2">
            <div class="w-1/2 text-white">
              <p><?php if (isset($show['date'])){     
                $newDate = date("D-M-Y", strtotime($show['date']));             
                $date = date("d", strtotime($show['date']));             
                echo $date."-".$newDate ;}   ?></p>
            </div>
            <div class="flex gap-4">
              <span class="bg-gray-600 p-1 rounded text-white cursor-pointer"><?php if (isset($show['time'])){ echo $show['time'];} ?></span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer"><?php if (isset($show['time'])){ echo $show['time']; } ?></span>
            </div>
          </div>
          <hr class="h-1 mt-1">
        </div>
      </div>
      <?php } ;?>
    </div>
  </div>
</div>
</div>
<?php require "views/partials/footer.php" ?>