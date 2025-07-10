<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreviousEmploymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('previous_employments')->insert([
            ['company' => 'New Hired'],
            ['company' => 'Transferred from OI Batch I'],
            ['company' => 'Transferred from OI Batch II'],
            ['company' => 'Transferred from OI Batch III'],
            ['company' => 'Transferred from HTI to DGE'],
            ['company' => 'Transferred from OI Batch IV'],
            ['company' => 'Transferred from OI Batch V'],
            ['company' => 'Transferred from DGE Project NSN'],
            ['company' => 'Transferred from IMSI Project NSN'],
            ['company' => 'Transferred from HTI Batch VI'],
            ['company' => 'New Hired After 18 November 2013'],
            ['company' => 'Re Arrangement ex HTI'],
            ['company' => 'Transferred from DYKA to DGE'],
            ['company' => 'Transferred from HS to ARP'],
            ['company' => 'Transferred from DCPE to ARP'],
        ]);
    }
}
