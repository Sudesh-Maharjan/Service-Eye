<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <title>Projects</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto">
        <x-header />
        <header class=" flex flex-col items-center">
            <x-heading heading="Our Projects" />
            <p class=" text-center text-gray-700 mb-8 w-2/3 text-lg font-bold">Software development
                outsourcing is just a tool to
                achieve business goals. But there is no way to get worthwhile results without cooperation and trust
                between a client company.</p>
            <div class=" font-bold text-2xl flex justify-center items-center mb-8 gap-6 flex-col lg:flex-row">
                <a href="{{ route('project') }}" class="category themecolor">All</a>
                @foreach ($projectCats as $projectCat)
                <a href="{{ route('project', $projectCat->id) }}" class="category themecolor">{{ $projectCat->project_cat }}</a>
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
    <x-footer />
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });
    </script>
</body>
</html>