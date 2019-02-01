@extends('layouts.admin')
@section('page-head')
    كل الفصول
@endsection
@section('main-admin')
<section class="all-classes">
    <div class="row">
        <a href="{{route('class.create')}}" class="btn btn-success  ml-auto mr-3"><i class='fas fa-plus'></i> اضافة فصل</a>
    </div>
    <div class="row">
        <table class="table table-sm mt-3">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">الاسم</th>
                <th scope="col">الموعد </th>
                <th scope="col">المواد</th>
                <th scope="col">الاعدادات</th>
        
                </tr>
            </thead>
            <tbody>
            @foreach($classes as $class)
                <tr>
                    <th scope="row">{{$class->id}}</th>
                    <th scope="row">{{$class->name}}</th>
                    <th scope="row"></th>
                    <th scope="row">@foreach($class->subjects as $subject)
                     <ul style="display: inline-block;">
                        <li> {{$subject->name}}</li>
                     </ul>
                    @endforeach</th>
                    <td><a href="{{route('class.edit',$class->id)}}"><i class='fas fa-edit'></i></a>
                        <a href="{{route('class.show',$class->id)}}" style="color:#000;"><i class='fas fa-eye'></i></a></td>
                </tr>  
                  @endforeach
               
            </tbody>
        </table>
    </div>

</section>
@endsection