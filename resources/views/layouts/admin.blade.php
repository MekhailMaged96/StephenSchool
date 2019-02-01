<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/adminsidebar.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
<link rel="stylesheet" href="{{asset('css/styleadmin.css')}}">
@yield('styles')
<title> مدرسة الشمامسة @yield('title')</title>
</head>
<body>
@include('_partials.nav')
@include('_partials.message')
<div class="container-fluid " id="app">
    <div class="row d-flex d-md-block flex-nowrap wrapper">
        <div class="col-md-2 float-right col-1 pl-0 pr-0 collapse width " id="sidebar">
                <div class="list-group border-0 card text-center text-md-center">
                <a href="{{route('admin.panel')}}" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><span class="d-none d-md-inline">لوحة التحكم </span><i class="fa fa-gear"></i></a>
                <a href="#menu1" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><span class="d-none d-md-inline">الرئيسية</span>  <i class="fa fa-home"></i> </a>
                <div class="collapse" id="menu1">
                        <a href="{{route('readings.index')}}" class="list-group-item" data-parent="#menu1">القطمارس والسنكسار <i class="fas fa-book-open"></i></a>
                        <a href="{{route('posts.index')}}" class="list-group-item" data-parent="#menu1">كل جديد <i class="fas fa-pencil-alt"></i></a>
                </div>
                <a href="#menu4" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><span class="d-none d-md-inline">الاخبار</span>  <i class="fa fa-newspaper-o"></i> </a>
                <div class="collapse" id="menu4">
                        <a href="{{route('news.school.index')}}" class="list-group-item" data-parent="#menu1">اخبار المدرسة <i class="fas fa-school"></i></a>
                        <a href="{{route('news.church.index')}}" class="list-group-item" data-parent="#menu1">اخبار الكنيسة<i class="fas fa-church"></i></a>
                </div>
                
                <a href="#menu5" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false" ><span class="d-none d-md-inline">الكاميرا</span> <i class="fa fa-camera"></i> </a>
                <div class="collapse" id="menu5">
                    <a href="{{route('album.index')}}" class="list-group-item" data-parent="#menu1">البوم<i class="fas fa-image"></i></a>
                    
            </div>
                
                <a href="#menu2" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><span class="d-none d-md-inline">الطلاب</span> <i class="fas fa-user-graduate"></i> </a>
                <div class="collapse" id="menu2"> 
	
                    <a href="{{route('student.index')}}" class="list-group-item" data-parent="#menu2">كل الطلاب <i class="fas fa-users"></i></a>
                    <a href="{{route('subject.index')}}" class="list-group-item" data-parent="#menu2">المواد <i class="fas fa-book-open"></i></a> 
                    <a href="{{route('class.index')}}" class="list-group-item" data-parent="#menu2">الفصول <i class="fa fa-list-alt"></i></a>

                </div>
                <a href="#menu3" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><span class="d-none d-md-inline">الخدام</span> <i class="fas fa-user-tie"></i> </a>
                <div class="collapse" id="menu3"> 
	
                    <a href="{{route('teacher.index')}}" class="list-group-item" data-parent="#menu3">كل الخدام <i class="fas fa-users"></i></a>

                </div>
                <!----
                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-user-graduate"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-th"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-gear"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-calendar"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-envelope"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-bar-chart-o"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-star"></i> <span class="d-none d-md-inline">Link</span></a>
                !--->
            </div>
        </div>
    

        <main class="col-md-11  col px-5 pl-md-2 pt-2 main mx-auto">
            <a href="#" data-target="#sidebar" data-toggle="collapse" aria-expanded="false"><i class="fa fa-navicon fa-2x py-2 p-1"></i></a>
            <div class="page-header">
              <h3>@yield('page-head')</h3>
            </div>
            <hr>
          
                @yield('main-admin')
        
        </main>
    </div>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
@yield('scripts')
</body>
</html>
