<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Create</title>
</head>

<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="m-2 p-2 bg-slate-100 rounded dark:bg-gray-800">
                <div class="space-y-8 divide-y divide-gray-200 mt-5 ">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('product.store') }}">
                        @csrf
                        <div class="flex">
                            <div class="mr-6">
                                <label for="slug" class="block text-sm font-medium text-gray-700 dark:text-white"> Slug
                                </label>
                                <div class="mt-1">
                                    <input type="text" id="slug" name="slug"
                                        class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 " />
                                </div>
                            </div>
                            <div class="mr-6">
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-white"> Name
                                </label>
                                <div class="mt-1">
                                    <input type="text" id="name" name="name"
                                        class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 " />
                                </div>
                            </div>
                            <div class="mr-6">
                                <label for="diff" class="block text-sm font-medium text-gray-700 dark:text-white"> Difficulty
                                </label>
                                <div class="mt-1">
                                    <input type="number" id="diff" name="diff"
                                        class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 " />
                                </div>
                            </div>
                            
                            <div class="mr-6">
                                <label for="pdur" class="block text-sm font-medium text-gray-700 dark:text-white"> Prepear Duration
                                </label>
                                <div class="mt-1">
                                    <input type="number" id="pdur" name="pdur"
                                        class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 " />
                                </div>
                            </div>
                            
                            <div class="mr-6">
                                <label for="cdur" class="block text-sm font-medium text-gray-700 dark:text-white"> Cooking Duration
                                </label>
                                <div class="mt-1">
                                    <input type="number" id="cdur" name="cdur"
                                        class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 " />
                                </div>
                            </div>
                            
                            <div>
                                <label for="ingc" class="block text-sm font-medium text-gray-700 dark:text-white"> Ingredienr Count
                                </label>
                                <div class="mt-1">
                                    <input type="number" id="ingc" name="ingc"
                                        class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 " />
                                </div>
                            </div>
                            
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-white"> Image
                            </label>
                            <div class="mt-1">
                                <input type="file" id="image" name="image"
                                    class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 " />
                            </div>
                        </div>
                        <div class="mt-6 p-4">
                            <button type="submit"
                                class="py-1.5 px-2 bg-gray-200 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-500 hover:bg-slate-300 rounded-lg">Store</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</body>

</html>
