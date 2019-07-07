@extends('layouts.admin')
@section('page-head')
  اضافة الدرجات
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row ">
        <div class="col-md-12 ">
          
       <form action="{{route('grade.store')}}" method="post">
           @csrf
           <input type="hidden" value="{{$team->id}}" name="teamId">
            <div class="form-group">
                <label for="formGroupExampleInput">الاسم</label>
                <select class="form-control" name="userId"  v-model="user">
                @foreach($team->users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
                </select>
                <label for="formGroupExampleInput" class="mt-2">رقم الطالب :</label>
                <label for="formGroupExampleInput">   @{{user}}</label>
                <br>
                @foreach($team->subjects as $subject)
                <label for="formGroupExampleInput">{{$subject->name}}</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الدرجة" name="couresGrade[]"> 
                  
               @endforeach
               
            </div>
        
            <button class="btn btn-primary">اضافة</button>
            <!---
            <a href="{{route('class.show',$team->id)}}" class="btn btn-success ml-3 mr-auto">عودة الى القائمة </a>
            --->
       </form>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
    var app = new Vue({
            el:"#app",
            data:{
                user:" ",
  
        
            },
            methods:{
             
            },
    });

    </script> 
    


@endsection
