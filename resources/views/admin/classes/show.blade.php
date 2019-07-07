@extends('layouts.admin')
@section('page-head')
    ملاك ميخائيل
@endsection
@section('main-admin')
<section class="class-show">
    <div class="d-flex flex-row-reverse" >
        <div class="form-check-inline" dir="rtl">
            <label class="form-check-label">
                <input type="radio" class="form-check-input ml-2" v-model="classoption" name="optradio" value="show-students">كشف الطلاب
            </label>
        </div>
        <!--
        <div class="form-check-inline" dir="rtl">
            <label class="form-check-label">
                <input type="radio" class="form-check-input ml-2" v-model="classoption" name="optradio" value="grades">الدرجات
            </label>
        </div>
        -->
        <div class="form-check-inline" dir="rtl">
            <label class="form-check-label">
                <input type="radio" class="form-check-input ml-2" v-model="classoption"  name="optradio" value="attendance">الحضور
            </label>
        </div> 
        <div class="form-check-inline" dir="rtl">
            <label class="form-check-label">
                <input type="radio" class="form-check-input ml-2" v-model="classoption"  name="optradio" value="teachers">كشف الخدام
            </label>
        </div> 
    </div>
    <div class="show-students mt-5" v-if="classoption=='show-students'">
        <div class="row">
            <h5 class="ml-auto mr-3"> : كشف الطلاب </h5>
        </div>  
        <div class="d-flex flex-row-reverse">
            <div class="table-responsive-sm text-nowrap mr-3 mt-1" dir="rtl">
                <table class="table table-bordered table-fixed" dir="rtl">
                    <thead class="thead-light text-right">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">الاسم</th>
                                <th scope="col">الرتبة</th>
                                <th scope="col">العنوان</th>
                                <th scope="col">رقم الهاتف</th>
                                @issuper
                                <th scope="col">الاعدادت</th>
                                @endissuper
                            </tr>
                    </thead>
                    <tbody class="text-right">
                        @foreach($team->users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->rank}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->phone}}</td>
                                @issuper
                                <td>
                                    <a href="{{route('student.edit',$user->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i></a>
                                    <button  class="btn btn-danger btn-sm mr-1"  data-toggle="modal" data-target="#exampleModal2"  @click="getStu({{$user->id}})"><i class="fas fa-user-minus"></i></button>
                                </td>
                                @endissuper
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-------------------------------------------------->

    <div class="add-attendance" v-if="classoption=='attendance'">
   <div class="row">
            <h5 class="ml-auto mr-3 mt-3 mb-3"> : كشف الطلاب </h5>
        </div>  
        <div class="d-flex flex-row-reverse">
            <div class="table-responsive-sm text-nowrap mr-3 mt-1" dir="rtl">
                <table class="table table-bordered table-fixed" dir="rtl">
                    <thead class="thead-light text-right">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">الاسم</th>
                                <th scope="col">الرتبة</th>
                                <th scope="col">الحضور</th>
                            </tr>
                    </thead>
                    <tbody class="text-right">
                
                    <tr v-for="item in attend">
                        <th scope="row">@{{item.id}}</th>
                        <td>@{{item.name}}</td>
                        <td>@{{item.rank}}</td>
                        <td><input type="number" class="form-control " style="width:80%; display: inline-block;" v-model="attend.attendance=item.attendance" name="attend">
                            <button class="btn btn-sm btn-primary" style="display: inline-block;" @click="addattend(item.attendance,item.id)" ><i class="fas fa-plus"></i></button>
                        </td>
                    </tr>
      
           
    
                    </tbody>
                </table>
    </div>

        </div>
    </div>

    <!-------------------------------------------------->
    <div class="add-results mt-5" v-if="classoption=='grades'">
        <div class="row justify-content-end text-right">

           
            <!--<a href="<?php /**{{ route('grade.create',$team->id)}} **/?>" class="btn btn-success btn-sm mb-3 mr-3" ><i class="fas fa-plus mr-2"></i>اضافة الدرجات  </a>
            -->
        </div>
        <!--
        <div class="row justify-content-end">
           
            <div class="table-responsive-sm text-nowrap mr-3 mt-1 text-right" dir="rtl">
                <table class="table table-bordered table-fixed">
             
                    <thead class="thead-light ">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">الاسم</th>
                                @foreach($team->subjects as $subject)  
                                <th scope="col">{{$subject->name}}</th>
                                @endforeach
                            
                            </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($team->users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            @foreach($user->subjects as $subject)
                            <td>{{$subject->pivot->grade}}</td>
                            @endforeach
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>       
        </div>
        --->
                
        </div>
    </div>
    <!--------------------------------->
    <div class="add-results mt-5" v-if="classoption=='teachers'">
    
     
        <div class="container">
            <div class="row justify-contend-end">
                    <h5 class="ml-auto mr-3">  كشف الخدام</h5>
            </div>
            <div class="row justify-contend-end"  dir="rtl">
                <div class="table-responsive-sm text-nowrap mr-3 mt-1">
                    <table class="table table-bordered table-fixed">
                        <thead class="thead-light text-right">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">الاسم</th>
                                    <th scope="col">البريد الالكترونى</th>
                                    <th scope="col">رقم الهاتف</th>
                                    @issuper
                                    <th scope="col">التعديلات</th>
                                    @endissuper
                                </tr>
                        </thead>
                        <tbody>
                                @foreach($team->teachers as $teacher)  
                                <tr>
                                    <th scope="row">{{ $teacher->id}}</th>
                                    <td>{{ $teacher->name}}</td>
                                    <td>{{ $teacher->email}}</td>
                                    <td>{{ $teacher->phone}}</td>
                                    @issuper
                                    <td><a href="{{route('teacher.edit',$teacher->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i></a>
                                        <button  class="btn btn-danger btn-sm mr-1"  data-toggle="modal" data-target="#exampleModal"  @click="getTea({{$teacher->id}})"><i class="fas fa-user-minus"></i></button>
                                    </td>
                                    @endissuper
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>       
            </div>
        </div>


</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog text-right" role="document">
        <div class="modal-content">
        <div class="modal-header">
        

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        هل انت متاكد انك تريد حذف هذا الخادم
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" @click="deleteTea()">حذف</button>
        </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog text-right" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            هل انت متاكد انك تريد حذف هذا الطالب
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" @click="deleteStu()">حذف</button>
            </div>
            </div>
        </div>
    </div>




@endsection
@section('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">


    var app = new Vue({
            el:"#app",
            data:{
                classoption:'',
                attend:[],
                Id:"",
          
  
        
            },
            mounted: function mounted() {
       
                this.getAttend();
                if (localStorage.classoption) {
                 this.classoption = localStorage.classoption;
                 }   
            },
            watch: {
                classoption(newName) {
                localStorage.classoption = newName;
                }
            },
            methods:{
             

                addattend:function(item,userId){
                var _this = this;
             
                axios.post('/admin/addattend/' + userId,{attend:item}).then(function (response) {
                    _this.getAttend();
                    
                });
                },

                getAttend: function getAttend() {
                var _this = this;
                
                axios.get('/admin/allattend/'+{{$team->id}}).then(function (response) {
                    _this.attend = response.data;
                });
                },
                getTea:function getTea(teacherId){
                   this.id=teacherId;
                },
                deleteTea:function deleteTea() {
                var _this = this;
         
                
                axios.delete('/admin/teacher/'+this.id).then(function (response) {
                    location.reload(); 
                });
                
             
                },
                  getStu:function getStu(studentId){
                       this.id=studentId;
                    },
                    deleteStu:function deleteStu() {
                    var _this = this;
             
                    axios.delete('/admin/student/'+this.id).then(function (response) {
                      location.reload(); 
                    });
                    
                    },
            }
    });

    </script> 
    


@endsection
