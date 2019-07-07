@extends('layouts.main')
@section('title','| اخبار المدرسة')
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
                                        {{$schoolnew->title }}
                                </div>
                            </div>
                        </div>
                        <div class="row" >
                          <div class="col-md-12 col-sm-12 col-lg-12">
                             <div class="row justify-content-end">
                                <article class="mt-5 mr-3 text-right">
                                    @if($schoolnew->img)
                                    <img src="{{asset('storage/news/school/'.$schoolnew->img)}}">  
                                    @endif
                                    <p class="m1-5">
                                        {{$schoolnew->body}}
                                    </p>
                                 <article>
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
