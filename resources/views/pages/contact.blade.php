@component('layouts.home')
    <!-- Your content here -->
    <section class="flex items-center flex-col items justify-center py-[1rem]" >

        <div class="w-full h-[4rem] flex items-center justify-center">
            <h1 class="text-[2.5rem] font-medium">Contact</h1>
        </div>

        <form action="classes/contact.php" method="POST" class="w-full max-w-lg">
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                    Name
                </label>
                <input name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-name" type="text" placeholder="Cha">
                
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                    E-mail
                </label>
                <input name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" type="email" placeholder="cha@.com">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-number">
                    Subject
                </label>
                <input name="subject" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="subject" type="subject" placeholder="">
                <p class="text-gray-600 text-xs italic"></p>
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-message">
                  Message
                </label>
                <textarea name="message" class="no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message"></textarea>
                
              </div>
            </div>
            <div class="md:flex md:items-center">
              <div class="md:w-1/3">
                <button type="submit" name="submit" class="shadow text-black border-2 border-black hover:bg-green-300 hover:text-black focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded" type="button">
                  Send Message
                </button>
              </div>
              <div class="md:w-2/3"></div>
            </div>
          </form>
    </section>
@endcomponent