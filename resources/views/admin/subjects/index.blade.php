@extends('layouts.admin')
@section('page-head')
 كل المواد
@endsection
@section('main-admin')
<section class="all-classes">
    <div class="row">
        <a href="{{route('subject.create')}}" class="btn btn-success  ml-auto mr-4"><i class='fas fa-plus'></i> اضافة مادة</a>
    </div>
    <div class="row" >
        <table class="table table-sm mt-3">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">الاسم</th>
                <th scope="col">المحتوى </th>
                <th scope="col">الاعدادت</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subjects as $subject)
                <tr>
                <th scope="row">{{$subject->id}}</th>
                <th scope="row">{{$subject->name}}</th>
                <td scope="row"><a href="{{$subject->content}}" style="color:blue;">{{$subject->content}}</a></td>
                <td><a href="{{route('subject.edit',$subject->id)}}"><i class='fas fa-edit'></i></a>
                    <a href="#"><i class='fas fa-trash-alt'></i></a></td>
                
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
@endsection
@section('scripts')
    
@endsection