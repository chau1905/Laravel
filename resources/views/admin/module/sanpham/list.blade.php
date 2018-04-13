@extends('admin.module.layout.index')
 @section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                 @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                @endif
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Loại Món</th>
                                <th>Giá</th>
                                <th>Đơn Vị Tính</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sanpham as $sp)
                            <tr class="odd gradeX" align="center">
                                <td>{{$sp ->id}}</td>
                                <td>{{$sp ->tenmon}}</td>
                                <td>Đồ uống</td>
                                <td>{{$sp ->dongia}}</td>
                                <td>{{$sp ->donvitinh}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/delete/{{$sp->id}}">Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/nguyenlieu/edit/{{$sp->id}}">Sửa</a></td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection