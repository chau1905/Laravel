 @extends('admin.module.layout.index')
 @section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/orderbill/ban" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/> 
                           
                            <button type="submit" class="btn btn-default">Ban</button>
                            <button type="reset" class="btn btn-default">Ban</button>
                            <button type="submit" class="btn btn-default">Ban</button>
                            <button type="reset" class="btn btn-default">Ban</button>
                            <button type="submit" class="btn btn-default">Ban</button>
                            <button type="reset" class="btn btn-default">Ban</button>
                            <button type="submit" class="btn btn-default">Ban</button>
                            <button type="reset" class="btn btn-default">Ban</button>
                            <li>
                                    <a href="admin/orderbill/ban">Ca 1</a>
                                </li>
                                <li>
                                    <a href="admin/orderbill/ban">Ca 2</a>
                                </li>
                                <li>
                                    <a href="admin/orderbill/ban">Ca 3</a>
                                </li>

                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection