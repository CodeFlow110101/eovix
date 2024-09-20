<?php

use function Livewire\Volt\{state, layout, mount};

layout('components.layouts.app');

state(['path']);

mount(function () {
    $this->path = request()->path();
});

?>

<div>
    <livewire:navbar />
    @if($path=='/')
    <livewire:home />
    @elseif($path=='contact')
    <livewire:contact />
    @elseif(in_array($path,['why-sustainability-matters','sustainability-education','success-stories','industry-insights']))
    <livewire:sustainability :path="$path" />
    @elseif(in_array($path,['our-story','our-values','our-impact']))
    <livewire:about.about :path="$path" />
    @elseif(in_array($path,['for-students','for-professionals','for-schools-and-universities','for-corporates']))
    <livewire:program :path="$path" />
    @endif
    <livewire:footer />
</div>