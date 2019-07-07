@extends('layouts.admin')
@section('page-head')
القطمارس والسنكسار
@endsection
@section('main-admin')
<section class="add-student">
        <div class="row">
            <form action="{{route('readings.store')}}" method="POST">
                @csrf
                    <div class="form-group">
                            <label for="formGroupExampleInput">تاريخ القبطى</label>
                            <br>
                            <label>اليوم :</label>
                            <select class="form-control col-md-1" style="display:inline" name="day">
                                @for($i=1; $i<=30; $i++)
                                <option>{{$i}}</option>
                                @endfor
                            </select>
                            <label>الشهر:</label>
                            <select class="form-control col-md-1" style="display:inline" name="month">
                                <?php 
                             $months=array('توت','امشير','بابة','هاتور','كيهك','برمهات','برمودة','طوبة','بشنس','بؤونة','نسىء','أبيب'); 
                                    
                                ?>
                                @for($i=1; $i<count($months); $i++)
                                <option value="{{$i}}">{{$months[$i]}}</option>
                                @endfor
                            </select>
                            <label>العام:</label>
                            <select class="form-control col-md-1" style="display:inline" name="year">
                             
                                    @for($i=1700; $i<=2000; $i++)
                                    <option>{{$i}}</option>
                                    @endfor
                            </select>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">مزمور عشية</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">انجيل عشية</label>
                      <input type="text" class="form-control" id="formGroupExampleInput2" name="email" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">مزمور باكر</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="password" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">انجيل باكر</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="address" placeholder="">
                    </div>
                  
                    <div class="form-group">
                        <label for="formGroupExampleInput2">البولس</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                    </div>
   
                    <div class="form-group">
                        <label for="formGroupExampleInput2">الكاثوليكون</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">الابركسيس</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">مزمور القداس</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">انجيل القداس</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                    </div>
                    <hr>

                    <div class="form-group">
                        <label>السنكسار:</label> 
                        <input type="text" class="form-control" v-model="input" id="formGroupExampleInput2" placeholder="" style=" width=85%;">
                        <br>
                        <button type="button" v-on:click="add()" class="btn btn-default">اضافة سنسكار</button>
                    </div>
                    <div class="form-group">
                        <ul v-for="tod in todo">
                           <h5> <li>@{{tod}} <button type="button" class="btn btn-danger btn-sm" v-on:click="remove()">X </button></li></h5>

                        </ul>
                        <input type="hidden" :value="todo" name="snxcar">
                    </div>
                  
                    <button class="btn btn-success float-left">اضافة</button>
            </form>
        </div>
  
</section>
@endsection


@section('scripts')
<script>
var app = new Vue({
  el:'#app',
  data:{
    todo:[],
    input:"",

  },
  methods:{
      add:function(){

        this.todo.push(this.input);
        this.input = "";
      },
      remove:function(){
        this.todo.pop(this.input);
        this.input = "";
      }
  }
 

});
</script>


@endsection