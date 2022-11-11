<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        return   [
            "ACOMPANHAMENTOS" => [
                'ARROZ BRANCO' => 'R$13,00',
                'FAROFA' => 'R$22.00'
            ],
            "BEBIDAS" => [
                'COCA-COLA' => 'R$7.50',
                'NATUAL ONE UVA' => 'R$10.00'
            ], 
            "CAIPIRINHAS" => [
                'ITAPURA' => 'R$28.50',
                'LIMÃO GALEGO' => 'R$32.50'
            ], 
            "CERVEJAS" => [
                'BADEN BADEN IPA' => 'R$29.00',
                'PRAYA WITBIER' => 'R$13.00'
            ], 
            "COQUETÉIS ESPECIAIS" => [  
                'MOTOQUEIRO FANTASMA' => 'R$33.00',
                'BUGATY ROYALLE' => 'R$35.00'
            ], 
            "COQUETÉIS CLÁSSICOS" => [
                'BOULEVARDIE' => 'R$33.00',
                'VESPER MARTINI' => 'R$30.00'
            ],
            "DRINKS NÃO ALCOOLICOS" => [
                'CASHEW' => 'R$20.00',
                'YELLOW BUS' => 'R$20.00'
            ],  
            "GIN TONIC" => [
                'GIN TROPICAL' => 'R$28.00',
                'GIN FLORES' => 'R$30.00'
            ], 
            "KIDS" => [
                "MAC'N'CHEESE" => 'R$28.00',
                'BOLINHO DE QUEIJO' => 'R$22.00'
            ], 
            "PARA COMEÇAR" => [
                'BATATA FRITA' => 'R$40.00',
                'COXINHA DE JACA' => 'R$32.00'
            ], 
            "SALADAS" => [
                'SALADA MIX' => 'R$22.00',
                'SALADA CAESAR' => 'R$40.00'
            ], 
            "SANDUBAS" => [
                'FALAFEL' => 'R$40.00',
                'ANIMAL CHEF' => 'R$41.00'
            ], 
            "OBSERVAÇÕES" => [
                'EVENTO5' => 'R$5.00',
                'EVENTO100' => 'R$100.00'
            ]];
}}