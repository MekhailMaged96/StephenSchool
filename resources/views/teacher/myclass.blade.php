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
                        @if(count($teacher->teams)>0)
                        @foreach($teacher->teams as $team)
                        <div class="card-body">
                            <article>
                            <div class="card-text text-right" dir="rtl">
                                    <div><span class="badge badge-primary">اسم الفصل</span><h5>{{$team->name}}</h5></div>
                                    <div><span class="badge badge-primary">الميعاد</span>
                                        <h5 dir="ltr">
                                        @if($team->date)
                                        {{date("Y-m-d h:i A  ", strtotime($team->date))}}
                                        @else 
                                        @endif</h5></div>
                                    <div><span class="badge badge-primary">google sheet</span><h5></h5></div>
                                  
                            </div>
                            <a href="{{route('teacher.studentsheet',$team->id)}}" class="btn btn-success">كشف الاولاد</a>
                            <a href="{{route('teacher.subjects',$team->id)}}" class="btn btn-danger">مواد الفصل</a>
                            </article>
                        </div>
                    @if(count($teacher->teams)>1)
                        <hr>
                    @endif
                     @endforeach
                     @else 
                     <p class="mb-5 mt-5 text-right font-weight-bold">لا يوجد فصول </p>

                     @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection
