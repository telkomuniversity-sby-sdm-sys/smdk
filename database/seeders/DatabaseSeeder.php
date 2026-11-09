<?php

namespace Database\Seeders;

use App\Models\RefBagian;
use App\Models\RefJabatanFungsional;
use App\Models\RefJabatanFungsionalKeahlian;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->forDeployment();
    }

    public function forDeployment(){
        User::factory()->create([
            'id' => '342q-234t-234x-432r',
            'nama_lengkap' => 'Admin Telkom University',
            'email_institusi' => 'admin@telkomuniversity.ac.id',
            'is_admin' => 1,
            'is_new' => 0,
            'email_verified_at' => now(),
        ]);
    }

    public function forDevelopment(){
        // Check if database is already seeded to avoid Duplicate Entry errors
        if (DB::table('Ref_work_positions')->count() > 0) {
            $this->command->info('Database already seeded. Skipping raw SQL and subsequent seeders.');
            return;
        }

        $path = database_path('sdm_new.sql');
        $sql = File::get($path);
        DB::unprepared($sql);

        $this->call([

            // seeder all
            \Database\Seeders\FakultasSeeder::class,
            \Database\Seeders\RefKelompokKeahlianSeeder::class,
            \Database\Seeders\RefSubKelompokKeahlianSeeder::class,
            RefJenjangPendidikanSeeder::class,
            UserSeeder::class,
            RiwayatJenjangPendidikanSeeder::class,
            \Database\Seeders\UnitSeeder::class,
            \Database\Seeders\TargetKinerjaSeeder::class,
            \Database\Seeders\KontrakUnitSeeder::class,
            \Database\Seeders\TargetKinerjaHarianSeeder::class,
            \Database\Seeders\PelaporanPekerjaanSeeder::class,
            \Database\Seeders\AkumulasiKinerjaSeeder::class,
            \Database\Seeders\LeaderboardKinerjaSeeder::class,
            \Database\Seeders\Dupak\DupakUserSeeder::class,
            \Database\Seeders\Dupak\PengajuanSeeder::class,
            \Database\Seeders\Dupak\DetailPengajuanSeeder::class,
            \Database\Seeders\Dupak\PenunjukanTpakSeeder::class,
            \Database\Seeders\Dupak\HasilEvaluasiSeeder::class,
        ]);
    }
}
