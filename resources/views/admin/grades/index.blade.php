@extends('layouts.admin')
@section('page-head')
نتائج فصل {{$team->name}}
@endsection
@section('main-admin')
<section class="all-classes">
    <div class="row">
        <a href="{{route('grade.create',$team->id)}}" class="btn btn-success  ml-auto mr-4"><i class='fas fa-plus'></i> اضافة الدرجات</a>
    </div>
    <div class="row" >
        <table class="table table-sm mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">الاسم</th>
                    @if(count($team->subjects)>0)
                    @foreach($team->subjects as $subject)  
                    <th scope="col">{{$subject->name}}  ({{$subject->grade}})</th>
                    @endforeach
                    @else 
                    <th>لا يوجد مواد لهذا الفصل </th>
                    @endif

                </tr>
            </thead>
            <tbody>
                @foreach($team->users as $userr)  
                <tr>
                 <th>{{$userr->id}}</th>
                 <th>{{$userr->name}}</th>
             
                 @foreach($userr->subjects as $subject) 
                 <th> 
                    {{$subject->pivot->grade}}
             
                 </th>
                 @endforeach

                 @foreach($userr->subjects as $subject)
                <th>{{$subject->pivot->id}}</th>
                @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
@endsection
@section('scripts')
    
@endsection