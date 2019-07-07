@extends('layouts.main')
@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/stylestu.css')}}">
@endsection
@section('content')
    @include('_partials.withlogo')
    <section class="subject">
        <div class="container">
            <article>
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2">
                        <div class="card">
                            <div class="card-header text-right font-weight-bold">
                                موادى
                            </div>
                            <div class="card-body">
                                <div class="card-text text-right" dir="rtl">
                                    <div><span class="badge badge-secondary">الاسم</span><h5>{{$user->name}}</h5></div>
                                    <div><span class="badge badge-secondary">الرتبة</span><h5>{{$user->rank}}</h5></div>
                                    <div><span class="badge badge-secondary">الحضور</span><h5>{{$user->attendance}}</h5></div>
                                    <div><span class="badge badge-secondary">الفصل</span><h5>@if($user->team){{$user->team->name}}@else لا يوجد فصل @endif</h5></div>
                                    <div><span class="badge badge-secondary mt-1">الميعاد</span>
                                        <h5 dir="ltr">
                                        @if($user->team)
                                            @if($user->team->date)
                                                {{date("Y-m-d h:i A  ", strtotime($user->team->date))}}
                                            @else 
                                        @endif

                                        @endif</h5></div>
                                </div>
                            <a href="{{route('studentresult')}}" class="btn btn-primary ">درجاتى</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        @if($user->team)

        @if(count($user->team->subjects)>0)
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <table class="table" dir="rtl">
                        <thead class="thead-light" >
                            <tr>
                              <th scope="col"> # </th>
                            
                              <th scope="col">المادة</th>
                              <th class="text-center" scope="col">المحتوى</th>
                            </tr>
                        </thead>
                        <tbody>
                       
                        @foreach($user->team->subjects as $subject)
                          <tr>
                              <td>{{$subject->id}}</td>
                              <td>{{$subject->name}}</td>
                              <td><a href="{{$subject->content}}">{{$subject->content}}</a></td>
                          </tr>
                          @endforeach
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
        @endif
    </section>
    @include('_partials.footer')

@endsection









