@extends('layouts.main')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/styletea.css')}}">
@endsection

@section('content')
    @include('_partials.withlogo')
    <section class="myclass">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2">
                    <div class="card">
                        <div class="card-header text-right font-weight-bold">
                                فصولى
                        </div>
                        <div class="card-body">
                            <article>
                            <div class="card-text text-right" dir="rtl">
                                    <div><span class="badge badge-primary">اسم الفصل</span><h5>الملاك ميخائيل</h5></div>
                                    <div><span class="badge badge-primary">الميعاد</span><h5>wwww</h5></div>
                                    <div><span class="badge badge-primary">google sheet</span><h5>wwww</h5></div>
                                  
                            </div>
                            <a href="{{route('teacher.studentsheet')}}" class="btn btn-success">كشف الاولاد</a>
                            <a href="{{route('teacher.subjects')}}" class="btn btn-danger">مواد الفصل</a>
                            </article>
                        </div>
                        <hr>
                        <div class="card-body">
                               
                                <article>
                                <div class="card-text text-right" dir="rtl">
                                        <div><span class="badge badge-primary">اسم الفصل</span><h5>ميخائيل ماجد بولس</h5></div>
                                        <div><span class="badge badge-primary">الميعاد</span><h5>wwww</h5></div>
                                        <div><span class="badge badge-primary">google sheet</span><h5>wwww</h5></div>
                                        
                                      
                                        
                                </div>
                                <a href="{{route('teacher.studentsheet')}}" class="btn btn-success">كشف الاولاد</a>
    
                                </article>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection