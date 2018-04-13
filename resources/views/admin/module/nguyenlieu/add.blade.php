 @extends('admin.module.layout.index')
 @section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nguyên Liệu
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
                        <form action="admin/nguyenlieu/add" method="POST">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}"/> 
                            <div class="form-group">
                                <label>Tên Nguyên Liệu</label>
                                <input class="form-control" name="txtName" placeholder="Tên nguyên liệu" />
                            </div>
                            <div class="form-group">
                                <label>Số Lượng</label>
                                <input class="form-control" name="txtSoLuong" placeholder="Số lượng nhập" />
                            </div>
                            <div class="form-group">
                                <label>Đơn Vị Tính</label>
                                <input class="form-control" name="txtDonViTinh" placeholder="Thùng, Chai, Kg..." />
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="txtPrice" placeholder="Giá tiền" />
                            </div>
                            <div class="form-group">
                                <label>Tình Trạng</label>
                                <input class="form-control" name="txtTinhTrang" placeholder="Còn hàng, sắp hết, hết hàng" />
                            </div>
                            <button type="submit" class="btn btn-default">Thêm Nguyên Liệu</button>
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