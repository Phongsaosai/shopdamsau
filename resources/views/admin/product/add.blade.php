@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="product">Tên sản phẩm</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Nhập tên sản phẩm mới">
            </div>
            <div class="form-group">
                <label>Danh mục</label>
                <select class="form-control" name="menu_id">
                    @foreach($menu as $menu)
                        <option value="{{$menu->id}}">{{$menu->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="product">Giá</label>
                        <input type="number" name="price" value="{{old('price')}}" class="form-control" placeholder="Nhập số tiền bán">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="product">Giá ưu đãi</label>
                        <input type="number" name="price_sale" value="{{old('price_sale')}}" class="form-control" placeholder="Nhập số tiền ưu đãi">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea name="description" value="{{old('description')}}" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Mô tả chi tiết</label>
                <textarea name="content" value="{{old('content')}}" id="content" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="product">Ảnh sản phẩm</label>
                <input type="file" class="form-control" id="upload">
                <div id="image_show">

                </div>
                <input type="hidden" name="thumb" id="thumb">
            </div>
            <div class="form-group">
                <label>Kích hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active">
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo sản phẩm</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
