<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('admin.includes.head');

    <title>@yield('title')</title>
</head>
<body>
    <div id="wrapper">
    
             @include('admin.includes.header',[
                 'admin'=>$admin
                 ])

            @include('admin.includes.sidenav')

            
            <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        {{}}
                        @yield('content')
                    </div>
                        <!-- /.col-lg-12 -->
                </div>
                    <!-- /.row -->
            </div>
                <!-- /.container-fluid -->
        </div>

        </div>
    </div>

    @include('admin.includes.scripts')    

</body>
</html>