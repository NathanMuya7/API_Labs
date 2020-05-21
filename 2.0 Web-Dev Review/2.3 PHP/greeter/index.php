<!DOCTYPE html>
<html>

  <head>
     <title>Greeter</title>
     <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  </head>

 <body>

   <?php if($_GET['greet'] == "yes"): ?>

       <div class="flex mx-auto justify-centre">
        <img class="w-1/4" src="greeter.gif" alt="">
      </div>

      <div class="flex mx-auto rounded w-1/4 items-centre justify-centre bg-blue-500 text-white text-ig text-centre font-bold px-4 py-3 top-3" role="alert">
          <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="24" height="24">
            <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/>
          </svg>
          <p><?php //echo "Hello".$_GET['msg']; ?></p>
          <p class="text-centre"><?="Hello".$_GET['msg']; ?></p>
     </div>

 <?php endif; ?>


<br/>

   <div class="w-full max-w-xs">
  <form action="process.php" method="GET" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-12">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="full-name">
        Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="full-name" name="full-name" type="text" required placeholder="Please enter your full name" pattern="[A-Za-z ]{1,32}" title="Invalid name provided">
    </div>

    <div class="mb-12">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Age
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="age" name="age" type="number" required placeholder="Please enter your age">
    </div>

    <div class="mb-12">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
        Gender
      </label>
      <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="gender" name="gender" required>
         <option value="">Please select</option>
          <option value="f">Female</option>
          <option value="M">Male</option>
     </select>
    </div>


    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Salimia Me
      </button>

    </div>
  </form>
</div>



 </body>



</html>
