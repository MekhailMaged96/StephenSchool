@extends('layouts.admin')
@section('page-head')
تعديل خادم
@endsection
@section('main-admin')
<section class="edit-student">
    <div class="row">
        <form action="{{route('teacher.update',$teacher->id)}}" method="POST">
            @csrf
                <div class="form-group">
                  <label for="formGroupExampleInput">الاسم</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الاسم" name="name" value="{{$teacher->name}}">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">البريد الالكترونى</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" name="email" placeholder="البريد الالكترونى" value="{{$teacher->email}}">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">كلمة السر</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2" name="password" placeholder="كلمة السر">
                </div>

                <label for="inputState">الفصول :</label>
                <div class="form-group">
                @foreach($teams as $team )  
                    <div class="form-check">
                        <input type="checkbox" v-model="teamSelected" class="form-check-input" :value="{{$team->id}}">
                        <label class="form-check-label" for="exampleCheck1 ">     {{$team->name}} </label>
                    </div>
                @endforeach
                </div>
                   
               
                <input type="hidden" :value="teamSelected" name="teams">
                <div class="form-group">
                    <label for="formGroupExampleInput2">رقم الهاتف</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="رقم الهاتف" name="phone" value="{{$teacher->phone}}">
                </div>
                {{Form::hidden('_method','PUT')}}
                <button class="btn btn-primary float-left">تعديل</button>
        </form>
    </div>
</section>
@endsection
@section('scripts')
<script type="text/javascript">
var app = new Vue({
    el:"#app",
    data:{
       teamSelected:{!!$teacher->teams->pluck('id')!!},
    }

});
</script>
@endsection