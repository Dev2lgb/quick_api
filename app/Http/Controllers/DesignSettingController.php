<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesignSetting;

class DesignSettingController extends Controller
{
    //  store : insert
    public function store(Request $request){
        try {
            $inputData = $request->all();
            //  $inputData['추가되는 값'] = '추가되는 값을 입력함';
            $targetData = DesignSetting::create($inputData);
        }catch(\Exception $e){

        }
    }
}
