<?php

use function Livewire\Volt\{state};

//

?>

<div>
    <div class="flex justify-between px-52 py-36 gap-20">
        <div class="w-3/5 grid grid-cols-1 gap-20 h-min">
            <div class="grid grid-cols-1 gap-6 h-min">
                <div class="text-5xl maven-pro-500 bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">Request a Demo: Experience Eovix in Action</div>
                <div class="text-2xl font-light tracking">
                    Are you ready to explore how Eovix can transform your educational programs, corporate training, or sustainability initiatives? We invite you to <span class="font-medium bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">Request a Demo</span> and experience firsthand how our cutting-edge solutions can empower your organization.
                </div>
                <div class="text-2xl font-light tracking">
                    Whether you’re interested in our <span class="font-medium bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">AI-driven learning platforms, sustainability education programs, or corporate training solutions</span>, our personalized demo will give you a comprehensive look at how Eovix can help you achieve your goals. Our team will guide you through the features, functionality, and impact of our offerings, ensuring you understand how they can be tailored to your specific needs.
                </div>
            </div>
            <div class="bg-white grid geid-cols-1 gap-8 h-min shadow-md shadow-black/30 w-full p-6">
                <div class="h-min grid grid-cols-1 gap-2 text-lg">
                    <div>Full Name <span class="text-pink-500">*</span></div>
                    <div><input type="text" class="outline-none border border-gray-300 p-2 focus:border-pink-500 transition-colors duraction-200 w-full"></div>
                </div>
                <div class="h-min grid grid-cols-1 gap-2 text-lg">
                    <div>Email <span class="text-pink-500">*</span></div>
                    <div><input type="text" class="outline-none border border-gray-300 p-2 focus:border-pink-500 transition-colors duraction-200 w-full"></div>
                </div>
                <div class="h-min grid grid-cols-1 gap-2 text-lg">
                    <div>Phone no <span class="text-pink-500">*</span></div>
                    <div><input x-mask="9999999999" class="outline-none border border-gray-300 p-2 focus:border-pink-500 transition-colors duraction-200 w-full"></div>
                </div>
                <div class="h-min grid grid-cols-1 gap-2 text-lg">
                    <div>Please tell us about your inquiry <span class="text-pink-500">*</span></div>
                    <div><textarea type="text" class="outline-none border border-gray-300 p-2 focus:border-pink-500 transition-colors duraction-200 w-full"></textarea></div>
                </div>
                <div class="text-lg text-gray-400">
                    We will be in touch within 24 hours
                </div>
                <div class="rounded-full p-4 bg-pink-500 text-white text-center text-xl font-semibold hover:bg-pink-700 transition-colors duration-500 cursor-pointer">
                    Submit
                </div>
            </div>
        </div>

        <div class="w-2/5 grid grid-cols-1 gap-28 h-min">
            <div class="flex justify-between gap-5">
                <div class="w-min">
                    <svg class="w-10 h-10 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13.46 8.291 3.849-3.849a1.5 1.5 0 0 1 2.122 0l.127.127a1.5 1.5 0 0 1 0 2.122l-3.84 3.838a4 4 0 0 0-2.258-2.238Zm0 0a4 4 0 0 1 2.263 2.238l3.662-3.662a8.961 8.961 0 0 1 0 10.27l-3.676-3.676m-2.25-5.17 3.678-3.676a8.961 8.961 0 0 0-10.27 0l3.662 3.662a4 4 0 0 0-2.238 2.258L4.615 6.863a8.96 8.96 0 0 0 0 10.27l3.662-3.662a4 4 0 0 0 2.258 2.238l-3.672 3.676a8.96 8.96 0 0 0 10.27 0l-3.662-3.662a4.001 4.001 0 0 0 2.238-2.262m0 0 3.849 3.848a1.5 1.5 0 0 1 0 2.122l-.127.126a1.499 1.499 0 0 1-2.122 0l-3.838-3.838a4 4 0 0 0 2.238-2.258Zm.29-1.461a4 4 0 1 1-8 0 4 4 0 0 1 8 0Zm-7.718 1.471-3.84 3.838a1.5 1.5 0 0 0 0 2.122l.128.126a1.5 1.5 0 0 0 2.122 0l3.848-3.848a4 4 0 0 1-2.258-2.238Zm2.248-5.19L6.69 4.442a1.5 1.5 0 0 0-2.122 0l-.127.127a1.5 1.5 0 0 0 0 2.122l3.849 3.848a4 4 0 0 1 2.238-2.258Z" />
                    </svg>
                </div>
                <div class="w-full h-min grid grid-cols-1 gap-6">
                    <div class="text-3xl maven-pro-500 tracking-wide">Need technical support?</div>
                    <div class="text-xl leading-7 font-light">Need a helping hand with a technical query? Our extensive library of <span class="text-pink-500 hover:text-pink-700 font-semibold cursor-pointer">user guides</span> covers some of our most frequently asked support questions.</div>
                    <div class="text-xl leading-7 font-light">If you can’t find an answer in these guides, you can <span class="text-pink-500 hover:text-pink-700 font-semibold cursor-pointer">submit a support ticket</span> and we’ll reach out to help ASAP!</div>
                </div>
            </div>
            <div class="flex justify-between gap-5">
                <div class="w-min">
                    <svg class="w-10 h-10 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="w-full h-min grid grid-cols-1 gap-6">
                    <div class="text-3xl maven-pro-500 tracking-wide">More about us</div>
                    <div class="text-xl leading-7 font-light">We’re open Monday to Friday, 9am – 5pm, excluding bank holidays.</div>
                    <div class="h-min grid grid-cols-1 gap-3">
                        <div class="inline-flex gap-4">
                            <div>
                                <svg class="w-8 h-8 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z" />
                                </svg>
                            </div>
                            <div class="text-pink-500 text-xl hover:underline cursor-pointer">01344 867 088</div>
                        </div>
                        <div class="inline-flex pl-1 gap-4">
                            <div>
                                <svg class="w-6 h-6 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z" />
                                    <path d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z" />
                                </svg>
                            </div>
                            <div class="text-pink-500 text-xl hover:underline cursor-pointer">hello@ihasco.co.uk</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between gap-5">
                <div class="w-min">
                    <svg class="w-10 h-10 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="w-full h-min grid grid-cols-1 gap-6">
                    <div class="text-3xl maven-pro-500 tracking-wide">Where to find us</div>
                    <div class="text-xl leading-7 font-light">Eovix, 3 Arlington Square, Downshire Way, Bracknell, <span class="text-pink-500 hover:text-pink-700 cursor-pointer">RG12 1WA.</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-52 pb-10 h-min grid grid-cols-1 gap-8">
        <div class="w-min whitespace-nowrap text-5xl maven-pro-500 bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent py-1">Why Request a Demo?</div>
        <div class="h-min grid grid-cols-1 gap-5">
            <div class="text-2xl">
                <span class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">See Our Solutions in Action: </span>
                <span class="font-light text-xl">
                    Get a live walkthrough of Eovix’s platforms, tools, and programs and how they can be integrated into your business or institution.
                </span>
            </div>

            <div class="text-2xl">
                <span class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">Tailored to Your Needs: </span>
                <span class="font-light text-xl">
                    Our demo is customized to address your specific requirements, whether you’re looking to upskill your workforce, integrate sustainability education, or enhance your institution’s curriculum.
                </span>
            </div>

            <div class="text-2xl">
                <span class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">Expert Guidance: </span>
                <span class="font-light text-xl">
                    Our team of experts will answer your questions, explain the key benefits of our solutions, and help you understand how Eovix can provide lasting value to your organization.
                </span>
            </div>

            <div class="text-2xl">
                <span class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">Explore Customization Options: </span>
                <span class="font-light text-xl">
                    Learn how Eovix can adapt to your organization’s unique needs, from personalized training modules to scalable educational programs.
                </span>
            </div>
        </div>
    </div>

    <div class="px-52 py-10 h-min grid grid-cols-1 gap-8">
        <div class="w-min whitespace-nowrap text-5xl maven-pro-500 bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent py-1">Who Should Request a Demo?</div>
        <div class="h-min grid grid-cols-1 gap-5">
            <div class="text-2xl">
                <span class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">Educational Institutions: </span>
                <span class="font-light text-xl">
                    Schools, universities, and training centers looking to integrate advanced learning tools, sustainability programs, or AI-driven solutions.
                </span>
            </div>

            <div class="text-2xl">
                <span class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">Corporate Leaders: </span>
                <span class="font-light text-xl">
                    Businesses aiming to upskill their teams, adopt sustainable practices, or drive digital transformation with Eovix’s corporate training solutions.
                </span>
            </div>

            <div class="text-2xl">
                <span class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">Government and NGOs: </span>
                <span class="font-light text-xl">
                    Organizations looking for educational programs that address sustainability, workforce development, and community empowerment.
                </span>
            </div>
        </div>
    </div>

    <div class="px-52 pb-10 h-min grid grid-cols-1 gap-8">
        <div class="w-min whitespace-nowrap text-5xl maven-pro-500 bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent py-1">What to Expect During Your Demo</div>
        <div class="h-min grid grid-cols-1 gap-5">
            <div class="text-2xl">
                <span class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">During the demo, our team will: </span>
            </div>
            <div class="grid grid-cols-1 gap-3 h-min">
                <div class="font-light text-xl">
                    Provide an in-depth overview of the Eovix platforms and solutions relevant to your sector.
                </div>
                <div class="font-light text-xl">
                    Show how our tools and programs can be customized to meet your organization’s unique needs. </div>
                <div class="font-light text-xl">
                    Demonstrate specific features, such as course management, real-time analytics, interactive learning modules, and more.
                </div>
                <div class="font-light text-xl">
                    Discuss the benefits and impact of adopting Eovix’s innovative solutions.
                </div>
            </div>
        </div>
    </div>

    <div class="px-52 pb-20 h-min grid grid-cols-1 gap-8">
        <div class="w-min whitespace-nowrap text-5xl maven-pro-500 bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent py-1">How to Request a Demo</div>
        <div class="h-min grid grid-cols-1 gap-5">
            <div class="text-2xl">
                <span class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">
                    It’s simple to get started! Just fill out the form below with your details, and our team will get in touch to schedule a time that works for you. We’ll ensure the demo is tailored to your organization’s needs and interests.
                </span>
            </div>
            <div class="grid grid-cols-1 gap-3 h-min">
                <div class="text-2xl">
                    <span class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">Contact Information: </span>
                    <span class="font-light text-xl">
                        Provide your name, company/school name, email, and phone number.
                    </span>
                </div>

                <div class="text-2xl">
                    <span class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">Area of Interest: </span>
                    <span class="font-light text-xl">
                        Let us know if you’re interested in <span class="text-pink-500 font-medium">education programs, corporate training,</span> or <span class="text-pink-500 font-medium">sustainability solutions.</span>
                    </span>
                </div>

                <div class="text-2xl">
                    <span class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">Contact Information: </span>
                    <span class="font-light text-xl">
                        Provide your name, company/school name, email, and phone number.
                    </span>
                </div>
            </div>
        </div>
    </div>


    <div>
        <div class="bg-gradient-to-r from-pink-500 to-violet-600 py-24 px-52 grid grid-cols-1 gap-5 h-min">
            <div class="text-white text-4xl maven-pro-500 tracking-tight">
                Get Started Today!
            </div>
            <div class="text-white text-xl">
                Ready to explore how Eovix can help you achieve your goals? <span class="font-bold text-2xl">Request a Demo</span> and discover how our innovative solutions can transform your organization and drive sustainable success. We look forward to working with you!
            </div>
            <div class="whitespace-nowrap flex justify-between gap-6 w-min">
                <div class="font-semibold text-white border border-white hover:bg-white hover:text-black transition-colors duration-500 cursor-pointer text-xl bg-transparent py-4 uppercase px-8 rounded-full">Request a Demo</div>
            </div>
        </div>
    </div>
</div>