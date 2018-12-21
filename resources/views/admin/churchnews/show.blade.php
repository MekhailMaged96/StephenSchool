@extends('layouts.admin')
@section('page-head')
عنوان اخبار الكنيسة
@endsection

@section('main-admin')
<section class="news-show">
    <div class="row">
        <a  href="{{route('news.church.edit',1)}}" class="mr-auto ml-5"><i class="fas fa-edit"  style="font-size:25px" ></i></a>
        <h2 class="ml-auto mr-3">عنوان الخبر</h2>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
        <article class="ml-auto mt-5 mr-3 text-right">
        <span>
       لملاك والرومانى   الملاك والرومانى   الملاك والرومانى   الملاك والرومانى
       لملاك والرومانى   الملاك والرومانى   الملاك والرومانى   الملاك والرومانى 
       لملاك والرومانى   الملاك والرومانى   الملاك والرومانى   الملاك والرومانى  
        </span>
        <article>
        </div>
    </div>
</section>
@endsection
