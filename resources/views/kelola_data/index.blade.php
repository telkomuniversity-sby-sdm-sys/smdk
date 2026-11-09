@extends('kelola_data.base')
@section('header-base')
    <style>
        .max-w-100 {
            max-width: 100% !important;
        }
    </style>
@endsection
{{-- @section('page-name', 'Dashboard Kelola Data') --}}
@section('page-name')
{{-- @endsection --}}
@section('content-base')
<div class="ec" id="ecRoot">
  <style>
    /* Ganti --ec-accent dengan warna identitas universitas */
    .ec{
      --ec-accent:#123c69;
      --ec-ink:#1c1c1c;
      --ec-muted:#5b5b5b;
      --ec-line:#d7d5cf;
      --ec-paper:#f7f6f2;
      /* --ec-bg:#efeee8; */

      box-sizing:border-box;
      width:100%;
      padding:clamp(18px,4vw,56px);
      background:var(--ec-bg);
      color:var(--ec-ink);
      font-family:ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
      line-height:1.65;
      -webkit-font-smoothing:antialiased;
    }
    .ec *,
    .ec *::before,
    .ec *::after{box-sizing:border-box;}

    .ec__inner{
      width:100%;
      max-width:980px;
      margin:0 auto;
      background:var(--ec-paper);
      border-top:4px solid var(--ec-accent);
      padding:clamp(20px,4.5vw,48px);
    }

    .ec__grid{
      display:grid;
      grid-template-columns:minmax(0,1fr);
      gap:clamp(24px,4vw,44px);
    }

    @media (min-width:820px){
      .ec__grid{
        grid-template-columns:minmax(0,.9fr) minmax(0,1.1fr);
        align-items:start;
      }
    }

    .ec__label{
      display:block;
      margin:0 0 14px;
      font-size:clamp(.68rem,2vw,.74rem);
      font-weight:700;
      letter-spacing:.14em;
      text-transform:uppercase;
      color:var(--ec-accent);
    }

    .ec__title{
      margin:0 0 14px;
      font-family:Georgia,"Times New Roman",serif;
      font-size:clamp(1.55rem,4.8vw,2.35rem);
      font-weight:700;
      line-height:1.2;
      letter-spacing:-.015em;
      color:var(--ec-ink);
    }

    .ec__lead{
      margin:0;
      max-width:46ch;
      font-size:clamp(.9rem,2.5vw,1rem);
      color:var(--ec-muted);
    }

    .ec__panel{
      border:1px solid var(--ec-line);
      background:#fff;
      padding:clamp(18px,4vw,30px);
    }

    .ec__panel-head{
      display:flex;
      align-items:baseline;
      justify-content:space-between;
      gap:14px;
      padding-bottom:14px;
      margin-bottom:clamp(16px,3vw,22px);
      border-bottom:1px solid var(--ec-line);
    }

    .ec__panel-title{
      margin:0;
      font-size:clamp(.78rem,2.2vw,.86rem);
      font-weight:700;
      letter-spacing:.08em;
      text-transform:uppercase;
      color:var(--ec-ink);
    }

    .ec__number{
      font-family:Georgia,"Times New Roman",serif;
      font-size:clamp(1.1rem,3.4vw,1.4rem);
      font-weight:700;
      color:var(--ec-accent);
      line-height:1;
    }

    .ec__challenge{
      min-height:clamp(150px,34vw,180px);
      display:flex;
      flex-direction:column;
      justify-content:center;
      gap:14px;
    }

    .ec__text{
      margin:0;
      max-width:40ch;
      font-family:Georgia,"Times New Roman",serif;
      font-size:clamp(1.05rem,3.4vw,1.28rem);
      line-height:1.55;
      color:var(--ec-ink);
      text-wrap:balance;
    }

    .ec__meta{
      margin:0;
      font-size:clamp(.72rem,2.2vw,.8rem);
      font-weight:600;
      letter-spacing:.04em;
      color:var(--ec-muted);
    }

    .ec__actions{
      display:flex;
      flex-wrap:wrap;
      align-items:center;
      gap:14px 18px;
      margin-top:clamp(18px,3.5vw,24px);
      padding-top:clamp(16px,3vw,20px);
      border-top:1px solid var(--ec-line);
    }

    .ec__btn{
      appearance:none;
      display:inline-flex;
      align-items:center;
      justify-content:center;
      min-height:44px;
      padding:11px 20px;
      font:inherit;
      font-size:clamp(.84rem,2.5vw,.92rem);
      font-weight:700;
      color:#fff;
      background:var(--ec-accent);
      border:1px solid var(--ec-accent);
      border-radius:0;
      cursor:pointer;
      transition:background .15s ease, color .15s ease;
      -webkit-tap-highlight-color:transparent;
    }
    .ec__btn:hover{
      background:#0d2c4e;
      border-color:#0d2c4e;
    }
    .ec__btn:focus-visible{
      outline:3px solid rgba(18,60,105,.35);
      outline-offset:3px;
    }

    .ec__note{
      margin:0;
      font-size:clamp(.72rem,2.2vw,.8rem);
      color:var(--ec-muted);
    }

    .ec__fade{
      animation:ecFade .28s ease both;
    }
    @keyframes ecFade{
      from{opacity:0;transform:translateY(5px);}
      to{opacity:1;transform:translateY(0);}
    }

    @media (prefers-reduced-motion:reduce){
      .ec__fade{animation:none;}
      .ec__btn{transition:none;}
    }
  </style>

  <section class="ec__inner" aria-labelledby="ecTitle">
    <div class="ec__grid">
      <div>
        <span class="ec__label">Ruang Kosong — Tantangan Diri</span>
        <h2 class="ec__title" id="ecTitle">Kami belum memiliki ide untuk halaman ini.</h2>
        <p class="ec__lead">
          Oleh karena itu, halaman ini kami persembahkan untuk ajang tantangan diri bagi Anda semua.
          Apabila berkenan, silakan melakukan tantangan yang tersedia. Ringan, singkat, dan tidak menuntut banyak waktu.
        </p>
      </div>

      <div class="ec__panel">
        <div class="ec__panel-head">
          <h3 class="ec__panel-title">Tantangan Tersedia</h3>
          <span class="ec__number" id="ecNumber" aria-hidden="true">01</span>
        </div>

        <div class="ec__challenge" aria-live="polite">
          <p class="ec__text" id="ecText">Tarik napas selama empat detik, tahan empat detik, lalu embuskan selama empat detik. Ulangi tiga kali.</p>
          <p class="ec__meta" id="ecMeta">Perkiraan waktu: ± 30 detik</p>
        </div>

        <div class="ec__actions">
          <button class="ec__btn" id="ecBtn" type="button">Tampilkan tantangan lain</button>
          <p class="ec__note">Muat ulang halaman untuk mendapatkan tantangan berbeda.</p>
        </div>
      </div>
    </div>
  </section>

  <script>
    (function () {
      var root = document.getElementById('ecRoot');
      if (!root) return;

      var elText = root.querySelector('#ecText');
      var elMeta = root.querySelector('#ecMeta');
      var elNumber = root.querySelector('#ecNumber');
      var elBtn = root.querySelector('#ecBtn');

      var challenges = [
        { t: 'Tarik napas selama empat detik, tahan empat detik, lalu embuskan selama empat detik. Ulangi tiga kali.', d: '± 30 detik' },
        { t: 'Minum segelas air putih tanpa menyentuh telepon seluler.', d: '± 1 menit' },
        { t: 'Amati satu benda di dekat Anda selama dua puluh detik. Temukan tiga detail yang belum pernah Anda sadari.', d: '± 20 detik' },
        { t: 'Miringkan leher ke kanan selama sepuluh detik, lalu ke kiri selama sepuluh detik. Lakukan dengan perlahan.', d: '± 20 detik' },
        { t: 'Tuliskan satu hal yang Anda syukuri hari ini. Satu kalimat saja.', d: '± 1 menit' },
        { t: 'Berdiri, berjalan ke jendela, dan lihat keluar selama tiga puluh detik tanpa memikirkan apa pun.', d: '± 30 detik' },
        { t: 'Tersenyum ke arah cermin selama lima detik.', d: '± 5 detik' },
        { t: 'Pejamkan mata selama lima belas detik. Rasakan udara masuk melalui hidung.', d: '± 15 detik' },
        { t: 'Ambil satu barang kecil di meja Anda dan kembalikan ke tempatnya.', d: '± 30 detik' },
        { t: 'Ketik nama Anda menggunakan tangan yang biasanya tidak Anda gunakan.', d: '± 20 detik' },
        { t: 'Cari lima benda berwarna biru di sekitar Anda. Hitung dengan perlahan.', d: '± 30 detik' },
        { t: 'Angkat kedua tangan ke atas selama sepuluh detik sambil menarik napas panjang.', d: '± 10 detik' },
        { t: 'Ucapkan satu pujian yang tulus untuk diri sendiri.', d: '± 15 detik' },
        { t: 'Matikan semua notifikasi telepon seluler selama sepuluh menit ke depan.', d: '± 10 detik' },
        { t: 'Bersenandungkan satu lagu favorit Anda selama lima belas detik.', d: '± 15 detik' },
        { t: 'Sentuh satu tanaman atau daun di sekitar Anda. Rasakan teksturnya.', d: '± 15 detik' },
        { t: 'Cuci tangan sambil memusatkan perhatian pada sensasi air. Tanpa terburu-buru.', d: '± 40 detik' },
        { t: 'Tekan kedua telapak tangan ke meja selama sepuluh detik, lalu lepaskan.', d: '± 10 detik' },
        { t: 'Tuliskan tiga kata yang menggambarkan hari Anda saat ini.', d: '± 30 detik' },
        { t: 'Peluk diri sendiri selama sepuluh detik.', d: '± 10 detik' },
        { t: 'Dengarkan suara paling jauh dan paling dekat yang dapat Anda dengar selama lima belas detik.', d: '± 15 detik' },
        { t: 'Kedipkan mata sepuluh kali dengan sengaja dan perlahan.', d: '± 10 detik' },
        { t: 'Tutup mata, lalu sentuh ujung hidung dengan telunjuk.', d: '± 10 detik' },
        { t: 'Berjalan lima langkah ke depan, lalu lima langkah ke belakang.', d: '± 20 detik' },
        { t: 'Jauhkan telepon seluler satu meter dari jangkauan tangan selama lima menit.', d: '± 10 detik' },
        { t: 'Sebutkan tiga nama orang yang membuat hidup Anda terasa lebih ringan.', d: '± 20 detik' },
        { t: 'Embuskan napas panjang sambil mengucapkan “ha” secara perlahan. Ulangi tiga kali.', d: '± 20 detik' },
        { t: 'Duduk tegak dan lepaskan sandaran punggung selama tiga puluh detik. Rasakan perbedaannya.', d: '± 30 detik' },
        { t: 'Buka jendela atau pintu, lalu hirup udara luar tiga kali dalam-dalam.', d: '± 20 detik' },
        { t: 'Pilih satu tugas kecil yang Anda tunda, lalu kerjakan selama dua menit saja.', d: '± 2 menit' },
        { t: 'Hitung sepuluh tarikan napas sambil menandainya dengan jari.', d: '± 40 detik' },
        { t: 'Ucapkan “saya sudah cukup hari ini” sambil menatap cermin.', d: '± 10 detik' }
      ];

      var lastIndex = -1;

      function pad(number) {
        return number < 10 ? '0' + number : String(number);
      }

      function getIndex() {
        if (challenges.length < 2) return 0;
        var index;
        do {
          index = Math.floor(Math.random() * challenges.length);
        } while (index === lastIndex);
        return index;
      }

      function render(animate) {
        var index = getIndex();
        lastIndex = index;
        var item = challenges[index];

        elText.textContent = item.t;
        elMeta.textContent = 'Perkiraan waktu: ' + item.d;
        elNumber.textContent = pad(index + 1);

        if (animate) {
          elText.classList.remove('ec__fade');
          elMeta.classList.remove('ec__fade');
          void elText.offsetWidth;
          elText.classList.add('ec__fade');
          elMeta.classList.add('ec__fade');
        }
      }

      render(false);

      elBtn.addEventListener('click', function () {
        render(true);
      });
    })();
  </script>
</div>
@endsection
