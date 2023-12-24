    <main class=" flex flex-col overflow-hidden">
        <div class=" max-w-2xl px-4 md:px-6 ">
            <!-- Accordion component -->
            <div class="divide-y divide-slate-200 ">
                <!-- Accordion item -->
                <div x-data="{ expanded: false }" class="py-2">
                    <h2>
                        <button
                            id="faqs-title-01"
                            type="button"
                            class="flex w-full items-center justify-between text-left font-semibold py-2 bg-themecolor p-4 text-white"
                            @click="expanded = !expanded"
                            :aria-expanded="expanded"
                            aria-controls="faqs-text-01"
                        >
                            <span class="">{{$titleaccordion}}</span>
                            <svg class="fill-white shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out " :class="{'!rotate-180': expanded}" />
                                <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out " :class="{'!rotate-180': expanded}" />
                            </svg>
                        </button>
                    </h2>
                    <div
                        id="faqs-text-01"
                        role="region"
                        aria-labelledby="faqs-title-01"
                        class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
                        :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
                        >
                        <div class="overflow-hidden ">
                            <p class="p-3 font-bold">
                            {{$titledescription}}
                                
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.js" defer></script>

   