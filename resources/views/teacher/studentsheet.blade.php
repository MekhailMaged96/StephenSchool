@extends('layouts.main')
@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/styletea.css')}}">
@endsection

@section('content')
    @include('_partials.withlogo')
    <section class="studsheet">
        <div class="container">
        
          <div class="head">
              كشف اسماء بالاولاد لعام 2018 
          </div>
    
          <div class="row">
            <div class="studsheet-top ml-auto">
              <a href="{{route('teacher.studentgrades')}}" class="btn btn-danger btn-md">الدرجات</a>
              <p>عدد الاسابيع <span class="badge badge-secondary">5</span></p>
              
            </div>
          </div>
          <div class="row">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">الاسم</th>
                                <th scope="col"> الغياب</th>
                                <th scope="col">الرتبة</th>
                                <th scope="col">العنوان</th>
                                <th scope="col">رقم الهاتف</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>wwwwwwwwwwwwwwwwww</td>
                                <td>10</td>
                                <td>الابصالتس</td>
                                <td>wwwwwwwwwwwwwwwwwww</td>
                                <td>01201111111</td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>wwwwwwwwwwwwwwwwww</td>
                                <td>10</td>
                                <td>الابصالتس</td>
                                <td>wwwwwwwwwwwwwwwwwww</td>
                                <td>0120111111</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
         
        </div>
    </section>

@endsection