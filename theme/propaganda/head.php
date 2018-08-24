<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- dean_상단 시작 { -->
<div id="pro_header">
    <header class="pro_hd">
        <div class="ca clearfix">
            <h1 class="logo">
                <a href="<?php echo G5_URL ?>" class="ir">
                    PROPAGANDA
                </a>
            </h1>
            <div id="mn_btn">
                <a href="#" class="mn_opn">
                    <img src="<?php echo G5_THEME_IMG_URL; ?>/pro_mn_opn.png" alt="메뉴 열기">
                </a>
                <a href="#" class="mn_clse">
                    <img src="<?php echo G5_THEME_IMG_URL; ?>/pro_mn_clse.png" alt="메뉴 닫기">
                </a>
            </div>
            <ul class="gnb">
                <li class="menu mn_work">
                    <a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=WORK">WORK</a>
                </li>
                <li class="menu mn_board">
                    <a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=BOARD">BOARD</a>
                </li>
                <li class="menu mn_store">
                    <a href="<?php echo G5_SHOP_URL; ?>">STORE</a>
                </li>
            </ul>
        </div>
    </header>
</div>
<!-- } 상단 끝 -->

<!-- 콘텐츠 시작 { -->
<div class="pro_container clearfix">