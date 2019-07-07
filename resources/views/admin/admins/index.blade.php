@extends('layouts.admin')
@section('page-head')
 كل الادمن
@endsection
@section('main-admin')
<section class="all-users">
        
    <div class="row">
        <a href="{{route('admin.settings.create')}}" class="btn btn-success  ml-auto mr-3"><i class='fas fa-user-plus'></i> اضافة الادمن</a>
    </div>
   
    <div class="row" dir="rtl;">    
           <div class="table-responsive mr-3 mt-1">
            <table class="table table-sm table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">الاسم</th>
                        <th scope="col">البريد الالكترونى</th>
                        <th scope="col">الدور</th>
                        <th scope="col">التعديلات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                    <tr>
                        <th scope="row">{{$admin->id}}</th>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->email}}</td>
                        @if($admin->role)
                        <td>{{$admin->role->name}}</td>
                        @else 
                        <td>لا يوجد صلاحية</td>

                        @endif

                        <td><a href="{{route('admin.settings.edit',$admin->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i></a>
                        <button  class="btn btn-danger btn-sm mr-1"  data-toggle="modal" data-target="#exampleModal"  @click="getStu({{$admin->id}})"><i class="fas fa-user-minus"></i></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           </div>
    </div>
    
   
    </div>
</section>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog text-right" role="document">
            <div class="modal-content">
            <div class="modal-header">
            
    
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            هل انت متاكد انك تريد حذف هذا الادمن
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" @click="deleteStu()">حذف</button>
            </div>
            </div>
        </div>
    </div>
 @endsection
@section('scripts')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript">
        var app = new Vue({
                el:"#app",
                data:{
                    Id:"",
            
                },
                methods:{
                    getStu:function getStu(studentId){
                       this.id=studentId;
                    },
                    deleteStu:function deleteStu() {
                    var _this = this;
             
                    axios.delete('/admin/student/'+this.id).then(function (response) {
                        location.reload(); 
                    });
                    
                    },
                },
        });
    
    </script> 
@endsection
    