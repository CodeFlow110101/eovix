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
                    <div class="text-6xl maven-pro-600">training made <span class="text-amber-400">simple</span></div>
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

    <div class="grid grid-cols-1 gap-4 h-min py-2 px-52">
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
                <div class="inline-flex items-center gap-2">
                    <div>
                        <svg class="w-6 h-6 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7" />
                        </svg>
                    </div>
                    <div class="text-pink-500 text-lg hover:underline cursor-pointer">Learn more about training delivery</div>
                </div>
            </div>
        </div>
    </div>
</div>