<?php

namespace Database\Seeders;

use App\Models\Analyses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnalysisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Analyses::create([
            'name' => 'Генетический анализ происхождения',
            'description' => 'Анализ ДНК для определения происхождения и генетических характеристик.',
            'price' => 150.00,
        ]);

        Analyses::create([
            'name' => 'Анализ генетических мутаций',
            'description' => 'Проверка наличия генетических мутаций, связанных с миграционными процессами.',
            'price' => 200.00,
        ]);
        Analyses::create([
            'name' => 'Иммунологический анализ миграционных рисков',
            'description' => 'Оценка иммунологических показателей для определения рисков миграционных заболеваний.',
            'price' => 180.00,
        ]);

        Analyses::create([
            'name' => 'Анализ генетического разнообразия популяций',
            'description' => 'Определение уровня генетического разнообразия популяций для анализа миграционных потоков.',
            'price' => 220.00,
        ]);

        Analyses::create([
            'name' => 'Генетический анализ миграционной истории',
            'description' => 'Исследование генетических данных для определения миграционной истории и происхождения.',
            'price' => 250.00,
        ]);

        Analyses::create([
            'name' => 'Анализ эмиграционных факторов',
            'description' => 'Оценка факторов, влияющих на эмиграционные процессы, на основе генетических и иммунологических данных.',
            'price' => 180.00,
        ]);

    }
}
