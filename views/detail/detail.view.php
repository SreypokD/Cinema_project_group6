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
            <p class="text-white text-xl w-60">TITLE</p>
            <span class="text-white hover:text-gray-400 w-20">
              :
            </span>
            <span class="text-white text-lg hover:text-gray-400">
              <?php echo $item['title'] ?>
            </span>
          </div>
          <div class="w-full text-white mb-2 flex items-center">
            <p class="text-white text-xl w-60">LANGUAGE</p>
            <span class="text-white hover:text-gray-400 w-20">
              :
            </span>
            <span class="text-white text-lg hover:text-gray-400">
              <?php echo $item['language'] ?>
            </span>
          </div>
          <div class="w-full text-white mb-2 flex items-center">
            <p class="text-white text-xl w-60">SUBTITLE</p>
            <span class="text-white hover:text-gray-400 w-20">
              :
            </span>
            <span class="text-white text-lg hover:text-gray-400">
              <?php echo $item['sub_title']; ?>
            </span>
          </div>
          <div class="w-full text-white mb-2 flex items-center">
            <p class="text-white text-xl w-60">RUNNING TIME</p>
            <span class="text-white hover:text-gray-400 w-20">
              :
            </span>
            <span class="text-white text-lg hover:text-gray-400">
              <?php echo $item['duration'] ?>
            </span>
          </div>
          <div class="w-full text-white mb-2 flex items-center">
            <p class="text-white text-xl w-60">RELEAST DATE</p>
            <span class="text-white hover:text-gray-400 w-20">
              :
            </span>
            <span class="text-white text-lg hover:text-gray-400">
              <?php echo $item['release_date'] ?>
            </span>
          </div>
          <div class="w-full text-white mb-2 flex items-center">
            <p class="text-white text-xl w-60">START DATE</p>
            <span class="text-white hover:text-gray-400 w-20">
              :
            </span>
            <span class="text-white text-lg hover:text-gray-400">
              <?php echo $item['start_date'] ?>
            </span>
          </div>
          <div class="w-full text-white mb-2 flex items-center">
            <p class="text-white text-xl w-60">END DATE</p>
            <span class="text-white hover:text-gray-400 w-20">
              :
            </span>
            <span class="text-white text-lg hover:text-gray-400">
              <?php echo $item['end_date'] ?>
            </span>
          </div>
          <div class="w-full text-white mb-2flex items-center">
            <p class="text-white text-xl">DECRIPTION :</p>
            <span class="text-gray-400 text-lg hover:text-gray-400">
              <?php echo $item['description'] ?>
            </span>
          </div>
        </div>

      </div>

<div class="mt-8">
        <span class="bg-red-600 px-4 py-1 text-white">
          MeanChey
        </span>
        <hr class="h-2 mb-2">
        <?php foreach($shows as $show){ 
        if($show['cinema']=="MeanChey"){
          if (isset($show['date'])){ ?>
        <p class="text-lg text-white">
          <?php if (isset($show['hall'])){echo $show['hall']; } ?>
        </p>
        <div>
          <hr class="h-1 mt-1">
          <div class="flex space-x-4 mt-2 mb-2">
            <div class="w-1/2 text-white">
              <p>
                <?php if (isset($show['date'])){     
                  $newDate = date("D-M-Y", strtotime($show['date']));             
                  $date = date("d", strtotime($show['date']));             
                  echo $date."-".$newDate ;}   ?>
              </p>
            </div>
            <div class="flex gap-4">

              <span class="mancheyBtn bg-red-600 p-1 rounded text-white cursor-pointer">
                <?php if (isset($show['time'])){ echo $show['time']; } ?>
              </span>
            </div>
          </div>
          <hr class="h-1 mt-1 mb-4">

          <?php }; ?>

        </div>
        <?php }; ?>
        <?php }; ?>
      </div>



      <div class="mt-8">
        <span class="bg-red-600 px-4 py-1 text-white">
          Eden
        </span>
        <hr class="h-2 mb-2">
        <?php foreach($shows as $show){ 
        if($show['cinema']=="Eden"){
          if (isset($show['date'])){ ?>
        <p class="text-lg text-white">
          <?php if (isset($show['hall'])){echo $show['hall']; } ?>
        </p>
        <div>
          <hr class="h-1 mt-1">
          <div class="flex space-x-4 mt-2 mb-2">
            <div class="w-1/2 text-white">
              <p>
                <?php if (isset($show['date'])){     
                  $newDate = date("D-M-Y", strtotime($show['date']));             
                  $date = date("d", strtotime($show['date']));             
                  echo $date."-".$newDate ;}   ?>
              </p>
            </div>
            <div class="flex gap-4">

              <span class="edenBtn bg-red-600 p-1 rounded text-white cursor-pointer">
                <?php if (isset($show['time'])){ echo $show['time']; } ?>
              </span>
            </div>
          </div>
          <hr class="h-1 mt-1 mb-4">

          <?php }; ?>

        </div>
        <?php }; ?>
        <?php }; ?>
      </div>



      <div class="mt-8 mb-8">
        <span class="bg-red-600 px-4 py-1 text-white">
          KMall
        </span>
        <hr class="h-2 mb-2">
        <?php foreach($shows as $show){ 
        if($show['cinema']=="KMall"){
          if (isset($show['date'])){ ?>
        <p class="text-lg text-white">
          <?php if (isset($show['hall'])){echo $show['hall']; } ?>
        </p>
        <div>
          <hr class="h-1 mt-1">
          <div class=" flex space-x-4 mt-2 mb-2">
            <div class="w-1/2 text-white">
              <p>
                <?php if (isset($show['date'])){     
                  $newDate = date("D-M-Y", strtotime($show['date']));             
                  $date = date("d", strtotime($show['date']));             
                  echo $date."-".$newDate ;}   ?>
              </p>
            </div>
            <div class="flex gap-4">

              <span class="kmallBtn bg-red-600 p-1 rounded text-white cursor-pointer">
                <?php if (isset($show['time'])){ echo $show['time']; } ?>
              </span>
            </div>
          </div>
          <hr class="h-1 mt-1 mb-4">

          <?php }; ?>

        </div>
        <?php }; ?>
        <?php }; ?>
      </div>


    </div>
  </div>
</div>
<?php if (isset($_SESSION['email']) && $_SESSION['user_type'] == "user") { ?>
<!-- confirm pruchase  -->
    <div class="flex justify-end mr-48">
        <button id="button-card"
            class="showModal text-white p-2 border-red-600 border-2 text-white text-sm w-30 mt-5 rounded-md hover:bg-red-600 transition-all">confirm pruchase
        </button>
      </div>
    </div>

Sreypok Doem WEP 2023 A, [2/18/2023 5:16 PM]
<!-- Modal -->
    <div class="modal fixed top-0 left-0  w-full h-full hidden outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable relative w-7/12 pointer-events-none m-auto mt-5 ">
            <div
            class="modal-content border-red-4 shadow-lg relative flex flex-col w-full p-4  pointer-events-auto bg-white bg-clip-padding  rounded-md text-current">
            <div
                class="modal-header flex flex-shrink-0 justify-center p-2  border-b border-red-500 rounded-t-md">
                <h5 class="text-xl leading-normal font-bold ">
                CONFIRM PURCHASE
                </h5>
            </div>
        <div class="flex justify-between p-5">
          <div class="flex  flex-col justify-center mt-2">
            <p class = "hover:underline"> <strong class ="text-red-500 ">Title :</strong> AVATA EP 2</p>
            <p class = "hover:underline"><strong class ="text-red-500">Ticket Name:</strong> Ticket 11</p> 
            <p class = "hover:underline"><strong class ="text-red-500">Release date:</strong> 02/03/2023</p>                                                                                                                                                         
            <p class = "hover:underline"><strong class ="text-red-500">Seat:</strong> 2F </p>                                                                                                                                                         
            <p class = "hover:underline"><strong class ="text-red-500">Hall:</strong> Hall 1</p>                                                                                                                                                         
            <p class = "hover:underline"><strong class ="text-red-500">Time:</strong> 9:30 | 11:45 </p>                                                                                                                                                         
          </div>
          <div class="w-36">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdNRsO-rmo5fnVt0u1FwojBzK8krwrTYyPuA&usqp=CAU" >
          </div>
        </div>
        <div class="flex justify-between mx-3 ">
          <div class="flex justify-center p-2">
            <p class = "hover:underline"><strong class ="text-red-500">Ticket :</strong></p> 
            <input type="number" class= " ml-2 w-12 bg-red-500 text-white outline-none ">
          </div>
          <div class="flex justify-center p-2">
            <p class = "hover:underline"><strong class ="text-red-500">Total :</strong> $00</p> 
            
          </div>
        </div>
        <div
            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-between p-4 border-t border-red-600 rounded-b-md">
            <button type="button"
            class="hideModal inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
            data-bs-dismiss="modal">
            Cancel
            </button>
            <button type="button" id = "" 
            class="addShowModal inline-block px-6 py-2.5 bg-gray-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
            Payment
            </button>
        </div>
        </div>
    </div>
</div>

Sreypok Doem WEP 2023 A, [2/18/2023 5:16 PM]
<!-- payment on movie -->
<div class="modalNew fixed top-0 left-0  w-full h-full hidden outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable relative  w-7/12 pointer-events-none m-auto mt-5 ">
            <div
            class="modal-content border-red-4 shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md text-current">
            <div
                class="modal-header flex flex-shrink-0 justify-center font-bold p-4 border-b border-red-600 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal ">
                PAYMENT
                </h5>
        </div>
        <div class="flex justify-center">
          <img src="https://www.ababank.com/fileadmin/user_upload/Mobile_app/mobile_plastic_cards/ABA_Issue_Plastic-Oct_EN.jpg"
           class=" w-full h-52">
        </div>
        <!--  model form -->
        <div class="modal-body flex justify-evenly ">
        <div class="w-6/12 p-5 ">
            <label for="" class = "font-bold">Name on your card </label>
            <input
                class="shadow text-gray-900 bg-gray-300 appearance-none border rounded-xl w-full py-2 px-2 leading-tight focus:shadow-outline outline-none "
                type="text" placeholder="Helen" name="card-name" value="1">
            <label for="" class = "font-bold">Card number</label>
            <input
                class="shadow text-gray-900 bg-gray-300 appearance-none border rounded-xl w-full py-2 px-2 leading-tight focus:shadow-outline outline-none "
                type="text" placeholder="0000-0000-0000-0000" name="card-name" value="">
            <label for="" class = "font-bold">CVV</label>
            <input
                class="shadow text-gray-900 bg-gray-300 appearance-none border rounded-xl w-full py-2 px-2 leading-tight focus:shadow-outline outline-none "
                type="password" placeholder=" * * *" name="card-name" value="">
           </div>
          <div class="modal-img bg-blue-900 my-5 p-5">
            <img src="https://www.ababank.com/fileadmin/user_upload/Mobile_app/aba_pay/aba_cib_qr_code.jpg" alt="">
          </div>
        </div>
        <div
            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-between p-4 border-t border-red-600 rounded-b-md">
            <button type="button"
            class="hideModalNew inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
            data-bs-dismiss="modal">
            PAY NOW
            </button>
        </div>
        </div>
    </div>
</div>
<?php } ?>

<script src='views/js/confirmpruchase.js'></script>

<?php require "views/partials/footer.php" ?>