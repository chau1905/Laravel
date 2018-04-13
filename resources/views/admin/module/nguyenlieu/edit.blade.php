@extends('admin.module.layout.index')
 @section('content') 
       <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nguyên Liệu
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/nguyenlieu/edit/{{$nguyenlieu->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/> 
                            <div class="form-group">
                                <label>Tên Nguyên Liệu</label>
                                <input class="form-control" name="txtName" placeholder="{{$nguyenlieu->tennguyenlieu}}" />
                            </div>
                            <div class="form-group">
                                <label>Số Lượng</label>
                                <input class="form-control" name="txtSoLuong" placeholder="{{$nguyenlieu->soluong}}" />
                            </div>
                            <div class="form-group">
                                <label>Đơn Vị Tính</label>
                                <input class="form-control" name="txtDonViTinh" placeholder="{{$nguyenlieu->donvitinh}}" />
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="txtPrice" placeholder="{{$nguyenlieu->giatien}}" />
                            </div>
                            <div class="form-group">
                                <label>Tình Trạng</label>
                                <input class="form-control" name="txtTinhTrang" placeholder="{{$nguyenlieu->tinhtrang}}" />
                            </div>
                            <button type="submit" class="btn btn-default">Sửa Nguyên Liệu</button>
                            <button type="reset" class="btn btn-default">Làm Mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @endsection
