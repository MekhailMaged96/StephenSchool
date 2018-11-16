@extends('layouts.main')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/stylestu.css')}}">
@endsection
   
@section('content')
    @include('_partials.withlogo')
    <section class="myresult">
        <div class="container">
    
            <div class="row">
                <div class="offset-sm-2 col-12 col-sm-8">
                    <h3 class="text-center">نتائج عام 2018 </h3>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">المادة</th>
                                <th scope="col">100</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                    <td>عربى</td>
                                    <td>50</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>عربى</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>عربى</td>
                                <td>50</td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </section>
    @include('_partials.footer')
@endsection
