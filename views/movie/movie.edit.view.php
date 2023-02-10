<?php 

require "../partials/head.php";
// require "../partials/nav.php";

?>

<div class="flex justify-center ">
        <form class="bg-black shadow-md rounded px-8 pt-6 pb-8 mt-2"  method ="POST">
            <p class="text-center text-white text-2xl font-bold">CREATE MOVIE</p>
                <div class="mb-2">
                    <label class="block text-red-700" for="title">Movie Title</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="title" name="title">
                </div>

                <div class="mb-2">
                    <label class="block text-red-700" for="description">Description</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="description" name="description">
                </div>

                <div class="mb-2">
                    <label class="block text-red-700" for="language" name="language">Choose a language:</label>
                    <select name="language" id="language" class=" w-full py-2 px-3 border rounded ">
                        <option value="khmer" name="khemr">khmer</option>
                        <option value="english" name="english">English</option>
                        <option value="korean" name="korean">Korean</option>
                    </select>
                </div>

                <div class="mb-2">
                    <label class="block text-red-700" for="duration">Duration</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="duration" name="duration">
                </div>

                <div class="mb-2">
                    <label class="block text-red-700" for="release date">Release date</label>
                    <div class="relative max-w-sm">
                        <div class=" absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="false" class=" w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input datepicker type="text" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" id="date" name="releast_date">
                    </div>
                </div>

                <div class="mb-2">
                    <label class="block text-red-700" for="image">Image</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="image url" name="picture">
                </div>



                <div class="flex items-center justify-between">
                    <a href="/seller"><button class="bg-black hover:bg-slate-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Cancel
                    </button></a>

                    <a href=""><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Create
                    </button></a>         
                </div>
        </form>
    </div>