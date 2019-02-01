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
                 @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td>{{date ( 'M j,Y h:i a',strtotime($post->updated_at) )}}</td>
                        <td><a href="{{route('posts.show',$post->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                         <a href="#" class="btn btn-danger btn-sm mr-1" @click="getdata({{$post->id}})"  data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
           </div>
    </div>
    
   
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
          هل انت متاكد انك تريد حذف هذا المنشور
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
   post:"",
   items:[],
   post_id:'',
   },
  
   methods:{
   getdata:function(id){
       this.post_id=id;
   },
    deleteitem:function(){
        var _this=this;
        
        axios.post('/admin/posts/destroy/' +this.post_id).then(function (response) {
            location.reload();    
            
        });
    },
   }
});
  
 
</script>
@endsection