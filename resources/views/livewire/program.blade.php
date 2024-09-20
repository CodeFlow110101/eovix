<?php

use function Livewire\Volt\{state, mount};

state(['path', 'title', 'description', 'contents', 'why_choose', 'start_your_journey', 'explore']);

mount(function ($path) {

    $this->path = $path;

    $this->title = [
        'for-students' => 'For Students: Unlock Your Future with Cutting-Edge Education',
        'for-professionals' => 'For Professionals: Empower Your Career with Eovix',
        'for-schools-and-universities' => 'For Schools and Universities: Partnering for a Sustainable and Innovative Future',
        'for-corporates' => 'For Corporates: Empowering Businesses through Innovation and Sustainability',
    ];

    $this->description = [
        'for-students' => [
            'At Eovix, we believe that students are the leaders, innovators, and problem-solvers of tomorrow. Our student programs are designed to provide the skills, knowledge, and hands-on experience needed to thrive in today’s technology-driven world. Whether you’re passionate about sustainability, technology, or engineering, our courses will prepare you for a successful future in the most in-demand fields.',
            'Our diverse range of programs is tailored to equip students with the tools they need to excel academically and professionally while making a positive impact on the world.',
        ],
        'for-professionals' => [
            'In an increasingly dynamic and technology-driven world, staying ahead means continuously expanding your knowledge and skills. Eovix’s Programs for Professionals are designed to help you thrive in a competitive landscape, offering specialized courses that equip you with the expertise needed to excel in today’s most in-demand fields. Whether you are looking to advance your career, explore new opportunities, or lead sustainable initiatives in your organization, Eovix has the right programs to help you succeed.',
            'Our professional programs are flexible, relevant, and tailored to meet the needs of working individuals seeking to upskill, reskill, or deepen their expertise.',
        ],
        'for-schools-and-universities' => [
            'At Eovix, we are committed to empowering the next generation of students by providing cutting-edge educational programs and resources that help schools and universities stay ahead in a rapidly evolving world. Our tailored solutions are designed to help institutions integrate sustainability, technology, and innovation into their curricula, preparing students for the challenges and opportunities of the future.',
            'Whether you’re looking to introduce sustainability education, enhance STEM learning, or offer specialized courses in emerging technologies, Eovix is here to support your institution’s mission to shape future leaders and innovators.',
        ],
        'for-corporates' => [
            'At Eovix, we understand that the corporate world is evolving rapidly, and businesses need to adapt to stay competitive in today’s global marketplace. Our Programs for Corporates are designed to help organizations upskill their workforce, implement sustainable practices, and embrace digital transformation. By partnering with Eovix, your business will gain access to cutting-edge solutions that drive innovation, enhance efficiency, and promote sustainability.',
            'Whether you’re looking to develop leadership skills, adopt sustainable business models, or embrace emerging technologies like artificial intelligence, Eovix offers comprehensive corporate training programs that meet your company’s unique needs and goals.',
        ],
    ];

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
        ],

        'for-professionals' => [
            'Sustainability Leadership and Strategy' => [
                'Sustainability is becoming a core focus for businesses and organizations worldwide, and leaders who can drive sustainable change are in high demand. Our sustainability leadership programs equip professionals with the skills to create and implement sustainability strategies within their organizations. Learn how to manage resources responsibly, reduce environmental impact, and lead your organization in achieving its sustainability goals. This program is ideal for business leaders, managers, and professionals who want to integrate sustainability into their operations.',
            ],
            'Semiconductors Manufacturing and Designing for Professionals' => [
                'As the demand for semiconductors continues to rise across industries, gaining expertise in this field can be a game-changer for your career. Our Semiconductors Manufacturing and Designing course provides professionals with in-depth knowledge of semiconductor technology, including materials, fabrication processes, and circuit design. This program offers practical insights into how semiconductors are developed and used in modern electronics, giving you the technical expertise to advance in roles within technology, electronics, and manufacturing industries.',
            ],
            'Artificial Intelligence and Data Science' => [
                'Artificial Intelligence (AI) and data science are revolutionizing industries across the globe, and professionals who understand how to harness the power of AI are highly sought after. Our AI and data science courses provide hands-on learning opportunities where you’ll master techniques in machine learning, data analysis, and predictive modeling. Whether you’re working in finance, healthcare, retail, or technology, this program will give you the skills to drive innovation and decision-making through AI and data insights.',
            ],
            'Digital Transformation and Innovation' => [
                'As businesses increasingly embrace digital solutions, professionals who can lead digital transformation efforts are essential. Our digital transformation programs provide the knowledge and tools to navigate the evolving digital landscape. You will learn how to leverage cloud computing, automation, and data analytics to optimize business operations, enhance customer experiences, and drive growth. This program is perfect for professionals in management, IT, marketing, and operations who are looking to lead digital initiatives in their organizations.',
            ],
            'Green Technology and Sustainable Business' => [
                'In today’s economy, green technology is at the forefront of innovation. Our green technology programs focus on sustainable product development, renewable energy, and eco-friendly business practices. You’ll learn how to implement green solutions in industries such as energy, manufacturing, and technology while reducing environmental impact and improving operational efficiency. This course is ideal for professionals seeking to become sustainability champions within their organizations or pursue a career in the growing field of green technology.',
            ],
            'Corporate Social Responsibility (CSR) and ESG Strategy' => [
                'Corporate Social Responsibility (CSR) and Environmental, Social, and Governance (ESG) initiatives are increasingly influencing how businesses operate. Eovix offers specialized programs that help professionals understand how to develop, implement, and measure CSR and ESG strategies within their organizations. You’ll learn how to create meaningful social and environmental impact while maintaining business profitability and stakeholder trust. This program is suited for professionals in management, sustainability, and corporate governance roles.',
            ],
            'Leadership and Management Development' => [
                'Strong leadership is critical to the success of any organization. Our leadership and management development programs are designed to enhance your ability to lead teams, make strategic decisions, and drive organizational growth. You’ll develop key skills in communication, problem-solving, conflict resolution, and change management. This program is ideal for aspiring leaders, managers, and executives looking to refine their leadership capabilities and make a positive impact within their organizations.',
            ],
            'Customized Corporate Training Solutions' => [
                'At Eovix, we recognize that every organization has unique goals and challenges. That’s why we offer customized corporate training solutions tailored to meet your company’s specific needs. Whether you want to upskill your workforce in digital technologies, sustainability practices, or leadership development, our team works closely with you to design a program that aligns with your business objectives. Our corporate training programs are available both online and in-person, providing flexibility for your team’s schedule.',
            ],
        ],
        'for-schools-and-universities' => [
            'Sustainability in Education' => [
                'As global challenges like climate change and resource depletion intensify, schools and universities play a crucial role in equipping students with the knowledge and skills to address these issues. Eovix offers comprehensive sustainability programs that can be integrated into your academic curriculum, helping students understand critical topics such as environmental stewardship, renewable energy, and sustainable development.',
                'Our sustainability education initiatives include workshops, projects, and interactive learning experiences that inspire students to think critically and take action. By partnering with Eovix, your institution can lead the way in fostering a culture of sustainability and responsibility.',
            ],
            'STEM and Green Technology Programs' => [
                'Science, Technology, Engineering, and Mathematics (STEM) education is essential for preparing students to succeed in the modern workforce. Eovix offers a range of STEM programs that focus on both traditional and emerging fields, with a strong emphasis on innovation and green technology.',
                'Our programs provide students with hands-on learning experiences in areas such as clean energy, environmental engineering, and sustainable product design. By engaging students with practical applications and real-world challenges, we help foster creativity, problem-solving skills, and a passion for sustainable innovation.',
            ],
            'Semiconductors Manufacturing and Designing Course' => [
                'Semiconductor technology is critical to the functioning of modern electronics and is a key driver of technological innovation. Our Semiconductors Manufacturing and Designing course is designed specifically for schools and universities that want to offer students a deep dive into the world of semiconductors.',
                'This course covers the fundamentals of semiconductor materials, fabrication techniques, and circuit design, giving students a comprehensive understanding of how semiconductors are developed and used in industries like telecommunications, computing, and automotive manufacturing. By equipping students with this knowledge, your institution can prepare them for careers in the growing field of semiconductor technology.',
            ],
            'Artificial Intelligence and Emerging Technologies' => [
                'Artificial intelligence (AI) and emerging technologies are reshaping industries around the globe, and students who gain expertise in these areas are well-positioned for success. Eovix offers specialized AI courses that can be integrated into your school or university’s programs, providing students with hands-on experience in machine learning, data science, and AI applications across various sectors.',
                'Our AI programs are designed to be accessible to students with different levels of expertise, from beginners to advanced learners. By offering these courses, your institution can prepare students for the future of work and ensure they are equipped to drive innovation in the digital age.',
            ],
            'Teacher Training and Professional Development' => [
                'We understand that empowering educators is key to creating lasting educational impact. Eovix offers teacher training and professional development programs that help educators stay current with the latest teaching strategies, technologies, and sustainability practices.',
                'Our professional development programs focus on equipping teachers with the tools and knowledge they need to deliver effective lessons in sustainability, AI, green technology, and other emerging fields. By investing in the development of your teaching staff, your institution can ensure that students receive a high-quality education that aligns with industry trends and global challenges.',
            ],
            'Customized Learning Solutions' => [
                'At Eovix, we recognize that every school and university has unique goals and challenges. That’s why we offer customized learning solutions tailored to meet the specific needs of your institution. Whether you’re looking to integrate sustainability into your science curriculum, introduce AI courses, or offer professional development for your teachers, we work closely with you to design programs that align with your vision.',
                'Our team of experts collaborates with your institution to develop solutions that fit seamlessly into your existing curriculum, ensuring that students receive an engaging and impactful learning experience.',
            ]
        ],
        'for-corporates' => [
            'Corporate Sustainability Programs' => [
                'Sustainability is no longer an option; it’s a necessity. Our corporate sustainability programs are designed to help businesses develop and implement strategies that reduce environmental impact, improve resource efficiency, and enhance corporate social responsibility (CSR). From energy conservation to waste reduction and sustainable supply chain management, Eovix works with your organization to integrate sustainability into your business operations.',
                'Our sustainability programs also help businesses align with global environmental standards and meet regulatory requirements. Whether you’re just starting your sustainability journey or looking to enhance your existing initiatives, we offer tailored solutions that deliver measurable impact.',
            ],
            'Leadership and Management Development' => [
                'Strong leadership is key to navigating the complexities of today’s business environment. Our leadership and management development programs are designed to equip your team with the skills and strategies needed to lead with confidence and innovation. Whether you’re grooming future leaders or strengthening your executive team, Eovix provides expert-led training in leadership, decision-making, change management, and team building.',
                'Our programs focus on practical, real-world applications, helping leaders tackle challenges like managing diverse teams, driving organizational growth, and fostering a culture of collaboration and innovation.',
            ],
            'Digital Transformation and Innovation' => [
                'As industries embrace digital transformation, businesses must stay agile and adopt new technologies to remain competitive. Our digital transformation programs provide your team with the knowledge and tools needed to integrate digital solutions into business processes, improve operational efficiency, and enhance customer experiences. From cloud computing and automation to data analytics and digital marketing, Eovix’s programs help businesses navigate the digital landscape and drive innovation.',
                'Our courses focus on the latest technological trends, such as artificial intelligence, machine learning, and the Internet of Things (IoT), giving your team the expertise they need to harness the power of digital technologies for business success.',
            ],
            'AI and Data Science for Business' => [
                'Artificial Intelligence (AI) and data science are revolutionizing industries, and businesses that leverage these technologies gain a competitive edge. Eovix offers corporate training programs in AI and data science, helping your team understand how to use AI-driven insights to optimize processes, improve decision-making, and deliver personalized customer experiences. From predictive analytics to machine learning, our programs provide hands-on training that empowers your workforce to drive data-driven innovation.',
                'Our AI and data science programs are designed for professionals across various departments, including marketing, finance, operations, and IT, ensuring that every team can benefit from the power of data.',
            ],
            'Corporate Social Responsibility (CSR) and ESG Strategy' => [
                'Environmental, Social, and Governance (ESG) principles are becoming increasingly important to investors, customers, and stakeholders. Our CSR and ESG strategy programs help businesses integrate responsible practices into their core operations. Eovix works with your organization to design and implement strategies that align with your sustainability and social impact goals while meeting stakeholder expectations.',
                'Through our programs, your business will learn how to create transparent reporting systems, measure impact, and enhance your reputation as a socially and environmentally responsible company.',
            ],
            'Customized Corporate Training Solutions' => [
                'We recognize that every business has unique needs, goals, and challenges. That’s why Eovix offers customized corporate training solutions that are tailored to your company’s specific objectives. Whether you’re looking to upskill your workforce in sustainability practices, digital technologies, or leadership development, we work closely with your organization to design training programs that deliver measurable results.',
                'Our corporate training programs are available in a range of formats, including online learning, in-person workshops, and hybrid models, allowing your team to engage in flexible and accessible learning that fits their schedules.',
            ],
        ],
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
        ],
        'for-professionals' => [
            'title' => 'Why Choose Eovix for Professional Development?',
            'points' => [
                'Industry-Relevant Expertise' => 'Our programs are designed by leading experts in their respective fields, ensuring that you receive the latest insights and practical knowledge to excel in your career.',
                'Flexible Learning Options' => 'We understand the demands of busy professionals, so we offer a variety of learning formats—including online courses, live virtual workshops, and on-demand content—allowing you to learn at your own pace.',
                'Real-World Applications' => 'Eovix’s programs focus on practical skills that can be applied immediately in your work. Through real-world case studies, projects, and collaboration, you’ll gain experience that directly impacts your career growth.',
                'Certification and Career Advancement' => 'Upon completion of our programs, you’ll receive recognized certifications that validate your expertise and open doors for career advancement in your chosen field.',
            ],
        ],
        'for-schools-and-universities' => [
            'title' => 'Why Partner with Eovix?',
            'points' => [
                'Innovative and Future-Ready Curriculum' => 'Our programs are designed to equip students with the skills and knowledge needed to thrive in the industries of tomorrow. By integrating sustainability, AI, and STEM education into your curriculum, you can ensure that your students are prepared for the future.',
                'Hands-On Learning Experiences' => 'We believe in the power of experiential learning. Our programs provide students with practical, real-world applications of the concepts they learn, making education more engaging and impactful.',
                'Expert-Led Instruction' => 'Our instructors are industry experts and educators with extensive experience in their respective fields. They bring real-world insights into the classroom, helping students connect theory to practice.',
                'Global Reach' => 'Eovix partners with schools and universities around the world, delivering education that is relevant, accessible, and impactful. Our programs are designed to be flexible, allowing institutions to offer them in-person, online, or in a hybrid format.',
                'Commitment to Sustainability' => 'Sustainability is at the core of everything we do. Our programs are designed to inspire students to take action on global environmental challenges and lead the way in creating a more sustainable future.',
            ]
        ],
        'for-corporates' => [
            'title' => 'Why Choose Eovix for Corporate Training?',
            'points' => [
                'Expert-Led Programs' => 'Our training programs are developed and delivered by industry experts with extensive experience in leadership, technology, and sustainability. Your team will gain insights from professionals who understand the challenges and opportunities in today’s business landscape.',
                'Customized Learning Paths' => 'Eovix offers tailored training solutions that are designed to meet your organization’s specific needs. We work closely with your leadership team to develop learning paths that align with your business objectives and drive meaningful results.',
                'Practical, Real-World Focus' => 'Our programs are designed to equip your team with practical skills that can be immediately applied in the workplace. From leadership development to digital transformation, we focus on delivering tangible outcomes that improve your business’s performance.',
                'Flexible Learning Options' => 'We understand the demands of a fast-paced business environment, which is why we offer flexible learning options, including online courses, on-demand content, and in-person workshops. Your team can learn at their own pace, in a format that works for them.',
                'Sustainability and Innovation' => 'Eovix is committed to helping businesses become leaders in sustainability and innovation. Our programs provide the knowledge and tools needed to adopt sustainable practices, implement emerging technologies, and drive long-term growth.',
            ],
        ],
    ];

    $this->start_your_journey = [
        'for-students' => [
            'title' => 'Start Your Journey with Eovix',
            'description' => [
                'Whether you’re passionate about sustainability, AI, or semiconductor design, Eovix has the programs that will help you develop the skills needed to make an impact. We are dedicated to empowering students to pursue their passions, unlock their potential, and contribute to a brighter, more sustainable future.'
            ],
        ],
        'for-professionals' => [
            'title' => 'Start Your Professional Journey with Eovix',
            'description' => [
                'At Eovix, we are dedicated to helping professionals like you achieve their goals and stay competitive in an ever-changing world. Whether you’re looking to upskill in cutting-edge technologies, lead sustainable initiatives, or transform your business, our programs provide the knowledge and skills you need to succeed.',
            ]
        ],
        'for-schools-and-universities' => [
            'title' => 'Join Us in Shaping the Future of Education',
            'description' => [
                'At Eovix, we believe that the future of education is rooted in sustainability, innovation, and technology. By partnering with us, your school or university can provide students with the tools they need to succeed in a rapidly changing world.',
            ]
        ],
        'for-corporates' => [
            'title' => 'Partner with Eovix to Drive Growth and Innovation',
            'description' => [
                'At Eovix, we are dedicated to helping businesses thrive in a world that is constantly changing. Whether you’re looking to upskill your workforce, adopt sustainable practices, or embrace digital transformation, our corporate programs provide the solutions you need to stay ahead.',
            ],
        ]
    ];

    $this->explore = [
        'for-students' => [
            'title' => 'Explore our programs today',
            'description' => 'and discover how Eovix can help you achieve your academic and career goals.',
        ],
        'for-professionals' => [
            'title' => 'Explore our professional programs today',
            'description' => 'and take the next step in your career with Eovix. Empower yourself with the education that will drive your professional growth and position you for long-term success.',
        ],
        'for-schools-and-universities' => [
            'title' => 'Explore our programs for schools and universities today ',
            'description' => 'and discover how Eovix can help you create a future-ready curriculum that empowers students and fosters a culture of innovation and sustainability. Let’s work together to shape the leaders of tomorrow.',
        ],
        'for-corporates' => [
            'title' => 'Explore our corporate programs today',
            'description' => 'and discover how Eovix can help your business achieve its goals. Together, we’ll empower your team with the skills, knowledge, and strategies needed to drive growth, innovation, and sustainability in your organization.',
        ]
    ];
});
?>

<div>
    <div class="px-52 py-28">
        <div class="flex justify-between gap-32">
            <div class="h-min grid grid-cols-1 gap-8 w-3/5">
                <div class="text-5xl maven-pro-500 capitalize">
                    {{$title[$path]}}
                </div>
                <div class="text-2xl font-light tracking-wider leading-7 h-min grid grid-cols-1 gap-4">
                    @foreach($description[$path] as $paragraph)
                    <div>{{$paragraph}}</div>
                    @endforeach
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
            <div class="grid grid-cols-2 gap-8 h-min -translate-y-24">
                @foreach($contents[$path] as $heading => $description)
                <div class="bg-white hover:-translate-y-5 transition-transform duration-500 cursor-pointer p-6 rounded-md shadow-md shadow-black/30">
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