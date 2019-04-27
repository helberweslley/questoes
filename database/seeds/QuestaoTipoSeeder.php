<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class QuestaoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('questao_tipo')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('questao_tipo')->insert([
            'id' => 1,
            'tipo' => '4 Alternativas',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questao_tipo')->insert([
            'id' => 2,
            'tipo' => '5 Alternativas',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questao_tipo')->insert([
            'id' => 3,
            'tipo' => 'Somatório',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questao_tipo')->insert([
            'id' => 4,
            'tipo' => 'Verdadeiro ou Falso',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questao_tipo')->insert([
            'id' => 5,
            'tipo' => 'Certo ou Errado',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
