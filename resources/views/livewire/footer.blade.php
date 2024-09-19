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

    <div class=" pt-20 pb-32 px-52 h-min grid grid-cols-1 gap-12">
        <div class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent maven-pro-600 text-4xl w-min whitespace-nowrap">
            Useful Links
        </div>
        <div class="h-min grid grid-cols-3 gap-12 text-lg maven-pro-500">
            <div class="h-min grid grid-cols-1 gap-4">
                <div class="h-min grid grid-cols-1 gap-2 whitespace-nowrap">
                    <div>
                        <a href="/our-values" wire:navigate class="hover:text-black/50 cursor-pointer">Our Values</a>
                    </div>
                    <div>
                        <a href="/our-impact" wire:navigate class="hover:text-black/50 cursor-pointer">Our Impact</a>
                    </div>
                </div>
            </div>
            <div class="h-min grid grid-cols-1 gap-4">
                <div class="h-min grid grid-cols-1 gap-4">
                    <div class="hover:text-black/50 cursor-pointer">For Students</div>
                    <div class="hover:text-black/50 cursor-pointer">For Professionals</div>
                    <div class="hover:text-black/50 cursor-pointer">For Schools and Universities</div>
                    <div class="hover:text-black/50 cursor-pointer">For Corporates</div>
                </div>
            </div>
            <div class="h-min grid grid-cols-1 gap-4">
                <div class="h-min grid grid-cols-1 gap-2">
                    <div class="hover:text-black/50 cursor-pointer">Why Sustainability Matters</div>
                    <div class="hover:text-black/50 cursor-pointer">Sustainability Education</div>
                    <div class="hover:text-black/50 cursor-pointer">Success Stories</div>
                    <div class="hover:text-black/50 cursor-pointer">Industry Insights</div>
                </div>
            </div>
            <div class="h-min grid grid-cols-1 gap-4">
                <div class="h-min grid grid-cols-1 gap-2 whitespace-nowrap">
                    <div class="hover:text-black/50 cursor-pointer">Corporate Partnerships</div>
                    <div class="hover:text-black/50 cursor-pointer">Academic Partnerships</div>
                    <div class="hover:text-black/50 cursor-pointer">Success Stories</div>
                    <div class="hover:text-black/50 cursor-pointer">Government & NGOs</div>
                </div>
            </div>
            <div class="h-min grid grid-cols-1 gap-4">
                <div class="h-min grid grid-cols-1 gap-2">
                    <div class="hover:text-black/50 cursor-pointer">Blog</div>
                    <div class="hover:text-black/50 cursor-pointer">Case Studies</div>
                    <div class="hover:text-black/50 cursor-pointer">Whitepapers and Reports</div>
                </div>
            </div>
            <div class="h-min grid grid-cols-1 gap-4">
                <div class="h-min grid grid-cols-1 gap-2">
                    <div class="hover:text-black/50 cursor-pointer">Get in Touch</div>
                    <div class="hover:text-black/50 cursor-pointer">Locations</div>
                    <div class="hover:text-black/50 cursor-pointer">Request a Demo</div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-52 pb-32 h-min grid grid-cols-1 gap-12">
        <div class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent maven-pro-600 text-4xl w-min whitespace-nowrap">
            Frequently asked questions
        </div>
        <div>
            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border-t border-x border-black/10 cursor-pointer">
                    What is Eovix Technologies?
                </div>
                <div class="border-t border-x border-black/10">
                    <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                        <div class="px-6 py-4 text-lg font-thin bg-white">
                            Eovix Technologies is an innovative EdTech company focused on providing educational solutions in sustainability, artificial intelligence (AI), and emerging technologies. We offer a range of programs designed to empower students, professionals, and organizations with the knowledge and skills needed to thrive in the modern world.
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border-x border-black/10 cursor-pointer">
                    What kind of programs does Eovix offer?
                </div>
                <div class="border-t border-x border-black/10">
                    <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                        <div class="px-6 grid grid-cols-1 gap-4 h-min py-4 text-lg font-thin bg-white">
                            <div>
                                Eovix offers a wide variety of programs across several key areas:
                            </div>
                            <div class="px-2 grid grid-cols-1 gap-4">
                                <div>
                                    <span class="font-normal">
                                        1) Sustainability Education:
                                    </span>
                                    <span>
                                        Courses and workshops focused on climate change, renewable energy, and sustainable business practices.
                                    </span>
                                </div>

                                <div>
                                    <span class="font-normal">
                                        2) AI and Emerging Technologies:
                                    </span>
                                    <span>
                                        Programs on artificial intelligence, machine learning, data science, and digital transformation.
                                    </span>
                                </div>

                                <div>
                                    <span class="font-normal">
                                        3) Semiconductor Manufacturing and Design:
                                    </span>
                                    <span>
                                        Specialized courses aimed at professionals and students interested in the semiconductor industry.
                                    </span>
                                </div>

                                <div>
                                    <span class="font-normal">
                                        4) Corporate Training:
                                    </span>
                                    <span>
                                        Customized training solutions for businesses looking to upskill their workforce in sustainability, leadership, and emerging technologies.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border-x border-black/10 cursor-pointer">
                    Who can benefit from Eovix programs?
                </div>
                <div class="border-t border-x border-black/10">
                    <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                        <div class="px-6 grid grid-cols-1 gap-4 h-min py-4 text-lg font-thin bg-white">
                            <div>
                                Eovix programs are designed for a diverse audience, including:
                            </div>
                            <div class="px-2 grid grid-cols-1 gap-4">
                                <div>
                                    <span class="font-normal">
                                        1) Students:
                                    </span>
                                    <span>
                                        Those looking to enhance their knowledge in AI, sustainability, and other emerging fields.
                                    </span>
                                </div>

                                <div>
                                    <span class="font-normal">
                                        2) Professionals:
                                    </span>
                                    <span>
                                        Individuals seeking to upskill or reskill in their careers, particularly in areas like technology, leadership, and sustainability.
                                    </span>
                                </div>

                                <div>
                                    <span class="font-normal">
                                        3) Corporates:
                                    </span>
                                    <span>
                                        Businesses aiming to implement training solutions for their teams, improve sustainability practices, or embrace digital transformation.
                                    </span>
                                </div>

                                <div>
                                    <span class="font-normal">
                                        4) Educational Institutions:
                                    </span>
                                    <span>
                                        Schools and universities looking to integrate innovative curricula focused on sustainability and technology.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border-x border-black/10 cursor-pointer">
                    Are Eovix programs available online?
                </div>
                <div class="border-t border-x border-black/10">
                    <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                        <div class="px-6 grid grid-cols-1 gap-4 h-min py-4 text-lg font-thin bg-white">
                            <div>
                                Yes, Eovix offers a range of <span class="font-medium">online programs</span> that are accessible from anywhere in the world. We provide flexible learning options, including on-demand courses and live virtual sessions, making it convenient for learners to access education at their own pace.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border-x border-black/10 cursor-pointer">
                    How does Eovix support businesses through corporate training?
                </div>
                <div class="border-t border-x border-black/10">
                    <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                        <div class="px-6 grid grid-cols-1 gap-4 h-min py-4 text-lg font-thin bg-white">
                            <div>
                                Eovix partners with companies to provide <span class="font-medium">customized corporate training solutions</span> in areas such as AI, sustainability, leadership, and digital transformation. These programs are tailored to meet the specific needs of each organization and are designed to help businesses stay competitive in a rapidly changing marketplace.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border-x border-black/10 cursor-pointer">
                    Can Eovix programs be customized for my organization?
                </div>
                <div class="border-t border-x border-black/10">
                    <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                        <div class="px-6 grid grid-cols-1 gap-4 h-min py-4 text-lg font-thin bg-white">
                            <div>
                                Absolutely. Eovix specializes in developing <span class="font-medium">tailored educational solutions</span> for organizations. Whether you’re looking to train your team in sustainability, implement AI-driven tools, or enhance leadership development, we work closely with you to create a customized program that meets your objectives.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border-x border-black/10 cursor-pointer">
                    How do I request a demo of Eovix’s solutions?
                </div>
                <div class="border-t border-x border-black/10">
                    <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                        <div class="px-6 grid grid-cols-1 gap-4 h-min py-4 text-lg font-thin bg-white">
                            <div>
                                To request a demo of any of Eovix’s platforms or programs, simply visit our <span class="font-medium">Request a Demo</span> page and fill out the contact form with your details and area of interest. Our team will get in touch with you to schedule a personalized demo at your convenience.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border-x border-black/10 cursor-pointer">
                    What industries do you work with?
                </div>
                <div class="border-t border-x border-black/10">
                    <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                        <div class="px-6 grid grid-cols-1 gap-4 h-min py-4 text-lg font-thin bg-white">
                            <div>
                                Eovix works across various industries, including:
                            </div>
                            <div class="px-2 grid grid-cols-1 gap-4">
                                <div>
                                    <span class="font-normal">
                                        1) Education:
                                    </span>
                                    <span>
                                        Partnering with schools, universities, and educational institutions to deliver future-ready curricula.
                                    </span>
                                </div>

                                <div>
                                    <span class="font-normal">
                                        2) Technology:
                                    </span>
                                    <span>
                                        Offering specialized training in AI, machine learning, and semiconductor manufacturing.
                                    </span>
                                </div>

                                <div>
                                    <span class="font-normal">
                                        3) Corporate:
                                    </span>
                                    <span>
                                        Providing tailored corporate training solutions for businesses in industries such as retail, finance, manufacturing, and more.
                                    </span>
                                </div>

                                <div>
                                    <span class="font-normal">
                                        4) Government and NGOs:
                                    </span>
                                    <span>
                                        Supporting workforce development and sustainability initiatives in collaboration with government bodies and non-profit organizations.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border-x border-black/10 cursor-pointer">
                    How can educational institutions partner with Eovix?
                </div>
                <div class="border-t border-x border-black/10">
                    <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                        <div class="px-6 grid grid-cols-1 gap-4 h-min py-4 text-lg font-thin bg-white">
                            <div>
                                Schools and universities can partner with Eovix to integrate <span class="font-medium">sustainability, AI, and emerging technology programs</span> into their curricula. We offer collaboration opportunities that include customized courses, faculty development programs, and access to cutting-edge resources. To learn more, visit our <span class="font-medium">Academic Partnerships</span> page or contact us directly.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border-x border-black/10 cursor-pointer">
                    What is the process for enrolling in a program?
                </div>
                <div class="border-t border-x border-black/10">
                    <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                        <div class="px-6 grid grid-cols-1 gap-4 h-min py-4 text-lg font-thin bg-white">
                            <div>
                                Enrolling in an Eovix program is simple:
                            </div>
                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <span>
                                        1) Visit the <span class="font-medium">Programs</span> section on our website.
                                    </span>
                                </div>

                                <div>
                                    <span>
                                        2) Choose the course or training that suits your needs.
                                    </span>
                                </div>

                                <div>
                                    <span>
                                        3) Complete the online registration form and submit payment (if applicable).
                                    </span>
                                </div>

                                <div>
                                    <span>
                                        4) You will receive access to your course materials and further instructions via email.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border-x border-black/10 cursor-pointer">
                    What types of certifications do you offer?
                </div>
                <div class="border-t border-x border-black/10">
                    <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                        <div class="px-6 grid grid-cols-1 gap-4 h-min py-4 text-lg font-thin bg-white">
                            <div>
                                Upon successful completion of our courses, Eovix provides <span class="font-medium">certifications</span> that validate your skills and knowledge. These certifications are industry-recognized and can help you advance in your career, whether you're a student, professional, or organization seeking workforce development.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border-x border-black/10 cursor-pointer">
                    How can I stay updated on new courses and offerings from Eovix?
                </div>
                <div class="border-t border-x border-black/10">
                    <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                        <div class="px-6 grid grid-cols-1 gap-4 h-min py-4 text-lg font-thin bg-white">
                            <div>
                                You can stay updated on new programs, events, and developments at Eovix by subscribing to our <span class="font-medium">newsletter</span>. Simply enter your email at the bottom of the website, and you’ll receive regular updates on our latest courses, partnerships, and innovations.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border-x border-black/10 cursor-pointer">
                    What is Eovix’s approach to sustainability?
                </div>
                <div class="border-t border-x border-black/10">
                    <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                        <div class="px-6 grid grid-cols-1 gap-4 h-min py-4 text-lg font-thin bg-white">
                            <div>
                                Sustainability is at the core of Eovix’s mission. We integrate sustainability into all our programs, offering educational solutions that focus on environmental stewardship, renewable energy, and sustainable business practices. Our goal is to empower individuals and organizations to make eco-friendly choices and contribute to global sustainability efforts.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border-x border-black/10 cursor-pointer">
                    Can Eovix help my company with its sustainability goals?
                </div>
                <div class="border-t border-x border-black/10">
                    <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                        <div class="px-6 grid grid-cols-1 gap-4 h-min py-4 text-lg font-thin bg-white">
                            <div>
                                Yes, Eovix works with companies to help them develop and implement <span class="font-medium">sustainability strategies</span>. From training your workforce on sustainable practices to developing green technology solutions, we provide comprehensive support to help your business achieve its sustainability goals.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{expanded:false}" class="bg-stone-200">
                <div @click="expanded=!expanded" class="px-6 py-4 text-lg border-x border-black/10 cursor-pointer">
                    How do I apply for a job at Eovix?
                </div>
                <div class="border border-black/10">
                    <div x-show="expanded" x-cloak x-collapse.duration.800ms>
                        <div class="px-6 grid grid-cols-1 gap-4 h-min py-4 text-lg font-thin bg-white">
                            <div>
                                To apply for a position at Eovix, visit our <span class="font-medium">Careers</span> page to view current job openings. You can submit your application online through the site, and our HR team will review it. We are always looking for passionate individuals who want to contribute to the future of education and sustainability.
                            </div>
                        </div>
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