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
            $inputData = $request->all();
            //  $inputData['추가되는 값'] = '추가되는 값을 입력함';
            $targetData = DesignSetting::create($inputData);
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
