@extends('Layout.app')
<div class="flex items-center justify-center h-screen w-full">
    <form method="POST" class="flex flex-col gap-10 w-[500px] shadow-lg rounded p-8" action="{{ route('index.store') }}">
        @csrf
    
        <input type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Title" name="title" required>
    
        <input type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Description" name="description" required>
    
        <div class="flex justify-between">
            <label for="dueDate">Due date:</label>
            <input type="date"  name="dueDate" required>
        </div>
    
        <input type="number" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Category ID" name="category_id" required>
    
        <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Создать задачу</button>

        <a href="{{ route("home")}}">
            <div class="text-center w-36 bg-gray-300 rounded-md text-white py-3 font-medium hover:bg-gray-500">
                Назад
            </div>
        </a>
    </form>
</div>