<?php
    require_once("./connect.php");
    $idroom = $_GET['id'];
    if(isset($_POST['btsubmit'])){
        $namekh = $_POST['namekh'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $ngayden = $_POST['ngayden'];
        $ngaydi = $_POST['ngaydi'];
        $nguoilon = $_POST['nguoilon'];
        $treem = $_POST['treem'];
        mysqli_querry($connect, "INSERT INTO booking VALUE ('', 'idroom', 'roomname', 'gia', 'giakm', 'diachi', '$namekh', '$sdt', '$email', '$ngayden', '$ngaydi', '$nguoilon', '$treem') WHERE idroom = $idroom");
        echo 'Đặt phòng thành công';
    }
    
?>

<!DOCTYPE html>
<html lang="vi" xmlns:fb="http://ogp.me/ns/fb#" xmlns:addthis="http://www.addthis.com/help/api-spec"  class="no-js no-svg">
<head>
<link rel="stylesheet" href="./dat_phong.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="http://suncitynhatrang.vn/wp-content/themes/twentyseventeen/mystyle.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=vietnamese" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<title>Đặt phòng | Khách sạn SunCity Nha Trang</title>

<!-- All in One SEO Pack 2.3.13.2 by Michael Torbert of Semper Fi Web Design[959,1011] -->
<link rel="canonical" href="http://suncitynhatrang.vn/dat-phong" />
<!-- /all in one seo pack -->
<link rel='dns-prefetch' href='//ajax.googleapis.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
<link rel="alternate" type="application/rss+xml" title="Dòng thông tin Khách sạn SunCity Nha Trang &raquo;" href="http://suncitynhatrang.vn/feed" />
<link rel="alternate" type="application/rss+xml" title="Dòng phản hồi Khách sạn SunCity Nha Trang &raquo;" href="http://suncitynhatrang.vn/comments/feed" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/suncitynhatrang.vn\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b===c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='http://suncitynhatrang.vn/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-theme-css'  href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.min.css?ver=1.11.4' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-timepicker-css'  href='http://suncitynhatrang.vn/wp-content/plugins/contact-form-7-datepicker/js/jquery-ui-timepicker/jquery-ui-timepicker-addon.min.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='http://suncitynhatrang.vn/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.3.0.2' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='wp-pagenavi-css'  href='http://suncitynhatrang.vn/wp-content/plugins/wp-pagenavi/pagenavi-css.css?ver=2.70' type='text/css' media='all' />
<link rel='stylesheet' id='twentyseventeen-fonts-css'  href='https://fonts.googleapis.com/css?family=Libre+Franklin%3A300%2C300i%2C400%2C400i%2C600%2C600i%2C800%2C800i&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='twentyseventeen-style-css'  href='http://suncitynhatrang.vn/wp-content/themes/twentyseventeen/style.css?ver=4.8' type='text/css' media='all' />
<!--[if lt IE 9]>
<link rel='stylesheet' id='twentyseventeen-ie8-css'  href='http://suncitynhatrang.vn/wp-content/themes/twentyseventeen/assets/css/ie8.css?ver=1.0' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='fancybox-css'  href='http://suncitynhatrang.vn/wp-content/plugins/easy-fancybox/fancybox/jquery.fancybox-1.3.8.min.css?ver=1.6' type='text/css' media='screen' />
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.3.0.2'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.3.0.2'></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-content/themes/twentyseventeen/assets/js/html5.js?ver=3.7.3'></script>
<![endif]-->
<link rel='https://api.w.org/' href='http://suncitynhatrang.vn/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://suncitynhatrang.vn/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://suncitynhatrang.vn/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.8" />
<link rel='shortlink' href='http://suncitynhatrang.vn/?p=7' />
<link rel="alternate" type="application/json+oembed" href="http://suncitynhatrang.vn/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fsuncitynhatrang.vn%2Fdat-phong" />
<link rel="alternate" type="text/xml+oembed" href="http://suncitynhatrang.vn/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fsuncitynhatrang.vn%2Fdat-phong&#038;format=xml" />

<style>
.scroll-back-to-top-wrapper {
    position: fixed;
	opacity: 0;
	visibility: hidden;
	overflow: hidden;
	text-align: center;
	z-index: 99999999;
	font-size: 12px;
    background-color: #ffa400;
	color: #eeeeee;
	width: 60px;
	height: 28px;
	line-height: 28px;
	margin-left: -30px;
	bottom: 0px;
	left: 50%;
	padding-top: 2px;
	border-top-left-radius: 0px;
	border-top-right-radius: 0px;
	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	-ms-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
}
.scroll-back-to-top-wrapper:hover {
	background-color: #888888;
  color: #eeeeee;
}
.scroll-back-to-top-wrapper.show {
    visibility:visible;
    cursor:pointer;
	opacity: 1.0;
}
.scroll-back-to-top-wrapper i.fa {
	line-height: inherit;
}
.scroll-back-to-top-wrapper .fa-lg {
	vertical-align: 0;
}
</style><style type="text/css">
.qtranxs_flag_vi {background-image: url(http://suncitynhatrang.vn/wp-content/plugins/qtranslate-x/flags/vn.png); background-repeat: no-repeat;}
.qtranxs_flag_en {background-image: url(http://suncitynhatrang.vn/wp-content/plugins/qtranslate-x/flags/gb.png); background-repeat: no-repeat;}
</style>
<link hreflang="vi" href="http://suncitynhatrang.vn/vi/dat-phong" rel="alternate" />
<link hreflang="en" href="http://suncitynhatrang.vn/en/dat-phong" rel="alternate" />
<link hreflang="x-default" href="http://suncitynhatrang.vn/dat-phong" rel="alternate" />
<meta name="generator" content="qTranslate-X 3.4.6.8" />
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<meta name="generator" content="Powered by Slider Revolution 5.3.0.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<link rel="icon" href="http://suncitynhatrang.vn/wp-content/uploads/2017/06/favicon-100x100.png" sizes="32x32" />
<link rel="icon" href="http://suncitynhatrang.vn/wp-content/uploads/2017/06/favicon.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="http://suncitynhatrang.vn/wp-content/uploads/2017/06/favicon.png" />
<meta name="msapplication-TileImage" content="http://suncitynhatrang.vn/wp-content/uploads/2017/06/favicon.png" />
<style>button#responsive-menu-button,
#responsive-menu-container {
    display: none;
    -webkit-text-size-adjust: 100%;
}

@media screen and (max-width: 1060px) {

    #responsive-menu-container {
        display: block;
    }

    #responsive-menu-container {
        position: fixed;
        top: 0;
        bottom: 0;
        z-index: 99998;
        padding-bottom: 5px;
        margin-bottom: -5px;
        outline: 1px solid transparent;
        overflow-y: auto;
        overflow-x: hidden;
    }

    #responsive-menu-container .responsive-menu-search-box {
        width: 100%;
        padding: 0 2%;
        border-radius: 2px;
        height: 50px;
        -webkit-appearance: none;
    }

    #responsive-menu-container.push-left,
    #responsive-menu-container.slide-left {
        transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        -webkit-transform: translateX(-100%);
        -moz-transform: translateX(-100%);
    }

    .responsive-menu-open #responsive-menu-container.push-left,
    .responsive-menu-open #responsive-menu-container.slide-left {
        transform: translateX(0);
        -ms-transform: translateX(0);
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
    }

    #responsive-menu-container.push-top,
    #responsive-menu-container.slide-top {
        transform: translateY(-100%);
        -ms-transform: translateY(-100%);
        -webkit-transform: translateY(-100%);
        -moz-transform: translateY(-100%);
    }

    .responsive-menu-open #responsive-menu-container.push-top,
    .responsive-menu-open #responsive-menu-container.slide-top {
        transform: translateY(0);
        -ms-transform: translateY(0);
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
    }

    #responsive-menu-container.push-right,
    #responsive-menu-container.slide-right {
        transform: translateX(100%);
        -ms-transform: translateX(100%);
        -webkit-transform: translateX(100%);
        -moz-transform: translateX(100%);
    }

    .responsive-menu-open #responsive-menu-container.push-right,
    .responsive-menu-open #responsive-menu-container.slide-right {
        transform: translateX(0);
        -ms-transform: translateX(0);
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
    }

    #responsive-menu-container.push-bottom,
    #responsive-menu-container.slide-bottom {
        transform: translateY(100%);
        -ms-transform: translateY(100%);
        -webkit-transform: translateY(100%);
        -moz-transform: translateY(100%);
    }

    .responsive-menu-open #responsive-menu-container.push-bottom,
    .responsive-menu-open #responsive-menu-container.slide-bottom {
        transform: translateY(0);
        -ms-transform: translateY(0);
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
    }

    #responsive-menu-container,
    #responsive-menu-container:before,
    #responsive-menu-container:after,
    #responsive-menu-container *,
    #responsive-menu-container *:before,
    #responsive-menu-container *:after {
         box-sizing: border-box;
         margin: 0;
         padding: 0;
    }

    #responsive-menu-container #responsive-menu-search-box,
    #responsive-menu-container #responsive-menu-additional-content,
    #responsive-menu-container #responsive-menu-title {
        padding: 25px 5%;
    }

    #responsive-menu-container #responsive-menu,
    #responsive-menu-container #responsive-menu ul {
        width: 100%;
    }
    #responsive-menu-container #responsive-menu ul.responsive-menu-submenu {
        display: none;
    }

    #responsive-menu-container #responsive-menu ul.responsive-menu-submenu.responsive-menu-submenu-open {
         display: block;
    }

    #responsive-menu-container #responsive-menu ul.responsive-menu-submenu-depth-1 a.responsive-menu-item-link {
        padding-left: 10%;
    }

    #responsive-menu-container #responsive-menu ul.responsive-menu-submenu-depth-2 a.responsive-menu-item-link {
        padding-left: 15%;
    }

    #responsive-menu-container #responsive-menu ul.responsive-menu-submenu-depth-3 a.responsive-menu-item-link {
        padding-left: 20%;
    }

    #responsive-menu-container #responsive-menu ul.responsive-menu-submenu-depth-4 a.responsive-menu-item-link {
        padding-left: 25%;
    }

    #responsive-menu-container #responsive-menu ul.responsive-menu-submenu-depth-5 a.responsive-menu-item-link {
        padding-left: 30%;
    }

    #responsive-menu-container li.responsive-menu-item {
        width: 100%;
        list-style: none;
    }

    #responsive-menu-container li.responsive-menu-item a {
        width: 100%;
        display: block;
        text-decoration: none;
        padding: 0 5%;
        position: relative;
    }

    #responsive-menu-container li.responsive-menu-item a .fa {
        margin-right: 15px;
    }

    #responsive-menu-container li.responsive-menu-item a .responsive-menu-subarrow {
        position: absolute;
        top: 0;
        bottom: 0;
        text-align: center;
        overflow: hidden;
    }

    #responsive-menu-container li.responsive-menu-item a .responsive-menu-subarrow  .fa {
        margin-right: 0;
    }

    button#responsive-menu-button .responsive-menu-button-icon-inactive {
        display: none;
    }

    button#responsive-menu-button {
        z-index: 99999;
        display: none;
        overflow: hidden;
        outline: none;
    }

    button#responsive-menu-button img {
        max-width: 100%;
    }

    .responsive-menu-label {
        display: inline-block;
        font-weight: 600;
        margin: 0 5px;
        vertical-align: middle;
    }

    .responsive-menu-accessible {
        display: inline-block;
    }

    .responsive-menu-accessible .responsive-menu-box {
        display: inline-block;
        vertical-align: middle;
    }

    .responsive-menu-label.responsive-menu-label-top,
    .responsive-menu-label.responsive-menu-label-bottom
    {
        display: block;
        margin: 0 auto;
    }

    button#responsive-menu-button {
        padding: 0 0;
        display: inline-block;
        cursor: pointer;
        transition-property: opacity, filter;
        transition-duration: 0.15s;
        transition-timing-function: linear;
        font: inherit;
        color: inherit;
        text-transform: none;
        background-color: transparent;
        border: 0;
        margin: 0;
        overflow: visible;
    }

    .responsive-menu-box {
        width: 25px;
        height: 19px;
        display: inline-block;
        position: relative;
    }

    .responsive-menu-inner {
        display: block;
        top: 50%;
        margin-top: -1.5px;
    }

    .responsive-menu-inner,
    .responsive-menu-inner::before,
    .responsive-menu-inner::after {
         width: 25px;
         height: 3px;
         background-color: #ffffff;
         border-radius: 4px;
         position: absolute;
         transition-property: transform;
         transition-duration: 0.15s;
         transition-timing-function: ease;
    }

    .responsive-menu-open .responsive-menu-inner,
    .responsive-menu-open .responsive-menu-inner::before,
    .responsive-menu-open .responsive-menu-inner::after {
        background-color: #ffffff;
    }

    button#responsive-menu-button:hover .responsive-menu-inner,
    button#responsive-menu-button:hover .responsive-menu-inner::before,
    button#responsive-menu-button:hover .responsive-menu-inner::after,
    button#responsive-menu-button:hover .responsive-menu-open .responsive-menu-inner,
    button#responsive-menu-button:hover .responsive-menu-open .responsive-menu-inner::before,
    button#responsive-menu-button:hover .responsive-menu-open .responsive-menu-inner::after,
    button#responsive-menu-button:focus .responsive-menu-inner,
    button#responsive-menu-button:focus .responsive-menu-inner::before,
    button#responsive-menu-button:focus .responsive-menu-inner::after,
    button#responsive-menu-button:focus .responsive-menu-open .responsive-menu-inner,
    button#responsive-menu-button:focus .responsive-menu-open .responsive-menu-inner::before,
    button#responsive-menu-button:focus .responsive-menu-open .responsive-menu-inner::after {
        background-color: #ffffff;
    }

    .responsive-menu-inner::before,
    .responsive-menu-inner::after {
         content: "";
         display: block;
    }

    .responsive-menu-inner::before {
         top: -8px;
    }

    .responsive-menu-inner::after {
         bottom: -8px;
    }

            .responsive-menu-boring .responsive-menu-inner,
.responsive-menu-boring .responsive-menu-inner::before,
.responsive-menu-boring .responsive-menu-inner::after {
    transition-property: none;
}

.responsive-menu-boring.is-active .responsive-menu-inner {
    transform: rotate(45deg);
}

.responsive-menu-boring.is-active .responsive-menu-inner::before {
    top: 0;
    opacity: 0;
}

.responsive-menu-boring.is-active .responsive-menu-inner::after {
    bottom: 0;
    transform: rotate(-90deg);
}    
    button#responsive-menu-button {
        width: 55px;
        height: 55px;
        position: fixed;
        top: 15px;
        right: 5%;
                    background: #000000
            }

            .responsive-menu-open button#responsive-menu-button {
            background: #000000
        }
    
            .responsive-menu-open button#responsive-menu-button:hover,
        .responsive-menu-open button#responsive-menu-button:focus,
        button#responsive-menu-button:hover,
        button#responsive-menu-button:focus {
            background: #000000
        }
    
    button#responsive-menu-button .responsive-menu-box {
        color: #ffffff;
    }

    .responsive-menu-open button#responsive-menu-button .responsive-menu-box {
        color: #ffffff;
    }

    .responsive-menu-label {
        color: #ffffff;
        font-size: 14px;
        line-height: 13px;
            }

    button#responsive-menu-button {
        display: inline-block;
        transition: transform 0.5s, background-color 0.5s;
    }

    
    
    #responsive-menu-container {
        width: 75%;
        right: 0;
        transition: transform 0.5s;
        text-align: left;
                                            background: #212121;
            }

    #responsive-menu-container #responsive-menu-wrapper {
        background: #212121;
    }

    #responsive-menu-container #responsive-menu-additional-content {
        color: #ffffff;
    }

    #responsive-menu-container .responsive-menu-search-box {
        background: #ffffff;
        border: 2px solid #dadada;
        color: #333333;
    }

    #responsive-menu-container .responsive-menu-search-box:-ms-input-placeholder {
        color: #c7c7cd;
    }

    #responsive-menu-container .responsive-menu-search-box::-webkit-input-placeholder {
        color: #c7c7cd;
    }

    #responsive-menu-container .responsive-menu-search-box:-moz-placeholder {
        color: #c7c7cd;
        opacity: 1;
    }

    #responsive-menu-container .responsive-menu-search-box::-moz-placeholder {
        color: #c7c7cd;
        opacity: 1;
    }

    #responsive-menu-container .responsive-menu-item-link,
    #responsive-menu-container #responsive-menu-title,
    #responsive-menu-container .responsive-menu-subarrow {
        transition: background-color 0.5s, border-color 0.5s, color 0.5s;
    }

    #responsive-menu-container #responsive-menu-title {
        background-color: #212121;
        color: #ffffff;
        font-size: 13px;
    }

    #responsive-menu-container #responsive-menu-title a {
        color: #ffffff;
        font-size: 13px;
        text-decoration: none;
    }

    #responsive-menu-container #responsive-menu-title a:hover {
        color: #ffffff;
    }

    #responsive-menu-container #responsive-menu-title:hover {
        background-color: #212121;
        color: #ffffff;
    }

    #responsive-menu-container #responsive-menu-title:hover a {
        color: #ffffff;
    }

    #responsive-menu-container #responsive-menu-title #responsive-menu-title-image {
        display: inline-block;
        vertical-align: middle;
        margin-right: 15px;
    }

    #responsive-menu-container #responsive-menu > li.responsive-menu-item:first-child > a {
        border-top: 1px solid #212121;
    }

    #responsive-menu-container #responsive-menu li.responsive-menu-item .responsive-menu-item-link {
        font-size: 13px;
    }

    #responsive-menu-container #responsive-menu li.responsive-menu-item a {
        line-height: 40px;
        border-bottom: 1px solid #212121;
        color: #ffffff;
        background-color: #212121;
    }

    #responsive-menu-container #responsive-menu li.responsive-menu-item a:hover {
        color: #ffffff;
        background-color: #3f3f3f;
        border-color: #212121;
    }

    #responsive-menu-container #responsive-menu li.responsive-menu-item a:hover .responsive-menu-subarrow {
        color: #ffffff;
        border-color: #3f3f3f;
        background-color: #3f3f3f;
    }

    #responsive-menu-container #responsive-menu li.responsive-menu-item a .responsive-menu-subarrow {
        right: 0;
        height: 40px;
        line-height: 40px;
        width: 40px;
        color: #ffffff;
        border-left: 1px solid #212121;
        background-color: #212121;
    }

    #responsive-menu-container #responsive-menu li.responsive-menu-item a .responsive-menu-subarrow.responsive-menu-subarrow-active {
        color: #ffffff;
        border-color: #212121;
        background-color: #212121;
    }

    #responsive-menu-container #responsive-menu li.responsive-menu-item a .responsive-menu-subarrow.responsive-menu-subarrow-active:hover {
        color: #ffffff;
        border-color: #3f3f3f;
        background-color: #3f3f3f;
    }

    #responsive-menu-container #responsive-menu li.responsive-menu-item a .responsive-menu-subarrow:hover {
        color: #ffffff;
        border-color: #3f3f3f;
        background-color: #3f3f3f;
    }

    #responsive-menu-container #responsive-menu li.responsive-menu-current-item > .responsive-menu-item-link {
        background-color: #212121;
        color: #ffffff;
        border-color: #212121;
    }

    #responsive-menu-container #responsive-menu li.responsive-menu-current-item > .responsive-menu-item-link:hover {
        background-color: #3f3f3f;
        color: #ffffff;
        border-color: #3f3f3f;
    }

    
    }</style><script>jQuery(document).ready(function($) {

    var ResponsiveMenu = {
        trigger: '#responsive-menu-button',
        animationSpeed: 500,
        breakpoint: 1060,
        pushButton: 'off',
        animationType: 'slide',
        animationSide: 'right',
        pageWrapper: '',
        isOpen: false,
        triggerTypes: 'click',
        activeClass: 'is-active',
        container: '#responsive-menu-container',
        openClass: 'responsive-menu-open',
        accordion: 'off',
        activeArrow: '▲',
        inactiveArrow: '▼',
        wrapper: '#responsive-menu-wrapper',
        closeOnBodyClick: 'off',
        closeOnLinkClick: 'off',
        itemTriggerSubMenu: 'off',
        linkElement: '.responsive-menu-item-link',
        openMenu: function() {
            $(this.trigger).addClass(this.activeClass);
            $('html').addClass(this.openClass);
            $('.responsive-menu-button-icon-active').hide();
            $('.responsive-menu-button-icon-inactive').show();
            this.setWrapperTranslate();
            this.isOpen = true;
        },
        closeMenu: function() {
            $(this.trigger).removeClass(this.activeClass);
            $('html').removeClass(this.openClass);
            $('.responsive-menu-button-icon-inactive').hide();
            $('.responsive-menu-button-icon-active').show();
            this.clearWrapperTranslate();
            this.isOpen = false;
        },
        triggerMenu: function() {
            this.isOpen ? this.closeMenu() : this.openMenu();
        },
        triggerSubArrow: function(subarrow) {
            var sub_menu = $(subarrow).parent().next('.responsive-menu-submenu');
            var self = this;
            if(this.accordion == 'on') {
                /* Get Top Most Parent and the siblings */
                var top_siblings = sub_menu.parents('.responsive-menu-item-has-children').last().siblings('.responsive-menu-item-has-children');
                var first_siblings = sub_menu.parents('.responsive-menu-item-has-children').first().siblings('.responsive-menu-item-has-children');
                /* Close up just the top level parents to key the rest as it was */
                top_siblings.children('.responsive-menu-submenu').slideUp(200, 'linear').removeClass('responsive-menu-submenu-open');
                /* Set each parent arrow to inactive */
                top_siblings.each(function() {
                    $(this).find('.responsive-menu-subarrow').first().html(self.inactiveArrow);
                    $(this).find('.responsive-menu-subarrow').first().removeClass('responsive-menu-subarrow-active');
                });
                /* Now Repeat for the current item siblings */
                first_siblings.children('.responsive-menu-submenu').slideUp(200, 'linear').removeClass('responsive-menu-submenu-open');
                first_siblings.each(function() {
                    $(this).find('.responsive-menu-subarrow').first().html(self.inactiveArrow);
                    $(this).find('.responsive-menu-subarrow').first().removeClass('responsive-menu-subarrow-active');
                });
            }
            if(sub_menu.hasClass('responsive-menu-submenu-open')) {
                sub_menu.slideUp(200, 'linear').removeClass('responsive-menu-submenu-open');
                $(subarrow).html(this.inactiveArrow);
                $(subarrow).removeClass('responsive-menu-subarrow-active');
            } else {
                sub_menu.slideDown(200, 'linear').addClass('responsive-menu-submenu-open');
                $(subarrow).html(this.activeArrow);
                $(subarrow).addClass('responsive-menu-subarrow-active');
            }
        },
        menuHeight: function() {
            return $(this.container).height();
        },
        menuWidth: function() {
            return $(this.container).width();
        },
        wrapperHeight: function() {
            return $(this.wrapper).height();
        },
        setWrapperTranslate: function() {
            switch(this.animationSide) {
                case 'left':
                    translate = 'translateX(' + this.menuWidth() + 'px)'; break;
                case 'right':
                    translate = 'translateX(-' + this.menuWidth() + 'px)'; break;
                case 'top':
                    translate = 'translateY(' + this.wrapperHeight() + 'px)'; break;
                case 'bottom':
                    translate = 'translateY(-' + this.menuHeight() + 'px)'; break;
            }
            if(this.animationType == 'push') {
                $(this.pageWrapper).css({'transform':translate});
                $('html, body').css('overflow-x', 'hidden');
            }
            if(this.pushButton == 'on') {
                $('#responsive-menu-button').css({'transform':translate});
            }
        },
        clearWrapperTranslate: function() {
            var self = this;
            if(this.animationType == 'push') {
                $(this.pageWrapper).css({'transform':''});
                setTimeout(function() {
                    $('html, body').css('overflow-x', '');
                }, self.animationSpeed);
            }
            if(this.pushButton == 'on') {
                $('#responsive-menu-button').css({'transform':''});
            }
        },
        init: function() {
            var self = this;
            $(this.trigger).on(this.triggerTypes, function(e){
                e.stopPropagation();
                self.triggerMenu();
            });
            $(this.trigger).mouseup(function(){
                $(self.trigger).blur();
            });
            $('.responsive-menu-subarrow').on('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                self.triggerSubArrow(this);
            });
            $(window).resize(function() {
                if($(window).width() > self.breakpoint) {
                    if(self.isOpen){
                        self.closeMenu();
                    }
                } else {
                    if($('.responsive-menu-open').length>0){
                        self.setWrapperTranslate();
                    }
                }
            });
            if(this.closeOnLinkClick == 'on') {
                $(this.linkElement).on('click', function(e) {
                    e.preventDefault();
                    /* Fix for when close menu on parent clicks is on */
                    if(self.itemTriggerSubMenu == 'on' && $(this).is('.responsive-menu-item-has-children > ' + self.linkElement)) {
                        return;
                    }
                    old_href = $(this).attr('href');
                    old_target = typeof $(this).attr('target') == 'undefined' ? '_self' : $(this).attr('target');
                    if(self.isOpen) {
                        if($(e.target).closest('.responsive-menu-subarrow').length) {
                            return;
                        }
                        self.closeMenu();
                        setTimeout(function() {
                            window.open(old_href, old_target);
                        }, self.animationSpeed);
                    }
                });
            }
            if(this.closeOnBodyClick == 'on') {
                $(document).on('click', 'body', function(e) {
                    if(self.isOpen) {
                        if($(e.target).closest('#responsive-menu-container').length || $(e.target).closest('#responsive-menu-button').length) {
                            return;
                        }
                    }
                    self.closeMenu();
                });
            }
            if(this.itemTriggerSubMenu == 'on') {
                $('.responsive-menu-item-has-children > ' + this.linkElement).on('click', function(e) {
                    e.preventDefault();
                    self.triggerSubArrow($(this).children('.responsive-menu-subarrow').first());
                });
            }
        }
    };
    ResponsiveMenu.init();
});</script>
<!-- Easy FancyBox 1.6 using FancyBox 1.3.8 - RavanH (http://status301.net/wordpress-plugins/easy-fancybox/) -->
<script type="text/javascript">
/* <![CDATA[ */
var fb_timeout = null;
var fb_opts = { 'overlayShow' : true, 'hideOnOverlayClick' : true, 'showCloseButton' : true, 'margin' : 20, 'centerOnScroll' : true, 'enableEscapeButton' : true, 'autoScale' : true };
var easy_fancybox_handler = function(){
	/* IMG */
	var fb_IMG_select = 'a[href*=".jpg"]:not(.nolightbox,li.nolightbox>a), area[href*=".jpg"]:not(.nolightbox), a[href*=".jpeg"]:not(.nolightbox,li.nolightbox>a), area[href*=".jpeg"]:not(.nolightbox), a[href*=".png"]:not(.nolightbox,li.nolightbox>a), area[href*=".png"]:not(.nolightbox), a[href*=".webp"]:not(.nolightbox,li.nolightbox>a), area[href*=".webp"]:not(.nolightbox)';
	jQuery(fb_IMG_select).addClass('fancybox image');
	var fb_IMG_sections = jQuery('div.gallery ');
	fb_IMG_sections.each(function() { jQuery(this).find(fb_IMG_select).attr('rel', 'gallery-' + fb_IMG_sections.index(this)); });
	jQuery('a.fancybox, area.fancybox, li.fancybox a').fancybox( jQuery.extend({}, fb_opts, { 'transitionIn' : 'elastic', 'easingIn' : 'easeOutBack', 'transitionOut' : 'elastic', 'easingOut' : 'easeInBack', 'opacity' : false, 'hideOnContentClick' : false, 'titleShow' : true, 'titlePosition' : 'over', 'titleFromAlt' : true, 'showNavArrows' : true, 'enableKeyboardNav' : true, 'cyclic' : false }) );
}
var easy_fancybox_auto = function(){
	/* Auto-click */
	setTimeout(function(){jQuery('#fancybox-auto').trigger('click')},1000);
}
/* ]]> */
</script>
</head>

<body class="page-template page-template-dat-phong page-template-dat-phong-php page page-id-7 group-blog has-header-image page-two-column colors-light responsive-menu-slide-right">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1670203149973985";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<a href="tel:0396266666" onclick="_gaq.push(['_trackEvent', 'Contact', 'Call Now Button', 'Phone']);"  id="callnowbutton">
	<img src="http://suncitynhatrang.vn/wp-content/themes/twentyseventeen/images/ic-hotline.png" alt="Hotline">
</a>

<div class="wrap-site">
	<div class="wrap-header col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
		<div class="header-top col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
			<div class="wrap">
				<div class="logo">
                    <?php
                        $sql = "SELECT * FROM websetting WHERE id = 1";
                        $trave = mysqli_query($connect, $sql);
                        $row = mysqli_fetch_array(mysqli_query($connect, $sql));
                            ?>
                                <a href="./index.php" title="Suncity Nha Trang Hotel"><img src="<?php echo $row['logo'] ?>" alt="Suncity Nha Trang Hotel"></a>
                            <?php
                    ?>
				</div>
				<div class="wrap-menu">
					<div class="menu-header">
						<div class="menu-main-menu-container"><ul id="menu-main-menu" class="menu"><li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="./index.php">Trang chủ</a></li>
<li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="./gioi_thieu.php">Giới thiệu & Dịch vụ</a></li>
<li id="menu-item-17" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17"><a href="">Tin tức</a></li>
<!-- <li id="menu-item-16" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16"><a href="http://suncitynhatrang.vn/khuyen-mai">Dịch vụ</a></li> -->
<!-- <li id="menu-item-15" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15"><a href="http://suncitynhatrang.vn/hinh-anh">Hình ảnh</a></li> -->
<li id="menu-item-12" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12"><a href="">Liên hệ</a></li>
</ul></div>					</div>
					<div class="menu-mobile"><button id="responsive-menu-button"
        class="responsive-menu-button responsive-menu-boring
         responsive-menu-accessible"
        type="button"
        aria-label="Menu">

    
    <span class="responsive-menu-box">
        <span class="responsive-menu-inner"></span>
    </span>

    </button><div id="responsive-menu-container" class="slide-right">
    <div id="responsive-menu-wrapper">
                                                        <ul id="responsive-menu" class=""><li id="responsive-menu-item-112" class=" menu-item menu-item-type-custom menu-item-object-custom responsive-menu-item"><a href="/" class="responsive-menu-item-link">Trang chủ</a></li><li id="responsive-menu-item-114" class=" menu-item menu-item-type-post_type menu-item-object-page responsive-menu-item"><a href="http://suncitynhatrang.vn/gioi-thieu" class="responsive-menu-item-link">Giới thiệu</a></li><li id="responsive-menu-item-119" class=" menu-item menu-item-type-taxonomy menu-item-object-category responsive-menu-item"><a href="http://suncitynhatrang.vn/loai-phong" class="responsive-menu-item-link">Loại phòng</a></li><li id="responsive-menu-item-118" class=" menu-item menu-item-type-taxonomy menu-item-object-category responsive-menu-item"><a href="http://suncitynhatrang.vn/khuyen-mai" class="responsive-menu-item-link">Khuyến mãi</a></li><li id="responsive-menu-item-116" class=" menu-item menu-item-type-taxonomy menu-item-object-category responsive-menu-item"><a href="http://suncitynhatrang.vn/dich-vu-va-tien-nghi" class="responsive-menu-item-link">Dịch vụ và tiện nghi</a></li><li id="responsive-menu-item-117" class=" menu-item menu-item-type-taxonomy menu-item-object-category responsive-menu-item"><a href="http://suncitynhatrang.vn/hinh-anh" class="responsive-menu-item-link">Hình ảnh</a></li><li id="responsive-menu-item-120" class=" menu-item menu-item-type-taxonomy menu-item-object-category responsive-menu-item"><a href="http://suncitynhatrang.vn/tin-tuc-su-kien" class="responsive-menu-item-link">Tin tức &#8211; Sự kiện</a></li><li id="responsive-menu-item-115" class=" menu-item menu-item-type-post_type menu-item-object-page responsive-menu-item"><a href="http://suncitynhatrang.vn/lien-he" class="responsive-menu-item-link">Liên hệ</a></li></ul>                                                                </div>
</div>
</div>
				</div>
				<div class="language">
					<div class="menu-language-container"><ul id="menu-language" class="menu"><li id="menu-item-28" class="ngon-ngu qtranxs-lang-menu qtranxs-lang-menu-vi menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-28"><a title="Tiếng Việt" href="#"><img src="http://suncitynhatrang.vn/wp-content/plugins/qtranslate-x/flags/vn.png" alt="Tiếng Việt" /></a>
<ul  class="sub-menu">
	<li id="menu-item-30" class="qtranxs-lang-menu-item qtranxs-lang-menu-item-vi menu-item menu-item-type-custom menu-item-object-custom menu-item-30"><a title="Tiếng Việt" href="http://suncitynhatrang.vn/vi/dat-phong"><img src="http://suncitynhatrang.vn/wp-content/plugins/qtranslate-x/flags/vn.png" alt="Tiếng Việt" />&nbsp;Tiếng Việt</a></li>
	<li id="menu-item-31" class="qtranxs-lang-menu-item qtranxs-lang-menu-item-en menu-item menu-item-type-custom menu-item-object-custom menu-item-31"><a title="English" href="http://suncitynhatrang.vn/en/dat-phong"><img src="http://suncitynhatrang.vn/wp-content/plugins/qtranslate-x/flags/gb.png" alt="English" />&nbsp;English</a></li>
</ul>
</li>
<!-- <li id="menu-item-29" class="dat-phong menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-7 current_page_item menu-item-29"><a href="http://suncitynhatrang.vn/dat-phong">Đặt phòng</a></li> -->
</ul></div>				</div>
			</div>
		</div>
			</div>
	<div class="wrap-datphong col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
		<div class="single-datphong">
			<div class="title-datphong col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
            <div class="MuiBox-root jss120 jss1">
    <div class="MuiBox-root jss121 jss2">
        <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM room_type WHERE idroom = $id";
            $row = mysqli_fetch_array(mysqli_query($connect, $sql));
        ?>
        <div class="MuiBox-root jss167" id="rooms_overview">
            <div class="MuiBox-root jss168 jss122">
                <div class="MuiBox-root jss169" style="border-radius:4px;margin-right:12px">
                    <p class="MuiTypography-root jss124 MuiTypography-body1">Giá độc quyền</p>
                </div>
                <div class="MuiBox-root jss170" style="border-radius:4px;height:24px"></div>
            </div>
            <div class="MuiBox-root jss171 jss141">
                <div class="MuiBox-root jss172 jss142">
                    <div class="MuiBox-root jss173">
                        <div class="MuiBox-root jss174 jss127" style="margin-top:12px"><?php echo $row['roomname'] ?><div class="MuiBox-root jss175"><div class="MuiBox-root jss176 jss128">
                            <div class="MuiBox-root jss179 jss177">
                                <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="svgFillAll jss178" style="stroke:#FFBC39;fill:#FFBC39">
                                    <path d="M11.463 4.684a1.055 1.055 0 00-.849-.719L8.077 3.6 6.939 1.31a1.05 1.05 0 00-1.88 0L3.924 3.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.501L2.64 7.534l-.433 2.51a1.05 1.05 0 001.521 1.107L6 9.963l2.274 1.19a1.05 1.05 0 001.521-1.108l-.435-2.51 1.833-1.777a1.05 1.05 0 00.27-1.074z" fill="#FFBC39"></path>
                                </svg>
                                <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="svgFillAll jss178" style="stroke:#FFBC39;fill:#FFBC39">
                                    <path d="M11.463 4.684a1.055 1.055 0 00-.849-.719L8.077 3.6 6.939 1.31a1.05 1.05 0 00-1.88 0L3.924 3.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.501L2.64 7.534l-.433 2.51a1.05 1.05 0 001.521 1.107L6 9.963l2.274 1.19a1.05 1.05 0 001.521-1.108l-.435-2.51 1.833-1.777a1.05 1.05 0 00.27-1.074z" fill="#FFBC39"></path>
                                </svg>
                                <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="svgFillAll jss178" style="stroke:#FFBC39;fill:#FFBC39">
                                    <path d="M11.463 4.684a1.055 1.055 0 00-.849-.719L8.077 3.6 6.939 1.31a1.05 1.05 0 00-1.88 0L3.924 3.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.501L2.64 7.534l-.433 2.51a1.05 1.05 0 001.521 1.107L6 9.963l2.274 1.19a1.05 1.05 0 001.521-1.108l-.435-2.51 1.833-1.777a1.05 1.05 0 00.27-1.074z" fill="#FFBC39"></path>
                                </svg>
                                <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="svgFillAll jss178" style="stroke:#FFBC39;fill:#FFBC39">
                                    <path d="M11.463 4.684a1.055 1.055 0 00-.849-.719L8.077 3.6 6.939 1.31a1.05 1.05 0 00-1.88 0L3.924 3.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.501L2.64 7.534l-.433 2.51a1.05 1.05 0 001.521 1.107L6 9.963l2.274 1.19a1.05 1.05 0 001.521-1.108l-.435-2.51 1.833-1.777a1.05 1.05 0 00.27-1.074z" fill="#FFBC39"></path>
                                </svg>
                                <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="svgFillAll jss178" style="stroke:#FFBC39;fill:#FFBC39">
                                    <path d="M11.463 4.684a1.055 1.055 0 00-.849-.719L8.077 3.6 6.939 1.31a1.05 1.05 0 00-1.88 0L3.924 3.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.501L2.64 7.534l-.433 2.51a1.05 1.05 0 001.521 1.107L6 9.963l2.274 1.19a1.05 1.05 0 001.521-1.108l-.435-2.51 1.833-1.777a1.05 1.05 0 00.27-1.074z" fill="#FFBC39"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="MuiBox-root jss180" style="margin-left:12px;margin-top:8px"></div>
                    </div>
                </div>
                <div class="MuiBox-root jss181 jss126">
                    <div class="MuiBox-root jss182">
                        <div class="jss8999">
                            <div style = "color: red;" class="jss9001"><strong><?php echo $row['khoanggia'] ?></strong></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="MuiBox-root jss183 jss129">
                <div class="MuiBox-root jss184 jss130">8.4</div>
                <div class="MuiBox-root jss185 jss131">Rất tốt<span class="MuiBox-root jss186 jss132"> <span class="MuiTypography-root jss132 MuiTypography-body1">(<!-- -->450<!-- --> <!-- -->đánh giá)</span></span> <div class="MuiBox-root jss187 jss152"></div>
                    <div class="jss188 jss163">
                        <div class="jss189" style="border-radius:0"></div>
                        <div class="lazyload-wrapper ">
                            <div class="lazyload-placeholder"></div>
                        </div>
                    </div><span class="MuiBox-root jss193 jss134"></span>
                </div>
            </div>
        <div class="MuiBox-root jss194 jss135">
            <div class="MuiBox-root jss195 jss136">
                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 9.333a2 2 0 100-4 2 2 0 000 4z" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M11.771 11.105l-2.828 2.828a1.333 1.333 0 01-1.885 0l-2.83-2.828a5.333 5.333 0 117.543 0v0z" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
            <div class="MuiBox-root jss196 jss137"><?php echo $row['diachi'] ?></div>
            <span class="MuiBox-root jss197 jss134 jss138"> <!-- --></span>
        </div>
    </div>
</div>
<div class="MuiBox-root jss198 jss144">
    <div class="MuiGrid-root MuiGrid-container">
        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-sm-6 MuiGrid-grid-md-6 MuiGrid-grid-lg-6">
            <div class="MuiBox-root jss199" style="position:relative;padding-right:4px">
                <div class="jss188 jss146">
                    <div class="jss189" style="border-radius:8px 0px 0px 8px"><img style = "height: 360px; width: 590px;" src="<?php echo $row['image1'] ?>" alt=""></div>
                    <div class="lazyload-wrapper ">
                        <div class="lazyload-placeholder"></div>
                    </div>
                </div>
                <div class="MuiBox-root jss200">
                    <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_tag_the_best.svg" class="jss164" alt="Best of The Best"/>
                </div>
                <div class="MuiBox-root jss203 jss153">
                    <button class="MuiButtonBase-root MuiIconButton-root jss154" tabindex="0" type="button">
                        <span class="MuiIconButton-label">
                            <svg width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg" class="svgFillAll jss156">
                                <g filter="url(#icon_heart_svg__filter0_d)">
                                    <path d="M9.318 3c-1.479 0-2.897.661-3.895 1.811C4.259 6.16 3.786 8.054 4.09 10.15c.683 4.708 5.546 8.674 9.911 10.468 4.363-1.794 9.223-5.76 9.91-10.468.303-2.096-.17-3.991-1.334-5.339C21.581 3.661 20.161 3 18.684 3c-1.49 0-2.885.68-3.929 1.915l-.75.89-.752-.89C12.204 3.681 10.81 3 9.318 3z" fill="#000" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <defs>
                                    <filter id="icon_heart_svg__filter0_d" x="-1" y="0" width="30" height="30" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                        <feOffset dy="3"></feOffset>
                                        <feGaussianBlur stdDeviation="1.5"></feGaussianBlur>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"></feColorMatrix>
                                        <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                        <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                    </filter>
                                </defs>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-sm-6 MuiGrid-grid-md-6 MuiGrid-grid-lg-6">
            <div class="MuiGrid-root MuiGrid-container">
                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-sm-6 MuiGrid-grid-md-6 MuiGrid-grid-lg-6">
                    <div class="jss188 jss148">
                        <div class="jss189" style="border-radius:0"><img style = "width: 300px; height: 178px;" src="<?php echo $row['image2'] ?>" alt=""></div>
                        <div class="lazyload-wrapper ">
                            <div class="lazyload-placeholder"></div>
                        </div>
                    </div>
                </div>
                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-sm-6 MuiGrid-grid-md-6 MuiGrid-grid-lg-6">
                    <div class="jss188 jss148">
                        <div class="jss189" style="border-radius:0"><img style = "width: 292px; height: 178px; marg in-left: 3px;" src="<?php echo $row['image3'] ?>" alt=""></div>
                        <div class="lazyload-wrapper ">
                            <div class="lazyload-placeholder"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="MuiGrid-root MuiGrid-container" style="padding-top:4px">
                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-sm-6 MuiGrid-grid-md-6 MuiGrid-grid-lg-6">
                    <div class="jss188 jss148">
                        <div class="jss189" style="border-radius:0"><img style = "width: 300px; height: 180px;" src="<?php echo $row['image4'] ?>" alt=""></div>
                        <div class="lazyload-wrapper ">
                            <div class="lazyload-placeholder"></div>
                        </div>
                    </div>
                </div>
                <div class="MuiGrid-root jss150 MuiGrid-item MuiGrid-grid-sm-6 MuiGrid-grid-md-6 MuiGrid-grid-lg-6">
                    <div class="MuiBox-root jss204 jss151">
                        <div class="jss188 jss148">
                            <div class="jss189" style="border-radius:0"><img style = "width: 292px; height: 180px; margin-left: -4px;" src="<?php echo $row['image5'] ?>" alt=""></div>
                            <div class="lazyload-wrapper ">
                                <div class="lazyload-placeholder"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end MuiBox-root jss167 -->
<div class="MuiBox-root jss239 jss209">
    <div class="MuiGrid-root MuiGrid-container">
        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-sm-6 MuiGrid-grid-md-6 MuiGrid-grid-lg-6">
            <div class="MuiBox-root jss240 jss210">
                <div class="MuiBox-root jss241 jss211">
                    <div class="MuiBox-root jss242">Tiện nghi khách sạn</div>
                    <div class="MuiBox-root jss243 jss212"></div>
                </div>
                <div class="MuiBox-root jss244">
                    <div class="MuiBox-root jss245">
                        <div class="MuiBox-root jss246" style="flex-wrap:wrap;margin-top:24px">
                            <div class="MuiBox-root jss247">
                                <div class="MuiBox-root jss248 jss215">
                                    <img src="https://storage.googleapis.com/tripi-assets/images/hotel/amenity/payment_jcb.png" class="jss217" alt=""/>
                                    <span class="MuiBox-root jss249 jss218">American Express</span>
                                </div>
                            </div>
                            <div class="MuiBox-root jss250">
                                <div class="MuiBox-root jss251 jss215">
                                    <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/thethao/gym.png" class="jss217" alt=""/>
                                    <span class="MuiBox-root jss252 jss218">Phòng gym</span>
                                </div>
                            </div>
                            <div class="MuiBox-root jss253">
                                <div class="MuiBox-root jss254 jss215">
                                    <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/letan/reception-hotel-24h.svg" class="jss217" alt=""/>
                                    <span class="MuiBox-root jss255 jss218">Lễ tân 24h</span>
                                </div>
                            </div>
                            <div class="MuiBox-root jss256">
                                <div class="MuiBox-root jss257 jss215">
                                    <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/letan/dat-ve-may-bay.png" class="jss217" alt=""/>
                                    <span class="MuiBox-root jss258 jss218">Đặt vé xe/máy bay</span>
                                </div>
                            </div>
                            <div class="MuiBox-root jss259">
                                <div class="MuiBox-root jss260 jss215">
                                    <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/letan/doi-ngoai-te.png" class="jss217" alt=""/>
                                    <span class="MuiBox-root jss261 jss218">Thu đổi ngoại tệ</span>
                                </div>
                            </div>
                            <div class="MuiBox-root jss262">
                                <div class="MuiBox-root jss263 jss215">
                                    <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/letan/dat-tour.png" class="jss217" alt=""/>
                                    <span class="MuiBox-root jss264 jss218">Bán tour</span>
                                </div>
                            </div>
                            <div class="MuiBox-root jss265">
                                <div class="MuiBox-root jss266 jss215">
                                    <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/internet/Amenities_wifi.png" class="jss217" alt=""/>
                                    <span class="MuiBox-root jss267 jss218">Internet miễn phí.</span>
                                </div>
                            </div>
                            <div class="MuiBox-root jss268">
                                <div class="MuiBox-root jss269 jss215">
                                    <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/thuagianlamdep/xong-hoi.png" class="jss217" alt=""/>
                                    <span class="MuiBox-root jss270 jss218">Phòng xông hơi ướt</span>
                                </div>
                            </div>
                            <div class="MuiBox-root jss271">
                                <div class="MuiBox-root jss272 jss215">
                                    <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/thuagianlamdep/spa-stone 1.png" class="jss217" alt=""/>
                                    <span class="MuiBox-root jss273 jss218">Spa</span>
                                </div>
                            </div>
                            <!-- <div class="MuiBox-root jss274 jss216">
                                <span class="MuiBox-root jss275">+19</span>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-sm-6 MuiGrid-grid-md-6 MuiGrid-grid-lg-6">
            <div class="MuiBox-root jss276 jss233">
                <div class="MuiBox-root jss277 jss224">
                    <div class="MuiBox-root jss278 jss225 jss226">
                        <div class="MuiBox-root jss279 jss230">Vị trí</div>
                        <div class="MuiBox-root jss280 jss228">
                            <div class="MuiLinearProgress-root jss281 MuiLinearProgress-colorPrimary jss282 MuiLinearProgress-determinate" role="progressbar" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100">
                                <div class="MuiLinearProgress-bar jss283 MuiLinearProgress-barColorPrimary MuiLinearProgress-bar1Determinate" style="transform:translateX(-16%)">
                                </div>
                            </div>
                        </div>
                        <p class="MuiTypography-root jss229 MuiTypography-body1">8.4</p>
                    </div>
                    <div class="MuiBox-root jss284 jss225">
                        <div class="MuiBox-root jss285 jss230">Giá cả</div>
                        <div class="MuiBox-root jss286 jss228">
                            <div class="MuiLinearProgress-root jss281 MuiLinearProgress-colorPrimary jss282 MuiLinearProgress-determinate" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                <div class="MuiLinearProgress-bar jss283 MuiLinearProgress-barColorPrimary MuiLinearProgress-bar1Determinate" style="transform:translateX(-14%)"></div>
                            </div>
                        </div>
                        <p class="MuiTypography-root jss229 MuiTypography-body1">8.6</p>
                    </div>
                    <div class="MuiBox-root jss287 jss225">
                        <div class="MuiBox-root jss288 jss230">Phục vụ</div>
                        <div class="MuiBox-root jss289 jss228">
                            <div class="MuiLinearProgress-root jss281 MuiLinearProgress-colorPrimary jss282 MuiLinearProgress-determinate" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                <div class="MuiLinearProgress-bar jss283 MuiLinearProgress-barColorPrimary MuiLinearProgress-bar1Determinate" style="transform:translateX(-11.999999999999986%)"></div>
                            </div>
                        </div>
                        <p class="MuiTypography-root jss229 MuiTypography-body1">8.8</p>
                    </div>
                    <div class="MuiBox-root jss290 jss225">
                        <div class="MuiBox-root jss291 jss230">Vệ sinh</div>
                        <div class="MuiBox-root jss292 jss228">
                            <div class="MuiLinearProgress-root jss281 MuiLinearProgress-colorPrimary jss282 MuiLinearProgress-determinate" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <div class="MuiLinearProgress-bar jss283 MuiLinearProgress-barColorPrimary MuiLinearProgress-bar1Determinate" style="transform:translateX(-10%)"></div>
                            </div>
                        </div>
                        <p class="MuiTypography-root jss229 MuiTypography-body1">9.0</p>
                    </div>
                    <div class="MuiBox-root jss293 jss225 jss226 jss227">
                        <div class="MuiBox-root jss294 jss230">Tiện nghi</div>
                        <div class="MuiBox-root jss295 jss228">
                            <div class="MuiLinearProgress-root jss281 MuiLinearProgress-colorPrimary jss282 MuiLinearProgress-determinate" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                <div class="MuiLinearProgress-bar jss283 MuiLinearProgress-barColorPrimary MuiLinearProgress-bar1Determinate" style="transform:translateX(-14%)"></div>
                            </div>
                        </div>
                        <p class="MuiTypography-root jss229 MuiTypography-body1">8.6</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
        </div>
			<div class="wrap">


				<div class="left col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
											<div class="content-datphong col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
							<!-- AddThis Sharing Buttons above --><div role="form" class="wpcf7" id="wpcf7-f5-p7-o1" lang="vi" dir="ltr">
<div class="screen-reader-response"></div>
</div>
<div class="chonphong">
<style>
        .chonphong{
            display: grid;
            grid-template-columns: 30% 1fr;
            margin-top: 30px;
        }
        .jjs111 img{
            width: 90%;
        }
        .jjs112 img{
            width: 29.15%;
            margin-top: 3px;
        }
        .jjs2{
            display: grid;
            grid-template-rows: 10% 1fr 1fr;
        }
        .jjs22, .jjs23{
            display: grid;
            grid-template-columns: 40% 25% 35%;
        }
        .jjs231, .jjs221, .jjs224, .jjs234{
            padding: 20px;
        }
        .jjs232, .jjs222{
            margin-top: 60px;
        }
        .jss234, .jss224{
            margin-top: 40px;
        }
    </style>
        <div class="jjs1">
            <div class="jjs11">
                <div class="jjs111">
                    <img src="<?php echo $row['image1'] ?>" alt="">
                </div>
                <div class="jjs112">
                    <img src="<?php echo $row['image2'] ?>" alt="">
                    <img src="<?php echo $row['image3'] ?>" alt="">
                    <img src="<?php echo $row['image4'] ?>" alt="">
                </div>
            </div>
            <div class="jjs12">
                <p>tiện nghi khách sạn</p>
            </div>
        </div>
        <div class="jjs2">
            <div class="jjs21">
                <h3 style = "font-weight: bold; margin-left: 20px">Park Room City View (Ipad trong phòng)</h3>
            </div>
            <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM luachon WHERE idroom = $id";
                $trave = mysqli_query($connect, $sql);
                while($row = $trave->fetch_assoc()){
                    ?>
                        <div class="jjs22">
                            <div class="jjs221">
                                <p style="font-weight: bold;"><?php echo $row['tenluachon'] ?></p>
                                <p><?php echo $row['dientich'] ?></p>
                                <p><?php echo $row['dichvuphong'] ?></p>
                                <p style="color: red;"><?php echo $row['tinhtrang'] ?></p>
                            </div>
                            <div class="jjs222">
                                <span><?php echo $row['sogiuong'] ?></span>
                            </div>
                            <div class="jss224">
                                <p style="text-decoration-line: line-through;"><?php echo number_format($row['gia']) ?>đ/Đêm</p>
                                <p style="font-weight: bold; color: red;"><?php echo number_format($row['giakm']) ?>đ/Đêm</p>
                                <a href="./dat_phong.php?id=<?php echo $row['idroom'] ?>&idlc=<?php echo $row['idluachon'] ?>"><button style="background-color: red; font-weight: bold;" type="submit" class="btn btn-primary">Đặt phòng</button></a>
                            </div>
                        </div>
                    <?php
                }
            ?>
            
            <!-- <div class="jjs22">
                <div class="jjs221">
                    <p style="font-weight: bold;">Lựa chọn 2</p>
                    <p>43m2</p>
                    <p>Không hỗ trợ hoàn hủy</p>
                    <p>Bữa sáng miễn phí</p>
                    <p style="color: red;">còn 2 phòng trống</p>
                </div>
                <div class="jjs222">
                    <span>1 giường đôi 3 giường đơn</span>
                </div>
                <div class="jss224">
                    <p style="text-decoration-line: line-through;"><?php echo $row['gia'] ?></p>
                    <p style="font-weight: bold; color: red;"><?php echo $row['giakm'] ?></p>
                    <a href="./dat_phong.php?id=<?php echo $row['idroom'] ?>"><button style="background-color: red; font-weight: bold;" type="submit" class="btn btn-primary">Đặt phòng</button></a>
                </div>
            </div>
            <div class="jjs22">
                <div class="jjs221">
                    <p style="font-weight: bold;">Lựa chọn 3</p>
                    <p>40m2</p>
                    <p>Không hỗ trợ hoàn hủy</p>
                    <p>Bữa sáng + trưa miễn phí</p>
                    <p style="color: red;">còn 1 phòng trống</p>
                </div>
                <div class="jjs222">
                    <span>2 giường đôi 1 giường đơn</span>
                </div>
                <div class="jss224">
                    <p style="text-decoration-line: line-through;"><?php echo $row['gia'] ?></p>
                    <p style="font-weight: bold; color: red;"><?php echo $row['giakm'] ?></p>
                    <a href="./dat_phong.php?id=<?php echo $row['idroom'] ?>"><button style="background-color: red; font-weight: bold;" type="submit" class="btn btn-primary">Đặt phòng</button></a>
                </div>
            </div>
            <div class="jjs22">
                <div class="jjs221">
                    <p style="font-weight: bold;">Lựa chọn 4</p>
                    <p>40m2</p>
                    <p>Không hỗ trợ hoàn hủy</p>
                    <p>Bữa sáng + khu vui chơi trẻ em miễn phí</p>
                    <p style="color: red;">còn 3 phòng trống</p>
                </div>
                <div class="jjs222">
                    <span>Hai giường đôi</span>
                </div>
                <div class="jss224">
                    <p style="text-decoration-line: line-through;"><?php echo $row['gia'] ?></p>
                    <p style="font-weight: bold; color: red;"><?php echo $row['giakm'] ?></p>
                    <a href="./dat_phong.php?id=<?php echo $row['idroom'] ?>"><button style="background-color: red; font-weight: bold;" type="submit" class="btn btn-primary">Đặt phòng</button></a>
                </div>
            </div>  -->
        </div>
    </div>
<!-- AddThis Sharing Buttons below -->						</div>

</div>
				<div class="right col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
					<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
													<!-- <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
								<div class="img-phong">
									<a href="http://suncitynhatrang.vn/loai-phong/phong-standard.html" title="STANDARD (KHÔNG CỬA SỔ)"><img width="1600" height="1025" src="http://suncitynhatrang.vn/wp-content/uploads/2017/06/STANDARD-DOUBLE1.jpg" class="attachment-full size-full wp-post-image" alt="" srcset="http://suncitynhatrang.vn/wp-content/uploads/2017/06/STANDARD-DOUBLE1.jpg 1600w, http://suncitynhatrang.vn/wp-content/uploads/2017/06/STANDARD-DOUBLE1-300x192.jpg 300w, http://suncitynhatrang.vn/wp-content/uploads/2017/06/STANDARD-DOUBLE1-768x492.jpg 768w, http://suncitynhatrang.vn/wp-content/uploads/2017/06/STANDARD-DOUBLE1-1024x656.jpg 1024w" sizes="100vw" /></a>
								</div>
								<div class="mo-ta-phong col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
									<h3><a href="http://suncitynhatrang.vn/loai-phong/phong-standard.html" title="STANDARD (KHÔNG CỬA SỔ)">STANDARD (KHÔNG CỬA SỔ)</a></h3>
									<ul class="mo-ta col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
										<li>
											18 - 24m2 										</li>
										<li>
											Không có cửa sổ										</li>
										<li>
											1 giường đôi / 1 giường đơn+1 giường đôi										</li>
									</ul>
									<ul class="gia col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
										<li>800.000Đ/ĐÊM/2 NGƯỜI</li>
										<li>
											<a href="http://suncitynhatrang.vn/dat-phong" title="">Đặt phòng</a>
										</li>
									</ul>
								</div>
							</li> -->
													<!-- <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
								<div class="img-phong">
									<a href="http://suncitynhatrang.vn/loai-phong/phong-superior.html" title="SUPERIOR"><img width="1600" height="1025" src="http://suncitynhatrang.vn/wp-content/uploads/2017/06/sup-double2.jpg" class="attachment-full size-full wp-post-image" alt="" srcset="http://suncitynhatrang.vn/wp-content/uploads/2017/06/sup-double2.jpg 1600w, http://suncitynhatrang.vn/wp-content/uploads/2017/06/sup-double2-300x192.jpg 300w, http://suncitynhatrang.vn/wp-content/uploads/2017/06/sup-double2-768x492.jpg 768w, http://suncitynhatrang.vn/wp-content/uploads/2017/06/sup-double2-1024x656.jpg 1024w" sizes="100vw" /></a>
								</div>
								<div class="mo-ta-phong col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
									<h3><a href="http://suncitynhatrang.vn/loai-phong/phong-superior.html" title="SUPERIOR">SUPERIOR</a></h3>
									<ul class="mo-ta col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
										<li>
											18 - 24m2										</li>
										<li>
											view hạn chế										</li>
										<li>
											1 giường đôi / 1 giường đơn+1 giường đôi 										</li>
									</ul>
									<ul class="gia col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
										<li>900.000Đ/ĐÊM/2 NGƯỜI</li>
										<li>
											<a href="http://suncitynhatrang.vn/dat-phong" title="">Đặt phòng</a>
										</li>
									</ul>
								</div>
							</li>
													<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
								<div class="img-phong">
									<a href="http://suncitynhatrang.vn/loai-phong/phong-deluxe.html" title="DELUXE"><img width="1600" height="1025" src="http://suncitynhatrang.vn/wp-content/uploads/2017/06/deluxe-double.jpg" class="attachment-full size-full wp-post-image" alt="" srcset="http://suncitynhatrang.vn/wp-content/uploads/2017/06/deluxe-double.jpg 1600w, http://suncitynhatrang.vn/wp-content/uploads/2017/06/deluxe-double-300x192.jpg 300w, http://suncitynhatrang.vn/wp-content/uploads/2017/06/deluxe-double-768x492.jpg 768w, http://suncitynhatrang.vn/wp-content/uploads/2017/06/deluxe-double-1024x656.jpg 1024w" sizes="100vw" /></a>
								</div>
								<div class="mo-ta-phong col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
									<h3><a href="http://suncitynhatrang.vn/loai-phong/phong-deluxe.html" title="DELUXE">DELUXE</a></h3>
									<ul class="mo-ta col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
										<li>
											20 - 28m2										</li>
										<li>
											Hướng biển										</li>
										<li>
											1 giường đôi / 1 giường đơn+1 giường đôi										</li>
									</ul>
									<ul class="gia col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
										<li>1.200.000Đ/ĐÊM/2 NGƯỜI</li>
										<li>
											<a href="http://suncitynhatrang.vn/dat-phong" title="">Đặt phòng</a>
										</li>
									</ul>
								</div>
							</li> -->
                            <h2><strong>SUNY CITY ĐỀ XUẤT CHO BẠN</strong></h2>
                            <?php
                                $sql = "SELECT * FROM room_type WHERE iddanhmuc = 2 ORDER BY idroom DESC LIMIT 3";
                                $trave = mysqli_query($connect, $sql);
                                while($row = $trave->fetch_assoc()){
                                    ?>
                                        <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
								<div class="img-phong">
									<a href="<?php echo $row['image1'] ?>" title="SUITE"><img width="1600" height="1025" src="<?php echo $row['image1'] ?>" sizes="100vw" /></a>
								</div>
								<div class="mo-ta-phong col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
									<h3><a href="http://suncitynhatrang.vn/loai-phong/phong-suite.html" title="SUITE"><?php echo $row['roomname'] ?></a></h3>
									<ul class="mo-ta col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
										<li>
											57m2										</li>
										<li>
											Hướng biển										</li>
										<li>
                                        <?php echo $row['diachi'] ?>  										</li>
									</ul>
									<ul class="gia col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pd">
                                        <li><?php echo $row['khoanggia'] ?></li>
										<li>
											<a href="./chonphong.php?id=<?php echo $row['idroom'] ?>" title="">Xem phòng</a>
										</li>
									</ul>
								</div>
							</li>
                                    <?php
                                }
                            ?>
							
											</ul>
				</div>
			</div>
		</div>
	</div>
    <div class="MuiBox-root jss471 jss463">
        <div class="MuiBox-root jss472 jss464">
        <?php
                    $sql = "SELECT * FROM websetting WHERE id = 1";
                    $trave = mysqli_query($connect, $sql);
                    while($row = $trave->fetch_assoc()){
                        ?>
                            <span><img src="<?php echo $row['logo'] ?>" class="jss470" alt="logo_mytour_footer"/></span>
                        <?php
                    }
                ?>
            
            <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-3" style="margin-top:24px">
            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-true">
                <p class="MuiTypography-root jss465 MuiTypography-body2">Công ty cổ phần du lịch Việt Nam VNTravel</p>
                <?php
                    $sql = "SELECT * FROM websetting WHERE id = 1";
                    $trave = mysqli_query($connect, $sql);
                    while($row = $trave->fetch_assoc()){
                        ?>
                            <p class="MuiTypography-root jss466 MuiTypography-body2"><?php echo $row['hotline'] ?></p>
                        <?php
                    }
                ?>
                <?php
                    $sql = "SELECT * FROM websetting WHERE id = 1";
                    $trave = mysqli_query($connect, $sql);
                    while($row = $trave->fetch_assoc()){
                        ?>
                            <p class="MuiTypography-root jss466 MuiTypography-body2"><?php echo $row['email'] ?></p>
                        <?php
                    }
                ?>
                <?php
                    $sql = "SELECT * FROM websetting WHERE id = 1";
                    $trave = mysqli_query($connect, $sql);
                    while($row = $trave->fetch_assoc()){
                        ?>
                            <p class="MuiTypography-root jss466 MuiTypography-body2"><?php echo $row['diachi'] ?></p>
                        <?php
                    }
                ?>
                <!-- <p class="MuiTypography-root jss466 MuiTypography-body2">Văn phòng HCM: Tầng 6, Tòa Nhà Central Park, 117 Nguyễn Du, Q.1</p>
                <p class="MuiTypography-root jss466 MuiTypography-body2">Mytour Store: 168 Xã Đàn, Đống Đa, Hà Nội</p> -->
            </div>
            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-true">
                <p class="MuiTypography-root jss465 MuiTypography-body2">Chính sách &amp; Quy định</p>
                <div class="MuiBox-root jss473">
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss469 MuiTypography-colorPrimary" target="_blank" href="/news/135152-chinh-sach-va-quy-dinh-chung.html">
                        <span class="MuiBox-root jss474">Chính sách và quy định chung</span>
                    </a>
                    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss469 MuiTypography-colorPrimary" target="_blank" href="/news/135633-quy-dinh-ve-thanh-toan.html">
                    <span class="MuiBox-root jss475">Quy định về thanh toán</span>
                </a>
                <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss469 MuiTypography-colorPrimary" target="_blank" href="/news/135634-quy-dinh-ve-xac-nhan-thong-tin-dat-phong.html">
                <span class="MuiBox-root jss476">Quy định về xác nhận thông tin đặt phòng</span>
            </a>
            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss469 MuiTypography-colorPrimary" target="_blank" href="/news/135154-chinh-sach-huy-phong-va-hoan-tien.html">
            <span class="MuiBox-root jss477">Chính sách về hủy đặt phòng và hoàn trả tiền</span>
        </a>
        <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss469 MuiTypography-colorPrimary" target="_blank" href="/news/135636-chinh-sach-bao-mat-thong-tin-danh-cho-website-tmdt.html">
            <span class="MuiBox-root jss478">Chính sách bảo mật thông tin</span>
        </a>
        <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss469 MuiTypography-colorPrimary" target="_blank" href="/news/135155-quy-che-hoat-dong.html">
            <span class="MuiBox-root jss479">Quy chế hoạt động</span>
        </a>
        <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss469 MuiTypography-colorPrimary" target="_blank" href="/news/135156-chinh-sach-bao-mat-thong-tin-danh-cho-san-gdtmdt.html">
            <span class="MuiBox-root jss480">Chính sách bảo mật</span>
        </a>
        <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss469 MuiTypography-colorPrimary" target="_blank" href="/news/135420-quy-trinh-giai-quyet-tranh-chap-khieu-nai.html">
            <span class="MuiBox-root jss481">Quy trình giải quyết tranh chấp, khiếu nại</span>
        </a>
    </div>
</div>
<div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-true">
    <p class="MuiTypography-root jss465 MuiTypography-body2">Khách hàng và đối tác</p>
    <div class="MuiBox-root jss482">
        <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss469 MuiTypography-colorPrimary" target="_blank" href="https://hms.mytour.vn/">
        <span class="MuiBox-root jss483">Đăng nhập HMS</span>
    </a>
    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss469 MuiTypography-colorPrimary" target="_blank" href="https://career.mytour.vn/">
        <span class="MuiBox-root jss484">Tuyển dụng</span>
    </a>
    <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss469 MuiTypography-colorPrimary" target="_blank" href="/help/30-lien-he.html">
    <span class="MuiBox-root jss485">Liên hệ</span>
    </a>
</div>
</div>
</div>
<div class="jss467"></div>
</div>
</div>
            <div class="MuiBox-root jss493 jss486">
                <div class="MuiBox-root jss494 jss487">
                    <div class="MuiBox-root jss495 jss489">
                        <p class="MuiTypography-root jss488 MuiTypography-body2">Suny City là thành viên của VNTravel Group - Một trong những tập đoàn đứng đầu Đông Nam Á về du lịch trực tuyến và các dịch vụ liên quan</p>
                        <div class="MuiBox-root jss496 jss490">
                            <div class="jss188 jss492">
                                <div class="jss189" style="border-radius:0"></div>
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
                            <p class="MuiTypography-root jss488 MuiTypography-body2"><?php echo $row['copyright'] ?></p>
                        <?php
                    }
                ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<div style = "margin-left: 650px;" class="scroll-back-to-top-wrapper">
	<span class="scroll-back-to-top-inner">
					TOP			</span>
</div><script data-cfasync="false" type="text/javascript">
var addthis_config = {"data_track_clickback":true,"ui_atversion":300,"ignore_server_config":true};
var addthis_share = {};
</script>
                <!-- AddThis Settings Begin -->
                <script data-cfasync="false" type="text/javascript">
                    var addthis_product = "wpp-5.3.5";
                    var wp_product_version = "wpp-5.3.5";
                    var wp_blog_version = "4.8";
                    var addthis_plugin_info = {"info_status":"enabled","cms_name":"WordPress","plugin_name":"Share Buttons by AddThis","plugin_version":"5.3.5","anonymous_profile_id":"wp-60861d20d3110c99705c50fca6ab8bf2","plugin_mode":"WordPress","select_prefs":{"addthis_per_post_enabled":true,"addthis_above_enabled":false,"addthis_below_enabled":false,"addthis_sidebar_enabled":false,"addthis_mobile_toolbar_enabled":false,"addthis_above_showon_home":true,"addthis_above_showon_posts":true,"addthis_above_showon_pages":true,"addthis_above_showon_archives":true,"addthis_above_showon_categories":true,"addthis_above_showon_excerpts":true,"addthis_below_showon_home":true,"addthis_below_showon_posts":true,"addthis_below_showon_pages":true,"addthis_below_showon_archives":true,"addthis_below_showon_categories":true,"addthis_below_showon_excerpts":true,"addthis_sidebar_showon_home":true,"addthis_sidebar_showon_posts":true,"addthis_sidebar_showon_pages":true,"addthis_sidebar_showon_archives":true,"addthis_sidebar_showon_categories":true,"addthis_mobile_toolbar_showon_home":true,"addthis_mobile_toolbar_showon_posts":true,"addthis_mobile_toolbar_showon_pages":true,"addthis_mobile_toolbar_showon_archives":true,"addthis_mobile_toolbar_showon_categories":true,"sharing_enabled_on_post_via_metabox":true},"page_info":{"template":false,"post_type":""}};
                    if (typeof(addthis_config) == "undefined") {
                        var addthis_config = {"data_track_clickback":true,"ui_atversion":300,"ignore_server_config":true};
                    }
                    if (typeof(addthis_share) == "undefined") {
                        var addthis_share = {};
                    }
                    if (typeof(addthis_layers) == "undefined") {
                        var addthis_layers = {};
                    }
                </script>
                <script
                    data-cfasync="false"
                    type="text/javascript"
                    src="//s7.addthis.com/js/300/addthis_widget.js#pubid=wp-60861d20d3110c99705c50fca6ab8bf2 "
                    async="async"
                >
                </script>
                <script data-cfasync="false" type="text/javascript">
                    (function() {
                        var at_interval = setInterval(function () {
                            if(window.addthis) {
                                clearInterval(at_interval);
                                addthis.layers(addthis_layers);
                            }
                        },1000)
                    }());
                </script>
                <link rel='stylesheet' id='addthis_output-css'  href='http://suncitynhatrang.vn/wp-content/plugins/addthis/css/output.css?ver=4.8' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/suncitynhatrang.vn\/wp-json\/","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.8'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"\u0110\u00f3ng","currentText":"H\u00f4m nay","monthNames":["Th\u00e1ng M\u1ed9t","Th\u00e1ng Hai","Th\u00e1ng Ba","Th\u00e1ng T\u01b0","Th\u00e1ng N\u0103m","Th\u00e1ng S\u00e1u","Th\u00e1ng B\u1ea3y","Th\u00e1ng T\u00e1m","Th\u00e1ng Ch\u00edn","Th\u00e1ng M\u01b0\u1eddi","Th\u00e1ng M\u01b0\u1eddi M\u1ed9t","Th\u00e1ng M\u01b0\u1eddi Hai"],"monthNamesShort":["Th1","Th2","Th3","Th4","Th5","Th6","Th7","Th8","Th9","Th10","Th11","Th12"],"nextText":"Ti\u1ebfp theo","prevText":"Quay v\u1ec1","dayNames":["Ch\u1ee7 Nh\u1eadt","Th\u1ee9 Hai","Th\u1ee9 Ba","Th\u1ee9 T\u01b0","Th\u1ee9 N\u0103m","Th\u1ee9 S\u00e1u","Th\u1ee9 B\u1ea3y"],"dayNamesShort":["CN","T2","T3","T4","T5","T6","T7"],"dayNamesMin":["C","H","B","T","N","S","B"],"dateFormat":"d MM, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/datepicker-vi.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-content/plugins/contact-form-7-datepicker/js/jquery-ui-timepicker/jquery-ui-timepicker-addon.min.js?ver=4.8'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-content/plugins/contact-form-7-datepicker/js/jquery-ui-timepicker/i18n/jquery-ui-timepicker-vi.js?ver=4.8'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-includes/js/jquery/ui/slider.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-includes/js/jquery/ui/button.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-content/plugins/contact-form-7-datepicker/js/jquery-ui-sliderAccess.js?ver=4.8'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var scrollBackToTop = {"scrollDuration":"500","fadeDuration":"0.5"};
/* ]]> */
</script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-content/plugins/scroll-back-to-top/assets/js/scroll-back-to-top.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var twentyseventeenScreenReaderText = {"quote":"<svg class=\"icon icon-quote-right\" aria-hidden=\"true\" role=\"img\"> <use href=\"#icon-quote-right\" xlink:href=\"#icon-quote-right\"><\/use> <\/svg>"};
/* ]]> */
</script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-content/themes/twentyseventeen/assets/js/skip-link-focus-fix.js?ver=1.0'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-content/themes/twentyseventeen/assets/js/global.js?ver=1.0'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-content/themes/twentyseventeen/assets/js/jquery.scrollTo.js?ver=2.1.2'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-includes/js/wp-embed.min.js?ver=4.8'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-content/plugins/easy-fancybox/fancybox/jquery.fancybox-1.3.8.min.js?ver=1.6'></script>
<script type='text/javascript' src='http://suncitynhatrang.vn/wp-content/plugins/easy-fancybox/js/jquery.easing.min.js?ver=1.4.0'></script>

<script type="text/javascript">
jQuery(function($){
	$('input[name="ngayden"]').datepicker({"dateFormat":"dd/mm/yy","firstDay":1,"controlType":"slider","addSliderAccess":true,"sliderAccessArgs":{"touchonly":true},"stepHour":1,"stepMinute":1,"stepSecond":1}).datepicker('option', $.datepicker.regional['vi']).datepicker('option', 'minDate', "").datepicker('option', 'maxDate', "").datepicker('refresh');
	$('input[name="ngaydi"]').datepicker({"dateFormat":"dd/mm/yy","firstDay":1,"controlType":"slider","addSliderAccess":true,"sliderAccessArgs":{"touchonly":true},"stepHour":1,"stepMinute":1,"stepSecond":1}).datepicker('option', $.datepicker.regional['vi']).datepicker('option', 'minDate', "").datepicker('option', 'maxDate', "").datepicker('refresh');
});
</script>
<script type="text/javascript">
jQuery(document).on('ready post-load', function(){ jQuery('.nofancybox,a.pin-it-button,a[href*="pinterest.com/pin/create/button"]').addClass('nolightbox'); });
jQuery(document).on('ready post-load',easy_fancybox_handler);
jQuery(document).on('ready',easy_fancybox_auto);</script>
<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-behance" viewBox="0 0 37 32">
<path class="path1" d="M33 6.054h-9.125v2.214h9.125v-2.214zM28.5 13.661q-1.607 0-2.607 0.938t-1.107 2.545h7.286q-0.321-3.482-3.571-3.482zM28.786 24.107q1.125 0 2.179-0.571t1.357-1.554h3.946q-1.786 5.482-7.625 5.482-3.821 0-6.080-2.357t-2.259-6.196q0-3.714 2.33-6.17t6.009-2.455q2.464 0 4.295 1.214t2.732 3.196 0.902 4.429q0 0.304-0.036 0.839h-11.75q0 1.982 1.027 3.063t2.973 1.080zM4.946 23.214h5.286q3.661 0 3.661-2.982 0-3.214-3.554-3.214h-5.393v6.196zM4.946 13.625h5.018q1.393 0 2.205-0.652t0.813-2.027q0-2.571-3.393-2.571h-4.643v5.25zM0 4.536h10.607q1.554 0 2.768 0.25t2.259 0.848 1.607 1.723 0.563 2.75q0 3.232-3.071 4.696 2.036 0.571 3.071 2.054t1.036 3.643q0 1.339-0.438 2.438t-1.179 1.848-1.759 1.268-2.161 0.75-2.393 0.232h-10.911v-22.5z"></path>
</symbol>
<symbol id="icon-deviantart" viewBox="0 0 18 32">
<path class="path1" d="M18.286 5.411l-5.411 10.393 0.429 0.554h4.982v7.411h-9.054l-0.786 0.536-2.536 4.875-0.536 0.536h-5.375v-5.411l5.411-10.411-0.429-0.536h-4.982v-7.411h9.054l0.786-0.536 2.536-4.875 0.536-0.536h5.375v5.411z"></path>
</symbol>
<symbol id="icon-medium" viewBox="0 0 32 32">
<path class="path1" d="M10.661 7.518v20.946q0 0.446-0.223 0.759t-0.652 0.313q-0.304 0-0.589-0.143l-8.304-4.161q-0.375-0.179-0.634-0.598t-0.259-0.83v-20.357q0-0.357 0.179-0.607t0.518-0.25q0.25 0 0.786 0.268l9.125 4.571q0.054 0.054 0.054 0.089zM11.804 9.321l9.536 15.464-9.536-4.75v-10.714zM32 9.643v18.821q0 0.446-0.25 0.723t-0.679 0.277-0.839-0.232l-7.875-3.929zM31.946 7.5q0 0.054-4.58 7.491t-5.366 8.705l-6.964-11.321 5.786-9.411q0.304-0.5 0.929-0.5 0.25 0 0.464 0.107l9.661 4.821q0.071 0.036 0.071 0.107z"></path>
</symbol>
<symbol id="icon-slideshare" viewBox="0 0 32 32">
<path class="path1" d="M15.589 13.214q0 1.482-1.134 2.545t-2.723 1.063-2.723-1.063-1.134-2.545q0-1.5 1.134-2.554t2.723-1.054 2.723 1.054 1.134 2.554zM24.554 13.214q0 1.482-1.125 2.545t-2.732 1.063q-1.589 0-2.723-1.063t-1.134-2.545q0-1.5 1.134-2.554t2.723-1.054q1.607 0 2.732 1.054t1.125 2.554zM28.571 16.429v-11.911q0-1.554-0.571-2.205t-1.982-0.652h-19.857q-1.482 0-2.009 0.607t-0.527 2.25v12.018q0.768 0.411 1.58 0.714t1.446 0.5 1.446 0.33 1.268 0.196 1.25 0.071 1.045 0.009 1.009-0.036 0.795-0.036q1.214-0.018 1.696 0.482 0.107 0.107 0.179 0.161 0.464 0.446 1.089 0.911 0.125-1.625 2.107-1.554 0.089 0 0.652 0.027t0.768 0.036 0.813 0.018 0.946-0.018 0.973-0.080 1.089-0.152 1.107-0.241 1.196-0.348 1.205-0.482 1.286-0.616zM31.482 16.339q-2.161 2.661-6.643 4.5 1.5 5.089-0.411 8.304-1.179 2.018-3.268 2.643-1.857 0.571-3.25-0.268-1.536-0.911-1.464-2.929l-0.018-5.821v-0.018q-0.143-0.036-0.438-0.107t-0.42-0.089l-0.018 6.036q0.071 2.036-1.482 2.929-1.411 0.839-3.268 0.268-2.089-0.643-3.25-2.679-1.875-3.214-0.393-8.268-4.482-1.839-6.643-4.5-0.446-0.661-0.071-1.125t1.071 0.018q0.054 0.036 0.196 0.125t0.196 0.143v-12.393q0-1.286 0.839-2.196t2.036-0.911h22.446q1.196 0 2.036 0.911t0.839 2.196v12.393l0.375-0.268q0.696-0.482 1.071-0.018t-0.071 1.125z"></path>
</symbol>
<symbol id="icon-snapchat-ghost" viewBox="0 0 30 32">
<path class="path1" d="M15.143 2.286q2.393-0.018 4.295 1.223t2.92 3.438q0.482 1.036 0.482 3.196 0 0.839-0.161 3.411 0.25 0.125 0.5 0.125 0.321 0 0.911-0.241t0.911-0.241q0.518 0 1 0.321t0.482 0.821q0 0.571-0.563 0.964t-1.232 0.563-1.232 0.518-0.563 0.848q0 0.268 0.214 0.768 0.661 1.464 1.83 2.679t2.58 1.804q0.5 0.214 1.429 0.411 0.5 0.107 0.5 0.625 0 1.25-3.911 1.839-0.125 0.196-0.196 0.696t-0.25 0.83-0.589 0.33q-0.357 0-1.107-0.116t-1.143-0.116q-0.661 0-1.107 0.089-0.571 0.089-1.125 0.402t-1.036 0.679-1.036 0.723-1.357 0.598-1.768 0.241q-0.929 0-1.723-0.241t-1.339-0.598-1.027-0.723-1.036-0.679-1.107-0.402q-0.464-0.089-1.125-0.089-0.429 0-1.17 0.134t-1.045 0.134q-0.446 0-0.625-0.33t-0.25-0.848-0.196-0.714q-3.911-0.589-3.911-1.839 0-0.518 0.5-0.625 0.929-0.196 1.429-0.411 1.393-0.571 2.58-1.804t1.83-2.679q0.214-0.5 0.214-0.768 0-0.5-0.563-0.848t-1.241-0.527-1.241-0.563-0.563-0.938q0-0.482 0.464-0.813t0.982-0.33q0.268 0 0.857 0.232t0.946 0.232q0.321 0 0.571-0.125-0.161-2.536-0.161-3.393 0-2.179 0.482-3.214 1.143-2.446 3.071-3.536t4.714-1.125z"></path>
</symbol>
<symbol id="icon-yelp" viewBox="0 0 27 32">
<path class="path1" d="M13.804 23.554v2.268q-0.018 5.214-0.107 5.446-0.214 0.571-0.911 0.714-0.964 0.161-3.241-0.679t-2.902-1.589q-0.232-0.268-0.304-0.643-0.018-0.214 0.071-0.464 0.071-0.179 0.607-0.839t3.232-3.857q0.018 0 1.071-1.25 0.268-0.339 0.705-0.438t0.884 0.063q0.429 0.179 0.67 0.518t0.223 0.75zM11.143 19.071q-0.054 0.982-0.929 1.25l-2.143 0.696q-4.911 1.571-5.214 1.571-0.625-0.036-0.964-0.643-0.214-0.446-0.304-1.339-0.143-1.357 0.018-2.973t0.536-2.223 1-0.571q0.232 0 3.607 1.375 1.25 0.518 2.054 0.839l1.5 0.607q0.411 0.161 0.634 0.545t0.205 0.866zM25.893 24.375q-0.125 0.964-1.634 2.875t-2.42 2.268q-0.661 0.25-1.125-0.125-0.25-0.179-3.286-5.125l-0.839-1.375q-0.25-0.375-0.205-0.821t0.348-0.821q0.625-0.768 1.482-0.464 0.018 0.018 2.125 0.714 3.625 1.179 4.321 1.42t0.839 0.366q0.5 0.393 0.393 1.089zM13.893 13.089q0.089 1.821-0.964 2.179-1.036 0.304-2.036-1.268l-6.75-10.679q-0.143-0.625 0.339-1.107 0.732-0.768 3.705-1.598t4.009-0.563q0.714 0.179 0.875 0.804 0.054 0.321 0.393 5.455t0.429 6.777zM25.714 15.018q0.054 0.696-0.464 1.054-0.268 0.179-5.875 1.536-1.196 0.268-1.625 0.411l0.018-0.036q-0.411 0.107-0.821-0.071t-0.661-0.571q-0.536-0.839 0-1.554 0.018-0.018 1.339-1.821 2.232-3.054 2.679-3.643t0.607-0.696q0.5-0.339 1.161-0.036 0.857 0.411 2.196 2.384t1.446 2.991v0.054z"></path>
</symbol>
<symbol id="icon-vine" viewBox="0 0 27 32">
<path class="path1" d="M26.732 14.768v3.536q-1.804 0.411-3.536 0.411-1.161 2.429-2.955 4.839t-3.241 3.848-2.286 1.902q-1.429 0.804-2.893-0.054-0.5-0.304-1.080-0.777t-1.518-1.491-1.83-2.295-1.92-3.286-1.884-4.357-1.634-5.616-1.259-6.964h5.054q0.464 3.893 1.25 7.116t1.866 5.661 2.17 4.205 2.5 3.482q3.018-3.018 5.125-7.25-2.536-1.286-3.982-3.929t-1.446-5.946q0-3.429 1.857-5.616t5.071-2.188q3.179 0 4.875 1.884t1.696 5.313q0 2.839-1.036 5.107-0.125 0.018-0.348 0.054t-0.821 0.036-1.125-0.107-1.107-0.455-0.902-0.92q0.554-1.839 0.554-3.286 0-1.554-0.518-2.357t-1.411-0.804q-0.946 0-1.518 0.884t-0.571 2.509q0 3.321 1.875 5.241t4.768 1.92q1.107 0 2.161-0.25z"></path>
</symbol>
<symbol id="icon-vk" viewBox="0 0 35 32">
<path class="path1" d="M34.232 9.286q0.411 1.143-2.679 5.25-0.429 0.571-1.161 1.518-1.393 1.786-1.607 2.339-0.304 0.732 0.25 1.446 0.304 0.375 1.446 1.464h0.018l0.071 0.071q2.518 2.339 3.411 3.946 0.054 0.089 0.116 0.223t0.125 0.473-0.009 0.607-0.446 0.491-1.054 0.223l-4.571 0.071q-0.429 0.089-1-0.089t-0.929-0.393l-0.357-0.214q-0.536-0.375-1.25-1.143t-1.223-1.384-1.089-1.036-1.009-0.277q-0.054 0.018-0.143 0.063t-0.304 0.259-0.384 0.527-0.304 0.929-0.116 1.384q0 0.268-0.063 0.491t-0.134 0.33l-0.071 0.089q-0.321 0.339-0.946 0.393h-2.054q-1.268 0.071-2.607-0.295t-2.348-0.946-1.839-1.179-1.259-1.027l-0.446-0.429q-0.179-0.179-0.491-0.536t-1.277-1.625-1.893-2.696-2.188-3.768-2.33-4.857q-0.107-0.286-0.107-0.482t0.054-0.286l0.071-0.107q0.268-0.339 1.018-0.339l4.893-0.036q0.214 0.036 0.411 0.116t0.286 0.152l0.089 0.054q0.286 0.196 0.429 0.571 0.357 0.893 0.821 1.848t0.732 1.455l0.286 0.518q0.518 1.071 1 1.857t0.866 1.223 0.741 0.688 0.607 0.25 0.482-0.089q0.036-0.018 0.089-0.089t0.214-0.393 0.241-0.839 0.17-1.446 0-2.232q-0.036-0.714-0.161-1.304t-0.25-0.821l-0.107-0.214q-0.446-0.607-1.518-0.768-0.232-0.036 0.089-0.429 0.304-0.339 0.679-0.536 0.946-0.464 4.268-0.429 1.464 0.018 2.411 0.232 0.357 0.089 0.598 0.241t0.366 0.429 0.188 0.571 0.063 0.813-0.018 0.982-0.045 1.259-0.027 1.473q0 0.196-0.018 0.75t-0.009 0.857 0.063 0.723 0.205 0.696 0.402 0.438q0.143 0.036 0.304 0.071t0.464-0.196 0.679-0.616 0.929-1.196 1.214-1.92q1.071-1.857 1.911-4.018 0.071-0.179 0.179-0.313t0.196-0.188l0.071-0.054 0.089-0.045t0.232-0.054 0.357-0.009l5.143-0.036q0.696-0.089 1.143 0.045t0.554 0.295z"></path>
</symbol>
<symbol id="icon-search" viewBox="0 0 30 32">
<path class="path1" d="M20.571 14.857q0-3.304-2.348-5.652t-5.652-2.348-5.652 2.348-2.348 5.652 2.348 5.652 5.652 2.348 5.652-2.348 2.348-5.652zM29.714 29.714q0 0.929-0.679 1.607t-1.607 0.679q-0.964 0-1.607-0.679l-6.125-6.107q-3.196 2.214-7.125 2.214-2.554 0-4.884-0.991t-4.018-2.679-2.679-4.018-0.991-4.884 0.991-4.884 2.679-4.018 4.018-2.679 4.884-0.991 4.884 0.991 4.018 2.679 2.679 4.018 0.991 4.884q0 3.929-2.214 7.125l6.125 6.125q0.661 0.661 0.661 1.607z"></path>
</symbol>
<symbol id="icon-envelope-o" viewBox="0 0 32 32">
<path class="path1" d="M29.714 26.857v-13.714q-0.571 0.643-1.232 1.179-4.786 3.679-7.607 6.036-0.911 0.768-1.482 1.196t-1.545 0.866-1.83 0.438h-0.036q-0.857 0-1.83-0.438t-1.545-0.866-1.482-1.196q-2.821-2.357-7.607-6.036-0.661-0.536-1.232-1.179v13.714q0 0.232 0.17 0.402t0.402 0.17h26.286q0.232 0 0.402-0.17t0.17-0.402zM29.714 8.089v-0.438t-0.009-0.232-0.054-0.223-0.098-0.161-0.161-0.134-0.25-0.045h-26.286q-0.232 0-0.402 0.17t-0.17 0.402q0 3 2.625 5.071 3.446 2.714 7.161 5.661 0.107 0.089 0.625 0.527t0.821 0.67 0.795 0.563 0.902 0.491 0.768 0.161h0.036q0.357 0 0.768-0.161t0.902-0.491 0.795-0.563 0.821-0.67 0.625-0.527q3.714-2.946 7.161-5.661 0.964-0.768 1.795-2.063t0.83-2.348zM32 7.429v19.429q0 1.179-0.839 2.018t-2.018 0.839h-26.286q-1.179 0-2.018-0.839t-0.839-2.018v-19.429q0-1.179 0.839-2.018t2.018-0.839h26.286q1.179 0 2.018 0.839t0.839 2.018z"></path>
</symbol>
<symbol id="icon-close" viewBox="0 0 25 32">
<path class="path1" d="M23.179 23.607q0 0.714-0.5 1.214l-2.429 2.429q-0.5 0.5-1.214 0.5t-1.214-0.5l-5.25-5.25-5.25 5.25q-0.5 0.5-1.214 0.5t-1.214-0.5l-2.429-2.429q-0.5-0.5-0.5-1.214t0.5-1.214l5.25-5.25-5.25-5.25q-0.5-0.5-0.5-1.214t0.5-1.214l2.429-2.429q0.5-0.5 1.214-0.5t1.214 0.5l5.25 5.25 5.25-5.25q0.5-0.5 1.214-0.5t1.214 0.5l2.429 2.429q0.5 0.5 0.5 1.214t-0.5 1.214l-5.25 5.25 5.25 5.25q0.5 0.5 0.5 1.214z"></path>
</symbol>
<symbol id="icon-angle-down" viewBox="0 0 21 32">
<path class="path1" d="M19.196 13.143q0 0.232-0.179 0.411l-8.321 8.321q-0.179 0.179-0.411 0.179t-0.411-0.179l-8.321-8.321q-0.179-0.179-0.179-0.411t0.179-0.411l0.893-0.893q0.179-0.179 0.411-0.179t0.411 0.179l7.018 7.018 7.018-7.018q0.179-0.179 0.411-0.179t0.411 0.179l0.893 0.893q0.179 0.179 0.179 0.411z"></path>
</symbol>
<symbol id="icon-folder-open" viewBox="0 0 34 32">
<path class="path1" d="M33.554 17q0 0.554-0.554 1.179l-6 7.071q-0.768 0.911-2.152 1.545t-2.563 0.634h-19.429q-0.607 0-1.080-0.232t-0.473-0.768q0-0.554 0.554-1.179l6-7.071q0.768-0.911 2.152-1.545t2.563-0.634h19.429q0.607 0 1.080 0.232t0.473 0.768zM27.429 10.857v2.857h-14.857q-1.679 0-3.518 0.848t-2.929 2.134l-6.107 7.179q0-0.071-0.009-0.223t-0.009-0.223v-17.143q0-1.643 1.179-2.821t2.821-1.179h5.714q1.643 0 2.821 1.179t1.179 2.821v0.571h9.714q1.643 0 2.821 1.179t1.179 2.821z"></path>
</symbol>
<symbol id="icon-twitter" viewBox="0 0 30 32">
<path class="path1" d="M28.929 7.286q-1.196 1.75-2.893 2.982 0.018 0.25 0.018 0.75 0 2.321-0.679 4.634t-2.063 4.437-3.295 3.759-4.607 2.607-5.768 0.973q-4.839 0-8.857-2.589 0.625 0.071 1.393 0.071 4.018 0 7.161-2.464-1.875-0.036-3.357-1.152t-2.036-2.848q0.589 0.089 1.089 0.089 0.768 0 1.518-0.196-2-0.411-3.313-1.991t-1.313-3.67v-0.071q1.214 0.679 2.607 0.732-1.179-0.786-1.875-2.054t-0.696-2.75q0-1.571 0.786-2.911 2.161 2.661 5.259 4.259t6.634 1.777q-0.143-0.679-0.143-1.321 0-2.393 1.688-4.080t4.080-1.688q2.5 0 4.214 1.821 1.946-0.375 3.661-1.393-0.661 2.054-2.536 3.179 1.661-0.179 3.321-0.893z"></path>
</symbol>
<symbol id="icon-facebook" viewBox="0 0 19 32">
<path class="path1" d="M17.125 0.214v4.714h-2.804q-1.536 0-2.071 0.643t-0.536 1.929v3.375h5.232l-0.696 5.286h-4.536v13.554h-5.464v-13.554h-4.554v-5.286h4.554v-3.893q0-3.321 1.857-5.152t4.946-1.83q2.625 0 4.071 0.214z"></path>
</symbol>
<symbol id="icon-github" viewBox="0 0 27 32">
<path class="path1" d="M13.714 2.286q3.732 0 6.884 1.839t4.991 4.991 1.839 6.884q0 4.482-2.616 8.063t-6.759 4.955q-0.482 0.089-0.714-0.125t-0.232-0.536q0-0.054 0.009-1.366t0.009-2.402q0-1.732-0.929-2.536 1.018-0.107 1.83-0.321t1.679-0.696 1.446-1.188 0.946-1.875 0.366-2.688q0-2.125-1.411-3.679 0.661-1.625-0.143-3.643-0.5-0.161-1.446 0.196t-1.643 0.786l-0.679 0.429q-1.661-0.464-3.429-0.464t-3.429 0.464q-0.286-0.196-0.759-0.482t-1.491-0.688-1.518-0.241q-0.804 2.018-0.143 3.643-1.411 1.554-1.411 3.679 0 1.518 0.366 2.679t0.938 1.875 1.438 1.196 1.679 0.696 1.83 0.321q-0.696 0.643-0.875 1.839-0.375 0.179-0.804 0.268t-1.018 0.089-1.17-0.384-0.991-1.116q-0.339-0.571-0.866-0.929t-0.884-0.429l-0.357-0.054q-0.375 0-0.518 0.080t-0.089 0.205 0.161 0.25 0.232 0.214l0.125 0.089q0.393 0.179 0.777 0.679t0.563 0.911l0.179 0.411q0.232 0.679 0.786 1.098t1.196 0.536 1.241 0.125 0.991-0.063l0.411-0.071q0 0.679 0.009 1.58t0.009 0.973q0 0.321-0.232 0.536t-0.714 0.125q-4.143-1.375-6.759-4.955t-2.616-8.063q0-3.732 1.839-6.884t4.991-4.991 6.884-1.839zM5.196 21.982q0.054-0.125-0.125-0.214-0.179-0.054-0.232 0.036-0.054 0.125 0.125 0.214 0.161 0.107 0.232-0.036zM5.75 22.589q0.125-0.089-0.036-0.286-0.179-0.161-0.286-0.054-0.125 0.089 0.036 0.286 0.179 0.179 0.286 0.054zM6.286 23.393q0.161-0.125 0-0.339-0.143-0.232-0.304-0.107-0.161 0.089 0 0.321t0.304 0.125zM7.036 24.143q0.143-0.143-0.071-0.339-0.214-0.214-0.357-0.054-0.161 0.143 0.071 0.339 0.214 0.214 0.357 0.054zM8.054 24.589q0.054-0.196-0.232-0.286-0.268-0.071-0.339 0.125t0.232 0.268q0.268 0.107 0.339-0.107zM9.179 24.679q0-0.232-0.304-0.196-0.286 0-0.286 0.196 0 0.232 0.304 0.196 0.286 0 0.286-0.196zM10.214 24.5q-0.036-0.196-0.321-0.161-0.286 0.054-0.25 0.268t0.321 0.143 0.25-0.25z"></path>
</symbol>
<symbol id="icon-bars" viewBox="0 0 27 32">
<path class="path1" d="M27.429 24v2.286q0 0.464-0.339 0.804t-0.804 0.339h-25.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h25.143q0.464 0 0.804 0.339t0.339 0.804zM27.429 14.857v2.286q0 0.464-0.339 0.804t-0.804 0.339h-25.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h25.143q0.464 0 0.804 0.339t0.339 0.804zM27.429 5.714v2.286q0 0.464-0.339 0.804t-0.804 0.339h-25.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h25.143q0.464 0 0.804 0.339t0.339 0.804z"></path>
</symbol>
<symbol id="icon-google-plus" viewBox="0 0 41 32">
<path class="path1" d="M25.661 16.304q0 3.714-1.554 6.616t-4.429 4.536-6.589 1.634q-2.661 0-5.089-1.036t-4.179-2.786-2.786-4.179-1.036-5.089 1.036-5.089 2.786-4.179 4.179-2.786 5.089-1.036q5.107 0 8.768 3.429l-3.554 3.411q-2.089-2.018-5.214-2.018-2.196 0-4.063 1.107t-2.955 3.009-1.089 4.152 1.089 4.152 2.955 3.009 4.063 1.107q1.482 0 2.723-0.411t2.045-1.027 1.402-1.402 0.875-1.482 0.384-1.321h-7.429v-4.5h12.357q0.214 1.125 0.214 2.179zM41.143 14.125v3.75h-3.732v3.732h-3.75v-3.732h-3.732v-3.75h3.732v-3.732h3.75v3.732h3.732z"></path>
</symbol>
<symbol id="icon-linkedin" viewBox="0 0 27 32">
<path class="path1" d="M6.232 11.161v17.696h-5.893v-17.696h5.893zM6.607 5.696q0.018 1.304-0.902 2.179t-2.42 0.875h-0.036q-1.464 0-2.357-0.875t-0.893-2.179q0-1.321 0.92-2.188t2.402-0.866 2.375 0.866 0.911 2.188zM27.429 18.714v10.143h-5.875v-9.464q0-1.875-0.723-2.938t-2.259-1.063q-1.125 0-1.884 0.616t-1.134 1.527q-0.196 0.536-0.196 1.446v9.875h-5.875q0.036-7.125 0.036-11.554t-0.018-5.286l-0.018-0.857h5.875v2.571h-0.036q0.357-0.571 0.732-1t1.009-0.929 1.554-0.777 2.045-0.277q3.054 0 4.911 2.027t1.857 5.938z"></path>
</symbol>
<symbol id="icon-quote-right" viewBox="0 0 30 32">
<path class="path1" d="M13.714 5.714v12.571q0 1.857-0.723 3.545t-1.955 2.92-2.92 1.955-3.545 0.723h-1.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h1.143q1.893 0 3.232-1.339t1.339-3.232v-0.571q0-0.714-0.5-1.214t-1.214-0.5h-4q-1.429 0-2.429-1t-1-2.429v-6.857q0-1.429 1-2.429t2.429-1h6.857q1.429 0 2.429 1t1 2.429zM29.714 5.714v12.571q0 1.857-0.723 3.545t-1.955 2.92-2.92 1.955-3.545 0.723h-1.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h1.143q1.893 0 3.232-1.339t1.339-3.232v-0.571q0-0.714-0.5-1.214t-1.214-0.5h-4q-1.429 0-2.429-1t-1-2.429v-6.857q0-1.429 1-2.429t2.429-1h6.857q1.429 0 2.429 1t1 2.429z"></path>
</symbol>
<symbol id="icon-mail-reply" viewBox="0 0 32 32">
<path class="path1" d="M32 20q0 2.964-2.268 8.054-0.054 0.125-0.188 0.429t-0.241 0.536-0.232 0.393q-0.214 0.304-0.5 0.304-0.268 0-0.42-0.179t-0.152-0.446q0-0.161 0.045-0.473t0.045-0.42q0.089-1.214 0.089-2.196 0-1.804-0.313-3.232t-0.866-2.473-1.429-1.804-1.884-1.241-2.375-0.759-2.75-0.384-3.134-0.107h-4v4.571q0 0.464-0.339 0.804t-0.804 0.339-0.804-0.339l-9.143-9.143q-0.339-0.339-0.339-0.804t0.339-0.804l9.143-9.143q0.339-0.339 0.804-0.339t0.804 0.339 0.339 0.804v4.571h4q12.732 0 15.625 7.196 0.946 2.393 0.946 5.946z"></path>
</symbol>
<symbol id="icon-youtube" viewBox="0 0 27 32">
<path class="path1" d="M17.339 22.214v3.768q0 1.196-0.696 1.196-0.411 0-0.804-0.393v-5.375q0.393-0.393 0.804-0.393 0.696 0 0.696 1.196zM23.375 22.232v0.821h-1.607v-0.821q0-1.214 0.804-1.214t0.804 1.214zM6.125 18.339h1.911v-1.679h-5.571v1.679h1.875v10.161h1.786v-10.161zM11.268 28.5h1.589v-8.821h-1.589v6.75q-0.536 0.75-1.018 0.75-0.321 0-0.375-0.375-0.018-0.054-0.018-0.625v-6.5h-1.589v6.982q0 0.875 0.143 1.304 0.214 0.661 1.036 0.661 0.857 0 1.821-1.089v0.964zM18.929 25.857v-3.518q0-1.304-0.161-1.768-0.304-1-1.268-1-0.893 0-1.661 0.964v-3.875h-1.589v11.839h1.589v-0.857q0.804 0.982 1.661 0.982 0.964 0 1.268-0.982 0.161-0.482 0.161-1.786zM24.964 25.679v-0.232h-1.625q0 0.911-0.036 1.089-0.125 0.643-0.714 0.643-0.821 0-0.821-1.232v-1.554h3.196v-1.839q0-1.411-0.482-2.071-0.696-0.911-1.893-0.911-1.214 0-1.911 0.911-0.5 0.661-0.5 2.071v3.089q0 1.411 0.518 2.071 0.696 0.911 1.929 0.911 1.286 0 1.929-0.946 0.321-0.482 0.375-0.964 0.036-0.161 0.036-1.036zM14.107 9.375v-3.75q0-1.232-0.768-1.232t-0.768 1.232v3.75q0 1.25 0.768 1.25t0.768-1.25zM26.946 22.786q0 4.179-0.464 6.25-0.25 1.054-1.036 1.768t-1.821 0.821q-3.286 0.375-9.911 0.375t-9.911-0.375q-1.036-0.107-1.83-0.821t-1.027-1.768q-0.464-2-0.464-6.25 0-4.179 0.464-6.25 0.25-1.054 1.036-1.768t1.839-0.839q3.268-0.357 9.893-0.357t9.911 0.357q1.036 0.125 1.83 0.839t1.027 1.768q0.464 2 0.464 6.25zM9.125 0h1.821l-2.161 7.125v4.839h-1.786v-4.839q-0.25-1.321-1.089-3.786-0.661-1.839-1.161-3.339h1.893l1.268 4.696zM15.732 5.946v3.125q0 1.446-0.5 2.107-0.661 0.911-1.893 0.911-1.196 0-1.875-0.911-0.5-0.679-0.5-2.107v-3.125q0-1.429 0.5-2.089 0.679-0.911 1.875-0.911 1.232 0 1.893 0.911 0.5 0.661 0.5 2.089zM21.714 3.054v8.911h-1.625v-0.982q-0.946 1.107-1.839 1.107-0.821 0-1.054-0.661-0.143-0.429-0.143-1.339v-7.036h1.625v6.554q0 0.589 0.018 0.625 0.054 0.393 0.375 0.393 0.482 0 1.018-0.768v-6.804h1.625z"></path>
</symbol>
<symbol id="icon-dropbox" viewBox="0 0 32 32">
<path class="path1" d="M7.179 12.625l8.821 5.446-6.107 5.089-8.75-5.696zM24.786 22.536v1.929l-8.75 5.232v0.018l-0.018-0.018-0.018 0.018v-0.018l-8.732-5.232v-1.929l2.625 1.714 6.107-5.071v-0.036l0.018 0.018 0.018-0.018v0.036l6.125 5.071zM9.893 2.107l6.107 5.089-8.821 5.429-6.036-4.821zM24.821 12.625l6.036 4.839-8.732 5.696-6.125-5.089zM22.125 2.107l8.732 5.696-6.036 4.821-8.821-5.429z"></path>
</symbol>
<symbol id="icon-instagram" viewBox="0 0 27 32">
<path class="path1" d="M18.286 16q0-1.893-1.339-3.232t-3.232-1.339-3.232 1.339-1.339 3.232 1.339 3.232 3.232 1.339 3.232-1.339 1.339-3.232zM20.75 16q0 2.929-2.054 4.982t-4.982 2.054-4.982-2.054-2.054-4.982 2.054-4.982 4.982-2.054 4.982 2.054 2.054 4.982zM22.679 8.679q0 0.679-0.482 1.161t-1.161 0.482-1.161-0.482-0.482-1.161 0.482-1.161 1.161-0.482 1.161 0.482 0.482 1.161zM13.714 4.75q-0.125 0-1.366-0.009t-1.884 0-1.723 0.054-1.839 0.179-1.277 0.33q-0.893 0.357-1.571 1.036t-1.036 1.571q-0.196 0.518-0.33 1.277t-0.179 1.839-0.054 1.723 0 1.884 0.009 1.366-0.009 1.366 0 1.884 0.054 1.723 0.179 1.839 0.33 1.277q0.357 0.893 1.036 1.571t1.571 1.036q0.518 0.196 1.277 0.33t1.839 0.179 1.723 0.054 1.884 0 1.366-0.009 1.366 0.009 1.884 0 1.723-0.054 1.839-0.179 1.277-0.33q0.893-0.357 1.571-1.036t1.036-1.571q0.196-0.518 0.33-1.277t0.179-1.839 0.054-1.723 0-1.884-0.009-1.366 0.009-1.366 0-1.884-0.054-1.723-0.179-1.839-0.33-1.277q-0.357-0.893-1.036-1.571t-1.571-1.036q-0.518-0.196-1.277-0.33t-1.839-0.179-1.723-0.054-1.884 0-1.366 0.009zM27.429 16q0 4.089-0.089 5.661-0.179 3.714-2.214 5.75t-5.75 2.214q-1.571 0.089-5.661 0.089t-5.661-0.089q-3.714-0.179-5.75-2.214t-2.214-5.75q-0.089-1.571-0.089-5.661t0.089-5.661q0.179-3.714 2.214-5.75t5.75-2.214q1.571-0.089 5.661-0.089t5.661 0.089q3.714 0.179 5.75 2.214t2.214 5.75q0.089 1.571 0.089 5.661z"></path>
</symbol>
<symbol id="icon-flickr" viewBox="0 0 27 32">
<path class="path1" d="M22.286 2.286q2.125 0 3.634 1.509t1.509 3.634v17.143q0 2.125-1.509 3.634t-3.634 1.509h-17.143q-2.125 0-3.634-1.509t-1.509-3.634v-17.143q0-2.125 1.509-3.634t3.634-1.509h17.143zM12.464 16q0-1.571-1.107-2.679t-2.679-1.107-2.679 1.107-1.107 2.679 1.107 2.679 2.679 1.107 2.679-1.107 1.107-2.679zM22.536 16q0-1.571-1.107-2.679t-2.679-1.107-2.679 1.107-1.107 2.679 1.107 2.679 2.679 1.107 2.679-1.107 1.107-2.679z"></path>
</symbol>
<symbol id="icon-tumblr" viewBox="0 0 19 32">
<path class="path1" d="M16.857 23.732l1.429 4.232q-0.411 0.625-1.982 1.179t-3.161 0.571q-1.857 0.036-3.402-0.464t-2.545-1.321-1.696-1.893-0.991-2.143-0.295-2.107v-9.714h-3v-3.839q1.286-0.464 2.304-1.241t1.625-1.607 1.036-1.821 0.607-1.768 0.268-1.58q0.018-0.089 0.080-0.152t0.134-0.063h4.357v7.571h5.946v4.5h-5.964v9.25q0 0.536 0.116 1t0.402 0.938 0.884 0.741 1.455 0.25q1.393-0.036 2.393-0.518z"></path>
</symbol>
<symbol id="icon-dribbble" viewBox="0 0 27 32">
<path class="path1" d="M18.286 26.786q-0.75-4.304-2.5-8.893h-0.036l-0.036 0.018q-0.286 0.107-0.768 0.295t-1.804 0.875-2.446 1.464-2.339 2.045-1.839 2.643l-0.268-0.196q3.286 2.679 7.464 2.679 2.357 0 4.571-0.929zM14.982 15.946q-0.375-0.875-0.946-1.982-5.554 1.661-12.018 1.661-0.018 0.125-0.018 0.375 0 2.214 0.786 4.223t2.214 3.598q0.893-1.589 2.205-2.973t2.545-2.223 2.33-1.446 1.777-0.857l0.661-0.232q0.071-0.018 0.232-0.063t0.232-0.080zM13.071 12.161q-2.143-3.804-4.357-6.75-2.464 1.161-4.179 3.321t-2.286 4.857q5.393 0 10.821-1.429zM25.286 17.857q-3.75-1.071-7.304-0.518 1.554 4.268 2.286 8.375 1.982-1.339 3.304-3.384t1.714-4.473zM10.911 4.625q-0.018 0-0.036 0.018 0.018-0.018 0.036-0.018zM21.446 7.214q-3.304-2.929-7.732-2.929-1.357 0-2.768 0.339 2.339 3.036 4.393 6.821 1.232-0.464 2.321-1.080t1.723-1.098 1.17-1.018 0.67-0.723zM25.429 15.875q-0.054-4.143-2.661-7.321l-0.018 0.018q-0.161 0.214-0.339 0.438t-0.777 0.795-1.268 1.080-1.786 1.161-2.348 1.152q0.446 0.946 0.786 1.696 0.036 0.107 0.116 0.313t0.134 0.295q0.643-0.089 1.33-0.125t1.313-0.036 1.232 0.027 1.143 0.071 1.009 0.098 0.857 0.116 0.652 0.107 0.446 0.080zM27.429 16q0 3.732-1.839 6.884t-4.991 4.991-6.884 1.839-6.884-1.839-4.991-4.991-1.839-6.884 1.839-6.884 4.991-4.991 6.884-1.839 6.884 1.839 4.991 4.991 1.839 6.884z"></path>
</symbol>
<symbol id="icon-skype" viewBox="0 0 27 32">
<path class="path1" d="M20.946 18.982q0-0.893-0.348-1.634t-0.866-1.223-1.304-0.875-1.473-0.607-1.563-0.411l-1.857-0.429q-0.536-0.125-0.786-0.188t-0.625-0.205-0.536-0.286-0.295-0.375-0.134-0.536q0-1.375 2.571-1.375 0.768 0 1.375 0.214t0.964 0.509 0.679 0.598 0.714 0.518 0.857 0.214q0.839 0 1.348-0.571t0.509-1.375q0-0.982-1-1.777t-2.536-1.205-3.25-0.411q-1.214 0-2.357 0.277t-2.134 0.839-1.589 1.554-0.598 2.295q0 1.089 0.339 1.902t1 1.348 1.429 0.866 1.839 0.58l2.607 0.643q1.607 0.393 2 0.643 0.571 0.357 0.571 1.071 0 0.696-0.714 1.152t-1.875 0.455q-0.911 0-1.634-0.286t-1.161-0.688-0.813-0.804-0.821-0.688-0.964-0.286q-0.893 0-1.348 0.536t-0.455 1.339q0 1.643 2.179 2.813t5.196 1.17q1.304 0 2.5-0.33t2.188-0.955 1.58-1.67 0.589-2.348zM27.429 22.857q0 2.839-2.009 4.848t-4.848 2.009q-2.321 0-4.179-1.429-1.375 0.286-2.679 0.286-2.554 0-4.884-0.991t-4.018-2.679-2.679-4.018-0.991-4.884q0-1.304 0.286-2.679-1.429-1.857-1.429-4.179 0-2.839 2.009-4.848t4.848-2.009q2.321 0 4.179 1.429 1.375-0.286 2.679-0.286 2.554 0 4.884 0.991t4.018 2.679 2.679 4.018 0.991 4.884q0 1.304-0.286 2.679 1.429 1.857 1.429 4.179z"></path>
</symbol>
<symbol id="icon-foursquare" viewBox="0 0 23 32">
<path class="path1" d="M17.857 7.75l0.661-3.464q0.089-0.411-0.161-0.714t-0.625-0.304h-12.714q-0.411 0-0.688 0.304t-0.277 0.661v19.661q0 0.125 0.107 0.018l5.196-6.286q0.411-0.464 0.679-0.598t0.857-0.134h4.268q0.393 0 0.661-0.259t0.321-0.527q0.429-2.321 0.661-3.411 0.071-0.375-0.205-0.714t-0.652-0.339h-5.25q-0.518 0-0.857-0.339t-0.339-0.857v-0.75q0-0.518 0.339-0.848t0.857-0.33h6.179q0.321 0 0.625-0.241t0.357-0.527zM21.911 3.786q-0.268 1.304-0.955 4.759t-1.241 6.25-0.625 3.098q-0.107 0.393-0.161 0.58t-0.25 0.58-0.438 0.589-0.688 0.375-1.036 0.179h-4.839q-0.232 0-0.393 0.179-0.143 0.161-7.607 8.821-0.393 0.446-1.045 0.509t-0.866-0.098q-0.982-0.393-0.982-1.75v-25.179q0-0.982 0.679-1.83t2.143-0.848h15.857q1.696 0 2.268 0.946t0.179 2.839zM21.911 3.786l-2.821 14.107q0.071-0.304 0.625-3.098t1.241-6.25 0.955-4.759z"></path>
</symbol>
<symbol id="icon-wordpress" viewBox="0 0 32 32">
<path class="path1" d="M2.268 16q0-2.911 1.196-5.589l6.554 17.946q-3.5-1.696-5.625-5.018t-2.125-7.339zM25.268 15.304q0 0.339-0.045 0.688t-0.179 0.884-0.205 0.786-0.313 1.054-0.313 1.036l-1.357 4.571-4.964-14.75q0.821-0.054 1.571-0.143 0.339-0.036 0.464-0.33t-0.045-0.554-0.509-0.241l-3.661 0.179q-1.339-0.018-3.607-0.179-0.214-0.018-0.366 0.089t-0.205 0.268-0.027 0.33 0.161 0.295 0.348 0.143l1.429 0.143 2.143 5.857-3 9-5-14.857q0.821-0.054 1.571-0.143 0.339-0.036 0.464-0.33t-0.045-0.554-0.509-0.241l-3.661 0.179q-0.125 0-0.411-0.009t-0.464-0.009q1.875-2.857 4.902-4.527t6.563-1.67q2.625 0 5.009 0.946t4.259 2.661h-0.179q-0.982 0-1.643 0.723t-0.661 1.705q0 0.214 0.036 0.429t0.071 0.384 0.143 0.411 0.161 0.375 0.214 0.402 0.223 0.375 0.259 0.429 0.25 0.411q1.125 1.911 1.125 3.786zM16.232 17.196l4.232 11.554q0.018 0.107 0.089 0.196-2.25 0.786-4.554 0.786-2 0-3.875-0.571zM28.036 9.411q1.696 3.107 1.696 6.589 0 3.732-1.857 6.884t-4.982 4.973l4.196-12.107q1.054-3.018 1.054-4.929 0-0.75-0.107-1.411zM16 0q3.25 0 6.214 1.268t5.107 3.411 3.411 5.107 1.268 6.214-1.268 6.214-3.411 5.107-5.107 3.411-6.214 1.268-6.214-1.268-5.107-3.411-3.411-5.107-1.268-6.214 1.268-6.214 3.411-5.107 5.107-3.411 6.214-1.268zM16 31.268q3.089 0 5.92-1.214t4.875-3.259 3.259-4.875 1.214-5.92-1.214-5.92-3.259-4.875-4.875-3.259-5.92-1.214-5.92 1.214-4.875 3.259-3.259 4.875-1.214 5.92 1.214 5.92 3.259 4.875 4.875 3.259 5.92 1.214z"></path>
</symbol>
<symbol id="icon-stumbleupon" viewBox="0 0 34 32">
<path class="path1" d="M18.964 12.714v-2.107q0-0.75-0.536-1.286t-1.286-0.536-1.286 0.536-0.536 1.286v10.929q0 3.125-2.25 5.339t-5.411 2.214q-3.179 0-5.42-2.241t-2.241-5.42v-4.75h5.857v4.679q0 0.768 0.536 1.295t1.286 0.527 1.286-0.527 0.536-1.295v-11.071q0-3.054 2.259-5.214t5.384-2.161q3.143 0 5.393 2.179t2.25 5.25v2.429l-3.482 1.036zM28.429 16.679h5.857v4.75q0 3.179-2.241 5.42t-5.42 2.241q-3.161 0-5.411-2.223t-2.25-5.366v-4.786l2.339 1.089 3.482-1.036v4.821q0 0.75 0.536 1.277t1.286 0.527 1.286-0.527 0.536-1.277v-4.911z"></path>
</symbol>
<symbol id="icon-digg" viewBox="0 0 37 32">
<path class="path1" d="M5.857 5.036h3.643v17.554h-9.5v-12.446h5.857v-5.107zM5.857 19.661v-6.589h-2.196v6.589h2.196zM10.964 10.143v12.446h3.661v-12.446h-3.661zM10.964 5.036v3.643h3.661v-3.643h-3.661zM16.089 10.143h9.518v16.821h-9.518v-2.911h5.857v-1.464h-5.857v-12.446zM21.946 19.661v-6.589h-2.196v6.589h2.196zM27.071 10.143h9.5v16.821h-9.5v-2.911h5.839v-1.464h-5.839v-12.446zM32.911 19.661v-6.589h-2.196v6.589h2.196z"></path>
</symbol>
<symbol id="icon-spotify" viewBox="0 0 27 32">
<path class="path1" d="M20.125 21.607q0-0.571-0.536-0.911-3.446-2.054-7.982-2.054-2.375 0-5.125 0.607-0.75 0.161-0.75 0.929 0 0.357 0.241 0.616t0.634 0.259q0.089 0 0.661-0.143 2.357-0.482 4.339-0.482 4.036 0 7.089 1.839 0.339 0.196 0.589 0.196 0.339 0 0.589-0.241t0.25-0.616zM21.839 17.768q0-0.714-0.625-1.089-4.232-2.518-9.786-2.518-2.732 0-5.411 0.75-0.857 0.232-0.857 1.143 0 0.446 0.313 0.759t0.759 0.313q0.125 0 0.661-0.143 2.179-0.589 4.482-0.589 4.982 0 8.714 2.214 0.429 0.232 0.679 0.232 0.446 0 0.759-0.313t0.313-0.759zM23.768 13.339q0-0.839-0.714-1.25-2.25-1.304-5.232-1.973t-6.125-0.67q-3.643 0-6.5 0.839-0.411 0.125-0.688 0.455t-0.277 0.866q0 0.554 0.366 0.929t0.92 0.375q0.196 0 0.714-0.143 2.375-0.661 5.482-0.661 2.839 0 5.527 0.607t4.527 1.696q0.375 0.214 0.714 0.214 0.518 0 0.902-0.366t0.384-0.92zM27.429 16q0 3.732-1.839 6.884t-4.991 4.991-6.884 1.839-6.884-1.839-4.991-4.991-1.839-6.884 1.839-6.884 4.991-4.991 6.884-1.839 6.884 1.839 4.991 4.991 1.839 6.884z"></path>
</symbol>
<symbol id="icon-soundcloud" viewBox="0 0 41 32">
<path class="path1" d="M14 24.5l0.286-4.304-0.286-9.339q-0.018-0.179-0.134-0.304t-0.295-0.125q-0.161 0-0.286 0.125t-0.125 0.304l-0.25 9.339 0.25 4.304q0.018 0.179 0.134 0.295t0.277 0.116q0.393 0 0.429-0.411zM19.286 23.982l0.196-3.768-0.214-10.464q0-0.286-0.232-0.429-0.143-0.089-0.286-0.089t-0.286 0.089q-0.232 0.143-0.232 0.429l-0.018 0.107-0.179 10.339q0 0.018 0.196 4.214v0.018q0 0.179 0.107 0.304 0.161 0.196 0.411 0.196 0.196 0 0.357-0.161 0.161-0.125 0.161-0.357zM0.625 17.911l0.357 2.286-0.357 2.25q-0.036 0.161-0.161 0.161t-0.161-0.161l-0.304-2.25 0.304-2.286q0.036-0.161 0.161-0.161t0.161 0.161zM2.161 16.5l0.464 3.696-0.464 3.625q-0.036 0.161-0.179 0.161-0.161 0-0.161-0.179l-0.411-3.607 0.411-3.696q0-0.161 0.161-0.161 0.143 0 0.179 0.161zM3.804 15.821l0.446 4.375-0.446 4.232q0 0.196-0.196 0.196-0.179 0-0.214-0.196l-0.375-4.232 0.375-4.375q0.036-0.214 0.214-0.214 0.196 0 0.196 0.214zM5.482 15.696l0.411 4.5-0.411 4.357q-0.036 0.232-0.25 0.232-0.232 0-0.232-0.232l-0.375-4.357 0.375-4.5q0-0.232 0.232-0.232 0.214 0 0.25 0.232zM7.161 16.018l0.375 4.179-0.375 4.393q-0.036 0.286-0.286 0.286-0.107 0-0.188-0.080t-0.080-0.205l-0.357-4.393 0.357-4.179q0-0.107 0.080-0.188t0.188-0.080q0.25 0 0.286 0.268zM8.839 13.411l0.375 6.786-0.375 4.393q0 0.125-0.089 0.223t-0.214 0.098q-0.286 0-0.321-0.321l-0.321-4.393 0.321-6.786q0.036-0.321 0.321-0.321 0.125 0 0.214 0.098t0.089 0.223zM10.518 11.875l0.339 8.357-0.339 4.357q0 0.143-0.098 0.241t-0.241 0.098q-0.321 0-0.357-0.339l-0.286-4.357 0.286-8.357q0.036-0.339 0.357-0.339 0.143 0 0.241 0.098t0.098 0.241zM12.268 11.161l0.321 9.036-0.321 4.321q-0.036 0.375-0.393 0.375-0.339 0-0.375-0.375l-0.286-4.321 0.286-9.036q0-0.161 0.116-0.277t0.259-0.116q0.161 0 0.268 0.116t0.125 0.277zM19.268 24.411v0 0zM15.732 11.089l0.268 9.107-0.268 4.268q0 0.179-0.134 0.313t-0.313 0.134-0.304-0.125-0.143-0.321l-0.25-4.268 0.25-9.107q0-0.196 0.134-0.321t0.313-0.125 0.313 0.125 0.134 0.321zM17.5 11.429l0.25 8.786-0.25 4.214q0 0.196-0.143 0.339t-0.339 0.143-0.339-0.143-0.161-0.339l-0.214-4.214 0.214-8.786q0.018-0.214 0.161-0.357t0.339-0.143 0.33 0.143 0.152 0.357zM21.286 20.214l-0.25 4.125q0 0.232-0.161 0.393t-0.393 0.161-0.393-0.161-0.179-0.393l-0.107-2.036-0.107-2.089 0.214-11.357v-0.054q0.036-0.268 0.214-0.429 0.161-0.125 0.357-0.125 0.143 0 0.268 0.089 0.25 0.143 0.286 0.464zM41.143 19.875q0 2.089-1.482 3.563t-3.571 1.473h-14.036q-0.232-0.036-0.393-0.196t-0.161-0.393v-16.054q0-0.411 0.5-0.589 1.518-0.607 3.232-0.607 3.482 0 6.036 2.348t2.857 5.777q0.946-0.393 1.964-0.393 2.089 0 3.571 1.482t1.482 3.589z"></path>
</symbol>
<symbol id="icon-codepen" viewBox="0 0 32 32">
<path class="path1" d="M3.857 20.875l10.768 7.179v-6.411l-5.964-3.982zM2.75 18.304l3.446-2.304-3.446-2.304v4.607zM17.375 28.054l10.768-7.179-4.804-3.214-5.964 3.982v6.411zM16 19.25l4.857-3.25-4.857-3.25-4.857 3.25zM8.661 14.339l5.964-3.982v-6.411l-10.768 7.179zM25.804 16l3.446 2.304v-4.607zM23.339 14.339l4.804-3.214-10.768-7.179v6.411zM32 11.125v9.75q0 0.732-0.607 1.143l-14.625 9.75q-0.375 0.232-0.768 0.232t-0.768-0.232l-14.625-9.75q-0.607-0.411-0.607-1.143v-9.75q0-0.732 0.607-1.143l14.625-9.75q0.375-0.232 0.768-0.232t0.768 0.232l14.625 9.75q0.607 0.411 0.607 1.143z"></path>
</symbol>
<symbol id="icon-twitch" viewBox="0 0 32 32">
<path class="path1" d="M16 7.75v7.75h-2.589v-7.75h2.589zM23.107 7.75v7.75h-2.589v-7.75h2.589zM23.107 21.321l4.518-4.536v-14.196h-21.321v18.732h5.821v3.875l3.875-3.875h7.107zM30.214 0v18.089l-7.75 7.75h-5.821l-3.875 3.875h-3.875v-3.875h-7.107v-20.679l1.946-5.161h26.482z"></path>
</symbol>
<symbol id="icon-meanpath" viewBox="0 0 27 32">
<path class="path1" d="M23.411 15.036v2.036q0 0.429-0.241 0.679t-0.67 0.25h-3.607q-0.429 0-0.679-0.25t-0.25-0.679v-2.036q0-0.429 0.25-0.679t0.679-0.25h3.607q0.429 0 0.67 0.25t0.241 0.679zM14.661 19.143v-4.464q0-0.946-0.58-1.527t-1.527-0.58h-2.375q-1.214 0-1.714 0.929-0.5-0.929-1.714-0.929h-2.321q-0.946 0-1.527 0.58t-0.58 1.527v4.464q0 0.393 0.375 0.393h0.982q0.393 0 0.393-0.393v-4.107q0-0.429 0.241-0.679t0.688-0.25h1.679q0.429 0 0.679 0.25t0.25 0.679v4.107q0 0.393 0.375 0.393h0.964q0.393 0 0.393-0.393v-4.107q0-0.429 0.25-0.679t0.679-0.25h1.732q0.429 0 0.67 0.25t0.241 0.679v4.107q0 0.393 0.393 0.393h0.982q0.375 0 0.375-0.393zM25.179 17.429v-2.75q0-0.946-0.589-1.527t-1.536-0.58h-4.714q-0.946 0-1.536 0.58t-0.589 1.527v7.321q0 0.375 0.393 0.375h0.982q0.375 0 0.375-0.375v-3.214q0.554 0.75 1.679 0.75h3.411q0.946 0 1.536-0.58t0.589-1.527zM27.429 6.429v19.143q0 1.714-1.214 2.929t-2.929 1.214h-19.143q-1.714 0-2.929-1.214t-1.214-2.929v-19.143q0-1.714 1.214-2.929t2.929-1.214h19.143q1.714 0 2.929 1.214t1.214 2.929z"></path>
</symbol>
<symbol id="icon-pinterest-p" viewBox="0 0 23 32">
<path class="path1" d="M0 10.661q0-1.929 0.67-3.634t1.848-2.973 2.714-2.196 3.304-1.393 3.607-0.464q2.821 0 5.25 1.188t3.946 3.455 1.518 5.125q0 1.714-0.339 3.357t-1.071 3.161-1.786 2.67-2.589 1.839-3.375 0.688q-1.214 0-2.411-0.571t-1.714-1.571q-0.179 0.696-0.5 2.009t-0.42 1.696-0.366 1.268-0.464 1.268-0.571 1.116-0.821 1.384-1.107 1.545l-0.25 0.089-0.161-0.179q-0.268-2.804-0.268-3.357 0-1.643 0.384-3.688t1.188-5.134 0.929-3.625q-0.571-1.161-0.571-3.018 0-1.482 0.929-2.786t2.357-1.304q1.089 0 1.696 0.723t0.607 1.83q0 1.179-0.786 3.411t-0.786 3.339q0 1.125 0.804 1.866t1.946 0.741q0.982 0 1.821-0.446t1.402-1.214 1-1.696 0.679-1.973 0.357-1.982 0.116-1.777q0-3.089-1.955-4.813t-5.098-1.723q-3.571 0-5.964 2.313t-2.393 5.866q0 0.786 0.223 1.518t0.482 1.161 0.482 0.813 0.223 0.545q0 0.5-0.268 1.304t-0.661 0.804q-0.036 0-0.304-0.054-0.911-0.268-1.616-1t-1.089-1.688-0.58-1.929-0.196-1.902z"></path>
</symbol>
<symbol id="icon-get-pocket" viewBox="0 0 31 32">
<path class="path1" d="M27.946 2.286q1.161 0 1.964 0.813t0.804 1.973v9.268q0 3.143-1.214 6t-3.259 4.911-4.893 3.259-5.973 1.205q-3.143 0-5.991-1.205t-4.902-3.259-3.268-4.911-1.214-6v-9.268q0-1.143 0.821-1.964t1.964-0.821h25.161zM15.375 21.286q0.839 0 1.464-0.589l7.214-6.929q0.661-0.625 0.661-1.518 0-0.875-0.616-1.491t-1.491-0.616q-0.839 0-1.464 0.589l-5.768 5.536-5.768-5.536q-0.625-0.589-1.446-0.589-0.875 0-1.491 0.616t-0.616 1.491q0 0.911 0.643 1.518l7.232 6.929q0.589 0.589 1.446 0.589z"></path>
</symbol>
<symbol id="icon-vimeo" viewBox="0 0 32 32">
<path class="path1" d="M30.518 9.25q-0.179 4.214-5.929 11.625-5.946 7.696-10.036 7.696-2.536 0-4.286-4.696-0.786-2.857-2.357-8.607-1.286-4.679-2.804-4.679-0.321 0-2.268 1.357l-1.375-1.75q0.429-0.375 1.929-1.723t2.321-2.063q2.786-2.464 4.304-2.607 1.696-0.161 2.732 0.991t1.446 3.634q0.786 5.125 1.179 6.661 0.982 4.446 2.143 4.446 0.911 0 2.75-2.875 1.804-2.875 1.946-4.393 0.232-2.482-1.946-2.482-1.018 0-2.161 0.464 2.143-7.018 8.196-6.821 4.482 0.143 4.214 5.821z"></path>
</symbol>
<symbol id="icon-reddit-alien" viewBox="0 0 32 32">
<path class="path1" d="M32 15.107q0 1.036-0.527 1.884t-1.42 1.295q0.214 0.821 0.214 1.714 0 2.768-1.902 5.125t-5.188 3.723-7.143 1.366-7.134-1.366-5.179-3.723-1.902-5.125q0-0.839 0.196-1.679-0.911-0.446-1.464-1.313t-0.554-1.902q0-1.464 1.036-2.509t2.518-1.045q1.518 0 2.589 1.125 3.893-2.714 9.196-2.893l2.071-9.304q0.054-0.232 0.268-0.375t0.464-0.089l6.589 1.446q0.321-0.661 0.964-1.063t1.411-0.402q1.107 0 1.893 0.777t0.786 1.884-0.786 1.893-1.893 0.786-1.884-0.777-0.777-1.884l-5.964-1.321-1.857 8.429q5.357 0.161 9.268 2.857 1.036-1.089 2.554-1.089 1.482 0 2.518 1.045t1.036 2.509zM7.464 18.661q0 1.107 0.777 1.893t1.884 0.786 1.893-0.786 0.786-1.893-0.786-1.884-1.893-0.777q-1.089 0-1.875 0.786t-0.786 1.875zM21.929 25q0.196-0.196 0.196-0.464t-0.196-0.464q-0.179-0.179-0.446-0.179t-0.464 0.179q-0.732 0.75-2.161 1.107t-2.857 0.357-2.857-0.357-2.161-1.107q-0.196-0.179-0.464-0.179t-0.446 0.179q-0.196 0.179-0.196 0.455t0.196 0.473q0.768 0.768 2.116 1.214t2.188 0.527 1.625 0.080 1.625-0.080 2.188-0.527 2.116-1.214zM21.875 21.339q1.107 0 1.884-0.786t0.777-1.893q0-1.089-0.786-1.875t-1.875-0.786q-1.107 0-1.893 0.777t-0.786 1.884 0.786 1.893 1.893 0.786z"></path>
</symbol>
<symbol id="icon-hashtag" viewBox="0 0 32 32">
<path class="path1" d="M17.696 18.286l1.143-4.571h-4.536l-1.143 4.571h4.536zM31.411 9.286l-1 4q-0.125 0.429-0.554 0.429h-5.839l-1.143 4.571h5.554q0.268 0 0.446 0.214 0.179 0.25 0.107 0.5l-1 4q-0.089 0.429-0.554 0.429h-5.839l-1.446 5.857q-0.125 0.429-0.554 0.429h-4q-0.286 0-0.464-0.214-0.161-0.214-0.107-0.5l1.393-5.571h-4.536l-1.446 5.857q-0.125 0.429-0.554 0.429h-4.018q-0.268 0-0.446-0.214-0.161-0.214-0.107-0.5l1.393-5.571h-5.554q-0.268 0-0.446-0.214-0.161-0.214-0.107-0.5l1-4q0.125-0.429 0.554-0.429h5.839l1.143-4.571h-5.554q-0.268 0-0.446-0.214-0.179-0.25-0.107-0.5l1-4q0.089-0.429 0.554-0.429h5.839l1.446-5.857q0.125-0.429 0.571-0.429h4q0.268 0 0.446 0.214 0.161 0.214 0.107 0.5l-1.393 5.571h4.536l1.446-5.857q0.125-0.429 0.571-0.429h4q0.268 0 0.446 0.214 0.161 0.214 0.107 0.5l-1.393 5.571h5.554q0.268 0 0.446 0.214 0.161 0.214 0.107 0.5z"></path>
</symbol>
<symbol id="icon-chain" viewBox="0 0 30 32">
<path class="path1" d="M26 21.714q0-0.714-0.5-1.214l-3.714-3.714q-0.5-0.5-1.214-0.5-0.75 0-1.286 0.571 0.054 0.054 0.339 0.33t0.384 0.384 0.268 0.339 0.232 0.455 0.063 0.491q0 0.714-0.5 1.214t-1.214 0.5q-0.268 0-0.491-0.063t-0.455-0.232-0.339-0.268-0.384-0.384-0.33-0.339q-0.589 0.554-0.589 1.304 0 0.714 0.5 1.214l3.679 3.696q0.482 0.482 1.214 0.482 0.714 0 1.214-0.464l2.625-2.607q0.5-0.5 0.5-1.196zM13.446 9.125q0-0.714-0.5-1.214l-3.679-3.696q-0.5-0.5-1.214-0.5-0.696 0-1.214 0.482l-2.625 2.607q-0.5 0.5-0.5 1.196 0 0.714 0.5 1.214l3.714 3.714q0.482 0.482 1.214 0.482 0.75 0 1.286-0.554-0.054-0.054-0.339-0.33t-0.384-0.384-0.268-0.339-0.232-0.455-0.063-0.491q0-0.714 0.5-1.214t1.214-0.5q0.268 0 0.491 0.063t0.455 0.232 0.339 0.268 0.384 0.384 0.33 0.339q0.589-0.554 0.589-1.304zM29.429 21.714q0 2.143-1.518 3.625l-2.625 2.607q-1.482 1.482-3.625 1.482-2.161 0-3.643-1.518l-3.679-3.696q-1.482-1.482-1.482-3.625 0-2.196 1.571-3.732l-1.571-1.571q-1.536 1.571-3.714 1.571-2.143 0-3.643-1.5l-3.714-3.714q-1.5-1.5-1.5-3.643t1.518-3.625l2.625-2.607q1.482-1.482 3.625-1.482 2.161 0 3.643 1.518l3.679 3.696q1.482 1.482 1.482 3.625 0 2.196-1.571 3.732l1.571 1.571q1.536-1.571 3.714-1.571 2.143 0 3.643 1.5l3.714 3.714q1.5 1.5 1.5 3.643z"></path>
</symbol>
<symbol id="icon-thumb-tack" viewBox="0 0 21 32">
<path class="path1" d="M8.571 15.429v-8q0-0.25-0.161-0.411t-0.411-0.161-0.411 0.161-0.161 0.411v8q0 0.25 0.161 0.411t0.411 0.161 0.411-0.161 0.161-0.411zM20.571 21.714q0 0.464-0.339 0.804t-0.804 0.339h-7.661l-0.911 8.625q-0.036 0.214-0.188 0.366t-0.366 0.152h-0.018q-0.482 0-0.571-0.482l-1.357-8.661h-7.214q-0.464 0-0.804-0.339t-0.339-0.804q0-2.196 1.402-3.955t3.17-1.759v-9.143q-0.929 0-1.607-0.679t-0.679-1.607 0.679-1.607 1.607-0.679h11.429q0.929 0 1.607 0.679t0.679 1.607-0.679 1.607-1.607 0.679v9.143q1.768 0 3.17 1.759t1.402 3.955z"></path>
</symbol>
<symbol id="icon-arrow-left" viewBox="0 0 43 32">
<path class="path1" d="M42.311 14.044c-0.178-0.178-0.533-0.356-0.711-0.356h-33.778l10.311-10.489c0.178-0.178 0.356-0.533 0.356-0.711 0-0.356-0.178-0.533-0.356-0.711l-1.6-1.422c-0.356-0.178-0.533-0.356-0.889-0.356s-0.533 0.178-0.711 0.356l-14.578 14.933c-0.178 0.178-0.356 0.533-0.356 0.711s0.178 0.533 0.356 0.711l14.756 14.933c0 0.178 0.356 0.356 0.533 0.356s0.533-0.178 0.711-0.356l1.6-1.6c0.178-0.178 0.356-0.533 0.356-0.711s-0.178-0.533-0.356-0.711l-10.311-10.489h33.778c0.178 0 0.533-0.178 0.711-0.356 0.356-0.178 0.533-0.356 0.533-0.711v-2.133c0-0.356-0.178-0.711-0.356-0.889z"></path>
</symbol>
<symbol id="icon-arrow-right" viewBox="0 0 43 32">
<path class="path1" d="M0.356 17.956c0.178 0.178 0.533 0.356 0.711 0.356h33.778l-10.311 10.489c-0.178 0.178-0.356 0.533-0.356 0.711 0 0.356 0.178 0.533 0.356 0.711l1.6 1.6c0.178 0.178 0.533 0.356 0.711 0.356s0.533-0.178 0.711-0.356l14.756-14.933c0.178-0.356 0.356-0.711 0.356-0.889s-0.178-0.533-0.356-0.711l-14.756-14.933c0-0.178-0.356-0.356-0.533-0.356s-0.533 0.178-0.711 0.356l-1.6 1.6c-0.178 0.178-0.356 0.533-0.356 0.711s0.178 0.533 0.356 0.711l10.311 10.489h-33.778c-0.178 0-0.533 0.178-0.711 0.356-0.356 0.178-0.533 0.356-0.533 0.711v2.311c0 0.178 0.178 0.533 0.356 0.711z"></path>
</symbol>
<symbol id="icon-play" viewBox="0 0 22 28">
<path d="M21.625 14.484l-20.75 11.531c-0.484 0.266-0.875 0.031-0.875-0.516v-23c0-0.547 0.391-0.781 0.875-0.516l20.75 11.531c0.484 0.266 0.484 0.703 0 0.969z"></path>
</symbol>
<symbol id="icon-pause" viewBox="0 0 24 28">
<path d="M24 3v22c0 0.547-0.453 1-1 1h-8c-0.547 0-1-0.453-1-1v-22c0-0.547 0.453-1 1-1h8c0.547 0 1 0.453 1 1zM10 3v22c0 0.547-0.453 1-1 1h-8c-0.547 0-1-0.453-1-1v-22c0-0.547 0.453-1 1-1h8c0.547 0 1 0.453 1 1z"></path>
</symbol>
</defs>
</svg>
<!--wp_footer-->
</body>
</html>
