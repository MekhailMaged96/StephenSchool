@extends('layouts.admin')
@section('page-head')
تعديل محتوي المدرسة
@endsection
@section('styles')
<style>
    .class-create form{
        background-color: #ffa641;
   
    }

</style>
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row ">
       <form action="{{route('school.settings.update',$school->id)}}"  method="POST" enctype="multipart/form-data">
           @csrf
           <div class="form-group">
                <label for="formGroupExampleInput">النوع :</label>
                <?php 
               $types=array("system" =>"نظام", "history" => "تاريخ", "schedules" => "جدول الحصص","enrollment"=>"الالتحاق بالمدرسة");
               
             
                echo "<select class='form-control' id='exampleFormControlSelect1' name='type'>";
                        foreach ($types as $key => $value) {
                            if($key==$school->type){
                                echo "<option value='$key' selected='selected'>$value</option>";
                            }else {
                                echo "<option value='$key'>$value</option>";
                            }
                          
                        }
                        
                echo"</select>";
                
                ?>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">العنوان :</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="title" value="{{$school->title}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">المحتوى :</label>
                <textarea class="form-control" rows="5"  name="body">{{$school->body}}</textarea>
            </div>
            <div class="form-group">
                <label> الصورة :</label>
                @if($school->img)
                <img src="{{asset('storage/school/'.$school->img)}}"> 
             
                @endif
                <br>
                {{ Form::file('img')}}
             </div>
             <input type="hidden" name="_method" value="PUT">   
            <button class="btn btn-primary float-left">تعديل</button>
       </form>
    </div>
@endsection
@section('scripts')

@endsection