<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dewan Masjid Indonesia - Kab Tangerang</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="Datlum One Page HTML Template">
    <meta name="keywords" content="one page, html, template, responsive, business">
    <meta name="author" content="sharjeel anjum">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('/landingpage/css/bootstrap.min.css') }}">

    <!-- Fontawesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('/landingpage/css/animate.css') }}">

    <!-- Magnific-popup css -->
    <link rel="stylesheet" href="{{ asset('/landingpage/css/magnific-popup.css') }}">

    <!-- Owl Carousel css -->
    <link rel="stylesheet" href="{{ asset('/landingpage/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/landingpage/css/owl.carousel.css') }}">

    <!-- Rev Slider css -->
    <link rel="stylesheet" href="{{ asset('/landingpage/css/settings.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('/landingpage/css/style.css') }}">
    <style>
        .modal {
            text-align: center;
            padding: 0 !important;
        }

        .modal:before {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
            margin-right: -4px;
        }

        .modal-dialog {
            display: inline-block;
            text-align: left;
            vertical-align: middle;
        }

        .modal-body {
            max-height: calc(100vh - 350px);
            overflow-y: auto;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <div class="preloader">
        <div class="cssload-dots">
            <div class="cssload-dot"></div>
            <div class="cssload-dot"></div>
            <div class="cssload-dot"></div>
            <div class="cssload-dot"></div>
            <div class="cssload-dot"></div>
        </div>
    </div>

    <!-- Navigation Section -->
    <div class="navbar custom-navbar wow fadeInDown" data-wow-duration="2s" role="navigation" id="header">
        <div class="container">

            <!-- NAVBAR HEADER -->
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span
                        class="icon icon-bar"></span> <span class="icon icon-bar"></span> <span
                        class="icon icon-bar"></span> </button>
                <!-- lOGO TEXT HERE -->

                {{-- <a href="#" class="navbar-brand">DMI</a> --}}
                <img src="{{ asset('/landingpage/images/dmi/header-dmi-glow-768x267.png')}}" class="iconcircle"
                    style="max-width: 150px" />
            </div>

            <!-- NAVIGATION LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#slider" class="smoothScroll">Beranda</a></li>
                    <li><a href="#" class="smoothScroll">Berita</a></li>
                    <li><a href="#" class="smoothScroll">Taushiyah</a></li>
                    <li><a href="#" class="smoothScroll">Data Masjid dan Musholah</a></li>
                    <li><a href="{{ route('login') }}" class="smoothScroll">Masuk</a></li>
                    {{-- <li><a href="#packages" class="smoothScroll">Price</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    <li><span class="calltxt"><i class="fa fa-phone" aria-hidden="true"></i> 123 456 7890</span></li>
                    --}}
                </ul>
            </div>
        </div>
    </div>

    <!-- Revolution slider start -->
    <div class="tp-banner-container" id="slider">
        <div class="tp-banner">
            <ul>
                <li data-slotamount="7" data-transition="fade" data-masterspeed="1000" data-saveperformance="on"> <img
                        alt="" src="" data-lazyload="{{ asset('/landingpage/images/dmi/slider1.jpg') }}">
                    <div class="caption lfb large-title tp-resizeme slidertext2" data-x="right" data-y="200"
                        data-speed="600" data-start="1000">Selamat datang di Website Pimpinan Daerah</div>
                    <div class="caption lfb large-title tp-resizeme slidertext1" data-x="right" data-y="240"
                        data-speed="600" data-start="1600">Dewan Masjid Indonesia</div>
                    <div class="caption lfb large-title tp-resizeme slidertext1" data-x="right" data-y="300"
                        data-speed="600" data-start="2200"> Kabupaten Tangerang</div>
                    {{-- <div class="caption lfb large-title tp-resizeme sliderbtn" data-x="right" data-y="370"
                        data-speed="600" data-start="2800"><a href="#." class="section-btn">Get Started</a>
                        {{-- </div> --}}
                </li>
                <li data-slotamount="7" data-transition="fade" data-masterspeed="1000" data-saveperformance="on"> <img
                        alt="" src="" data-lazyload="{{ asset('/landingpage/images/dmi/slider2.webp') }}">
                    <div class="caption lfb large-title tp-resizeme slidertext2" data-x="center" data-y="280"
                        data-speed="600" data-start="1000">Dewan Masjid Indonesia</div>
                    <div class="caption lfb large-title tp-resizeme slidertext1" data-x="center" data-y="310"
                        data-speed="600" data-start="1600">Memakmurkan dan Dimakmurkan Masjid</div>
                    {{-- <div class="caption lfb large-title tp-resizeme sliderbtn" data-x="center" data-y="400"
                        data-speed="600" data-start="2200"><a href="#." class="section-btn">Get Started</a>
                    </div> --}}
                </li>
            </ul>
        </div>
    </div>
    <!-- Revolution slider end -->

    <!-- Sambutan section -->
    <div id="about">
        <div class="container">
            <div class="section-title">
                <h3>Sambutan</h3>
            </div>
            <p>Selamat Datang di website Dewan Masjid Indonesia Kabupaten Tangerang.</p>
            <p>Assalamu’alaikum Warahmatullahi wabarakaatuh</p>
            <p>Puji syukur kami panjatkan ke hadirat ALLAH SWT atas limpahan rahmat dan karunia-Nya sehingga Dewan
                Masjid Indonesia Kabupaten Tangerang telah memiliki website resmi, sebagai media untuk menyebarluaskan
                informasi lewat jejaring maya. Kehadiran Website DMI Kabupaten Tangerang diharapkan dapat memudahkan
                penyampaian informasi secara terbuka kepada Ummmat terkait tata kelola kemasjidan khususnya masyarakat
                di Kabupaten Tangerang, serta instansi-instansi yang membutuhkan data-data Masjid/Musholla di Kabupaten
                Tangerang.</p>
            <p>Semoga dengan kehadiran website ini akan menjadi media penyebaran informasi kepada ummat dan juga sebagai
                media dakwah.</p>
            <p>Sehubungan dengan hal tersebut diharapkan kepada pengurus DMI Kabupaten Tangerang dapat memberikan
                edukasi kepada ummat tentang pengggunaan jejaring internet sebagai bentuk revolusi dakwah di era
                digitalisasi saat ini. Selain itu bersama-sama mempublikasikan laman website ini sebagai media informasi
                dan komunikasi kemasjidan di Kabupaten Tangerang.</p>
            <p>Demikian dan terima kasih.</p>
            <p>Wassalamu’alaikum Warahmatullahi Wabarakaatuh</p>
            <p>Ketua Pimpinan Daerah Dewan Masjid Indonesia Kabupaten Tangerang</p>
            <p>KH. Sanwani</p>
            {{-- <img src="../../../landingpage/images/about-img.jpg" /> --}}
        </div>
    </div>

    <!-- Visi Section -->
    <div id="service" class="parallax-section">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title">
                {{-- <h3>Visi</h3> --}}
                <div>
                    <h3>Visi</h3>
                    <br />
                    Meningkatkan peran DMI dalam memberdayakan masjid untuk kesejahteraan masyarakat Kabupaten
                    Tangerang.
                    <br /><br />
                    <h3>Misi</h3>
                    <br />
                    Konsolidasi organisasi mewujudkan program pokok dan program unggulan DMI Kabupaten Tangerang.
                    <br />
                    Koordinasi dengan pengurus masjid dalam memberdayakan masjid untuk kesejahteraan.
                    <br />
                    Mengembangkan program unggulan pemberdayaan berbasis digitalisasi masjid di wilayah Kabupaten
                    Tangerang.
                    <br />
                    Meningkatkan kerja sama kemitraan yang produktif untuk pengembangan organisasi.
                    <br />
                </div>
            </div>

        </div>
    </div>

    <!-- Video section -->
    <div class="videowraper">
        <div class="container">
            <!-- title start -->
            <div class="section-title">
                <h2>Program Kerja</h2>
            </div>
            <!-- title end -->

            <p>
                Jumat keliling.
                <br />
                Tarawih Keliling.
                <br />
                Qurban.
                <br />
                MoU / kerja sama dengan berbagai intansi dan lembaga untuk kemakmuran masjid.
                <br />
                Program pemberdayaan dan pengembangan wisata religi.
                <br />
                Mengembangkan situs web, aplikasi dan media digital milik DMI yg compatible dan marketable.
                <br />
                Melanjutkan program Eco Mosque dan Green Mosque.
                <br />
                Mengembangkan dan mewujudkan masjid ramah anak, muslimah, lansia, dan difabel.
                <br />
                Merencanakan, menyelenggarakan dan mengkoordinasi semua tugas/program di bidang organisasi dan
                pengkaderan.
                <br />
                Membangun database (bank data) Masjid dan Musholla se-Kabupaten Tangerang.
                <br />
                Melanjutkan dan mengembangkan program penataan akustik masjid.
                <br />
                Meningkatkan fungsi dan peran masjid sebagai pusat kegiatan ummat (kajian keilmuan, pustaka dan
                pengembangan seni budaya Islami).
                <br />
                Mewujudkan pemberdayaan ekonomi berbasis masjid melalui umkm dan BUMM (Badan Usaha Milik Masjid).
                <br />
                Mewujudkan database tanah wakaf masjid dan musholla.
                <br />
            </p>
            {{-- <a href="#."><i class="fa fa-play-circle-o" aria-hidden="true"></i></a> --}}
        </div>
    </div>

    <!-- How it works section -->
    <div class="howitwrap">
        <div class="container">
            <!-- title start -->
            <div class="section-title">
                <h3>Struktur Organisasi</h3>
                <p>Berikut adalah struktur organisasi</p>
            </div>
            <!-- title end -->

            <div class="row">
                <div class="col-md-6">
                    <div class="postimg"><img
                            src="{{asset('/landingpage/images/dmi/struktur-organisasi-dmi-768x576.png')}}"></div>
                </div>
                <div class="col-md-6">
                    <ul class="howlist">
                        <!--step 1-->
                        <li>
                            <div class="howbox">
                                <div class="iconcircle"><i class="fa fa-paint-brush" aria-hidden="true"></i></div>
                                <h4>Pembina</h4>
                                <p>Bupati Tangerang <br /> Wakil Bupati Tangerang<br /> Ketua DPRD Kabupaten
                                    Tangerang<br /> Kepala Kantor Kementerian Agama Kabupaten Tangerang<br /> Ketua MUI
                                    Kabupaten Tangerang</p>
                            </div>
                        </li>
                        <!--step 1 end-->

                        <!--step 2-->
                        <li>
                            <div class="howbox">
                                <div class="iconcircle"><i class="fa fa-code" aria-hidden="true"></i></div>
                                <h4>Majelis Mustasyhar dan Pakar</h4>
                                <p>Drs. H. Moch. Maesyal Rasyid, M.Si. <br />
                                    Ujat Sudrajat, S.Sos., M.T. <br />
                                    Drs. H. Syaifullah, M.M. <br />
                                    dr. Hj. Desiriana Dinardianti, MARS. <br />
                                    Ir. H. Jarnaji, M.M. <br />
                                    Drs. H. Ahdiyat Nuryasin, M.Si. <br />
                                    Drs. H. Firzada Mahali, M.Si. <br />
                                    Drs. H. Achmad Taufik, M.Si. <br />
                                    Dr. H. Aziz Gunawan, M.M. <br />
                                    Drs. H. Slamet Budi Mulyanto, M.Si.
                                </p>
                            </div>
                        </li>
                        <!--step 2 end-->

                        <!--step 3-->
                        <li>
                            <div class="howbox">
                                <div class="iconcircle"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>
                                <h4>Informasi Anggota Selengkapnya</h4>
                                <p> <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                        Tampilkan Anggota
                                    </button></p>
                            </div>
                        </li>
                        <!--step 3 end-->
                    </ul>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Modal Anggota</h4>
                            </div>
                            <div class="modal-body">
                                <div class=" row">
                                    <div class="col-md-12">
                                        <h3>Pembina</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">Bupati Tangerang</li>
                                            <li class="list-group-item">Wakil Bupati Tangerang</li>
                                            <li class="list-group-item">Ketua DPRD Kabupaten Tangerang</li>
                                            <li class="list-group-item">Kepala Kantor Kementerian Agama Kabupaten
                                                Tangerang</li>
                                            <li class="list-group-item">Ketua MUI Kabupaten Tangerang</li>
                                        </ul>

                                        <h3>Majelis Mustasyhar dan Pakar</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">Drs. H. Moch. Maesyal Rasyid, M.Si</li>
                                            <li class="list-group-item">Ujat Sudrajat, S.Sos., M.T</li>
                                            <li class="list-group-item">Drs. H. Syaifullah, M.M</li>
                                            <li class="list-group-item">dr. Hj. Desiriana Dinardianti, MARS</li>
                                            <li class="list-group-item">Ir. H. Jarnaji, M.M</li>
                                            <li class="list-group-item">Drs. H. Ahdiyat Nuryasin, M.Si</li>
                                            <li class="list-group-item">Drs. H. Firzada Mahali, M.Si</li>
                                            <li class="list-group-item">Drs. H. Achmad Taufik, M.Si</li>
                                            <li class="list-group-item">Dr. H. Aziz Gunawan, M.M</li>
                                            <li class="list-group-item">Drs. H. Slamet Budi Mulyanto, M.Si</li>
                                        </ul>

                                        <h3>Majelis Ekonomi Syari’ah</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">Dr. H. Heri Heryanto, M.Si</li>
                                            <li class="list-group-item">Drs. H. Arsyad Husein, M.Si</li>
                                            <li class="list-group-item">Dr. H. Kamarudin Batubara, S.E., M.E</li>
                                            <li class="list-group-item">H. Luki Lukman Fauzi, S.Ag., M.Si</li>
                                            <li class="list-group-item">Drs. H. Asep Maman Kurnia, M.Si</li>
                                            <li class="list-group-item">Drs. H. Amat, M.Si</li>
                                            <li class="list-group-item">Drs. H. Hariri</li>
                                            <li class="list-group-item">Drs. H. Maski, M.Si</li>
                                            <li class="list-group-item">KH. Afif Afifi</li>
                                            <li class="list-group-item">Drs. H. Musa Hidayat, M.Si</li>
                                        </ul>

                                        <h3>Pimpinan Harian</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">KH. Sanwani<span class="badge">Ketua</span></li>
                                            <li class="list-group-item">H. Ozi Syairoji, M.Si</li>
                                            <li class="list-group-item">Andi Sutisna, M.Pd</li>
                                            <li class="list-group-item">Drs. H. Soma Atmaja, M.Si</li>
                                            <li class="list-group-item">Muhamad Hidayat, S.E., M.M</li>
                                            <li class="list-group-item">Ir. H. Taufik Emil</li>
                                            <li class="list-group-item">H. Erwan Soepardi<span class="badge">Sekretaris
                                                    Umum</span></li>
                                            <li class="list-group-item">H. Ahmad Uwes Al-Qurni, S.Ag., M.Si</li>
                                            <li class="list-group-item">H. Abdullah Hasyim, S.HI</li>
                                            <li class="list-group-item">M. Isep Nurhamid, S.Pi</li>
                                            <li class="list-group-item">Ade Syanti Widiyanti, S.Pd</li>
                                            <li class="list-group-item">Lailatul Badriyah, S.Pd.I</li>
                                            <li class="list-group-item">H. Abu Ani, S.Ag<span class="badge">Bendahara
                                                    Umum</span></li>
                                            <li class="list-group-item">Drs. H. Waluyo Sejati</li>
                                            <li class="list-group-item">Hj. Daiz Nurafirilia, S.E</li>
                                            <li class="list-group-item">Dwi Erawati, S.T</li>
                                        </ul>

                                        <h3>Bidang Pemberdayaan Organisasi dan Pembinaan Kedaerahan</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">Iskandar Nordat, M.M<span
                                                    class="badge">Ketua</span></li>
                                            <li class="list-group-item">H. Musthofa</li>
                                            <li class="list-group-item">Drs. H. Yulinar Firdaus, M.Si</li>
                                            <li class="list-group-item">H. Budianto, S.IP. M.Si</li>
                                            <li class="list-group-item">H. Saeful Hufadz, S.Ag</li>
                                            <li class="list-group-item">Munawir Hafidz, S.Pd.I</li>
                                        </ul>

                                        <h3>Bidang Peribadatan dan Hukum</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">Drs. H. Rohimin<span class="badge">Ketua</span>
                                            </li>
                                            <li class="list-group-item">Desyanti, S.H., M.H</li>
                                            <li class="list-group-item">Drs. H. Ahmadi, M.Sy</li>
                                            <li class="list-group-item">H. M. Syarifudin, S.H</li>
                                            <li class="list-group-item">Bahrul Ulum</li>
                                            <li class="list-group-item">Nurhayati</li>
                                        </ul>

                                        <h3>Bidang Zakat, Infaq, Shadaqah, Hibah, dan Wakaf</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">Drs. Muhamad Supi<span
                                                    class="badge">Ketua</span></li>
                                            <li class="list-group-item">Muhamad Suhoyo</li>
                                            <li class="list-group-item">Nunung Kusnadi, S.E</li>
                                            <li class="list-group-item">Madsuro</li>
                                            <li class="list-group-item">Mahadi, M.Pd</li>
                                            <li class="list-group-item">Triyono, S.E</li>
                                            <li class="list-group-item">Ust. Aliyudin</li>
                                        </ul>

                                        <h3>Bidang Dakwah, Ukhuwah dan Sumber Daya Keumatan</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">Hj. Aida Albaroyah, S.Ag., M.Si<span
                                                    class="badge">Ketua</span></li>
                                            <li class="list-group-item">H. Saepudin, S.Pd.I., M.M</li>
                                            <li class="list-group-item">M. Abdurrohman, S.Sos</li>
                                            <li class="list-group-item">Ust. H. Ahmad Yusuf</li>
                                            <li class="list-group-item">M. Salim, S.Pd</li>
                                            <li class="list-group-item">Ust. Anis Fuad</li>
                                            <li class="list-group-item">Sri Sulatipah</li>
                                        </ul>

                                        <h3>Bidang Kominfo, Pengembangan Arsitektur dan Infrastruktur</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">H. Didin<span class="badge">Ketua</span></li>
                                            <li class="list-group-item">Iskandar Ishak, S.Sos., M.Si</li>
                                            <li class="list-group-item">Ir. H. Cucu Heri Rukmantara, M.Si</li>
                                            <li class="list-group-item">Drs. H. Deni Hermawan, M.Pd</li>
                                            <li class="list-group-item">Ust. KH. Ubaidillah, S.Ag</li>
                                            <li class="list-group-item">Mulya Wiguna</li>
                                            <li class="list-group-item">Sukmajaya</li>
                                        </ul>

                                        <h3>Bidang Pemberdayaan Ekonomi dan Kewirausahaan</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">Hj. Khaeroyaroh, S.Ag., M.Pd<span
                                                    class="badge">Ketua</span></li>
                                            <li class="list-group-item">H. Rukman, S.E., M.M</li>
                                            <li class="list-group-item">H. Jamasari, S.Pd.I, M.Si</li>
                                            <li class="list-group-item">H. Ahmad Rifaudin, S.Ag., M.Pd</li>
                                            <li class="list-group-item">H. Puryadi, S.Sos</li>
                                            <li class="list-group-item">M. Rifqi</li>
                                        </ul>

                                        <h3>Bidang Pemberdayaan Potensi Muslimah dan Pembinaan Keluarga (PPMK) dan PAUD
                                        </h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">Hj. Rohmania Ues<span class="badge">Ketua</span>
                                            </li>
                                            <li class="list-group-item">DR. Yekti Wulandari</li>
                                            <li class="list-group-item">Hj. Yeni Mulyani</li>
                                            <li class="list-group-item">Ust. Hartono</li>
                                            <li class="list-group-item">Hj. Hidayah</li>
                                            <li class="list-group-item">Hj. Eka Widiyanti, S.H</li>
                                        </ul>

                                        <h3>Bidang Kesehatan dan Sanitasi</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">Ahmad Suryadi<span class="badge">Ketua</span>
                                            </li>
                                            <li class="list-group-item">Erwin Mawandy, S.T., M.Si</li>
                                            <li class="list-group-item">drg. Eko Hartati</li>
                                            <li class="list-group-item">dr. Sulastri</li>
                                            <li class="list-group-item">dr. Herlin Hidayati</li>
                                            <li class="list-group-item">Budi Khumaedi, S.KM., M.M</li>
                                        </ul>

                                        <h3>Bidang Sosial Kemanusiaan dan Penanggulangan Bencana dan Pos Tanggap Bencana
                                            (Postaben) Daerah </h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">Siti Rahma, S.Pd<span class="badge">Ketua</span>
                                            </li>
                                            <li class="list-group-item">Drs. H. Agus Suryana, M.Si</li>
                                            <li class="list-group-item">Ending Supriyadi, S.Sos</li>
                                            <li class="list-group-item">M. Ikhwan Kamil Marfu, M.Si</li>
                                            <li class="list-group-item">H. Hari Wiyono, S.Kom</li>
                                            <li class="list-group-item">Noval Hanan, S.Kom</li>
                                        </ul>

                                        <h3>Bidang Hubungan Antar Lembaga dan Hubungan Masyarakat</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">Hj. Fetty Ratu Permata, S.P., M.P<span
                                                    class="badge">Ketua</span></li>
                                            <li class="list-group-item">Angga Yuliantono, S.IP</li>
                                            <li class="list-group-item">Edy Supriyatna, S.Kom., M.Si</li>
                                            <li class="list-group-item">Rini Fazriah, S.H</li>
                                            <li class="list-group-item">Ardin, S.Ag</li>
                                            <li class="list-group-item">Yudi Prasetio</li>
                                        </ul>

                                        <h3>Bidang Kaderisasi Pemuda dan Remaja Masjid</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">H. Baehaki, S.E., M.P<span
                                                    class="badge">Ketua</span></li>
                                            <li class="list-group-item">H. Said Hudri, S.Pd.I</li>
                                            <li class="list-group-item">Drs. H. Endang Samlawi, M.Si</li>
                                            <li class="list-group-item">M. Zakaria Ansori</li>
                                            <li class="list-group-item">M. Daud, S.Pd.I</li>
                                            <li class="list-group-item">Joni Juhaeni</li>
                                            <li class="list-group-item">M. Nasrulloh</li>
                                        </ul>

                                        <h3>Bidang Pendidikan, Intek, dan Kebudayaan</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">H. Supriyadi, S.E., M.M<span
                                                    class="badge">Ketua</span></li>
                                            <li class="list-group-item">Abdul Qadir, S.T., M.Si</li>
                                            <li class="list-group-item">H. Turhaerudin</li>
                                            <li class="list-group-item">KH. Baiquni Yasin</li>
                                            <li class="list-group-item">Zaenudin, S.Kom</li>
                                            <li class="list-group-item">Syamsoe Astra Negara, M.M</li>
                                        </ul>



                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
        </div>
    </div>

    <!-- What we do Section -->
    {{-- <div id="service" class="parallax-section">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title">
                <h3>What We Do</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat,
                    nunc
                    dui auctor ipsum, sed posuere eros sapien id quam.</p>
            </div>
            <div class="row">
                <!-- we do 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="service-thumb wedobox">
                        <div class="thumb-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
                        <h4>Graphic Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
                    </div>
                </div>

                <!-- we do 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="service-thumb wedobox">
                        <div class="thumb-icon"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                        <h4>Website Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
                    </div>
                </div>

                <!-- we do 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="service-thumb wedobox">
                        <div class="thumb-icon"><i class="fa fa-cube" aria-hidden="true"></i></div>
                        <h4>3D Rendring</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
                    </div>
                </div>

                <!-- we do 4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="service-thumb wedobox">
                        <div class="thumb-icon"><i class="fa fa-line-chart" aria-hidden="true"></i></div>
                        <h4>Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
                    </div>
                </div>

                <!-- we do 5 -->
                <div class="col-md-4 col-sm-6">
                    <div class="service-thumb wedobox">
                        <div class="thumb-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                        <h4>eCommerce</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
                    </div>
                </div>

                <!-- we do 6 -->
                <div class="col-md-4 col-sm-6">
                    <div class="service-thumb wedobox">
                        <div class="thumb-icon"><i class="fa fa-wordpress" aria-hidden="true"></i></div>
                        <h4>Wordpress</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Counter Section -->
    {{-- <div id="counter">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
                    <div class="counterbox">
                        <div class="counter-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                        <span class="counter-number" data-from="1" data-to="499" data-speed="1000"></span> <span
                            class="counter-text">Happy Client</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
                    <div class="counterbox">
                        <div class="counter-icon"><i class="fa fa-code" aria-hidden="true"></i></div>
                        <span class="counter-number" data-from="1" data-to="9598" data-speed="2000"></span> <span
                            class="counter-text">Code Line</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
                    <div class="counterbox">
                        <div class="counter-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
                        <span class="counter-number" data-from="1" data-to="1999" data-speed="3000"></span> <span
                            class="counter-text">Project Finished</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
                    <div class="counterbox">
                        <div class="counter-icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
                        <span class="counter-number" data-from="1" data-to="199" data-speed="4000"></span> <span
                            class="counter-text">Awards</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Gallery Section -->
    {{-- <div id="work">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="section-title">
                <h3>Our Recent Projects</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat,
                    nunc
                    dui auctor ipsum, sed posuere eros sapien id quam.</p>
            </div>
            <ul class="portfolio-grid row">
                <li class="col-md-3 col-sm-4">
                    <!-- Gallery Thumb -->
                    <div class="work-thumb"> <a href="1_2.jpg" class="image-popup"> <img
                                src="../../../landingpage/images/1_2.jpg" class="img-responsive" alt="Work">
                            <div class="itemHover">
                                <div class="infoItem">
                                    <div class="itemtitle">
                                        <h5>Project Name</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                </li>
                <li class="col-md-3 col-sm-4">
                    <!-- Gallery Thumb -->
                    <div class="work-thumb"> <a href="2_2.jpg" class="image-popup"> <img
                                src="../../../landingpage/images/2_2.jpg" class="img-responsive" alt="Work">
                            <div class="itemHover">
                                <div class="infoItem">
                                    <div class="itemtitle">
                                        <h5>Project Name</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                </li>
                <li class="col-md-3 col-sm-4">
                    <!-- Gallery Thumb -->
                    <div class="work-thumb"> <a href="3_2.jpg" class="image-popup"> <img
                                src="../../../landingpage/images/3_2.jpg" class="img-responsive" alt="Work">
                            <div class="itemHover">
                                <div class="infoItem">
                                    <div class="itemtitle">
                                        <h5>Project Name</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                </li>
                <li class="col-md-3 col-sm-4">
                    <!-- Gallery Thumb -->
                    <div class="work-thumb"> <a href="4_2.jpg" class="image-popup"> <img
                                src="../../../landingpage/images/4_2.jpg" class="img-responsive" alt="Work">
                            <div class="itemHover">
                                <div class="infoItem">
                                    <div class="itemtitle">
                                        <h5>Project Name</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                </li>
                <li class="col-md-3 col-sm-4">
                    <!-- Gallery Thumb -->
                    <div class="work-thumb"> <a href="5_2.jpg" class="image-popup"> <img
                                src="../../../landingpage/images/5_2.jpg" class="img-responsive" alt="Work">
                            <div class="itemHover">
                                <div class="infoItem">
                                    <div class="itemtitle">
                                        <h5>Project Name</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                </li>
                <li class="col-md-3 col-sm-4">
                    <!-- Gallery Thumb -->
                    <div class="work-thumb"> <a href="6_2.jpg" class="image-popup"> <img
                                src="../../../landingpage/images/6_2.jpg" class="img-responsive" alt="Work">
                            <div class="itemHover">
                                <div class="infoItem">
                                    <div class="itemtitle">
                                        <h5>Project Name</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                </li>
                <li class="col-md-3 col-sm-4">
                    <!-- Gallery Thumb -->
                    <div class="work-thumb"> <a href="7.jpg" class="image-popup"> <img
                                src="../../../landingpage/images/7.jpg" class="img-responsive" alt="Work">
                            <div class="itemHover">
                                <div class="infoItem">
                                    <div class="itemtitle">
                                        <h5>Project Name</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                </li>
                <li class="col-md-3 col-sm-4">
                    <!-- Gallery Thumb -->
                    <div class="work-thumb"> <a href="8.jpg" class="image-popup"> <img
                                src="../../../landingpage/images/8.jpg" class="img-responsive" alt="Work">
                            <div class="itemHover">
                                <div class="infoItem">
                                    <div class="itemtitle">
                                        <h5>Project Name</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                </li>
            </ul>
        </div>
    </div> --}}

    <!-- Team Section -->
    {{-- <div id="team" class="parallax-section">
        <div class="container">

            <!-- Dection Title -->
            <div class="section-title">
                <h3>Our Law Team</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat,
                    nunc
                    dui auctor ipsum, sed posuere eros sapien id quam.</p>
            </div>
            <div class="row">
                <!-- team 1 -->
                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="thumb-image"><img src="../../../landingpage/images/team-img1.jpg" alt=""></div>
                        <h4>JOHN DOE</h4>
                        <h5>Co-Founder</h5>
                        <ul class="list-inline social">
                            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a> </li>
                        </ul>
                    </div>
                </div>

                <!-- team 2 -->
                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="thumb-image"><img src="../../../landingpage/images/team-img2.jpg" alt=""></div>
                        <h4>JASON DOE</h4>
                        <h5>Manager</h5>
                        <ul class="list-inline social">
                            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a> </li>
                        </ul>
                    </div>
                </div>

                <!-- team 3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="thumb-image"><img src="../../../landingpage/images/team-img3.jpg" alt=""></div>
                        <h4>JANE DOE</h4>
                        <h5>Designer</h5>
                        <ul class="list-inline social">
                            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a> </li>
                        </ul>
                    </div>
                </div>

                <!-- team 4 -->
                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="thumb-image"><img src="../../../landingpage/images/team-img4.jpg" alt=""></div>
                        <h4>MARTIN DOE</h4>
                        <h5>Developer</h5>
                        <ul class="list-inline social">
                            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Testimonials Section -->
    {{-- <div id="testimonials">
        <div class="container">

            <!-- Section Title -->
            <div class="section-title">
                <h3>What Our Clients Saying</h3>
            </div>
            <ul class="testimonialsList">
                <!-- Client -->
                <li class="item">
                    <div class="testimg"><img src="../../../landingpage/images/client-1.jpg" alt="Your alt text here" />
                    </div>
                    <div class="clientname">Jhon Doe</div>
                    <div class="clientinfo">CEO - Company Inc</div>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at
                        finibus.
                        Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque
                        vestibulum
                        augue nec aliquet aliquet."</p>
                </li>

                <!-- Client -->
                <li class="item">
                    <div class="testimg"><img src="../../../landingpage/images/client-2.jpg" alt="Your alt text here" />
                    </div>
                    <div class="clientname">Marlin Doe</div>
                    <div class="clientinfo">CEO - Company Inc</div>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at
                        finibus.
                        Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque
                        vestibulum
                        augue nec aliquet aliquet."</p>
                </li>

                <!-- Client -->
                <li class="item">
                    <div class="testimg"><img src="../../../landingpage/images/client-3.jpg" alt="Your alt text here" />
                    </div>
                    <div class="clientname">Katrine Doe</div>
                    <div class="clientinfo">CEO - Company Inc</div>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at
                        finibus.
                        Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque
                        vestibulum
                        augue nec aliquet aliquet."</p>
                </li>

                <!-- Client -->
                <li class="item">
                    <div class="testimg"><img src="../../../landingpage/images/client-4.jpg" alt="Your alt text here" />
                    </div>
                    <div class="clientname">Martin Doe</div>
                    <div class="clientinfo">CEO - Company Inc</div>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at
                        finibus.
                        Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque
                        vestibulum
                        augue nec aliquet aliquet."</p>
                </li>
            </ul>
        </div>
    </div> --}}

    <!-- Prices Section -->
    {{-- <div id="packages">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="section-title">
                <h3>Our Packages</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat,
                    nunc
                    dui auctor ipsum, sed posuere eros sapien id quam.</p>
            </div>
            <ul class="row packageList">
                <!-- Package -->
                <li class="col-md-4 col-sm-4">
                    <div class="packbox">
                        <div class="icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>
                        <h3>Basic</h3>
                        <div class="price"><strong>$49</strong> <span>per month</span></div>
                        <p>15 Pages</p>
                        <p>40 GB storage</p>
                        <p>unlimited data transfer</p>
                        <p>100 GB bandwith</p>
                        <p>Enhanced security</p>
                        <div class="booknow"><a href="#">Buy Now</a></div>
                    </div>
                </li>

                <!-- Package -->
                <li class="col-md-4 col-sm-4">
                    <div class="packbox select">
                        <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <h3>Corporate</h3>
                        <div class="price"><strong>$49</strong> <span>per month</span></div>
                        <p>15 Pages</p>
                        <p>40 GB storage</p>
                        <p>unlimited data transfer</p>
                        <p>100 GB bandwith</p>
                        <p>Enhanced security</p>
                        <div class="booknow"><a href="#">Buy Now</a></div>
                    </div>
                </li>

                <!-- Package -->
                <li class="col-md-4 col-sm-4">
                    <div class="packbox">
                        <div class="icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
                        <h3>Premium</h3>
                        <div class="price"><strong>$49</strong> <span>per month</span></div>
                        <p>15 Pages</p>
                        <p>40 GB storage</p>
                        <p>unlimited data transfer</p>
                        <p>100 GB bandwith</p>
                        <p>Enhanced security</p>
                        <div class="booknow"><a href="#">Buy Now</a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div> --}}

    <!-- Blog Section -->
    {{-- <div id="blog">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="section-title">
                <h3>Latest From Blog</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat,
                    nunc
                    dui auctor ipsum, sed posuere eros sapien id quam.</p>
            </div>
            <ul class="blogGrid row">
                <li class="col-md-4 col-sm-6">
                    <div class="int">
                        <!-- Blog Image -->
                        <div class="postimg"> <img src="../../../landingpage/images/1_3.jpg" alt="Blog Title">
                            <div class="date"> 17 SEP</div>
                        </div>

                        <!-- Blog info -->
                        <div class="post-header">
                            <h4><a href="#.">Duis ultricies aliquet mauris</a></h4>
                            <div class="postmeta">By : <span>Jhon Doe </span> Category : <a href="#.">Job
                                    Search </a></div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl
                            dapibus
                            finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus...</p>
                        <a href="#." class="readmore">Read More</a>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6">
                    <div class="int">
                        <!-- Blog Image -->
                        <div class="postimg"> <img src="../../../landingpage/images/2_3.jpg" alt="Blog Title">
                            <div class="date"> 17 SEP</div>
                        </div>

                        <!-- Blog info -->
                        <div class="post-header">
                            <h4><a href="#.">Duis ultricies aliquet mauris</a></h4>
                            <div class="postmeta">By : <span>Jhon Doe </span> Category : <a href="#.">Job
                                    Search </a></div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl
                            dapibus
                            finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus...</p>
                        <a href="#." class="readmore">Read More</a>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6">
                    <div class="int">
                        <!-- Blog Image -->
                        <div class="postimg"> <img src="../../../landingpage/images/3_3.jpg" alt="Blog Title">
                            <div class="date"> 17 SEP</div>
                        </div>

                        <!-- Blog info -->
                        <div class="post-header">
                            <h4><a href="#.">Duis ultricies aliquet mauris</a></h4>
                            <div class="postmeta">By : <span>Jhon Doe </span> Category : <a href="#.">Job
                                    Search </a></div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl
                            dapibus
                            finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus...</p>
                        <a href="#." class="readmore">Read More</a>
                    </div>
                </li>
            </ul>
        </div>
    </div> --}}

    <!-- Tagline Section -->
    {{-- <div class="taglinewrap">
        <div class="container">
            <h2>Get Started Today</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc
                dui
                auctor ipsum, sed posuere eros sapien id quam.</p>
            <a href="#">Get Started</a>
        </div>
    </div> --}}

    <!-- FAQ Section -->
    {{-- <div id="faqs" class="parallax-section">
        <div class="container">

            <!-- SECTION TITLE -->
            <div class="section-title">
                <h3>Frequantly Asked Questions</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat,
                    nunc
                    dui auctor ipsum, sed posuere eros sapien id quam.</p>
            </div>
            <div class="faqs">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class=""
                                    href="#collapse1">Nunc ut erat at massa elementum tempus.?</a> </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">Integer aliquam sed ante non volutpat. Aenean vitae nulla
                                varius,
                                dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor
                                augue.
                                Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat.
                                Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut,
                                viverra tellus. <br>
                                <br>
                                Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id
                                cursus
                                odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt,
                                ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare.
                                Donec
                                non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra.
                                Curabitur sit amet erat nulla.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion"
                                    class="collapsed" href="#collapse2"> Donec lacus sem, pretium a eros
                                    ut?</a> </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">Integer aliquam sed ante non volutpat. Aenean vitae nulla
                                varius,
                                dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor
                                augue.
                                Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat.
                                Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut,
                                viverra tellus. <br>
                                <br>
                                Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id
                                cursus
                                odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt,
                                ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare.
                                Donec
                                non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra.
                                Curabitur sit amet erat nulla.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion"
                                    class="collapsed" href="#collapse3"> Donec lacus sem, pretium a eros
                                    ut?</a> </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">Integer aliquam sed ante non volutpat. Aenean vitae nulla
                                varius,
                                dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor
                                augue.
                                Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat.
                                Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut,
                                viverra tellus. <br>
                                <br>
                                Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id
                                cursus
                                odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt,
                                ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare.
                                Donec
                                non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra.
                                Curabitur sit amet erat nulla.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion"
                                    class="collapsed" href="#collapse4">Nunc ut erat at massa elementum
                                    tempus.?</a> </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">Integer aliquam sed ante non volutpat. Aenean vitae nulla
                                varius,
                                dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor
                                augue.
                                Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat.
                                Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut,
                                viverra tellus. <br>
                                <br>
                                Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id
                                cursus
                                odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt,
                                ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare.
                                Donec
                                non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra.
                                Curabitur sit amet erat nulla.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion"
                                    class="collapsed" href="#collapse5"> Donec lacus sem, pretium a eros
                                    ut?</a> </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">Integer aliquam sed ante non volutpat. Aenean vitae nulla
                                varius,
                                dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor
                                augue.
                                Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat.
                                Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut,
                                viverra tellus. <br>
                                <br>
                                Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id
                                cursus
                                odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt,
                                ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare.
                                Donec
                                non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra.
                                Curabitur sit amet erat nulla.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion"
                                    class="collapsed" href="#collapse6"> Donec lacus sem, pretium a eros
                                    ut?</a> </h4>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse">
                            <div class="panel-body">Integer aliquam sed ante non volutpat. Aenean vitae nulla
                                varius,
                                dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor
                                augue.
                                Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat.
                                Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut,
                                viverra tellus. <br>
                                <br>
                                Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id
                                cursus
                                odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt,
                                ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare.
                                Donec
                                non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra.
                                Curabitur sit amet erat nulla.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Contact Section -->
    <div id="contact" class="parallax-section">
        <div class="container">

            <!-- SECTION TITLE -->
            <div class="section-title">
                <h3>Seketariat</h3>
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat,
                    nunc
                    dui auctor ipsum, sed posuere eros sapien id quam.</p> --}}
            </div>
            <div class="contact-now">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact"> <span><i class="fa fa-home"></i></span>
                            <div class="information"> <strong>Alamat:</strong>
                                <p>KOMPLEK PUSAT PEMERINTAHAN KABUPATEN TANGERANG TIGARAKSA</p>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info -->
                    <div class="col-md-4">
                        <div class="contact"> <span><i class="fa fa-envelope"></i></span>
                            <div class="information"> <strong>Alamat Email:</strong>
                                <p>admin@dmikabtangerang.or.id</p>
                                <p>admin@dmikabtangerang.or.id</p>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info -->
                    <div class="col-md-4">
                        <div class="contact"> <span><i class="fa fa-phone"></i></span>
                            <div class="information"> <strong>No Telepon:</strong>
                                <p>+62 812-8111-0044</p>
                                <p>+62 812-8111-0044</p>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">

                    <!-- Google Map Section -->
                    <div>
                        <img src="{{ asset('/landingpage/images/dmi/sketariat.jpg')}}" />
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- CONTACT FORM HERE -->
                    <div class="contact-form">
                        <form id="contact-form" class="row">
                            <div class="col-md-4 col-sm-6">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <input type="text" class="form-control" name="phone" placeholder="Address">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button id="submit" type="submit" class="form-control" name="submit">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Clients Logo-->
    {{-- <div class="our-clients">
        <div class="container">
            <div class="owl-clients">
                <div class="item"> <img src="{{ asset('/landingpage/images/client-logo4.png') }}" alt=""> </div>
                <div class="item"> <img src="../../../landingpage/images/client-logo.png" alt=""> </div>
                <div class="item"> <img src="../../../landingpage/images/client-logo2.png" alt=""> </div>
                <div class="item"> <img src="../../../landingpage/images/client-logo3.png" alt=""> </div>
                <div class="item"> <img src="../../../landingpage/images/client-logo.png" alt=""> </div>
                <div class="item"> <img src="../../../landingpage/images/client-logo3.png" alt=""> </div>
                <div class="item"> <img src="../../../landingpage/images/client-logo2.png" alt=""> </div>
                <div class="item"> <img src="../../../landingpage/images/client-logo3.png" alt=""> </div>
                <div class="item"> <img src="../../../landingpage/images/client-logo.png" alt=""> </div>
                <div class="item"> <img src="../../../landingpage/images/client-logo3.png" alt=""> </div>
                <div class="item"> <img src="../../../landingpage/images/client-logo2.png" alt=""> </div>
            </div>
        </div>
    </div> --}}
    <!-- Clients Logo end-->

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <!-- social Section -->
            <div class="socialLinks"> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"><i
                        class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin"
                        aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="footer-copyright">
                        <p>&copy; 2025 Dewan Masjid Indonesia | Kabupaten Tangerang.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap -->
    <script src="{{ asset('/landingpage/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/landingpage/js/bootstrap.min.js') }}"></script>

    <!-- Popup -->
    <script src="{{ asset('/landingpage/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/landingpage/js/magnific-popup-options.js') }}"></script>

    <!-- Carousel -->
    <script src="{{ asset('/landingpage/js/owl.carousel.min.js') }}"></script>

    <!-- Sticky Header -->
    <script src="{{ asset('/landingpage/js/jquery.sticky.js') }}"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="{{ asset('/landingpage/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/landingpage/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Parallax -->
    <script src="{{ asset('/landingpage/js/jquery.parallax.js') }}"></script>

    <!-- Counter -->
    <script src="{{ asset('/landingpage/js/counter.js') }}"></script>
    <script src="{{ asset('/landingpage/js/smoothscroll.js') }}"></script>

    <!-- Google Map -->
    <script src="{{ asset('/landingpage/js/js.js') }}" async defer></script>
    <script src="{{ asset('/landingpage/js/gmap.js') }}"></script>
    <script src="{{ asset('/landingpage/js/morphext.min.js') }}"></script>

    <!-- Custom -->
    <script src="{{ asset('/landingpage/js/custom.js') }}"></script>
</body>

</html>
