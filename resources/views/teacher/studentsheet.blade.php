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
              <a href="{{route('teacher.studentgrades',$team->id)}}" class="btn btn-danger btn-md">الدرجات</a>
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
                                <th scope="col">الحضور</th>
                                <th scope="col">الرتبة</th>
                                <th scope="col">العنوان</th>
                                <th scope="col">رقم الهاتف</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                              @foreach($team->users as $user)
                              <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->attendance}}</td>
                                <td>{{$user->rank}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->phone}}</td>
                              </tr>
                             @endforeach
                             
                             <!--
                             <tr v-for="item in attend">
                                <th scope="row">@{{item.id}}</th>
                                <td>@{{item.name}}</td>
                              
                                <td><input type="number" class="form-control " style="width:80%; display: inline-block;" v-model="attend.attendance=item.attendance" name="attend">
                                    <button class="btn btn-sm btn-primary" style="display: inline-block;" @click="addattend(item.attendance,item.id)" ><i class="fas fa-plus"></i></button>
                                </td>
                                <td>@{{item.rank}}</td>
                                <td>@{{item.address}}</td>
                                <td>@{{item.phone}}</td>
                            </tr>
                          -->
                            </tbody>
                          </table>
                    </div>
                </div>
         
        </div>
    </section>

@endsection
@section('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
/*
    var app = new Vue({
            el:"#app",
            data:{
                attend:[],
  
        
            },
            mounted: function mounted() {
            this.getAttend();
            },
            methods:{
                addattend:function(item,userId){
                var _this = this;
             
                axios.post('/teacher/addattend/' + userId,{attend:item}).then(function (response) {
                    _this.getAttend();
                    
                });
                },

                getAttend: function getAttend() {
                var _this = this;
                
                axios.get('/teacher/allattend/'+{{$team->id}}).then(function (response) {
                    _this.attend = response.data;
                });
                }
            },
    });
*/
    </script> 
@endsection
