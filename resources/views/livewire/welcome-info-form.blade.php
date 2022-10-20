<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    @auth
        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                    <button wire:click="getTasks">Task Manager</button>
                </div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                    Watch your Tasks!
                </div>
            </div>
        </div>
    @endauth

    @guest
        <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
            <div class="flex items-center">
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                    <button wire:click="logIn">Log In</button>
                </div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                    Log in to the system!
                </div>
            </div>
        </div>

        <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
            <div class="flex items-center">
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                    <button wire:click="registerUser">
                        Register
                    </button>
                </div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                    Are you not registered yet? So what are you waiting for?
                </div>
            </div>
        </div>
    @endguest
</div>
