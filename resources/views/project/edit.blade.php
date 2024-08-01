<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Project: {{$project->title}}
        </h2>
       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form action="/update/{{$project->id}}"
                 method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="flex flex-col content-betweenn">
                        
                       
                        <div class="sm:col-span-4">
                            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                            <div class="mt-2">
                              <input value="{{$project->title}}" type="text" name="title" id="title" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                            <div class="mt-2">
                              <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{$project->description}}</textarea>
                            </div>
                            <p class="mt-1 mb-3 text-sm leading-6 text-gray-600">Write a few sentences about your Project..</p>
                          </div>


                        <div class="col-span-full">
                            <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Project Image</label>
                            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                              <div class="text-center">
                              
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                  <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                    <img src="{{ asset($project->image) }}" >
                                    <input value="{{$project->image}}" type="file" name="image" id="image" >
                                  </label>
                                  
                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                              </div>
                            </div>
                          </div>
                       

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <a href="{{ route('dash_project')}}" class="text-sm block font-semibold leading-6 text-gray-900">Cancel</a>
                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                          </div>
                        </div>
                </form>

                
                </div>
                
            </div>
            
        </div>
    </div>
</x-app-layout>
