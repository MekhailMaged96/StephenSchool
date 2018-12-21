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
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">الاسم</th>
                                <th scope="col">المادة 1</th>
                                <th scope="col">100</th>
                                <th scope="col">المادة 2</th>
                                <th scope="col">100</th>
                                <th scope="col">المادة 3</th>
                                <th scope="col">100</th>
                                <th scope="col">المادة 4</th>
                                <th scope="col">100</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>wwwwwwwwwwwwwwwwww</td>
                                <td>10</td>
                                <td>قبطى</td>
                                <td>10</td>
                                <td>قبطى</td>
                                <td>10</td>
                                <td>قبطى</td>
                                <td>10</td>
                                <td>قبطى</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>wwwwwwwwwwwwwwwwww</td>
                                <td>10</td>
                                <td>قبطى</td>
                                <td>10</td>
                                <td>قبطى</td>
                                <td>10</td>
                                <td>قبطى</td>
                                <td>10</td>
                                <td>قبطى</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
         
        </div>
    </section>

@endsection