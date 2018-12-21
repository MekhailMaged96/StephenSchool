@extends('layouts.admin')
@section('page-head')
    كل الخدام
@endsection
@section('main-admin')
<section class="all-users">
        
    <div class="row">
        <a href="{{route('teacher.create')}}" class="btn btn-primary  ml-auto mr-3"><i class='fas fa-user-plus'></i> اضافة خادم</a>
    </div>
   
    <div class="row" dir="rtl;">    
           <div class="table-responsive mr-3 mt-1">
            <table class="table table-sm table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">الاسم</th>
                        <th scope="col">البريد الالكترونى</th>
                        <th scope="col">رقم الهاتف</th>
                        <th scope="col">الفصل</th>
                        <th scope="col">التعديلات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>يونان</td>
                        <td>mekha@yahoo.com</td>
                        <td>01201111111</td>
                        <td> <select>        
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="mercedes">3</option>
                                <option value="audi">4</option>
                        </select>
                        </td>
                        <td><a href="{{route('teacher.edit',1)}}" class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm mr-1"><i class="fas fa-user-minus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>يونان</td>
                        <td>mekha@yahoo.com</td>
                        <td>01201111111</td>
                        <td> <select>        
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="mercedes">3</option>
                                <option value="audi">4</option>
                        </select>
                        </td>
                        <td><a href="{{route('teacher.edit',1)}}" class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm mr-1"><i class="fas fa-user-minus"></i></a></td>
                    </tr>
                </tbody>
            </table>
           </div>
    </div>
    
   
    </div>
</section>
@endsection