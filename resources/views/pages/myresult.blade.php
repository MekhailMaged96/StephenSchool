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
                            @if($user->subjects->count()>0)
                            @foreach($user->subjects as $subject)
                            <tr>
                                <th scope="row">{{ $subject->id}}</th>
                                <td>{{ $subject->name}}</td>
                                @if($subject->pivot->grade)
                                <td>{{ $subject->pivot->grade}}</td>
                                @else
                                <td>لا يوجد درجة </td>
                                @endif
                            </tr>
                           @endforeach
                           @else 
                           <p>لا يوجد درجات </p>
                           @endif
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </section>
    @include('_partials.footer')
@endsection
