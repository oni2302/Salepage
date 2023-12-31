<?php
?>
<div class="top-banner">
    <div class="banner-wraper d-flex container-fluid justify-content-center px-3">
        <div class="left-banner col-xl-3 sub-banner">
            <div class="left-banner-image banner-image">
                <img src="https://myshoes.vn/image/cache/catalog/2022/banner/slide-trai-20-300x500h.png" alt="">
            </div>
        </div>
        <div class="center-banner col-xl-6 col-sm-12">
            <div class="center-banner-image banner-image">
                <img src="<?php echo _WEB.'/public/assets/images/center.png'?>" alt="">
            </div>
        </div>
        <div class="right-banner col-xl-3 sub-banner">
            <div class="right-banner-image banner-image">
                <img src="https://myshoes.vn/image/cache/catalog/2022/banner/slide-trai-20-300x500h.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="perform-box">
    <div class="container d-flex per-wraper">
        <div class="per per-1">
            <h1><i class="fa-solid fa-certificate"></i></h1>
            <p>Hàng chính hãng chất lượng cao</p>
        </div>
        <div class="per per-2">
            <h1><i class="fa-solid fa-truck-fast"></i></h1>
            <p>Miễn phí giao hàng với đơn hàng > 500k</p>
        </div>
        <div class="per per-3">
            <h1><i class="fa-solid fa-rotate"></i></h1>
            <p>Hoàn trả hàng trong vòng 7 ngày</p>
        </div>
    </div>
</div>

<div class="container-fluid product-container">
    <div class="title-wrapper">
        <h3>SẢN PHẨM MỚI</h3>
        <div class="title-divider">
        </div>
        <div class="subtitle">
            #Oni Shop
        </div>
    </div>
    <div class="product-card-list flex-wrap row">
        <?php
        foreach ($newProduct as $value) {
            extract($value);
            $discount = 0;
            if ($_isSale == true) {
                $discount = round(100 - ($_salePrice / $_price * 100), 0);
            }
            if (isset($_price)) {
                $_price = number_format($_price, 0, '', ',');
            }
            if (isset($_salePrice)) {
                $_salePrice = number_format($_salePrice, 0, '', ',');
            }
            if(isset($value['_routeName'])){
                $route = $_routeName;
            }else{
                $route = $_id;
            }
        ?>
            <div class="card-wrapper col-xxl-2 col-xl-2 col-lg-3 col-sm-6 col-xs-12">
                <div class="card-item">
                    <div class="card-image no-select">
                        <div class="event-wrapper">
                            <div class="event-name <?php echo ($_isInEvent == false) ? 'hidden' : '' ?>">
                                <span>Event</span>
                            </div>
                        </div>
                        <div class="feature-wrapper">
                            <div class="feature-item bestseller on <?php echo ($_isBestseller == false) ? 'hidden' : '' ?>">
                                <span>bestseller</span>
                            </div>
                            <div class="feature-item new on">
                                <span>new</span>
                            </div>
                            <div class="feature-item discount on <?php echo ($_isSale == false) ? 'hidden' : '' ?>">
                                <span><?php echo $discount ?>%</span>
                            </div>
                        </div>
                        <a href="<?php echo _WEB."/chi-tiet/".$route ?>">
                            <img src="https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.3/w_467,c_limit/ad544063-e375-4eb9-9988-288ef73d974a/air-pegasus-89-shoes-B8z6X8.png" alt="">
                        </a>
                        <div class="card-brand">
                            <a href="<?php echo _WEB."/thuong-hieu/".$brand ?>"><?php echo (isset($brand))?$brand:'' ?></a>
                        </div>
                        <div class="selected-shape"></div>
                    </div>
                    <div class="card-info">
                        <div class="product-name">
                            <span><?php echo (isset($_nameVN))?$_nameVN:'';?></span>
                        </div>
                        <div class="product-price <?php echo ($_isSale) ? 'sale' : '' ?>">
                            <span class="new-price"><?php echo ($_isSale) ? $_salePrice . '₫ ' : '' ?> </span>
                            <?php echo ($_isSale) ? '-' : '' ?>
                            <span class="price"><?php echo $_price ?><span>₫</span></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>


    </div>
</div>