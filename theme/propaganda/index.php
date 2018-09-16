<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<!-- popup 시작 { -->
<div class="popup">
    <a href="#" class="btn_popup_close ir">닫기</a>
</div>
<!-- } popup 끝 -->

<!-- info 시작 { -->
<div class="info">
    <div class="ca">
        <div class="info_box">
            <h1 class="info_logo">
                <img src="<?php echo G5_THEME_IMG_URL; ?>/info_logo.png" alt="프로파간다">
            </h1>
            <span class="line info_line"></span>
            <p class="info_txt">
                프로파간다(PROPAGANDA)는 영화, 공연, 캘리그라피 등<br>
                엔터테인먼트 분야를 전문으로 하는 디자인 스튜디오 입니다.<br>
                프로파간다는 클라이언트의 만족은 물론<br>
                우리의 크리에이티브 열정을 표현하기 위해 디자인을 합니다.
            </p>
        </div>
    </div>
</div>
<!-- } info 끝 -->

<!-- staff 시작 { -->
<div class="staff">
    <div class="ca">
        <h2>STAFF</h2>
        <div class="line staff_line"></div>
        <div class="stf_co clearfix">
            <div class="stf_box">
                <div class="stf">
                    <img src="<?php echo G5_THEME_IMG_URL; ?>/ch.png" alt="최지웅">
                    <p class="stf_info">
                        <span class="stf_name">
                            CHOI JEE WOONG
                        </span>
                        GRAPHIC DESIGNER<br>
                        e-mail choijw21@hanmail.net<br>
                        twitter @propaganda01
                    </p>
                </div>
            </div>
            <div class="stf_box">
                <div class="stf">
                    <img src="<?php echo G5_THEME_IMG_URL; ?>/park.png" alt="박동우">
                    <p class="stf_info">
                        <span class="stf_name">
                            PARK DONG WOO
                        </span>
                        GRAPHIC DESIGNER<br>
                        e-mail coolbaby0904@hanmail.net<br>
                        twitter @propaganda02
                    </p>
                </div>
            </div>
            <div class="stf_box">
                <div class="stf">
                    <img src="<?php echo G5_THEME_IMG_URL; ?>/lee.png" alt="이동형">
                    <p class="stf_info">
                        <span class="stf_name">
                            LEE DONG HYOUNG
                        </span>
                        GRAPHIC DESIGNER<br>
                        e-mail ldh6683@hanmail.net<br>
                        twitter @papeeeee
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- } staff 끝 -->

<!-- 최신글 시작 { -->
<div class="work pro_latest clearfix">
    <div class="ca">
        <h2>
            OUR WORK
        </h2>
        <span class="line work_line"></span>
        <?php
        //  최신글
        $sql = " select bo_table
                    from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
                    where a.bo_device <> 'mobile' ";
        if(!$is_admin)
            $sql .= " and a.bo_use_cert = '' ";
        $sql .= " and a.bo_table not in ('BOARD') ";     //공지사항과 갤러리 게시판은 제외
        $sql .= " order by b.gr_order, a.bo_order ";
        $result = sql_query($sql);
        for ($i=0; $row=sql_fetch_array($result); $i++) {
            if ($i%2==1) $lt_style = "margin-left:2%";
            else $lt_style = "";
        ?>
        <div style="<?php echo $lt_style ?>" class="lt_wr clearfix">
            <?php
            // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
            // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
            // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
            echo latest('theme/pro_l_work', $row['bo_table'], 16, 24);
            ?>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<!-- } 최신글 끝 -->

<!-- contact 시작 { -->
<div class="contact">
    <div class="ca clearfix">
        <h2>
            CONTACT
        </h2>
        <span class="line contact_line"></span>
        <div id="map"></div>
        <div class="contact_info_box clearfix">
            <dl class="contact_info">
                <dt>ADRESS&#46;</dt>
                <dd>
                    서울시 강남구 신사동 524&#45;20번지 301호<br>
                    &#35;301&#44; 524&#45;20&#44; SINSA&#45;DONG&#44; GANGNAM&#45;GU&#44; SEOUL 135&#45;888&#44; KOREA
                </dd>
                <dt>TEL&#46;</dt>
                <dd>
                    &#40;&#43;82&#41;02&#45;6403&#45;6856
                </dd>
                <dt>E&#45;MAIL&#46;</dt>
                <dd>
                    choijw21&#64;hanmail&#46;net
                </dd>
            </dl>
        </div>
        <div class="formMail">
            <p>메세지를 보내주세요&#40;&#42;필수입력&#41;</p>
            <form method="post" action="<?php echo G5_THEME_URL; ?>/form_mail.php">
                <fieldset>
                    <input type="text" placeholder="이름 *" id="name" name="name" required="required">
                    <input type="email" placeholder="이메일 *" id="email" name="email" required="required">
                    <textarea placeholder="메세지 *" name="content" id="content" required="required"></textarea>
                    <input type="submit" value="SEND" name="submit" class="send_btn">
                </fieldset>
            </form>
        </div>
    </div>    
</div>
<!-- } contact 끝 -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>