<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    @include("NavBar")


    <form method="post" action="/AddCategory">
        <div>
            @csrf
            <input type="text" name="nom" id="nom" class=" relative w-80 p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 fcus:ring-blue-500 focus:border-blue-500 my-6 mx-4" placeholder="Add Category" required>
            <button type="submit" name="BtnCategory" class="text-white relative bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
        </div>
    </form>



    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Category name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $category->nom }} </th>
                    <td class="px-6 py-4 flex gap-5">
                        <a href="/EditCategory/{{$category->id}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        |
                        <form method="POST" action="/DeleteCategory/{{$category->id}}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="font-medium text-blue-600 dark:text-blue-500 hover:underline border-none bg-transparent cursor-pointer">
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>