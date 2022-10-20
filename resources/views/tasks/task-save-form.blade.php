<div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 py-8">
    <div class="flex-col-reverse hover:flex-row">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2">Task</label>
                <input wire:model.defer="task.head"
                       class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       type="text" class="form-control" placeholder="my task">
                @error('task.head') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2">About</label>
                <input wire:model.defer="task.about" type="text"
                       class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="about of my task">
                @error('task.about') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2">Status</label>
                <input wire:model.defer="task.status" type="text"
                       class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="process">
                @error('task.status') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2">Release</label>
                <input wire:model.defer="task.end_time" type="datetime-local"
                       class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('task.end_time') <span class="error">{{ $message }}</span> @enderror

            </div>

            <div class="mb-5">
                @if(Auth::user()->isAdmin())
                    <label class="block text-gray-700 text-sm font-bold mb-2">Executor</label>
                    <input wire:model.defer="task.user_id" type="text"
                           class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           placeholder="{{Auth::id()}}">
                    @error('task.user_id') <span class="error">{{ $message }}</span> @enderror
                @endif
            </div>

            <div class="px-4 py-3 sm:px-6 sm:flex-row-reverse">
                <button type="submit"
                        class="inline-flex justify-center rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
