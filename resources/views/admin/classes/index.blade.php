@extends('layouts.admin')
@section('page-head')
    كل الفصول
@endsection
@section('main-admin')
<section class="all-classes">
    <div class="row">
        @isteams
        <a href="{{route('class.create')}}" class="btn btn-success  ml-auto mr-3"><i class='fas fa-plus'></i> اضافة فصل</a>
        @endisteams
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
                    @if($class->date)
                    <th scope="row" dir="ltr">{{date("Y-m-d h:i A  ", strtotime($class->date))}}</th>
                    @else 
                    <th scope="row"></th>
                     @endif
                    <th scope="row">@foreach($class->subjects as $subject)
                     <ul style="display: inline-block;">
                        <li> {{$subject->name}}</li>
                     </ul>
                    @endforeach</th>

                    
                    <td>
                        @isteams
                        <a href="{{route('class.edit',$class->id)}}"><i class='fas fa-edit'></i></a>
                       
                        @endisteams

                        <a href="{{route('class.show',$class->id)}}" style="color:#000;"><i class='fas fa-eye'></i></a>
                        @isteams
                        <a href="#" data-toggle="modal" data-target="#exampleModal"  @click="getdata({{$class->id}})"><i class="fas fa-trash-alt"></i></a>
                        @endisteams
                    </td>
                </tr>  
                  @endforeach
               
            </tbody>
        </table>
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
        هل انت متاكد انك تريد حذف هذا الفصل
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" @click="deleteitem">حذف</button>
        </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
var app = new Vue({
   el:"#app",
   data:{
   team:"",
   items:[],
   new_id:'',
   },
  
   methods:{
   getdata:function(id){
       this.team=id;
   },
    deleteitem:function(){
        var _this=this;
        
    axios.delete('/admin/class/'+this.team).then(function (response) {
                 location.reload(); 
        });
                    
    },
   }
}); 
</script>
@endsection