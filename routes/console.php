<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('delete:user', function () {
    $this->comment(Inspiring::quote());
})->purpose('Delete user after 24 hours')->hourly();
