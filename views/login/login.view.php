<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<form action="/login" class="mx-5 my-10 bg-black rounded-xl px-4 py-5 mx-80" method="POST">

  <div class="bg-white text-center border-t-4 border-b-4 border-red-600 rounded-b text-red-900 px-4 py-2 shadow-md mb-5"
    role="alert">
    <div class="inline-flex items-center">
      <img src="https://icon-library.com/images/sign-up-icon-png/sign-up-icon-png-21.jpg" class="h-6 w-6">
      <h1 class="font-bold px-3 text-black text-2xl "> SING IN YOUR ACCOUNT</h1>
    </div>
  </div>

  <div class="relative z-0 w-full mb-6 group">
    <input type="text" name="email" id="email"
      class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white focus:outline-none focus:ring-0 focus:border-white peer"
      value="<?php echo isset($_POST['email'])? $_POST['email'] : "" ?>">
    <label for="email"
      class="pl-6 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
      address</label>
    <svg
      class="w-5 h-5 dark:text-white peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
      fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
      </path>
    </svg>
    <span class="<?php echo isset($errors['email'])? 'text-red-600' : 'text-gray-100'?> text-sm">
      <?php echo isset($errors['email'])? $errors['email'] : "Here in put your email." ?>
    </span>
  </div>


  <div class="relative z-0 w-full mb-6 group">
    <input type="password" name="password" id="password"
      class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white focus:outline-none focus:ring-0 focus:border-white peer"
      value="<?php echo isset($_POST['password'])? $_POST['password'] : "" ?>">
    <label for="password"
      class="pl-6 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
    <svg
      class="w-5 h-5 dark:text-white peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
      fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z">
      </path>
    </svg>
    <span class="<?php echo isset($errors['password'])? 'text-red-600' : 'text-gray-50'?> text-sm">
      <?php echo isset($errors['password'])? $errors['password'] : "Here input your password" ?>
    </span>

  </div>
  <div class="flex items-center justify-between">
    <div class="flex items-start">
      <div class="flex items-center h-5">
        <input id="remember" aria-describedby="remember" type="checkbox"
          class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
          >
      </div>
      <div class="ml-3 text-sm">
        <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
      </div>
    </div>
    <a href="#" class="text-sm font-medium text-red-600 hover:underline dark:text-primary-500">Forgot password?</a>
  </div>
  <div class="text-center">
      <div class="relative z-0 w-full mb-6 group">
        <button class="ront-bold bg-red-600 hover:bg-red-900 text-white py-2 px-20 rounded inline-flex items-center">
          SIGN IN
        </button>
      </div>
  </div>
  <p class="text-sm font-light text-white">
    Don’t have an account yet? <a href="#"
      class="font-medium text-red-600 hover:underline dark:text-primary-500">Sign up</a>
  </p>

</form>

<?php require "views/partials/footer.php" ?>