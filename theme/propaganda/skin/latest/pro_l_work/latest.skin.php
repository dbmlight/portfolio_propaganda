<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
$thumb_width = 280;
$thumb_height = 400;

/*
프로젝트명 : 시즌10' CREATE GNUBOARD SKIN
스킨튜닝개발자 : 흑횽TM -DEAN 수정-
개발자사이트주소 : http://shoponex.com/?theme=skin
라이선스 : 오픈소스 플러그인 라이선스 참고.
기타 라이선스 : 그누보드 사이트 (sir.kr)를 제외한 타 사이트에서 재배포 금지.
*/

?>


<?php
for ($i=0; $i<count($list); $i++) {
	$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height);

	if($thumb['src']) {
		$thumb_url = $thumb['src'];
	} else {
		$thumb_url = $latest_skin_url."/img/no-image.gif";
	}
?>
            <div class="boxgrid_wrap">
                <div class="boxgrid captionfull">
                    <img src="<?php echo $thumb['src']?>" alt="">
                    <div class="cover boxcaption">
                        <a href="<?php echo $list[$i]['href']?>"></a>
                    </div>
                </div>
			</div>
			
<?php	}	?>

<div style="clear:both"></div>

