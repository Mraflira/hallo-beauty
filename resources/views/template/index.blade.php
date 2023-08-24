<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallo Beauty</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="images/logo.svg" type="image/x-icon">
    <script src="js/js-image-zoom.js"></script>
</head>
<body>
    <div class="nav-top-layout">
        <div class="nav-top container">
            <div class="icon-nav-top">
                <a href="mailto:hallobeautyy@gmail.com" class="icon-text">
                    <iconify-icon icon="heroicons:envelope-solid"></iconify-icon>
                    <span>hallobeauty@gmail.com</span>
                </a>
                <a href="https://api.whatsapp.com/send/?phone=6281223874300&text&type=phone_number&app_absent=0" class="icon-text">
                    <iconify-icon icon="ri:whatsapp-fill"></iconify-icon>
                    <span>+62 812 2387 4300</span>
                </a>
            </div>
            <div class="icon-nav-top icon-nav-top-mobile">
                <a target="_blank" href="https://www.google.com/maps?q=-7.348318,108.120515&entry=gps&g_ep=CAESBzEwLjYyLjEYAEICSUQ%3D&shorturl=1" class="icon-text">
                    <iconify-icon icon="carbon:location-filled"></iconify-icon>
                    <span>Temukan Hallo Beauty</span>
                </a>
                <a href="/wishlist" class="icon-text">
                    <div class="notif-product">
                        <span>0</span>
                    </div>
                    <iconify-icon icon="clarity:heart-solid"></iconify-icon>
                    <span>Daftar Keinginan</span>
                </a>
                <a href="/cart" class="icon-text">
                    <div class="notif-product">
                        <span>0</span>
                    </div>
                    <iconify-icon icon="solar:bag-5-bold"></iconify-icon>
                    <span>Tas</span>
                </a>
            </div>
        </div>
    </div>
    <div class="nav-bottom-layout">
        <header class="header">
            <div class="menuLayout container" id="navbar">
                <div class="header-main">
                    <div class="open-nav-menu">
                        <span></span>
                    </div>
                    <div class="logo-menu-mobile">
                        <img src="images/logo.svg" alt="">
                    </div>
                    <div class="cart-mobile">
                        <a href="/cart" class="icon-text">
                            <div class="notif-product">
                                <span>0</span>
                            </div>
                            <iconify-icon icon="solar:bag-5-bold"></iconify-icon>
                        </a>
                    </div>
                    <div class="menu-overlay"></div>
                    <nav class="nav-menu">
                        <div class="header-nav-menu">
                            <div class="cart-mobile">
                                <a href="/wishlist" class="icon-text">
                                    <div class="notif-product">
                                        <span>0</span>
                                    </div>
                                    <iconify-icon icon="clarity:heart-solid"></iconify-icon>
                                </a>
                            </div>
                            <div class="close-nav-menu">
                                <img src="https://eternityfutures.co.id/assets-public/images/close.svg" alt="close">
                            </div>
                        </div>
                        
                        <ul class="menu">
                            <li class="menu-item menu-item-has-children">
                                <a href="#" data-toggle="sub-menu">Make Up<i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="#">Pembersih rias wajah</a></li>
                                    <li class="menu-item"><a href="#">Wajah</a></li>
                                    <li class="menu-item"><a href="#">Bibir</a></li>
                                    <li class="menu-item"><a href="#">Mata</a></li>
                                    <li class="menu-item"><a href="#">Kuku</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#" data-toggle="sub-menu">Skin Care<i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="#">Cleanser</a></li>
                                    <li class="menu-item"><a href="#">Eye Care</a></li>
                                    <li class="menu-item"><a href="#">Lip Care</a></li>
                                    <li class="menu-item"><a href="#">Treatment</a></li>
                                    <li class="menu-item"><a href="#">Face Mask</a></li>
                                    <li class="menu-item"><a href="#">Sun Care</a></li>
                                    <li class="menu-item"><a href="#">Moisturizer</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#" data-toggle="sub-menu">Hair Care<i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="#">Shampoo</a></li>
                                    <li class="menu-item"><a href="#">Hair Tools</a></li>
                                    <li class="menu-item"><a href="#">Hair Treatment</a></li>
                                    <li class="menu-item"><a href="#">Hair Styling</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#" data-toggle="sub-menu">Body Care<i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="#">Body Cleanser</a></li>
                                    <li class="menu-item"><a href="#">Sun Care</a></li>
                                    <li class="menu-item"><a href="#">Body Treatment</a></li>
                                    <li class="menu-item"><a href="#">Body Care</a></li>
                                </ul>
                            </li>
                            <li class="menu-item logo-menu">
                                <a href="#"><img src="http://127.0.0.1:8000/images/logo.svg" alt=""></a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#" data-toggle="sub-menu">Parfum<i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="#">Pewangi Badan</a></li>
                                    <li class="menu-item"><a href="#">Pewangi Ruangan</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#" data-toggle="sub-menu">Make Up Tools<i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="#">Make up brushes</a></li>
                                    <li class="menu-item"><a href="#">Make up tools</a></li>
                                    <li class="menu-item"><a href="#">Peralatan lainnya</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#" data-toggle="sub-menu">Brands<i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="#">Olvam</a></li>
                                    <li class="menu-item"><a href="#">GLW Secret Lab</a></li>
                                    <li class="menu-item"><a href="#">Skintific</a></li>
                                    <li class="menu-item"><a href="#">Wardah</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Discount</a>
                            </li>
                        </ul>
                    </nav> 
                </div>
            </div>
        </header>
    </div>
    @yield('content')
    <div class="footer">
        <div class="footer-layout container">
            <div class="footer-address">
                <h2>Bagaimana kami dapat membantu Anda?</h2>
                <div class="footer-address-layout">
                    <ul>
                        <a href="mailto:hallobeautyy@gmail.com" target="_blank"><li>hallobeauty@gmail.com</li></a>
                        <a href="https://api.whatsapp.com/send/?phone=6281223874300&text&type=phone_number&app_absent=0" target="_blank"><li>+62 812 2387 4300</li></a>
                        <a href="https://www.google.com/maps?q=-7.348318,108.120515&entry=gps&g_ep=CAESBzEwLjYyLjEYAEICSUQ%3D&shorturl=1" target="_blank"><li>Singaparna, Cipakat, Kec. Singaparna, Kabupaten Tasikmalaya, Jawa Barat 46417</li></a>
                    </ul>
                    <div class="social-footer">
                        <p>Follow Hallo Beauty</p>
                        <div class="social-media-footer">
                            <div class="social-media-box-footer">
                                <a href="https://www.instagram.com/hallobeautyid/" target="_blank">
                                    <iconify-icon icon="mdi:instagram"></iconify-icon>
                                </a>
                            </div>
                            <div class="social-media-box-footer" target="_blank">
                                <iconify-icon icon="ic:round-facebook"></iconify-icon>
                            </div>
                            <div class="social-media-box-footer">
                                <a href="https://www.tiktok.com/@hallo.beautyid" target="_blank">
                                    <iconify-icon icon="ic:round-tiktok"></iconify-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-company">
                <h2>Tentang Perusahaan</h2>
                <div class="footer-company-menu">
                    <ul>
                        <a href="/tentang-kami"><li>Tentang Hallo Beauty</li></a>
                        <a href="/katalog"><li>Katalog</li></a>
                        <a href="/temukan-kami"><li>Kontak Kami</li></a>
                    </ul>
                    <ul>
                        <a href="/kebijakan-privasi"><li>Privacy Policy</li></a>
                        <a href="/syarat-ketentuan"><li>Terms & Conditions</li></a>
                    </ul>
                </div>
                <span>©2023, Hallo Beauty. All Rights Reserved</span>
            </div>
        </div>
    </div>
    <script src="js/accordion-menu-mobile.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        var swiperBanner = new Swiper('.swiperBanner', {
            effect:'fade',
            loop:true,
            autoplay:true,
            pagination: {
                el:".swiper-pagination",
                clickable:true
            }
        });
    </script>
    <script>
        var kategoriLayout = new Swiper('.kategoriLayout', {
            slidesPerView:"auto",
            spaceBetween:20,
            breakpoints: {
                640: {
                slidesPerView: 2,
                spaceBetween: 20,
                },
                768: {
                slidesPerView: 4,
                spaceBetween: 40,
                },
                1024: {
                slidesPerView: 4,
                spaceBetween: 30,
                },
            },
            pagination:{
                el:'.swiper-pagination',
                clickable:true
            }
        });
    </script>
    <script>
        var productPromoHome = new Swiper('.productPromoHome', {
            slidesPerView:2,
            spaceBetween:20,
            breakpoints: {
                640: {
                slidesPerView: 2,
                spaceBetween: 20,
                },
                768: {
                slidesPerView: 4,
                spaceBetween: 40,
                },
                1024: {
                slidesPerView: 5,
                spaceBetween: 30,
                },
            },
            pagination:{
                el:'.swiper-pagination',
                clickable:true
            }
        });
    </script>
    <script>
        var productBrandsHome = new Swiper('.productBrandsHome', {
            slidesPerView:2,
            spaceBetween:20,
            breakpoints: {
                640: {
                slidesPerView: 2,
                spaceBetween: 20,
                },
                768: {
                slidesPerView: 4,
                spaceBetween: 40,
                },
                1024: {
                slidesPerView: 4,
                spaceBetween: 30,
                },
            },
            pagination:{
                el:'.swiper-pagination',
                clickable:true
            }
        });
    </script>
    <script src="js/quantity.js"></script>
    <script src="js/faq.js"></script>
    <script src="js/desc-product-accordion.js"></script>
    <script src="js/catalog-accordion.js"></script>
    <script src="js/mobile-menu.js"></script>
    <script src="js/btn-category.js"></script>
    
    <script>
        var options1 = {
            width:100,
            fillContainer:true,
            zoomWidth: 200,
            offset: {vertical: 0, horizontal: 0}
        };
        
        // If the width and height of the image are not known or to adjust the image to the container of it
        var options2 = {
            fillContainer: true,
            offset: {vertical: 0, horizontal: 0}
        };
        new ImageZoom(document.getElementById("img-container"), options2);
        
        </script>
    </body>
    </html>