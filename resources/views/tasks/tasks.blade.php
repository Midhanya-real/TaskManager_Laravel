<x-app-layout>
    <head>
        <title>Task Manager</title>
        <link href="resources/css/app.css" rel="stylesheet">

        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            </div>
        </div>
    </div>
    <livewire:get-all-tasks-form :tasks="$tasks"/>

    @livewireScripts
    </body>
</x-app-layout>
