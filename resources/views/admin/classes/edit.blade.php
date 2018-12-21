@extends('layouts.admin')
@section('page-head')
 تعديل فصل
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row">
       <form>
            <div class="form-group">
                <label for="formGroupExampleInput">الاسم</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الاسم" name="name">
            </div>
    
                    <label for="formGroupExampleInput">المواد :</label>
            <div class="form-group">
               <div class="form-check">
                    <input type="checkbox" v-model="subjectSelected" class="form-check-input" value="1">
                    <label class="form-check-label" for="exampleCheck1 ">     قبطى  </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" v-model="subjectSelected" class="form-check-input" value="2">
                    <label class="form-check-label" for="exampleCheck1">     الحان   </label>
                </div>
            </div>
            <input type="hidden" :value="subjectSelected" name="subjects">
            
            {{method_field('PUT')}}
            <button class="btn btn-primary float-left">تعديل</button>
       </form>
    </div>
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