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
                <th scope="col">الاعدادت</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <th scope="row">قبطى</th>
                <td><a href="{{route('subject.edit',1)}}"><i class='fas fa-edit'></i></a>
                    <a href="#"><i class='fas fa-trash-alt'></i></a></td>
                
                </tr>
            </tbody>
        </table>
    </div>    
@endsection
@section('scripts')
    
@endsection