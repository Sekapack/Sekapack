<?php

namespace Database\Seeders;

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2023-08-06 18:29:37',
                'updated_at' => '2023-08-06 18:29:37',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2023-08-06 18:29:37',
                'updated_at' => '2023-08-06 18:29:37',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2023-08-06 18:29:37',
                'updated_at' => '2023-08-06 18:29:37',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
