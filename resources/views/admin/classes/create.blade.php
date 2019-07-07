@extends('layouts.admin')
@section('page-head')
  اضافة فصل
@endsection
@section('styles')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/flick/jquery-ui.css">

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{asset('js/jquery-ui-sliderAccess.js')}}"></script>
<!-- Required -->
<link rel="stylesheet" href="{{asset('css/jquery-ui-timepicker-addon.css')}}">
<script src="{{asset('js/jquery-ui-timepicker-addon.js')}}"></script>
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
                <date-time-picker
                v-model="date"
                format="yyyy-LL-dd hh:mm a"
                :hour-time="12"
              ></date-time-picker>
              <input type="hidden" name="datecourse" :value="date">
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
       date: '2019-10-01 00:00:00',
    },
 
});

</script>

@endsection