<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderServices;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductService;

class MainController extends Controller
{
    protected $slider;
    protected $menu;
    protected $product;

    public function __construct(ProductService $product, SliderServices $slider, MenuService $menu)
    {
        $this->slider = $slider;
        $this->product = $product;
        $this->menu = $menu;
    }

    public function index(){
        return view('main',[
            'title'=>'Shop Quần Áo ĐẬM SÂU',
            'sliders'=>$this->slider->show(),
            'menus'=>$this->menu->show(),
            'products'=>$this->product->get()
        ]);
    }
    public function loadProduct(Request $request){
        $page = $request->input('page',0);
        $resutl = $this->product->get($page);
        if(count($resutl) != 0){
            $html = view('product.list', ['products'=>$resutl])->render();

            return response()->json([
                'html'=>$html
            ]);
        }
        return response()->json(['html'=>'']);
    }
}
