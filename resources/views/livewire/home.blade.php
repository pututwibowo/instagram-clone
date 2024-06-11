<div class="w-full h-full">
    {{-- Header --}}
    <header class="sticky block lg:hidden mt-2 px-5">
        <div class="grid grid-cols-12 items-center gap-2">
            {{-- Logo --}}
            <div class="col-span-3">
                <img class="h-12 text-black" src="{{asset('assets/logo.png')}}" alt="">
            </div>
            
            {{-- Search bar --}}
            <div class="col-span-8 px-3">
                <input class="w-full bg-gray-100 border-none rounded-md focus:ring-0" type="text" placeholder="Search">
            </div>
            
            {{-- Like Notification --}}
            <div class="col-span-1">
                <a class="text-gray-700/80" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.9" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                    </svg> 
                </a>                   
            </div>
        </div>
    </header>

    {{-- Main --}}
    <main class="grid lg:grid-cols-12 gap-8 md:mt-2">
        <aside class="lg:col-span-8 overflow-hidden">
            {{-- Stories --}}
            <section>
                <ul class="flex overflow-x-auto scrollbar-hide items-center gap-2">
                    @for($i = 0; $i < 10; $i++)
                        <li class="flex flex-col justify-center w-20 p-2">
                            <x-avatar story src="https://picsum.photos/300/300?random={{$i}}" class="w-14 h-14"/>
                            
                            <p class="text-xs font-medium truncate">{{fake()->name}}</p>
                        </li>
                    @endfor
                </ul>
            </section>
        </aside>

        {{-- Sugestions --}}
        <aside class="lg:col-span-4 hidden lg:block p-4">
            {{-- profile --}}
            <div class="flex items-center gap-2">
                <x-avatar src="https://picsum.photos/300/300?random" class="w-12 h-12"/>
                
                <p class="text-md font-medium truncate">{{fake()->name}}</p>
            </div>

            {{-- suggestions --}}
            <section class="mt-4">
                <h2 class="text-lg font-medium text-gray-700/95">Suggestions for you</h2>
                
                <ul class="mt-4 space-y-4">
                    @for($i=0; $i<5; $i++)
                        <li class="flex items-center gap-2 ">
                            <x-avatar src="https://picsum.photos/300/300?random={{$i+10}}" class="w-12 h-12"/>
                            
                            <div class="w-full grid grid-cols-7 gap-4 ">
                                <div class="col-span-5">
                                    <p class="text-md font-medium truncate">{{fake()->name}}</p>
                                    
                                    <p class="text-xs font-medium truncate">Followed by {{fake()->name}}</p>
                                </div>

                                <div class="col-span-2 self-center">
                                    <button class="font-bold text-blue-500 cursor-pointer">Follow</button>
                                </div>
                            </div>
                        </li>
                    @endfor
                </ul>
            </section>

            {{-- app links --}}
            <section class="mt-4">
                <ol class="flex flex-wrap gap-1">
                    <li class="text-xs font-medium after:content-['•'] after:ml-1 text-gray-600/80"><a class="hover:underline" href="#">About</a></li>
                    <li class="text-xs font-medium after:content-['•'] after:ml-1 text-gray-600/80"><a class="hover:underline" href="#">Help</a></li>
                    <li class="text-xs font-medium after:content-['•'] after:ml-1 text-gray-600/80"><a class="hover:underline" href="#">Press</a></li>
                    <li class="text-xs font-medium after:content-['•'] after:ml-1 text-gray-600/80"><a class="hover:underline" href="#">API</a></li>
                    <li class="text-xs font-medium after:content-['•'] after:ml-1 text-gray-600/80"><a class="hover:underline" href="#">Jobs</a></li>
                    <li class="text-xs font-medium after:content-['•'] after:ml-1 text-gray-600/80"><a class="hover:underline" href="#">Privacy</a></li>
                    <li class="text-xs font-medium after:content-['•'] after:ml-1 text-gray-600/80"><a class="hover:underline" href="#">Terms</a></li>
                    <li class="text-xs font-medium after:content-['•'] after:ml-1 text-gray-600/80"><a class="hover:underline" href="#">Location</a></li>
                    <li class="text-xs font-medium after:content-['•'] after:ml-1 text-gray-600/80"><a class="hover:underline" href="#">Language</a></li>
                    <li class="text-xs font-medium text-gray-600/80"><a class="hover:underline" href="#">Meta Verified</a></li>
                </ol>
            </section>

            {{-- copyright --}}
            <footer class="mt-4 text-sm font-medium text-gray-600/80">&copy; INSTAGRAM FROM META</footer>
        </aside>
    </main>
</div>
