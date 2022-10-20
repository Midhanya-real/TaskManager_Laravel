<x-app-layout>
<head>
    @livewireStyles
    @vite('resources/css/app.css')
    <title>task Manager</title>
</head>
<body>
<livewire:show-task :task="$task"/>
@livewireScripts
</body>
</x-app-layout>
