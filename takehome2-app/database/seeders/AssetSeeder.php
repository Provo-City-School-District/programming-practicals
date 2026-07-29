<?php

namespace Database\Seeders;

use App\Models\Asset;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    public function run(): void
    {
        if (Asset::exists()) {
            return;
        }

        Asset::insert([
            ['name' => 'Laptop A', 'department' => 'IT', 'category' => 'Laptop', 'status' => 'active', 'created_at' => '2024-01-10 08:30:00', 'updated_at' => '2024-01-10 08:30:00'],
            ['name' => 'Laptop B', 'department' => 'IT', 'category' => 'Laptop', 'status' => 'active', 'created_at' => '2023-06-12 09:15:00', 'updated_at' => '2024-02-01 10:00:00'],
            ['name' => 'Desktop C', 'department' => 'IT', 'category' => 'Desktop', 'status' => 'inactive', 'created_at' => '2022-03-20 14:00:00', 'updated_at' => '2022-08-10 11:30:00'],
            ['name' => 'Printer D', 'department' => 'IT', 'category' => 'Printer', 'status' => 'active', 'created_at' => '2023-01-05 11:45:00', 'updated_at' => '2023-11-01 16:30:00'],
            ['name' => 'Switch E', 'department' => 'IT', 'category' => 'Networking', 'status' => 'retired', 'created_at' => '2020-09-18 13:10:00', 'updated_at' => '2021-01-15 09:00:00'],
            ['name' => 'Projector F', 'department' => 'Facilities', 'category' => 'Projector', 'status' => 'active', 'created_at' => '2023-10-15 09:00:00', 'updated_at' => '2023-10-20 14:12:00'],
            ['name' => 'HVAC Controller G', 'department' => 'Facilities', 'category' => 'Controller', 'status' => 'active', 'created_at' => '2021-04-22 10:30:00', 'updated_at' => '2022-04-22 10:30:00'],
            ['name' => 'Generator H', 'department' => 'Facilities', 'category' => 'Generator', 'status' => 'inactive', 'created_at' => '2019-07-01 08:00:00', 'updated_at' => '2020-01-10 15:45:00'],
            ['name' => 'Tablet I', 'department' => 'Education', 'category' => 'Tablet', 'status' => 'inactive', 'created_at' => '2022-08-01 10:00:00', 'updated_at' => '2022-08-01 10:00:00'],
            ['name' => 'Chromebook J', 'department' => 'Education', 'category' => 'Laptop', 'status' => 'active', 'created_at' => '2023-08-15 09:20:00', 'updated_at' => '2024-01-05 12:00:00'],
            ['name' => 'Smartboard K', 'department' => 'Education', 'category' => 'Smartboard', 'status' => 'active', 'created_at' => '2021-11-03 14:40:00', 'updated_at' => '2023-02-18 09:10:00'],
            ['name' => 'Document Camera L', 'department' => 'Education', 'category' => 'Camera', 'status' => 'retired', 'created_at' => '2018-05-10 13:25:00', 'updated_at' => '2019-06-01 08:45:00'],
            ['name' => 'Camera M', 'department' => 'Media', 'category' => 'Camera', 'status' => 'retired', 'created_at' => '2021-05-12 13:20:00', 'updated_at' => '2021-12-01 09:15:00'],
            ['name' => 'Microphone N', 'department' => 'Media', 'category' => 'Microphone', 'status' => 'active', 'created_at' => '2024-02-01 11:00:00', 'updated_at' => '2024-02-01 11:00:00'],
            ['name' => 'Mixer O', 'department' => 'Media', 'category' => 'Mixer', 'status' => 'inactive', 'created_at' => '2022-02-14 16:30:00', 'updated_at' => '2022-06-01 10:10:00'],
            ['name' => 'Audio Mixer W', 'department' => 'Media', 'category' => 'Mixer', 'status' => 'active', 'created_at' => '2024-01-01 10:00:00', 'updated_at' => '2020-01-01 10:00:00'],
            ['name' => 'Server P', 'department' => 'Administration', 'category' => 'Server', 'status' => 'active', 'created_at' => '2023-03-01 07:45:00', 'updated_at' => '2024-01-20 08:30:00'],
            ['name' => 'NAS Q', 'department' => 'Administration', 'category' => 'Storage', 'status' => 'active', 'created_at' => '2022-09-12 10:15:00', 'updated_at' => '2023-09-12 10:15:00'],
            ['name' => 'Backup Appliance R', 'department' => 'Administration', 'category' => 'Appliance', 'status' => 'inactive', 'created_at' => '2020-01-05 09:00:00', 'updated_at' => '2020-12-31 23:59:00'],
            ['name' => 'Fax Machine S', 'department' => 'HR', 'category' => 'Peripheral', 'status' => 'inactive', 'created_at' => '2010-04-12 09:00:00', 'updated_at' => '2012-01-01 08:00:00'],
            ['name' => 'Security Camera T', 'department' => 'Security', 'category' => 'Camera', 'status' => 'active', 'created_at' => '2027-03-01 10:00:00', 'updated_at' => '2027-03-01 10:00:00'],
            ['name' => 'Barcode Scanner U', 'department' => 'Library', 'category' => 'Peripheral', 'status' => 'maintenance', 'created_at' => '2021-07-15 13:30:00', 'updated_at' => '2025-01-01 09:00:00'],
        ]);
    }
}
