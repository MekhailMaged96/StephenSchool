@extends('layouts.admin')
@section('page-head')
    الاعوام الدراسية 
@endsection
@section('main-admin')
<section class="all-classes">
    <div class="row">
        <a href="{{route('year.create')}}" class="btn btn-success  ml-auto mr-3"><i class='fas fa-plus'></i> اضافة عام دراسى</a>
    </div>
    <div class="row">
        
        <table class="table table-sm mt-3">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">السنة</th>
                <th scope="col">الاعدادت </th>
                </tr>
            </thead>
            <tbody>
                @foreach($years as $year)
                <tr>
                <th scope="row">{{$year->id}}</th>
                <th scope="row"><a href="{{route('grade.allclasses',$year->id)}}">{{$year->year}}</a></th>
                <td><a href="{{route('year.edit',$year->id)}}"><i class='fas fa-edit'></i></a>
                    <a href="#"><i class='fas fa-trash-alt'></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>  
    <div> 
</section>
@endsection
