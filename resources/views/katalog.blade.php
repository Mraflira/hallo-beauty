@extends('template.index')
@section('content')
<div class="katalog-page-layout">
    <div class="katalog-page container">
        <div class="katalog-page__filter">
            <div class="btn-kategori">
                <button onclick="btnKategori()">Kategori <iconify-icon icon="pajamas:chevron-right"></iconify-icon></button>
            </div>
            <div class="layout-kategori-filter" id="kategoriId">
                <div class="overlay-kategori"></div>
                <div class="katalog-page__filter-box">
                    <button class="btn-close-category" onclick="btnKategori()"><iconify-icon icon="ic:baseline-close"></iconify-icon></button>
                    <div class="katalog-page__filter-box-layout">
                        <h4>Kategori :</h4>
                    </div>
                    <div class="catalog-accordion">
                        <div class="catalog-accordion-item">
                            <div class="catalog-accordion-header">Make Up :</div>
                            <div class="catalog-accordion-content">
                                <div class="catalog-nested-accordion">
                                    <div class="catalog-accordion-item">
                                        <div class="catalog-accordion-header">Wajah</div>
                                        <div class="catalog-accordion-content">
                                            <ul>
                                                <li>Bedak</li>
                                                <li>Primer wajah</li>
                                                <li>Foundation</li>
                                                <li>Palet wajah & set</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="catalog-accordion-item">
                                        <div class="catalog-accordion-header">Pembersih Rias Wajah</div>
                                        <div class="catalog-accordion-content">
                                            <ul>
                                                <li>Mata & Bibir</li>
                                                <li>Wajah</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="catalog-accordion-item">
                                        <div class="catalog-accordion-header">Bibir</div>
                                        <div class="catalog-accordion-content">
                                            <ul>
                                                <li>Lipstik</li>
                                                <li>Lip balm</li>
                                                <li>Lip primer</li>
                                                <li>Lip gloss</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="catalog-accordion-item">
                                        <div class="catalog-accordion-header">Mata</div>
                                        <div class="catalog-accordion-content">
                                            <ul>
                                                <li>Eyeshadow</li>
                                                <li>Eyeliner</li>
                                                <li>Maskara</li>
                                                <li>Bulu mata palsu</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sub kategori disini -->
                    </div>
                    <!-- Tambahkan lebih banyak accordion utama jika diperlukan -->                    
                </div>
            </div>
            
            {{-- <script>
                const checkboxes = document.querySelectorAll('.katalog-page__filter-choose-category input[type="checkbox"]');
              
                checkboxes.forEach(checkbox => {
                  checkbox.addEventListener('click', function () {
                    checkboxes.forEach(otherCheckbox => {
                      if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                      }
                    });
                  });
                });
            </script> --}}
            {{-- <div class="katalog-page__filter-box katalog-page__filter-box-select">
                <div class="katalog-page__filter-box-layout katalog-page__filter-box-layout-sort">
                    <h4>Urutkan Produk :</h4>
                </div>
                <div class="katalog-page__filter-box-layout katalog-page__filter-box-layout-sort">
                    <div class='sort-catalog-select'>
                        <select name="" id="">
                            <option value="">Harga Terendah</option>
                            <option value="">Harga Tertinggi</option>
                            <option value="">Diskon Tertinggi</option>
                            <option value="">Diskon Terendah</option>
                            <option value="">A - Z</option>
                            <option value="">Z - A</option>
                        </select>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="katalog-page__product-katalog">
            <div class="layout-product-main katalog-page__product-layout">
                <div class="box-product">
                    <div class="box-product-image">
                        <div class="select-menu-product">
                            <iconify-icon icon="clarity:heart-line"></iconify-icon>
                            <iconify-icon icon="prime:search"></iconify-icon>
                        </div>
                        <div class="discount-product">
                            <span>15%</span>
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
                            {{-- HARGA DISKON DIBAWAH MEMAKAI SPAN --}}
                            <span>Rp. 85.000</span>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection