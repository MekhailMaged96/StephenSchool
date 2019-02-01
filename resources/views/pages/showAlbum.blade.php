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
                                <div class="card-header text-center">
                          * {{$album->name}} *
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="row">
                                    @if(count($album->photos)>0)
                                    <?php
                                    $photocount=count($album->photos);
                                    $i=1;
                                    ?>
                                    @foreach($album->photos as $photo)
                                    @if($photocount==$i)
                                    <div class="col-md-4 mt-3 col-sm-3 col-12"  class="justify-content-end d-flex">
                                        <article>
                                            <img src="{{asset('storage/photos/'.$photo->album_id.'/'.$photo->photo)}}" alt="{{$photo->name}}" class="img-thumbnail img-responsive">
                                            <div class="caption text-center mt-3">   {{$photo->name}} </div>
                                        
                                        </article>

                                    </div>
                                    @else 
                                    <div class="col-md-4  col-sm-3 mt-3 col-12">
                                        
                                            <article>
                                                <img src="{{asset('storage/photos/'.$photo->album_id.'/'.$photo->photo)}}" alt="{{$photo->name}}" class="img-thumbnail img-responsive">
                                                <div class="caption text-center mt-3">  {{$photo->name}} </div>
                                            </article>
                                
                                    </div>
                                    @endif
                                    @endforeach

                                    @else 
                                    <h3 class="ml-auto mr-3 mt-2">لا يوجد صور </h3>
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

