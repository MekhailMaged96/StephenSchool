@extends('layouts.main')

@section('title','| الرئيسية')

@section('content')
 @include('_partials.withlogo')
<div class="cent">
    <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <section class="main">
                        <section class="sanxar">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="card-header text-right">
                                              المدرسة
                                        </div>
                                        <!--
                                        <div class="history text-center">

                                            <h4>الخميس : 8 نوفمبر 2018 - 29 بابة 1735</h4>    
                                        </div>
                                        -->
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-md-12">
                                        <div class="school float-right">
                                            <img src="{{asset('img/church-logo-family-open-bible.jpg')}}" height="100px" width="100px">
                                           <a href="{{route('school.system')}}">نظام المدرسة</a>
                                        </div>
                                        <div class="school float-right">
                                            <img src="{{asset('img/church-logo-family-open-bible.jpg')}}" height="100px" width="100px">
                                            <a href="{{route('school.history')}}">تاريخ المدرسة</a>
                                        </div>
                                        <div class="school float-right">
                                            <img src="{{asset('img/church-logo-family-open-bible.jpg')}}" height="100px" width="100px">
                                             <a href="{{route('school.schedules')}}">جدول الحصص</a>
                                            </div>
                                        <div class="school float-right">
                                            <img src="{{asset('img/church-logo-family-open-bible.jpg')}}" height="100px" width="100px">
                                            <a href="{{route('school.enrollment')}}">الالتحاق بالمدرسة</a>
                                        </div>
                                        <!--
                                        <div class="school float-right">
                                            
                                            <img src="{{asset('img/church-logo-family-open-bible.jpg')}}" height="100px" width="100px">
                                            <a href="{{route('school.chorus')}}">خورس الشمامسة</a>
                                        </div>
                                        !-->
                                    </div>
                                    <!--
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                            <div class="reading">
                                                <ul>
                                                    <li> + إستشهاد القديس ديمتريوس التسالونيكي </li>
                                                    <li> +  نياحة البابا غبريال السابع ال95 </li>
                                                    <li> + تذكار الأعياد السيدية الكبرى (البشارة والميلاد والقيامة) </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-lg-8">
                                            <div class="card-body"></div>
                                            <div class="table-responsive-sm">
                                                <table class="table table-borderless"  dir="rtl">
                                                    <tr>
                                                        <td>مزمور عشية</td> 
                                                        <td>مز 46 : 1 ، 7</td>    
                                                        <td>البولس</td>
                                                        <td>غل 1 : 1-19</td>
                                                    </tr>
                                                    <tr>
                                                        <td>انجيل عشية</td>
                                                        <td>مر 1 : 16-22</td>
                                                        <td>الكاثوليكون</td>
                                                        <td>يع 1 : 1-12</td>
                                                    </tr>
                                                    <tr>
                                                        <td>  </td>
                                                        <td> </td>
                                                        <td>الابركسيس</td>
                                                        <td>اع 15 : 13-21</td>

                                                    </tr>
                                                    <tr>
                                                        <td>مزمر باكر</td> 
                                                        <td>مز 146 : 1 ، 5</td>
                                                        <td>مزمور القداس</td> 
                                                        <td>مز 78 : 5 ، 135 : 5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>انجيل باكر</td>
                                                        <td>مت 4 : 18-22</td>
                                                        <td>انجيل القداس</td>
                                                        <td>مر 10 : 35-45</td>
                                                    </tr>
                                            </table>   
                                        </div>
                                    </div>
                                -->
                                </div>
                        </section>
                        <section class="lastnews">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="card-header text-right">
                                            اخر الاخبار
                                        </div>

                                </div>
                            </div>
                            <div class="row  justify-content-end text-right">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                        <h5>اخبار الكنيسة <img src="{{asset('img/cross.png')}}" height="30px;" width="30px;"></h5>
                                        @if(count($churchnews)>0)
                                        <ul>
                                            @foreach ($churchnews as $new)
                                            <li class="mt-3"><a href="{{route('church.news',$new->id)}}"> {{$new->title}}</a></li>
                                            @endforeach   
                                        </ul>
                                        @else 
                                        <p class="mb-5 mt-5 text-right font-weight-bold">لا يوجد اخبار  </p>
                                        @endif
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <h5>اخبار المدرسة <img src="{{asset('img/cross.png')}}" height="30px;" width="30px;"></h5>
                                    @if(count($schoolnews)>0)
                                    <ul>
                                        @foreach ($schoolnews  as $new)
                                        <li class="mt-3 mr-1"><a href="{{route('school.news',$new->id)}}"> {{$new->title}} </a></li>
                                        @endforeach   
                                    </ul>
                                    @else 
                                    <p class="mb-5 mt-5 text-right font-weight-bold">لا يوجد اخبار  </p>
                                    @endif
                                </div>
                            </div>
                        </section>
                        <section class="posts" >
                            <div class="row">
                                <div class="col-sm-12 col-md-12 ">
                                    <div class="card-header text-right">    
                                    كل جديد
                                    </div>
                                    @if(!count($posts)>0)
                                   <p class="mb-5 mt-5 text-right font-weight-bold">لا يوجد جديد</p>
                                   @endif
                                </div>
                            </div>
                            @foreach($posts as $post)
                            <article>
                                <div class="row">
                                    @if($post->img)
                                    
                                    <div class="col-6 col-sm-6">
                                        <img src="{{asset('images/'.$post->img)}}">                                  
                                    </div> 
                                    @endif
                               <?php if(!$post->img) echo"<div class='col-6  col-sm-6 mb-2 ml-auto' >"; else echo "<div class='col-6  col-sm-6 mb-2' >";?>
                                        <!---<h5>تاريخ : 08 مايو 2018  <i class="fa fa-calendar"></i></h5>
                                        -->
                                        <h5>{{date ( 'M j,Y h:i a',strtotime($post->updated_at) )}} <i class="fa fa-calendar"></i></h5>
                                    
                                        <p>{{$post->title}} </p>
                                        <p class="mt-3">{{$post->body}} </p>
                                    </div>
                            @if(count($posts)>1)
                            <hr>
                            @endif
                            </article>
                            @endforeach  
                        </section>
                    </section>
                 </div>
              
            @include('_partials.side')
        </div>
    </div>
</div>

        @include('_partials.footer')
@endsection
