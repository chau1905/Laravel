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
                        <h1 class="page-header">Nguyên Liệu
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Số Lượng</th>
                                <th>Đơn Vị Tính</th>
                                <th>Giá Tiền</th>
                                <th>Ngày Nhập</th>
                                <th>Tình Trạng</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($nguyenlieu as $nl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$nl ->id}}</td>
                                <td>{{$nl ->tennguyenlieu}}</td>
                                <td>{{$nl ->soluong}}</td>
                                <td>{{$nl ->donvitinh}}</td>
                                <td>{{$nl ->giatien}}</td>
                                <td>{{$nl ->created_at}}</td>
                                <td>{{$nl ->tinhtrang}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/nguyenlieu/delete/{{$nl->id}}">Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/nguyenlieu/edit/{{$nl->id}}">Sửa</a></td>
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