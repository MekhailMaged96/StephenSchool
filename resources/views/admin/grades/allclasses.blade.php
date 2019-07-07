@extends('layouts.admin')
@section('page-head')
  نتيجة عام الدراسى 
@endsection
@section('main-admin')
<section class="all-classes">
    <div class="row">
        @if(count($teams)>0)
        <table class="table table-sm mt-3">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">الفصل</th>
                <th scope="col">الاعدادات</th>
                </tr>
            </thead>
            <tbody>
            
                @foreach($teams as $class)
                <tr>
                    <th scope="row">{{$class->id}}</th>
                    <th scope="row">{{$class->name}}</th>
                    <th scope="row"><a href="{{route('grade.index',$class->id)}}" class="link-grade"><i class='fas fa-archive'></i> الدرجات </a></th>
                </tr>
                @endforeach
           
            </tbody>
        </table>
        @else 
      
        <h2 class="ml-auto mr-3">لا يوجد فصول</h2>
      
        @endif
    </div>

</section>
@endsection