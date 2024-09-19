<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'landing-page');
Volt::route('/contact', 'landing-page');
Volt::route('/courses', 'landing-page');
Volt::route('/our-story', 'landing-page');
Volt::route('/our-values', 'landing-page');
Volt::route('/our-impact', 'landing-page');
Volt::route('/course/business-management', 'landing-page');
Volt::route('/course/ai-&-machine-learning', 'landing-page');
Volt::route('/course/software-development', 'landing-page');
Volt::route('/course/sustainability-education', 'landing-page');
