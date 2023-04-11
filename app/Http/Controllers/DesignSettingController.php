<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesignSetting;
use Illuminate\Support\Facades\Log;

class DesignSettingController extends Controller
{
    //  store : insert
    public function store(Request $request){
        try {
            //  $inputData = $request->all();
            //  $inputData['추가되는 값'] = '추가되는 값을 입력함';
            //  $targetData = DesignSetting::create($inputData);
            $targetData = DesignSetting::create([
                'ds_used' => $request->ds_used,
                'ds_layout' => $request->ds_layout,
                'ds_wrap' => $request->ds_wrap,
                'ds_login_used' => $request->ds_login_used,
                'ds_login_title' => $request->ds_login_title,
                'ds_login_title_color' => $request->ds_login_title_color,
                'ds_login_title_file' => $request->ds_login_title_file,
                'ds_pointcolor' => $request->ds_pointcolor,
                'ds_logo' => $request->ds_logo,
                'ds_logo_filenm' => $request->ds_logo_filenm,
                'ds_logo_textnm' => $request->ds_logo_textnm,
                'ds_logo_foot' => $request->ds_logo_foot,
                'ds_logo_foot_filenm' => $request->ds_logo_foot_filenm,
                'ds_logo_foot_textnm' => $request->ds_logo_foot_textnm,
                'ds_fav' => $request->ds_fav,
                'ds_fav_filenm' => $request->ds_fav_filenm,
                'ds_kakao_thumb_used' => $request->ds_kakao_thumb_used,
                'ds_kakao_thumb_filenm' => $request->ds_kakao_thumb_filenm,
                'ds_kakao_thumb_textnm' => $request->ds_kakao_thumb_textnm,
                'ds_menu_align' => $request->ds_menu_align,
                'ds_menu_font' => $request->ds_menu_font,
                'ds_menu_font_color' => $request->ds_menu_font_color,
                'ds_menu_over_type' => $request->ds_menu_over_type,
                'ds_tmenu_height' => $request->ds_tmenu_height,
                'ds_tmenu_back' => $request->ds_tmenu_back,
                'ds_tmenu_opacity' => $request->ds_tmenu_opacity,
                'ds_tmenu_line' => $request->ds_tmenu_line,
                'ds_tmenu_line_opacity' => $request->ds_tmenu_line_opacity,
                'ds_tmenu_fix' => $request->ds_tmenu_fix,
                'ds_tmenu_fix_back' => $request->ds_tmenu_fix_back,
                'ds_tmenu_fix_font_color' => $request->ds_tmenu_fix_font_color,
                'ds_visual' => $request->ds_visual,
                'ds_visual_option' => $request->ds_visual_option,
                'ds_layer_opacity' => $request->ds_layer_opacity,
                'ds_visual_pager' => $request->ds_visual_pager,
                'ds_visual_time' => $request->ds_visual_time,
                'ds_visual_text_align' => $request->ds_visual_text_align,
                'ds_visual_text_ani' => $request->ds_visual_text_ani,
                'ds_visual_text_show' => $request->ds_visual_text_show,
                'ds_pointcolor2' => $request->ds_pointcolor2,
                'ds_pointcolor3' => $request->ds_pointcolor3
            ]);
            $code = 200;
            $status = 'succcess';
            $message = '등록에 성공하였습니다.';

            return response()->json([
                'data' => $targetData,
                'status' => $status,
                'message' => $message,
            ], $code);

        }catch(\Exception $e){
            $code = 200;
            $status = 'fail';
            $message = '등록에 실패하였습니다.';

            $error = sprintf('[%s],[%d] ERROR:[%s]', __METHOD__, __LINE__, json_encode($e->getMessage(), true));
            Log::error($error);

            return response()->json([
                'status' => $status,
                'message' => $message,
                'error' => $error,
            ], $code);
        }
    }

    //  index : list 추출
    public function index(Request $request){
        try {
            $targetData = DesignSetting::paginate(15);
            $code = 200;
            $status = 'succcess';
            $message = '리스트 추출에 성공하였습니다.';

            return response()->json([
                'data' => $targetData,
                'status' => $status,
                'message' => $message,
            ], $code);

        }catch(\Exception $e){
            $code = 200;
            $status = 'fail';
            $message = '리스트 추출에 실패하였습니다.';

            $error = sprintf('[%s],[%d] ERROR:[%s]', __METHOD__, __LINE__, json_encode($e->getMessage(), true));
            Log::error($error);

            return response()->json([
                'status' => $status,
                'message' => $message,
                'error' => $error,
            ], $code);
        }
    }
}
