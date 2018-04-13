 @extends('admin.module.layout.index')
 @section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nhân Viên
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{$err}}<br>
                            @endforeach
                        </div>
                        @endif
                        <form action="admin/nhanvien/add" method="POST">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}"/> 
                            <div class="form-group">
                                <label>Tên Nhân Viên</label>
                                <input class="form-control" name="txtName" placeholder="Nhập tên nhân viên" />
                            </div>
                            <div class="form-group">
                                <label>Chức Vụ</label>
                                <input class="form-control" name="txtChucVu" placeholder="Nhập chức vụ" />
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input class="form-control" name="txtDiaChi" placeholder="Nhập địa chỉ" />
                            </div>
                            <div class="form-group">
                                <label>SĐT</label>
                                <input class="form-control" name="txtSDT" placeholder="Nhập SĐT" />
                            </div>
                            <div class="form-group">
                                <label>Ca Làm</label>
                                <input class="form-control" name="txtCaLam" placeholder="Nhập ca làm" />
                            </div>
                            <div class="form-group">
                                <label>Số Ngày Làm</label>
                                <input class="form-control" name="txtSoNgayLam" placeholder="Nhập số ngày làm" />
                            </div>
                            <button type="submit" class="btn btn-default">Thêm Nhân Viên</button>
                            <button type="reset" class="btn btn-default">Làm Mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection