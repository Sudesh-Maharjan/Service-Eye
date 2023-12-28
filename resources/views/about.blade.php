<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <x-header />
    <div class='p-8 font-sans'>
        <div class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
            <section class="container mx-auto p-8">
                <div class="flex flex-wrap -mx-4 items-center">

                    <div class="w-full lg:w-1/3 px-4 mb-12 lg:mb-0">
                        <h2 class="text-4xl font-bold mb-2">About Service Eye</h2>
                        <p class="mb-4">Find the Perfect IT Solutions...</p>
                        <p class="font-bold text-sm mb-4 lg:pr-8">Our IT Services are designed to adapt the ever-changing digital landscape. We provide decentralized, open-source solutions that are fast, reliable and accessible to everyone. Experience the power of Web3 applications with us.</p>
                        <div class="flex items-center space-x-2">
                            <div class=" flex items-center justify-center">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.  w3.org/2000/svg">
                                    <circle cx="16" cy="16" r="12" fill="#D9D9D9" />
                                    <circle cx="16" cy="16" r="15.5" stroke="#FFC5A5" />
                                    <path d="M13.4157 11.7663L20.8729 15.6593L13.7729 20.1709L13.4157 11.7663Z" fill="#FBE4FF" />
                                </svg>
                            </div>
                            <span>Watch Our JOURNEY</span>
                        </div>
                    </div>



                    <div class="w-full lg:w-2/3 px-4 lg:pl-56">
                        <div class="relative flex flex-col items-center">

                            <img id="image1" src="{{ asset('images/adpin.jpeg') }}" class="w-full hidden lg:block sm:w-3/4 lg:absolute top-10 sm:top-36 left-[70%] transform -translate-x-1/2 -translate-y-1/2" alt="Top" style="z-index:10; height:300px;" />


                            <img id="image2" src="{{ asset('images/adpout.jpeg') }}" class="block lg:absolute  top-20 sm:top-64 left-0 lg:left-16 transform -translate-x-1/2 -translate-y-1/2 mt-56 sm:mt-36 lg:mt-0" alt="Middle" style="z-index:10; height:350px;" />


                            <img id="image3" src="{{ asset('images/adpgroup.JPG') }}" class="w-full hidden lg:block sm:w-3/4 mt-32 sm:mt-80 pt-12 relative left-10 -skew-y-1" alt="Bottom" style="height:350px;" />
                        </div>
                    </div>

                </div>
            </section>
        </div>


        <div class="container mx-auto lg:px-4 lg:py-8 font-bold">
            <div class="flex flex-col md:flex-row">


                <div class="md:w-2/5 md:pr-8">
                    <h2 class="text-3xl font-bold mb-4">Introduction</h2>
                    <p class=" mb-4 font-semibold" style="color: rgba(0, 46, 71, 0.76)">
                        Service Eye is a tech company working to help companies transform their business to digital platforms.
                    </p>
                    <p class="mb-4">Service Eye is a cutting-edge technology company renowned for its expertise in an array of digital and technological services. We specialize in web development, crafting visually appealing and highly functional websites that cater to the diverse needs of their clients. Our prowess in mobile application development is evident in the intuitive and innovative apps we create for both Android and iOS platforms, enhancing user engagement and experience.</p>
                    <p class="mb-4">
                        In the arena of software development, Service Eye stands out for developing customized, scalable, and efficient software solutions tailored to meet the specific requirements of various industries. We are also deeply immersed in the world of Artificial Intelligence, developing AI-driven solutions that automate processes, optimize operations, and provide strategic insights to businesses.
                    </p>
                </div>


                <div class="md:w-3/5 md:pl-16 space-y-12 ">
                    <div>
                        <h3 class="text-xl font-bold my-2 text-center" style="color: rgba(0, 46, 71, 0.76)">Vision</h3>
                        <div class='flex items-center lg:gap-x-6'>
                            <div class=" flex items-center justify-center ">
                                <svg class="w-8 h-8 md:w-12 md:h-12 lg:w-20 lg:h-20 " viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_401_2625)">
                                        <path d="M38.5 76.7691C59.5503 76.7691 76.615 59.7044 76.615 38.6541C76.615 17.6037 59.5503 0.539062 38.5 0.539062C17.4497 0.539062 0.38501 17.6037 0.38501 38.6541C0.38501 59.7044 17.4497 76.7691 38.5 76.7691Z" fill="#324465" />
                                        <path d="M38.5 28.259C26.411 28.259 16.632 38.654 16.632 38.654C16.632 38.654 26.334 49.049 38.5 49.049C50.666 49.049 60.368 38.654 60.368 38.654C60.368 38.654 50.589 28.259 38.5 28.259ZM38.5 47.201C33.726 47.201 29.953 43.351 29.953 38.654C29.876 33.88 33.726 30.03 38.5 30.03C43.274 30.03 47.047 33.88 47.047 38.577C47.047 43.351 43.197 47.201 38.5 47.201Z" fill="white" />
                                        <path d="M38.5001 32.032C34.8811 32.032 31.8781 34.958 31.8781 38.654C31.8781 42.273 34.8041 45.276 38.5001 45.276C42.1191 45.276 45.122 42.35 45.122 38.654C45.045 34.958 42.1191 32.032 38.5001 32.032ZM38.5001 42.581C36.3441 42.581 34.5731 40.81 34.5731 38.654C34.5731 36.498 36.3441 34.727 38.5001 34.727C40.6561 34.727 42.427 36.498 42.427 38.654C42.427 40.81 40.6561 42.581 38.5001 42.581Z" fill="white" />
                                        <path d="M38.5 69.839C55.723 69.839 69.685 55.877 69.685 38.654C69.685 21.431 55.723 7.46899 38.5 7.46899C21.277 7.46899 7.315 21.431 7.315 38.654C7.315 55.877 21.277 69.839 38.5 69.839Z" stroke="white" stroke-width="2" stroke-miterlimit="10" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_401_2625">
                                            <rect width="77" height="77" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <p class="text-gray-600 px-4 lg:px-6  font-semibold">
                                Service Eye Nepal aims to develop and design solutions, services and experiences to solve every existing problem and client's requirements; that allows our organization to approach towards the technocentric way of innovation.
                            </p>
                        </div>

                    </div>

                    <div>
                        <h3 class="text-xl font-bold my-2 text-center" style="color: rgba(0, 46, 71, 0.76)">Mission</h3>
                        <div class='flex items-center lg:gap-x-6'>
                            <div class=" flex items-center justify-center">
                                <svg class="w-8 h-8 md:w-12 md:h-12 lg:w-20 lg:h-20 " viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_401_2633)">
                                        <path d="M38.5 76.7689C59.5503 76.7689 76.615 59.7043 76.615 38.6539C76.615 17.6036 59.5503 0.53894 38.5 0.53894C17.4497 0.53894 0.38501 17.6036 0.38501 38.6539C0.38501 59.7043 17.4497 76.7689 38.5 76.7689Z" fill="#324465" />
                                        <path d="M38.5 69.839C55.723 69.839 69.685 55.877 69.685 38.654C69.685 21.431 55.723 7.46899 38.5 7.46899C21.277 7.46899 7.315 21.431 7.315 38.654C7.315 55.877 21.277 69.839 38.5 69.839Z" stroke="white" stroke-width="2" stroke-miterlimit="10" />
                                        <path d="M38.577 37.6531C38.346 37.4221 37.884 37.4221 37.653 37.6531C37.422 37.8841 37.422 38.3461 37.653 38.5771C37.884 38.8081 38.346 38.8081 38.577 38.5771C38.808 38.3461 38.808 37.8841 38.577 37.6531Z" fill="white" />
                                        <path d="M46.97 29.2601C45.661 27.9511 43.582 27.9511 42.273 29.2601C40.964 30.5691 40.964 32.6481 42.273 33.9571C43.582 35.2661 45.661 35.2661 46.97 33.9571C48.279 32.6481 48.279 30.5691 46.97 29.2601ZM46.046 32.9561C45.276 33.7261 44.044 33.7261 43.274 32.9561C42.504 32.1861 42.504 30.9541 43.274 30.1841C44.044 29.4141 45.276 29.4141 46.046 30.1841C46.816 30.9541 46.816 32.1861 46.046 32.9561Z" fill="white" />
                                        <path d="M54.439 21.7911C54.285 21.6371 54.131 21.5601 53.977 21.5601C53.823 21.5601 50.281 21.7141 46.046 23.1771C42.658 24.4091 39.809 26.1031 37.653 28.2591C37.191 28.7211 36.652 29.2601 36.267 29.7991C34.111 28.4901 32.34 28.9521 31.262 29.4911C28.721 30.8771 27.181 34.4961 27.181 37.1141C27.181 37.3451 27.335 37.6531 27.566 37.7301C27.643 37.7301 27.72 37.8071 27.797 37.8071C27.951 37.8071 28.105 37.7301 28.259 37.5761C29.568 36.2671 31.262 36.3441 31.724 36.4211L31.955 36.6521C31.493 37.7301 31.108 38.8081 30.877 39.8861C30.8 40.2711 30.8 40.6561 30.954 41.0411C30.338 41.3491 29.722 41.7341 29.183 42.2731C27.489 43.9671 27.104 48.1251 27.104 48.2791C27.104 48.5101 27.181 48.6641 27.258 48.8181C27.412 48.9721 27.566 49.0491 27.72 49.0491C27.72 49.0491 27.72 49.0491 27.797 49.0491C27.951 49.0491 32.109 48.6641 33.803 46.9701C34.342 46.4311 34.804 45.8151 35.035 45.1991C35.42 45.3531 35.805 45.3531 36.19 45.2761C37.268 45.0451 38.346 44.6601 39.424 44.1981L39.655 44.4291C39.732 44.9681 39.809 46.5851 38.5 47.8941C38.346 48.0481 38.269 48.3561 38.346 48.5871C38.423 48.8181 38.654 48.9721 38.962 48.9721C41.58 48.9721 45.276 47.4321 46.585 44.8911C47.201 43.8131 47.586 42.0421 46.277 39.8861C46.816 39.4241 47.355 38.9621 47.817 38.5001C49.973 36.3441 51.744 33.4951 52.899 30.1071C54.362 25.8721 54.516 22.3301 54.516 22.1761C54.67 22.0991 54.593 21.8681 54.439 21.7911ZM28.644 35.8051C29.029 33.8031 30.261 31.6471 31.878 30.8001C32.956 30.1841 34.111 30.2611 35.42 30.9541C34.342 32.3401 33.418 33.8801 32.648 35.4971C32.648 35.4971 32.494 35.3431 32.263 35.2661C32.186 35.1891 30.415 34.8041 28.644 35.8051ZM32.956 46.1231C32.032 47.0471 29.876 47.5091 28.567 47.7401C28.798 46.3541 29.26 44.2751 30.184 43.3511C30.723 42.8121 31.262 42.4271 31.878 42.2731L34.111 44.5061C33.88 44.9681 33.495 45.5841 32.956 46.1231ZM35.959 44.0441C35.805 44.1211 35.574 44.0441 35.343 43.8901C34.496 43.0431 34.188 42.7351 34.034 42.5811C33.88 42.3501 33.418 41.8881 32.417 40.8101C32.263 40.6561 32.186 40.4251 32.263 40.1941C32.494 39.3471 32.725 38.5001 33.11 37.6531L38.577 43.1201C37.653 43.5051 36.806 43.8131 35.959 44.0441ZM45.507 44.3521C44.66 45.9691 42.427 47.2011 40.502 47.5861C41.118 46.3541 41.272 44.8911 41.041 43.9671C40.964 43.7361 40.81 43.6591 40.81 43.6591C42.427 42.8891 43.967 41.9651 45.353 40.8871C46.046 42.1191 46.046 43.2741 45.507 44.3521ZM46.97 37.6531C46.354 38.2691 45.738 38.8081 45.045 39.3471C43.428 40.6561 41.657 41.7341 39.732 42.5811L33.495 36.3441C34.342 34.4191 35.497 32.6481 36.729 31.0311C37.268 30.3381 37.807 29.7221 38.423 29.1061C40.348 27.1811 42.889 25.5641 45.969 24.4861L51.513 30.0301C50.512 33.1871 48.972 35.7281 46.97 37.6531ZM52.129 28.7211L47.509 24.1011C50.05 23.3311 52.206 23.0231 53.284 22.9461C53.207 24.0241 52.899 26.2571 52.129 28.7211Z" fill="white" />
                                        <path d="M36.729 48.8951C36.498 48.6641 36.036 48.6641 35.805 48.8951L33.88 50.7431C33.649 50.9741 33.649 51.4361 33.88 51.6671C34.111 51.8981 34.573 51.8981 34.804 51.6671L36.652 49.819C36.96 49.588 36.96 49.1261 36.729 48.8951Z" fill="white" />
                                        <path d="M27.335 39.501C27.104 39.27 26.642 39.27 26.411 39.501L24.563 41.349C24.332 41.58 24.332 42.042 24.563 42.273C24.794 42.504 25.256 42.504 25.487 42.273L27.335 40.425C27.566 40.194 27.566 39.809 27.335 39.501Z" fill="white" />
                                        <path d="M32.032 49.819C31.801 49.588 31.339 49.588 31.108 49.819L26.642 54.285C26.411 54.516 26.411 54.978 26.642 55.209C26.873 55.44 27.335 55.44 27.566 55.209L32.032 50.743C32.263 50.512 32.263 50.05 32.032 49.819Z" fill="white" />
                                        <path d="M26.719 49.819C26.488 49.588 26.026 49.588 25.795 49.819L21.329 54.285C21.098 54.516 21.098 54.978 21.329 55.209C21.56 55.44 22.022 55.44 22.253 55.209L26.719 50.743C26.95 50.512 26.95 50.05 26.719 49.819Z" fill="white" />
                                        <path d="M26.411 44.198C26.18 43.967 25.718 43.967 25.487 44.198L21.021 48.664C20.79 48.895 20.79 49.357 21.021 49.588C21.252 49.819 21.714 49.819 21.945 49.588L26.411 45.122C26.642 44.891 26.642 44.506 26.411 44.198Z" fill="white" />
                                        <path d="M41.349 34.881C41.118 34.65 40.656 34.65 40.425 34.881L39.501 35.805C39.27 36.036 39.27 36.498 39.501 36.729C39.732 36.96 40.194 36.96 40.425 36.729L41.349 35.805C41.657 35.497 41.657 35.112 41.349 34.881Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_401_2633">
                                            <rect width="77" height="77" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <p class="text-gray-600 px-4 lg:px-6 font-semibold">
                                Our mission is to unleash the full potential of our hard-working software engineers in Nepal by providing world-class outsourcing services around the globe that are central to our client's relationships.
                            </p>
                        </div>

                    </div>

                    <div>

                        <h3 class="text-xl font-bold my-2 text-center" style="color: rgba(0, 46, 71, 0.76)">Value</h3>
                        <div class='flex items-center lg:gap-x-6'>
                            <div class=" flex items-center justify-center">
                                <svg class="w-8 h-8 md:w-12 md:h-12 lg:w-20 lg:h-20 " viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_401_2666)">
                                        <path d="M38.5 76.7689C59.5503 76.7689 76.615 59.7043 76.615 38.6539C76.615 17.6036 59.5503 0.53894 38.5 0.53894C17.4497 0.53894 0.38501 17.6036 0.38501 38.6539C0.38501 59.7043 17.4497 76.7689 38.5 76.7689Z" fill="#324465" />
                                        <path d="M38.5 69.839C55.723 69.839 69.685 55.877 69.685 38.654C69.685 21.431 55.723 7.46899 38.5 7.46899C21.277 7.46899 7.315 21.431 7.315 38.654C7.315 55.877 21.277 69.839 38.5 69.839Z" stroke="white" stroke-width="2" stroke-miterlimit="10" />
                                        <path d="M58.058 41.272C57.827 40.271 57.211 39.578 56.287 39.347C54.901 38.962 53.438 39.809 53.053 41.195L51.59 45.584C50.589 45.276 49.511 45.507 48.741 46.277L46.739 48.279C45.276 48.048 43.813 48.51 42.812 49.588L42.735 49.665C41.426 51.051 41.195 53.053 42.119 54.747C41.734 55.517 41.888 56.518 42.504 57.134L45.199 59.829C45.353 59.983 45.584 60.06 45.738 60.06C45.892 60.06 46.046 59.983 46.2 59.906C46.431 59.752 52.591 55.286 54.516 53.361C56.287 51.59 57.673 45.507 58.135 42.966C58.212 42.427 58.212 41.811 58.058 41.272ZM56.518 42.658C55.825 46.354 54.516 51.051 53.361 52.206C51.821 53.746 47.355 57.057 45.738 58.212L43.505 55.979C43.351 55.825 43.351 55.517 43.505 55.286C43.736 55.055 43.813 54.593 43.582 54.285L43.505 54.131C42.812 53.053 42.966 51.667 43.813 50.743L43.89 50.666C44.66 49.896 45.738 49.588 46.739 49.896C47.047 49.973 47.278 49.896 47.509 49.665L49.819 47.355C50.281 46.893 51.051 46.893 51.513 47.355C51.975 47.817 51.975 48.587 51.513 49.049L49.896 50.666C49.588 50.974 49.588 51.513 49.896 51.821C50.204 52.129 50.743 52.129 51.051 51.821L52.668 50.204C53.669 49.203 53.746 47.663 52.976 46.585L54.593 41.734C54.593 41.734 54.593 41.734 54.593 41.657C54.747 41.118 55.286 40.81 55.825 40.887C55.902 40.887 56.287 41.041 56.441 41.657C56.595 42.042 56.595 42.35 56.518 42.658Z" fill="#FCFCFC" />
                                        <path d="M34.419 49.742L34.342 49.665C33.341 48.664 31.801 48.125 30.415 48.356L28.413 46.354C27.643 45.584 26.488 45.353 25.564 45.661L24.101 41.272C23.716 39.886 22.253 39.039 20.867 39.424C20.02 39.655 19.404 40.348 19.096 41.349C18.942 41.888 18.942 42.427 19.019 43.043C19.481 45.584 20.867 51.667 22.638 53.438C24.64 55.44 30.723 59.829 30.954 59.983C31.108 60.06 31.262 60.137 31.416 60.137C31.647 60.137 31.801 60.06 31.955 59.906L34.65 57.211C35.266 56.595 35.42 55.594 35.035 54.824C35.959 53.13 35.728 51.051 34.419 49.742ZM33.572 54.208L33.495 54.362C33.264 54.67 33.341 55.055 33.572 55.363C33.726 55.517 33.726 55.825 33.572 56.056L31.339 58.289C29.799 57.134 25.333 53.823 23.716 52.283C22.484 51.051 21.252 46.354 20.559 42.735C20.482 42.427 20.482 42.042 20.559 41.734C20.713 41.118 21.098 40.964 21.175 40.964C21.714 40.81 22.253 41.118 22.407 41.734C22.407 41.734 22.407 41.734 22.407 41.811L24.024 46.662C23.177 47.74 23.331 49.28 24.332 50.281L25.949 51.898C26.257 52.206 26.796 52.206 27.104 51.898C27.412 51.59 27.412 51.051 27.104 50.743L25.487 49.126C25.025 48.664 25.025 47.894 25.487 47.432C25.949 46.97 26.719 46.97 27.181 47.432L29.491 49.742C29.722 49.973 29.953 50.05 30.261 49.973C31.262 49.742 32.417 50.05 33.11 50.743L33.187 50.82C34.111 51.744 34.265 53.13 33.572 54.208Z" fill="#FCFCFC" />
                                        <path d="M55.286 35.266C54.901 35.266 54.516 34.958 54.516 34.496C54.208 28.567 50.666 23.331 45.199 20.867C44.814 20.713 44.66 20.174 44.814 19.789C44.968 19.404 45.507 19.25 45.892 19.404C48.741 20.713 51.205 22.792 53.053 25.41C54.901 28.105 55.979 31.185 56.133 34.419C56.133 34.881 55.748 35.266 55.286 35.266Z" fill="#FCFCFC" />
                                        <path d="M55.2091 38.115C55.1321 38.115 55.1321 38.115 55.0551 38.115C54.9781 38.115 54.9781 38.115 54.9011 38.038C54.8241 38.038 54.8241 37.961 54.7471 37.961C54.6701 37.961 54.6701 37.884 54.5931 37.884C54.5931 37.884 54.5161 37.807 54.5161 37.73C54.5161 37.653 54.4391 37.653 54.4391 37.576C54.4391 37.499 54.4391 37.499 54.3621 37.422C54.3621 37.345 54.3621 37.345 54.3621 37.268C54.3621 37.191 54.3621 37.191 54.3621 37.114C54.3621 37.037 54.3621 37.037 54.4391 36.96C54.4391 36.883 54.5161 36.883 54.5161 36.806C54.5161 36.729 54.5931 36.729 54.5931 36.652C54.5931 36.652 54.6701 36.575 54.7471 36.575C54.8241 36.575 54.8241 36.498 54.9011 36.498C54.9781 36.498 54.9781 36.498 55.0551 36.421C55.2861 36.344 55.5941 36.421 55.7481 36.652C55.9021 36.806 55.9791 37.037 55.9791 37.191C55.9791 37.268 55.9791 37.268 55.9791 37.345C55.9791 37.422 55.9791 37.422 55.9021 37.499C55.9021 37.576 55.8251 37.576 55.8251 37.653C55.8251 37.73 55.7481 37.73 55.7481 37.807C55.7481 37.807 55.6711 37.884 55.5941 37.884C55.5171 37.884 55.5171 37.961 55.4401 37.961C55.3631 37.961 55.3631 37.961 55.2861 38.038C55.2861 38.115 55.2861 38.115 55.2091 38.115Z" fill="#FCFCFC" />
                                        <path d="M21.868 35.266C21.406 35.266 21.021 34.881 21.098 34.419C21.252 31.185 22.33 28.105 24.178 25.41C25.949 22.792 28.413 20.713 31.339 19.404C31.724 19.25 32.186 19.404 32.417 19.789C32.571 20.174 32.417 20.636 32.032 20.867C26.642 23.331 23.1 28.567 22.715 34.496C22.638 34.958 22.253 35.266 21.868 35.266Z" fill="#FCFCFC" />
                                        <path d="M21.945 38.115C21.868 38.115 21.868 38.115 21.791 38.115C21.714 38.115 21.714 38.115 21.637 38.038C21.56 38.038 21.56 37.961 21.483 37.961C21.406 37.961 21.406 37.884 21.329 37.884C21.329 37.884 21.252 37.807 21.252 37.73C21.252 37.653 21.175 37.653 21.175 37.576C21.175 37.499 21.175 37.499 21.098 37.422C21.098 37.345 21.098 37.345 21.098 37.268C21.098 37.191 21.098 37.191 21.098 37.114C21.098 37.037 21.098 37.037 21.175 36.96C21.175 36.883 21.252 36.883 21.252 36.806C21.252 36.729 21.329 36.729 21.329 36.652C21.329 36.652 21.406 36.575 21.483 36.575C21.56 36.575 21.56 36.498 21.637 36.498C21.714 36.498 21.714 36.498 21.791 36.421C21.868 36.421 22.022 36.421 22.099 36.421C22.176 36.421 22.176 36.421 22.253 36.498C22.33 36.498 22.33 36.575 22.407 36.575C22.484 36.575 22.484 36.652 22.561 36.652C22.561 36.652 22.638 36.729 22.638 36.806C22.638 36.883 22.715 36.883 22.715 36.96C22.715 37.037 22.715 37.037 22.792 37.114C22.792 37.191 22.792 37.191 22.792 37.268C22.792 37.345 22.792 37.345 22.792 37.422C22.792 37.499 22.792 37.499 22.715 37.576C22.715 37.653 22.638 37.653 22.638 37.73C22.638 37.807 22.561 37.807 22.561 37.884C22.561 37.884 22.484 37.961 22.407 37.961C22.33 37.961 22.33 38.038 22.253 38.038C22.176 38.038 22.176 38.038 22.099 38.115C22.022 38.115 22.022 38.115 21.945 38.115Z" fill="#FCFCFC" />
                                        <path d="M45.8149 42.581C49.8189 38.577 49.8189 32.1091 45.8149 28.1051C41.8109 24.1011 35.3429 24.1011 31.3389 28.1051C27.3349 32.1091 27.3349 38.577 31.3389 42.581C35.3429 46.585 41.8109 46.585 45.8149 42.581ZM32.4939 29.2601C35.8819 25.8721 41.3489 25.8721 44.7369 29.2601C48.1249 32.6481 48.1249 38.1151 44.7369 41.5031C41.3489 44.8911 35.8819 44.8911 32.4939 41.5031C29.1059 38.1151 29.1059 32.6481 32.4939 29.2601ZM39.7319 33.187C39.7319 32.263 40.5019 31.4931 41.4259 31.4931C42.3499 31.4931 43.1199 32.263 43.1199 33.187C43.1199 33.418 42.8889 33.6491 42.6579 33.6491C42.4269 33.6491 42.1959 33.418 42.1959 33.187C42.1959 32.802 41.8879 32.4941 41.5029 32.4941C41.1179 32.4941 40.8099 32.802 40.8099 33.187C40.8099 33.418 40.5789 33.6491 40.3479 33.6491C39.9629 33.6491 39.7319 33.418 39.7319 33.187ZM34.3419 33.187C34.3419 32.263 35.1119 31.4931 36.0359 31.4931C36.9599 31.4931 37.7299 32.263 37.7299 33.187C37.7299 33.418 37.4989 33.6491 37.2679 33.6491C37.0369 33.6491 36.8059 33.418 36.8059 33.187C36.8059 32.802 36.4979 32.4941 36.1129 32.4941C35.7279 32.4941 35.4199 32.802 35.4199 33.187C35.4199 33.418 35.1889 33.6491 34.9579 33.6491C34.7269 33.6491 34.3419 33.418 34.3419 33.187ZM34.1879 37.4991C34.0339 37.1911 34.1879 36.8831 34.4959 36.7291C34.5729 36.7291 34.6499 36.652 34.7269 36.652C34.9579 36.652 35.1889 36.806 35.2659 37.037C35.8049 38.346 37.1139 39.1931 38.6539 39.1931C40.1169 39.1931 41.4259 38.346 42.0419 37.037C42.1959 36.729 42.5039 36.5751 42.8119 36.7291C43.1199 36.8831 43.2739 37.1911 43.1199 37.4991C42.3499 39.1931 40.6559 40.3481 38.7309 40.3481C36.6519 40.2711 34.8809 39.1931 34.1879 37.4991Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_401_2666">
                                            <rect width="77" height="77" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <p class="text-gray-600 px-4 lg:px-6 font-semibold">
                                We value a long-term relationship with our clients and their profitability with an excellent and innovative development approach. Clean code, simplicity, and improved customers service with latest technology stack help us make a unique tech company.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        {{-- Additional content here --}}
        <p class='mb-4 font-bold lg:px-4 pt-8 sm:pt-4 lg:pt-0'>Our mastery in Machine Learning leads to the development of intelligent systems that evolve and improve over time, offering predictive analytics and decision-making tools. In Data Science, Service Eye excels by leveraging big data analytics to uncover hidden trends, enabling data-driven decision-making and strategies. </p>
        <p class='font-bold lg:px-4'>

            Overall, Service Eye is not just a technology provider but a visionary in the tech field, constantly pushing boundaries to deliver comprehensive and advanced tech solutions that drive businesses towards growth and innovation.</p>

        {{-- Working Process Section --}}
        <h1 class="font-bold text-center mt-8 text-3xl">Our Working Process</h1>
        <div class=" sm:grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-4">
            <div class="flex flex-col items-center justify-center">
                <img src="{{ asset('images/discover.png') }}" class="w-full" />
                <h3 class='text-center font-bold mb-8 sm:mb-0 ' style="color: rgba(48, 53, 183, 0.97)">Discovery</h3>
            </div>
            <div class="flex flex-col items-center justify-center">
                <img src="{{ asset ('/images/planning.png')}}" class="w-full" />
                <h3 class='text-center font-bold mb-8 sm:mb-0 ' style="color: rgba(48, 53, 183, 0.97)">Planning</h3>
            </div>
            <div class="flex flex-col items-center justify-center">
                <img src="{{asset ('/images/execute.png')}}" class="w-full " />
                <h3 class='text-center font-bold mb-8 sm:mb-0  ' style="color: rgba(48, 53, 183, 0.97)">Execute</h3>
            </div>
            <div class="flex flex-col items-center justify-center">
                <img src="{{asset('/images/deliver.png')}}" class="w-full" />
                <h3 class='text-center font-bold mb-8 sm:mb-0' style="color: rgba(48, 53, 183, 0.97)">Deliver</h3>
            </div>


        </div>

    </div>
    <div class="px-20">
        <div class="grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-20 m-10">

            @foreach($teams as $team)
         
        
           
            <x-teamcard name="{{$team -> name}}" position="{{$team -> position}}" qoute="{{$team -> qoute}}" timg="{{ asset('uploads/' . $team->image) }}" jobdes="{{$team -> job_description}}" interest="{{$team -> interest}}" url="{!!$team->urls!!}" />
            @endforeach
          
        
            
        </div>
    </div>


    <div class="p-16">
        <x-getintouch />
    </div>
    <x-subscribe />
    <x-footer />

    <script>
        const images = [
            "{{ asset('images/adpin.jpeg') }}",
            "{{ asset('images/adpout.jpeg') }}",
            "{{ asset('images/adpgroup.JPG') }}"
        ];


        function rotateImages() {
            let img1 = document.getElementById('image1');
            let img2 = document.getElementById('image2');
            let img3 = document.getElementById('image3');

            // Apply the animation
            img1.classList.add('image-animate');
            img1.style.animationName = 'moveDownFadeOut';
            img2.classList.add('image-animate');
            img2.style.animationName = 'moveUpFadeIn';
            img3.classList.add('image-animate');
            img3.style.animationName = 'moveDownFadeOut';

            setTimeout(() => {
                // Swapping the src in the specific order
                let tempSrc = img1.src;
                img1.src = img3.src;
                img3.src = img2.src;
                img2.src = tempSrc;

                // Reset the classes and styles
                img1.classList.remove('image-animate');
                img1.style.animationName = '';
                img2.classList.remove('image-animate');
                img2.style.animationName = '';
                img3.classList.remove('image-animate');
                img3.style.animationName = '';
            }, 2000);
        }

        setInterval(rotateImages, 2000);
    </script>

</body>

</html>