@include('layouts.header')
<div>
    <h1 class="text-2xl font-bold mb-4">Task List</h1>

    <div class="mb-4">
        <input type="text" wire:model="newTask" placeholder="Add a new task" class="border p-2 rounded w-full">
        <button wire:click="addTask" class="bg-blue-500 text-white p-2 rounded mt-2">Add Task</button>
    </div>

    <ul>
        @foreach($tasks as $task)
            <li class="mb-2 flex justify-between items-center">
                <span>{{ $task['name'] }}</span>
                <button wire:click="removeTask({{ $loop->index }})" class="bg-red-500 text-white p-1 rounded">Remove</button>
            </li>
        @endforeach
    </ul>
</div>
