<div class="flex flex-col h-full min-h-72 md:min-h-96 bg-white shadow-sm rounded-xl dark:bg-gray-900">
    {{-- Carousel --}}
    <div class="flex flex-col flex-1 justify-center items-center relative">
        <div class="
                h-full w-full
                bg-white
                rounded-t-xl
                border
                border-gray-200
                dark:border-gray-50/10
                dark:bg-gray-900"
        >
            <div class="flex justify-center h-full bg-gray-100 rounded-t-xl">
                {{-- <div class="bg-cover bg-center bg-no-repeat h-full w-full p-0 min-h-52 md:min-h-80" style="background-image: url('https://source.unsplash.com/random?nature&{{ rand(1, 1000) }}')"></div>
                <div class="bg-cover bg-center bg-no-repeat h-full w-full p-0 min-h-52 md:min-h-80" style="background-image: url('https://source.unsplash.com/random?nature&{{ rand(1, 1000) }}')"></div> --}}
                <div
                    class="
                        bg-cover
                        bg-center
                        bg-no-repeat
                        h-full
                        w-full
                        p-0
                        min-h-52
                        md:min-h-80
                        rounded-t-xl"
                    style="background-image: url('{{ asset('storage/img1.jpg') }}')"></div>
            </div>
        </div>
        <button
            type="button"
            class="
                absolute
                inset-y-0
                start-0
                inline-flex
                justify-center
                items-center
                w-[46px]
                h-full
                text-gray-600 hover:bg-gray-900/[.1]
                rounded-tl-xl"
        >
            <span class="text-2xl">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </button>

        <button
            type="button"
            class="
                absolute
                inset-y-0
                end-0
                inline-flex
                justify-center
                items-center
                w-[46px]
                h-full
                text-gray-600 hover:bg-gray-900/[.1]
                rounded-tr-xl"
        >
            <span class="sr-only">Next</span>
            <span class="text-2xl">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                </svg>
            </span>
        </button>

        <div class="flex justify-center absolute -bottom-5 start-0 end-0 space-x-2">
            <span
                class="
                    w-3 h-3
                    border
                    border-blue-600
                    dark:border-amber-600
                    rounded-full
                    cursor-pointer
                    bg-blue-600
                    dark:bg-amber-600"
            ></span>
            <span
                class="
                    w-3 h-3
                    border
                    border-blue-600
                    dark:border-amber-600
                    rounded-full
                    cursor-pointer"
            ></span>
            <span
                class="
                    w-3 h-3
                    border
                    border-blue-600
                    dark:border-amber-600
                    rounded-full
                    cursor-pointer"
            ></span>

        </div>
    </div>
    {{-- End Carousel --}}
    <div
        class="
            p-4
            md:p-6
            border-x
            border-b
            border-gray-200
            dark:border-gray-50/10
            dark:bg-gray-900
            rounded-b-xl"
    >
        <span class="
            block
            mb-1
            text-xs
            font-semibold
            uppercase
            text-blue-600
            dark:text-amber-600"
        >
            Card Title
        </span>
        <h3
            class="
                text-lg
                font-semibold
                text-gray-800
                dark:text-gray-300"
        >
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Culpa, facilis. Hic sequi aut quae, dignissimos est laudantium
            necessitatibus dolorem eveniet sed minima fugit in, maiores
            nostrum corporis atque animi sapiente.
        </h3>
    </div>
</div>
