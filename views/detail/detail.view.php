<?php session_start(); ?>
<?php
require "views/partials/head.php";

require "views/partials/nav.php";
require "views/partials/banner.php";

require "models/detail.model.php";
require "models/movie.model.php";

?>


<?php
require "views/partials/nav.php";
require "views/partials/banner.php";

require "models/detail.model.php";
require "models/movie.model.php";

?>


<?php
global $connection;
$id = '';
$item = '';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $item = getMovieItem($id);
  print_r('movied id '.$id);
}
?>
<div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4 ">
  <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl ">
    <div class="relative w-full px-4 pt-14 pb-8 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8 bg-black">
      <div>
        <span class="bg-red-600 px-4 py-1 text-white">Movie Detail</span>
      </div>
      <hr class="h-1 mb-8">
      <div class="flex mb-8">
        <div class="grid w-full grid-cols-4 sm:grid-cols-6">
          <div class="aspect-w-2 aspect-h-3 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
            <img src="<?php echo $item['picture']; ?>" class="object-cover object-center">
          </div>
        </div>
        <div class="w-3/4  h-full leading-10 flex flex-col text-xl">
          <div class="w-full text-white">
            <p>Title <span> :
                <?php echo $item['title'] ?>
              </span></p>
          </div>
          <div class="w-full text-white">
            <p>Language <span> :
                <?php echo $item['language'] ?>
              </span></p>
          </div>
          <div class="w-full text-white">
            <p>Subtitle <span> :
                <?php echo $item['subtitle']; ?>
              </span></p>
          </div>
          <div class="w-full text-white">
            <p>Format <span> :
                <?php echo $item['format']; ?>
              </span></p>
          </div>
          <div class="w-full text-white">
            <p>Classification <span> : NC15</span></p>
          </div>
          <div class="w-full text-white">
            <p>Running Time <span> :
                <?php echo $item['duration'] ?>
              </span></p>
          </div>
          <div class="w-full text-white">
            <p>Releast-date:
              <?php echo $item['releast_date'] ?>
            </p>
          </div>
          <div class="w-full text-white">
            <p>Start-date:
              <?php echo $item['start_date'] ?>
            </p>
          </div>
          <div class="w-full text-white">
            <p>End-date:
              <?php echo $item['end_date'] ?>
            </p>
          </div>
          <div class="w-full text-white">
            <p>Descriptoin:
              <?php echo $item['description'] ?>
            </p>
          </div>
        </div>

      </div>
      <div class="mt-8">
        <div>
          <span class="bg-red-600 px-4 py-1 text-white">Date Mean Chey</span>
        </div>
        <hr class="h-1 mb-1">
        <p class="text-lg">Hall: Smart 4</p>
        <div>
          <hr class="h-1 mt-1">
          <div class="flex space-x-4 mt-2 mb-2">
            <div class="w-1/2 text-white">
              <p>Wednesday,25 January 2023</p>
            </div>
            <div class="flex gap-4">
              <span class="bg-gray-600 p-1 rounded text-white cursor-pointer">09:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">14:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">18:45</span>
            </div>
          </div>
          <hr class="h-1 mt-1">
          <div class="flex space-x-4 mt-2 mb-2">
            <div class="w-1/2 text-white">
              <p>Monday,29 January 2023</p>
            </div>
            <div class="flex gap-4">
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">09:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">14:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">18:45</span>
            </div>
          </div>
          <hr class="h-1 mt-1">
          <div class="flex space-x-4 mt-2 mb-2">
            <div class="w-1/2 text-white">
              <p>Monday,29 January 2023</p>
            </div>
            <div class="flex gap-4">
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">09:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">14:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">18:45</span>
            </div>
          </div>
          <hr class="h-1 mt-1">
        </div>
      </div>
      <div class="mt-8">
        <div>
          <span class="bg-red-600 px-4 py-1 text-white">Eden Mall</span>
        </div>
        <hr class="h-1 mb-1">
        <p class="text-lg">Hall: Diamond Class 4</p>
        <div>
          <hr class="h-1 mt-1">
          <div class="flex space-x-4 mt-2 mb-2">
            <div class="w-1/2 text-white">
              <p>Wednesday,25 January 2023</p>
            </div>
            <div class="flex gap-4">
              <span class="bg-gray-600 p-1 rounded text-white cursor-pointer">09:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">14:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">18:45</span>
            </div>
          </div>
          <hr class="h-1 mt-1">
          <div class="flex space-x-4 mt-2 mb-2">
            <div class="w-1/2 text-white">
              <p>Monday,29 January 2023</p>
            </div>
            <div class="flex gap-4">
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">09:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">14:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">18:45</span>
            </div>
          </div>
          <hr class="h-1 mt-1">
          <div class="flex space-x-4 mt-2 mb-2">
            <div class="w-1/2 text-white">
              <p>Monday,29 January 2023</p>
            </div>
            <div class="flex gap-4">
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">09:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">14:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">18:45</span>
            </div>
          </div>
          <hr class="h-1 mt-1">
        </div>
      </div>
      <div class="mt-8">
        <div>
          <span class="bg-red-600 px-4 py-1 text-white">Date City Mall</span>
        </div>
        <hr class="h-1 mb-1">
        <p class="text-lg">Hall: Gold Class</p>
        <div>
          <hr class="h-1 mt-1">
          <div class="flex space-x-4 mt-2 mb-2">
            <div class="w-1/2 text-white">
              <p>Wednesday,25 January 2023</p>
            </div>
            <div class="flex gap-4">
              <span class="bg-gray-600 p-1 rounded text-white cursor-pointer">09:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">14:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">18:45</span>
            </div>
          </div>
          <hr class="h-1 mt-1">
          <div class="flex space-x-4 mt-2 mb-2">
            <div class="w-1/2 text-white">
              <p>Monday,29 January 2023</p>
            </div>
            <div class="flex gap-4">
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">09:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">14:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">18:45</span>
            </div>
          </div>
          <hr class="h-1 mt-1">
          <div class="flex space-x-4 mt-2 mb-2">
            <div class="w-1/2 text-white">
              <p>Monday,29 January 2023</p>
            </div>
            <div class="flex gap-4">
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">09:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">14:05</span>
              <span class="bg-red-600 p-1 rounded text-white cursor-pointer">18:45</span>
            </div>
          </div>
          <hr class="h-1 mt-1">
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php require "views/partials/footer.php" ?>