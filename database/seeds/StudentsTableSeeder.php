<?php

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'name' => 'Murilo Precerruti',
            'email' => 'murilo@gmail.com',
            'institution' => 'Faculdade Impacta Tecnologia',
            'age' => 12,
            'phone' => 11972023780,
            'gender' => 'Masculino',
            'nacionality' => 'Brasileiro',
            'civilStatus' => 'Solteiro',
            'address' => 'Avenida do 51',
            'city' => 'São Paulo',
            'state' => 1
        ]);
    }
}