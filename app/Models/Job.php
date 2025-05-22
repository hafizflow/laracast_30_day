<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }
        return $job;
    }

    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Lecturer',
                'salary' => '10000$'
            ],
            [
                'id' => 2,
                'title' => 'Assistant lecturer',
                'salary' => '20000$'
            ],
            [
                'id' => 3,
                'title' => 'Professor',
                'salary' => '30000$'
            ]
        ];
    }
}
