<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/happyusers.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</head>

<body>
    <x-header />
    <x-homebanner class="" />
    <div class="grid xs:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-5" data-aos="fade-right"
        data-aos-anchor-placement="bottom-bottom" data-aos-duration="1500">
        <x-happyusers title="User" emoji="<i class='fa-regular fa-face-smile '></i>" numbers="80"
            class="animated-number" data-target="80" />
        <x-happyusers title="Projects" emoji="<i class='fa-solid fa-bullseye'></i>" numbers="150"
            class="animated-number" data-target="150" />
        <x-happyusers title="Services" emoji="<i class='fa-solid fa-hand-holding-heart'></i>" numbers="200"
            class="animated-number" data-target="200" />
        <x-happyusers title="Connection" emoji="<i class='fa-solid fa-database'></i>" numbers="500"
            class="animated-number" data-target="500" />
    </div>
    <div class="flex flex-col md:flex-row justify-center mt-14">
        <div class="p-2 m-2 flex justify-center" data-aos="fade-right" data-aos-duration="1500">
            <div class="xs:[200px] w-[475px] p-3 m-2 ">
                <h1 class="text-2xl font-bold">Our services</h1>
                <h1 class="text-3xl font-bold mt-5">It Services and <br>the Future</h1>
                <p class="text-md font-bold mt-10">Our IT Services are designed to adapt the ever-changing digital
                    landscape. We provide decentralized, open-source solutions that are fast, reliable and accessible to
                    everyone. Experience the power of Web3 applications with us.</p>
                <button class="mt-7 shadow-lg bg-gray-500 text-blue-900 p-3 rounded-lg font-bold">View More
                    Services</button>
            </div>
        </div>
        <div class="grid xs:grid-cols-1 lg:grid-cols-2 gap-10 justify-center" data-aos="fade-left"
            data-aos-duration="1500">
            <x-service heading="Web development"
                description="Web We carry more than just good coding skills. Our experience makes us stand out from other web development."
                image="{{ URL('images/webdev.png') }}" data-aos="zoom-in" />
            <x-service heading="Digital Marketing"
                description="Digital marketing leverages online channels to promote brands, products, or services, driving engagement, visibility, and conversions for businesses."
                image="{{ URL('images/digitalmarketing.png') }}" data-aos="zoom-in" />
            <x-service heading="UI/UX Design"
                description="Build the product you need on time with an experienced team that uses a clear and effective design process."
                image="{{ URL('images/uiux.png') }}" />
            <x-service heading="Mobile development"
                description="Web We carry more than just good coding skills. Our experience makes us stand out from other web development."
                image="{{ URL('images/webm.png') }}" />
        </div>

    </div>

    <div class="px-20 mt-20" data-aos="flip-left" data-aos-duration="1500">
        <x-heading heading="Our Projects" />
        <div class="flex flex-wrap justify-center">
            <x-project projectimages="{{URL('images/project1.png')}}" />
            <x-project projectimages="{{URL('images/project1 6.png')}}" />
            <x-project projectimages="{{URL('images/project1 7.png')}}" />
            <x-project projectimages="{{URL('images/project1 8.png')}}" />
            <x-project projectimages="{{URL('images/project1 9.png')}}" />
            <x-project projectimages="{{URL('images/project2 6.png')}}" />
            <x-project projectimages="{{URL('images/project2 7.png')}}" />
            <x-project projectimages="{{URL('images/project2 8.png')}}" />
            <x-project projectimages="{{URL('images/project2 9.png')}}" />
            <x-project projectimages="{{URL('images/project3 5.png')}}" />
            <x-project projectimages="{{URL('images/project3 6.png')}}" />
            <x-project projectimages="{{URL('images/project3 7.png')}}" />
        </div>
    </div>
    <div class="mt-10 mx-24">

        <div class="">
            <x-conecttheapps />

        </div>


        <x-heading heading="Our Core Products" />

        <div class="mt-4 font-bold text-xl text-center">
            <p>"Revolutions your workflow with our cutting edge IT product, seamlessly integrating innovative technology
                to enhance efficiency, security and user experience."
                <!-- <img src="{{url('Images/Vector (1).png')}}" alt="rightarrow">
                <img src="{{url('Images/Vector (2).png')}}" alt="leftarrow"> -->
            </p>

        </div>
        <div class="grid xs:grid-cols-1 lg:grid-cols-3 my-10 gap-20 justify-center">
            <x-coreproducts coreproducts="Hello Sawari - Digital Yatri"
                image="{{URL('images/ce0b004827ca7325950f5fea9099113e.jpeg')}}" />
            <x-coreproducts coreproducts="Business X - B2B2C Market"
                image="{{URL('images/4a298846d34f7d52b2fca9fcc990f874.png')}}" />
            <x-coreproducts coreproducts="Guru Mantra - Digital Education"
                image="{{URL('images/79f05ec0a023982bf713f08762df7a78.png')}}" />
        </div>
        <x-heading heading="Our Clients" />
        <p class="text-xl text-center m-5">We take pride in serving a wide range of clients, from small local banks to
            large international financial institutions. </p>
        <div class="grid grid-cols-5 px-20 items-center justify-center">
            <x-ourclient imageclient="{{URL('images/home.png')}}" />
            <x-ourclient imageclient="{{URL('images/populartea.png')}}" />
            <x-ourclient imageclient="{{URL('images/sofa.png')}}" />
            <x-ourclient imageclient="{{URL('images/uba.png')}}" />
            <x-ourclient imageclient="{{URL('images/sofa.png')}}" />

            <x-ourclient imageclient="{{URL('images/sofa.png')}}" />
            <x-ourclient imageclient="{{URL('images/uba.png')}}" />
            <x-ourclient imageclient="{{URL('images/sofa.png')}}" />
            <x-ourclient imageclient="{{URL('images/populartea.png')}}" />
            <x-ourclient imageclient="{{URL('images/home.png')}}" />

            <x-ourclient imageclient="{{URL('images/home.png')}}" />
            <x-ourclient imageclient="{{URL('images/populartea.png')}}" />
            <x-ourclient imageclient="{{URL('images/sofa.png')}}" />
            <x-ourclient imageclient="{{URL('images/uba.png')}}" />
            <x-ourclient imageclient="{{URL('images/sofa.png')}}" />
        </div>
        <x-footer />
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        AOS.init();
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

</html>