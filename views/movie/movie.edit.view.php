<?php 
require "views/partials/head.php";
// require "views/partials/nav.php";
require "models/movie.model.php";

$id = '';
$item = '';
if (isset($_GET['movie'])) {
  $id = $_GET['movie'];
  $item = getMovieItem($id);
}

?>
<div class="mx-96 pt-8">
    <form action="/seller" class="bg-black shadow-md rounded-xl px-12 pt-6 pb-8 mb-4" method="post">
        <p class="text-center text-white text-3xl font-bold pb-4">UPDATE MOVIE</p>
        <div class="">
                <label class="block text-white" for="title">Movie Title</label>
                <input
                    class="shadow text-white bg-gray-800 appearance-none border border-gray-500 rounded-xl w-full py-3 px-3 text-white leading-tight focus:shadow-outline"
                    type="text" placeholder="Movie Title " name="title" value="<?php echo ($item?$item['title']:$item) ?>">
            </div>
        <div class="">
                <label class="block text-white" for="title">Duration</label>
                <input
                    class="shadow text-white bg-gray-800 appearance-none border border-gray-500 rounded-xl w-full py-3 px-3 text-white leading-tight focus:shadow-outline"
                    type="text" placeholder="00 : 00 : 00" name="duration" value="<?php echo ($item?$item['duration']:$item) ?>">
            </div>
        
        <div class="">
            <label class="block text-white" for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10"  class="shadow appearance-none bg-gray-800 border border-gray-500 rounded-xl w-full py-3 px-3 text-white leading-tight focus:shadow-outline" type="text" placeholder="Description" name="description">
                <?php echo ($item?$item['description']:$item)  ?> 
            </textarea>

        </div>
        <div class="flex items-center justify-between">
        <div class="w-6/12">
            <label class="block text-white" for="language" name="language">Choose a language:</label>
            <select name="language" id="language"
                class="text-white bg-gray-800 w-full py-3 px-3 border border-gray-500 rounded-xl" value="<?php echo ($item?$item['language']:$item)?>">
                <option value="english" checked name="english">English</option>
                <option value="khmer" name="khmer">khmer</option>
                <option value="korean" name="korean">Korean</option>
            </select>
        </div>
        
        <div class="w-6/12 p-2">
            <label class="block text-white" for="releastDate">Release date</label>
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
                    class="w-full bg-gray-800 border border-gray-500 text-white text-sm py-3 rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Select date" id="date" name="releastDate"
                    value="<?php echo ($item?$item['releast_date']:$item)?>">
            </div>
        </div>
        </div>
        <div class="justify-between">
            <label class="block text-white" for="picture">Image</label>
            <input
                class="shadow appearance-none bg-gray-800 border border-gray-500 rounded-xl w-full py-3 px-3 text-white leading-tight focus:shadow-outline"
                type="text" placeholder="Image URL" name="picture" value="<?php echo ($item?$item['picture']:$item)?>">
        </div>
        <div class="flex items-center justify-between">
        <div class="w-6/12">
            <label class="block text-white" for="image">Start Date</label>
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
                    class="w-full bg-gray-800 border border-gray-500 text-white text-sm py-3 rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Select date" id="startDate" name="startDate"
                    value="<?php echo ($item?$item['start_date']:$item)?>">
            </div>
        </div>
        <div class="w-6/12 p-2">
            <label class="block text-white" for="image">End Date</label>
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
                    class="w-full bg-gray-800 border border-gray-500 text-white text-sm py-3 rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Select date" id="endDate " name="endDate"
                    value="<?php echo ($item?$item['end_date']:$item)?>">
            </div>
        </div>
        </div>
        <div class="flex items-center justify-between">
            <div class="mb-4 text-white w-6/12">
                <label class="block text-white" for="subtitle" name="subtitle">Subtitle:</label>
                <div class="text-sm flex gap-4">
                    <input type="radio" id="vehicle1" name="subtitle" value="English" checked="checked">
                    <label for="vehicle1"> English </label><br>
                    <input type="radio" id="vehicle2" name="subtitle" value="Franch">
                    <label for="vehicle2"> Khmer</label><br>
                    <input type="radio" id="vehicle3" name="subtitle" value="Chinese">
                    <label for="vehicle3"> Thai </label>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-between">
                <a href="/seller"><button
                        class="ront-bold bg-gray-500 hover:bg-red-700 text-white font-bold py-2 px-12 rounded-xl focus:shadow-outline"
                        type="button">
                        Cancel
                    </button>
                </a>
                <button
                    class="ront-bold mx-2 bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-12 rounded-xl focus:shadow-outline" type="submit" name="update">
                    Update
                </button>
                
            </div>
    </form>

</div>
</div>

<?php require "views/partials/footer.php";?>