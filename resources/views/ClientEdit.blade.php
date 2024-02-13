<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>

<body>
    <form class="max-w-sm mx-auto" action="/Admin/Client/Update/{{$clt->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-5 mt-10">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
            <input type="text" name="name" id="name" class="my_inp" placeholder="Name" value="{{$clt->name}}" required>
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">email</label>
            <input type="text" name="email" id="email" class="my_inp" placeholder="Example@gmail.com" value="{{$clt->email}}" required>
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">password</label>
            <input type="text" name="password" id="password" class="my_inp" placeholder="password">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Role</label>
            <input type="text" name="Role" id="Role" class="my_inp" placeholder="Role" value="{{$clt->role}}" required>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update User</button>
    </form>
</body>

</html>