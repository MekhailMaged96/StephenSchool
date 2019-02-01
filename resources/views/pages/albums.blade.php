@extends('layouts.main')
@section('title','| معرض الصور')
@section('content')
@include('_partials.withlogo')
<div class="cent">
    <div class="container">
        <div class="row">
                <div class="col-md-9">
                    <section class="album">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="card-header text-right">
                                        معرض الصور
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-lg-12">
                             <div class="row">
                                @if($albums->count()>0)
                                <?php
                              
                                $albumcount=$albums->count();
                                $i=1;
                                ?>
                                @foreach($albums as $album)

                                @if($i==$albumcount)
                                <div class="col-md-4 col-sm-6 col-12 justify-content-end">
                                    
                                    <a href="{{route('albums.show',$album->id)}}" >
                                     <img src="{{asset('storage/album_covers/'.$album->cover_image)}}" alt="{{$album->name}}" class="img-thumbnail">
                                    </a>
                               
                                    <div class="caption text-center mt-2"><h5>{{$album->name}}</h5> </div>
                                </div>
                                @else 
                                <div class="col-md-4 col-sm-6 col-12 mt-3">
                                    
                                        <a href="{{route('albums.show',$album->id)}}" >
                                         <img src="{{asset('storage/album_covers/'.$album->cover_image)}}" alt="{{$album->name}}" class="img-thumbnail">
                                        </a>
                                   
                                        <div class="caption text-center mt-2"><h5>{{$album->name}}</h5> </div>
                                </div>
                                @endif
                                @endforeach
                                @else 
                                <div>لا يوجد البوم </div>
                                @endif
                          </div>
                        </div>

                    </div>
                    </section>
                </div>
          
            @include('_partials.side')
        </div>
    </div>
</div>
            


        @include('_partials.footer')
@endsection
