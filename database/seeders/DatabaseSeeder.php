<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Gestion;
use App\Models\Alumno;
use App\Models\Docente;
use App\Models\Materia;
use App\Models\AlumnoMateria;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        DB::table('users')->insert([
            'name'=>'Erick',
            'email'=>'admin@mail.com',
            'password' => Hash::make('123')
        ]);

        $alumnos = [
            ['name' => 'Maribel', 'apellido' => 'Rivas', 'telefono' => '79988243'],
            ['name' => 'Juan', 'apellido' => 'Pérez', 'telefono' => '71234567'],
            ['name' => 'Ana', 'apellido' => 'García', 'telefono' => '79876543'],
            ['name' => 'Carlos', 'apellido' => 'López', 'telefono' => '76543210'],
            ['name' => 'Sofía', 'apellido' => 'Martínez', 'telefono' => '73456789'],
            ['name' => 'Luis', 'apellido' => 'Hernández', 'telefono' => '70123456'],
            ['name' => 'María', 'apellido' => 'González', 'telefono' => '74567890'],
            ['name' => 'Pedro', 'apellido' => 'Rodríguez', 'telefono' => '75678901'],
            ['name' => 'Laura', 'apellido' => 'Fernández', 'telefono' => '72345678'],
            ['name' => 'Miguel', 'apellido' => 'Ramírez', 'telefono' => '73214567'],
        ];

        foreach ($alumnos as $alumno) {
            Alumno::create($alumno);
        }

        $docentes = [
            ['nombre' => 'Carlos García', 'profesion' => 'Matemáticas'],
            ['nombre' => 'Ana López', 'profesion' => 'Física'],
            ['nombre' => 'Luis Hernández', 'profesion' => 'Química'],
            ['nombre' => 'María González', 'profesion' => 'Biología'],
            ['nombre' => 'Pedro Rodríguez', 'profesion' => 'Historia'],
        ];

        foreach ($docentes as $docente) {
            Docente::create($docente);
        }

        $gestiones = [
            ['nombre' => 'Gestion 2023'],
            ['nombre' => 'Gestion 2024'],
        ];

        foreach ($gestiones as $gestion) {
            Gestion::create($gestion);
        }
        $materias = [
            ['nombre' => 'Matemáticas', 'id_docente' => 1, 'id_gestion' => 1],
            ['nombre' => 'Física', 'id_docente' => 2, 'id_gestion' => 1],
            ['nombre' => 'Química', 'id_docente' => 3, 'id_gestion' => 2],
            ['nombre' => 'Biología', 'id_docente' => 4, 'id_gestion' => 2],
        ];

        foreach ($materias as $materia) {
            Materia::create($materia);
        }

        $alumnoMaterias = [
            ['nota' => 85, 'id_alumno' => 1, 'id_materia' => 1],
            ['nota' => 90, 'id_alumno' => 1, 'id_materia' => 2],
            ['nota' => 78, 'id_alumno' => 2, 'id_materia' => 1],
            ['nota' => 88, 'id_alumno' => 2, 'id_materia' => 3],
            ['nota' => 92, 'id_alumno' => 3, 'id_materia' => 1],
            ['nota' => 85, 'id_alumno' => 3, 'id_materia' => 4],
            ['nota' => 76, 'id_alumno' => 4, 'id_materia' => 1],
            ['nota' => 80, 'id_alumno' => 4, 'id_materia' => 2],
            ['nota' => 85, 'id_alumno' => 5, 'id_materia' => 3],
            ['nota' => 87, 'id_alumno' => 5, 'id_materia' => 4],
            ['nota' => 79, 'id_alumno' => 6, 'id_materia' => 1],
            ['nota' => 82, 'id_alumno' => 6, 'id_materia' => 2],
            ['nota' => 84, 'id_alumno' => 7, 'id_materia' => 3],
            ['nota' => 89, 'id_alumno' => 7, 'id_materia' => 4],
            ['nota' => 75, 'id_alumno' => 8, 'id_materia' => 1],
        ];

        foreach ($alumnoMaterias as $alumnoMateria) {
            AlumnoMateria::create($alumnoMateria);
        }
    }
}
