<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Penggunaan Aplikasi SMDK - Telkom University Surabaya</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f6f9; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #2d3748; line-height: 1.6;">

    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; background-color: #f4f6f9; padding: 40px 0;">
        <tr>
            <td align="center">
                <!-- Main Container -->
                <table border="0" cellpadding="0" cellspacing="0" width="600" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);">

                    <!-- Header Banner (Elegant Blue) -->
                    <tr>
                        <td align="center" style="background: linear-gradient(135deg, #0f172a 0%, #1e40af 100%); padding: 35px 20px;">
                            <h1 style="color: #ffffff; font-size: 20px; font-weight: 600; margin: 0; letter-spacing: 0.5px;">TELKOM UNIVERSITY SURABAYA</h1>
                            <p style="color: #93c5fd; font-size: 14px; margin: 8px 0 0 0;">Tim Pengembangan Sumber Daya Manusia (SDM)</p>
                        </td>
                    </tr>

                    <!-- Content Body -->
                    <tr>
                        <td style="padding: 40px 35px;">

                            <!-- Sapaan Personal dengan Nama & Gelar -->
                            <p style="font-size: 16px; margin-top: 0; color: #1a202c; font-weight: 500;">
                                Selamat malam {{ $jenis_kelamin }} {{ $nama }},
                            </p>

                            <p style="font-size: 15px; margin-bottom: 20px;">
                                Semoga {{ $jenis_kelamin }} senantiasa berada dalam keadaan sehat, dilimpahkan keberkahan, serta kemudahan dalam menjalankan setiap aktivitas dan pengabdian mulia hari ini.
                            </p>

                            <p style="font-size: 15px; margin-bottom: 20px; text-align: justify;">
                                Dengan penuh takzim, melalui surat elektronik ini kami ingin menyampaikan kabar bahwa saat ini telah resmi hadir <strong>Aplikasi SMDK (Sistem Monitoring dan Data Kinerja)</strong> yang dikembangkan oleh <strong>Tim Pengembangan SDM Telkom University Surabaya</strong>. Inovasi ini kami hadirkan sebagai bentuk ikhtiar bersama untuk mempermudah penyimpanan data serta pemantauan kinerja secara lebih terintegrasi, transparan, dan akurat.
                            </p>

                            <p style="font-size: 15px; margin-bottom: 25px; text-align: justify;">
                                Insya Allah, aplikasi ini akan mulai diimplementasikan dan digunakan secara resmi dalam waktu dekat guna mendukung kelancaran administrasi serta pelaporan kinerja di lingkungan kampus tercinta.
                            </p>

                            <!-- Credentials Box -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; margin-bottom: 25px;">
                                <tr>
                                    <td style="padding: 20px;">
                                        <p style="font-size: 14px; font-weight: 600; color: #1e40af; margin: 0 0 12px 0;">
                                            Detail Akses Akun Bapak/Ibu:
                                        </p>
                                        <table border="0" cellpadding="4" cellspacing="0" width="100%" style="font-size: 14px; color: #4a5568;">
                                            <tr>
                                                <td width="35%" style="font-weight: 500;">Tautan Aplikasi</td>
                                                <td width="5%">:</td>
                                                <td><a href="{{$link}}" target="_blank" style="color: #2563eb; text-decoration: none;"> {{$link}}</a></td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight: 500;">Nama Pengguna / Email</td>
                                                <td>:</td>
                                                <td><strong>{{$email_institusi}}</strong></td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight: 500;">Password Sementara</td>
                                                <td>:</td>
                                                <td><code style="background: #edf2f7; padding: 2px 6px; border-radius: 4px; font-family: monospace; color: #1e40af;">{{$password}}</code></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <p style="font-size: 15px; margin-bottom: 25px; text-align: justify; color: #4a5568;">
                                Demi menjaga keamanan dan kerahasiaan data pribadi Bapak/Ibu, kami dengan hormat memohon kerendahan hati Bapak/Ibu untuk <strong>segera melakukan pergantian password</strong> setelah berhasil masuk (<i>login</i>) ke dalam sistem untuk pertama kalinya.
                            </p>

                            <p style="font-size: 15px; margin-bottom: 30px; text-align: justify;">
                                Demikian pemberitahuan ini kami sampaikan. Atas segala perhatian, waktu luang, serta kesediaan kerja sama yang baik dari Bapak/Ibu, kami ucapkan terima kasih yang sebesar-besarnya.
                            </p>

                            <!-- Closing Signature -->
                            <p style="font-size: 15px; margin-bottom: 0;">
                                Hormat kami yang terdalam,
                            </p>
                            <p style="font-size: 15px; font-weight: 600; color: #1e40af; margin: 5px 0 0 0;">
                                Tim Pengembangan SDM<br>
                                <span style="color: #4a5568; font-weight: 500; font-size: 14px;">Telkom University Surabaya</span>
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background-color: #f1f5f9; padding: 20px; font-size: 12px; color: #64748b;">
                            <p style="margin: 0;">
                                Pesan ini dikirimkan secara otomatis oleh sistem Telkom University Surabaya. Mohon untuk tidak membalas langsung ke alamat email ini.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
