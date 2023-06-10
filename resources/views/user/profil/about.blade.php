@extends('user.layout')
@section('content')

<head>
    <title>Tentang D3 Teknik Informatika</title>
    <link rel="stylesheet" href="{{ url ('user/css/box.css') }}">
</head>

<br>
    <div class="row">
        <div class="container-fluid">
            <div class="container">
                <div class="row mt-40">
                    <div class="col-lg-6">
                        <div><br/>
                            <h1 class="mb-3 text-primary font-weight-bold">Visi program studi</h1>
                            <div>
                                <div class="mb-4"><br/>
                                    <a class="text-body" href="">Menjadi pusat pengembangan kualitas sumber daya manusia bidang teknologi informasi yang 
                                        berkelanjutan dan unggul di tingkat internasional pada tahun 2045 dengan berlandaskan pada nilai luhur budaya nasional.</a>
                                    <br/>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mb-3"><br/>
                            <h1 class="mb-3 text-primary font-weight-bold">Misi program studi</h1>
                            <div>
                                <div class="mb-4"><br/>
                                    <a class="text-body" href="">Menyelenggarakan pendidikan vokasional yang mengedepankan pengembangan diri Dosen dan Kemandirian Mahasiswa agar menjadi lulusan yang kompeten dan berdaya saing dalam bidang teknologi informasi di tingkat Nasional dan Internasional
                                        Menyelenggarakan penelitian terapan dan pengembangan bidang teknologi informasi
                                        Menyelenggarakan pengabdian bagi masyarakat berupa kepelatihan dan penerapan teknologi informasi.</a>
                                    <br/>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mb-3"><br/>
                            <h1 class="mb-3 text-primary font-weight-bold">Tujuan program studi</h1>
                            <div>
                                <div class="mb-4"><br/>
                                    <a class="text-body" href="">Tujuan yang ingin dicapai oleh Program Studi D3 Teknik Informatika Sekolah Vokasi UNS adalah menghasilkan lulusan yang:

                                        Menghasilkan lulusan yang memiliki keahlian terapan tertentu dengan menjunjung tinggi etika, mampu berinteraksi dengan lingkungan, dan siap bersaing di tingkat nasional dan internasional.
                                        Menghasilkan teknologi dan produk barang maupun jasa hasil penelitian terapan yang bermanfaat bagi masyarakat.
                                        Menghasilkan produk hasil pengabdian kepada masyarakat dan mengembangkan hubungan kerjasama dengan segenap lapisan masyarakat.</a>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="position-relative mb-5"><br/>
                            <img class="card-img rounded-0" src="{{ url ('user/img/vokasi.jpg') }}" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection