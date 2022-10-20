<div class="md:container md:mx-auto ">
    <table class="table-auto border-spacing-2 border-collapse border border-slate-500">
        <thead>
        <tr>
            <th class="border border-slate-800">Task</th>
            <th class="border border-slate-800">About</th>
            <th class="border border-slate-800">Release</th>
            <th class="border border-slate-800">Status</th>
            <th class="border border-slate-800">Actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach($tasks as $task)
            <tr>
                <td class="border border-slate-700 px-2">
                    <a wire:click="show({{$task}})">{{$task->head}}</a>
                </td>
                <td class="border border-slate-700 px-2">{{$task->about}}</td>
                <td class="border border-slate-700 px-2">{{$task->end_time}}</td>
                <td class="border border-slate-700 px-2">{{$task->status}}</td>
                <td class="border border-slate-700 flex-row inline-flex mt-2">
                    <button wire:click="update({{$task}})"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded flex space-x-4">Update
                    </button>
                    <button wire:click="delete({{$task}})"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-1 rounded flex space-x-4">Destroy
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3" wire:click="create">
        Create
    </button>
</div>
