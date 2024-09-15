<?php

use function Livewire\Volt\{state};

//

?>

<div class="bg-black/90 py-4 flex justify-center text-white">
    <div class="flex justify-between items-center">
        <div class="w-full flex justify-between items-center gap-10">
            <div class="w-max">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-10 w-10" alt="Flowbite Logo" />
            </div>
            <div class="flex justify-between gap-1 cursor-pointer items-center group whitespace-nowrap relative">
                <div>Why Eovix?</div>
                <div>
                    <span>
                        <svg class="w-3.5 h-3.5 text-white group-hover:rotate-180 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <div class="absolute w-full top-10 cursor-default text-black">
                    <div class="-mx-12 group-hover:scale-y-100 scale-y-0 transition-transform duration-200 origin-top">
                        <div class="-my-3.5 flex justify-center">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-white text-sm font-semibold h-min grid grid-cols-1 gap-4 rounded-md shadow-md shadow-black/40 py-2">
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">About Us</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Mission</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Vision</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cursor-pointer">Courses</div>
            <div class="flex justify-between gap-1 cursor-pointer items-center group whitespace-nowrap relative">
                <div>All Courses</div>
                <div>
                    <span>
                        <svg class="w-3.5 h-3.5 text-white group-hover:rotate-180 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <div class="absolute w-full top-10 cursor-default text-black">
                    <div class="-mx-20 group-hover:scale-y-100 scale-y-0 transition-transform duration-200 origin-top">
                        <div class="-my-3.5 flex justify-center">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-white text-sm font-semibold h-min grid grid-cols-1 gap-4 rounded-md shadow-md shadow-black/40 py-2">
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Business Management</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">AI & Machine Learning</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Software Development</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Sustainability Education</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between gap-1 cursor-pointer items-center group whitespace-nowrap relative">
                <div>Course Categories</div>
                <div>
                    <span>
                        <svg class="w-3.5 h-3.5 text-white group-hover:rotate-180 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <div class="absolute w-full top-10 cursor-default text-black">
                    <div class="-mx-16 group-hover:scale-y-100 scale-y-0 transition-transform duration-200 origin-top">
                        <div class="-my-3.5 flex justify-center">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-white text-sm font-semibold h-min grid grid-cols-1 gap-4 rounded-md shadow-md shadow-black/40 py-2">
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Professional Certifications</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Skill Development</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Specialized Programs</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between gap-1 cursor-pointer items-center group whitespace-nowrap relative">
                <div>Sustainability Education</div>
                <div>
                    <span>
                        <svg class="w-3.5 h-3.5 text-white group-hover:rotate-180 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <div class="absolute w-full top-10 cursor-default text-black">
                    <div class="-mx-10 group-hover:scale-y-100 scale-y-0 transition-transform duration-200 origin-top">
                        <div class="-my-3.5 flex justify-center">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-white text-sm font-semibold h-min grid grid-cols-1 gap-4 rounded-md shadow-md shadow-black/40 py-2">
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Why Sustainability Matters</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Programs for Professionals</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Industry Insights</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Industry Insights</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Success Stories in Sustainability</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between gap-1 cursor-pointer items-center group whitespace-nowrap relative">
                <div>For Companies</div>
                <div>
                    <span>
                        <svg class="w-3.5 h-3.5 text-white group-hover:rotate-180 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <div class="absolute w-full top-10 cursor-default text-black">
                    <div class="-mx-16 group-hover:scale-y-100 scale-y-0 transition-transform duration-200 origin-top">
                        <div class="-my-3.5 flex justify-center">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-white text-sm font-semibold h-min grid grid-cols-1 gap-4 rounded-md shadow-md shadow-black/40 py-2">
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Corporate Training Programs</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Enterprise Solutions</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Partnerships</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between gap-1 cursor-pointer items-center group whitespace-nowrap relative">
                <div>Blog</div>
                <div>
                    <span>
                        <svg class="w-3.5 h-3.5 text-white group-hover:rotate-180 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <div class="absolute w-full top-10 cursor-default text-black">
                    <div class="-mx-16 group-hover:scale-y-100 scale-y-0 transition-transform duration-200 origin-top">
                        <div class="-my-3.5 flex justify-center">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-white text-sm font-semibold h-min grid grid-cols-1 gap-4 rounded-md shadow-md shadow-black/40 py-2">
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Industry News</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Educational Insights</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between gap-1 cursor-pointer items-center group whitespace-nowrap relative">
                <div>Contact Us</div>
                <div>
                    <span>
                        <svg class="w-3.5 h-3.5 text-white group-hover:rotate-180 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <div class="absolute w-full top-10 cursor-default text-black">
                    <div class="-mx-16 group-hover:scale-y-100 scale-y-0 transition-transform duration-200 origin-top">
                        <div class="-my-3.5 flex justify-center">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-white text-sm font-semibold h-min grid grid-cols-1 gap-4 rounded-md shadow-md shadow-black/40 py-2">
                            <a href="/contact" wire:navigate class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Contact Form</a>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Locations</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Customer Support</div>
                            <div class="px-4 py-2.5 cursor-pointer hover:bg-gray-200">Help Desk</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full"></div>
    </div>

</div>