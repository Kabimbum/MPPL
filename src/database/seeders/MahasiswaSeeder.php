<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Mahasiswa::count()==0){
            Mahasiswa::create([
                'nim'=> '20230801342',
                'name'=> 'Ditto',
                'jurusan'=> 'teknik informatika',
                'fakultas'=> 'ilmu komputer',
                'image'=> '',
                'tanggal_lahir'=> '2005-05-13',


            ]);
        }
    }
}
