<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tittle = 'HOME';
        return \view('frontend/home', \compact('user', 'tittle'));
    }
    public function Resources()
    {
        $user = Auth::user();
        $tittle = 'Resources';
        return \view('frontend/Resources', \compact('user', 'tittle'));
    }
    public function ResourcesDetail($encriptid)
    {

        $id = Crypt::decrypt($encriptid);
        // echo $id;
        // \dd($id);
        // $id = 1;
        $user = Auth::user();
        $tittle = 'Resources Detail';
        if ($id == 1) {
            $data = [
                "judul" => "Fisioterapi untuk Penyakit Parkinson",
                "gambar" => "assets/img/physiotherapy.png",
                "isi" => "
                    <h2>Apa itu Fisioterapi?</h2>
                    <p>Fisioterapi adalah komponen penting dalam mengelola penyakit Parkinson. Ini melibatkan metode fisik untuk 
                        meningkatkan gerakan, fungsi, dan kesejahteraan secara keseluruhan. Bagi pasien Parkinson, fisioterapi bertujuan untuk 
                        mempertahankan dan meningkatkan mobilitas, keseimbangan, dan kualitas hidup.</p>

                    <h3>Teknik Utama Fisioterapi untuk Parkinson:</h3>
                    <ul>
                        <li><strong>Latihan Berjalan:</strong> Meningkatkan pola berjalan dan mengurangi risiko jatuh.</li>
                        <li><strong>Latihan Keseimbangan:</strong> Meningkatkan stabilitas dan mencegah jatuh.</li>
                        <li><strong>Peregangan:</strong> Mempertahankan fleksibilitas dan mengurangi kekakuan otot.</li>
                        <li><strong>Latihan Kekuatan:</strong> Membangun kekuatan otot dan memperbaiki postur.</li>
                        <li><strong>Latihan Aerobik:</strong> Meningkatkan kesehatan kardiovaskular dan tingkat energi.</li>
                        <li><strong>Latihan Motorik Halus:</strong> Meningkatkan ketangkasan tangan untuk tugas sehari-hari.</li>
                    </ul>

                    <h3>Proses Fisioterapi:</h3>
                    <ol>
                        <li><strong>Penilaian:</strong> Mengevaluasi kondisi dan kebutuhan spesifik pasien.</li>
                        <li><strong>Penetapan Tujuan:</strong> Menetapkan tujuan yang realistis dan dapat dicapai.</li>
                        <li><strong>Rencana Perawatan:</strong> Merancang program terapi yang dipersonalisasi.</li>
                        <li><strong>Sesi Rutin:</strong> Menerapkan latihan dan teknik di bawah bimbingan.</li>
                        <li><strong>Program Latihan di Rumah:</strong> Memberikan latihan untuk praktik berkelanjutan di rumah.</li>
                        <li><strong>Pemantauan Kemajuan:</strong> Evaluasi rutin untuk menyesuaikan rencana perawatan sesuai kebutuhan.</li>
                    </ol>

                    <p>Fisioterapi untuk Parkinson adalah proses berkelanjutan yang sering membutuhkan komitmen jangka panjang. 
                        Ini paling efektif ketika dimulai sejak dini dan dipertahankan secara konsisten sepanjang perjalanan penyakit.</p>
                "
            ];
        } else if ($id == 2) {
            $data = [
                "judul" => "Terapi Wicara untuk Penyakit Parkinson",
                "gambar" => "assets/img/speech-therapy.png",
                "isi" => "
                    <h2>Apa itu Terapi Wicara?</h2>
                    <p>Terapi wicara adalah komponen penting dalam mengelola kesulitan komunikasi dan menelan yang terkait dengan 
                        penyakit Parkinson. Ini melibatkan kerja sama dengan ahli patologi wicara-bahasa untuk meningkatkan kemampuan 
                        bicara, kualitas suara, dan fungsi menelan. Bagi pasien Parkinson, terapi wicara bertujuan untuk mempertahankan 
                        dan meningkatkan kemampuan komunikasi dan menelan yang aman.</p>

                    <h3>Teknik Utama Terapi Wicara untuk Parkinson:</h3>
                    <ul>
                        <li><strong>Pengobatan Suara Lee Silverman (LSVT LOUD):</strong> Fokus pada peningkatan kekerasan suara dan 
                            memperbaiki kejelasan bicara.</li>
                        <li><strong>Latihan Artikulasi:</strong> Meningkatkan kejelasan bicara dan pengucapan.</li>
                        <li><strong>Teknik Dukungan Pernapasan:</strong> Meningkatkan kontrol napas untuk produksi suara yang lebih baik.</li>
                        <li><strong>Latihan Menelan:</strong> Memperkuat otot yang terlibat dalam menelan untuk mencegah aspirasi.</li>
                        <li><strong>Latihan Wajah:</strong> Meningkatkan kekuatan otot wajah untuk ekspresi dan bicara yang lebih baik.</li>
                        <li><strong>Latihan Nada dan Intonasi:</strong> Membantu mempertahankan pola bicara alami dan ekspresif.</li>
                    </ul>

                    <h3>Proses Terapi Wicara:</h3>
                    <ol>
                        <li><strong>Penilaian Awal:</strong> Mengevaluasi kemampuan bicara, suara, dan menelan pasien.</li>
                        <li><strong>Penetapan Tujuan:</strong> Menetapkan tujuan realistis untuk perbaikan.</li>
                        <li><strong>Rencana Perawatan:</strong> Merancang program terapi yang dipersonalisasi.</li>
                        <li><strong>Sesi Rutin:</strong> Menerapkan latihan dan teknik di bawah bimbingan.</li>
                        <li><strong>Latihan di Rumah:</strong> Memberikan latihan untuk praktik berkelanjutan di rumah.</li>
                        <li><strong>Pemantauan Kemajuan:</strong> Evaluasi rutin untuk menyesuaikan rencana perawatan sesuai kebutuhan.</li>
                    </ol>

                    <p>Terapi wicara untuk Parkinson adalah proses berkelanjutan yang dapat secara signifikan meningkatkan kualitas 
                        hidup dan mempertahankan kemampuan komunikasi. Ini paling efektif ketika dimulai sejak dini dan dipertahankan 
                        secara konsisten sepanjang perjalanan penyakit.</p>
                "
            ];
        } else if ($id == 3) {
            $data = [
                "judul" => "Psikoterapi untuk Penyakit Parkinson",
                "gambar" => "assets/img/psychoteraphy.jpg",
                "isi" => "
                <h2>Apa itu Psikoterapi?</h2>
                <p>Psikoterapi adalah komponen penting dalam mengelola aspek mental dan emosional penyakit Parkinson. Ini melibatkan konsultasi dengan profesional kesehatan mental untuk mengatasi tantangan psikologis, meningkatkan kemampuan koping, dan meningkatkan kesejahteraan secara keseluruhan. Bagi pasien Parkinson, psikoterapi bertujuan untuk mengelola depresi, kecemasan, dan kesulitan emosional lain yang terkait dengan kondisi tersebut.</p>
                
                <h3>Pendekatan Utama Psikoterapi untuk Parkinson:</h3>
                <ul>
                    <li><strong>Terapi Perilaku Kognitif (CBT):</strong> Membantu mengubah pola pikir dan perilaku negatif.</li>
                    <li><strong>Terapi Berbasis Kesadaran:</strong> Meningkatkan kesadaran saat ini dan mengurangi stres.</li>
                    <li><strong>Terapi Penerimaan dan Komitmen (ACT):</strong> Fokus pada penerimaan tantangan dan komitmen pada nilai pribadi.</li>
                    <li><strong>Psikoterapi Suportif:</strong> Memberikan dukungan emosional dan validasi.</li>
                    <li><strong>Terapi Keluarga:</strong> Mengatasi dinamika hubungan dan meningkatkan dukungan keluarga.</li>
                    <li><strong>Terapi Kelompok:</strong> Menawarkan dukungan sebaya dan berbagi pengalaman.</li>
                </ul>
                
                <h3>Proses Psikoterapi:</h3>
                <ol>
                    <li><strong>Penilaian Awal:</strong> Mengevaluasi kebutuhan dan masalah psikologis pasien.</li>
                    <li><strong>Penetapan Tujuan:</strong> Menetapkan tujuan terapi yang realistis.</li>
                    <li><strong>Rencana Perawatan:</strong> Merancang pendekatan terapi yang dipersonalisasi.</li>
                    <li><strong>Sesi Rutin:</strong> Melakukan percakapan terapi dan latihan berkelanjutan.</li>
                    <li><strong>Strategi Koping:</strong> Mengembangkan teknik untuk mengelola stres dan emosi.</li>
                    <li><strong>Evaluasi Kemajuan:</strong> Tinjauan rutin untuk menyesuaikan rencana perawatan sesuai kebutuhan.</li>
                </ol>
                
                <p>Psikoterapi untuk Parkinson adalah proses berkelanjutan yang dapat meningkatkan kualitas hidup secara signifikan. Ini paling efektif ketika diintegrasikan dengan perawatan medis dan dimulai sejak dini dalam perkembangan penyakit.</p>
                "
            ];
        } else if ($id == 4) {
            $data = [
                "judul" => "Stimulasi Otak Dalam untuk Penyakit Parkinson",
                "gambar" => "assets/img/DBS.jpg",
                "isi" => "
                <h2>Apa itu Stimulasi Otak Dalam?</h2>
                <p>Stimulasi Otak Dalam (DBS) adalah prosedur bedah yang digunakan untuk mengobati berbagai gejala neurologis penyakit Parkinson. Prosedur ini melibatkan pemasangan elektroda di area tertentu otak dan menghubungkannya dengan alat kecil bernama neurostimulator. Alat ini mengirimkan pulsa listrik ke otak untuk membantu mengontrol gejala gerakan.</p>
                
                <h3>Aspek Utama Stimulasi Otak Dalam:</h3>
                <ul>
                    <li><strong>Area Target:</strong> Biasanya nukleus subtalamikus atau globus palidus interna.</li>
                    <li><strong>Manajemen Gejala:</strong> Membantu mengontrol tremor, kekakuan, dan bradikinesia.</li>
                    <li><strong>Pengurangan Obat:</strong> Sering memungkinkan pengurangan dosis obat Parkinson.</li>
                    <li><strong>Perawatan yang Dapat Disesuaikan:</strong> Stimulasi dapat disesuaikan seiring perkembangan penyakit.</li>
                    <li><strong>Prosedur Reversibel:</strong> Alat dapat dimatikan atau dilepas jika diperlukan.</li>
                    <li><strong>Aplikasi Bilateral:</strong> Sering dilakukan pada kedua sisi otak.</li>
                </ul>
                
                <h3>Proses DBS:</h3>
                <ol>
                    <li><strong>Seleksi Pasien:</strong> Menentukan apakah DBS sesuai untuk individu tersebut.</li>
                    <li><strong>Evaluasi Pra-operasi:</strong> Penilaian neurologis dan psikologis menyeluruh.</li>
                    <li><strong>Operasi:</strong> Pemasangan elektroda dan neurostimulator.</li>
                    <li><strong>Pemulihan:</strong> Periode penyembuhan awal setelah operasi.</li>
                    <li><strong>Pemrograman:</strong> Menyesuaikan pengaturan alat untuk kontrol gejala optimal.</li>
                    <li><strong>Manajemen Berkelanjutan:</strong> Pemeriksaan rutin dan penyesuaian sesuai kebutuhan.</li>
                </ol>
                
                <p>Stimulasi Otak Dalam dapat meningkatkan kualitas hidup secara signifikan bagi banyak pasien Parkinson, terutama mereka yang memiliki respons tidak konsisten terhadap pengobatan. Namun, prosedur ini tidak cocok untuk semua orang, dan evaluasi menyeluruh diperlukan untuk menentukan apakah ini adalah pilihan pengobatan yang tepat.</p>
                "
            ];
        } else if ($id == 5) {
            $data = [
                "judul" => "Operasi Pisau Gamma untuk Penyakit Parkinson",
                "gambar" => "assets/img/gamma-knife-surgery.jpg",
                "isi" => "
                <h2>Apa itu Operasi Pisau Gamma?</h2>
                <p>Operasi Pisau Gamma, juga dikenal sebagai bedah stereotaktik radio, adalah pilihan pengobatan non-invasif untuk berbagai kondisi neurologis, termasuk gejala tertentu penyakit Parkinson. Prosedur ini menggunakan sinar gamma yang terfokus untuk menargetkan area spesifik di otak tanpa perlu melakukan pembedahan tradisional.</p>
                
                <h3>Aspek Utama Operasi Pisau Gamma:</h3>
                <ul>
                    <li><strong>Non-Invasif:</strong> Tidak ada sayatan yang dibuat; pengobatan diberikan melalui tengkorak.</li>
                    <li><strong>Penargetan Presisi:</strong> Memungkinkan pengobatan akurat pada area otak yang kecil.</li>
                    <li><strong>Sesi Tunggal:</strong> Biasanya selesai dalam satu sesi pengobatan.</li>
                    <li><strong>Efek Samping Minimal:</strong> Komplikasi lebih sedikit dibanding operasi otak tradisional.</li>
                    <li><strong>Prosedur Rawat Jalan:</strong> Pasien biasanya bisa pulang di hari yang sama.</li>
                    <li><strong>Manajemen Tremor:</strong> Sangat efektif untuk mengobati tremor pada pasien Parkinson.</li>
                </ul>
                
                <h3>Proses Operasi Pisau Gamma:</h3>
                <ol>
                    <li><strong>Evaluasi Pasien:</strong> Menentukan apakah Pisau Gamma cocok untuk individu tersebut.</li>
                    <li><strong>Perencanaan Pengobatan:</strong> Pencitraan detail dan perencanaan pemberian radiasi.</li>
                    <li><strong>Pemasangan Bingkai:</strong> Bingkai ringan dipasang di kepala pasien untuk presisi.</li>
                    <li><strong>Pemberian Radiasi:</strong> Pasien berbaring diam saat radiasi diberikan ke area target.</li>
                    <li><strong>Pemulihan:</strong> Periode observasi singkat setelah prosedur.</li>
                    <li><strong>Tindak Lanjut:</strong> Pemeriksaan rutin untuk memantau efektivitas pengobatan.</li>
                </ol>
                
                <p>Operasi Pisau Gamma dapat menjadi pilihan efektif untuk mengelola gejala Parkinson tertentu, terutama tremor, dalam kasus di mana pengobatan tidak memberikan bantuan yang memadai. Namun, prosedur ini tidak cocok untuk semua gejala Parkinson atau semua pasien. Evaluasi menyeluruh oleh spesialis diperlukan untuk menentukan apakah ini adalah pilihan pengobatan yang tepat.</p>
                "
            ];
        }

        return \view('frontend.ResourceDetail', \compact('user', 'tittle', 'data'));
    }
    public function information()
    {
        $user = Auth::user();
        $tittle = 'Information';
        return \view('frontend.Information', \compact('user', 'tittle'));
    }
}