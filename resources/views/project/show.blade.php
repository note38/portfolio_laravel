<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project') }}
        </h2>
        <a href="/create">Create Project.</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mx-auto max-w-7xl py-4 grid grid-cols-5 grid-rows-5 gap-4">
                        @foreach ( $projects as $project )
                        
                         <div class="bg-gray-800 text-white w-full max-w-md flex flex-col rounded-xl shadow-lg p-4 ">
                            <div class="flex items-center justify-between">
                              <div class="flex items-center space-x-4">
                               
                                <div class="text-md font-bold">{{ $project['title'] }}</div>
                              </div>
                              
                            </div>
                            <div class="mt-4 text-gray-500 font-bold text-sm">
                                {{ $project['description'] }}
                            </div>
                            <div class="mt-4 text-gray-500 flex justify-between font-bold text-sm">
                                <x-primary-button>update</x-primary-button>
                                <x-primary-button>delete</x-primary-button>
                            </div>
                          </div>
                          
                        @endforeach
                     </div>
                </div>
                
            </div>
            
        </div>
    </div>
</x-app-layout>
