<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\UpdateServices;

class UpdateController extends Controller
{
    protected $upload;

    public function __construct(UpdateServices $upload){
        $this->upload = $upload;
    }

    public function store(Request $request){
        $url = $this->upload->store($request);
        if($url !== false){
            return response()->json([
                'error'=>false,
                'url'=>$url
            ]);
        }
        return response()->json(['error'=>true]);
    }
}
