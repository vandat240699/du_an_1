
<?php
  require_once("./connect.php");
  session_start();
  ?>
<!DOCTYPE html><html><head><meta charSet="utf-8"/><meta name="theme-color" content="#00B6F3"/><script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer', 'GTM-5XW6PZ2');
    </script><script>
    (function() {
      window.vntCa = 'VNT-2aHwQeffEVm0';
      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
      po.src = 'https://mytourcdn.com/mp/js/vnt-mp.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script><meta charSet="utf-8"/><title>Đặt phòng khách sạn</title>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width, user-scalable=no"/>
    <meta name="description" content="Đặt phòng khách sạn giá rẻ trên Mytour. Đặt càng sát ngày, giá càng tốt. Đặt phòng khuyến mãi giá rẻ nhất ở Việt Nam và các nước khác chỉ trong 3 bước đơn giản. Giá trung thực, không phí ẩn!"/>
    <meta name="keywords" content="khách sạn, đặt phòng khách sạn, đặt phòng giá rẻ, đặt khách sạn hạng sang giá tốt, đặt khách sạn sát ngày giá tốt, đặt phòng khách sạn thuận tiện, hỗ trợ dịch vụ khách hàng 24/7 đặt phòng khách sạn"/>
    <meta name="csrf-token" content="kh1ez4WH3sozbpbLC7tOumNr81Ut9n2kVwAu1g1S"/><meta http-equiv="x-dns-prefetch-control" content="on"/>
    <link rel="dns-prefetch" href="https://mytourcdn.com/"/>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js">
    <meta name="robots" content="index, follow"/>
    <link rel="alternate" hrefLang="vi" href="https://mytour.vn/"/>
    <link href="https://staticproxy.mytourcdn.com/0x0,q90/themes/images/favicon.ico" rel="icon" type="image/x-icon"/>
    <meta property="al:ios:app_name" content="Mytour.vn"/>
    <meta property="al:ios:app_store_id" content="1149730203"/>
    <meta property="al:android:app_name" content="Mytour.vn"/>
    <meta property="al:android:package" content="vn.mytour.apps.android"/>
    <meta property="fb:app_id" content="857393964278669"/>
    <meta property="fb:pages" content="180719541988518"/>
    <meta property="og:image" content="https://mytour.vn/themes/images/logo-ss-facebook.png"/>
    <meta property="og:url" content="https://mytour.vn"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="Mytour.vn"/>
    <meta property="og:title" content="Đặt phòng khách sạn, vé máy bay giá rẻ hàng đầu Việt Nam | Mytour.vn"/>
    <meta property="og:description" content="Đặt phòng khách sạn giá rẻ trên Mytour. Đặt càng sát ngày, giá càng tốt. Đặt phòng khuyến mãi giá rẻ nhất ở Việt Nam và các nước khác chỉ trong 3 bước đơn giản. Giá trung thực, không phí ẩn!"/>
    <script>type="application/ld+json">{"@context":"https://schema.org","@type":"Organization","url":"https://mytour.vn","name":"Mytour.vn","logo":"https://staticproxy.mytourcdn.com/0x0,q90/themes/images/logo_new.png","sameAs":["https://www.facebook.com/mytour.vn","https://plus.google.com/+MytourVndulichtietkiem","https://www.instagram.com/mytour.vn/","https://twitter.com/mytourvn","https://www.linkedin.com/company/3809538","https://www.youtube.com/user/Mytourvn"]}</script>
    <meta name="next-head-count" content="24"/><link rel="preload" href="/_next/static/css/d17eae4d420c8c729932.css" as="style"/><link rel="stylesheet" href="/_next/static/css/d17eae4d420c8c729932.css" data-n-g=""/><noscript data-n-css=""></noscript>
    <link rel="preload" href="/_next/static/chunks/framework.40a5f3e53232a9970018.js" as="script"/>
    <link rel="preload" href="/_next/static/chunks/2852872c.d3dde78b11dcfb7952b5.js" as="script"/>
    <link rel="preload" href="/_next/static/chunks/75fc9c18.688379fdd216b355ea3a.js" as="script"/>
    <link rel="preload" href="/_next/static/chunks/commons.f2259e0b700d556fdc4a.js" as="script"/>
    <link rel="preload" href="/_next/static/chunks/79.758647fcf84de517c5dc.js" as="script"/>
    <link rel="preload" href="/_next/static/chunks/main-371829f0de1cf04d3bad.js" as="script"/>
    <link rel="preload" href="/_next/static/chunks/webpack-1295f784c690e1dc454e.js" as="script"/>
    <link rel="preload" href="/_next/static/chunks/framework.40a5f3e53232a9970018.js" as="script"/>
    <link rel="preload" href="/_next/static/chunks/2852872c.d3dde78b11dcfb7952b5.js" as="script"/>
    <link rel="preload" href="/_next/static/chunks/75fc9c18.688379fdd216b355ea3a.js" as="script"/>
    <link rel="preload" href="/_next/static/chunks/commons.f2259e0b700d556fdc4a.js" as="script"/>
    <link rel="preload" href="/_next/static/chunks/pages/_app-aac2ca207f67828cc09e.js" as="script"/>
    <link rel="preload" href="/_next/static/chunks/pages/index-09e1531c322ab2e305b9.js" as="script"/>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XW6PZ2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div id="__next">
    <div class="MuiBox-root jss3">
        <div class="MuiBox-root jss20" style="width:100%;height:488px;background:white;position:relative;background-image:url(https://storage.googleapis.com/tripi-assets/mytour/banner/home-banner.jpg);background-repeat:no-repeat;background-size:cover;transition:background-image 1s ease-in-out">
            <div class="MuiBox-root jss21 jss4" style="max-width:100%;padding:0 calc(50% - 594px);background:linear-gradient(180deg, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.02) 100%)">
                <div class="MuiBox-root jss22 jss5" style="color:white">
                <?php
                    $sql = "SELECT * FROM websetting WHERE id = 1";
                    $trave = mysqli_query($connect, $sql);
                    while($row = $trave->fetch_assoc()){
                    ?>
                        <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover active MuiTypography-colorPrimary" style="cursor:pointer" href="./index.php">
                            <img src="<?php echo $row['logo'] ?>" class="jss13" style="margin-right:56px" alt="logo_suncity"/>
                        </a>
                    <?php
                    }
                ?>
                    
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" style="text-decoration:none;color:white;margin-top:20px" href="/khach-san">
                        <div class="jss7">
                            ĐẶT PHÒNG
                            <div class="jss10" style="background:transparent"></div>
                        </div>
                    </a>
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" style="text-decoration:none;color:white;margin-top:20px" href="./gioi_thieu.php">
                        <div class="jss7">GIỚI THIỆU &amp; DỊCH VỤ<div class="jss10" style="background:transparent"></div>
                        </div>
                    </a>
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" style="text-decoration:none;color:white;margin-top:20px" href="">
                        <div class="jss7">TIN TỨC<div class="jss10" style="background:transparent"></div></div>
                    </a>
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" style="text-decoration:none;color:white;margin-top:20px" href="/ve-may-bay">
                        <div class="jss7">
                            LIÊN HỆ
                            <div class="jss10" style="background:transparent"></div>
                        </div>
                    </a>
                </div>
                <div class="MuiBox-root jss23 jss6">
                    <div class="MuiBox-root jss24 jss8" style="color:white">
                        <div class="MuiBox-root jss26" style="color:white">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss25 MuiTypography-colorPrimary" href="/partnership">
                                <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svgFillAll" style="stroke:white;margin-right:8px">
                                    <path d="M11.545 6.364L9.867 8.042a3.09 3.09 0 01-4.37 0l-.133-.133L9.172 4.1a5.465 5.465 0 017.727 0v0a5.467 5.467 0 01.828 6.668" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12.523 8.887l2.792 2.792a2.318 2.318 0 010 3.278l-1.264 1.264a4.635 4.635 0 01-6.557 0L3.1 11.827a5.464 5.464 0 010-7.727v0a5.446 5.446 0 013.809-1.6M14.938 15.334l-3.007-3.006M12.714 17.154L9.91 14.35" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <p class="MuiTypography-root MuiTypography-body2" style="font-size:14px;line-height:17px;color:white">Hợp tác với chúng tôi</p>
                            </a>
                            <div class="MuiBox-root jss27 jss25">
                                <svg width="17" height="17" fill="none" xmlns="http://www.w3.org/2000/svg" class="svgFillAll" style="stroke:white;margin-right:8px">
                                    <path d="M3.167 1.333H6.5L8.167 5.5 6.083 6.75a9.167 9.167 0 004.167 4.167l1.25-2.084 4.167 1.667v3.333A1.666 1.666 0 0114 15.5 13.333 13.333 0 011.5 3a1.667 1.667 0 011.667-1.667" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <p class="MuiTypography-root MuiTypography-body2" style="font-size:14px;line-height:17px">1900 2083</p>
                            </div>
                        </div>
                        <div class="MuiBox-root jss38">
                            <div class="MuiBox-root jss39 jss28">
                                <div class="MuiBox-root jss40 jss33">
                                    <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svgFillAll" style="stroke:white">
                                        <path d="M8.333 4.167a1.667 1.667 0 013.334 0 5.833 5.833 0 013.333 5v2.5a3.333 3.333 0 001.667 2.5H3.333A3.334 3.334 0 005 11.667v-2.5a5.833 5.833 0 013.333-5" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M7.5 14.166V15a2.5 2.5 0 105 0v-.834" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="MuiBox-root jss50">
                            <div class="MuiBox-root jss51 jss41" style="color:white">
                                <div class="MuiBox-root jss52">
                                    <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svgFillAll" style="stroke:white">
                                        <path d="M3.63 15.374a12.905 12.905 0 016.37-1.67 12.9 12.9 0 016.37 1.67m-3.592-7.226a2.778 2.778 0 11-5.556 0 2.778 2.778 0 015.556 0zM18.333 10a8.333 8.333 0 11-16.665 0 8.333 8.333 0 0116.665 0z" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <svg width="10" height="6" fill="none" xmlns="http://www.w3.org/2000/svg" class="svgFillAll" style="stroke:white;margin-left:6px">
                                        <path d="M1.667 1.333L5 4.667l3.333-3.334" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" class="svgFillAll" style="stroke:white;cursor:pointer">
                        <path d="M4 6h16M4 12h16M4 18h16" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
            </div>
            <div class="jss9" style="padding:64px 0 240px 0;color:white">
                <div class="MuiBox-root jss64 jss11">
                    <div class="MuiBox-root jss65 jss5">
                        <div class="MuiBox-root jss66 jss12">
                            <p class="MuiTypography-root MuiTypography-body2" style="font-weight:600;font-size:18px;line-height:21px">Tìm kiếm khách sạn<!-- --> </p>
                            <div class="jss10" style="background:white"></div>
                        </div>
                        <!-- <div class="MuiBox-root jss67 jss12">
                            <p class="MuiTypography-root MuiTypography-body2" style="font-weight:600;font-size:18px;line-height:21px">Chuyến bay</p>
                            <div class="jss10" style="background:transparent"></div>
                        </div> -->
                    </div>
                    <div class="MuiBox-root jss82" style="width:100%">
                        <div class="MuiBox-root jss83 jss68">
                            <div>
                                <div class="MuiBox-root jss84 jss72" style="border:none;box-shadow:0px 15px 15px rgba(0, 0, 0, 0.2)">
                                    <div class="MuiBox-root jss85 jss77">
                                        <div class="MuiBox-root jss86 jss80">
                                            <div class="MuiBox-root jss87 jss75">Địa điểm</div>
                                            <div class="MuiBox-root jss88">
                                                <div class="MuiInputBase-root MuiInput-root jss73">
                                                    <input type="text" autoComplete="off" id="input-search-hotel" placeholder="Thành phố, khách sạn, điểm đến" value="" class="MuiInputBase-input MuiInput-input"/>
                                                </div>
                                                <div class="jss79" style="background:transparent"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="MuiBox-root jss89 jss78">
                                        <div class="MuiBox-root jss90 jss80" style="margin-left:24px;min-width:368px">
                                            <div class="MuiBox-root jss91 jss75">Ngày đến<div class="MuiBox-root jss92 jss76">T2<!-- -->, <!-- -->28<!-- --> Tháng <!-- -->06</div>
                                                <div class="jss79" style="background:transparent"></div>
                                            </div>
                                            <div class="MuiBox-root jss93 jss74">
                                                <span class="MuiBox-root jss94" style="font-weight:600">1</span>
                                                <svg width="10" height="9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.982.504h.173A3.319 3.319 0 008.66 6.01 3.982 3.982 0 114.982.5v.004z" stroke="#718096" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <div class="MuiBox-root jss95 jss75">Ngày về<div class="MuiBox-root jss96 jss76">T3<!-- -->, <!-- -->29<!-- --> Tháng <!-- -->06</div>
                                                <div class="jss79" style="background:transparent"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="MuiBox-root jss97 jss78">
                                        <div class="MuiBox-root jss98" style="margin-left:24px">
                                            <div class="MuiBox-root jss99 jss80">
                                                <div class="MuiBox-root jss100 jss75">Số phòng, số khách</div>
                                                <div class="MuiBox-root jss101 jss76">1<!-- --> phòng, <!-- -->2<!-- --> người lớn, <!-- -->0<!-- --> trẻ em</div>
                                                <div class="jss79" style="background:transparent"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedSecondary" tabindex="0" type="button" style="width:100px;height:56px;border-radius:8px;cursor:not-allowed">
                                        <span class="MuiButton-label">
                                            <svg width="23" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" class="svgFillAll" style="stroke:white">
                                                <path d="M21.312 22.5l-4.742-4.742m2.71-7.451a8.806 8.806 0 11-17.613 0 8.806 8.806 0 0117.613 0z" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main>
            <div class="MuiBox-root jss102 jss1">
                <div class="MuiBox-root jss103 jss2">
                    <div class="MuiBox-root jss109 jss104">
                        <?php
                            $sql = "SELECT * FROM websetting WHERE id = 1";
                            $trave = mysqli_query($connect, $sql);
                            while($row = $trave->fetch_assoc()){
                                ?>
                                    <div class="MuiBox-root jss110 jss105">
                                        <span class="MuiBox-root jss111 jss108">
                                            <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_support_247.svg" alt="logo_support_247" style="width:52px;height:52px"/>
                                            <div class="MuiBox-root jss112 jss106"></div>
                                        </span>
                                        <span class="MuiTypography-root MuiTypography-subtitle2" style="margin-top:24px;white-space:nowrap">Hỗ trợ khách hàng 24/7</span>
                                        <span class="MuiTypography-root jss107 MuiTypography-body1"><?php echo $row['htkh247'] ?></span>
                                    </div>
                                <?php
                            }
                        ?>
                        <?php
                             $sql = "SELECT * FROM websetting WHERE id = 1";
                             $trave = mysqli_query($connect, $sql);
                             while($row = $trave->fetch_assoc()){
                                 ?>
                                    <div class="MuiBox-root jss113 jss105">
                                        <span class="MuiBox-root jss114 jss108">
                                            <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_best_price.svg" alt="logo_best_price" style="width:52px;height:52px"/>
                                            <div class="MuiBox-root jss115 jss106"></div>
                                        </span>
                                        <span class="MuiTypography-root MuiTypography-subtitle2" style="margin-top:24px;white-space:nowrap">Giá tốt sát ngày</span>
                                        <span class="MuiTypography-root jss107 MuiTypography-body1"><?php echo $row['gtsn'] ?></span>
                                    </div>
                                 <?php
                             }
                        ?>
                        <?php
                            $sql = "SELECT * FROM websetting WHERE id = 1";
                            $trave = mysqli_query($connect, $sql);
                            while($row = $trave->fetch_assoc()){
                                ?>
                                    <div class="MuiBox-root jss116 jss105">
                                        <span class="MuiBox-root jss117 jss108">
                                            <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_payment.svg" alt="logo_payment" style="width:52px;height:52px"/>
                                            <div class="MuiBox-root jss118 jss106"></div>
                                        </span>
                                        <span class="MuiTypography-root MuiTypography-subtitle2" style="margin-top:24px;white-space:nowrap">Thanh toán dễ dàng, đa dạng</span>
                                        <span class="MuiTypography-root jss107 MuiTypography-body1"><?php echo $row['ttdddd'] ?></span>
                                    </div>
                                <?php
                            }
                        ?>
                        
                        <!-- <div class="MuiBox-root jss119 jss105">
                            <span class="MuiBox-root jss120 jss108">
                                <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_total_hotel.svg" alt="logo_total_hotel" style="width:52px;height:52px"/>
                                <div class="MuiBox-root jss121 jss106"></div>
                            </span>
                            <span class="MuiTypography-root MuiTypography-subtitle2" style="margin-top:24px;white-space:nowrap">Hơn 8000+ khách sạn dọc Việt Nam</span>
                            <span class="MuiTypography-root jss107 MuiTypography-body1">Hàng nghìn khách sạn, đặc biệt là 4 sao và 5 sao, cho phép bạn thoải mái lựa chọn, giá cạnh tranh, phong phú.</span>
                        </div> -->
                    </div>
                </div>
                <div class="MuiBox-root jss149 jss140">
                    <div class="MuiBox-root jss150 jss141">
                        <div class="MuiBox-root jss151 jss142" style="margin-bottom:32px">
                            <p class="MuiTypography-root jss144 MuiTypography-body2">Khách sạn giá tốt chỉ có trên Suny City</p>
                            <div class="MuiBox-root jss152 jss145">
                                <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss153 jss154 jss146 jss147" tabindex="0" type="button">
                                    <span class="MuiButton-label">
                                        <div class="MuiBox-root jss155">
                                            <div class="MuiBox-root jss156" opacity="1">Hồ Chí Minh</div>
                                        </div>
                                    </span>
                                </button>
                                <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss153 jss157 jss146" tabindex="0" type="button">
                                    <span class="MuiButton-label">
                                        <div class="MuiBox-root jss158">
                                            <div class="MuiBox-root jss159" opacity="1">Hà Nội</div>
                                        </div>
                                    </span>
                                </button>
                                <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss153 jss160 jss146" tabindex="0" type="button">
                                    <span class="MuiButton-label">
                                        <div class="MuiBox-root jss161">
                                            <div class="MuiBox-root jss162" opacity="1">Đà Nẵng</div>
                                        </div>
                                    </span>
                                </button>
                                <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss153 jss163 jss146" tabindex="0" type="button">
                                    <span class="MuiButton-label">
                                        <div class="MuiBox-root jss164">
                                            <div class="MuiBox-root jss165" opacity="1">Đà Lạt</div>
                                        </div>
                                    </span>
                                </button>
                                <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss153 jss166 jss146" tabindex="0" type="button">
                                    <span class="MuiButton-label">
                                        <div class="MuiBox-root jss167">
                                            <div class="MuiBox-root jss168" opacity="1">Bà Rịa - Vũng Tàu</div>
                                        </div>
                                    </span>
                                </button>
                                <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss153 jss169 jss146" tabindex="0" type="button">
                                    <span class="MuiButton-label">
                                        <div class="MuiBox-root jss170">
                                            <div class="MuiBox-root jss171" opacity="1">Nha Trang</div>
                                        </div>
                                    </span>
                                </button>
                                <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss153 jss172 jss146" tabindex="0" type="button">
                                    <span class="MuiButton-label">
                                        <div class="MuiBox-root jss173">
                                            <div class="MuiBox-root jss174" opacity="1">Hội An</div>
                                        </div>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="MuiBox-root jss175 jss143">
                            <?php
                                $sql = "SELECT * FROM room_type WHERE iddanhmuc = 1 ORDER BY idroom DESC LIMIT 4";
                                $trave = mysqli_query($connect, $sql);
                                while($row = $trave->fetch_assoc()){
                                    ?>
                                        <a style = "text-decoration: none; margin-left:13px; margin-top: 20px;" href="./chonphong.php?id=<?php echo $row['idroom'] ?>">
                                            <div class="card" style="width: 18rem;">
                                                <img src="<?php echo $row['image1'] ?>" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                <h5 style="font-weight: bold; color: black;" class="card-title"><?php echo $row['roomname'] ?> </h5>
                                                <p style="color: rgb(255, 188, 57);" class="card-text">★★★★★</p>
                                                <button style = "background-color: rgb(255, 51, 102);" href="" class="btn btn-primary"><strong>Xem phòng</strong></button>
                                                </div>
                                                <div class="jss8999">
                                                    <div style = "color: red;" class="jss9001"><?php echo $row['khoanggia'] ?></div>
                                                </div>
                                            </div>
                                            </a>
                                    <?php
                                }
                            ?>
                            
                        </div>
                        <div class="MuiBox-root jss176">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss148 MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp33/khach-san-tai-ho-chi-minh.html">
                                <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss153 jss177" tabindex="0" type="button">
                                    <span class="MuiButton-label">
                                        <div class="MuiBox-root jss178">
                                            <div class="MuiBox-root jss179" opacity="1">Xem tất cả</div>
                                        </div>
                                    </span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="MuiBox-root jss199 jss180">
                    <div class="MuiBox-root jss200 jss181">
                        <p class="MuiTypography-root jss182 MuiTypography-body2">Điểm đến yêu thích</p>
                        <p class="MuiTypography-root jss183 MuiTypography-body2">Địa điểm hot nhất do Suny City đề xuất</p>
                        <div class="MuiBox-root jss201 jss184">
                            <div class="MuiBox-root jss202 jss185 jss186">
                                <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" href="/khach-san/tp33/khach-san-tai-ho-chi-minh.html?checkIn=28-06-2021&amp;checkOut=29-06-2021&amp;adults=2&amp;rooms=1&amp;children=0">
                                    <div class="jss203">
                                        <div class="jss204" style="border-radius:50%"></div>
                                        <div class="lazyload-wrapper ">
                                            <div class="lazyload-placeholder">
                                                <img src="https://storage.googleapis.com/tripi-assets/mytour/images/locations/hochiminh.png" class="jss1770" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="MuiTypography-root jss198 MuiTypography-body2">Hồ Chí Minh</p>
                                </a>
                            </div>
                            <div class="MuiBox-root jss208 jss185 jss187">
                                <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" href="/khach-san/tp11/khach-san-tai-ha-noi.html?checkIn=28-06-2021&amp;checkOut=29-06-2021&amp;adults=2&amp;rooms=1&amp;children=0">
                                    <div class="jss203">
                                        <div class="jss204" style="border-radius:50%"></div>
                                        <div class="lazyload-wrapper ">
                                            <div class="lazyload-placeholder">
                                                <img src="https://storage.googleapis.com/tripi-assets/mytour/images/locations/hanoi.png" class="jss1771" alt="">

                                            </div>
                                        </div>
                                    </div>
                                    <p class="MuiTypography-root jss198 MuiTypography-body2">Hà Nội</p>
                                </a>
                            </div>
                            <div class="MuiBox-root jss209 jss185 jss188">
                                <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" href="/khach-san/tp50/khach-san-tai-da-nang.html?checkIn=28-06-2021&amp;checkOut=29-06-2021&amp;adults=2&amp;rooms=1&amp;children=0">
                                    <div class="jss203">
                                        <div class="jss204" style="border-radius:50%"></div>
                                        <div class="lazyload-wrapper ">
                                            <div class="lazyload-placeholder">
                                                <img src="https://storage.googleapis.com/tripi-assets/mytour/images/locations/danang.png" class="jss1770" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="MuiTypography-root jss198 MuiTypography-body2">Đà Nẵng</p>
                                </a>
                            </div>
                            <div class="MuiBox-root jss210 jss185 jss189">
                                <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" href="/khach-san/td155/khach-san-tai-da-lat.html?checkIn=28-06-2021&amp;checkOut=29-06-2021&amp;adults=2&amp;rooms=1&amp;children=0">
                                    <div class="jss203">
                                        <div class="jss204" style="border-radius:50%"></div>
                                            <div class="lazyload-wrapper ">
                                                <div class="lazyload-placeholder">
                                                    <img src="https://storage.googleapis.com/tripi-assets/mytour/images/locations/da-lat.png" class="jss1770" alt="">
                                                </div>
                                            </div>
                                </div>
                                <p class="MuiTypography-root jss198 MuiTypography-body2">Đà Lạt</p>
                            </a>
                            </div>
                            <div class="MuiBox-root jss211 jss185 jss190">
                                <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" href="/khach-san/tp15/khach-san-tai-ba-ria-vung-tau.html?checkIn=28-06-2021&amp;checkOut=29-06-2021&amp;adults=2&amp;rooms=1&amp;children=0">
                                    <div class="jss203">
                                        <div class="jss204" style="border-radius:50%"></div>
                                        <div class="lazyload-wrapper ">
                                            <div class="lazyload-placeholder">
                                                <img src="https://storage.googleapis.com/tripi-assets/mytour/images/locations/vung-tau.png" class="jss1770" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="MuiTypography-root jss198 MuiTypography-body2">Bà Rịa - Vũng Tàu</p>
                                </a>
                            </div>
                            <div class="MuiBox-root jss212 jss185 jss191">
                                <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" href="/khach-san/td414/khach-san-tai-nha-trang.html?checkIn=28-06-2021&amp;checkOut=29-06-2021&amp;adults=2&amp;rooms=1&amp;children=0">
                                    <div class="jss203">
                                        <div class="jss204" style="border-radius:50%"></div>
                                        <div class="lazyload-wrapper ">
                                            <div class="lazyload-placeholder">
                                                <img src="https://storage.googleapis.com/tripi-assets/mytour/images/locations/nha-trang.png" class="jss1770" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="MuiTypography-root jss198 MuiTypography-body2">Nha Trang</p>
                                </a>
                            </div>
                            <div class="MuiBox-root jss213 jss185 jss192">
                                <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" href="/khach-san/td269/khach-san-tai-hoi-an.html?checkIn=28-06-2021&amp;checkOut=29-06-2021&amp;adults=2&amp;rooms=1&amp;children=0">
                                    <div class="jss203">
                                        <div class="jss204" style="border-radius:50%"></div>
                                        <div class="lazyload-wrapper ">
                                            <div class="lazyload-placeholder">
                                                <img src="https://storage.googleapis.com/tripi-assets/mytour/images/locations/hoi-an.png" class="jss1770" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="MuiTypography-root jss198 MuiTypography-body2">Hội An</p>
                                </a>
                            </div>
                            <div class="MuiBox-root jss214 jss185 jss193">
                                <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" href="/khach-san/td235/khach-san-tai-ha-long.html?checkIn=28-06-2021&amp;checkOut=29-06-2021&amp;adults=2&amp;rooms=1&amp;children=0">
                                    <div class="jss203">
                                        <div class="jss204" style="border-radius:50%"></div>
                                        <div class="lazyload-wrapper ">
                                            <div class="lazyload-placeholder">
                                                <img src="https://storage.googleapis.com/tripi-assets/mytour/images/locations/ha-long.png" class="jss1770" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="MuiTypography-root jss198 MuiTypography-body2">Hạ Long</p>
                                </a>
                            </div>
                            <div class="MuiBox-root jss215 jss185 jss194">
                                <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" href="/khach-san/td446/khach-san-tai-phu-quoc.html?checkIn=28-06-2021&amp;checkOut=29-06-2021&amp;adults=2&amp;rooms=1&amp;children=0">
                                    <div class="jss203">
                                        <div class="jss204" style="border-radius:50%"></div>
                                        <div class="lazyload-wrapper ">
                                            <div class="lazyload-placeholder">
                                                <img src="https://storage.googleapis.com/tripi-assets/mytour/images/locations/phu-quoc.png" class="jss1770" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="MuiTypography-root jss198 MuiTypography-body2">Phú Quốc</p>
                                </a>
                            </div>
                            <div class="MuiBox-root jss216 jss185 jss195">
                                <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" href="/khach-san/ts28086/khach-san-tai-mui-ne.html?checkIn=28-06-2021&amp;checkOut=29-06-2021&amp;adults=2&amp;rooms=1&amp;children=0">
                                    <div class="jss203">
                                        <div class="jss204" style="border-radius:50%"></div>
                                        <div class="lazyload-wrapper ">
                                            <div class="lazyload-placeholder">
                                                <img src="https://storage.googleapis.com/tripi-assets/mytour/images/locations/phan-thiet.png" class="jss1770" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="MuiTypography-root jss198 MuiTypography-body2">Mũi Né</p>
                                </a>
                            </div>
                            <div class="MuiBox-root jss217 jss185 jss196">
                                <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" href="/khach-san/tp21/khach-san-tai-lao-cai.html?checkIn=28-06-2021&amp;checkOut=29-06-2021&amp;adults=2&amp;rooms=1&amp;children=0">
                                    <div class="jss203">
                                        <div class="jss204" style="border-radius:50%"></div>
                                        <div class="lazyload-wrapper ">
                                            <div class="lazyload-placeholder">
                                                <img src="https://storage.googleapis.com/tripi-assets/mytour/images/locations/sa-pa.png" class="jss1770" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="MuiTypography-root jss198 MuiTypography-body2">Lào Cai</p>
                                </a>
                            </div>
                            <div class="MuiBox-root jss218 jss185 jss197">
                                <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" href="/khach-san/tp1/khach-san-tai-thua-thien-hue.html?checkIn=28-06-2021&amp;checkOut=29-06-2021&amp;adults=2&amp;rooms=1&amp;children=0">
                                    <div class="jss203">
                                        <div class="jss204" style="border-radius:50%"></div>
                                        <div class="lazyload-wrapper ">
                                            <div class="lazyload-placeholder">
                                                <img src="https://storage.googleapis.com/tripi-assets/mytour/images/locations/hue.png" class="jss1770" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="MuiTypography-root jss198 MuiTypography-body2">Thừa Thiên - Huế</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="MuiBox-root jss228 jss219">
                    <div class="MuiBox-root jss229 jss220">
                        <div style = "display: fl" class="MuiBox-root jss230">
                            <div class="MuiBox-root jss231">
                                <p class="MuiTypography-root jss221 MuiTypography-body2">Suny City đề xuất cho bạn</p>
                                <p class="MuiTypography-root jss222 MuiTypography-body2">Bí quyết du lịch, những câu chuyện thú vị đang chờ đón bạn</p>
                            </div>
                            <div style = "margin-top: 20px;" class="MuiBox-root jss175 jss143">
                                <?php
                                    $sql = "SELECT * FROM room_type WHERE iddanhmuc = 2 ORDER BY idroom DESC LIMIT 4";
                                    $trave = mysqli_query($connect, $sql);
                                    while($row = $trave->fetch_assoc()){
                                        ?>
                                        <a style = "text-decoration: none; margin-left:13px; margin-top: 20px;" href="./chonphong.php?id=<?php echo $row['idroom'] ?>">
                                            <div class="card" style="width: 18rem;">
                                                <img src="<?php echo $row['image1'] ?>" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 style="font-weight: bold; color: black;" class="card-title"><?php echo $row['roomname'] ?> </h5>
                                                        <p style="color: rgb(255, 188, 57);" class="card-text">★★★★★</p>
                                                        <button style = "background-color: rgb(255, 51, 102);" href="" class="btn btn-primary"><strong>Xem phòng</strong></button>
                                                    </div>
                                                    <div class="jss8999">
                                                        <div style = "color: red;" class="jss9001"><?php echo $row['khoanggia'] ?></div>
                                                    </div>
                                            </div>
                                        </a>
                                    <?php
                                    }
                                ?>
                            </div>                                               
                            <!-- <a href="/location">
                                <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss153 jss232" tabindex="0" type="button">
                                    <span class="MuiButton-label">
                                        <div class="MuiBox-root jss233">
                                            <div class="MuiBox-root jss234" opacity="1">Xem tất cả</div>
                                        </div>
                                    </span>
                                </button>
                            </a> -->
                        </div>
                        <div class="MuiBox-root jss235">
                            <div class="MuiGrid-root jss223 MuiGrid-container MuiGrid-spacing-xs-2">
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-sm-6 MuiGrid-grid-md-6 MuiGrid-grid-lg-6"></div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-sm-6 MuiGrid-grid-md-6 MuiGrid-grid-lg-6">
                                    <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2">
                                        <div class="MuiGrid-root jss224 MuiGrid-item MuiGrid-grid-sm-6 MuiGrid-grid-md-6 MuiGrid-grid-lg-6"></div>
                                        <div class="MuiGrid-root jss224 MuiGrid-item MuiGrid-grid-sm-6 MuiGrid-grid-md-6 MuiGrid-grid-lg-6"></div>
                                    </div>
                                    <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2" style="padding-top:4px">
                                        <div class="MuiGrid-root jss224 MuiGrid-item MuiGrid-grid-sm-6 MuiGrid-grid-md-6 MuiGrid-grid-lg-6"></div>
                                        <div class="MuiGrid-root jss224 MuiGrid-item MuiGrid-grid-sm-6 MuiGrid-grid-md-6 MuiGrid-grid-lg-6"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="MuiBox-root jss243" style="width:100%;padding-bottom:126px;padding-top:20px;position:relative;z-index:1">
                <div class="MuiBox-root jss244 jss236">
                    <div class="MuiBox-root jss245 jss237">
                        <div class="MuiBox-root jss246 jss239">
                            <p class="MuiTypography-root MuiTypography-body2" style="font-weight:600;font-size:16px;line-height:19px;color:#FF3366">Các khách sạn hàng đầu</p>
                            <div class="jss238"></div>
                        </div>
                        <!-- <div class="MuiBox-root jss247 jss239">
                            <p class="MuiTypography-root MuiTypography-body2" style="font-weight:600;font-size:16px;line-height:19px;color:#1a202c">Các chặng bay &amp; hãng bay hàng đầu</p>
                        </div> -->
                    </div>
                    <div class="MuiBox-root jss248 jss240">
                        <div class="MuiBox-root jss249 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp1/khach-san-tai-thua-thien-hue.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Thừa Thiên - Huế</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss250 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp2/khach-san-tai-kien-giang.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Kiên Giang</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss251 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp3/khach-san-tai-hai-phong.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Hải Phòng</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss252 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp4/khach-san-tai-gia-lai.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Gia Lai</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss253 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp5/khach-san-tai-binh-dinh.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Bình Định</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss254 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp6/khach-san-tai-an-giang.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">An Giang</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss255 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp7/khach-san-tai-nghe-an.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Nghệ An</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss256 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp8/khach-san-tai-hung-yen.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Hưng Yên</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss257 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp9/khach-san-tai-bac-kan.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Bắc Kạn</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss258 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp10/khach-san-tai-quang-ninh.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Quảng Ninh</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss259 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp11/khach-san-tai-ha-noi.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Hà Nội</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss260 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp12/khach-san-tai-quang-binh.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Quảng Bình</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss261 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp13/khach-san-tai-quang-ngai.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Quảng Ngãi</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss262 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp14/khach-san-tai-ben-tre.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Bến Tre</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss263 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp15/khach-san-tai-ba-ria-vung-tau.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Bà Rịa - Vũng Tàu</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss264 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp16/khach-san-tai-thanh-hoa.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Thanh Hóa</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss265 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp17/khach-san-tai-ninh-thuan.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Ninh Thuận</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss266 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp18/khach-san-tai-bac-lieu.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Bạc Liêu</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss267 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp19/khach-san-tai-cao-bang.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Cao Bằng</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss268 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp20/khach-san-tai-lam-dong.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Lâm Đồng</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss269 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp21/khach-san-tai-lao-cai.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Lào Cai</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss270 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp22/khach-san-tai-binh-duong.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Bình Dương</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss271 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp23/khach-san-tai-binh-thuan.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Bình Thuận</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss272 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp24/khach-san-tai-bac-giang.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Bắc Giang</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss273 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp25/khach-san-tai-ha-giang.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Hà Giang</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss274 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp26/khach-san-tai-bac-ninh.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Bắc Ninh</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss275 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp27/khach-san-tai-lang-son.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Lạng Sơn</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss276 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp28/khach-san-tai-quang-nam.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Quảng Nam</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss277 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp29/khach-san-tai-son-la.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Sơn La</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss278 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp30/khach-san-tai-tay-ninh.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Tây Ninh</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss279 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp31/khach-san-tai-long-an.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Long An</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss280 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp32/khach-san-tai-dong-nai.html">
                            <span class="MuiTypography-root jss242 MuiTypography-caption">Đồng Nai</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss281 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp33/khach-san-tai-ho-chi-minh.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Hồ Chí Minh</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss282 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp34/khach-san-tai-hai-duong.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Hải Dương</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss283 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp35/khach-san-tai-binh-phuoc.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Bình Phước</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss284 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp36/khach-san-tai-ha-nam.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Hà Nam</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss285 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp37/khach-san-tai-vinh-long.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Vĩnh Long</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss286 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp38/khach-san-tai-can-tho.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Cần Thơ</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss287 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp39/khach-san-tai-vinh-phuc.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Vĩnh Phúc</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss288 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp40/khach-san-tai-dak-lak.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Đắk Lắk</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss289 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp41/khach-san-tai-ca-mau.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Cà Mau</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss290 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp42/khach-san-tai-tien-giang.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Tiền Giang</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss291 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp43/khach-san-tai-khanh-hoa.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Khánh Hòa</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss292 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp44/khach-san-tai-quang-tri.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Quảng Trị</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss293 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp45/khach-san-tai-ha-tinh.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Hà Tĩnh</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss294 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp46/khach-san-tai-tra-vinh.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Trà Vinh</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss295 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp47/khach-san-tai-dong-thap.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Đồng Tháp</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss296 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp48/khach-san-tai-hoa-binh.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Hòa Bình</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss297 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp49/khach-san-tai-phu-tho.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Phú Thọ</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss298 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp50/khach-san-tai-da-nang.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Đà Nẵng</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss299 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp51/khach-san-tai-hau-giang.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Hậu Giang</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss300 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp52/khach-san-tai-soc-trang.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Sóc Trăng</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss301 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp53/khach-san-tai-tuyen-quang.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Tuyên Quang</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss302 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp54/khach-san-tai-dak-nong.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Đắk Nông</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss303 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp55/khach-san-tai-thai-nguyen.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Thái Nguyên</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss304 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp56/khach-san-tai-kon-tum.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Kon Tum</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss305 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp57/khach-san-tai-dien-bien.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Điện Biên</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss306 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp58/khach-san-tai-phu-yen.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Phú Yên</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss307 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp59/khach-san-tai-thai-binh.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Thái Bình</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss308 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp60/khach-san-tai-ninh-binh.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Ninh Bình</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss309 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp61/khach-san-tai-nam-dinh.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Nam Định</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss310 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp62/khach-san-tai-lai-chau.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Lai Châu</span>
                            </a>
                        </div>
                        <div class="MuiBox-root jss311 jss241">
                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover link-text MuiTypography-colorPrimary" href="/khach-san/khach-san-gia-tot/tp63/khach-san-tai-yen-bai.html">
                                <span class="MuiTypography-root jss242 MuiTypography-caption">Yên Bái</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<div class="MuiBox-root jss321 jss313">
    <div class="MuiBox-root jss322 jss314">
        <?php
            $sql = "SELECT * FROM websetting WHERE id = 1";
            $trave = mysqli_query($connect, $sql);
            while($row = $trave->fetch_assoc()){
                ?>
                    <span>
                        <img src="<?php echo $row['logo'] ?>" class="jss320" alt="logo_mytour_footer"/>
                    </span>
                <?php
            }
        ?>
        
        <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-3" style="margin-top:24px">
            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-true">
                <p class="MuiTypography-root jss315 MuiTypography-body2">Công ty cổ phần du lịch Việt Nam VNTravel</p>
                <?php
                    $sql = "SELECT * FROM websetting WHERE id = 1";
                    $trave = mysqli_query($connect, $sql);
                    while($row = $trave->fetch_assoc()){
                        ?>
                            <p class="MuiTypography-root jss316 MuiTypography-body2"><?php echo $row['hotline'] ?></p>
                        <?php
                    }
                ?>
                <?php
                    $sql = "SELECT * FROM websetting WHERE id = 1";
                    $trave = mysqli_query($connect, $sql);
                    while($row = $trave->fetch_assoc()){
                        ?>
                            <p class="MuiTypography-root jss316 MuiTypography-body2"><?php echo $row['email'] ?></p>
                        <?php
                    }
                ?>
                <?php
                    $sql = "SELECT * FROM websetting WHERE id = 1";
                    $trave = mysqli_query($connect, $sql);
                    while($row = $trave->fetch_assoc()){
                        ?>
                            <p class="MuiTypography-root jss316 MuiTypography-body2"><?php echo $row['diachi'] ?></p>
                        <?php
                    }
                ?>
            </div>
            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-true">
                <p class="MuiTypography-root jss315 MuiTypography-body2">Chính sách &amp; Quy định</p>
                <div class="MuiBox-root jss323">
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss319 MuiTypography-colorPrimary" target="_blank" href="/news/135152-chinh-sach-va-quy-dinh-chung.html">
                        <span class="MuiBox-root jss324">Chính sách và quy định chung</span>
                    </a>
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss319 MuiTypography-colorPrimary" target="_blank" href="/news/135633-quy-dinh-ve-thanh-toan.html">
                        <span class="MuiBox-root jss325">Quy định về thanh toán</span>
                    </a>
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss319 MuiTypography-colorPrimary" target="_blank" href="/news/135634-quy-dinh-ve-xac-nhan-thong-tin-dat-phong.html">
                        <span class="MuiBox-root jss326">Quy định về xác nhận thông tin đặt phòng</span>
                    </a>
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss319 MuiTypography-colorPrimary" target="_blank" href="/news/135154-chinh-sach-huy-phong-va-hoan-tien.html">
                        <span class="MuiBox-root jss327">Chính sách về hủy đặt phòng và hoàn trả tiền</span>
                    </a>
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss319 MuiTypography-colorPrimary" target="_blank" href="/news/135636-chinh-sach-bao-mat-thong-tin-danh-cho-website-tmdt.html">
                        <span class="MuiBox-root jss328">Chính sách bảo mật thông tin</span>
                    </a>
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss319 MuiTypography-colorPrimary" target="_blank" href="/news/135155-quy-che-hoat-dong.html">
                        <span class="MuiBox-root jss329">Quy chế hoạt động</span>
                    </a>
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss319 MuiTypography-colorPrimary" target="_blank" href="/news/135156-chinh-sach-bao-mat-thong-tin-danh-cho-san-gdtmdt.html">
                        <span class="MuiBox-root jss330">Chính sách bảo mật</span>
                    </a>
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss319 MuiTypography-colorPrimary" target="_blank" href="/news/135420-quy-trinh-giai-quyet-tranh-chap-khieu-nai.html">
                        <span class="MuiBox-root jss331">Quy trình giải quyết tranh chấp, khiếu nại</span>
                    </a>
                </div>
            </div>
            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-true">
                <p class="MuiTypography-root jss315 MuiTypography-body2">Khách hàng và đối tác</p>
                <div class="MuiBox-root jss332">
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss319 MuiTypography-colorPrimary" target="_blank" href="https://hms.mytour.vn/">
                        <span class="MuiBox-root jss333">Đăng nhập HMS</span>
                    </a>
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss319 MuiTypography-colorPrimary" target="_blank" href="https://career.mytour.vn/">
                        <span class="MuiBox-root jss334">Tuyển dụng</span>
                    </a>
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss319 MuiTypography-colorPrimary" target="_blank" href="/help/30-lien-he.html">
                        <span class="MuiBox-root jss335">Liên hệ</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="jss317"></div>
    </div>
</div>
<div class="MuiBox-root jss343 jss336">
    <div class="MuiBox-root jss344 jss337">
        <div class="MuiBox-root jss345 jss339">
            <?php
                $sql = "SELECT * FROM websetting WHERE id = 1";
                $trave = mysqli_query($connect, $sql);
                while($trave->fetch_assoc()){
                    ?>
                        <p class="MuiTypography-root jss338 MuiTypography-body2">Suny City là thành viên của VNTravel Group - Một trong những tập đoàn đứng đầu Đông Nam Á về du lịch trực tuyến và các dịch vụ liên quan</p>
                    <?php
                }
            ?>
            <div class="MuiBox-root jss346 jss340">
                <div class="jss203 jss342">
                    <div class="jss204" style="border-radius:0"></div>
                    <div class="lazyload-wrapper ">
                        <div class="lazyload-placeholder"></div>
                    </div>
                </div>
            </div>
                <?php
                    $sql = "SELECT * FROM websetting WHERE id = 1";
                    $trave = mysqli_query($connect, $sql);
                    while($row = $trave->fetch_assoc()){
                        ?>
                            <p class="MuiTypography-root jss338 MuiTypography-body2"><?php echo $row['copyright'] ?></p>
                        <?php   
                    }
                ?>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>