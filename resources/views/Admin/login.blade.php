<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>
    @vite('resources/css/app.css')

</head>
<body class="flex justify-center items-center h-screen">
<div class="w-1/4 p-7 border rounded-md shadow-md ">
    <div>
        <img class="w-1/4 mx-auto" src="{{ asset('asset/logo.jpg') }}" alt="Logo">
        <h1 class="text-3xl text-blue-900 text-center font-bold my-4">Admin Login</h1>
    </div>
    <form class="">
        <div class="my-4">
            <div class="my-2">
                <label for="username">Username</label>
            </div>
            <div class="border border-blue-300 p-2 rounded-md">
                <input class="outline-none mx-2" type="text" name="username">
            </div>
        </div>
        <div class="">
            <div class="my-2">
                <label for="password">Password</label>
            </div>
            <div class="border border-blue-300 rounded-md p-2">
                <input class="outline-none mx-2 " type="password" name="password">
            </div>
        </div>
        <div class="w-full mt-4 flex justify-center">
            <button class="border-2 w-1/3 p-2 rounded-md border-blue-300 text-blue-300 " type="button">Login</button>
        </div>
    </form>
</div>
</body>
</html>
