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
                <th scope="col">الاعدادات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td><a href="{{route('class.show',1)}}">ملاك ميخائيل</a></td>
                <td><a href="{{route('class.edit',1)}}"><i class='fas fa-edit'></i></a>
                    <a href="#"><i class='fas fa-trash-alt'></i></a></td>
              
                </tr>
                <tr>
                <th scope="row">2</th>
                <td><a href="#">مار يوحنا</a></td>
                <td><a href="#"><i class='fas fa-edit'></i></a>
                    <a href="#"><i class='fas fa-trash-alt'></i></a></td>
        
                </tr>
            </tbody>
        </table>
    </div>

</section>
@endsection