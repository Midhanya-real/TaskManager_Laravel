<div>
    <div class="m-8 object-center shadow-2xl grid justify-items-center mx-auto">
        <label class="block text-gray-700 text-sm font-bold mb-2 focus:border-blue-300">Task</label>
        <a>{{$task->head}}</a>

        <label class="block text-gray-700 text-sm font-bold mb-2">About</label>
        <a>{{$task->about}}</a>
        <label class="block text-gray-700 text-sm font-bold mb-2">Release</label>
        <a>{{$task->end_time}}</a>

        <label class="block text-gray-700 text-sm font-bold mb-2">Status</label>
        <a>{{$task->status}}</a>
    </div>
</div>
