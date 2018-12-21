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
        <div class="form-check-inline" dir="rtl">
            <label class="form-check-label">
                <input type="radio" class="form-check-input ml-2" v-model="classoption" name="optradio" value="grades">الدرجات
            </label>
        </div>
        <div class="form-check-inline" dir="rtl">
            <label class="form-check-label">
                <input type="radio" class="form-check-input ml-2" v-model="classoption"  name="optradio" value="attendance">الغياب
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
                                <th scope="col"></th>
                            </tr>
                    </thead>
                    <tbody class="text-right">
                            <tr>
                                <th scope="row">1</th>
                                <td>ميخائيل ماجد بولس</td>
                                <td>الابصالتس</td>
                                <td>ميخا ميمخا ميخا ميخا</td>
                                <td>01201111111</td>
                                <td><a href="{{route('student.edit',1)}}" class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm mr-2 "><i class="fas fa-user-minus"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>10</td>
                                <td>الابصالتس</td>
                                <td>wwwwwwwwwwwwwwwwwww</td>
                                <td>0120111111</td>
                                <td><a href="#" class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i></a>
                                    <a href="#" class="btn btn-danger  btn-sm mr-2"><i class="fas fa-user-minus"></i></a></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-------------------------------------------------->

    <div class="add-attendance" v-if="classoption=='attendance'">
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
                                <th scope="col">الغياب</th>
                            </tr>
                    </thead>
                    <tbody class="text-right">
       <tr>
                                <th scope="row">1</th>
                                <td>ميخائيل ماجد بولس</td>
                                <td>الابصالتس</td>
                                <td><input type="number" class="form-control" value=""></td>
                      
                            
                            
                            </tr>
                       
    
                    </tbody>
                </table>
    </div>

        </div>
    </div>

    <!-------------------------------------------------->
    <div class="add-results mt-5" v-if="classoption=='grades'">
    
        <div class="row">
            <h5 class="ml-auto mr-3"> :اضافة الدرجات </h5>
        </div>
       
                
        </div>
    </div>
    <!--------------------------------->
    <div class="add-results mt-5" v-if="classoption=='teachers'">
    
        <div class="row">
            <h5 class="ml-auto mr-3">  </h5>
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
                classoption:'grades',
            
  
        
            },
            methods:{

            },
    });

    </script> 
    


@endsection
