<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris | Login</title>
    <link rel="stylesheet" href="./css/style.css">
    @vite('resources/css/input.css')
</head>

<body>
    <div class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-100">
        <form action="/login" method="post">
            @csrf
            <h1 class="text-3xl font-extrabold dark:text-white text-center text-violet-950">Inventaris</h1>
            <h2 class="text-1xl font-bold dark:text-white text-center block mb-5 ">Login Page</h2>
            <div class="mb-6">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                <input type="text" name="username" id="username" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-violet-400  focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 autofocus required">
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" id="password" name="password" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-violet-400  focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <button type="submit" class="form-control text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-400 items-center justify-center flex font-medium rounded-lg text-sm mb-2 w-full sm:w-auto px-28 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
        </form>
    </div>


</body>

</html>