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
    <form method="post" action="/UpdateProduit/{{$prd->id}}" enctype="multipart/form-data">
        <div>
            @csrf
            @method('PUT')
            <input value="{{$prd->nome}}" type="text" name="nome" id="first_name" style="width: 50vw;" class="my-3 mx-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" required>
            <textarea name="description" id="message" rows="4" style="width: 50vw;" class="my-3 mx-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your desqreption here..."> {{$prd->description}}</textarea>
            <input value="{{$prd->prix}}" type="number" name="prix" id="first_name" style="width: 50vw;" class="my-3 mx-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="price" required>
            <input style="width: 50vw;" name="image" class="my-3 mx-4 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            <input value="{{$prd->tags}}" type="text" name="tags" id="first_name" style="width: 50vw;" class="my-3 mx-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="tags" required>
            <select selected="{{$prd->category_id}}" id="category_id" name="category_id" style="width: 50vw;" class="my-3 mx-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach($cat as $c)
                <option value="{{$c->id}}" {{( $c->id == $prd->category_id) ? 'selected' : '' }}>{{$c->nom}}</option>
                @endforeach
            </select>
            <button type="submit" name="BtnUpdProduit" class=" mx-4 w-40 text-white relative bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Produit</button>
        </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>