<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head');

    <title>@yield('title')</title>
</head>
<body>
    <div id="wrapper">
    
             @include('includes.header',[
                 'user'=> $user
                 ])

            @include('includes.sidenav')

            
            <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        {{$user}}
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

    @include('includes.scripts')    

</body>
</html>