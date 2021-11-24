@extends('admin.element.mainTemplate')
@section('management-menu')
    <li class="nav-item menu-is-opening menu-open">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Quản lý
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/admin/users/list" class="nav-link active">
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal" style="width: 250px;" id="createUserBtn">Tạo Người Dùng Mới</button>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Loại Người Dùng</th>
                            <th>Ngày Đăng Ký</th>
                            <th>Trạng Thái</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Phạm Thế Hùng</td>
                            <td>hungpt@gmail.com</td>
                            <td>Nhân Viên</td>
                            <td>2021-11-01</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td class="project-actions text-center">
                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#addUserModal" data-whatever="@mdo"><i class="fas fa-pencil-alt"></i>Edit</button>
                                <button class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Lê Duy Thái</td>
                            <td>thaild@gmail.com</td>
                            <td>Nhân Viên</td>
                            <td>2021-11-01</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td class="project-actions text-center">
                                <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"></i>Edit</a>
                                <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i>Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lê Hà Thu</td>
                            <td>thu@gmail.com</td>
                            <td>Nhân Viên</td>
                            <td>2021-11-01</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td class="project-actions text-center">
                                <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"></i>Edit</a>
                                <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i>Delete</a>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Loại Người Dùng</th>
                            <th>Ngày Đăng Ký</th>
                            <th>Trạng Thái</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
    <!-- /.content -->
    <!-- Add User modal -->
    @include('admin.users.addUserModal')
@endsection

@section('footer')
    <script>
        $(function () {

        });
    </script>
    <script src="/admin/user.js"></script>
@endsection
