@extends('template.index')
@section('content')

<div class="cart-page">
    <div class="heading-page">
        <h1>Keranjang belanja <span>kamu</span></h1>
    </div>
    <div class="cart-product-wrapper container">
        <div class="cart-product-body-heading">
            <h3>Rincian Produk</h3>
            <h3>Kuantitas</h3>
            <h3>Harga</h3>
            <h3>Total</h3>
        </div>
        <div class="cart-product-box">
            <div class="cart-product-detail">
                <div class="cart-product-image">
                    <img src="images/skintific-single.png" alt="">
                </div>
                <div class="cart-product-name">
                    <h3>Skintific</h3>
                    <p>Skintific 5X Ceramide Barrier Repair Serum</p>
                    <a href="#"><button>Hapus</button></a>
                </div>
            </div>
            <div class="cart-product-quantity">
                <div class='qty-layout'>
                    <input type="text" value="1" id="qty"/>
                </div>
            </div>
            <div class="product-layout-price">
                <span>Rp. 15.000,-</span>
            </div>
            <div class="product-layout-price">
                <span>Rp. 15.000,-</span>
            </div>
        </div>
        <div class="cart-product-box">
            <div class="cart-product-detail">
                <div class="cart-product-image">
                    <img src="images/coca-cola.png" alt="">
                </div>
                <div class="cart-product-name">
                    <h3>Coca Cola</h3>
                    <a href="#"><button>Hapus</button></a>
                </div>
            </div>
            <div class="cart-product-quantity">
                <div class='qty-layout'>
                    <input type="text" value="1" id="qty"/>
                </div>
            </div>
            <div class="product-layout-price">
                <span>Rp. 15.000,-</span>
            </div>
            <div class="product-layout-price">
                <span>Rp. 15.000,-</span>
            </div>
        </div>
    </div>
    <a href="/katalog" >
        <button class="back-buy container">
            <iconify-icon icon="pajamas:arrow-left"></iconify-icon>
            Lanjutkan Belanja
        </button>
    </a>
</div>
<div class="checkout-button">
    <div class="checkout-button-layout container">
        <button class="checkout-button__option">
            <iconify-icon icon="fa-solid:trash"></iconify-icon>
            Hapus Semua
        </button>
        <button class="checkout-button__option">
            <iconify-icon icon="mdi:heart"></iconify-icon>
            Masukkan ke Daftar Keinginan
        </button>
        <div class="total-produk">
            <span>Total (1 Produk):</span>
            <h3>Rp. 15.000,-</h3>
        </div>
        <a href="/informasi">
            <button class="checkout-button__next">
                Lanjut isi Informasi
            </button>
        </a>
    </div>
</div>
<div class=" recommend-cart">
    <div class="recommend-layout container">
        <div class="heading-page">
            <h1>Produk Pilihan Khusus untukmu</h1>
        </div>
        <div class="layout-product-main">
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
</div>

@endsection