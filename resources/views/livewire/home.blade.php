<?php

use function Livewire\Volt\{state};

//

?>

<div>
    <div class="bg-gradient-to-r from-pink-500 to-violet-600 py-40 px-52 flex justify-center">
        <div class="flex justify-center w-full">
            <div class="flex justify-center gap-24">
                <div class="text-white w-3/5 h-min grid grid-cols-1 gap-3.5">
                    <div class="text-6xl maven-pro-600">Online workplace</div>
                    <div class="text-6xl maven-pro-600 tracking-tight">training made <span class="text-amber-400">Simple</span></div>
                    <div class="text-xl">
                        With our easy-to-use online training platform and extensive library of accredited, high-quality courses, sorting your workplace training is a breeze.
                    </div>
                    <div class="text-xl">
                        Covering business critical topics such as Health & Safety, HR, Compliance and Soft Skills training, we can help you get started with a wide range of courses and packages to suit all needs.
                    </div>
                </div>
                <div class="bg-white rounded-lg grid grid-cols-1 w-2/5 gap-4 p-6">
                    <div class="text-3xl maven-pro-600">Get Started</div>
                    <div class="text-base font-normal"><span class="text-pink-500">Request a quote</span> or get started for free and see why tens of thousands of organisations use us to keep their staff safe, happy, and productive.</div>
                    <div class="text-lg"><input class="border border-black w-full outline-none rounded-sm py-3 px-4" placeholder="Your email address"></div>
                    <div class="bg-pink-500 p-4 text-center text-white text-xl rounded-full font-semibold mt-6 hover:bg-pink-600 cursor-pointer">Start My Free Trail</div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="px-52">
            <div class="grid grid-cols-3 gap-14 bg-white -translate-y-12 p-8 pt-8 pb-14 shadow-md shadow-black/30 rounded-xl">
                <div class="h-min grid grid-cols-1 gap-4 cursor-pointer group">
                    <div class="maven-pro-700 text-black/90 group-hover:text-black/60 text-2xl tracking-tight">Training Delivery</div>
                    <div class="font-normal text-black/80">Your staff deserve a simple and effective learning experience. Online training allows your team to access digestible courses at </div>
                </div>
                <div class="h-min grid grid-cols-1 gap-4 cursor-pointer group">
                    <div class="maven-pro-700 text-black/90 group-hover:text-black/60 text-2xl tracking-tight">Course Content</div>
                    <div class="font-normal text-black/80">Our library of high-quality, video-based online courses covers topics like Health & Safety, HR, Compliance, and </div>
                </div>
                <div class="h-min grid grid-cols-1 gap-4 cursor-pointer group">
                    <div class="maven-pro-700 text-black/90 group-hover:text-black/60 text-2xl tracking-tight">Management & Reporting</div>
                    <div class="font-normal text-black/80">Access the smart features you need without the crazy cost of an enterprise LMS, saving you both time </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-20 h-min py-2 px-52">
        <div class="grid grid-cols-2 gap-10">
            <div class="relative">
                <img class="w-full" src="{{asset('/images/home_1.webp')}}">
                <div class="absolute -z-10 top-1/4 -left-20 rounded-full bg-gradient-to-r from-pink-500 to-violet-600 p-16 blur-2xl w-1/2 aspect-square">
                    <div class="bg-white rounded-full w-full h-full"></div>
                </div>
            </div>
            <div class="h-min grid grid-cols-1 gap-4">
                <div class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent text-5xl tracking-tight maven-pro-700 py-4">Simple training delivery</div>
                <div class="text-lg">An accessible and simple-to-use learning experience which delivers online training effectively for everyone.</div>
                <div class="text-lg">Our online training courses are compatible on any device, include closed captions, and can be machine translated into over 41 international languages.</div>
                <div class="inline-flex items-center gap-2 pt-10">
                    <div>
                        <svg class="w-6 h-6 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7" />
                        </svg>
                    </div>
                    <div class="text-pink-500 text-lg hover:underline cursor-pointer">Learn more about training delivery</div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-10">
            <div class="h-min grid grid-cols-1 gap-4">
                <div class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent text-5xl tracking-tight maven-pro-700 py-4">Over 180 high quality online courses</div>
                <div class="text-lg">With an extensive library of over 180 high-quality eLearning courses available in 41+ languages, we’ve certainly got a course or two for your staff. These online courses are perfect for building up the core skills of your employees and helping them towards</div>
                <div class="inline-flex items-center gap-2 pt-10">
                    <div>
                        <svg class="w-6 h-6 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7" />
                        </svg>
                    </div>
                    <div class="text-pink-500 text-lg hover:underline cursor-pointer">Learn more about training delivery</div>
                </div>
            </div>
            <div class="relative">
                <div class="rounded-3xl shadow-md shadow-black/30 group cursor-pointer">
                    <div class="bg-amber-400 rounded-t-3xl uppercase text-2xl text-center maven-pro-500 py-8">Approved & accredited</div>
                    <div class="px-10 py-8 grid grid-cols-1 gap-4 bg-white rounded-b-3xl">
                        <div class="flex justify-between items-center">
                            <div class="w-full grayscale group-hover:grayscale-0">
                                <img src="{{ asset('images/home_2.svg') }}">
                            </div>
                            <div class="w-full flex justify-center">
                                <img class="w-28 grayscale group-hover:grayscale-0" src="{{ asset('images/home_3.svg') }}">
                            </div>
                        </div>
                        <div class="flex justify-between items-center gap-12">
                            <div class="w-full">
                                <img class="grayscale group-hover:grayscale-0" src="{{ asset('images/home_4.svg') }}">
                            </div>
                            <div class="w-full">
                                <img class="grayscale group-hover:grayscale-0" src="{{ asset('images/home_5.svg') }}">
                            </div>
                            <div class="w-full">
                                <img class="grayscale group-hover:grayscale-0" src="{{ asset('images/home_6.svg') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute -z-10 top-3 -right-32 rounded-full bg-gradient-to-r from-pink-500 to-violet-600 blur-lg p-5 w-3/5 aspect-square">
                    <div class="bg-white p-8 rounded-full w-full h-full">
                        <div class="bg-gradient-to-r from-pink-500 to-violet-600 w-full h-full p-8 rounded-full">
                            <div class="bg-white rounded-full w-full h-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-24 px-52 grid grid-cols-1 gap-12">
        <div class="capitalize maven-pro-500 text-3xl">Popular courses</div>
        <div class="grid grid-cols-4 gap-4">
            <div class="rounded-lg shadow-md shadow-black/30 group">
                <div>
                    <div class="flex items-center justify-center h-32 group-hover:h-28 transition-all duration-200 rounded-t-lg bg-gray-300 rounded w-full">
                        <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                        </svg>
                    </div>
                </div>
                <div class="p-4 h-44 flex flex-col">
                    <div class="grid grid-cols-1 gap-2 h-min">
                        <div class="text-gray-800 text-sm">Health and Safety</div>
                        <div class="maven-pro-600 text-xl tracking-tighter">Fire Awareness Training</div>
                    </div>
                    <div class="mt-auto text-black/50 text-sm tracking-tighter">RoSPA, IOSH, CPD, IIRSM, Skills For Care</div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 px-52 grid grid-cols-1 gap-12">
        <div class="maven-pro-600 text-5xl tracking-tighter">You may also like</div>
        <div class="grid grid-cols-3 gap-4">
            <div class="text-pink-500 text-lg hover:underline cursor-pointer">Learn more about training delivery</div>
            <div class="text-pink-500 text-lg hover:underline cursor-pointer">Learn more about training delivery</div>
            <div class="text-pink-500 text-lg hover:underline cursor-pointer">Learn more about training delivery</div>
            <div class="text-pink-500 text-lg hover:underline cursor-pointer">Learn more about training delivery</div>
            <div class="text-pink-500 text-lg hover:underline cursor-pointer">Learn more about training delivery</div>
            <div class="text-pink-500 text-lg hover:underline cursor-pointer">Learn more about training delivery</div>
            <div class="text-pink-500 text-lg hover:underline cursor-pointer">Learn more about training delivery</div>
            <div class="text-pink-500 text-lg hover:underline cursor-pointer">Learn more about training delivery</div>
        </div>
        <div class="flex justify-center">
            <div class="border border-pink-500 hover:border-violet-600 px-4 py-2 rounded-full text-pink-500 hover:text-violet-600 font-bold transition-colors duration-500 cursor-pointer uppercase">Browse all training courses</div>
        </div>
    </div>

    <div class="py-16 px-52">
        <div class="grid grid-cols-2 gap-10">
            <div class="h-min grid grid-cols-1 gap-4">
                <div class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent text-5xl tracking-tight maven-pro-700 py-4">Easy management and reporting</div>
                <div class="text-lg">Atlas, our Learning Management System, gives you that ‘at a glance’ view so you can quickly see if your staff are up to date with their chosen online training courses and personal development while still providing the tools to drill down and look at the finer details.</div>
                <div class="text-lg">Easily onboard your staff, take the headache out of administration, and let Atlas automate your </div>
                <div class="inline-flex items-center gap-2 pt-10">
                    <div>
                        <svg class="w-6 h-6 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7" />
                        </svg>
                    </div>
                    <div class="text-pink-500 text-lg hover:underline cursor-pointer">Learn more about our Learning Management System</div>
                </div>
            </div>
            <div class="relative">
                <div class="p-2">
                    <img class="w-full" src="{{asset('/images/home_7.webp')}}">
                </div>
                <div class="absolute -z-10 top-3 -right-32 rounded-full bg-gradient-to-r from-pink-500 to-violet-600 blur-lg p-5 w-3/5 aspect-square">
                    <div class="bg-white p-8 rounded-full w-full h-full">
                        <div class="bg-gradient-to-r from-pink-500 to-violet-600 w-full h-full p-8 rounded-full">
                            <div class="bg-white rounded-full w-full h-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-20">
        <div class="bg-gradient-to-r from-pink-500 to-violet-600 py-24 px-52 grid grid-cols-1 gap-5 h-min">
            <div class="text-white text-4xl maven-pro-500 tracking-tight">
                Ready to get started?
            </div>
            <div class="whitespace-nowrap flex justify-between gap-6 w-min">
                <div class="font-semibold text-xl bg-amber-400 hover:bg-amber-500 transition-colors duration-300 cursor-pointer py-4 uppercase px-8 rounded-full">Try it for free</div>
                <div class="font-semibold text-white border border-white hover:bg-white hover:text-black transition-colors duration-500 cursor-pointer text-xl bg-transparent py-4 uppercase px-8 rounded-full">Request a quote</div>
            </div>
        </div>
    </div>

    <div class="py-6 px-52 grid grid-cols-2 gap-4">
        <div class="w-full grid grid-cols-1 gap-4 h-min">
            <div class="maven-pro-600 text-5xl">Employees & employers rated us</div>
            <div class="text-xl font-light">Check out the thousands of reviews our clients have submitted to learn how we’ve made workplace training simple for their business.</div>
            <div class="inline-flex items-center gap-2 pt-10">
                <div>
                    <svg class="w-6 h-6 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7" />
                    </svg>
                </div>
                <div class="text-pink-500 text-lg hover:underline cursor-pointer">Read our reviews</div>
            </div>
        </div>
        <div class="w-full text-center grid grid-cols-1 h-min gap-8">
            <div class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text maven-pro-500 text-transparent">
                <span class="text-8xl">4.7</span>
                <span class="text-5xl">out of 5</span>
            </div>
            <div class="flex justify-center">
                <div class="inline-flex items-center gap-6">
                    <div>
                        <img class="w-full h-8" src="{{asset('/images/home_8.svg')}}">
                    </div>
                    <div>
                        <img class="w-full h-8" src="{{asset('/images/home_9.svg')}}">
                    </div>
                    <div>
                        <img class="w-full h-12" src="{{asset('/images/home_10.svg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-28 my-16 bg-black/90 grid grid-cols-1 gap-8 h-min text-center">
        <div class="text-white maven-pro-600 text-4xl">We've helped over <span class="text-8xl bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text maven-pro-600 tracking-tighter text-transparent">12,000</span> organisations</div>
        <div class="text-white text-lg">We’re proud to help businesses of all sizes. See how with our client success stories…</div>
        <div class="flex justify-between gap-3 pt-12 px-52 items-center">
            <img class="w-32 h-12" src="{{asset('/images/home_11.webp')}}">
            <img class="w-auto h-32" src="{{asset('/images/home_12.webp')}}">
            <img class="w-auto h-12" src="{{asset('/images/home_13.webp')}}">
            <img class="w-auto h-20" src="{{asset('/images/home_14.png')}}">
            <img class="w-auto h-12" src="{{asset('/images/home_15.webp')}}">
        </div>
    </div>

    <div class="py-24 px-52 grid grid-cols-1 gap-12">
        <div class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent text-5xl maven-pro-700 py-4">Blogs,news & updates</div>
        <div class="grid grid-cols-3 gap-4">
            <div class="rounded-lg shadow-md shadow-black/30 group cursor-pointer">
                <div>
                    <div class="flex items-center justify-center h-48 group-hover:h-40 transition-all duration-200 rounded-t-lg bg-gray-300 rounded w-full">
                        <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                        </svg>
                    </div>
                </div>
                <div class="p-4 h-32 flex flex-col">
                    <div class="grid grid-cols-1 gap-2 h-min">
                        <div class="text-gray-800 text-sm">Health and Safety</div>
                        <div class="maven-pro-600 text-xl tracking-tighter">Fire Awareness Training</div>
                    </div>
                    <div class="mt-auto text-black/50 text-sm tracking-tighter">RoSPA, IOSH, CPD, IIRSM, Skills For Care</div>
                </div>
            </div>
        </div>
        <div class="pt-4 flex justify-center">
            <div class="border border-pink-500 hover:border-violet-600 px-4 py-2 rounded-full text-pink-500 hover:text-violet-600 font-bold transition-colors duration-500 cursor-pointer uppercase">Read more from our blogs</div>
        </div>
    </div>

</div>