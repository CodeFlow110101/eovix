<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'landing-page');
Volt::route('/contact', 'landing-page');
Volt::route('/course/business-management', 'landing-page');
