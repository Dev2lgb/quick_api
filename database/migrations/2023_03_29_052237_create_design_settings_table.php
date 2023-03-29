<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('ds_used')->default(0)->comment('사용여부 1:사용, 0:미사용');
            $table->string('ds_layout')->default('layout_fullpage')->comment('레이아웃형태 layout_fullpage:풀페이지, layout_pixcel:픽셀');
            $table->integer('ds_wrap')->default(0)->comment('기준정렬사이즈');
            $table->integer('ds_login_used')->default(0)->comment('로그인 활성여부 사용:1, 미사용:0');
            $table->string('ds_login_title')->default('')->comment('좌측상단 멘트');
            $table->string('ds_login_title_color')->default('ffffff')->comment('멘트 컬러값');
            $table->string('ds_login_title_file')->default('')->comment('멘트대신 이미지');
            $table->string('ds_pointcolor')->default('ffffff')->comment('포인트 색상   데이터형태:포인트색상|서브색상1|서브색상2  ex ffffff|ff0000|c8c8c8');
            $table->integer('ds_logo')->default(1)->comment('이미지/텍스트 1:이미지, 0:텍스트');
            $table->string('ds_logo_filenm')->default('')->comment('로고파일명');
            $table->string('ds_logo_textnm')->default('')->comment('로고텍스트명');
            $table->integer('ds_logo_foot')->default(1)->comment('하단 이미지/텍스트/미등록 1:이미지, 2:텍스트, 0:미등록');
            $table->string('ds_logo_foot_filenm')->default('')->comment('하단 로고파일명');
            $table->string('ds_logo_foot_textnm')->default('')->comment('하단 로고텍스트명');
            $table->integer('ds_fav')->default(1)->comment('파비콘 png/ico/미등록 1:png, 2:ico, 0:미등록');
            $table->string('ds_fav_filenm')->default('')->comment('파비콘 파일명');
            $table->integer('ds_kakao_thumb_used')->default(1)->comment('카카오썸네일 사용:1, 미사용:0');
            $table->string('ds_kakao_thumb_filenm')->default('')->comment('카카오썸네일 파일명');
            $table->string('ds_kakao_thumb_textnm')->default('')->comment('카카오썸네일 안내문구');
            $table->string('ds_menu_align')->default('same')->comment('메뉴정렬 좌측정렬:left, 가운데:center, 우측:right, 모아정렬:inner, 균등정렬:same');
            $table->integer('ds_menu_font')->default(15)->comment('메뉴폰트사이즈 숫자값으로만 받음');
            $table->string('ds_menu_font_color')->default('000000')->comment('메뉴폰트 기본색상');
            $table->string('ds_menu_over_type')->default('0|000000|000000')->comment('메뉴오버시 스타일: 메뉴오버타입|오버시폰트색상|오버시밑줄색상');
            $table->integer('ds_tmenu_height')->default(80)->comment('메뉴바 높이 숫자값으로만 받음');
            $table->string('ds_tmenu_back')->default('ffffff')->comment('메뉴바 배경 포인트색상:point, 서브포인트색상1:point_sub1, 서브포인트색상2:point_sub2, 흰색:ffffff');
            $table->string('ds_tmenu_opacity')->default('')->comment('메뉴바 투명도  데이터형태 : 투명도퍼센트|색코드  ex)49|ff00ef');
            $table->integer('ds_tmenu_line')->default(1)->comment('메뉴바 하단 라인 사용:1, 미사용:0');
            $table->string('ds_tmenu_line_opacity')->default('')->comment('메뉴바 하단 라인 투명도  데이터형태 : 투명도퍼센트|색코드  ex)49|ff00ef');
            $table->integer('ds_tmenu_fix')->default(1)->comment('메뉴바 고정   고정:1, 미설정:0');
            $table->string('ds_tmenu_fix_back')->default('ffffff')->comment('고정바 배경 포인트색상:point, 서브포인트색상1:point_sub1, 서브포인트색상2:point_sub2, 흰색:ffffff');
            $table->string('ds_tmenu_fix_font_color')->default('ffffff')->comment('고정바 폰트색  포인트색상:point, 서브포인트색상1:point_sub1, 서브포인트색상2:point_sub2, 흰색:ffffff');
            $table->string('ds_visual')->default('basic')->comment('비주얼영역  표준:basic, 비주얼 스타일:stylea, 레이아웃 스타일:styleb, 전체스타일:stylec, 메뉴분할스타일:styled');
            $table->integer('ds_visual_option')->default(0)->comment('비주얼옵션   이미지(기본):0,  슬라이드:1 ');
            $table->string('ds_layer_opacity')->default('')->comment('레이어 Dark 투명도  데이터형태 : 투명도퍼센트|색코드  ex)49|ff00ef');
            $table->string('ds_visual_pager')->default('')->comment('페이져 스타일  원형:stylea, 좌우버튼:styleb, 전체버튼:stylec');
            $table->float('ds_visual_time',2,2)->default(0.5)->comment('슬라이드시간');
            $table->string('ds_visual_text_align')->default('left')->comment('텍스트정렬  왼쪽정렬:left, 가운데정렬:center');
            $table->string('ds_visual_text_ani')->default('left')->comment('텍스트애니메이션  왼쪽:left, 오른쪽:right, 아래:down, 위:up, 효과없음:blank');
            $table->integer('ds_visual_text_show')->default(1)->comment('텍스트효과 우선도   동시에나타내기:1, 순서대로 나타내기:0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('design_settings');
    }
};
