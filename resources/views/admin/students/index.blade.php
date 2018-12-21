@extends('layouts.admin')
@section('page-head')
    كل الطلاب
@endsection
@section('main-admin')
<section class="all-users">
        
    <div class="row">
        <a href="{{route('student.create')}}" class="btn btn-success  ml-auto mr-3"><i class='fas fa-user-plus'></i> اضافة طالب</a>
    </div>
   
    <div class="row" dir="rtl;">    
           <div class="table-responsive mr-3 mt-1">
            <table class="table table-sm table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">الاسم</th>
                        <th scope="col">البريد الالكترونى</th>
                        <th scope="col">الرتبة</th>
                        <th scope="col">العنوان</th>
                        <th scope="col">رقم الهاتف</th>
                        <th scope="col">الفصل</th>
                        <th scope="col">التعديلات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>ميخائيل ماجد بولس</td>
                        <td>mekha@yahoo.com</td>
                        <td>الابصالتس</td>
                        <td>ميخا ميمخا ميخا ميخا</td>
                        <td>01201111111</td>
                        <td> <select>        
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="mercedes">3</option>
                                <option value="audi">4</option>
                        </select>
                        </td>
                        <td><a href="{{route('student.edit',1)}}" class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm mr-1"><i class="fas fa-user-minus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>wwwwwwwwwwwwwwwwww</td>
                        <td>10</td>
                        <td>الابصالتس</td>
                        <td>wwwwwwwwwwwwwwwwwww</td>
                        <td>0120111111</td>
                        <td>
                        <select>        
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="mercedes">3</option>
                                <option value="audi">4</option>
                        </select>
                        </td>
                        <td><a href="#" class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm mr-1"><i class="fas fa-user-minus"></i></a></td>
                    </tr>
                </tbody>
            </table>
           </div>
    </div>
    
   
    </div>
</section>
@endsection