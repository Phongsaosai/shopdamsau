@extends('admin.main')


@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Name</th>
            <th>Danh Mục</th>
            <th>Giá</th>
            <th>Giá Khuyến Mãi</th>
            <th>Active</th>
            <th>Update</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $key => $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->menu->name}}</td>
                <td>{{$product->price}} VNĐ</td>
                <td>{{$product->price_sale}} VNĐ</td>
                <td>{!! \App\Helpers\Helper::active($product->active) !!}</td>
                <td>{{$product->updated_at}}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/products/edit/{{$product->id}}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" href="#"
                       onclick="removeRow({{$product->id}}, '/admin/products/destroy')">
                        <i class="fas fa-trash" style="color: #6affe4;"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div card-footer clearfix>
        {!!$products->links()!!}
    </div>

@endsection

