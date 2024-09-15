<?php

use function Livewire\Volt\{state};

//

?>

<div>
    <div class="border-y border-black/10 py-12 flex justify-between items-center gap-2 px-52">
        <img class="w-40 h-20" src="{{asset('/images/home_16.svg')}}">
        <img class="w-40 h-20" src="{{asset('/images/home_17.svg')}}">
        <img class="w-40 h-16" src="{{asset('/images/home_19.webp')}}">
        <img class="w-52 h-32" src="{{asset('/images/home_20.svg')}}">
        <img class="w-40 h-20" src="{{asset('/images/home_21.svg')}}">
    </div>

    <div class="h-min grid grid-cols-4 gap-4 py-20 px-52">
        <div class="h-min grid grid-cols-1 gap-4">
            <div class="h-min grid grid-cols-1 gap-4">
                <div class="text-xl maven-pro-500 hover:text-black/50 cursor-pointer">Product</div>
                <div class="h-min grid grid-cols-1 gap-2">
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">Features</div>
                    </div>
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">Courses</div>
                    </div>
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">Pricing</div>
                    </div>
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">Reviews</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-min grid grid-cols-1 gap-4">
            <div class="h-min grid grid-cols-1 gap-4">
                <div class="text-xl maven-pro-500 hover:text-black/50 cursor-pointer">Support</div>
                <div class="h-min grid grid-cols-1 gap-2 whitespace-nowrap">
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">We’re here to help</div>
                    </div>
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">Submit a support ticket</div>
                    </div>
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">User guides</div>
                    </div>
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">FAQs & resources</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-min grid grid-cols-1 gap-4">
            <div class="h-min grid grid-cols-1 gap-4">
                <div class="text-xl maven-pro-500 hover:text-black/50 cursor-pointer">Company</div>
                <div class="h-min grid grid-cols-1 gap-2 whitespace-nowrap">
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">About us</div>
                    </div>
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">Approved training</div>
                    </div>
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">Careers</div>
                    </div>
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">Contact us</div>
                    </div>
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">Client stories</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-min grid grid-cols-1 gap-4">
            <div class="h-min grid grid-cols-1 gap-4">
                <div class="text-xl maven-pro-500 hover:text-black/50 cursor-pointer">Blogs, news & updates</div>
                <div class="h-min grid grid-cols-1 gap-2 whitespace-nowrap">
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">Course announcements</div>
                    </div>
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">Product development</div>
                    </div>
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">Quizzes</div>
                    </div>
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">eLearning news & guides</div>
                    </div>
                    <div>
                        <div class="text-black hover:text-pink-500 w-min cursor-pointer">Health & Safety / HR FAQs</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-52 pb-32 text-black">
        <div class="h-min grid grrid-cols-1 gap-2">
            <div class="w-min flex justify-between items-center gap-2">
                <div class="maven-pro-600 text-5xl">Eovix</div>
                <div class="w-max">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-12 w-12" alt="Flowbite Logo" />
                </div>
            </div>
            <div class="inline-flex items-center gap-5">
                <div class="text-xl tracking-wide font-thin border-b-2 border-black border-dotted w-min whitespace-nowrap">© 2024 Eovix</div>
                <div class="text-xl font-normal hover:underline underline-offset-4 cursor-pointer">Terms & Conditions</div>
            </div>
        </div>
    </div>
</div>