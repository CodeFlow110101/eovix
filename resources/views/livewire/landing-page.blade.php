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
    @if($path=='/' )
    <livewire:home />
    @elseif($path=='contact' )
    <livewire:contact />
    @endif
    <livewire:footer />
</div>