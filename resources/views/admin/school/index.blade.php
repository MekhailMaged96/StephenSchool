@extends('layouts.admin')
@section('page-head')
    كل الفصول
@endsection
@section('main-admin')
<section class="all-classes">
    <div class="row">
        <a href="{{route('school.settings.create')}}" class="btn btn-success  ml-auto mr-3"><i class='fas fa-plus'></i> اضافة</a>
    </div>
    <div class="row">
        <table class="table table-sm mt-3">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col"> النوع</th>
                <th scope="col">الاعدادات</th>
                </tr>
            </thead>
            <tbody>
            @foreach($schools as $school)
            <tr>
                <th scope="row">{{$school->id}}</th>
                @if($school->type=="enrollment")
                <th scope="row">الالتحاق بالمدرسة</th>
                @elseif($school->type=="system")
                <th scope="row">نظام المدرسة</th>
                @elseif($school->type=="history")
                <th scope="row">تاريخ المدرسة</th>
                @elseif($school->type=="schedules")
                <th scope="row">جدول الحصص</th>
                @endif
                <td><a href="{{route('school.settings.show',$school->id)}}"><i class='fas fa-eye'></i></a>
                    <button  class="btn btn-danger btn-sm mr-1"  data-toggle="modal" data-target="#exampleModal"  @click="getdata({{$school->id}})"><i class="fas fa-trash-alt"></i></button></td> 
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">حذف</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-right">
                <p>
              هل انت متاكد انك تريد حذف هذا الخبر
                </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary"   data-dismiss="modal">اغلاق</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal" @click="deleteitem">مسح</button>
            </div>
          </div>
        </div>
    </div>
    @endsection
    @section('scripts')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        
    var app = new Vue({
       el:"#app",
       data:{
       new:"",
       items:[],
       new_id:'',
       },
      
       methods:{
       getdata:function(id){
           this.new=id;
       },
        deleteitem:function(){
            var _this=this;
            
        axios.delete('/admin/school/settings/'+this.new).then(function (response) {
                     location.reload(); 
            });
                        
        },
       }
    }); 
    </script>
@endsection
