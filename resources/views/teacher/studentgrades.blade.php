@extends('layouts.main')
@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/styletea.css')}}">
@endsection

@section('content')
    @include('_partials.withlogo')
    <section class="studsheet">
        <div class="container">
         
            <div class="head">
                درجات العام الدراسى 2018
            </div>
      
          <div class="row">
                    <div class="table-responsive offset-md-4 col-md-8">
                        <table class="table table-sm table-bordered">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">الاسم</th>
                                @foreach($team->subjects as $subject)
                                <th scope="col">{{$subject->name}} ( {{$subject->grade}} )</th>
                                @endforeach
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($team->users as $user)
                              <tr>
                               <td>{{$user->id}}</td>
                               <td>{{$user->name}}</td>
                               @foreach($user->subjects as $subject)
                                  @if($subject->pivot->grade)
                                  <td>{{ $subject->pivot->grade}}</td>
                                  @else
                                  <td>لا يوجد درجة </td>
                                  @endif
                               @endforeach
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
         
        </div>
    </section>

@endsection