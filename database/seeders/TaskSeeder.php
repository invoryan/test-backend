<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::insert([
            [
                'title' => 'Comprar insumos',
                'description' => 'Comprar material de oficina y suministros básicos',
                'due_date' => Carbon::now()->addDays(3),
                'status' => 'PENDIENTE',
            ],
            [
                'title' => 'Revisión de informes',
                'description' => 'Revisar y aprobar los informes semanales del equipo',
                'due_date' => Carbon::now()->addDays(5),
                'status' => 'PENDIENTE',
            ],
            [
                'title' => 'Actualizar sitio web',
                'description' => 'Actualizar la información en la página principal',
                'due_date' => Carbon::now()->addWeek(),
                'status' => 'COMPLETADO',
            ],
            [
                'title' => 'Presentación del proyecto',
                'description' => 'Preparar y exponer avances del proyecto ante gerencia',
                'due_date' => Carbon::now()->addDays(10),
                'status' => 'OBSERVADO',
            ],
            [
                'title' => 'Reunión con clientes',
                'description' => 'Agendar y asistir a la reunión de revisión de requerimientos',
                'due_date' => Carbon::now()->addDays(7),
                'status' => 'PENDIENTE',
            ],
            [
                'title' => 'Entrega de reportes',
                'description' => 'Generar y enviar reportes mensuales a la directiva',
                'due_date' => Carbon::now()->addMonth(),
                'status' => 'PENDIENTE',
            ],
            [
                'title' => 'Capacitación interna',
                'description' => 'Organizar una sesión de formación para el equipo de desarrollo',
                'due_date' => Carbon::now()->addDays(15),
                'status' => 'COMPLETADO',
            ],
            [
                'title' => 'Mantenimiento del servidor',
                'description' => 'Realizar revisión y actualización del servidor principal',
                'due_date' => Carbon::now()->addWeeks(2),
                'status' => 'PENDIENTE',
            ],
            [
                'title' => 'Pruebas de software',
                'description' => 'Ejecutar pruebas de calidad y corregir errores en la app',
                'due_date' => Carbon::now()->addDays(12),
                'status' => 'OBSERVADO',
            ],
            [
                'title' => 'Evaluación de desempeño',
                'description' => 'Realizar evaluación trimestral del equipo de trabajo',
                'due_date' => Carbon::now()->addMonths(2),
                'status' => 'PENDIENTE',
            ],
        ]);
    }
}
