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
                <span class="text-white bg-slate-600 p-2">{{ $name }}</span>
                <div class="space-y-8 divide-y divide-gray-200 mt-5 ">
                    <form id="ingradd" method="post" enctype="multipart/form-data" action="{{ route('ingrs.store',$pid) }}">
                        @csrf
                        @method("post")
                        <div class="flex">
                            <div class="mr-6">
                                <label for="impr" class="block text-sm font-medium text-gray-700 dark:text-white">
                                    Importance
                                </label>
                                <div class="mt-1">
                                    <input type="number" id="impr" name="impr"
                                        class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 " />
                                </div>
                            </div>
                            <div class="mr-6">
                                <label for="amount" class="block text-sm font-medium text-gray-700 dark:text-white">
                                    Amount
                                </label>
                                <div class="mt-1">
                                    <input type="number" id="amount" name="amount"
                                        class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 " />
                                </div>
                            </div>
                            <div class="mr-6">
                                <label for="unit" class="block text-sm font-medium text-gray-700 dark:text-white">
                                    Unit
                                </label>
                                <div class="mt-1">
                                    <input type="text" id="unit" name="unit"
                                        class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 " />
                                </div>
                            </div>
                        </div>
                       
                            <div class="w-70 mt-3">
                                <label for="ingrs"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                    Ingr</label>
                                <select name="ingr" id="ingrs"
                                    class="leading-7 bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    {{-- <option  selected>Choose a ingr</option> --}}
                                    @foreach ($ingrs as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
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


    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
</body>

</html>
