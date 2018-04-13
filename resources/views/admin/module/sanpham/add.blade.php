 @extends('admin.module.layout.index')
 @section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/sanpham/add" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/> 
                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input class="form-control" name="txtName" placeholder="Tên sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Loại Món</label>
                                <input class="form-control" name="txtLoai" placeholder="Loại sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="txtGia" placeholder="Giá tiền" />
                            </div>
                            <div class="form-group">
                                <label>Đơn Vị Tính</label>
                                <input class="form-control" name="txtDonVi" placeholder="Đơn vị tính" />
                            </div>
                            <button type="submit" class="btn btn-default">Product Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection