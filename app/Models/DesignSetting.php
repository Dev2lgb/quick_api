<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignSetting extends Model
{
    use HasFactory;

    // protected $fillable = [
        //  fillable는 업데이트할 필드를 다 넣는거
    // ];

    //  guarded 는 fillable의 반대임 해당 배열값 제외한 나머지 데이터 업데이트 가능
    protected $guarded = [
        'id'
    ];
}
