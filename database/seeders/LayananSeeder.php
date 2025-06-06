<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        $layanans = [
            ['name' => 'Instalasi Gawat Darurat (IGD)','hospital_id' => 1],
            ['name' => 'Klinik Saraf','hospital_id' => 1],
            ['name' => 'Klinik Orthopedi','hospital_id' => 1],
            ['name' => 'Klinik Penyakit Dalam','hospital_id' => 1],
            ['name' => 'Klinik Bedah Umum','hospital_id' => 1],
            ['name' => 'Klinik Bedah Syaraf','hospital_id' => 1],
            ['name' => 'Klinik Bedah Anak','hospital_id' => 1],
            ['name' => 'Klinik Kandungan','hospital_id' => 1],
            ['name' => 'Klinik Fetomaternal','hospital_id' => 1],
            ['name' => 'Klinik Akupunktur','hospital_id' => 1],
            ['name' => 'Klinik Jantung','hospital_id' => 1],
            ['name' => 'Klinik Gigi Umum','hospital_id' => 1],
            ['name' => 'Klinik Konservasi Gigi','hospital_id' => 1],
            ['name' => 'Klinik Bedah Mulut','hospital_id' => 1],
            ['name' => 'Klinik Orthodonti','hospital_id' => 1],
            ['name' => 'Klinik Anak','hospital_id' => 1],
            ['name' => 'Klinik Psikiatri','hospital_id' => 1],
            ['name' => 'Klinik Mata','hospital_id' => 1],
            ['name' => 'Klinik Kulit','hospital_id' => 1],
            ['name' => 'Klinik THT','hospital_id' => 1],
            ['name' => 'Klinik DOT','hospital_id' => 1],
            ['name' => 'Klinik CST dan VCT','hospital_id' => 1],
            ['name' => 'Klinik MCU','hospital_id' => 1],
            ['name' => 'Klinik Paru','hospital_id' => 1],
            ['name' => 'Klinik Urologi','hospital_id' => 1],
            ['name' => 'Klinik Infeksi','hospital_id' => 1],
            ['name' => 'Klinik Paru', 'hospital_id' => 2],
            ['name' => 'Klinik Bedah Anak', 'hospital_id' => 2],
            ['name' => 'Klinik Endokrin', 'hospital_id' => 2],
            ['name' => 'Klinik Jantung', 'hospital_id' => 2],
            ['name' => 'Klinik Mata', 'hospital_id' => 2],
            ['name' => 'Klinik Bedah Umum', 'hospital_id' => 2],
            ['name' => 'Klinik Bedah Tulang', 'hospital_id' => 2],
            ['name' => 'Klinik THT', 'hospital_id' => 2],
            ['name' => 'Klinik Anak', 'hospital_id' => 3],
            ['name' => 'Klinik Penyakit Dalam', 'hospital_id' => 3],
            ['name' => 'Klinik Gigi & Mulut', 'hospital_id' => 3],
            ['name' => 'Klinik Saraf', 'hospital_id' => 3],
            ['name' => 'Klinik Paru', 'hospital_id' => 3],
            ['name' => 'Poli Spesialis Penyakit Dalam', 'hospital_id' => 4],
            ['name' => 'Poli Spesialis Kandungan', 'hospital_id' => 4],
            ['name' => 'Poli Gigi', 'hospital_id' => 4],
            ['name' => 'Rawat Jalan', 'hospital_id' => 5],
            ['name' => 'Poli Spesialis Paru', 'hospital_id' => 5],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 6],
            ['name' => 'Spesialis Reumatologi', 'hospital_id' => 6],
            ['name' => 'Spesialis Kandungan (Obstetri & Ginekologi)', 'hospital_id' => 6],
            ['name' => 'Klinik Pedodonti (Perawatan Gigi Anak)', 'hospital_id' => 7],
            ['name' => 'Klinik Orthodonti (Perawatan Susunan Gigi)', 'hospital_id' => 7],
            ['name' => 'Klinik Konservasi Gigi (Penambalan dan Perawatan Gigi)', 'hospital_id' => 7],
            ['name' => 'Klinik Periodonti (Perawatan Gusi dan Jaringan Pendukung)', 'hospital_id' => 7],
            ['name' => 'Klinik Bedah Mulut', 'hospital_id' => 7],
            ['name' => 'Klinik Penyakit Mulut', 'hospital_id' => 7],
            ['name' => 'Dokter Umum', 'hospital_id' => 7],
            ['name' => 'Spesialis Orthopaedi & Traumatologi', 'hospital_id' => 8],
            ['name' => 'Spesialis Bedah Umum', 'hospital_id' => 8],
            ['name' => 'Spesialis Rehabilitasi Medis', 'hospital_id' => 8],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 8],
            ['name' => 'Spesialis THT', 'hospital_id' => 8],
            ['name' => 'Spesialis Bedah Mulut', 'hospital_id' => 8],
            ['name' => 'Spesialis Jantung', 'hospital_id' => 8],
            ['name' => 'Spesialis Gigi & Mulut', 'hospital_id' => 8],
            ['name' => 'Spesialis Urologi', 'hospital_id' => 8],
            ['name' => 'Spesialis Bedah Plastik', 'hospital_id' => 8],
            ['name' => 'Spesialis Paru', 'hospital_id' => 9],
            ['name' => 'Spesialis THT', 'hospital_id' => 9],
            ['name' => 'Spesialis Urologi', 'hospital_id' => 9],
            ['name' => 'Spesialis Anak', 'hospital_id' => 9],
            ['name' => 'Spesialis Bedah Umum', 'hospital_id' => 9],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 9],
            ['name' => 'Spesialis Saraf', 'hospital_id' => 9],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 10],
            ['name' => 'Spesialis Anak', 'hospital_id' => 10],
            ['name' => 'Spesialis Kandungan (Obstetri & Ginekologi)', 'hospital_id' => 10],
            ['name' => 'Klinik Penyakit Dalam', 'hospital_id' => 11],
            ['name' => 'Klinik Anak', 'hospital_id' => 11],
            ['name' => 'Klinik Kandungan (Obstetri & Ginekologi)', 'hospital_id' => 11],
            ['name' => 'Klinik Bedah', 'hospital_id' => 11],
            ['name' => 'Klinik Saraf', 'hospital_id' => 11],
            ['name' => 'Klinik Urologi', 'hospital_id' => 11],
            ['name' => 'Dokter Gigi', 'hospital_id' => 12],
            ['name' => 'Spesialis Anak', 'hospital_id' => 12],
            ['name' => 'Spesialis Bedah Mulut', 'hospital_id' => 12],
            ['name' => 'Spesialis Bedah Onkologi', 'hospital_id' => 12],
            ['name' => 'Spesialis Bedah Saraf', 'hospital_id' => 12],
            ['name' => 'Spesialis Bedah Umum', 'hospital_id' => 12],
            ['name' => 'Spesialis Jantung', 'hospital_id' => 12],
            ['name' => 'Spesialis Kandungan', 'hospital_id' => 12],
            ['name' => 'Spesialis Kulit & Kelamin', 'hospital_id' => 12],
            ['name' => 'Spesialis Mata', 'hospital_id' => 12],
            ['name' => 'Spesialis Ortopedi', 'hospital_id' => 12],
            ['name' => 'Spesialis Paru', 'hospital_id' => 12],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 12],
            ['name' => 'Spesialis Rehabilitasi Medik', 'hospital_id' => 12],
            ['name' => 'Spesialis Saraf', 'hospital_id' => 12],
            ['name' => 'Spesialis THT', 'hospital_id' => 12],
            ['name' => 'Spesialis Obstetri dan Ginekologi (Obgyn)', 'hospital_id' => 13],
            ['name' => 'Spesialis Anak', 'hospital_id' => 13],
            ['name' => 'Spesialis Gigi', 'hospital_id' => 13],
            ['name' => 'Spesialis Bedah Umum', 'hospital_id' => 13],
            ['name' => 'Spesialis Saraf', 'hospital_id' => 13],
            ['name' => 'Spesialis Urologi', 'hospital_id' => 13],
            ['name' => 'Spesialis Kandungan', 'hospital_id' => 13],
            ['name' => 'Spesialis Kebidanan dan Kandungan (Obgyn)', 'hospital_id' => 14],
            ['name' => 'Spesialis Anak', 'hospital_id' => 14],
            ['name' => 'Spesialis Bedah Umum', 'hospital_id' => 14],
            ['name' => 'Spesialis Bedah Saraf', 'hospital_id' => 14],
            ['name' => 'Spesialis Orthopedi', 'hospital_id' => 14],
            ['name' => 'Spesialis Andrologi', 'hospital_id' => 14],
            ['name' => 'Spesialis Kulit dan Kelamin', 'hospital_id' => 14],
            ['name' => 'Spesialis Mata', 'hospital_id' => 14],
            ['name' => 'Spesialis Jantung', 'hospital_id' => 14],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 15],
            ['name' => 'Spesialis Anak', 'hospital_id' => 15],
            ['name' => 'Spesialis Kedokteran Jiwa', 'hospital_id' => 15],
            ['name' => 'Spesialis Gigi', 'hospital_id' => 15],
            ['name' => 'Spesialis Rehabilitasi Medik', 'hospital_id' => 15],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 16],
            ['name' => 'Spesialis Anak', 'hospital_id' => 16],
            ['name' => 'Spesialis Bedah Umum', 'hospital_id' => 16],
            ['name' => 'Spesialis Saraf', 'hospital_id' => 16],
            ['name' => 'Spesialis Paru', 'hospital_id' => 16],
            ['name' => 'Spesialis Jantung', 'hospital_id' => 16],
            ['name' => 'Spesialis Orthopedi', 'hospital_id' => 16],
            ['name' => 'Spesialis Rehabilitasi Medik', 'hospital_id' => 16],
            ['name' => 'Spesialis Urologi', 'hospital_id' => 16],
            ['name' => 'Spesialis Mata', 'hospital_id' => 16],
            ['name' => 'Spesialis THT', 'hospital_id' => 16],
            ['name' => 'Spesialis Kulit dan Kelamin', 'hospital_id' => 16],
            ['name' => 'Spesialis Gigi', 'hospital_id' => 16],
            ['name' => 'Spesialis Bedah Digestif', 'hospital_id' => 16],
            ['name' => 'Spesialis Bedah Saraf', 'hospital_id' => 16],
            ['name' => 'Spesialis Bedah Plastik', 'hospital_id' => 16],
            ['name' => 'Spesialis Gizi Klinik', 'hospital_id' => 16],
            ['name' => 'Spesialis Kedokteran Jiwa', 'hospital_id' => 16],
            ['name' => 'Spesialis Kandungan dan Kebidanan', 'hospital_id' => 16],
            ['name' => 'Spesialis Andrologi', 'hospital_id' => 16],
            ['name' => 'Spesialis Penyakit Dalam – Konsultan Ginjal Hipertensi', 'hospital_id' => 17],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 17],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 18],
            ['name' => 'Spesialis Anak', 'hospital_id' => 18],
            ['name' => 'Spesialis Kebidanan & Kandungan', 'hospital_id' => 18],
            ['name' => 'Spesialis Bedah', 'hospital_id' => 18],
            ['name' => 'Spesialis Saraf', 'hospital_id' => 18],
            ['name' => 'Spesialis THT', 'hospital_id' => 18],
            ['name' => 'Spesialis Mata', 'hospital_id' => 18],
            ['name' => 'Spesialis Gigi', 'hospital_id' => 18],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 19],
            ['name' => 'Spesialis Bedah', 'hospital_id' => 19],
            ['name' => 'Spesialis Anak', 'hospital_id' => 19],
            ['name' => 'Spesialis Kulit dan Kelamin', 'hospital_id' => 19],
            ['name' => 'Spesialis Ortopedi', 'hospital_id' => 19],
            ['name' => 'Klinik Nyeri', 'hospital_id' => 19],
            ['name' => 'Spesialis Anak', 'hospital_id' => 20],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 20],
            ['name' => 'Spesialis Kebidanan & Kandungan', 'hospital_id' => 20],
            ['name' => 'Spesialis Saraf', 'hospital_id' => 20],
            ['name' => 'Spesialis Kulit & Kelamin', 'hospital_id' => 20],
            ['name' => 'Spesialis Bedah', 'hospital_id' => 20],
            ['name' => 'Spesialis THT', 'hospital_id' => 20],
            ['name' => 'Dokter Gigi Umum & Spesialis', 'hospital_id' => 20],
            ['name' => 'Konsultasi Gizi & Diabetes', 'hospital_id' => 20],
            ['name' => 'Senam Diabetes', 'hospital_id' => 20],
            ['name' => 'Pemeriksaan Ibu Hamil, Pasca Melahirkan, KB, Laktasi, Gizi Ibu Hamil & Balita', 'hospital_id' => 20],
            ['name' => 'Imunisasi Dasar & Anjuran', 'hospital_id' => 20],
            ['name' => 'Imunisasi BCG & Campak', 'hospital_id' => 20 ],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 21],
            ['name' => 'Spesialis Bedah', 'hospital_id' => 21],
            ['name' => 'Spesialis Anak', 'hospital_id' => 22],
            ['name' => 'Spesialis THT', 'hospital_id' => 22],
            ['name' => 'Spesialis Bedah', 'hospital_id' => 22],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 22],
            ['name' => 'Spesialis Mata', 'hospital_id' => 22],
            ['name' => 'Spesialis Rehabilitasi Medik', 'hospital_id' => 22],
            ['name' => 'Spesialis Kejiwaan', 'hospital_id' => 22],
            ['name' => 'Spesialis Kandungan (Obgyn)', 'hospital_id' => 22],
            ['name' => 'Spesialis Saraf', 'hospital_id' => 22],
            ['name' => 'Spesialis Paru', 'hospital_id' => 22],
            ['name' => 'Spesialis Bedah Mulut', 'hospital_id' => 22],
            ['name' => 'Spesialis Gigi', 'hospital_id' => 22],
            ['name' => 'Spesialis Laboratorium', 'hospital_id' => 22],
            ['name' => 'Spesialis Anak', 'hospital_id' => 23],
            ['name' => 'Obgyn (Kandungan)', 'hospital_id' => 23],
            ['name' => 'Penyakit Dalam', 'hospital_id' => 23],
            ['name' => 'Telinga Hidung Tenggorokan', 'hospital_id' => 23],
            ['name' => 'Bedah Umum', 'hospital_id' => 23],
            ['name' => 'Spesialis Anak', 'hospital_id' => 24],
            ['name' => 'Spesialis Jantung dan Pembuluh Darah', 'hospital_id' => 24],
            ['name' => 'Spesialis Bedah', 'hospital_id' => 24],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 24],
            ['name' => 'Spesialis Telinga Hidung Tenggorokan (THT)', 'hospital_id' => 24],
            ['name' => 'Spesialis Bedah Umum', 'hospital_id' => 24],
            ['name' => 'Spesialis Rehabilitasi Medik', 'hospital_id' => 24],
            ['name' => 'Spesialis Orthopaedi', 'hospital_id' => 24],
            // Layanan untuk Rumah Sakit Mata Cicendo (hospital_id: 25)
            ['name' => 'Poli Mata Umum', 'hospital_id' => 25],
            ['name' => 'Poli Katarak', 'hospital_id' => 25],
            ['name' => 'Poli Glaukoma', 'hospital_id' => 25],
            ['name' => 'Poli Retina', 'hospital_id' => 25],
            ['name' => 'Poli Oftalmologi Anak & Strabismus', 'hospital_id' => 25],
            ['name' => 'Poli Neuro-Oftalmologi', 'hospital_id' => 25],
            ['name' => 'Poli Lensa Kontak', 'hospital_id' => 25],
            ['name' => 'Poli Bedah Refraktif (LASIK)', 'hospital_id' => 25],
            ['name' => 'Unit Gawat Darurat Mata', 'hospital_id' => 25],
            ['name' => 'Poli Okuloplasti', 'hospital_id' => 25],
            ['name' => 'Poli Low Vision', 'hospital_id' => 25],
            // Layanan untuk Rumah Sakit Santosa Bandung Kopo (hospital_id: 26)
            ['name' => 'Poli Umum', 'hospital_id' => 26],
            ['name' => 'Poli Penyakit Dalam', 'hospital_id' => 26],
            ['name' => 'Poli Anak', 'hospital_id' => 26],
            ['name' => 'Poli Bedah Umum', 'hospital_id' => 26],
            ['name' => 'Poli Kebidanan dan Kandungan', 'hospital_id' => 26],
            ['name' => 'Poli Jantung', 'hospital_id' => 26],
            ['name' => 'Poli Paru', 'hospital_id' => 26],
            ['name' => 'Poli Saraf', 'hospital_id' => 26],
            ['name' => 'Poli Mata', 'hospital_id' => 26],
            ['name' => 'Poli THT', 'hospital_id' => 26],
            ['name' => 'Poli Kulit dan Kelamin', 'hospital_id' => 26],
            ['name' => 'Poli Gigi', 'hospital_id' => 26],
            ['name' => 'Poli Rehabilitasi Medik', 'hospital_id' => 26],
            ['name' => 'Unit Gawat Darurat (UGD)', 'hospital_id' => 26],
            ['name' => 'Radiologi', 'hospital_id' => 26],
            ['name' => 'Laboratorium', 'hospital_id' => 26],
            ['name' => 'Farmasi', 'hospital_id' => 26],
            ['name' => 'Poli Umum', 'hospital_id' => 27],
            ['name' => 'Poli Penyakit Dalam', 'hospital_id' => 27],
            ['name' => 'Poli Anak', 'hospital_id' => 27],
            ['name' => 'Poli Bedah Umum', 'hospital_id' => 27],
            ['name' => 'Poli Kebidanan dan Kandungan', 'hospital_id' => 27],
            ['name' => 'Poli Jantung', 'hospital_id' => 27],
            ['name' => 'Poli Paru', 'hospital_id' => 27],
            ['name' => 'Poli Saraf', 'hospital_id' => 27],
            ['name' => 'Poli Mata', 'hospital_id' => 27],
            ['name' => 'Poli THT', 'hospital_id' => 27],
            ['name' => 'Poli Kulit dan Kelamin', 'hospital_id' => 27],
            ['name' => 'Poli Gigi dan Mulut', 'hospital_id' => 27],
            ['name' => 'Poli Ortopedi dan Traumatologi', 'hospital_id' => 27],
            ['name' => 'Poli Urologi', 'hospital_id' => 27],
            ['name' => 'Poli Rehabilitasi Medik', 'hospital_id' => 27],
            ['name' => 'Unit Gawat Darurat (UGD)', 'hospital_id' => 27],
            ['name' => 'Radiologi', 'hospital_id' => 27],
            ['name' => 'Laboratorium', 'hospital_id' => 27],
            ['name' => 'Farmasi', 'hospital_id' => 27],
            ['name' => 'Intensive Care Unit (ICU)', 'hospital_id' => 27],
            ['name' => 'Medical Check Up', 'hospital_id' => 27],
            ['name' => 'Dokter Umum', 'hospital_id' => 28],
            ['name' => 'Poliklinik Anak', 'hospital_id' => 28],
            ['name' => 'Poliklinik Gigi', 'hospital_id' => 28],
            ['name' => 'Poliklinik Gizi', 'hospital_id' => 28],
            ['name' => 'Poliklinik Jantung dan Pembuluh Darah', 'hospital_id' => 29],
            ['name' => 'Poliklinik Saraf', 'hospital_id' => 29],
            ['name' => 'Poliklinik Anak', 'hospital_id' => 29],
            ['name' => 'Poliklinik Kebidanan dan Kandungan', 'hospital_id' => 29],
            ['name' => 'Poliklinik THT (Telinga, Hidung, Tenggorokan)', 'hospital_id' => 29],
            ['name' => 'Poliklinik Psikiatri', 'hospital_id' => 29],
            ['name' => 'Poliklinik Sore Eksekutif (Umum) Kebidanan & Kandungan', 'hospital_id' => 29],
            ['name' => 'Rheumatologi', 'hospital_id' => 29],
            ['name' => 'Bedah Toraks, Kardiak, dan Vaskular', 'hospital_id' => 29],
            ['name' => 'Bedah Ortopedi', 'hospital_id' => 29],
            ['name' => 'Psikiater', 'hospital_id' => 29],
            ['name' => 'Rehabilitasi Medik', 'hospital_id' => 29],
            ['name' => 'Poliklinik Anak', 'hospital_id' => 30],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 30],
            ['name' => 'Spesialis Okupasi', 'hospital_id' => 30],
            ['name' => 'Spesialis Jiwa (Psikiatri)', 'hospital_id' => 30],
            ['name' => 'Spesialis Rehabilitasi Medik', 'hospital_id' => 30],
            ['name' => 'Poliklinik Anak', 'hospital_id' => 31],
            ['name' => 'Spesialis Jantung', 'hospital_id' => 31],
            ['name' => 'Spesialis Bedah Saraf', 'hospital_id' => 31],
            ['name' => 'Poliklinik Gigi', 'hospital_id' => 31],
            ['name' => 'Spesialis Kandungan (Obgyn)', 'hospital_id' => 31],
            ['name' => 'Spesialis Gizi', 'hospital_id' => 31],
            ['name' => 'Spesialis Kulit dan Kelamin', 'hospital_id' => 31],
            ['name' => 'Spesialis Mata', 'hospital_id' => 31],
            ['name' => 'Spesialis THT-KL', 'hospital_id' => 31],
            ['name' => 'Rehabilitasi Medik', 'hospital_id' => 31],
            ['name' => 'Anak', 'hospital_id' => 32],
            ['name' => 'Bedah 1', 'hospital_id' => 32],
            ['name' => 'Gigi & Mulut 1', 'hospital_id' => 32],
            ['name' => 'Gigi & Mulut 2 (Pedodonti)', 'hospital_id' => 32],
            ['name' => 'Hemodialisa', 'hospital_id' => 32],
            ['name' => 'Jantung dan Pembuluh Darah', 'hospital_id' => 32],
            ['name' => 'Kebidanan & Kandungan', 'hospital_id' => 32],
            ['name' => 'Kulit & Kelamin', 'hospital_id' => 32],
            ['name' => 'Mata', 'hospital_id' => 32],
            ['name' => 'Medical Check Up', 'hospital_id' => 32],
            ['name' => 'PDP', 'hospital_id' => 32],
            ['name' => 'Penyakit Dalam 1', 'hospital_id' => 32],
            ['name' => 'Penyakit Dalam 2', 'hospital_id' => 32],
            ['name' => 'Rehabilitasi Medik', 'hospital_id' => 32],
            ['name' => 'Saraf', 'hospital_id' => 32],
            ['name' => 'Spesialis Kedokteran Jiwa', 'hospital_id' => 33],
            ['name' => 'Spesialis Bedah', 'hospital_id' => 34],
            ['name' => 'Spesialis Anak', 'hospital_id' => 34],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 34],
            ['name' => 'Spesialis Gigi', 'hospital_id' => 34],
            ['name' => 'Spesialis Saraf', 'hospital_id' => 34],
            ['name' => 'Spesialis THT', 'hospital_id' => 34],
            ['name' => 'Spesialis Kandungan', 'hospital_id' => 34],
            ['name' => 'Poli Spesialis Gigi', 'hospital_id' => 35],
            ['name' => 'Poli Spesialis Bedah', 'hospital_id' => 35],
            ['name' => 'Poli Spesialis Penyakit Dalam', 'hospital_id' => 35],
            ['name' => 'Poli Spesialis Obsgyn (Kandungan)', 'hospital_id' => 35],
            ['name' => 'Poliklinik Umum', 'hospital_id' => 36],
            ['name' => 'Poliklinik Saraf', 'hospital_id' => 36],
            ['name' => 'Poliklinik Bedah Umum', 'hospital_id' => 36],
            ['name' => 'Poliklinik Penyakit Dalam', 'hospital_id' => 36],
            ['name' => 'Poliklinik Anak', 'hospital_id' => 36],
            ['name' => 'Poliklinik Kulit & Kelamin', 'hospital_id' => 36],
            ['name' => 'Poliklinik Gigi & Mulut', 'hospital_id' => 36],
            ['name' => 'Poliklinik Mata', 'hospital_id' => 36],
            ['name' => 'Poliklinik Rehabilitasi Medik', 'hospital_id' => 36],
            ['name' => 'Poliklinik Bedah Orthopedi', 'hospital_id' => 36],
            ['name' => 'Poliklinik Gizi', 'hospital_id' => 36],
            ['name' => 'Poliklinik Urologi', 'hospital_id' => 36],
            ['name' => 'Poliklinik THT', 'hospital_id' => 36],
            ['name' => 'Pelayanan Medik Dasar / Umum', 'hospital_id' => 37],
            ['name' => 'Anak', 'hospital_id' => 38],
            ['name' => 'Bedah Anak', 'hospital_id' => 38],
            ['name' => 'Obgyn', 'hospital_id' => 38],
            ['name' => 'Kulit & Kelamin', 'hospital_id' => 38],
            ['name' => 'Saraf', 'hospital_id' => 38],
            ['name' => 'Penyakit Dalam', 'hospital_id' => 38],
            ['name' => 'Jantung', 'hospital_id' => 38],
            ['name' => 'Gizi', 'hospital_id' => 38],
            ['name' => 'Bedah', 'hospital_id' => 38],
            ['name' => 'THT', 'hospital_id' => 38],
            ['name' => 'Mata', 'hospital_id' => 38],
            ['name' => 'Urologi', 'hospital_id' => 38],
            ['name' => 'Psikiatri', 'hospital_id' => 38],
            ['name' => 'Bedah Saraf', 'hospital_id' => 38],
            ['name' => 'Paru', 'hospital_id' => 38],
            ['name' => 'Spesialis Anak', 'hospital_id' => 39],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 39],
            ['name' => 'Spesialis Kebidanan dan Kandungan', 'hospital_id' => 39],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 40],
            ['name' => 'Spesialis Anak', 'hospital_id' => 40],
            ['name' => 'Spesialis Bedah', 'hospital_id' => 40],
            ['name' => 'Spesialis Kandungan', 'hospital_id' => 40],
            ['name' => 'Spesialis Saraf', 'hospital_id' => 40],
            ['name' => 'Spesialis Jantung', 'hospital_id' => 40],
            ['name' => 'Spesialis Kulit & Kelamin', 'hospital_id' => 40],
            ['name' => 'Spesialis Psikiatri', 'hospital_id' => 40],
            ['name' => 'Spesialis Orthopedi', 'hospital_id' => 40],
            ['name' => 'Spesialis Urologi', 'hospital_id' => 40],
            ['name' => 'Spesialis THT', 'hospital_id' => 40],
            ['name' => 'Dokter Gigi & Bedah Mulut', 'hospital_id' => 40],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 41],
            ['name' => 'Spesialis Anak', 'hospital_id' => 41],
            ['name' => 'Spesialis Saraf', 'hospital_id' => 41],
            ['name' => 'Spesialis Paru', 'hospital_id' => 41],
            ['name' => 'Spesialis THT', 'hospital_id' => 41],
            ['name' => 'Spesialis Orthopedi', 'hospital_id' => 41],
            ['name' => 'Spesialis Anak', 'hospital_id' => 42],
            ['name' => 'Spesialis Bedah Umum', 'hospital_id' => 42],
            ['name' => 'Spesialis Kebidanan & Kandungan', 'hospital_id' => 42],
            ['name' => 'Spesialis Jantung & Pembuluh Darah', 'hospital_id' => 42],
            ['name' => 'Spesialis Kedokteran Jiwa', 'hospital_id' => 42],
            ['name' => 'Spesialis Kulit & Kelamin', 'hospital_id' => 42],
            ['name' => 'Spesialis Jiwa (Psikiatri)', 'hospital_id' => 43],
            ['name' => 'Spesialis Gigi', 'hospital_id' => 43],
            ['name' => 'Spesialis Bedah Saraf', 'hospital_id' => 43],
            ['name' => 'Spesialis Bedah Onkologi', 'hospital_id' => 43],
            ['name' => 'Spesialis Fetomaternal', 'hospital_id' => 43],
            ['name' => 'Spesialis Orthopedi', 'hospital_id' => 43],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 43],
            ['name' => 'Spesialis Kandungan / Obgyn', 'hospital_id' => 43],
            ['name' => 'Spesialis Anak', 'hospital_id' => 44],
            ['name' => 'Spesialis Paru', 'hospital_id' => 44],
            ['name' => 'Spesialis Bedah Umum', 'hospital_id' => 44],
            ['name' => 'Spesialis Kandungan & Kebidanan', 'hospital_id' => 44],
            ['name' => 'Spesialis Saraf', 'hospital_id' => 44],
            ['name' => 'Spesialis THT', 'hospital_id' => 44],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 44],
            ['name' => 'Spesialis Mata', 'hospital_id' => 44],
            ['name' => 'Spesialis Bedah Mulut', 'hospital_id' => 44],
            ['name' => 'Spesialis Kedokteran Jiwa', 'hospital_id' => 44],
            ['name' => 'Spesialis Rehabilitasi Medik', 'hospital_id' => 44],
            ['name' => 'Spesialis Anak', 'hospital_id' => 45],
            ['name' => 'Spesialis Saraf', 'hospital_id' => 45],
            ['name' => 'Spesialis Penyakit Dalam', 'hospital_id' => 45],
            ['name' => 'Spesialis Bedah Umum', 'hospital_id' => 45],
            ['name' => 'Spesialis Kandungan', 'hospital_id' => 45],
            ['name' => 'Spesialis THT', 'hospital_id' => 45],
            ['name' => 'Spesialis Kedokteran Gigi Anak (Pedodonti)', 'hospital_id' => 46],
            ['name' => 'Spesialis Bedah Mulut', 'hospital_id' => 46],
            ['name' => 'Spesialis Konservasi Gigi', 'hospital_id' => 46],
            ['name' => 'Spesialis Ortodonti (Kawat Gigi)', 'hospital_id' => 46],
            ['name' => 'Spesialis Periodonti (Gusi)', 'hospital_id' => 46],
            ['name' => 'Spesialis Prostodonti (Gigi Tiruan)', 'hospital_id' => 46],
            ['name' => 'Dokter Gigi Umum', 'hospital_id' => 46],
            ['name' => 'Dokter Spesialis Kandungan dan Kebidanan', 'hospital_id' => 47],
            ['name' => 'Dokter Spesialis Anak', 'hospital_id' => 47],
            ['name' => 'Dokter Spesialis Jantung dan Pembuluh Darah', 'hospital_id' => 47],
            ['name' => 'Dokter Spesialis Saraf', 'hospital_id' => 47],
            ['name' => 'Dokter Spesialis Penyakit Dalam', 'hospital_id' => 47],
            ['name' => 'Dokter Spesialis Rehabilitasi Medik', 'hospital_id' => 47],
            ['name' => 'Dokter Spesialis Kulit dan Kelamin', 'hospital_id' => 47],
            ['name' => 'Dokter Gigi', 'hospital_id' => 47],
        ];

        foreach ($layanans as $layanan) {
            Layanan::updateOrCreate(
                [
                    'name' => $layanan['name'],
                    'hospital_id' => $layanan['hospital_id'],
                ],
                [] // Data tambahan bisa ditaruh di sini jika perlu update
            );

            echo "Layanan inserted: {$layanan['name']} untuk Hospital ID: {$layanan['hospital_id']}\n";
        }
    }
}
