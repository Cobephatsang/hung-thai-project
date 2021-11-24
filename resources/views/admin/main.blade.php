@extends('admin.element.mainTemplate')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('management-menu')
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Quản lý
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/admin/users/list" class="nav-link">
                    &nbsp;&nbsp;<i class="far fa-address-book nav-icon"></i>
                    <p>Quản lí người dùng</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                    &nbsp;&nbsp;<i class="far fa-circle nav-icon"></i>
                    <p>Quản lý sản phẩm</p>
                </a>
            </li>
        </ul>
    </li>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ABC</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Khu Vực Nhập Danh Mục</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" method="POST">
                <div class="card-body">
                    @include('admin.element.alert')
                    <div class="form-group">
                        <label for="menu">Tên Danh Mục</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="menu">Danh Mục</label>
                        <select class="form-control" name="parent_id">
                            <option value="0">Danh Mục Cha</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="menu">Mô Tả</label>
                        <textarea type="text" name="description" class="form-control" id="description"> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="menu">Mô Tả Chi Tiết</label>
                        <textarea type="text" name="content" class="form-control" id="content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="menu">Kích Hoạt</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" value="1" id="customRadio1" name="active" checked="">
                            <label for="customRadio1" class="custom-control-label">Có</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" value="0" id="customRadio2" name="active">
                            <label for="customRadio2" class="custom-control-label">Không</label>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                @csrf
            </form>
        </div>
    </section>
    <!-- /.content -->
@endsection

@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection
