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
                                <th>Tên Nhân Viên</th>
                                <th>Chức Vụ</th>
                                <th>Địa Chỉ</th>
                                <th>SĐT</th>
                                <th>Ca Làm</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                           @foreach($nhanvien as $nv)
                            <tr class="odd gradeX" align="center">
                                <td>{{$nv ->id}}</td>
                                <td>{{$nv ->tennhanvien}}</td>
                                <td>{{$nv ->chucvu}}</td>
                                <td>{{$nv ->diachi}}</td>
                                <td>{{$nv ->sodienthoai}}</td>
                                <td>{{$nv ->calam}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/nhanvien/delete/{{$nv->id}}">Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/nhanvien/edit/{{$nv->id}}">Sửa</a></td>
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