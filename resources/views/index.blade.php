@extends('template.index')
@section('content')
 
<div class="banner-slide-layout">
    <div class="banner-slide container">
        <div class="swiper swiperBanner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/banner-1.jpg" alt="Banner slide Hallo Beauty">
                </div>
                <div class="swiper-slide">
                    <img src="images/banner-2.jpg" alt="Banner slide Hallo Beauty">
                </div>
                <div class="swiper-slide">
                    <img src="images/banner-3.jpg" alt="Banner slide Hallo Beauty">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<div class="section-2">
    <img src="images/flower-1.svg" class="flower-1" alt="">
    <img src="images/flower-2.svg" class="flower-2" alt="">
    <div class="heading-content">
        <h1>Kategori</h1>
        <p>Koleksi terbaik produk kecantikan untuk merawat dan memanjakan diri Anda</p>
    </div>
    <div class="swiper kategoriLayout container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="kategori-box-border">
                    <div class="kategori-box">
                        <img src="images/lips.jpg" alt="Kategori Hallo Beauty Website">
                        <span>Lips</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="kategori-box-border">
                    <div class="kategori-box">
                        <img src="images/eye.jpg" alt="Kategori Hallo Beauty Website">
                        <span>Eye</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="kategori-box-border">
                    <div class="kategori-box">
                        <img src="images/face.jpg" alt="Kategori Hallo Beauty Website">
                        <span>Face</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="kategori-box-border">
                    <div class="kategori-box">
                        <img src="images/skin.jpg" alt="Kategori Hallo Beauty Website">
                        <span>skin</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<div class="section-3">
    <div class="image-section-3">
        <img src="images/image-section-3.png" alt="">
    </div>
    <div class="content-section-3">
        <h1>Menghadirkan Kilau Alami</h1>
        <p>Di sini, kecantikan bukan hanya tentang produk, tetapi juga tentang pengetahuan. Kunjungi blog kami yang penuh wawasan untuk menemukan panduan kecantikan yang terbaru dan tips eksklusif dari para ahli.</p>
        <a href="#"><button>Beli Sekarang</button></a>
    </div>
    <div class="highlight-section-3">
        <img src="images/glw-highlight.jpg" class="highlight-1" alt="">
        <img src="images/skintific-highlight.png" class="highlight-2" alt="">
    </div>
</div>

<div class="section-product-home">
    <div class="heading-content">
        <h1>Promo & Diskon</h1>
    </div>
    <div class="swiper productPromoHome container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box-product">
                    <div class="box-product-image">
                        <div class="select-menu-product">
                            <iconify-icon icon="clarity:heart-line"></iconify-icon>
                            <iconify-icon icon="prime:search"></iconify-icon>
                        </div>
                        <div class="add-to-cart-product">
                            <button>Add to Cart</button>
                        </div>
                        <div class="discount-product">
                            <span>15%</span>
                        </div>
                        <img src="images/skintific-single.png" class="product-image" alt="">
                        <img src="images/logo.svg" class="logo-in-product" alt="">
                    </div>
                    <div class="box-product-content">
                        <h5>Skintific</h5>
                        <p>Skintific 5X Ceramide Barrier Repair Serum</p>
                        <div class="box-product-price">
                            <h6>Rp. 70.000</h6>
                            <span>Rp. 85.000</span>
                        </div>
                        <div class="add-to-cart-product-mobile">
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box-product">
                    <div class="box-product-image">
                        <div class="select-menu-product">
                            <iconify-icon icon="clarity:heart-line"></iconify-icon>
                            <iconify-icon icon="prime:search"></iconify-icon>
                        </div>
                        <div class="add-to-cart-product">
                            <button>Add to Cart</button>
                        </div>
                        <div class="discount-product">
                            <span>5%</span>
                        </div>
                        <img src="images/glw-cream.png" class="product-image" alt="">
                        <img src="images/logo.svg" class="logo-in-product" alt="">
                    </div>
                    <div class="box-product-content">
                        <h5>GLW</h5>
                        <p>Sunsense</p>
                        <div class="box-product-price">
                            <h6>Rp. 70.000</h6>
                            <span>Rp. 85.000</span>
                        </div>
                        <div class="add-to-cart-product-mobile">
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box-product">
                    <div class="box-product-image">
                        <div class="select-menu-product">
                            <iconify-icon icon="clarity:heart-line"></iconify-icon>
                            <iconify-icon icon="prime:search"></iconify-icon>
                        </div>
                        <div class="add-to-cart-product">
                            <button>Add to Cart</button>
                        </div>
                        <div class="discount-product">
                            <span>5%</span>
                        </div>
                        <img src="images/olvam.png" class="product-image" alt="">
                        <img src="images/logo.svg" class="logo-in-product" alt="">
                    </div>
                    <div class="box-product-content">
                        <h5>Olvam</h5>
                        <p>Aromatic Telon Oil with Rose Essential Oil</p>
                        <div class="box-product-price">
                            <h6>Rp. 70.000</h6>
                            <span>Rp. 85.000</span>
                        </div>
                        <div class="add-to-cart-product-mobile">
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box-product">
                    <div class="box-product-image">
                        <div class="select-menu-product">
                            <iconify-icon icon="clarity:heart-line"></iconify-icon>
                            <iconify-icon icon="prime:search"></iconify-icon>
                        </div>
                        <div class="add-to-cart-product">
                            <button>Add to Cart</button>
                        </div>
                        <div class="discount-product">
                            <span>10%</span>
                        </div>
                        <img src="images/glw-toner.png" class="product-image" alt="">
                        <img src="images/logo.svg" class="logo-in-product" alt="">
                    </div>
                    <div class="box-product-content">
                        <h5>Glw</h5>
                        <p>Facial Wash for Calming Skin</p>
                        <div class="box-product-price">
                            <h6>Rp. 70.000</h6>
                            <span>Rp. 85.000</span>
                        </div>
                        <div class="add-to-cart-product-mobile">
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box-product">
                    <div class="box-product-image">
                        <div class="select-menu-product">
                            <iconify-icon icon="clarity:heart-line"></iconify-icon>
                            <iconify-icon icon="prime:search"></iconify-icon>
                        </div>
                        <div class="add-to-cart-product">
                            <button>Add to Cart</button>
                        </div>
                        <div class="discount-product">
                            <span>7%</span>
                        </div>
                        <img src="images/glw-face-toner.png" class="product-image" alt="">
                        <img src="images/logo.svg" class="logo-in-product" alt="">
                    </div>
                    <div class="box-product-content">
                        <h5>Glw</h5>
                        <p>Face Toner AHA Hydrate</p>
                        <div class="box-product-price">
                            <h6>Rp. 70.000</h6>
                            <span>Rp. 85.000</span>
                        </div>
                        <div class="add-to-cart-product-mobile">
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box-product">
                    <div class="box-product-image">
                        <div class="select-menu-product">
                            <iconify-icon icon="clarity:heart-line"></iconify-icon>
                            <iconify-icon icon="prime:search"></iconify-icon>
                        </div>
                        <div class="add-to-cart-product">
                            <button>Add to Cart</button>
                        </div>
                        <div class="discount-product">
                            <span>15%</span>
                        </div>
                        <img src="images/glw-face-toner.png" class="product-image" alt="">
                        <img src="images/logo.svg" class="logo-in-product" alt="">
                    </div>
                    <div class="box-product-content">
                        <h5>Skintific</h5>
                        <p>Skintific 5X Ceramide Barrier Repair Serum</p>
                        <div class="box-product-price">
                            <h6>Rp. 70.000</h6>
                            <span>Rp. 85.000</span>
                        </div>
                        <div class="add-to-cart-product-mobile">
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<div class="section-product-home section-product-home-2">
    <div class="heading-content">
        <h1>Rekomendasi Paket</h1>
    </div>
    <div class="swiper productPromoHome container">
    <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box-product">
                    <div class="box-product-image">
                        <div class="select-menu-product">
                            <iconify-icon icon="clarity:heart-line"></iconify-icon>
                            <iconify-icon icon="prime:search"></iconify-icon>
                        </div>
                        <div class="add-to-cart-product">
                            <button>Add to Cart</button>
                        </div>
                        <img src="images/skintific-single.png" class="product-image" alt="">
                        <img src="images/logo.svg" class="logo-in-product" alt="">
                    </div>
                    <div class="box-product-content">
                        <h5>Skintific</h5>
                        <p>Skintific 5X Ceramide Barrier Repair Serum</p>
                        <div class="box-product-price">
                            <h6>Rp. 70.000</h6>
                        </div>
                        <div class="add-to-cart-product-mobile">
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box-product">
                    <div class="box-product-image">
                        <div class="select-menu-product">
                            <iconify-icon icon="clarity:heart-line"></iconify-icon>
                            <iconify-icon icon="prime:search"></iconify-icon>
                        </div>
                        <div class="add-to-cart-product">
                            <button>Add to Cart</button>
                        </div>
                        <img src="images/glw-cream.png" class="product-image" alt="">
                        <img src="images/logo.svg" class="logo-in-product" alt="">
                    </div>
                    <div class="box-product-content">
                        <h5>GLW</h5>
                        <p>Sunsense</p>
                        <div class="box-product-price">
                            <h6>Rp. 70.000</h6>
                        </div>
                        <div class="add-to-cart-product-mobile">
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box-product">
                    <div class="box-product-image">
                        <div class="select-menu-product">
                            <iconify-icon icon="clarity:heart-line"></iconify-icon>
                            <iconify-icon icon="prime:search"></iconify-icon>
                        </div>
                        <div class="add-to-cart-product">
                            <button>Add to Cart</button>
                        </div>
                        <img src="images/olvam.png" class="product-image" alt="">
                        <img src="images/logo.svg" class="logo-in-product" alt="">
                    </div>
                    <div class="box-product-content">
                        <h5>Olvam</h5>
                        <p>Aromatic Telon Oil with Rose Essential Oil</p>
                        <div class="box-product-price">
                            <h6>Rp. 70.000</h6>
                        </div>
                        <div class="add-to-cart-product-mobile">
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box-product">
                    <div class="box-product-image">
                        <div class="select-menu-product">
                            <iconify-icon icon="clarity:heart-line"></iconify-icon>
                            <iconify-icon icon="prime:search"></iconify-icon>
                        </div>
                        <div class="add-to-cart-product">
                            <button>Add to Cart</button>
                        </div>
                        <img src="images/glw-toner.png" class="product-image" alt="">
                        <img src="images/logo.svg" class="logo-in-product" alt="">
                    </div>
                    <div class="box-product-content">
                        <h5>Glw</h5>
                        <p>Facial Wash for Calming Skin</p>
                        <div class="box-product-price">
                            <h6>Rp. 70.000</h6>
                        </div>
                        <div class="add-to-cart-product-mobile">
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box-product">
                    <div class="box-product-image">
                        <div class="select-menu-product">
                            <iconify-icon icon="clarity:heart-line"></iconify-icon>
                            <iconify-icon icon="prime:search"></iconify-icon>
                        </div>
                        <div class="add-to-cart-product">
                            <button>Add to Cart</button>
                        </div>
                        <img src="images/glw-face-toner.png" class="product-image" alt="">
                        <img src="images/logo.svg" class="logo-in-product" alt="">
                    </div>
                    <div class="box-product-content">
                        <h5>Glw</h5>
                        <p>Face Toner AHA Hydrate</p>
                        <div class="box-product-price">
                            <h6>Rp. 70.000</h6>
                        </div>
                        <div class="add-to-cart-product-mobile">
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box-product">
                    <div class="box-product-image">
                        <div class="select-menu-product">
                            <iconify-icon icon="clarity:heart-line"></iconify-icon>
                            <iconify-icon icon="prime:search"></iconify-icon>
                        </div>
                        <div class="add-to-cart-product">
                            <button>Add to Cart</button>
                        </div>
                        <img src="images/glw-face-toner.png" class="product-image" alt="">
                        <img src="images/logo.svg" class="logo-in-product" alt="">
                    </div>
                    <div class="box-product-content">
                        <h5>Skintific</h5>
                        <p>Skintific 5X Ceramide Barrier Repair Serum</p>
                        <div class="box-product-price">
                            <h6>Rp. 70.000</h6>
                        </div>
                        <div class="add-to-cart-product-mobile">
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<div class="section-6">
    <img src="images/flower-3.svg" class="flower-3" alt="">
    <img src="images/flower-4.svg" class="flower-4" alt="">
    <div class="layout-kelebihan container">
        <div class="box-kelebihan">
            <img src="images/ragam-luas.svg" alt="">
            <h3>Ragam Pilihan Luas</h3>
            <p>Dari perawatan kulit hingga riasan, kami menawarkan koleksi produk kecantikan terkini dan terbaik dalam satu tempat.</p>
        </div>
        <div class="box-kelebihan">
            <img src="images/kualitas.svg" alt="">
            <h3>Kualitas Terjamin</h3>
            <p>Kami hanya menyediakan produk berkualitas dari merek-merek terpercaya dan bersertifikasi BPOM.</p>
        </div>
        <div class="box-kelebihan">
            <img src="images/pelayanan.svg" alt="">
            <h3>Pelayanan Pelanggan Profesional</h3>
            <p>Kami hanya menyediakan produk berkualitas dari merek-merek terpercaya dan bersertifikasi BPOM.</p>
        </div>
    </div>
</div>

<div class="section-product-home brand-section">
    <div class="heading-content">
        <h1>Rekomendasi Merek</h1>
    </div>
    <div class="swiper productBrandsHome container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="brands-image-box">
                    <img src="images/glw-logo.png" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brands-image-box">
                    <img src="images/olvam-logo.png" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brands-image-box">
                    <img src="images/skintific-logo.png" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brands-image-box">
                    <img src="images/wardah-logo.png" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brands-image-box">
                    <img src="images/hanasui-logo.png" alt="">
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

@endsection
