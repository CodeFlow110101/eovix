<?php

use function Livewire\Volt\{state, mount};

state(['path', 'title', 'description', 'contents', 'others', 'join_us']);

mount(function ($path) {
    $this->path = $path;

    $this->title = [
        'why-sustainability-matters' => 'Why Sustainability Matters: Shaping a Better Future for All',
        'sustainability-education' => 'Sustainability Education: Empowering a Greener Future',
        'success-stories' => 'Success Stories in Sustainability: Real Impact, Real Change',
        'industry-insights' => 'Industry Insights: Navigating the Future of Sustainability, Technology, and Innovation',
    ];

    $this->description = [
        'why-sustainability-matters' => [
            'Sustainability is more than just a trend—it is a fundamental shift in how we live, work, and interact with the planet. As the world faces pressing environmental challenges, from climate change to resource depletion, the need for sustainable practices has never been more critical. At Eovix, we believe that sustainability is the key to creating a better future, not only for our generation but for those to come.',
            'Sustainability matters because it impacts every aspect of our lives—from the air we breathe to the resources we consume, to the future opportunities we leave for the next generation. It’s about finding ways to meet the needs of today without compromising the ability of future generations to meet theirs.',
        ],
        'sustainability-education' => [
            'At Eovix, we are committed to creating a sustainable future through education. Our Sustainability Education programs are designed to equip individuals, businesses, and communities with the knowledge and tools needed to make informed decisions that positively impact the environment. By integrating sustainability principles into learning experiences, we help our partners foster a mindset of responsibility and innovation, preparing them to address the environmental challenges of today and tomorrow.',
            'Whether you are an educational institution, a corporate organization, or an individual learner, Eovix offers a wide range of sustainability-focused courses and initiatives that will empower you to make a difference.',
        ],
        'success-stories' => [
            'At Eovix, we believe that sustainability is more than just a goal—it’s a commitment to creating lasting change for businesses, communities, and the planet. Through our Sustainability Programs, we’ve partnered with organizations across various industries to implement innovative solutions that not only meet sustainability goals but also drive business success. Our success stories showcase the tangible impact of our sustainability initiatives, from reducing carbon footprints to fostering a culture of environmental stewardship.',
            'Explore some of the inspiring success stories where Eovix helped organizations and individuals achieve remarkable results in their sustainability efforts.',
        ],
        'industry-insights' => [
            'At Eovix, we are at the forefront of the latest trends and developments in sustainability, technology, and education. Our Industry Insights section is designed to keep you informed on the key trends shaping the future of industries worldwide. From groundbreaking advancements in green technology to the transformative power of artificial intelligence, we provide actionable insights that help businesses, professionals, and students stay ahead in a rapidly evolving world.',
            "Whether you're looking to understand emerging technologies, stay updated on sustainability initiatives, or gain a competitive edge in your industry, our Industry Insights will provide you with the knowledge and analysis you need to make informed decisions.",
        ]
    ];

    $this->contents = [
        'why-sustainability-matters' => [
            'title' => 'Why Sustainability is Crucial for the Planet and Humanity',
            'description' => [
                'Protecting Natural Resources' => [
                    '' => 'The Earth’s resources are finite. Unsustainable consumption of water, energy, and raw materials depletes these vital resources, leading to scarcity and environmental degradation. Sustainable practices focus on preserving these resources by promoting responsible use, renewable alternatives, and conservation efforts. By embracing sustainability, we can ensure that future generations have access to the essential resources they need to thrive.'
                ],
                'Combatting Climate Change' => [
                    '' => 'Climate change is one of the greatest threats facing our planet. The rise in global temperatures, extreme weather events, and sea level rise are all consequences of human activities that generate greenhouse gases. Sustainability efforts, such as reducing carbon emissions, transitioning to renewable energy, and adopting eco-friendly practices, are critical to slowing the effects of climate change and protecting vulnerable ecosystems and communities.',
                ],
                'Ensuring Social Equity and Economic Stability' => [
                    '' => 'Sustainability is not just about the environment—it’s also about people. A sustainable future ensures that everyone, regardless of where they live, has access to clean water, safe working conditions, and the opportunity for economic growth. By promoting ethical business practices, fair wages, and inclusive policies, sustainability helps create a more equitable world where economic prosperity is shared, and no one is left behind.',
                ],
                'Preserving Biodiversity' => [
                    '' => 'Biodiversity, the variety of life on Earth, is essential for ecosystem health and stability. Human activities like deforestation, pollution, and overfishing are threatening the survival of countless species. Sustainable practices aim to protect natural habitats, promote wildlife conservation, and maintain biodiversity, which in turn supports the resilience of ecosystems that provide essential services like clean air, water, and food.',
                ],
                'Improving Quality of Life' => [
                    '' => 'Sustainability enhances the quality of life for individuals and communities by promoting healthier environments, cleaner air and water, and access to green spaces. Urban sustainability initiatives, such as green buildings, public transportation, and waste reduction programs, create healthier and more livable cities. By adopting sustainable practices, we can improve our well-being while reducing our environmental footprint.',
                ],
                'Driving Innovation and Economic Growth' => [
                    '' => 'Sustainability is also a driver of innovation. As businesses and industries adopt sustainable practices, new technologies and solutions are developed to meet the challenges of a greener future. From renewable energy technologies to eco-friendly products and sustainable agriculture, sustainability is fostering economic growth while protecting the planet. Companies that invest in sustainability are not only contributing to a better future but also positioning themselves for long-term success in an evolving marketplace.',
                ]
            ]
        ],
        'sustainability-education' => [
            'title' => 'Our Sustainability Education Programs',
            'description' => [
                'Sustainability in Schools and Universities' => [
                    '' => 'We work with schools and universities to develop sustainability curriculums that educate students about critical issues like climate change, renewable energy, waste management, and sustainable development. Our programs are designed to inspire young minds to think critically about their impact on the planet and to prepare them to lead the next generation of sustainability efforts.',
                ],
                'Corporate Sustainability Training' => [
                    '' => 'Businesses play a vital role in shaping a sustainable future. Our corporate sustainability training programs are designed to help organizations meet their environmental, social, and governance (ESG) goals by educating employees on sustainable practices, energy efficiency, waste reduction, and responsible sourcing. Empower your team with the knowledge they need to integrate sustainability into every aspect of your business.',
                ],
                'Green Technology and Innovation' => [
                    '' => 'Explore the latest in green technologies through our hands-on courses that focus on innovations driving sustainability. From clean energy and electric vehicles to water conservation and circular economy practices, our programs provide practical insights into the technologies transforming industries and reducing environmental impact.',
                ],
                'Sustainability Leadership Development' => [
                    '' => 'Designed for professionals, educators, and leaders, our sustainability leadership courses focus on equipping participants with the skills to lead sustainability initiatives within their organizations and communities. Learn how to develop impactful sustainability strategies, manage resources responsibly, and drive positive environmental change.',
                ],
                'Workshops and Certifications' => [
                    '' => 'We offer specialized workshops and certification programs in areas such as renewable energy, sustainable agriculture, environmental policy, and more. These programs provide participants with the in-depth knowledge and practical skills they need to contribute to sustainable solutions in their professional and personal lives.',
                ],
                'Sustainability Awareness Campaigns' => [
                    '' => 'Eovix partners with schools, universities, and organizations to create sustainability awareness campaigns that engage students and employees alike. Through interactive sessions, eco-friendly challenges, and community projects, our campaigns foster a deeper understanding of sustainability and encourage proactive participation in environmental initiatives.',
                ]
            ]
        ],
        'success-stories' => [
            'title' => '',
            'description' => [
                'Renewable Energy Integration for a Global Manufacturing Leader' => [
                    'Challenge:' => 'A leading global manufacturer sought to reduce its reliance on traditional energy sources and lower its carbon emissions while maintaining operational efficiency.',
                    'Solution:' => 'Eovix partnered with the company to develop and implement a renewable energy strategy, focusing on integrating solar and wind energy into their production facilities. Our team worked closely with the company to assess their energy needs, design an optimized renewable energy system, and train their employees on energy-efficient practices.',
                    'Impact:' => 'Within the first year, the company reduced its carbon emissions by 35%, achieved significant cost savings on energy expenses, and earned recognition as a leader in sustainable manufacturing. The integration of renewable energy also strengthened their corporate social responsibility (CSR) efforts, improving their brand reputation among eco-conscious consumers.',
                ],
                'Green Technology Innovation for a Tech Startup' => [
                    'Challenge:' => 'A fast-growing tech startup wanted to reduce its environmental impact while scaling its operations. They needed sustainable technology solutions that aligned with their growth strategy.',
                    'Solution:' => 'Eovix provided comprehensive green technology consulting, helping the startup implement eco-friendly solutions throughout its supply chain and operations. This included sourcing sustainable materials, optimizing energy consumption in their data centers, and incorporating recycling initiatives into their product lifecycle.',
                    'Impact:' => 'The startup successfully reduced its energy consumption by 20% and implemented a product recycling program that diverted over 5,000 units of electronic waste from landfills. These sustainability initiatives not only lowered the company’s environmental footprint but also attracted investors and customers who valued their commitment to sustainable innovation.',
                ],
                'Sustainable Practices in Higher Education' => [
                    'Challenge:' => 'A university aimed to become a model for sustainability by integrating sustainable practices across its campus and curriculum, reducing its environmental impact while educating students on sustainability.',
                    'Solution:' => 'Eovix worked with the university to design a comprehensive sustainability strategy that included energy-efficient campus operations, waste reduction programs, and sustainability courses integrated into the curriculum. We also organized sustainability workshops for both students and staff, focusing on reducing energy usage, promoting recycling, and incorporating sustainability into research and projects.',
                    'Impact:' => 'The university achieved a 25% reduction in energy consumption and became recognized as a green campus leader in its region. The introduction of sustainability into the curriculum inspired students to engage in sustainability initiatives both on and off-campus, leading to multiple community projects aimed at addressing local environmental challenges.',
                ],
                'Corporate Sustainability Transformation for a Retail Giant' => [
                    'Challenge:' => 'A major retail company sought to overhaul its supply chain to meet sustainability targets, reduce waste, and enhance operational efficiency. Their goal was to create a sustainable and transparent supply chain that aligned with consumer demands for environmentally friendly products.',
                    'Solution:' => 'Eovix conducted a sustainability audit of their supply chain and helped the company identify areas for improvement. We developed a sustainable sourcing strategy, implemented waste reduction measures, and designed training programs for the company’s employees on sustainable practices.',
                    'Impact:' => 'The retailer reduced its supply chain waste by 40% and transitioned to sourcing 60% of its products from sustainable suppliers. The company’s sustainability transformation resulted in higher customer satisfaction, improved supplier relationships, and increased sales, particularly from eco-conscious consumers.',
                ],
                'Community-Focused Sustainability Initiative for a Local Municipality' => [
                    'Challenge:' => 'A local municipality wanted to address waste management issues and promote sustainability within the community by educating residents on the importance of recycling, energy conservation, and reducing plastic usage.',
                    'Solution:' => 'Eovix developed a community sustainability program that included educational workshops, recycling campaigns, and public outreach initiatives to raise awareness about sustainable living. We collaborated with local businesses, schools, and community leaders to drive participation and create a culture of environmental responsibility.',
                    'Impact:' => 'The municipality saw a 50% increase in recycling rates and a significant reduction in single-use plastic consumption within the first year of the program. The community’s active participation in sustainability efforts not only improved local environmental quality but also fostered a sense of pride and unity among residents.',
                ],
                'Corporate Social Responsibility (CSR) Integration for a Financial Institution' => [
                    'Challenge:' => 'A major financial institution wanted to enhance its Corporate Social Responsibility (CSR) efforts by incorporating sustainability into its operations, from energy management in its offices to supporting eco-friendly projects in the communities it serves.',
                    'Solution:' => 'Eovix developed a comprehensive CSR strategy focused on sustainability, which included energy audits, green office practices, and financial support for renewable energy projects in local communities. We also facilitated sustainability training for employees to ensure a company-wide commitment to environmentally responsible practices.',
                    'Impact:' => 'The institution reduced its office energy consumption by 30%, transitioned to paperless operations, and funded renewable energy projects that brought solar power to underserved communities. These efforts not only enhanced their CSR profile but also improved employee engagement, as staff took pride in being part of a company committed to sustainability.',
                ],
            ]
        ],
        'industry-insights' => [
            'title' => 'Key Focus Areas',
            'description' => [
                'Sustainability Trends and Green Technologies' => [
                    '' => 'As businesses and governments strive to reduce their environmental impact, sustainability has become a driving force behind innovation and growth. Our insights explore the latest in green technologies, renewable energy, and sustainable business practices. Learn how industries are adapting to global sustainability challenges, from reducing carbon footprints to embracing circular economy models.',
                ],
                'The Role of Artificial Intelligence in Industry' => [
                    '' => 'Artificial intelligence (AI) is transforming industries, from healthcare and finance to retail and manufacturing. Our in-depth analyses cover the growing applications of AI in business operations, customer experience, data analytics, and automation. Stay ahead by learning how AI is reshaping industries and creating new opportunities for growth, efficiency, and innovation.',
                ],
                'Digital Transformation and Industry 4.0' => [
                    '' => 'The rise of digital transformation is revolutionizing how businesses operate, with Industry 4.0 leading the charge. Our insights focus on the integration of advanced technologies like the Internet of Things (IoT), cloud computing, and big data into traditional industries. Discover how companies are leveraging digital tools to enhance productivity, streamline operations, and stay competitive in the global market.',
                ],
                'Education and Workforce Development Trends' => [
                    '' => 'As the future of work evolves, so too must education and workforce development strategies. Our insights explore the key trends driving innovation in education, from the rise of online learning and EdTech to the increasing demand for lifelong learning and upskilling. Learn how organizations are preparing their workforce for the challenges of tomorrow by investing in education and training.',
                ],
                'The Future of Renewable Energy' => [
                    '' => 'Renewable energy sources such as solar, wind, and hydropower are playing a critical role in reducing our reliance on fossil fuels and achieving global sustainability goals. Our renewable energy insights focus on the latest innovations in energy storage, grid technologies, and sustainable energy solutions that are driving the transition to a greener future.',
                ],
                'Corporate Social Responsibility (CSR) and ESG Strategies' => [
                    '' => 'Corporate Social Responsibility (CSR) and Environmental, Social, and Governance (ESG) principles are becoming essential to long-term business success. Our insights help businesses navigate the growing importance of CSR and ESG, from understanding regulatory requirements to developing strategies that balance profitability with sustainability and ethical business practices.',
                ],
                'Technological Disruptions in Healthcare' => [
                    '' => 'The healthcare industry is undergoing a technological transformation, with advancements in telemedicine, wearable devices, and AI-driven diagnostics. Our insights explore the latest disruptions in healthcare technology and how they are improving patient outcomes, streamlining operations, and reducing healthcare costs.',
                ],
                'Smart Cities and Urban Sustainability' => [
                    '' => 'As cities expand, there is a growing focus on sustainability and efficiency in urban development. Our insights examine the role of smart cities in promoting sustainable living, from intelligent transportation systems and energy-efficient buildings to waste management and water conservation solutions. Discover how cities are harnessing technology to create more livable, eco-friendly environments.',
                ],
            ]
        ]
    ];

    $this->others  = [
        'why-sustainability-matters' => [
            'The Role of Education in Advancing Sustainability' => [
                '' => 'At Eovix, we recognize that education is the foundation of a sustainable future. By educating individuals, businesses, and communities about the importance of sustainability, we empower them to take action and make informed decisions that positively impact the planet. Through our sustainability education programs, we aim to inspire a new generation of leaders who will drive the transition to a more sustainable world.',
                '' => 'From understanding the science behind climate change to learning how to implement sustainable practices in daily life, education plays a crucial role in building awareness and fostering a collective commitment to sustainability. When individuals are equipped with the right knowledge and tools, they can contribute to meaningful change, whether in their personal lives or within their organizations.',
            ],
            'Sustainability is a Shared Responsibility' => [
                '' => 'Sustainability isn’t just the responsibility of governments or large corporations—it’s a collective effort that requires action from every individual, organization, and community. Whether it’s reducing energy consumption, minimizing waste, or supporting sustainable products and services, every small action counts toward creating a more sustainable world.',
                '' => 'By working together, we can create a future where the environment is protected, resources are used responsibly, and economic growth is inclusive and sustainable. At Eovix, we are dedicated to being a part of this change, and we invite you to join us in our mission to create a better, more sustainable future for all.',
            ],
            'Conclusion: Sustainability is the Path Forward' => [
                '' => 'Sustainability matters because it’s the only way forward for a thriving planet and humanity. By prioritizing sustainable practices, we not only address the pressing environmental issues of our time but also build a future that is more just, equitable, and resilient.',
                '' => 'At Eovix, we are committed to leading the way in sustainability education and innovation, empowering individuals, businesses, and communities to take meaningful action. Together, we can create lasting change and ensure that future generations inherit a world that is healthy, vibrant, and sustainable.',
            ]
        ],
        'sustainability-education' => [
            'Why Choose Eovix for Sustainability Education?' => [
                'Expert-Driven Content:' => 'Our sustainability courses are developed by leading experts in the field, ensuring that participants receive up-to-date and relevant knowledge on pressing environmental issues and solutions.',
                'Real-World Applications:' => 'Eovix focuses on providing practical, real-world applications of sustainability concepts, allowing learners to immediately apply what they’ve learned to make a tangible impact in their organizations and communities.',
                'Flexible Learning Options:' => 'Our sustainability programs are available both online and in-person, giving learners the flexibility to engage with content in the format that best suits their needs. Whether through interactive online modules or hands-on workshops, our programs are designed to be accessible and impactful.',
                'Customization for Businesses and Institutions:' => 'We work closely with corporate partners and educational institutions to create customized sustainability education solutions that align with specific organizational goals and challenges. From tailored corporate training programs to university curriculum development, we offer flexible solutions to meet your unique needs.',
            ],
            'The Impact of Sustainability Education' => [
                '' => 'At Eovix, we believe that sustainability education is the foundation for creating lasting environmental change. By educating individuals and organizations on the importance of sustainability, we empower them to take action that positively impacts their communities and the planet.',
                '' => 'Our programs are designed to inspire a new generation of leaders who will champion sustainable practices in industries, schools, and governments. Together, we can build a future where responsible resource management, renewable energy adoption, and environmental stewardship are the norms, not the exceptions.',
            ],
            'Join Us in Building a Sustainable Future' => [
                '' => 'Eovix is committed to making sustainability education accessible, impactful, and transformative. Whether you’re looking to incorporate sustainability into your academic programs, train your workforce on green practices, or simply learn more about how you can contribute to a sustainable future, we have the solutions to help you achieve your goals.',
            ]
        ],
        'success-stories' => [
            'Why These Success Stories Matter' => [
                '' => 'Inspiration for Change: These success stories demonstrate that sustainability is achievable, regardless of industry or organization size. They serve as examples of how organizations can take meaningful steps toward reducing their environmental impact while maintaining business success.',
                '' => 'Real-World Impact: Eovix’s sustainability initiatives deliver tangible results, from reducing carbon footprints to improving energy efficiency and waste management. These projects show that sustainability is not just a goal—it’s a practical approach to driving innovation and growth.',
                '' => 'A Path to a Sustainable Future: These success stories highlight the importance of collaboration, innovation, and education in achieving sustainability. By working with Eovix, businesses, institutions, and communities can create lasting change that benefits both the environment and society.',
            ],
            'Partner with Eovix for Your Sustainability Success Story' => [
                '' => 'At Eovix, we’re passionate about helping organizations and communities create their own success stories in sustainability. Our expert-led solutions, practical strategies, and commitment to innovation ensure that you achieve your environmental goals while driving real, measurable results.',
            ]
        ],
        'industry-insights' => [
            'Why Industry Insights Matter' => [
                'Stay Ahead of the Curve:' => 'The industries of tomorrow will be shaped by the decisions we make today. Our insights give you the knowledge you need to anticipate changes, embrace innovation, and position your business for future success.',
                'Make Informed Decisions:' => 'Our expert-driven insights provide you with the data and analysis needed to make informed, strategic decisions that align with your organization’s goals and sustainability initiatives.',
                'Unlock New Opportunities:' => 'With technology and sustainability advancing at breakneck speed, new opportunities are constantly emerging. Stay up to date on industry trends to identify areas for growth, innovation, and investment.',
                'Inspire Innovation:' => 'The insights shared by Eovix can spark new ideas for your business or project, encouraging you to think creatively about how you can implement sustainability and cutting-edge technologies into your operations.',
            ],
            'Who Should Follow Eovix Industry Insights?' => [
                'Business Leaders and Executives:' => 'Gain a strategic understanding of how key trends will impact your industry and position your organization for success in the future economy.',
                'Sustainability Professionals:' => 'Stay informed about the latest sustainability challenges, solutions, and regulatory changes that are reshaping the corporate landscape.',
                'Technology Enthusiasts:' => 'Learn how emerging technologies like AI, IoT, and green tech are transforming industries and creating new career and business opportunities.',
                'Educators and Students:' => 'Understand how evolving industry trends will impact future job markets and educational requirements, helping you prepare for the careers of tomorrow.',
            ],
            'Join the Conversation on the Future of Industry' => [
                '' => 'At Eovix, we are dedicated to providing actionable, insightful content that empowers individuals and businesses to make forward-thinking decisions. Our Industry Insights are backed by in-depth research, expert analysis, and a commitment to helping you stay ahead in a rapidly evolving world.',
            ]
        ],
    ];

    $this->join_us = [
        'why-sustainability-matters' => [
            'title' => 'Join us in making sustainability a priority',
            'description' => 'Explore our sustainability education programs and learn how you can contribute to building a better future today.',
        ],
        'sustainability-education' => [
            'title' => 'Ready to make a difference?',
            'description' => 'Explore our sustainability education programs and start your journey toward a greener, more sustainable world. Contact us today to learn how we can collaborate on creating educational solutions that drive environmental change.',
        ],
        'success-stories' => [
            'title' => 'Ready to make your sustainability success story?',
            'description' => 'Contact us today to learn how we can work together to build a sustainable future for your business, community, or institution.',
        ],
        'industry-insights' => [
            'title' => 'Explore our Industry Insights today',
            'description' => 'and stay updated on the trends that are shaping the future of sustainability, technology, and business. Together, we can build a more sustainable, innovative, and prosperous future for all.',
        ],
    ];
});

?>

<div>
    <div class="px-52 py-20 flex justify-between">
        <div class="w-full h-min grid grid-cols-1 gap-6">
            <div class="text-4xl maven-pro-600">{{$title[$path]}}</div>
            @foreach($description[$path] as $paragraph)
            <div class="text-2xl font-thin leading-8">
                {{$paragraph}}
            </div>
            @endforeach
            <div class="flex justify-between pt-4">
                <div class="w-full bg-pink-500 text-center p-4 text-white font-semibold text-xl rounded-l-md hover:bg-pink-600 transition-colors duration-300 cursor-pointer">Request a quote</div>
                <div class="w-full bg-violet-600 text-center p-4 text-white font-semibold text-xl rounded-r-md hover:bg-violet-700 transition-colors duration-300 cursor-pointer">Try for free</div>
            </div>
        </div>
        <div class="w-full flex justify-end">
            <div class="grid grid-cols-1 gap-8 w-4/5 rounded-lg h-min bg-gradient-to-r from-pink-500 to-violet-600 shadow-md shadow-black/30 p-8">
                <div class="maven-pro-500 text-3xl text-white">Start a better training experience</div>
                <div>
                    <input class="w-full p-3 text-lg outline-none border border-gray-400 focus:border-pink-500 transition-colors duration-500 rounded-md" placeholder="Your Email address">
                </div>
                <div class="font-semibold text-center text-white border border-white hover:bg-white hover:text-black transition-colors duration-500 cursor-pointer text-xl bg-transparent py-4 uppercase px-8 rounded-full">Request a quote</div>
            </div>
        </div>
    </div>

    <div class="px-52 pt-10 pb-1 text-4xl maven-pro-600  bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">{{$contents[$path]['title']}}</div>

    <div class="pt-44 pb-20">
        <div class="bg-gradient-to-r from-pink-500 to-violet-600 px-52 py-5">
            <div class="grid grid-cols-2 gap-8 -translate-y-24">
                @foreach($contents[$path]['description'] as $heading => $paragraphs)
                <div class="rounded-lg shadow-md shadow-black/30 hover:-translate-y-5 transition-transform duration-500 cursor-pointer bg-white">
                    <div class="p-8 flex flex-col rounded-b-lg">
                        <div class="grid grid-cols-1 gap-8">
                            <div class="maven-pro-600 text-2xl tracking-tighter bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">{{$heading}}</div>
                            <div class="grid grid-cols-1 gap-4">
                                @foreach($paragraphs as $heading => $paragraph)
                                <div class="text-gray-800">
                                    <span class="maven-pro-500 text-xl bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent py-1">{{$heading}}</span> {{$paragraph}}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="px-52 py-20 grid grid-cols-1 gap-24 h-min">
        @foreach($others[$path] as $title => $paragraphs)
        <div class="grid grid-cols-1 gap-8">
            <div class="text-4xl maven-pro-600  bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent">{{$title}}</div>
            <div class="grid grid-cols-1 gap-4">
                @foreach($paragraphs as $heading => $paragraph)
                <div class="text-xl">
                    <span class="maven-pro-500 text-2xl bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent py-1">{{$heading}}</span> {{$paragraph}}
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>

    <div class="py-20">
        <div class="bg-gradient-to-r from-pink-500 to-violet-600 py-24 px-52 grid grid-cols-1 gap-6 h-min">
            <div class="text-white text-4xl maven-pro-500 tracking-tight">
                {{$join_us[$path]['title']}}
            </div>
            <div class="text-xl text-white font-thin">{{$join_us[$path]['description']}}</div>
            <div class="whitespace-nowrap flex justify-between gap-6 w-min">
                <div class="font-semibold text-white border border-white hover:bg-white hover:text-black transition-colors duration-500 cursor-pointer text-xl bg-transparent py-4 uppercase px-8 rounded-full">Request a quote</div>
            </div>
        </div>
    </div>
</div>