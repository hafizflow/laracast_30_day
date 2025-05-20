<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'lecturer',
            'salary' => '10000$'
        ],
        [
            'id' => 2,
            'title' => 'assistant lecturer',
            'salary' => '20000$'
        ],
        [
            'id' => 3,
            'title' => 'professor',
            'salary' => '30000$'
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);


    return view('job', ['job' => $job]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'lecturer',
                'salary' => '10000$'
            ],
            [
                'id' => 2,
                'title' => 'assistant lecturer',
                'salary' => '20000$'
            ],
            [
                'id' => 3,
                'title' => 'professor',
                'salary' => '30000$'
            ]
        ]
    ]);
});
