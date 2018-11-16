@extends('layouts.main')
@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/stylestu.css')}}">
@endsection
@section('content')
    @include('_partials.withlogo')
    <section class="subject">
        <div class="container">
            <article>
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2">
                        <div class="card">
                            <div class="card-header text-right font-weight-bold">
                                موادى
                            </div>
                            <div class="card-body">
                                <div class="card-text text-right" dir="rtl">
                                    <div><span class="badge badge-secondary">الاسم</span><h5>ميخائيل ماجد بولس</h5></div>
                                    <div><span class="badge badge-secondary">الرتبة</span><h5>wwww</h5></div>
                                    <div><span class="badge badge-secondary">غيابى</span><h5>15</h5></div>
                                </div>
                            <a href="{{route('studentresult')}}" class="btn btn-primary">درجاتى</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <table class="table" dir="rtl">
                        <thead class="thead-light" >
                            <tr>
                              <th scope="col">المادة</th>
                              <th class="text-center" scope="col">المحتوى</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td>logic</td>
                              <td>https://www.youtube.com/watch?v=qHnZbHzNthw</td>
                          </tr>
                          <tr>
                              <td>logic</td>
                              <td>https://www.youtube.com/watch?v=qHnZbHzNthw</td>
                          </tr>
                          <tr>
                              <td>logic</td>
                              <td>https://www.youtube.com/watch?v=qHnZbHzNthw</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @include('_partials.footer')

@endsection









