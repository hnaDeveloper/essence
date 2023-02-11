@extends('master')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh Sách Danh Mục</li>
            <li class="breadcrumb-item"><a href="#">Add category</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo Mới Danh Mục</h3>
                <div class="tile-body">
                    <form class="row" method="post">
                        @csrf
<<<<<<< HEAD
                        <div class="form-group col-md-3">
                            <label for="exampleSelect1" class="control-label">Kiểu Danh Mục</label>
                            <select class="form-control" id="exampleSelect1" name="type"
                                value="{{ old('type') }}">
                                <option value="null">-- Chọn Type --</option>
                                @foreach ($cate_type as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                            @error('type')
                                <div class="alert alert-danger">{{ $message }}</div>
=======
                        <div class="form-group col-md-3 ">
                            <label class="control-label">Tên danh mục</label>
                            <input class="form-control" type="text" name="name">
                            @error('name')
                                <div class="alert alert-danger cl-red">{{ $message }}</div>
>>>>>>> origin/bac
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Danh mục cha</label>
                            <select class="form-select" name='parent_id'>
                                <option value="0">Lựa chọn danh mục Nam</option>
                                <option value="1">Lựa chọn danh mục Nữ</option>
                                <option value="2">Lựa chọn danh mục Trẻ em</option>
                                @foreach ($Categories as $item)
                                    <option value="{{$item->parent_id}}">{{$item->name}}</option>
                                @endforeach
                              </select>
                            @error('type')
                                <div class="alert alert-danger cl-red">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-3 ">
                            <label for="exampleSelect1" class="control-label">Trạng Thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="1"
                                    id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Hiện
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="0"
                                    id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Ẩn
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <td class="table-td-center">
                                <button type="submit" class="btn btn-success">Lưu</button>
                                <a href="{{route('admin.category')}}" type="submit" class="btn btn-danger">Hủy</a>
                            </td>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
