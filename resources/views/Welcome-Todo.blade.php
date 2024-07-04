<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App template</title>
    @vite('resources/js/app.js', 'vendor/courier/build')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @livewire('todo-list')
</body>

</html>