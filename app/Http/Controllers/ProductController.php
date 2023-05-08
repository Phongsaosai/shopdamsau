<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index($id = '', $slug = ''){
        $sliders = Slider::get();
        $menus = Menu::get();
        $products = Product::get();
        $product = $this->productService->show($id);
        return view('product.content',[
            'title'=>$product->name,
            'product'=>$product
        ])->with(['sliders'=>$sliders, 'menus'=>$menus, 'products'=>$products]);
    }
}
