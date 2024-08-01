<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project') }}
        </h2>
        <a href="/create">Create Project.</a>
    
    </x-slot>
@if (session('status'))
    <div class="bg-green-100 border text-center border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert" id="status-message">
        <strong class="font-bold">{{ session('status') }}</strong>
    </div>
@endif
    <div class="py-12">
       
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class='text-xl text-gray-500 font-bold mx-5 my-5'>LATEST</h1>
                <div class="p-6 text-gray-900">
                    <div class="mx-auto max-w-7xl py-4 grid grid-cols-5 grid-rows-2 gap-4">
                        
                        @foreach ( $showProjectData as $project )
                        
                         <div class="bg-gray-800 text-white w-full max-w-md flex flex-col rounded-xl shadow-lg p-4 ">
                            <div class="flex items-center justify-between">
                              <div class="flex items-center space-x-4">
                               
                                <div class="text-md font-bold">{{ $project['title'] }}</div>
                              </div>
                              
                            </div>
                            <div class="mt-4 text-gray-500 font-bold text-sm">
                                {{ $project['description'] }}
                            </div>
                            <img src="{{ asset($project->image) }}" >
                            <div class="mt-4 text-gray-500 flex justify-between font-bold text-sm">
                                <a href="/edit/{{$project->id}}">update</a>
            

                                <x-primary-button>delete</x-primary-button>
                            </div>
                          </div>
                          
                        @endforeach
                     </div>
                     {{ $showProjectData->links() }}
                </div>
               
            </div>
            
        </div>
      
    </div>
</x-app-layout>
<script>
    // Fade out the success message after 10 seconds
    setTimeout(function() {
        var statusMessage = document.getElementById('status-message');
        statusMessage.classList.add('fade-out');

        setTimeout(function() {
            statusMessage.style.display = 'none';
        }, 2000); // Adjust the fade-out duration here
    }, 4000); // Adjust the display duration here
</script>