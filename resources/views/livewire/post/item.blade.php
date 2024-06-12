<div class="max-w-lg mx-auto">
    {{-- header --}}
    <header class=" flex items-center gap-2 ">
        <x-avatar class="w-10 h-10" src="https://picsum.photos/300/300?random"/>

        <div class="w-full grid grid-cols-12 justify-between">
            <div class="col-span-11">
                <a class="text-lg font-bold" href="#">{{fake()->name}}</a>
            </div>

            <div class="col-span-1">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
                    </svg>
                </button>
            </div>
        </div>
    </header>
</div>
