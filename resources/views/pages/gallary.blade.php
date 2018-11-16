@extends('layouts.main')
@section('title','| معرض الصور')
@section('stylesheet')
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link rel="stylesheet" href="{{asset('css/gallery-grid.css')}}">
@endsection
@section('content')
    @include('_partials.withlogo')
<div class="cent">
    <div class="container ">
            <div class="row">
                <div class="col-md-9">
                    <section class="main">
                        <section class="gallary">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="card-header text-right">
                                              معرض الصور
                                        </div>
                                     
                                     </div>
                                </div>
                                <div class="tz-gallery">
                                <div class="container"> 
                                <div class="row">
                                    <div class="col-sm-4 col-md-4">
                                        <a class="lightbox" href="{{asset('img/logo.jpg')}}">
                                            <img src="{{asset('img/logo.jpg')}}" alt="Park">
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <a class="lightbox" href="{{asset('img/logo.jpg')}}">
                                            <img src="{{asset('img/logo.jpg')}}" alt="Bridge">
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <a class="lightbox" href="{{asset('img/logo.jpg')}}">
                                            <img src="{{asset('img/logo.jpg')}}" alt="Tunnel">
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <a class="lightbox" href="{{asset('img/logo.jpg')}}">
                                            <img src="{{asset('img/logo.jpg')}}" alt="Tunnel">
                                        </a>
                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <a class="lightbox" href="{{asset('img/logo.jpg')}}">
                                                <img src="{{asset('img/logo.jpg')}}" alt="Tunnel">
                                            </a>
                                            </div>
                                        <div class="col-sm-4 col-md-4">
                                            <a class="lightbox" href="{{asset('img/logo.jpg')}}">
                                                <img src="{{asset('img/logo.jpg')}}" alt="Tunnel">
                                            </a>
                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <a class="lightbox" href="{{asset('img/logo.jpg')}}">
                                                <img src="{{asset('img/logo.jpg')}}" alt="Tunnel">
                                            </a>
                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <a class="lightbox" href="{{asset('img/logo.jpg')}}">
                                                <img src="{{asset('img/logo.jpg')}}" alt="Tunnel">
                                            </a>
                                         </div>
                                        <div class="col-sm-4 col-md-4">
                                            <a class="lightbox" href="{{asset('img/logo.jpg')}}">
                                                <img src="{{asset('img/logo.jpg')}}" alt="Tunnel">
                                            </a>
                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <a class="lightbox" href="{{asset('img/logo.jpg')}}">
                                                <img src="{{asset('img/logo.jpg')}}" alt="Tunnel">
                                            </a>
                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                                <a class="lightbox" href="{{asset('img/logo.jpg')}}">
                                                    <img src="{{asset('img/logo.jpg')}}" alt="Tunnel">
                                                </a>
                                            </div>
                                            <div class="col-sm-4 col-md-4">
                                                    <a class="lightbox" href="{{asset('img/logo.jpg')}}">
                                                        <img src="{{asset('img/logo.jpg')}}" alt="Tunnel">
                                                    </a>
                                                </div>
                                </div>
                            </div>
                        </section>
                    </section>
                </div>
            @include('_partials.side')
        </div>
    </div>
</div>

        @include('_partials.footer')
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
@endsection