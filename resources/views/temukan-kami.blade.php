@extends('template.index')
@section('content')

<div class="temukan-kami">
    <div class="heading-page">
        <h1>Temukan Hallo Beauty</h1>
    </div>
    
    <div class="temukan-kami-layout container">
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3957.049684305641!2d108.11794007500062!3d-7.34831799266046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMjAnNTMuOSJTIDEwOMKwMDcnMTMuOSJF!5e0!3m2!1sid!2sid!4v1692479279970!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="temukan-kami-layout-box">
            <a href="https://api.whatsapp.com/send/?phone=6281223874300&text&type=phone_number&app_absent=0" target="_blank">
                <div class="temukan-kami__box">
                    <div class="temukan-kami__box-icon">
                        <iconify-icon icon="ri:whatsapp-fill"></iconify-icon>
                    </div>
                    <div class="temuka-kami__box-content">
                        <h3>Whatsapp</h3>
                        <span>+62 812 2387 4300</span>
                    </div>
                </div>
            </a>
            <a href="https://www.instagram.com/hallobeautyid/" target="_blank">
                <div class="temukan-kami__box">
                    <div class="temukan-kami__box-icon">
                        <iconify-icon icon="basil:instagram-solid"></iconify-icon>
                    </div>
                    <div class="temuka-kami__box-content">
                        <h3>Instagram</h3>
                        <span>@hallobeautyid</span>
                    </div>
                </div>
            </a>
            <a href="https://www.tiktok.com/@hallo.beautyid" target="_blank">
                <div class="temukan-kami__box">
                    <div class="temukan-kami__box-icon">
                        <iconify-icon icon="ic:round-tiktok"></iconify-icon>
                    </div>
                    <div class="temuka-kami__box-content">
                        <h3>Tiktok</h3>
                        <span>@hallo.beautyid</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    
</div>

@endsection