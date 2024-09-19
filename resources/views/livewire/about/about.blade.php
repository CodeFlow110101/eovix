<?php

use function Livewire\Volt\{state, mount};

state(['page']);

mount(function ($path) {
    $this->page = str_replace("-", " ", $path);
});
?>

<div>
    <div class="px-52 py-24 bg-gradient-to-r from-pink-500 to-violet-600 flex justify-between gap-2">
        <div class="w-full">
            <div class="grid grid-cols-1 gap-5 h-min text-white">
                <div class="text-5xl maven-pro-500 capitalize">{{$page}}</div>
                <div class="text-2xl font-light leading-10">
                    @if($page == "our story")
                    At <span class="font-semibold text-3xl">Eovix</span>, we are driven by a simple yet profound belief: education has the power to transform lives and shape a better future for our planet. Founded with a vision to bridge the gap between traditional learning and the demands of a rapidly evolving world, Eovix is committed to empowering individuals and organizations through innovative education, cutting-edge technology, and sustainable solutions.
                    @elseif($page == "our values")
                    At <span class="font-semibold text-3xl">Eovix</span>, our commitment to education and sustainability is grounded in a set of core values that define who we are, how we operate, and the impact we strive to make in the world. These values shape everything we do, from the design of our educational programs to our partnerships with organizations, and our dedication to fostering a sustainable future. Our values are not just ideals; they are the foundation of our mission to inspire and empower individuals and businesses alike.
                    @elseif($page == "our impact")
                    At <span class="font-semibold text-3xl">Eovix</span>, we measure success not only by the programs we deliver but by the tangible impact we create in the lives of individuals, businesses, and communities. Our commitment to education and sustainability has empowered learners and organizations to take meaningful action and achieve measurable results. Whether it’s reducing carbon footprints, upskilling professionals, or transforming educational institutions, the real-world impact of Eovix is felt across industries and geographies.
                    <div class="mt-8 font-semibold text-3xl">Explore how Eovix is making a difference and driving positive change.</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="w-full h-min grid grid-cols-1 gap-2">
            <div class="w-full text-white flex justify-end h-min">
                <div class="inline-flex gap-6">
                    <div class="h-min rounded-full flex justify-center items-center text-center bg-white/15 p-16 aspect-square">
                        <div class="grid grid-cols-1 gap-1 h-min">
                            <div class="font-semibold text-xl">20 million+</div>
                            <div class="font-medium text-white/70">training sessions</div>
                            <div class="font-medium text-white/70">delivered</div>
                        </div>
                    </div>
                    <div class="h-min mt-auto rounded-full flex justify-center items-center text-center bg-white/15 p-8 aspect-square">
                        <div class="grid grid-cols-1 gap-1 h-min">
                            <div class="font-semibold text-xl">180+</div>
                            <div class="font-medium text-white/70">high-quality</div>
                            <div class="font-medium text-white/70">courses</div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="w-full text-white flex justify-center h-min">
                    <div class="inline-flex gap-3">
                        <div class="h-min rounded-full flex justify-center items-center text-center bg-white/15 p-12 aspect-square">
                            <div class="grid grid-cols-1 gap-1 h-min">
                                <div class="font-semibold text-xl">15+ years</div>
                                <div class="font-medium text-white/70">in business</div>
                            </div>
                        </div>
                        <div class="h-min mb-auto rounded-full flex justify-center items-center text-center bg-white/15 p-8 aspect-square">
                            <div class="grid grid-cols-1 gap-0.5 h-min">
                                <div class="font-semibold text-xl">4.7/5</div>
                                <div class="font-medium text-white/70">rating on</div>
                                <div class="font-medium text-white/70">REVIEWS.io</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-52 py-20">
        @if($page == "our story")
        <livewire:about.our-story />
        @elseif($page == "our values")
        <livewire:about.our-values />
        @elseif($page == "our impact")
        <livewire:about.our-impact />
        @endif
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
</div>