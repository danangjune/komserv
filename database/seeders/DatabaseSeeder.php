<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Seeder Bidang
        DB::table('bidang')->insert([
            ['id' => '1', 'name' => 'Bidang Informasi Komunikasi Publik dan Statistik', '_active' => 1],
            ['id' => '2', 'name' => 'Bidang Aplikasi Informatika', '_active' => 1],
            ['id' => '3', 'name' => 'Bidang Tata Kelola Sumber Daya dan Pelayanan informasi Publik', '_active' => 1],
        ]);

        // Seeder Urusan
        DB::table('urusan')->insert([
            ['id' => '1', 'id_bidang' => '2', 'name' => 'Urusan Persandian dan Keamanan informasi', '_active' => 1],
            ['id' => '2', 'id_bidang' => '2', 'name' => 'Urusan Aplikasi dan Integrasi', '_active' => 1],
            ['id' => '3', 'id_bidang' => '2', 'name' => 'Urusan Infrastruktur dan Jaringan', '_active' => 1],
        ]);

        // Seeder Jenis Layanan
        $jenisLayanan = [
            [
                'id' => '1',
                'id_urusan' => '2',
                'nama' => 'Pengajuan Subdomain Baru',
                'deskripsi' => 'Layanan ini menyediakan pembuatan subdomain baru dengan domain kedirikota.go.id, mencakup pengaturan teknis dan dokumentasi untuk integrasi aplikasi.',
                'template' => '/template/domain_baru.docx',
                'table' => 'permohonan_domain',
                'form_visible' => 'form.domain',
                'variable' => 'no_surat&jenis_layanan&keperluan&subdomain&nama_pic&nip_pic&jabatan_pic&email_pic&nama_opd_singkat&nama_kepala&pangkat_kepala&nip_kepala',
                '_active' => 1
            ],
            [
                'id' => '2',
                'id_urusan' => '1',
                'nama' => 'Bantuan Video Conference',
                'deskripsi' => 'Layanan ini menyediakan dukungan teknis untuk video conference, termasuk pengaturan link Zoom, penyediaan alat vidcon, penyiapan jaringan internet, dan bandwidth on demand.',
                'template' => '/template/bantuan_video_conference.docx',
                'table' => 'permohonan_vidcon',
                'form_visible' => 'form.sanki_vidcon',
                'variable' => 'no_surat&jenis_layanan&dasar_pelaksanaan&nama&nip&jabatan&no_telepon&tempat&judul_acara&nama_kepala&pangkat_kepala&nip_kepala',
                '_active' => 1
            ],
            [
                'id' => '3',
                'id_urusan' => '2',
                'nama' => 'Pengajuan Pendaftaran API SPLP',
                'deskripsi' => 'Layanan ini mendukung pendaftaran API SPLP untuk integrasi data antara aplikasi, mencakup pendaftaran, konfigurasi, dan dokumentasi untuk interoperabilitas data.',
                'template' => '/template/splp_baru.docx',
                'table' => 'pendaftaran_splps',
                'form_visible' => 'form.pendaftaransplp',
                'variable' => 'no_surat&nama_aplikasi&nama_pic&nip_pic&jabatan_pic&wa_pic&nama_opd&nama_kepala&pangkat_kepala&nip_kepala',
                '_active' => 1
            ],
            [
                'id' => '4',
                'id_urusan' => '1',
                'nama' => 'Pembuatan Email kedirikota.go.id',
                'deskripsi' => 'Layanan ini mencakup pembuatan akun email baru dengan domain kedirikota.go.id, termasuk pengaturan, konfigurasi, dan pemberian akses untuk komunikasi dinas.',
                'template' => '/template/sanki_email.docx',
                'table' => 'permohonan_email',
                'form_visible' => 'form.sanki_email',
                'variable' => 'no_surat&jenis_layanan&keperluan&email_request&nama&nip&jabatan&no_telepon&email&nama_kepala&pangkat_kepala&nip_kepala',
                '_active' => 1
            ],
            [
                'id' => '5',
                'id_urusan' => '1',
                'nama' => 'Pembaharuan SSL Eksternal',
                'deskripsi' => 'Layanan ini menangani perpanjangan sertifikat SSL untuk server eksternal, memastikan keamanan data dan komunikasi dengan sertifikat yang valid dan up-to-date.',
                'template' => '/template/sanki_ssl.docx',
                'table' => 'permohonan_ssl_eksternal',
                'form_visible' => 'form.sanki_ssl',
                'variable' => 'no_surat&jenis_layanan&nama_website&domain_website&nama&nip&jabatan&no_telepon&nama_kepala&pangkat_kepala&nip_kepala',
                '_active' => 1
            ],
            [
                'id' => '6',
                'id_urusan' => '3',
                'nama' => 'Gangguan Intranet',
                'deskripsi' => 'Layanan ini menyediakan perbaikan gangguan internet di seluruh wilayah Kota Kediri, untuk memastikan koneksi jaringan tetap stabil dan mendukung kebutuhan komunikasi serta akses informasi.',
                'template' => '/template/infra/GANET.docx',
                'table' => 'ganet',
                'form_visible' => 'form.infra_ganet',
                'variable' => 'no_surat&jenis_layanan&keperluan&email&nama_pic&nip_pic&jabatan_pic&email_pic&nama_opd_singkat&nama_kepala&pangkat_kepala&nip_kepala',
                '_active' => 1
            ],
            [
                'id' => '7',
                'id_urusan' => '1',
                'nama' => 'Bantuan Telepon PABX',
                'deskripsi' => 'Layanan ini menyediakan pemasangan, perbaikan, dan pemutusan sistem PABX di lingkungan Pemerintah Kota Kediri, untuk memastikan kelancaran komunikasi internal melalui jaringan telepon.',
                'template' => '/template/sanki_pabx.docx',
                'table' => 'permohonan_pabxes',
                'form_visible' => 'form.pabx',
                'variable' => 'no_surat&hal&tempat_ruang&tempat_opd&bentuk_dukungan&nama_pic&nip_pic&jabatan_pic&no_pic&nama_kepala&pangkat_kepala&nip_kepala',
                '_active' => 1
            ],
            [
                'id' => '8',
                'id_urusan
                
                ' => '1',
                'nama' => 'Reset Password Email',
                'deskripsi' => 'Layanan ini menyediakan bantuan pemulihan bagi pengguna yang lupa password email kedirikota.go.id, agar akses ke akun dapat dipulihkan dengan cepat dan aman.',
                'template' => '/template/sanki_resetemail.docx',
                'table' => 'permohonan_resetemail',
                'form_visible' => 'form.resetemail',
                'variable' => 'no_surat&alasan_reset&nama_pemohon&nip_pemohon&email_pemohon&nama_pic&nip_pic&jabatan_pic&no_pic&nama_kepala&pangkat_kepala&nip_kepala',
                '_active' => 1
            ],
        ];
        DB::table('jenis_layanan')->insert($jenisLayanan);
    }
}
