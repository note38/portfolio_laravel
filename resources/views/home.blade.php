@component('layouts.home')
<div class="flex justify-center items-center py-[6rem]">
    <section class="bg-no-repeat bg-cover max-w-6xl mx-auto lg:p-0">
        <div class="flex flex-col gap-16 lg:flex-row lg:m-6 justify-center items-center h-full">
            <div class="w-full lg:w-1/2  mb-4 lg:mb-0">
                <h1 class="text-2xl font-semibold lg:text-5xl"> I am Chardie Gotis</h1>
                <p class="py-4">
                this is my official portfolio website. Here, you will find detailed information about my work experience and expertise in web development.
                </p>
                <a href="contact.php" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                Message
                </a>
            
            </div>
            <div class="w-full lg:w-1/2 flex justify-center ">
                <img src="{{ asset('images/me.jpg') }}" alt="" class="rounded-full max-w-full h-auto">
            </div>
        </div>
    </section>
</div>

        <section class="py-[1.5rem] flex justify-center text-center">
            
        </section>
@endcomponent