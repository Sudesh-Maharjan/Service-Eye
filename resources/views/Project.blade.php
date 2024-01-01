@extends("layouts.app")
@section("title")

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <title>Projects</title>
    @vite('resources/css/app.css')
@endsection
@section("content")
    <div class="container mx-auto">

        <header class=" flex flex-col items-center">
            <x-heading heading="Our Projects" />
            <p class=" text-center text-gray-700 mb-8 w-2/3 text-lg font-bold">Software development
                outsourcing is just a tool to
                achieve business goals. But there is no way to get worthwhile results without cooperation and trust
                between a client company.</p>
    @if(count ($projects) > 0)

                <div class="font-bold text-xlflex justify-center items-center mb-8 gap-6 flex-col lg:flex-row border-2 rounded-md border-gray-300">
                <button type="button" onclick="updateActiveTab('{{ route('project') }}', this, event)" class="category inline-block px-4 py-3  hover:text-blue-900 active">All</button>
                @foreach ($projectCats as $projectCat)
                    <button type="button" onclick="updateActiveTab('{{ route('project', $projectCat->id) }}', this, event)"
                            class="category inline-block px-4 py-3 hover:text-blue-900 hover:bg-gray-100">{{ $projectCat->project_cat }}</button>
                @endforeach
            </div>
        </header>
    </div>
    <div class="px-20">
        <div class="flex flex-wrap justify-center" data-aos="flip-left" data-aos-duration="1500">
            @foreach($projects as $project)
                <x-project projectimages="{{ asset('uploads/' . $project->image) }}" text="{{ $project->name }}" url="{{$project->url}}" />
            @endforeach
        </div>
    </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
            restoreActiveTab();
        });
        function updateActiveTab(route, clickedTab, event) {
            event.preventDefault();
            document.querySelectorAll('.category').forEach(tab => {
                tab.classList.remove('bg-blue-950', 'text-white');
            });
            clickedTab.classList.add('bg-blue-950', 'text-white');
            sessionStorage.setItem('activeTab', route);
            window.location.href = route;
        }

        function restoreActiveTab() {
            // Retrieve the active tab state from sessionStorage
            const activeTab = sessionStorage.getItem('activeTab');
            if (activeTab) {
                const activeButton = document.querySelector(`[onclick*="${activeTab}"]`);
                if (activeButton) {
                    activeButton.classList.add('bg-blue-950', 'text-white');
                }
            }
        }
    </script>
@endsection