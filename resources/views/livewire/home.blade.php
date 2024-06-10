<div class="w-full h-full">
    {{-- Header --}}
    <header>
    
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
