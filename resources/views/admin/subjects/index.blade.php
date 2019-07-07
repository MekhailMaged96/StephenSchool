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
                <th scope="col">الدرجة </th>
                <th scope="col">الاعدادت</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subjects as $subject)
                <tr>
                <th scope="row">{{$subject->id}}</th>
                <th scope="row">{{$subject->name}}</th>
                <td scope="row"><a href="{{$subject->content}}" style="color:blue;">{{$subject->content}}</a></td>
                <th scope="row">{{$subject->grade}}</th>
                <td><a href="{{route('subject.edit',$subject->id)}}"><i class='fas fa-edit'></i></a>
                    <a  href="#" data-toggle="modal" data-target="#exampleModal"  @click="getdata({{$subject->id}})"><i class="fas fa-trash-alt"></i></a>
                
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
        هل انت متاكد انك تريد حذف هذه المادة
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
        
    axios.delete('/admin/subject/'+this.team).then(function (response) {
                 location.reload(); 
        });
                    
    },
   }
}); 
</script>
@endsection   

