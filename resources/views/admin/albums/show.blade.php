@extends('layouts.admin')
@section('page-head')
{{$album->name}}
@endsection
@section('main-admin')
<section class="pictures">
    <div class="row">
        
        <a href="{{route('photo.create',$album->id)}}" class="btn btn-success  ml-auto mr-3"><i class='fas fa-plus'></i> اضافة صور</a>
    </div>
    <div class="row">
        @if(count($album->photos)>0)
        <?php
        $photocount=count($album->photos);
        $i=1;
        ?>
        @foreach($album->photos as $photo)
        @if($photocount==$i)
        <div class="col-md-3 mt-3"  class="justify-content-end d-flex">
            <article>
                <img src="{{asset('storage/photos/'.$photo->album_id.'/'.$photo->photo)}}" alt="{{$photo->name}}" class="img-thumbnail img-responsive">
                <div class="caption text-center mt-3"><button class="btn btn-danger btn-sm mr-4" @click.prevent="photoRemove({{$photo->id}})"><i class='fas fa-trash-alt'></i></button>   {{$photo->name}} </div>
               
            </article>

        </div>
        @else 
        <div class="col-md-3 mt-3">
            
                <article>
                    <img src="{{asset('storage/photos/'.$photo->album_id.'/'.$photo->photo)}}" alt="{{$photo->name}}" class="img-thumbnail img-responsive">
                    <div class="caption text-center mt-3"><button class="btn btn-danger btn-sm mr-4" @click.prevent="photoRemove({{$photo->id}})"><i class='fas fa-trash-alt'></i></button>   {{$photo->name}} </div>
                </article>
    
        </div>
        @endif
        @endforeach

        @else 
        <div>لا يوجد صور </div>
        @endif
    </div>
</section>
@endsection
@section('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
var app= new Vue({
 el:'#app',
 data:{
    close: {
    color: 'red',
    fontSize: '15px',
    cursor: 'default',
    photo_id:''
  }
 },
 methods:{
    photoRemove:function(item){
    axios.post('/admin/photos/destroy/'+item).then(function (response) {
        location.reload();

    });
    },
 },

});

</script>

@endsection