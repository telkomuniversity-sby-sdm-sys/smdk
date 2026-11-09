@php
    $moduls = [
        ['Kinerja Pegawai', 'Analisis TPA', route('manage.target-kinerja.index'), 'fa-solid fa-chart-line', '#28B463'], // hijau seimbang dan produktif
    ];

    // Jika butuh tambahan modul khusus untuk kondisi tertentu
    if ($user->tipe_pegawai != 'TPA' || $user->is_admin == 1) {
        $moduls[] = ['Data Kepegawaian', 'Master Data', route('manage.view'), 'fa-solid fa-users-gear', '#2E86AB'];
        $moduls[] = [
            'DUPAK Dosen',
            'Analisis Kedosenan',
            route('dupak.dashboard'),
            'fa-solid fa-file-circle-check',
            '#AF7AC5',
        ];
    }
@endphp



<x-app-layout>
    <x-slot name="header">



        {{-- List Aplikasi — App Icons Grid (Tailwind-only, view-only) --}}
        <div class="max-w-6xl mt-5 mx-auto my-12 px-4 font-sans antialiased text-slate-800">
            <div class="mb-6 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold tracking-wide text-gray-900 dark:text-gray-100">Aplikasi</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Pilih aplikasi untuk membuka.</p>
                </div>

                {{-- Achievement Badges (Fitur 2A5) --}}
                <div class="flex items-center gap-3">
                    @if ($badges['reliable'])
                        <div class="flex items-center justify-center w-10 h-10 rounded-full bg-amber-100 border-2 border-amber-400 text-amber-600 shadow-sm transition-transform hover:scale-110"
                            title="The Reliable: Memiliki 10 laporan 'Approved' berturut-turut.">
                            <i class="fa-solid fa-medal text-lg"></i>
                        </div>
                    @endif

                    @if ($badges['speedy'])
                        @php $workEndTime = \App\Models\KinerjaSetting::get('work_end_time', '17:00'); @endphp
                        <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 border-2 border-blue-400 text-blue-600 shadow-sm transition-transform hover:scale-110"
                            title="Speedy Submitter: Rata-rata waktu input laporan dilakukan sebelum jam {{ $workEndTime }}.">
                            <i class="fa-solid fa-bolt-lightning text-lg"></i>
                        </div>
                    @endif
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
                <!-- App: Dashboard -->
                @foreach ($moduls as $modul)
                    <a href="{{ $modul[2] }}"
                        class="group route_pop_up relative flex flex-col items-center justify-center rounded-2xl bg-white p-6 border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:border-blue-400 dark:bg-gray-900 dark:border-gray-700">

                        <!-- Icon -->
                        <div
                            class="relative mb-4 flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-600 to-indigo-500 text-white shadow-md transition-transform duration-300 group-hover:scale-110">
                            <i class="{{ $modul[3] }} fa-2x"></i>
                            <div class="absolute inset-0 rounded-2xl bg-white/10"></div>
                        </div>

                        <!-- Text -->
                        <div class="text-center">
                            <p class="text-base font-semibold text-gray-900 dark:text-gray-100 leading-snug">
                                {{ $modul[0] }}
                            </p>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 font-medium">
                                {{ $modul[1] }}
                            </p>
                        </div>

                        <!-- Hover highlight -->
                        <div
                            class="pointer-events-none absolute inset-0 rounded-2xl bg-blue-100/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 dark:bg-blue-900/20">
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div id="univ-notice-component">
  <style>
    .univ-notice-container {
      background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
      border: 1px solid #cbd5e1;
      border-left: 5px solid #1e3a8a;
      border-radius: 10px;
      padding: 24px;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
      color: #1e293b;
      box-shadow: 0 4px 12px rgba(0,0,0,0.06);
      width: 100%;
      box-sizing: border-box;
    }
    .univ-notice-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      border-bottom: 1px solid #e2e8f0;
      padding-bottom: 12px;
      margin-bottom: 16px;
      gap: 12px;
      flex-wrap: wrap;
    }
    .univ-notice-title {
      font-weight: 700;
      font-size: 16px;
      color: #1e3a8a;
      letter-spacing: 0.2px;
    }
    .univ-notice-badge {
      font-size: 11px;
      background: #dbeafe;
      color: #1e40af;
      padding: 4px 10px;
      border-radius: 20px;
      font-weight: 600;
      text-transform: uppercase;
      white-space: nowrap;
    }
    .univ-notice-text {
      margin: 0 0 16px 0;
      font-size: 14px;
      line-height: 1.7;
      color: #334155;
    }
    .univ-challenge-box {
      background: #ffffff;
      border: 1px dashed #93c5fd;
      border-radius: 8px;
      padding: 16px;
      display: flex;
      align-items: flex-start;
      gap: 14px;
    }
    .univ-challenge-icon {
      background: #eff6ff;
      color: #2563eb;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 16px;
      flex-shrink: 0;
    }
    .univ-challenge-content {
      font-size: 13px;
      line-height: 1.5;
      width: 100%;
    }
    .univ-challenge-label {
      font-weight: 600;
      color: #1e40af;
      display: block;
      margin-bottom: 4px;
    }
    #univ-challenge-text {
      color: #475569;
    }
    @media (max-width: 480px) {
      .univ-notice-container {
        padding: 16px;
      }
      .univ-challenge-box {
        flex-direction: column;
        gap: 10px;
        align-items: center;
        text-align: center;
      }
      .univ-challenge-content {
        text-align: left;
      }
    }
  </style>

  <div class="univ-notice-container">
    <div class="univ-notice-header">
      <span class="univ-notice-title">INFORMASI KEPEGAWAIAN &amp; LAPORAN KERJA</span>
      <span class="univ-notice-badge">Civitas Akademika</span>
    </div>
    
    <p class="univ-notice-text">
      Yth. Bapak/Ibu Civitas Akademika, silakan memeriksa kembali keakuratan data diri Anda melalui menu <strong>Profil</strong>. Lakukan pembaruan secara mandiri pada bagian yang tersedia, atau hubungi Bagian <strong>SDM</strong> apabila terdapat data yang memerlukan verifikasi khusus. Mohon juga untuk senantiasa melengkapi <strong>laporan harian pekerjaan</strong> secara berkala demi kelancaran administrasi institusi.
    </p>

    <div class="univ-challenge-box">
      <div class="univ-challenge-icon">🎯</div>
      <div class="univ-challenge-content">
        <span class="univ-challenge-label">Tantangan Produktivitas Sesi Ini:</span>
        <span id="univ-challenge-text">Memuat tantangan...</span>
      </div>
    </div>

    <script>
      (function() {
        const challenges = [
          "Ambil jeda 5 menit untuk melakukan peregangan otot ringan guna menjaga kebugaran tubuh.",
          "Minum segelas air putih untuk menjaga hidrasi dan fokus konsentrasi kerja.",
          "Rapikan meja kerja dari berkas atau dokumen yang sudah tidak terpakai agar lebih tertata.",
          "Kirimkan satu apresiasi atau ucapan terima kasih kepada rekan kerja atau tim hari ini.",
          "Tuliskan 3 prioritas utama yang harus diselesaikan sebelum jam kerja berakhir.",
          "Lakukan teknik pernapasan dalam (tarik napas 4 detik, tahan, hembuskan perlahan) sebanyak 3 kali.",
          "Luangkan 2 menit untuk meninjau kembali agenda dan jadwal kegiatan untuk esok hari.",
          "Evaluasi kembali efisiensi alur kerja Anda hari ini dan catat satu hal yang bisa ditingkatkan.",
          "Bersihkan layar komputer atau gawai Anda dari debu dan sidik jari agar lebih nyaman dipandang.",
          "Catat satu ide inovatif atau perbaikan kecil yang dapat diterapkan di unit kerja Anda.",
          "Lakukan 'digital cleanup': rapikan file atau folder di komputer yang berantakan selama 3 menit.",
          "Baca satu artikel singkat atau regulasi terbaru yang berkaitan dengan bidang pekerjaan Anda.",
          "Lakukan eye-rest: alihkan pandangan dari layar monitor ke objek berjarak jauh selama 20 detik.",
          "Tinjau kembali target mingguan Anda untuk memastikan progres berjalan sesuai rencana.",
          "Pastikan semua dokumen penting hari ini telah diarsipkan dengan rapi pada tempatnya."
        ];
        const randomIndex = Math.floor(Math.random() * challenges.length);
        const el = document.getElementById('univ-challenge-text');
        if (el) {
          el.textContent = challenges[randomIndex];
        }
      })();
    </script>
  </div>
</div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
<x-footer></x-footer>


{{-- {{ dd(session('testing')) }} --}}
