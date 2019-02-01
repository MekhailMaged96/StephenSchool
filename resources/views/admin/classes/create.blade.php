@extends('layouts.admin')
@section('page-head')
  اضافة فصل
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row">
       <form action="{{route('class.store')}}" method="POST">
           @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">الاسم</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الاسم" name="name">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">الميعاد</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الميعاد" name="date">
            </div>
                    <label for="formGroupExampleInput">المواد :</label>

            @foreach($subjects as $subject)
            <div class="form-group">
               <div class="form-check">
                    <input type="checkbox" v-model="subjectSelected" class="form-check-input" value="{{$subject->id}}">
                    <label class="form-check-label" for="exampleCheck1 "> {{$subject->name}} </label>
                </div>
            </div>
            @endforeach
            <input type="hidden" :value="subjectSelected" name="subjects">
            <button class="btn btn-primary float-left">اضافة</button>
       </form>
    </div>
</section>
@endsection
@section('scripts')
<script type="text/javascript">
var app = new Vue({
    el:"#app",
    data:{
       subjectSelected:[],
    }

});
</script>
@endsection