@extends('template.index')
@section('content')

<div class="informasi-page">
    <div class="heading-page">
        <h1>Isi Rincian Pengiriman Kamu</h1>
    </div>
    <div class="informasi-layout container">
        <div class="login-box-layout shipping-box-layout">
            <form action="">
                <div class="form-box">
                    <label for="alamat">Pengiriman ke alamat</label>
                    <div class="form-box__shipping">
                        <label class="shipping-radio">
                            <input type="radio" name="radio" checked/>
                            <span>
                                <div class="heading-shipping-method">
                                    <h3>JNE - REG (Layanan Reguler)</h3>
                                    <p>1-2 Days</p>
                                </div>
                                <div class="price-shipping">
                                    <h5>Rp. 9000 ,-</h5>
                                </div>
                            </span>
                        </label>
                        <label class="shipping-radio form-box__shipping">
                            <input type="radio" name="radio"/>
                            <span>
                                <div class="heading-shipping-method">
                                    <h3>JNE - REG (Layanan Reguler)</h3>
                                    <p>1-2 Days</p>
                                </div>
                                <div class="price-shipping">
                                    <h5>Rp. 9000 ,-</h5>
                                </div>
                            </span>
                        </label>
                    </div>
                </div> 
                
                <div class="form-box">
                    <label for="alamat">Pengiriman ke alamat</label>
                    <textarea placeholder="Pengiriman Alamat Kamu"></textarea>
                </div>
                <div class="informasi-layout-button__form informasi-layout-button__form-shipping">
                    <a href="/shipping"><button>Melanjutkan Pembayaran</button></a>
                    <a href="/cart"><button class="back__btn">Kembali ke Informasi</button></a>
                </div>
            </form>
            
        </div>
        <div class="sidebar-informasi-layout">
            <div class="sidebar-informasi-overflow">
                <div class="sidebar-informasi-box">
                    <div class="sidebar-informasi__image">
                        <img src="images/skintific-single.png" alt="">
                    </div>
                    <div class="sidebar-informasi__desc">
                        <h4>Skintific 5X Ceramide Barrier Repair Serum</h4>
                        <span>1</span>
                    </div>
                    <div class="sidebar-informasi__price">
                        <span>Rp. 13000,-</span>
                    </div>
                </div>
                <div class="sidebar-informasi-box">
                    <div class="sidebar-informasi__image">
                        <img src="images/olvam.png" alt="">
                    </div>
                    <div class="sidebar-informasi__desc">
                        <h4>Aromatic Telon Oil with Rose Essential Oil</h4>
                        <span>1</span>
                    </div>
                    <div class="sidebar-informasi__price">
                        <span>Rp. 13000,-</span>
                    </div>
                </div>
                <div class="sidebar-informasi-box">
                    <div class="sidebar-informasi__image">
                        <img src="images/glw-toner.png" alt="">
                    </div>
                    <div class="sidebar-informasi__desc">
                        <h4>Facial Wash for Calming Skin</h4>
                        <span>1</span>
                    </div>
                    <div class="sidebar-informasi__price">
                        <span>Rp. 13000,-</span>
                    </div>
                </div>
                <div class="sidebar-informasi-box">
                    <div class="sidebar-informasi__image">
                        <img src="images/glw-face-toner.png" alt="">
                    </div>
                    <div class="sidebar-informasi__desc">
                        <h4>Face Toner AHA Hydrate</h4>
                        <span>1</span>
                    </div>
                    <div class="sidebar-informasi__price">
                        <span>Rp. 13000,-</span>
                    </div>
                </div>
            </div>
            
            <div class="sidebar-informasi__total">
                <div class="sidebar-informasi__total-box">
                    <span>Subtotal</span>
                    <span>Rp. 13000,-</span>
                </div>
                <div class="sidebar-informasi__total-box">
                    <span>Diskon</span>
                    <span>Rp. -0,-</span>
                </div>
            </div>
            <div class="sidebar-informasi__total sidebar-informasi__total-main">
                <div class="sidebar-informasi__total-box">
                    <span>Total</span>
                    <span>Rp. 13000,-</span>
                </div>
            </div>
        </div>
    </div>
</div> 

@endsection