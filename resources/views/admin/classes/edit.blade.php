@extends('layouts.admin')
@section('page-head')
 تعديل فصل
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row">
       <form action="{{route('class.update',$team->id)}}" method="post">
        @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">الاسم</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الاسم" name="name" value="{{$team->name}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">الميعاد</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الميعاد" name="date" value="{{$team->date}}">
            </div>
    
                    <label for="formGroupExampleInput">المواد :</label>
            <div class="form-group">
              @foreach($subjects as $subject )  
               <div class="form-check">
                    <input type="checkbox" v-model="subjectSelected" class="form-check-input" :value="{{$subject->id}}">
                    <label class="form-check-label" for="exampleCheck1 ">     {{$subject->name}} </label>
                </div>
              @endforeach
            </div>
            <input type="hidden" :value="subjectSelected" name="subjects">
            
            {{method_field('PUT')}}
            <button class="btn btn-primary">تعديل</button>
       </form>
    </div>

@endsection
@section('scripts')
<script type="text/javascript">
var app = new Vue({
    el:"#app",
    data:{
       subjectSelected:{!!$team->subjects->pluck('id')!!},
    }

});
</script>
@endsection