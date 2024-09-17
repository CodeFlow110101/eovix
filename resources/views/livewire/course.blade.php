<?php

use function Livewire\Volt\{state, mount};

state(['course']);

mount(function ($path) {
    $this->course = str_replace("-", " ", str_replace("course/", "", $path));
});
?>

<div>
    <div class="px-52 py-28">
        <div class="flex justify-between gap-32">
            <div class="h-min grid grid-cols-1 gap-8 w-3/5">
                <div class="text-5xl maven-pro-500 capitalize">
                    {{$course}}
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

    <div class="grid grid-cols-1 gap-20 h-min py-2 px-52">
        <div class="grid grid-cols-2 gap-10">
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
                <div class="absolute -z-10 top-1/4 -left-28 rounded-full bg-gradient-to-r from-pink-500/60 to-violet-600/60 p-16 blur-xl w-1/2 aspect-square">
                    <div class="bg-white rounded-full w-full h-full"></div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="h-min grid grid-cols-1 gap-4 justify-center">
                    <div class="maven-pro-500 text-amber-400 text-3xl uppercase">WHY CHOOSE Eovix?</div>
                    <div class="grid grid-cols-1 gap-6 h-min">
                        <div class="inline-flex gap-2">
                            <div class="rounded-full p-1 bg-gray-400">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                </svg>
                            </div>
                            <div>
                                Easily work towards compliance with UK legislation
                            </div>
                        </div>
                        <div class="inline-flex gap-2">
                            <div class="rounded-full p-1 bg-gray-400">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                </svg>
                            </div>
                            <div>
                                Easily work towards compliance with UK legislation
                            </div>
                        </div>
                        <div class="inline-flex gap-2">
                            <div class="rounded-full p-1 bg-gray-400">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                </svg>
                            </div>
                            <div>
                                Easily work towards compliance with UK legislation
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-72">
        <div class="bg-black/90 px-52 pb-20">
            <div class="grid grid-cols-2 gap-2 h-min -translate-y-24">
                <div class="bg-white grid grid-cols-1 gap-4 p-6 h-min rounded-md shadow-md shadow-black/30">
                    <div class="text-xl maven-pro-500">Fire Awareness Training</div>
                    <div class="font-thin text-lg">Our Fire Awareness Training course aids with compliance towards current fire safety legislation. The course is IOSH Approved & CPD Accredited to give you a quality assurance of our course.</div>
                    <div class="mt-auto inline-flex gap-5 items-center">
                        <div class="inline-flex gap-2 items-center">
                            <div>
                                <svg class="w-5 h-5 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="font-light">25 min</div>
                        </div>
                        <div class="inline-flex gap-1 items-center">
                            <div>
                                <svg class="w-5 h-5 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                                </svg>
                            </div>
                            <div class="font-thin">Health & Safety</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-20 px-52 flex justify-between items-center">
        <div class="w-full grid grid-cols-1 gap-4">
            <div class="text-amber-400 maven-pro-600 text-3xl">
                Your Legal Fire Safety Responsibilities
            </div>
            <div class="font-thin text-xl">
                Remember – Fire and Health and Safety legislation means fire safety training is required by law for ALL staff. Every employer must ensure that there are appropriate fire safety measures in place to prevent fires from happening in the first place but must also implement measures that minimise the risk of injury and loss of life in the event of a fire.
            </div>
            <div class="maven-pro-600 text-2xl">
                The Regulatory Reform (Fire Safety) Order 2005
            </div>
            <div class="font-thin text-xl">
                It is the ‘responsible person’s’ duty to make sure that all employees are provided with suitable fire safety training.
            </div>
            <div class="maven-pro-600 text-2xl">
                The Health and Safety at Work Act 1974
            </div>
            <div class="font-thin text-xl">
                States that all staff are obliged to undertake Fire Safety Training.
            </div>
        </div>
        <div class="w-full flex justify-end">
            <div class="rounded-full bg-gradient-to-r from-pink-500 to-violet-600 blur-xl p-5 w-1/2 aspect-square">
                <div class="bg-white p-8 rounded-full w-full h-full">
                    <div class="bg-gradient-to-r from-pink-500 to-violet-600 w-full h-full p-8 rounded-full">
                        <div class="bg-white rounded-full w-full h-full">
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

    <div class="px-52 py-20 h-min grid grid-cols-1 gap-8">
        <div class="text-amber-400 maven-pro-600 text-3xl">
            Frequently asked questions
        </div>
        <div>
            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border border-black/10 cursor-pointer">Why is fire safety training important?</div>
                <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                    <div class="px-6 py-4 text-lg font-thin border border-black/10 bg-white">
                        UK fire services were called to over 11,000 primary fires in non-domestic buildings in 2019/20. Proper fire safety training is needed to help protect employees and visitors in the unlikely event of a fire, whilst helping them prevent fires in the first instance. Our online fire safety training courses will educate your workforce on managing fire risks, fire extinguisher use, fire safety precautions, and more. Fire safety training is also a legal requirement in the UK; the regulations are stated in the Health and Safety at Work Act 1974 and the Regulatory Reform (Fire Safety) Order 2005. All employers must provide adequate training to their employees so they are aware of fire safety measures and how to act should there be a fire. Employers should also conduct frequent refreshers to ensure employees retain the knowledge gained during initial training. Failing to stick to these regulations can result in fines and/or prosecution.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>