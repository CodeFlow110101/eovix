<?php

use function Livewire\Volt\{state, mount};

state(['course']);

mount(function ($path) {
    $this->course = str_replace("courses/", "", $path);
});
?>

<div class="px-52 py-28">
    <div class="flex justify-between gap-32">
        <div class="h-min grid grid-cols-1 gap-8 w-3/5">
            <div class="text-5xl maven-pro-500 capitalize">
                {{str_replace('-',' ',$course)}}
            </div>
            <div class="text-2xl font-light tracking-wider leading-9">
                Our online IOSH-approved fire safety courses offer in-depth fire safety training to organisations across the UK. These comprehensive fire safety courses train employees to minimise and control fire risks safely. Learn essential topics such as fire awareness, fire extinguisher training, fire warden (aka marshal) training, and fire risk assessments in our fire safety eLearning bundle. Our online courses are easily accessed and can be completed wherever you have a desktop, smartphone or tablet.
            </div>
        </div>
        <div class="w-2/5 relative">
            <div class="grid grid-cols-1 gap-8 h-min bg-white shadow-md shadow-black/30 p-8">
                <div class="maven-pro-500 text-3xl">Start a better training experience</div>
                <div>
                    <input class="w-full p-3 text-lg outline-none border border-gray-400 focus:border-pink-500 transition-colors duration-500 rounded-md" placeholder="Your Email address">
                </div>
                <div class="rounded-full p-4 bg-pink-500 text-white text-center text-xl font-semibold hover:bg-pink-700 transition-colors duration-500 cursor-pointer">
                    Request a Quote
                </div>
            </div>
            <div class="absolute -z-10 top-3 -right-32 rounded-full bg-gradient-to-r from-pink-500 to-violet-600 blur-xl p-5 w-full aspect-square">
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