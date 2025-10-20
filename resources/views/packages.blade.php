@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
            {{-- Kita gunakan card agar terlihat rapi --}}
            <div class="card shadow-sm">
                <div class="card-body p-4 p-md-5">

                    <h2 class="h4 mb-4">Paket Pekerjaan</h2>
                    
                    <p>Terima kasih atas ketertarikan Anda pada portal pekerjaan kami. Kami yakin kami dapat membantu Anda menemukan kandidat yang sempurna untuk posisi terbuka Anda.</p>

                    <h3 class="h5 mt-5">Berikut adalah tiga paket berbayar yang kami tawarkan:</h3>

                    {{-- Gunakan list untuk paket --}}
                    <ul style="list-style-type: disc; padding-left: 20px;">
                        <li class="mb-3">
                            <strong>Paket Dasar:</strong> Paket ini mencakup 5 lowongan pekerjaan selama 30 hari. Pemasangan lowongan akan ditampilkan di website dan buletin email kami. Biaya paket ini adalah <strong>Rp 799.000</strong>.
                        </li>
                        <li class="mb-3">
                            <strong>Paket Standar:</strong> Paket ini mencakup 10 lowongan pekerjaan selama 60 hari. Pemasangan lowongan akan ditampilkan di website, buletin email, dan saluran media sosial kami. Biaya paket ini adalah <strong>Rp 1.439.000</strong>.
                        </li>
                        <li class="mb-3">
                            <strong>Paket Pro:</strong> Paket ini mencakup 15 lowongan pekerjaan selama 90 hari. Pemasangan lowongan akan ditampilkan di website, buletin email, media sosial, dan papan lowongan kerja kami. Biaya paket ini adalah <strong>Rp 2.559.000</strong>.
                        </li>
                    </ul>

                    <p class="mt-4">Setelah Anda memilih paket, Anda dapat membuat iklan pekerjaan Anda. Harap sertakan semua informasi yang relevan, termasuk jabatan, lokasi, gaji, dan deskripsi pekerjaan.</p>
                    <p>Tim kami akan meninjau iklan pekerjaan Anda, yang akan dipublikasikan dalam waktu 24 jam.</p>
                    <p>Kami berharap dapat membantu Anda menemukan kandidat yang sempurna untuk pekerjaan Anda.</p>

                    <h3 class="h5 mt-5">Berikut adalah beberapa tips tambahan untuk membuat iklan pekerjaan yang sukses:</h3>

                    {{-- Gunakan list bernomor (ordered list) untuk tips --}}
                    <ol style="padding-left: 20px;">
                        <li class="mb-2">Gunakan bahasa yang jelas dan ringkas.</li>
                        <li class="mb-2">Soroti keterampilan dan pengalaman yang Anda cari.</li>
                        <li class="mb-2">Jelaskan secara spesifik tentang gaji dan tunjangan yang Anda tawarkan.</li>
                        <li class="mb-2">Pastikan iklan pekerjaan Anda mudah dibaca dan dipahami.</li>
                    </ol>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection