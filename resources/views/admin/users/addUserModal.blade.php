<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 60%;">
        <div class="modal-content card card-info">
            <div class="modal-header card-header">
                <h5 class="modal-title" id="exampleModalLabel">Tạo Người Dùng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/user/add">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tên Người Dùng</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="userNm" placeholder="Nhập Tên Người Dùng">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tên Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="userMail" placeholder="Nhập Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="passWord" placeholder="Nhập password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Loại Người Dùng</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="user_type" id="userType">
                                    <option value=""></option>
                                    <option value="1">Admin</option>
                                    <option value="2">Nhân Viên</option>
                                    <option value="3">Người Dùng Thường</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" style="width: 150px;">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
