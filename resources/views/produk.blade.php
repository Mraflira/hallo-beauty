@extends('template.index')
@section('content')
<div class="product">
    <div class="product-layout container">
        <div class="image-page-product" id="img-container">
            <img class="img-product-main" src="images/olvam-single.jpg" alt="">
            <img src="images/flower-1.svg" class="flower-on-product" alt="">
        </div>
        <div class="desc-page-product">
            <h1>Olvam</h1>
            <p>Aromatic Telon Oil with Rose Essential Oil</p>
            <div class="harga-page-product">
                <h3>Rp. 70.000,-</h3>
            </div>
            <div class="faq-layout faq-layout-produk">
                <button class="faq-accordion-product">Deskripsi</button>
                <div class="faq-panel">
                    <p>Hanasui Anti Acne Serum adalah produk perawatan kulit yang dirancang khusus untuk mengatasi masalah jerawat dan merawat kulit berjerawat. Produk ini umumnya terdiri dari campuran bahan-bahan aktif yang bertujuan untuk membersihkan, merawat, dan mengurangi kemunculan jerawat serta peradangan kulit yang terkait.</p>
                </div>
                <button class="faq-accordion-product">Cara Penggunaan</button>
                <div class="faq-panel">
                    <p>Bersihkan wajah.
                        Aplikasikan serum secara merata ke wajah, hindari area mata dan bibir.
                        Tunggu beberapa saat agar serum meresap.
                        Gunakan pelembap setelahnya, terutama jika kulit terasa kering.
                        Jika digunakan di pagi hari, tambahkan tabir surya sebelum beraktivitas di luar ruangan.</p>
                </div>
                <button class="faq-accordion-product">Bahan</button>
                <div class="faq-panel">
                    <p>Asam Salisilat, Benzoyl Peroxide, Niacinamide, AHA (Alpha Hydroxy Acid) atau BHA (Beta Hydroxy Acid), Ekstrak Herbal, Hyaluronic Acid, Peptide</p>
                </div>
            </div>
            <div class="qty-box">
                <h4>Jumlah barang</h4>
                <div class="product-button-select">
                    <div class='qty-layout'>
                        <button onclick="decreaseQty()"><iconify-icon icon="fa6-solid:minus"></iconify-icon></button>
                        <input type="text" value="1" id="qty"/>
                        <button onclick="increaseQty()"><iconify-icon icon="fa6-solid:plus"></iconify-icon></button>
                    </div>
                    <div class="button-page-product">
                        <button><iconify-icon icon="vaadin:cart"></iconify-icon> Masukkan ke Keranjang</button>
                    </div>
                </div>
            </div>
            <div class="button-page-product wishlist-btn-product">
                <button><iconify-icon icon="gridicons:heart-outline"></iconify-icon>Masukkan ke Daftar Keinginan</button>
            </div>
        </div>
    </div>
    <div class="container recommend-cart">
        <div class="recommend-layout">
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
</div>
@endsection