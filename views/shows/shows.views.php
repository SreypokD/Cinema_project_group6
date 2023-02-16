<?php 
require "views/partials/head.php";
// require "views/partials/nav.php";
require "models/detail.model.php";
?>
<div class="mx-96 pt-8">
    <form action="/show?id=<?= $_GET['id']?>" class="bg-black shadow-md rounded-xl px-12 pt-6 pb-8 mb-4" method="post">
        <p class="text-center text-white text-3xl font-bold pb-4">CREATE SHOWS</p>
        <div class="">
                <label class="block text-white" for="title">Movie Title</label>
                <input
                    class="shadow text-white bg-gray-800 appearance-none border border-gray-500 rounded-xl w-full py-3 px-3 text-white leading-tight focus:shadow-outline"
                    type="text" placeholder="Title movie" name="title" value="<?php echo isset($movieInfo['title'])? $movieInfo['title'] : "" ?>">
                <span class="<?php echo isset($massageEorror['title'])? "text-red-600 pl-2":"text-black"?>"><?php echo isset($massageEorror['title'])? $massageEorror['title']:"."?></span>
        </div>
        <div class="">
            <label class="block text-white" for="releastDate">Date Show</label>
            <div class="relative max-w-sm">
                <div class=" absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="false" class=" w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input datepicker type="text"
                    class="w-full bg-gray-50 border border-gray-500 text-white text-sm py-3 rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Select date" id="date" name="dateShow"
                    value="<?php echo isset($_POST['dateShow'])? $_POST['dateShow'] : "" ?>">
            </div>
            <span class="<?php echo isset($errors['date'])? "text-red-600 pl-2":"text-black"?>"><?php echo isset($errors['date'])? $errors['date']:"."?></span>
        </div>
        <div class="flex items-center justify-between mb-4">
        <div class="w-6/12">
            <label class="block text-white" for="language" name="cinema">Choose Cinema:</label>
            <select name="cinema" id="cinema"
                class="text-white bg-gray-800 w-full py-3 px-3 border border-gray-500 rounded-xl" value="<?php echo isset($_POST['language'])? $_POST['language']:""?>">
                <option value="MeanChey" checked name="">Mean Chey</option>
                <option value="KMall" name="">K-Mall</option>
                <option value="Eden" name="">Eden</option>
            </select>
        </div>
        <div class="w-6/12 p-2">
            <label class="block text-white" for="hall" name="hall">Choose hall:</label>
            <select name="hall" id="hall"
                class="text-white bg-gray-800 w-full py-3 px-3 border border-gray-500 rounded-xl" value="<?php echo isset($_POST['language'])? $_POST['language']:""?>">
                <option value="hall01" checked name="">Hall 01</option>
                <option value="hall04" name="">Hall 02</option>
                <option value="hall03" name="">Hall 03</option>
                <option value="hall04" name="">Hall 04</option>
                <option value="hall05" name="">Hall 05</option>
            </select>
        </div>
        </div>
        <div class="flex items-center justify-between mb-8">
        <div class="w-6/12">
            <label class="block text-white" for="time" name="time">Choose a time:</label>
            <select name="time" id="time"
                class="text-white bg-gray-800 w-full py-3 px-3 border border-gray-500 rounded-xl" value="<?php echo isset($_POST['language'])? $_POST['language']:""?>">
                <option value="17:00pm" checked name="">17:00pm</option>
                <option value="19:50pm" name="">19:50pm</option>
                <option value="22:10pm" name="">22:50pm</option>
            </select>
        </div>
        <div class="w-6/12 p-2">
            <label class="block text-white" for="screen" name="screen">Choose a screen:</label>
            <select name="screen" id="screen"
                class="text-white bg-gray-800 w-full py-3 px-3 border border-gray-500 rounded-xl" value="<?php echo isset($_POST['language'])? $_POST['language']:""?>">
                <option value="2D" checked name="">Screen : 2D</option>
                <option value="3D" name="">Screen : 3D</option>
                <option value="X" name="">Screen : X</option>
            </select>
        </div>
        </div>
        <div class="flex items-center justify-between">
            <span class="text-red-600"><?php echo isset($errors['show']) ? $errors['show'] : "" ; ?></span>
            <div class="flex items-center justify-between">
                <a href="/seller"><button
                        class="ront-bold bg-gray-500 hover:bg-red-700 text-white font-bold py-2 px-12 rounded-xl focus:shadow-outline"
                        type="button">
                        Cancel
                    </button></a>
                <button
                    class="ront-bold mx-2 bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-12 rounded-xl focus:shadow-outline">
                    Create
                </button>
            </div>
        </form>

</div>
</div>

<?php require "views/partials/footer.php";?>