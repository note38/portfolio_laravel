<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Avatar') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile Avatar.") }}
        </p>
    </header>

    <form method="post" action="{{ route('store.avatar')}}" class="mt-6 space-y-6">
        @csrf
      

        <div>
            <x-input-label for="avatar" :value="__('Avatar')" />
            <img id="image-preview" src="{{ $user->avatar ? asset($user->avatar) : 'https://cdn.dribbble.com/users/4438388/screenshots/15854247/media/0cd6be830e32f80192d496e50cfa9dbc.jpg?resize=1000x750&vertical=center' }}"
                alt="preview image" class="rounded-full" style="max-height: 150px;">
            <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="avatar"/>
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
     
    $(document).ready(function (e) {

    
    $('#avatar').change(function(){
            
        let reader = new FileReader();

        reader.onload = (e) => { 

        $('#image-preview').attr('src', e.target.result); 
        }

        reader.readAsDataURL(this.files[0]); 
    
    });
    
    });
</script>