<?php

use function Livewire\Volt\{state};

//

?>

<div class="bg-black/90 py-4 flex justify-center text-white">
    <div class="flex justify-between items-center w-full px-52">
        <div class="w-full flex justify-evenly items-center">
            <a href="/" wire:navigate class="w-max">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-10 w-10" alt="Flowbite Logo" />
            </a>
            <div class="flex justify-between gap-1 cursor-pointer items-center group whitespace-nowrap relative">
                <div class="text-lg">Why Eovix?</div>
                <div>
                    <span>
                        <svg class="w-3.5 h-3.5 text-white group-hover:rotate-180 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <div class="absolute z-10 group-hover:scale-y-100 scale-y-0 transition-transform duration-200 origin-top w-full top-10 cursor-default text-black">
                    <div class="-mx-12">
                        <div class="-my-3.5 flex justify-center">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-white text-sm font-semibold h-min grid grid-cols-1 gap-0 rounded-md shadow-md shadow-black/40 py-2">
                            <a href="/our-story" wire:navigate class="px-4 py-3 cursor-pointer hover:bg-gray-200">Our Story</a>
                            <a href="/our-values" wire:navigate class="px-4 py-3 cursor-pointer hover:bg-gray-200">Our Values</a>
                            <a href="/our-impact" wire:navigate class="px-4 py-3 cursor-pointer hover:bg-gray-200">Our Impact</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between gap-1 cursor-pointer items-center group whitespace-nowrap relative">
                <div class="text-lg">Programs</div>
                <div>
                    <span>
                        <svg class="w-3.5 h-3.5 text-white group-hover:rotate-180 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <div class="absolute z-10 w-full group-hover:scale-y-100 scale-y-0 transition-transform duration-200 origin-top top-10 cursor-default text-black">
                    <div class="-mx-20">
                        <div class="-my-3.5 flex justify-center">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-white text-sm font-semibold h-min grid grid-cols-1 gap-0 rounded-md shadow-md shadow-black/40 py-2">
                            <a href="/course/business-management" wire:navigate class="px-4 py-3 cursor-pointer hover:bg-gray-200">For Students</a>
                            <a href="/course/ai-&-machine-learning" wire:navigate class="px-4 py-3 cursor-pointer hover:bg-gray-200">For Professionals</a>
                            <a href="/course/software-development" wire:navigate class="px-4 py-3 cursor-pointer hover:bg-gray-200">For Schools and Universities</a>
                            <a href="/course/sustainability-education" wire:navigate class="px-4 py-3 cursor-pointer hover:bg-gray-200">For Corporate</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between gap-1 cursor-pointer items-center group whitespace-nowrap relative">
                <div class="text-lg">Sustainability</div>
                <div>
                    <span>
                        <svg class="w-3.5 h-3.5 text-white group-hover:rotate-180 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <div class="absolute z-10 group-hover:scale-y-100 scale-y-0 transition-transform duration-200 origin-top w-full top-10 cursor-default text-black">
                    <div class="-mx-16">
                        <div class="-my-3.5 flex justify-center">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-white text-sm font-semibold h-min grid grid-cols-1 gap-0 rounded-md shadow-md shadow-black/40 py-2">
                            <div class="px-4 py-3 cursor-pointer hover:bg-gray-200">Why Sustainability Matters?</div>
                            <div class="px-4 py-3 cursor-pointer hover:bg-gray-200">Sustainability Education</div>
                            <div class="px-4 py-3 cursor-pointer hover:bg-gray-200">Success Stories</div>
                            <div class="px-4 py-3 cursor-pointer hover:bg-gray-200">Industry Insights</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between gap-1 cursor-pointer items-center group whitespace-nowrap relative">
                <div class="text-lg">Partnerships</div>
                <div>
                    <span>
                        <svg class="w-3.5 h-3.5 text-white group-hover:rotate-180 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <div class="absolute z-10 group-hover:scale-y-100 scale-y-0 transition-transform duration-200 origin-top w-full top-10 cursor-default text-black">
                    <div class="-mx-10">
                        <div class="-my-3.5 flex justify-center">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-white text-sm font-semibold h-min grid grid-cols-1 gap-0 rounded-md shadow-md shadow-black/40 py-2">
                            <div class="px-4 py-3 cursor-pointer hover:bg-gray-200">WCorporate Partnerships</div>
                            <div class="px-4 py-3 cursor-pointer hover:bg-gray-200">Academic Partnerships</div>
                            <div class="px-4 py-3 cursor-pointer hover:bg-gray-200">Government & NGOs</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between gap-1 cursor-pointer items-center group whitespace-nowrap relative">
                <div class="text-lg">Resources</div>
                <div>
                    <span>
                        <svg class="w-3.5 h-3.5 text-white group-hover:rotate-180 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <div class="absolute z-10 group-hover:scale-y-100 scale-y-0 transition-transform duration-200 origin-top w-full top-10 cursor-default text-black">
                    <div class="-mx-16">
                        <div class="-my-3.5 flex justify-center">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-white text-sm font-semibold h-min grid grid-cols-1 gap-0 rounded-md shadow-md shadow-black/40 py-2">
                            <div class="px-4 py-3 cursor-pointer hover:bg-gray-200">Blog</div>
                            <div class="px-4 py-3 cursor-pointer hover:bg-gray-200">Case Studies</div>
                            <div class="px-4 py-3 cursor-pointer hover:bg-gray-200">Whitepapers and Reports</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-lg">Careers</div>
            <div class="flex justify-between gap-1 cursor-pointer items-center group whitespace-nowrap relative">
                <div class="text-lg">Contact Us</div>
                <div>
                    <span>
                        <svg class="w-3.5 h-3.5 text-white group-hover:rotate-180 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <div class="absolute z-10 group-hover:scale-y-100 scale-y-0 transition-transform duration-200 origin-top w-full top-10 cursor-default text-black">
                    <div class="-mx-16">
                        <div class="-my-3.5 flex justify-center">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-white text-sm font-semibold h-min grid grid-cols-1 gap-0 rounded-md shadow-md shadow-black/40 py-2">
                            <a href="/contact" wire:navigate class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Get in Touch</a>
                            <div class="px-4 py-3 cursor-pointer hover:bg-gray-200">Locations</div>
                            <div class="px-4 py-3 cursor-pointer hover:bg-gray-200">Request a Demo</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>