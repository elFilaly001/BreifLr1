<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')

</head>

<body>

    <form class="max-w-sm mx-auto" action="/login/post" method="POST">
        @csrf
        <div class="mb-5 mt-10">
            <p id="filled_error_help" class="mb-2 text-xs text-red-600">{{session("msg") ?? " "}}</p>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Example@gmail.com" required>
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your password</label>
            <input type="password" name="password" placeholder="Password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="flex justify-between mb-5">
            <a href="/register" class="block mb-2 text-sm font-medium text-blue-700 ">don't have an account</a>
            <a href="/login/newPassword" class="block mb-2 text-sm font-medium text-blue-700 ">Forgot your password?</a>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Log in </button>
    </form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>

</html>