<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>

<body>
    @include("NavBar")
    <form class="max-w-sm mx-auto" action="/Admin/Client/post" method="POST">
        @csrf
        <div class="mb-5 mt-10">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 bg ">Name</label>
            <input type="text" name="name" id="name" class="my_inp" placeholder="Name" required>
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">email</label>
            <input type="text" name="email" id="email" class="my_inp" placeholder="Example@gmail.com" required>
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">password</label>
            <input type="text" name="password" id="password" class="my_inp" placeholder="password" required>
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Role</label>
            <input type="text" name="Role" id="Role" class="my_inp" placeholder="Role" required>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Client</button>
    </form>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-3">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($clts as $clt)
                <tr>
                    <th scope="row" class="my_th">{{$clt->name}}</th>
                    <th scope="row" class="my_th">{{$clt->email}} </th>
                    <th scope="row" class="my_th">{{$clt->role}} </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="/Admin/Client/Edit/{{$clt->id}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        |
                        <form method="POST" action="/Admin/Client/Delete/{{$clt->id}}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="font-medium text-blue-600 dark:text-blue-500 hover:underline border-none bg-transparent cursor-pointer">
                        </form>

                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>