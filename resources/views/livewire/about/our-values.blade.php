<?php

use function Livewire\Volt\{state, mount};

state(['contents']);

mount(function () {
    $this->contents = [
        '1. Innovation in Education' => 'We believe in the transformative power of education and the importance of staying ahead in a rapidly changing world. Our commitment to innovation drives us to develop cutting-edge programs that blend technology, practical learning, and forward-thinking solutions. Whether we are teaching sustainability practices, artificial intelligence, or green technology, we aim to offer learners the most relevant and impactful educational experiences.',
        '2. Sustainability as a Responsibility' => 'Sustainability is at the heart of everything we do. We believe that education and sustainability are intertwined and that knowledge can drive real change in protecting our planet. Our programs are designed not only to teach sustainability principles but also to inspire action. By integrating eco-friendly practices into all aspects of our work, we ensure that both our educational offerings and our organizational practices reflect a deep commitment to environmental stewardship.',
        '3. Lifelong Learning' => 'Learning is a continuous journey, and we are dedicated to promoting a culture of lifelong learning. We believe that individuals should have access to education and skills development at every stage of life, whether they are students preparing for their future careers or professionals seeking to upskill. Our courses are designed to be accessible, flexible, and relevant, allowing learners to grow and succeed in an ever-evolving world.',
        '4. Empowerment Through Knowledge' => 'We believe in the power of education to empower individuals, businesses, and communities to make informed decisions and create meaningful change. Our goal is to equip learners with the tools, knowledge, and confidence to thrive in their personal and professional lives. We strive to foster a learning environment that encourages critical thinking, creativity, and problem-solving, enabling learners to take charge of their futures.',
        '5. Collaboration and Partnership' => 'At Eovix, we value collaboration and the power of partnerships in driving success. We work closely with educational institutions, businesses, and governments to co-create learning experiences that have a lasting impact. By working together, we can amplify our reach and maximize the positive outcomes of our programs, ensuring that our collective efforts lead to greater innovation and sustainability.',
        '6. Integrity and Accountability' => 'We hold ourselves to the highest standards of integrity and accountability in everything we do. From our interactions with learners to our relationships with partners, we are committed to transparency, honesty, and ethical business practices. We believe that trust is the foundation of any successful collaboration, and we are dedicated to earning and maintaining the trust of those we serve.',
        '7. Inclusivity and Accessibility' => 'Education should be accessible to all, regardless of background, location, or circumstance. At Eovix, we are committed to creating inclusive learning environments that welcome diverse perspectives and ensure that everyone has the opportunity to participate in the learning process. Our programs are designed to be flexible and adaptable, meeting the needs of learners from all walks of life.',
        '8. Social and Environmental Impact' => "We are dedicated to making a positive impact on both society and the environment. Through our sustainability initiatives, educational programs, and partnerships, we aim to create solutions that address pressing global challenges. Whether it's reducing carbon emissions, promoting ethical business practices, or empowering communities, we are driven by a desire to make a meaningful difference in the world.",
    ];
});

?>

<div>
    <div class="grid grid-cols-1 gap-28 h-min">
        @foreach($contents as $heading => $statement)
        <div class="grid grid-cols-1 gap-6 h-min">
            <div class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent text-5xl  py-1 maven-pro-500">{{$heading}}</div>
            <div class="text-2xl leading-8 font-light">
                {{$statement}}
            </div>
        </div>
        @endforeach

        <div class="grid grid-cols-1 gap-6 h-min">
            <div class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent text-5xl py-1 maven-pro-500">
                Guided by Our Values, Driven by Our Mission
            </div>
            <div class="text-2xl leading-8 font-light">
                At <span>Eovix</span>, our values are not just words—they are the principles that guide every decision we make and every initiative we undertake. These values reflect our unwavering commitment to excellence in education, sustainability, and innovation. As we continue to grow and expand, we remain dedicated to living out these values and making a positive, lasting impact on the world. </div>
        </div>

        <div class="grid grid-cols-1 gap-6 h-min">
            <div class="bg-gradient-to-r from-pink-500 to-violet-600 bg-clip-text text-transparent text-5xl py-1 maven-pro-500">
                Join us in our mission
            </div>
            <div class="text-2xl leading-8 font-light">
                To create a more sustainable, innovative, and inclusive future through education. Together, we can make a difference, one learner and one solution at a time.
            </div>
        </div>
    </div>
</div>