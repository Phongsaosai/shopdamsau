<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Services\Product\ProductAdminService;
use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{

    public function __construct(ProductAdminService $productService)
    {
        $this->productService   = $productService;
    }
    protected $productService;
    public function index()
    {
        return view('admin.product.list',[
            'title'=>'Danh sách sản phẩm',
            'products'=>$this->productService->getAll()
        ]);
    }

    public function create()
    {
        $menu = Menu::get();
        return view('admin.product.add',[
            'title'=>'Thêm Sản Phẩm',
            'products'=>$this->productService->getMenu()
        ])->with('menu',$menu);
    }

    public function store(ProductRequest $request)
    {
        $this->productService->insert($request);

        return redirect()->back();
    }


    public function show(Product $product)
    {
        $menu = Menu::get();
        return view('admin.product.edit',[
            'title'=>'Chỉnh sửa danh muc: '. $product->name,
            'product'=>$product,
            'products'=>$this->productService->getMenu()
        ])->with('menu',$menu);
    }


    public function edit($id)
    {
        //
    }


    public function update(Product $product, ProductRequest $request){
        $result = $this->productService->update($request, $product);
        if ($result){
            return redirect('/admin/products/list');}
        return redirect()->back();
    }

    public function destroy(Request $request): JsonResponse
    {
        $result = $this->productService->destroy($request);
        if($result){
            return response()->json([
                'error'=>false,
                'message'=>'Xoá Thành Công'
            ]);
        }
        return response()->json([
            'title'=>true
        ]);
    }
}
