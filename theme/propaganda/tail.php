<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>
</div><!-- .pro_container end -->
<!-- } 콘텐츠 끝 -->
<!-- 하단 시작 { -->
<footer class="pro_ft">
    <div class="ca clearfix">
        <div class="copyright">
            Copyright (c) 2009 PROPAGANDA. All rights reserved.
        </div>
        <div class="fb-like" data-href="https://www.facebook.com/PropagandaGraphics" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
        <a href="#" class="ir pro_btn_top">
            상단으로
        </a>
        <p class="pro_validator">
            <a href="http://validator.kldp.org/check?uri=referer" onclick="this.href=this.href.replace(/referer$/,encodeURIComponent(document.URL))">
                <img src="//validator.kldp.org/w3cimgs/validate/html5-blue.png" alt="Valid HTML 5" height="15" width="80">
            </a>
        </p>
    </div>
</footer>
<!-- } 하단 끝 -->
<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>