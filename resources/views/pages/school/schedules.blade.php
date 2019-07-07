@extends('layouts.main')
@section('title','| جدول حصص المدرسة')
@section('content')
@include('_partials.withlogo')
<div class="cent">
    <div class="container">
        <div class="row">
                <div class="col-md-9">
                    <section class="school-new-home">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="card-header text-center">
                                   جدول حصص المدرسة
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end" >
                            <div class="col-md-9 col-sm-9 col-lg-9 col-10">
                            
                                    @foreach ($schools as $school)
                                    <article class="mt-5 mr-3 text-right">
                                        <p class="text-center">{{$school->title}}</p>
                                        @if($school->img)
                                        <img src="{{asset('storage/school/'.$school->img )}}">
                                        @endif  
                                        <p class="m1-5">
                                            {{$school->body}}
                                        </p>
                                    <article> 
                                    @if(count($schools)>1)
                                        <hr>
                                    @endif
                                   
                                     @endforeach
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
