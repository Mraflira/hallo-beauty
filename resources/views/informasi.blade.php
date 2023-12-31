@extends('template.index')
@section('content')
<div class="informasi-page ">
    <div class="heading-page">
        <h1>Isi Informasi <span>Kamu</span></h1>
    </div>
    <div class="informasi-layout container">
        <div class="login-box-layout">
            <form action="">
                <div class="signup-layout">
                    <div class="form-box">
                        <label for="nama-lengkap">Nama Lengkap</label>
                        <input type="text" placeholder="Nama Lengkap Kamu">
                    </div>
                    <div class="form-box">
                        <label for="no-telp">Nomor Telepon</label>
                        <input type="text" placeholder="Nomor Telepon">
                    </div>
                    <div class="form-box">
                        <label for="kelurahan">Kelurahan</label>
                        <input type="text" placeholder="Kelurahan Kamu">
                    </div>
                    <div class="form-box">
                        <label for="Kecamatan">Kecamatan</label>
                        <input type="text" placeholder="Kecamatan Kamu">
                    </div>
                    <div class="form-box">
                        <label for="kota">Kota</label>
                        <input type="text" placeholder="Kota Kamu">
                    </div>
                    <div class="form-box">
                        <label for="provinsi">Provinsi</label>
                        <input type="text" placeholder="Provinsi Kamu">
                    </div>
                </div>
                <div class="form-box">
                    <label for="alamat">Alamat Lengkap</label>
                    <textarea placeholder="Isi Alamat Lengkap Kamu"></textarea>
                </div>
                <div>
                    <label class="remind">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        Save this information for next time
                    </label>
                </div>
                <div class="informasi-layout-button__form">
                    <a href="/cart"><button class="back__btn">Kembali ke Keranjang</button></a>
                    <a href="/shipping"><button>Melanjutkan Pembayaran</button></a>
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