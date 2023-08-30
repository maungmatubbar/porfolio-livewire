<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire practice</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <div class="container mx-auto py-3">
        <div class="w-10/12 mx-auto py-5 rounded-md bg-blue-500 shadow-lg">
            <h1 class="text-lg font-medium text-center text-white">Livewire</h1>
        </div>
        <div class="w-10/12 mx-auto py-5 rounded-md bg-gray-100 shadow-lg">
            <div class="px-2">
                <livewire:create-post />
            </div>
        </div>
    </div>

    @livewireScripts
</body>
</html>
