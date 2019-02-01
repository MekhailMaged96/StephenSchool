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
                                                القطمارس والسنكسار
                                        </div>
                                        <div class="history text-center">

                                            <h4>الخميس : 8 نوفمبر 2018 - 29 بابة 1735</h4>    
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
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
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <h5>أخبار الكنيسة<img src="{{asset('img/cross.png')}}" height="30px;" width:"30px;"></h5>
                                    <ul>
                                        <li><a href="#"> برنامج نهضة صوم السيدة العذراء 2015</a></li>
                                        <li><a href="#"> برنامج نهضة صوم السيدة العذراء 2015</a></li>
                                        <li><a href="#"> برنامج نهضة صوم السيدة العذراء 2015</a></li>
                                        <li><a href="#"> برنامج نهضة صوم السيدة العذراء 2015</a></li>
                                        <li><a href="#"> برنامج نهضة صوم السيدة العذراء 2015</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <h5>اخبار المدرسة <img src="{{asset('img/cross.png')}}" height="30px;" width:"30px;"></h5>
                                    <ul>
                                        <li><a href="#"> برنامج مواعيد المستوى الأول – السنة الثالثة</a></li>
                                        <li><a href="#"> برنامج مواعيد المستوى الأول – السنة الثالثة</a></li>
                                        <li><a href="#"> برنامج مواعيد المستوى الأول – السنة الثالثة</a></li>
                                        <li><a href="#"> برنامج مواعيد المستوى الأول – السنة الثالثة</a></li>
                                        <li><a href="#"> برنامج مواعيد المستوى الأول – السنة الثالثة</a></li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <section class="posts" >
                            <div class="row">
                                <div class="col-sm-12 col-md-12 ">
                                    <div class="card-header text-right">    
                                    كل جديد
                                    </div>
                                </div>
                            </div>
                            @foreach($posts as $post)
                            <article>
                                <div class="row">
                                    <div class="col-6 col-sm-6">
                                        <img src="{{asset('images/'.$post->img)}}">                                  
                                    </div> 
                                    <div class="col-6  col-sm-6">
                                        <!---<h5>تاريخ : 08 مايو 2018  <i class="fa fa-calendar"></i></h5>
                                        -->
                                        <h5>{{date ( 'M j,Y h:i a',strtotime($post->updated_at) )}} <i class="fa fa-calendar"></i></h5>
                                    
                                        <p>{{$post->title}} </p>
                                        <p class="mt-3">{{$post->body}} </p>
                                    </div>
                            <hr>
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
