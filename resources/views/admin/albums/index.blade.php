@extends('layouts.admin')
@section('page-head')
الالبوم
@endsection
@section('main-admin')
<section class="pictures">
    <div class="row">
        <a href="{{route('album.create')}}" class="btn btn-success  ml-auto mr-3"><i class='fas fa-plus'></i> انشاء البوم</a>
    </div>
    <hr>
    <div class="row">
     
        @if($albums->count()>0)
        <?php
      
        $albumcount=$albums->count();
        $i=1;
        ?>
        @foreach($albums as $album)

        @if($i==$albumcount)
        <div class="col-md-4 col-sm-4 col-4 justify-content-end">
            
            <a href="{{route('album.show',$album->id)}}" >
             <img src="{{asset('storage/album_covers/'.$album->cover_image)}}" alt="{{$album->name}}" class="img-thumbnail">
            </a>
       
            <div class="caption text-center mt-2"><button  @click="getdata({{$album->id}})"  data-toggle="modal" data-target="#exampleModal" class="btn btn-danger btn-sm mr-2"><i class='fas fa-trash-alt'></i></button> <a href="{{route('album.edit',$album->id)}}" class="btn btn-primary btn-sm mr-4" style="float: none !important;"><i class='fas fa-edit'></i></a> {{$album->name}}</div>
        </div>
        @else 
        <div class="col-md-4 col-sm-4 col-4">
            
                <a href="{{route('album.show',$album->id)}}" >
                 <img src="{{asset('storage/album_covers/'.$album->cover_image)}}" alt="{{$album->name}}" class="img-thumbnail mb-2">
                </a>
           
            <div class="caption text-center mt-2"><button  @click="getdata({{$album->id}})"  data-toggle="modal" data-target="#exampleModal" class="btn btn-danger btn-sm mr-2"><i class='fas fa-trash-alt'></i></button> <a href="{{route('album.edit',$album->id)}}" class="btn btn-primary btn-sm mr-4" style="float: none !important;"><i class='fas fa-edit'></i></a> {{$album->name}}</div>
        </div>
        @endif
        @endforeach
        @else 
        <div>لا يوجد البوم </div>
        @endif
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
            <div class="modal-body">
                <p>
               are you sure you want to delete it
                </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary"   data-dismiss="modal">اغلاق</button>
              <button type="button" class="btn btn-primary" data-dismiss="modal" @click="deleteitem">مسح</button>
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
   album:"",
   items:[],
   album_id:'',
   },
  
   methods:{
   getdata:function(id){
       this.album_id=id;
   },
    deleteitem:function(){
        var _this=this;
        
        axios.post('/admin/albums/destroy/' +this.album_id).then(function (response) {
          location.reload();
           
        });
    },
   }
});
  
 
</script>
@endsection