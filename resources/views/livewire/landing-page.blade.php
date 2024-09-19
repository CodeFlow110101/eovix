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
    @elseif($path=='courses')
    <livewire:courses />
    @elseif(in_array($path,['our-story','our-values','our-impact']))
    <livewire:about.about :path="$path" />
    @elseif(in_array($path,['for-students']))
    <livewire:program :path="$path" />
    @endif
    <livewire:footer />
</div>