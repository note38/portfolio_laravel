<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Project') }}
        </h2>
       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form action="/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-col content-betweenn">
                        
                       
                        <div class="sm:col-span-4">
                            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                            <div class="mt-2">
                              <input type="text" value="{{ old('title') }}" name="title" id="title" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                           
                        </div>

                        <div class="col-span-full">
                            <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                            <div class="mt-2">
                              <textarea id="description"  name="description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('description') }}</textarea>
                            </div>
                            <p class="mt-1 mb-3 text-sm leading-6 text-gray-600">Write a few sentences about your Project..</p>
                          </div> 


                        <div class="col-span-full">
                            <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Project Image</label>
                            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                              <div class="text-center">
                              
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                  <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600  focus-within:ring-offset-2 hover:text-indigo-500">
                                    <p class="flex justify-center"> 
                                    <img id="image-preview" src='https://cdn.dribbble.com/users/4438388/screenshots/15854247/media/0cd6be830e32f80192d496e50cfa9dbc.jpg?resize=1000x750&vertical=center'
                                    alt="preview image" style="max-height: 250px;">
                                    </p>
                                    <input value="{{ old('image') }}" type="file" name="image" id="image" >
                                  </label>
                                  
                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                              </div>
                            </div>
                          </div>
                        @if ($errors->any())
                          <div class="col-span-full text-center mt-3">
                            <ul>
                              @foreach ($errors->all() as $error)
                              <li class="text-red-500 italic">
                                {{ $error }}
                              </li>
                              @endforeach
                            </ul>
                          </div>
                        @endif

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <a href="{{ route('dash_project')}}" class="text-sm block font-semibold leading-6 text-gray-900">Cancel</a>
                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                          </div>
                        </div>
                </form>

                
                </div>
                <h1 class='text-xl text-gray-500 font-bold mx-5 my-5'>LATEST POST</h1>
                <div class="mx-10 max-w-7xl py-4 grid grid-cols-5 grid-rows-1 gap-4">
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
                      </div>
                    </div>
                    
                  @endforeach
          
            </div>
           <div class=" m-10">
            {{ $showProjectData->links() }}
           </div>
        </div>
    </div>
</x-app-layout>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
     
    $(document).ready(function (e) {

    
    $('#image').change(function(){
            
        let reader = new FileReader();

        reader.onload = (e) => { 

        $('#image-preview').attr('src', e.target.result); 
        }

        reader.readAsDataURL(this.files[0]); 
    
    });
    
    });
</script>