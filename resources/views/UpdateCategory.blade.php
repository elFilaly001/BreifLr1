<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    @include("NavBar")

    <form method="Post" action="/UpdateCategory/{{$cat->id}}">
        <div>
            @csrf
            @method('PUT')
            <input type="text" name="nom" id="nom" class=" relative w-80 p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 fcus:ring-blue-500 focus:border-blue-500 my-6 mx-4" value="{{$cat->nom}}" required>
            <button type="submit" name="BtnUpdCategory" class="text-white relative bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
        </div>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>