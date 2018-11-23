@extends('layouts.main')
@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/styletea.css')}}">
@endsection

@section('content')
    

@include('_partials.withlogo')
<section class="teachersubjects">
<div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 col-12">
                <div class="card">
                    <div class="card-header text-right font-weight-bold">
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
                      <tr>
                          <td>logic</td>
                          <td><a href="https://www.youtube.com/watch?v=qHnZbHzNthw">https://www.youtube.com/watch?v=qHnZbHzNthw</a></td>
                      </tr>
                      <tr>
                          <td>logic</td>
                          <td><a href="https://www.youtube.com/watch?v=qHnZbHzNthw">https://www.youtube.com/watch?v=qHnZbHzNthw</a></td>
                      </tr>
                      <tr>
                          <td>logic</td>
                          <td><a  class="active-link"href="https://www.youtube.com/watch?v=qHnZbHzNthw">https://www.youtube.com/watch?v=qHnZbHzNthw</a></td>
                      </tr>
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