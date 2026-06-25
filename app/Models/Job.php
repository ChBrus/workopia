<?php

namespace App\Models;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Web Developer',
                'description' => 'We are looking for a web developer with 3 years of experience in Laravel and Vue.js.',
                'created_at' => '2026-06-24 10:00:00',
                'updated_at' => '2026-06-24 10:00:00',
            ],
            [
                'id' => 2,
                'title' => 'Database Admin',
                'description' => 'We are looking for a database admin with 5 years of experience in MySQL and PostgreSQL.',
                'created_at' => '2026-06-24 10:00:00',
                'updated_at' => '2026-06-24 10:00:00',
            ],
            [
                'id' => 3,
                'title' => 'Software Engineer',
                'description' => 'We are looking for a software engineer with 7 years of experience in Python and Django.',
                'created_at' => '2026-06-24 10:00:00',
                'updated_at' => '2026-06-24 10:00:00',
            ],
            [
                'id' => 4,
                'title' => 'Systems Analyst',
                'description' => 'We are looking for a systems analyst with 10 years of experience in SQL and data analysis.',
                'created_at' => '2026-06-24 10:00:00',
                'updated_at' => '2026-06-24 10:00:00',
            ],
        ];
    }
}
