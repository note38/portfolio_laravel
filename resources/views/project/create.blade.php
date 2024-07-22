<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Project') }}
        </h2>
        <a href="">Create.</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form action="/create" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="title">Project Title</label>
                        <input type="text" name="title" id="title">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description"></textarea>
                        <label for="image">Image:</label>
                        <input type="file" name="image" id="image">
                        <button type="submit">Submit</button>
                </form>
                </div>
                
            </div>
            
        </div>
    </div>
</x-app-layout>
