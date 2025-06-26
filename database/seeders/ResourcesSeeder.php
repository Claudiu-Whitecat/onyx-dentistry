<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('resources')->insert(
            [
                [
                    'slug' => 'ortodontie',
                    'weight' => 1,
                    'title' => 'Ortodonție',
                    'imagePath' => '01JXF4SWKR29KF25BZAFXT0X48.jpg',
                    'body' => "# Zâmbetul perfect începe cu ortodonția: Descoperă serviciile noastre specializate\n\nOrtodonția este ramura stomatologiei care se ocupă cu diagnosticarea, prevenirea și corectarea poziției dinților și a maxilarelor. În cabinetul nostru stomatologic, oferim tratamente ortodontice moderne și personalizate, menite să îți îmbunătățească nu doar aspectul zâmbetului, ci și sănătatea orală pe termen lung.\n\n## De ce este importantă ortodonția?\n\nUn zâmbet aliniat corect nu este doar estetic. Dinții înghesuiți, spațiați sau mușcăturile incorecte pot duce la:\n\n- dificultăți în masticație și vorbire,\n- igienă orală dificilă și risc crescut de carii,\n- dureri mandibulare sau tulburări articulare (ATM).\n\nPrin tratamente ortodontice eficiente, prevenim aceste probleme și restabilim echilibrul funcțional al cavității orale.\n\n### Tipuri de tratamente ortodontice disponibile\n\n1. **Aparat dentar metalic clasic** – opțiunea cea mai accesibilă, potrivită pentru toate vârstele.\n\n2. **Aparat dentar ceramic** – discret și eficient, ideal pentru pacienții care își doresc un zâmbet estetic în timpul tratamentului.\n\n3. **Alignere transparente (Invisalign sau echivalent)** – soluția invizibilă, confortabilă și detașabilă, preferată mai ales de adulți.\n\n4. **Aparate ortodontice pentru copii** – tratamente timpurii care ghidează dezvoltarea corectă a danturii.\n\n![](http://127.0.0.1:8000/storage/WqJ9jIA0vHndCOWVeR08AyqfwzQTxkznp2YTweh2.jpg)\n\n### Cum decurge tratamentul ortodontic?\n\n- **Consultație inițială** – analizăm poziția dinților și mușcătura cu ajutorul radiografiilor și amprentelor digitale.\n- **Plan de tratament personalizat** – alegem tipul de aparat potrivit și estimăm durata tratamentului.\n- **Aplicarea aparatului dentar** – într-o singură ședință, fără durere.\n- **Controale periodice** – ajustări lunare și monitorizarea progresului.\n- **Faza de contenție** – după îndepărtarea aparatului, purtăm un aparat de contenție pentru menținerea rezultatelor.\n\n> **Programează-te acum pentru o consultație ortodontică!**\n> \n>Zâmbetul la care ai visat este mai aproape decât crezi.",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'slug' => 'test2',
                    'weight' => 2,
                    'title' => 'test2',
                    'imagePath' => 'images/blalala2.jpg',
                    'body' => 'dsadasdasdsa da dasd asda dasdasdasdas',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'slug' => 'test3',
                    'weight' => 3,
                    'title' => 'test3',
                    'imagePath' => 'images/blalala3.jpg',
                    'body' => 'dsadasdasdsa da dasd3232 asda dasdasdasdas',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
    }
}
