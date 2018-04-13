 @extends('admin.module.layout.index')
 @section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Sửa</small>
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
                        <form action="admin/user/edit/{{$user->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/> 
                            <div class="form-group">
                                <label>Tên User</label>
                                <input class="form-control" name="txtUser" placeholder="Tên đăng nhập" value="{{$user -> username}}"/>
                            </div>
                            <div class="form-group">
                                <label>Mật Khẩu</label>
                                <input type="password" class="form-control" name="txtPass" placeholder="Mật khẩu" />
                            </div>
                            <div class="form-group">
                                <label>Xác nhận mật khẩu</label>
                                <input type="password" class="form-control" name="txtRePass" placeholder="Xác nhận mật khẩu" />
                            </div>
                            <div class="form-group">
                                <label>User Level</label>
                                <label class="radio-inline">
                                    <input name="rdoLevel" value="1" checked="" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoLevel" value="2" type="radio">Member
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa User</button>
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