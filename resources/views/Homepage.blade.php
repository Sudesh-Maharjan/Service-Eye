@extends("layouts.app")
@section("title")
@vite('resources/css/app.css')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" href="{{ asset('css/happyusers.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
@endsection
@section("content")
<x-homebanner />
<div class="flex justify-center">
    <div class="grid xs:grid-cols-1 md:grid-cols-2 mdl:grid-cols-2 lg:grid-cols-4 container  justify-evenly  mx-auto flex-wrap" data-aos="fade-down" data-aos-duration="1000">
        <x-happyusers title="User" emoji="<i class='fa-regular fa-face-smile '></i>" numbers="80" class="animated-number-User" data-target="80" />
        <x-happyusers title="Projects" emoji="<i class='fa-solid fa-bullseye'></i>" numbers="150" class="animated-number-Projects" data-target="80" />
        <x-happyusers title="Services" emoji="<i class='fa-solid fa-hand-holding-heart'></i>" numbers="200" class="animated-number-Services" data-target="200" />
        <x-happyusers title="Connection" emoji="<i class='fa-solid fa-database'></i>" numbers="500" class="animated-number-Connection" data-target="500" />
    </div>
</div>
<div class="flex flex-col xl:flex-row justify-center items-center mt-10 w-auto">
    <div class="p-2 m-2 flex justify-center w-auto" data-aos="fade-left" data-aos-duration="1500">
        <div class=" w-auto md:w-[430px] p-3 my-2">
            <h1 class="text-3xl font-bold text-blue-950">Our Services</h1>
            <h1 class="text-3xl font-bold mt-5"><span class="text-blue-950">IT</span> Services and <br>the <span class="text-blue-950">Future</span></h1>
            <p class="text-md font-bold mt-5">Our IT Services are designed to adapt the ever-changing digital
                landscape. We provide decentralized, open-source solutions that are fast, reliable and accessible to
                everyone. Experience the power of Web3 applications with us.</p>
            <button class="mt-7 shadow-lg  text-white p-3 rounded-lg  bg-blue-950 font-bold hover:bg-blue-800 ">View
                More
            </button>
        </div>
    </div>
    <div class="grid xs:grid-cols-1 lg:grid-cols-2 gap-5" data-aos-duration="1500">
        @foreach($services as $service)
        <x-service heading="{!!$service->title!!}" description="{{$service->description}}" image="{{asset('uploads')}}/{{$service->icon}}" />
        @endforeach
    </div>
</div>
@if(count ($portfolio) > 0)
<div class="mx-36 mt-5 rounded-lg" data-aos="flip-left" data-aos-duration="1500">
    <x-heading heading="Our Projects" />
    <div class="flex flex-wrap justify-center">
        @foreach($portfolio as $p)
        <x-project projectimages="{{asset('uploads')}}/{{$p->image}}" text="{{$p->name}}" url="{{$p->url}}" />
        @endforeach
    </div>
</div>
@endif
<div class="mx-36 shadow-xl mt-5 rounded-lg" data-aos="flip-left" data-aos-duration="1500">
    <x-getintouch />
</div>
<div class="mt-10 mx-36">
    <div class="">
        <x-conecttheapps />
    </div>
</div>
@if(count ($projects) > 0)
<div class="mt-4 mx-36 font-bold text-xl text-center">
    <x-heading heading="Our Core Products" />
    <p>"Revolutions your workflow with our cutting edge IT product, seamlessly integrating innovative technology
        <br>
        to enhance efficiency, security and user experience."
        <!-- <img src="{{url('Images/Vector (1).png')}}" alt="rightarrow">
                <img src="{{url('Images/Vector (2).png')}}" alt="leftarrow"> -->
    </p>
</div>

<div class="flex xs:flex-col mdl:flex-row  justify-center items-center gap-10 my-10 mx-36">
    @foreach($projects as $project)
    <a href="{{$project->url}} " target="_blank"><x-coreproducts coreproducts="{{$project->name}}" image="{{asset('uploads')}}/{{$project->image}}" url="{{$project->url}}" /></a>
    @endforeach
</div>
@endif
@if(count ($clients) > 0)
<x-heading heading="Our Clients" />
<p class="text-xl text-center font-bold mb-5 mx-36">We take pride in serving a wide range of clients, from small local
    banks to
    large international financial institutions. </p>
<div class="grid grid-cols-5 px-20 items-center justify-center mx-36">
    @foreach($clients as $client)
    <a href="{{$client->url}}" target="_blank"><x-ourclient imageclient="{{asset('uploads')}}/{{$client->image}}" />
    </a>
    @endforeach
</div>
@endif
<script>
    // Initialize AOS
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            disable: function() {
                var maxWidth = 1200;
                return window.innerWidth < maxWidth;
            }
        });
        // animateNumbers();
    });

    function animateNumbers() {
        const elements = document.querySelectorAll('.animated-number');
        elements.forEach(element => {
            const targetNumber = parseInt(element.getAttribute('data-target'));
            const duration = 2000; // Adjust the duration as needed
            const interval = 20; // Adjust the interval as needed
            const step = targetNumber / (duration / interval);
            let currentNumber = 0;
            const updateNumber = () => {
                currentNumber += step;
                if (currentNumber <= targetNumber) {
                    element.textContent = Math.round(currentNumber);
                    setTimeout(updateNumber, interval);
                } else {
                    element.textContent = targetNumber;
                }
            };
            updateNumber();
        });
    }
</script>
@endsection