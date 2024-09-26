<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create(['name' => 'Ramesh']);
        Employee::create(['name' => 'Gaurav', 'parent_id' => 1]); // Child of Ramesh
        Employee::create(['name' => 'Shalu', 'parent_id' => 1]); // Child of Ramesh
        Employee::create(['name' => 'Deepu']);
        Employee::create(['name' => 'Amit', 'parent_id' => 4]); // Child of Deepu
        Employee::create(['name' => 'Sham Lal', 'parent_id' => 5]); // Child of Amit
        Employee::create(['name' => 'Kapil', 'parent_id' => 4]); // Child of Deepu
        Employee::create(['name' => 'Prem Chopra']);
    }
}
