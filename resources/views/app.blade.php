<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Tool</title>
    @vite('resources/css/app.css','resources/js/app.js')
</head>

<body class="bg-slate-600">
    <nav class="flex bg-slate-700 text-white justify-center">
        <a href="/counter"
            class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('counter')) ? 'bg-slate-800' : '' }}">Counter</a>
        <a href="/calculator"
            class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('calculator')) ? 'bg-slate-800' : '' }}">Calculator</a>
        <a href="/todo-list"
            class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('todo-list')) ? 'bg-slate-800' : '' }}">TodoList</a>
        <a href="/cascading-dropdown"
            class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('cascading-dropdown')) ? 'bg-slate-800' : '' }}">Cascading
            Dropdown</a>
        <a href="/products"
            class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('products')) ? 'bg-slate-800' : '' }}">Products
            Search</a>
        <a href="/image-upload"
            class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('image-upload')) ? 'bg-slate-800' : '' }}">Image
            Upload</a>
        <a href="/register"
            class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('register')) ? 'bg-slate-800' : '' }}">Registration</a>
    </nav>


    @yield('content')


</body>

</html>