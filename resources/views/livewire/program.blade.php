<?php

use function Livewire\Volt\{state, mount};

state(['path', 'contents', 'why_choose', 'start_your_journey', 'explore']);

mount(function ($path) {
    $this->path = $path;
    $this->contents = [
        'for-students' => [
            'Sustainability Education' => [
                'Explore the global challenges facing the environment and discover how you can be part of the solution. Our sustainability education programs focus on key issues such as climate change, renewable energy, waste management, and sustainable development. Through interactive lessons, real-world case studies, and hands-on projects, students will gain the practical skills needed to contribute to a more sustainable future. We aim to inspire students to think critically and take meaningful action in their communities and beyond.'
            ],
            'STEM Programs (Science, Technology, Engineering, and Mathematics)' => [
                'Eovix offers comprehensive STEM programs designed to foster curiosity, creativity, and critical thinking in students. With a focus on innovation and problem-solving, our STEM courses provide opportunities for hands-on learning through projects, experiments, and collaborative challenges. Whether you’re interested in environmental science, digital technologies, or engineering, our programs will help you develop the foundational skills to excel in these fast-growing fields.'
            ],
            'Semiconductors Manufacturing and Designing Course' => [
                'As industries increasingly rely on advanced technology, semiconductors play a critical role in powering everything from smartphones to electric vehicles. Eovix offers a specialized course in Semiconductors Manufacturing and Designing, providing students with an in-depth understanding of how semiconductors are designed, produced, and used in various applications. This course covers the fundamentals of semiconductor materials, fabrication techniques, circuit design, and the role of semiconductors in modern electronics.',
                'By engaging with cutting-edge tools and technologies, students will gain practical experience in semiconductor manufacturing and learn how to apply their skills to real-world challenges. Whether you’re aspiring to work in the technology sector or pursue a career in electronics engineering, this course will give you a competitive edge in a rapidly evolving industry.',
            ],
            'Artificial Intelligence and Emerging Technologies' => [
                'Our courses in artificial intelligence (AI) and emerging technologies provide students with the knowledge and skills needed to succeed in some of the fastest-growing sectors in the world. Through hands-on projects and expert guidance, students will learn how AI, machine learning, and data science are transforming industries such as healthcare, finance, and renewable energy. These courses empower students to become innovators, capable of developing cutting-edge solutions that solve complex problems.',
            ],
            'Green Technology and Innovation' => [
                'In an era where sustainability is a priority, green technology plays a vital role in shaping the future of industries. Our green technology courses focus on the latest innovations in renewable energy, sustainable product design, and environmental engineering. Students will gain practical knowledge of eco-friendly technologies and explore how innovation can drive sustainability across industries. This course is ideal for those passionate about making a positive environmental impact and advancing sustainable solutions.',
            ],
            'Entrepreneurship and Leadership Development' => [
                'For students with entrepreneurial ambitions, Eovix offers programs that teach the fundamentals of starting and running a business. Our entrepreneurship and leadership courses help students develop essential skills such as strategic thinking, financial planning, and marketing while nurturing their creativity and leadership abilities. Students will also have the opportunity to participate in real-world projects, building their confidence to turn their ideas into successful ventures.',
            ],
            'Career Readiness and Soft Skills Development' => [
                'In addition to technical expertise, Eovix focuses on helping students develop the soft skills that are critical to their success in any career. Our career readiness programs emphasize communication, teamwork, problem-solving, and leadership. Through workshops, mentorship, and hands-on experiences, students will gain the tools they need to excel in the professional world. We also provide guidance on creating strong resumes, preparing for interviews, and navigating the job market.',
            ],
        ]
    ];

    $this->why_choose = [
        'for-students' => [
            'title' => 'Why Choose Eovix for Your Education?',
            'points' => [
                'Cutting-Edge Curriculum' => 'Our programs focus on the most relevant and in-demand fields, ensuring that students are prepared for the future of work.',
                'Hands-On Learning' => 'Through interactive projects, labs, and real-world applications, we provide students with practical experience that extends beyond the classroom.',
                'Expert Instructors' => 'Our instructors are industry leaders and experts who are passionate about helping students succeed. They bring real-world insights and experience into every lesson.',
                'Flexible Learning Options' => 'We offer a variety of learning formats, including online, hybrid, and in-person programs, making it easy for students to engage in their education at their own pace.',
                'Global Perspective' => 'Our programs are designed to prepare students for a global economy, helping them understand the challenges and opportunities in different industries and regions.',
            ],
        ]
    ];

    $this->start_your_journey = [
        'for-students' => [
            'title' => 'Start Your Journey with Eovix',
            'description' => [
                'Whether you’re passionate about sustainability, AI, or semiconductor design, Eovix has the programs that will help you develop the skills needed to make an impact. We are dedicated to empowering students to pursue their passions, unlock their potential, and contribute to a brighter, more sustainable future.'
            ],
        ]
    ];

    $this->explore = [
        'for-students' => [
            'title' => 'Explore our programs today',
            'description' => 'and discover how Eovix can help you achieve your academic and career goals.',
        ]
    ];
});
?>

<div>
    <div class="px-52 py-28">
        <div class="flex justify-between gap-32">
            <div class="h-min grid grid-cols-1 gap-8 w-3/5">
                <div class="text-5xl maven-pro-500 capitalize">
                    @if($path == "for-students")
                    For Students: Unlock Your Future with Cutting-Edge Education
                    @endif
                </div>
                <div class="text-2xl font-light tracking-wider leading-7 h-min grid grid-cols-1 gap-4">
                    @if($path == "for-students")
                    <div>
                        At Eovix, we believe that students are the leaders, innovators, and problem-solvers of tomorrow. Our student programs are designed to provide the skills, knowledge, and hands-on experience needed to thrive in today’s technology-driven world. Whether you’re passionate about sustainability, technology, or engineering, our courses will prepare you for a successful future in the most in-demand fields.
                    </div>
                    <div>
                        Our diverse range of programs is tailored to equip students with the tools they need to excel academically and professionally while making a positive impact on the world.
                    </div>
                    @endif
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
        <div class="grid grid-cols-2 gap-10 items-center">
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
                    <div class="maven-pro-500 text-amber-400 text-3xl uppercase">{{$why_choose[$path]['title']}}</div>
                    <div class="grid grid-cols-1 gap-4 h-min">
                        @foreach($why_choose[$path]['points'] as $heading => $statement)
                        <div class="text-lg">
                            <span class="text-amber-500 font-medium">
                                {{$heading}} :
                            </span>
                            <span class="font-light">
                                {{$statement}}
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-72">
        <div class="bg-black/90 px-52">
            <div class="grid grid-cols-2 gap-4 h-min -translate-y-24">
                @foreach($contents[$path] as $heading => $description)
                <div class="bg-white p-6 rounded-md shadow-md shadow-black/30">
                    <div class=" grid grid-cols-1 gap-4">
                        <div class="text-2xl maven-pro-700 h-min bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">{{$heading}}</div>
                        <div class="grid grid-cols-1 gap-5 mb-auto">
                            @foreach($description as $paragraph)
                            <div class="font-thin text-lg">{{$paragraph}}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="py-20 px-52 flex justify-between items-center">
        <div class="w-full grid grid-cols-1 gap-3">
            <div class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent maven-pro-600 text-4xl">
                {{$start_your_journey[$path]['title']}}
            </div>
            @foreach($start_your_journey[$path]['description'] as $description)
            <div class="text-2xl leading-8 font-light">{{$description}}</div>
            @endforeach
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
            <div class="text-white text-4xl tracking-tight">
                <span class="maven-pro-500">{{$explore[$path]['title']}}</span>
                <span class="font-light">{{$explore[$path]['description']}}</span>
            </div>
            <div class="whitespace-nowrap flex justify-between gap-6 w-min">
                <div class="font-semibold text-white border border-white hover:bg-white hover:text-black transition-colors duration-500 cursor-pointer text-xl bg-transparent py-4 uppercase px-8 rounded-full">Request a Demo</div>
            </div>
        </div>
    </div>
</div>