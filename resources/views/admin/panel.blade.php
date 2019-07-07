@extends('layouts.admin')
@section('page-head')
  لوحة التحكم
@endsection
@section('main-admin')
<section class="panel">
    <div class="row">
        <div class="col-md-3 col-sm-3">
            <div class="card-body lead">
                <h5 class="card-title"><i class="fas fa-user-graduate" style="font-size:3em; color:#000;"></i></h5><span>{{$students->count()}}</span>
                <p class="card-text">الطلاب</p> 
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="card-body lead">
                <h5 class="card-title"><i class="fa fa-list-alt" style="font-size:3em; color:#000;"></i></h5><span>{{$classes->count()}}</span>
                <p class="card-text">الفصول</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="card-body lead">
            <h5 class="card-title"><i class="fas fa-pencil-alt" style="font-size:3em; color:#000;"></i></h5><span>{{$posts->count()}}</span>
                <p class="card-text">كل جديد</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="card-body lead">
                <h5 class="card-title"><i class="fa fa-bar-chart" style="font-size:3em; color:#000;"></i></h5><span>225</span>
                <p class="card-text">الزوار</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="card-body lead">
                <h5 class="card-title"><i class="fa fa-user" style="font-size:3em; color:#000;"></i></h5><span>{{$teachers->count()}}</span>
                <p class="card-text">الخدام</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="card-body lead">
                <h5 class="card-title"><i class="fa fa-school" style="font-size:3em; color:#000;"></i></h5><span>{{$schoolnews->count()}}</span>
                <p class="card-text">اخبار المدرسة</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="card-body lead">
                <h5 class="card-title"><i class="fa fa-church" style="font-size:3em; color:#000;"></i></h5><span>{{$churchnews->count()}}</span>
                <p class="card-text">اخبار الكنيسة</p>
            </div>
        </div>
    </div>
</section>
@endsection