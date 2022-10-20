<html lang="en">
    <head>
        <title>Create Task</title>
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body>
    <livewire:create-form :user_id="$user_id"/>
    @livewireScripts
    </body>
</html>
