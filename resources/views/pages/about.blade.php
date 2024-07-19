@component('layouts.home')
<section class="py-[.5rem]">
    <div>
        <div class="w-full h-[4rem] flex items-center justify-center">
            <h2 class="text-[2.5rem] font-medium">About Me</h2>
        </div>
        <div>
            <div class="flex items-center justify-center">
                <img class="h-[400px] w-full md:h-[400px] md:w-[700px] object-cover" src="images/about-us-banner.jpg" alt="">
            </div>

           <div class="flex items-center justify-center  text-center">
              <div class="max-w-[700px]">
                <h5 class="py-[1rem] text-xl">Hello, I'm <span class="font-semibold">Chardie Gotis</span></h5>

                <p class="p-[.8rem]">A passionate web developer currently in my third year of college at Wesleyan University Philippines. I have a strong foundation in various web development technologies, including HTML, CSS, Tailwind CSS, PHP, and the CodeIgniter framework. Through my projects and coursework, I have honed my skills in both front-end and back-end development, demonstrating a keen attention to detail and a commitment to creating efficient, modern web solutions.</p>
              </div>
           </div>
        </div>
    </div>
</section>
@endcomponent