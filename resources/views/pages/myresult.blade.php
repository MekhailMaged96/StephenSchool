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
                    <h3 class="text-center">نتائج عام 2019 </h3>
                    @if($user->subjects->count()>0)
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">المادة</th>
                                <th scope="col">الدرجة</th>
                                <th scope="col">الدرجة النهائية</th>
                            </tr>
                        </thead>
                        <tbody>
                       
                            @foreach($user->subjects as $subject)
                            <tr>
                                <th scope="row">{{ $subject->id}}</th>
                                <td>{{ $subject->name}}</td>
                                @if($subject->pivot->grade)
                                <td>{{ $subject->pivot->grade}}</td>
                                @else
                                <td>لا يوجد درجة </td>
                                @endif
                                <td>{{ $subject->grade}}</td>
                            </tr>
                           @endforeach
                        
                        </tbody>
                    </table> 
                    @else 
                    <p>لا يوجد درجات </p>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @include('_partials.footer')
@endsection
