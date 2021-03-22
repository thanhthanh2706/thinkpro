<div class="home_news">
        <div class="container">
                <div class="row">
                        <div class="col-lg-8 col left_news mb-3">
                                <div class="swiper-container gallery-top">
                                        <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                        <a href="#">
                                                                <img src="https://lumen.thinkpro.vn//backend/uploads/banner/2021/3/12/808x288.png" alt="">
                                                        </a>
                                                </div>
                                                <div class="swiper-slide">
                                                        <a href="#">
                                                                <img src="https://lumen.thinkpro.vn//backend/uploads/banner/2021/3/1/2x%20TLC-KM%20ph%E1%BB%A5%20ki%E1%BB%87n.png" alt="">
                                                        </a>
                                                </div>
                                                <div class="swiper-slide">
                                                        <a href="#">
                                                                <img src="https://lumen.thinkpro.vn//backend/uploads/banner/2021/3/16/2x%20BaoHanh_808x288.png" alt="">
                                                        </a>
                                                </div>
                                                <div class="swiper-slide">
                                                        <a href="#">
                                                                <img src="https://lumen.thinkpro.vn//backend/uploads/banner/2021/3/10/808x288.png" alt="">
                                                        </a>
                                                </div>
                                        </div>
                                        <!-- Add Pagination -->
                                        <div class="swiper-pagination"></div>
                                </div>
                                <div class="swiper-container gallery-thumbs">
                                        <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                        ThinkPad- Quà bao la, giảm cực đã
                                                </div>
                                                <div class="swiper-slide">
                                                        Phụ kiện giảm giá sốc!
                                                </div>
                                                <div class="swiper-slide">
                                                        Dịch vụ bảo hành tận nhà cùng LG!
                                                </div>
                                                <div class="swiper-slide border border-right-1">
                                                        Khai Xuân Thần Tốc cùng MSI
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="col-lg-4 col right_news">
                                <h3>
                                        <a href="#" class="text-decoration-none">Mua MacBook Air M1 16GB đi – Khuyến mại mê ly</a>
                                </h3>
                                <h3>
                                        <a href="#" class="text-decoration-none">Phụ kiện chất – Ưu đãi khủng tại ThinkPro</a>
                                </h3>
                                <h3>
                                        <a href="#" class="text-decoration-none">ThinkPad Tháng 3: Quà bao la – Giảm giá cực đã</a>
                                </h3>
                                <div class="view_more">
                                        <a href="#" class="text-decoration-none">
                                                <span class="fs-5  fw-bold" style="color: black;">Tất cả tin tức </span>
                                                <img src="<?= base_url(); ?>/svg/caret-right.svg" alt="">
                                        </a>
                                </div>
                        </div>
                </div>
        </div>
</div>
<script>
        var galleryThumbs = new Swiper('.gallery-thumbs', {
                autoplay: true,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
        });
        var galleryTop = new Swiper('.gallery-top', {
                autoplay: true,
                thumbs: {
                        swiper: galleryThumbs
                }
        });
</script>