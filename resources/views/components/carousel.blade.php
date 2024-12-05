<div id="default-carousel" class="relative w-full h-80" data-carousel="slide">
    <div class="relative h-56 overflow-hidden rounded-lg md:h-80">
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <a href="{{ route('bantuan') }}">
                <img src="{{ asset('shawsank.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-fill"
                    alt="Image 1">
                <div class="w-full h-80 bg-black z-[100] absolute opacity-80"></div>
                <div class="absolute bottom-0 w-full h-1/2 p-3 text-white z-[999]">
                    <p>BISNIS - 15 AGUSTUS 2024</p>
                    <h3 class="text-4xl font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                        aperiam doloremque quas saepe doloribus architecto!</h3>
                </div>
            </a>
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <a href="{{ route('hapus-akun') }}">
                <img src="{{ asset('interstellar.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-fill"
                    alt="Image 1">
                <div class="w-full h-80 bg-black z-[100] absolute opacity-80"></div>
                <div class="absolute bottom-0 w-full h-1/2 p-3 text-white z-[999]">
                    <p>TEKNOLOGI - 15 AGUSTUS 2024</p>
                    <h3 class="text-4xl font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est,
                        sequi libero ea perferendis voluptates esse?</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
    </div>
    <button type="button"
        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
