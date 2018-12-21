@extends('layouts.admin')
@section('page-head')
    كل جديد
@endsection
@section('main-admin')
<section class="all-users">
        
    <div class="row">
        <a href="{{route('posts.create')}}" class="btn btn-success  ml-auto mr-3"><i class='fas fa-plus'></i> انشاء </a>
    </div>
   
    <div class="row" dir="rtl;">    
           <div class="table-responsive mr-3 mt-1">
            <table class="table table-sm table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">العنوان</th>
                        <th scope="col">المحتوى</th>
                        <th scope="col">التاريخ</th>
                        <th scope="col">التعديلات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>التسبحة</td>
                        <td>التفاصيل</td>
                        <td>08 مايو 2018 </td>
                        <td><a href="{{route('posts.edit',1)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>التسبحة</td>
                        <td>التفاصيل</td>
                        <td>08 مايو 2018 </td>
                        <td><a href="{{route('posts.edit',1)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                </tbody>
            </table>
           </div>
    </div>
    
   
    </div>
</section>
@endsection