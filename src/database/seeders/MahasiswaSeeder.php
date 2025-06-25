<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            ['nim' => '23010001', 'name' => 'Ahmad Pratama', 'jurusan' => 'Teknik Informatika', 'fakultas' => 'Teknik', 'image' => 'ahmad.jpg', 'tanggal_lahir' => '2002-01-10'],
            ['nim' => '23010002', 'name' => 'Siti Aisyah', 'jurusan' => 'Sistem Informasi', 'fakultas' => 'Teknik', 'image' => 'aisyah.jpg', 'tanggal_lahir' => '2002-03-15'],
            ['nim' => '23010003', 'name' => 'Budi Santoso', 'jurusan' => 'Teknik Industri', 'fakultas' => 'Teknik', 'image' => 'budi.jpg', 'tanggal_lahir' => '2001-08-23'],
            ['nim' => '23010004', 'name' => 'Intan Maharani', 'jurusan' => 'Teknik Elektro', 'fakultas' => 'Teknik', 'image' => 'intan.jpg', 'tanggal_lahir' => '2002-02-10'],
            ['nim' => '23010005', 'name' => 'Rian Dwi Nugroho', 'jurusan' => 'Teknik Mesin', 'fakultas' => 'Teknik', 'image' => 'rian.jpg', 'tanggal_lahir' => '2002-05-14'],
            ['nim' => '23010006', 'name' => 'Nurul Hidayah', 'jurusan' => 'Teknik Sipil', 'fakultas' => 'Teknik', 'image' => 'nurul.jpg', 'tanggal_lahir' => '2002-07-01'],
            ['nim' => '23010007', 'name' => 'Dimas Saputra', 'jurusan' => 'Teknologi Pangan', 'fakultas' => 'Pertanian', 'image' => 'dimas.jpg', 'tanggal_lahir' => '2002-04-10'],
            ['nim' => '23010008', 'name' => 'Lestari Damayanti', 'jurusan' => 'Agribisnis', 'fakultas' => 'Pertanian', 'image' => 'lestari.jpg', 'tanggal_lahir' => '2001-09-15'],
            ['nim' => '23010009', 'name' => 'Rahmat Fadli', 'jurusan' => 'Ilmu Tanah', 'fakultas' => 'Pertanian', 'image' => 'rahmat.jpg', 'tanggal_lahir' => '2002-12-10'],
            ['nim' => '23010010', 'name' => 'Maya Anindita', 'jurusan' => 'Agroteknologi', 'fakultas' => 'Pertanian', 'image' => 'maya.jpg', 'tanggal_lahir' => '2001-10-08'],

            ['nim' => '23010011', 'name' => 'Fajar Nugraha', 'jurusan' => 'Pendidikan Matematika', 'fakultas' => 'Keguruan & Ilmu Pendidikan', 'image' => 'fajar.jpg', 'tanggal_lahir' => '2002-01-12'],
            ['nim' => '23010012', 'name' => 'Ayu Wulandari', 'jurusan' => 'Pendidikan Bahasa Inggris', 'fakultas' => 'Keguruan & Ilmu Pendidikan', 'image' => 'ayu.jpg', 'tanggal_lahir' => '2002-03-21'],
            ['nim' => '23010013', 'name' => 'Gilang Ramadhan', 'jurusan' => 'Pendidikan Fisika', 'fakultas' => 'Keguruan & Ilmu Pendidikan', 'image' => 'gilang.jpg', 'tanggal_lahir' => '2001-09-14'],
            ['nim' => '23010014', 'name' => 'Novi Amelia', 'jurusan' => 'Pendidikan Ekonomi', 'fakultas' => 'Keguruan & Ilmu Pendidikan', 'image' => 'novi.jpg', 'tanggal_lahir' => '2002-06-11'],
            ['nim' => '23010015', 'name' => 'Tommy Kurniawan', 'jurusan' => 'Manajemen', 'fakultas' => 'Ekonomi dan Bisnis', 'image' => 'tommy.jpg', 'tanggal_lahir' => '2002-02-02'],
            ['nim' => '23010016', 'name' => 'Rizky Amelia', 'jurusan' => 'Akuntansi', 'fakultas' => 'Ekonomi dan Bisnis', 'image' => 'rizky.jpg', 'tanggal_lahir' => '2002-05-30'],
            ['nim' => '23010017', 'name' => 'Dhea Salsabila', 'jurusan' => 'Ekonomi Pembangunan', 'fakultas' => 'Ekonomi dan Bisnis', 'image' => 'dhea.jpg', 'tanggal_lahir' => '2002-08-19'],
            ['nim' => '23010018', 'name' => 'Bagas Prakoso', 'jurusan' => 'Ilmu Komunikasi', 'fakultas' => 'Ilmu Sosial & Politik', 'image' => 'bagas.jpg', 'tanggal_lahir' => '2001-11-05'],
            ['nim' => '23010019', 'name' => 'Clara Putri', 'jurusan' => 'Hubungan Internasional', 'fakultas' => 'Ilmu Sosial & Politik', 'image' => 'clara.jpg', 'tanggal_lahir' => '2002-10-07'],
            ['nim' => '23010020', 'name' => 'Deni Wahyudi', 'jurusan' => 'Sosiologi', 'fakultas' => 'Ilmu Sosial & Politik', 'image' => 'deni.jpg', 'tanggal_lahir' => '2002-04-03'],

            ['nim' => '23010021', 'name' => 'Ega Permana', 'jurusan' => 'Hukum', 'fakultas' => 'Hukum', 'image' => 'ega.jpg', 'tanggal_lahir' => '2001-12-21'],
            ['nim' => '23010022', 'name' => 'Vina Aulia', 'jurusan' => 'Ilmu Hukum', 'fakultas' => 'Hukum', 'image' => 'vina.jpg', 'tanggal_lahir' => '2002-02-11'],
            ['nim' => '23010023', 'name' => 'Yuda Setiawan', 'jurusan' => 'Psikologi', 'fakultas' => 'Psikologi', 'image' => 'yuda.jpg', 'tanggal_lahir' => '2002-05-04'],
            ['nim' => '23010024', 'name' => 'Nabila Rachmawati', 'jurusan' => 'Psikologi Klinis', 'fakultas' => 'Psikologi', 'image' => 'nabila.jpg', 'tanggal_lahir' => '2002-06-22'],
            ['nim' => '23010025', 'name' => 'Ilham Fadhil', 'jurusan' => 'Teknik Komputer', 'fakultas' => 'Teknik', 'image' => 'ilham.jpg', 'tanggal_lahir' => '2002-09-14'],
            ['nim' => '23010026', 'name' => 'Selvi Oktaviani', 'jurusan' => 'Sistem Komputer', 'fakultas' => 'Teknik', 'image' => 'selvi.jpg', 'tanggal_lahir' => '2002-07-12'],
            ['nim' => '23010027', 'name' => 'Kevin Alvaro', 'jurusan' => 'Biologi', 'fakultas' => 'MIPA', 'image' => 'kevin.jpg', 'tanggal_lahir' => '2001-12-17'],
            ['nim' => '23010028', 'name' => 'Annisa Syifa', 'jurusan' => 'Kimia', 'fakultas' => 'MIPA', 'image' => 'annisa.jpg', 'tanggal_lahir' => '2002-10-01'],
            ['nim' => '23010029', 'name' => 'Arif Hidayat', 'jurusan' => 'Matematika', 'fakultas' => 'MIPA', 'image' => 'arif.jpg', 'tanggal_lahir' => '2002-11-05'],
            ['nim' => '23010030', 'name' => 'Putri Ayuningtyas', 'jurusan' => 'Fisika', 'fakultas' => 'MIPA', 'image' => 'putri.jpg', 'tanggal_lahir' => '2002-08-18'],

            ['nim' => '23010031', 'name' => 'Reza Fahmi', 'jurusan' => 'Teknik Lingkungan', 'fakultas' => 'Teknik', 'image' => 'reza.jpg', 'tanggal_lahir' => '2002-03-13'],
            ['nim' => '23010032', 'name' => 'Shinta Dewi', 'jurusan' => 'Ilmu Gizi', 'fakultas' => 'Kesehatan', 'image' => 'shinta.jpg', 'tanggal_lahir' => '2002-07-27'],
            ['nim' => '23010033', 'name' => 'Wahyu Hidayah', 'jurusan' => 'Keperawatan', 'fakultas' => 'Kesehatan', 'image' => 'wahyu.jpg', 'tanggal_lahir' => '2002-09-02'],
            ['nim' => '23010034', 'name' => 'Aldi Ramadhan', 'jurusan' => 'Farmasi', 'fakultas' => 'Kesehatan', 'image' => 'aldi.jpg', 'tanggal_lahir' => '2002-12-30'],
            ['nim' => '23010035', 'name' => 'Zaskia Nurani', 'jurusan' => 'Kedokteran Umum', 'fakultas' => 'Kedokteran', 'image' => 'zaskia.jpg', 'tanggal_lahir' => '2001-10-09'],
            ['nim' => '23010036', 'name' => 'Rangga Dwi Saputra', 'jurusan' => 'Pendidikan Jasmani', 'fakultas' => 'Keguruan & Ilmu Pendidikan', 'image' => 'rangga.jpg', 'tanggal_lahir' => '2002-11-11'],
            ['nim' => '23010037', 'name' => 'Melati Indah', 'jurusan' => 'PGSD', 'fakultas' => 'Keguruan & Ilmu Pendidikan', 'image' => 'melati.jpg', 'tanggal_lahir' => '2002-05-17'],
            ['nim' => '23010038', 'name' => 'Aditia Putra', 'jurusan' => 'Teknik Geologi', 'fakultas' => 'Teknik', 'image' => 'aditia.jpg', 'tanggal_lahir' => '2002-02-25'],
            ['nim' => '23010039', 'name' => 'Rika Lestari', 'jurusan' => 'Statistik', 'fakultas' => 'MIPA', 'image' => 'rika.jpg', 'tanggal_lahir' => '2002-01-05'],
            ['nim' => '23010040', 'name' => 'Hendra Wijaya', 'jurusan' => 'Arsitektur', 'fakultas' => 'Teknik', 'image' => 'hendra.jpg', 'tanggal_lahir' => '2002-06-08'],
            ['nim' => '23010041', 'name' => 'Nindya Ayu', 'jurusan' => 'Manajemen Informatika', 'fakultas' => 'Vokasi', 'image' => 'nindya.jpg', 'tanggal_lahir' => '2002-09-26'],
            ['nim' => '23010042', 'name' => 'Dodi Hidayat', 'jurusan' => 'Teknik Otomotif', 'fakultas' => 'Vokasi', 'image' => 'dodi.jpg', 'tanggal_lahir' => '2002-04-04'],
            ['nim' => '23010043', 'name' => 'Salsabila Zahra', 'jurusan' => 'Teknik Elektronika Industri', 'fakultas' => 'Vokasi', 'image' => 'salsa.jpg', 'tanggal_lahir' => '2002-05-09'],
            ['nim' => '23010044', 'name' => 'Yusuf Maulana', 'jurusan' => 'Perbankan', 'fakultas' => 'Vokasi', 'image' => 'yusuf.jpg', 'tanggal_lahir' => '2002-10-15'],
            ['nim' => '23010045', 'name' => 'Laras Widya', 'jurusan' => 'Bahasa Jepang', 'fakultas' => 'Ilmu Budaya', 'image' => 'laras.jpg', 'tanggal_lahir' => '2002-08-22'],
        ]);
    }
}
