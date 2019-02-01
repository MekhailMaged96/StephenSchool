@extends('layouts.main')
@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/styletea.css')}}">
@endsection

@section('content')
    

@include('_partials.withlogo')
<section class="teacher subjects">
<div class="container">
        <div class="row  text-right">
            <div class="col-sm-8 offset-sm-2 col-12">
                <div class="card mt-3 mb-5">
                    <div class="card-header font-weight-bold">
                           مواد الفصل
                    </div>    
                    <div class="card-body">
                           
                <table class="table table-bordered table-sm" dir="rtl">
                    <thead class="thead-light" >
                        <tr>
                          <th scope="col">المادة</th>
                          <th class="text-center" scope="col">المحتوى</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($team->subjects as $subject)
                      <tr>
                          <td>{{$subject->name}}</td>
                          <td><a  class="active-link"href="{{$subject->content}}">{{$subject->content}}</a></td>
                      </tr>
                    @endforeach
                    </tbody>
                </table>
                          
                </div>
            </div>
            </div>
        </div>
      
    </div>
   
  
    
</section>

@include('_partials.footer')
@endsection