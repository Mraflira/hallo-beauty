@extends('template.index')
@section('content')

<div class="other-page">
    <div class="about-us-first container">
        <div class="about-us__image">
            <img src="images/tentang-kami.png" alt="">
        </div>
        <div class="about-us__content">
            <h2>Apa itu Hallo Beauty</h2>
            <p>"Hallo Beauty" adalah sebuah webstore dan toko offline yang mengkhususkan diri dalam penjualan barang-barang kecantikan. Mereka menawarkan berbagai macam produk kecantikan, termasuk makeup, perawatan kulit, perawatan rambut, dan produk-produk lain yang dapat membantu meningkatkan penampilan dan merawat keindahan. Dengan memiliki toko fisik dan platform online, Hallo Beauty memungkinkan pelanggan untuk berbelanja produk kecantikan dengan berbagai pilihan dan kemudahan sesuai preferensi mereka.</p>
            <span class="slogan-about">- Sempurnakan Kecantikan Anda Bersama Hallo Beauty</span>
        </div>
    </div>
    <div class="visi-layout">
        <img src="images/flower-2.svg" class="flower-visi" alt="">
        <img src="images/flower-3.svg" class="flower-visi-2" alt="">
        <div class="visi">
            <div class="heading-page">
                <h1>VISI</h1>
            </div>
            <div class="visi-content">
                <p>"Menjadi platform belanja daring terkemuka yang memberikan pengalaman belanja praktis dan terpercaya bagi semua pelanggan."</p>
            </div>
        </div>
    </div>
    <div class="about-us-second__layout container">
        <div class="heading-page">
            <h1>MISI</h1>
        </div>
        <div class="about-us-second__box-layout">
            <div class="about-us-second__box">
                <div class="about-us-second__box-icon">
                    <img src="images/easy.png" alt="">
                    <h4>Kemudahan & Kepuasan</h4>
                </div>
                <div class="about-us-second__box-content">
                    <p>Hallo Beauty dirancang dengan fokus pada pengalaman pengguna yang mudah dan menyenangkan. Layanan pelanggan yang responsif juga memberikan kepuasan tambahan bagi pengguna.</p>
                </div>
            </div>
            <div class="about-us-second__box">
                <div class="about-us-second__box-icon">
                    <img src="images/ragam.png" alt="">
                    <h4>Beragam Pilihan Produk</h4>
                </div>
                <div class="about-us-second__box-content">
                    <p>Hallo Beauty menyediakan beragam produk kecantikan, termasuk makeup, perawatan kulit, perawatan rambut, dan produk-produk lain </p>
                </div>
            </div>
            <div class="about-us-second__box">
                <div class="about-us-second__box-icon">
                    <img src="images/quality-icon.png" alt="">
                    <h4>Kualitas Produk Terjamin</h4>
                </div>
                <div class="about-us-second__box-content">
                    <p>Hallo Beauty bekerja sama dengan pemasok terpercaya dan jaringan yang telah teruji untuk memastikan kualitas produk yang dijual.  </p>
                </div>
            </div>
            <div class="about-us-second__box">
                <div class="about-us-second__box-icon">
                    <img src="images/safety.png" alt="">
                    <h4>Aman dan Terpercaya</h4>
                </div>
                <div class="about-us-second__box-content">
                    <p>Keamanan transaksi adalah prioritas utama Hallo Beauty. Platform ini menggunakan sistem pembayaran yang aman dan menyediakan berbagai pilihan pembayaran yang dapat dipercaya. </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection