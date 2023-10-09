@extends('Layout.app')
<div class="flex items-center justify-center h-screen w-full">
    <form method="POST" class="flex flex-col gap-10 w-[500px] shadow-lg rounded p-8" action="{{ route('index.update', $task->id)  }}">
        @csrf
        @method('PUT')

        <input type="text" class="w-full h-12 border border-gray-800 rounded px-3" value="{{ $task->title }}" name="title" required>
    
        <input type="text" class="w-full h-12 border border-gray-800 rounded px-3" value="{{ $task->description }}" name="description" required>
    
        <div class="flex justify-between">
            <label for="dueDate">Due date:</label>
            <input type="date"  name="dueDate" required>
        </div>
    
        <input type="number" class="w-full h-12 border border-gray-800 rounded px-3" value="{{ $task->category_id }}" name="category_id" required>
    
        <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Edit task</button>

        <a href="{{ route("home")}}">
            <div class="text-center w-36 bg-gray-300 rounded-md text-white py-3 font-medium hover:bg-gray-500">
                Back
            </div>
        </a>
    </form>
</div>