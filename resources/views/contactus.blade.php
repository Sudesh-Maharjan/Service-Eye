<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    @vite('resources/css/app.css')
</head>
<body class="">
    <x-header />
    <div class=" p-10">
        <div class="title mx-36">
        <x-heading heading="Contact Us" />

            <div class="text-center text-slate-700 font-bold leading-7 mb-2 md:mb-10 text-xl">
                Get in touch with us. We’re ready to help you <br /> find the best solutions</div>
        </div>
        <div class="flex flex-col md:flex-row gap-20 justify-center items-center ">
            <div class="w-full md:w-2/5 lg:w-2/6 bg-sky-950 bg-opacity-75 rounded py-8">
                <form class="max-w-sm mx-auto" action=" {{route('postcontactus')}}">
                    @csrf
                    @if(Session::has('message'))
                    <div class=" text-green-500 text-base font-bold ">
                        {{Session::get('message')}}
                    </div>
                    @endif
                    <div class="mb-5">
                        <label for="name" class="formLable">Your
                            Name</label>
                        <input type="text" id="name" name="name" class="formInput" placeholder="Your Name" required>
                    </div>
                    <div class="mb-5">
                        <label for="email" class="formLable">Your
                            Email</label>
                        <input type="email" id="email" name="email" class="formInput" placeholder="name@email.com" required>
                    </div>
                    <div class="mb-5">
                        <label for="pnumber" class="formLable">
                            Phone Number</label>
                        <input type="number" id="number" name="pnumber" class="formInput" placeholder="9865545225" required>
                    </div>
                    <div class="mb-5">
                        <label for="name" class="formLable">What
                            Service Do you Require</label>
                        <input type="text" id="service" name="service" class="formInput" placeholder="Service Required" required>
                    </div>
                    <div class="mb-5">
                        <label for="message" class="formLable">
                            Message</label>
                        <textarea id="message" rows="4" name="message" class="formInput" placeholder="Your message here!!"></textarea>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send
                        Message</button>
                </form>
            </div>
            <div class="w-full md:w-3/5 lg:w-2/6 h-[630px]">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d220.8001233279225!2d85.33541125552483!3d27.69251472222412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjfCsDQxJzMzLjIiTiA4NcKwMjAnMDcuNyJF!5e0!3m2!1sen!2snp!4v1703663143527!5m2!1sen!2snp" width="550" height="630" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class=" flex flex-col md:flex-row justify-between items-center mt-6 md:mt-10 bg-slate-700 bg-opacity-95 rounded-3xl px-4 md:px-28 py-4 md:h-80  md:mx-32">
            <ul class="mb-4">
                <li class=" text-white text-3xl font-bold  mb-4">Call Us
                </li>
                <li class="4105036  text-white text-2xl font-normal  mb-1">
                    01-4105036</li>
                <div class="9779876546738  text-white text-2xl font-normal  mb-1">+
                    977 9876546738</div>
            </ul>
            <ul class="mb-4">
                <li class=" text-white text-3xl font-bold  mb-4">Email Us
                </li>
                <li class="InfoServiceeyeComNp text-start text-white text-2xl font-normal  mb-1">
                    info@serviceeye.com.np</li>
            </ul>
            <ul class="mb-4">
                <li class=" text-white text-3xl font-bold  mb-4 ">Visit us
                </li>
                <li class=" w-72 h-16 text-white text-2xl font-normal lg:md-1 md:mb-3">
                    Okharbot Marga, Kathmandu-10,New baneshwor</li>
            </ul>
        </div>
    </div>
    <x-subscribe />
    <x-footer />
</body>
</html>