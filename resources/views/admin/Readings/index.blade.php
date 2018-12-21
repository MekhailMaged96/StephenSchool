@extends('layouts.admin')
@section('page-head')
القطمارس والسنكسار
@endsection
@section('main-admin')

<section class="all-readings">
        <section class="sanxar">
                <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="row">
                                        <a href="{{route('readings.create')}}" class="btn btn-success  ml-auto mr-3"><i class='fa fa-plus'></i>  انشاء</a>
                             </div>  
                            <div class="text-left">
                                    <span><a href="#"><i class='fas fa-trash-alt' style="font-size:30px; color:#f00;"></i></a></span>
                                <span><a href="{{route('readings.edit',1)}}"><i class='fas fa-edit' style="font-size:30px; color:#00f;"></i></a></span>
                            </div>
                            <div class="text-center">
                                <div>

                                <span><a href="#"><img src="{{asset('img/arrow-left.png')}}" width="20px" height="20px" class="img-responsive"></a></span>
                                <span class="pb-4">الخميس : 8 نوفمبر 2018 - 29 بابة 1735</span>    
                                <span><a href="#"> <img src="{{asset('img/arrow-right.png')}}" width="20px" height="20px" class="img-responsive"></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="row">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                            <div class="reading">
                                <ul>
                                    <li> + إستشهاد القديس ديمتريوس التسالونيكي </li>
                                    <li> +  نياحة البابا غبريال السابع ال95 </li>
                                    <li> + تذكار الأعياد السيدية الكبرى (البشارة والميلاد والقيامة) </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-lg-8">
                            <div class="table-responsive-sm">
                                <table class="table table-borderless"  dir="rtl">
                                    <tr>
                                        <td>مزمور عشية</td> 
                                        <td>مز 46 : 1 ، 7</td>    
                                        <td>البولس</td>
                                        <td>غل 1 : 1-19</td>
                                    </tr>
                                    <tr>
                                        <td>انجيل عشية</td>
                                        <td>مر 1 : 16-22</td>
                                        <td>الكاثوليكون</td>
                                        <td>يع 1 : 1-12</td>
                                    </tr>
                                    <tr>
                                        <td>  </td>
                                        <td> </td>
                                        <td>الابركسيس</td>
                                        <td>اع 15 : 13-21</td>

                                    </tr>
                                    <tr>
                                        <td>مزمر باكر</td> 
                                        <td>مز 146 : 1 ، 5</td>
                                        <td>مزمور القداس</td> 
                                        <td>مز 78 : 5 ، 135 : 5</td>
                                    </tr>
                                    <tr>
                                        <td>انجيل باكر</td>
                                        <td>مت 4 : 18-22</td>
                                        <td>انجيل القداس</td>
                                        <td>مر 10 : 35-45</td>
                                    </tr>
                            </table>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
</section>

@endsection


@section('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    /*
var app = new Vue({
   el:"#app",
   data:{
   counter:{!!$counter->id!!},
   items:[],
   },
   mounted:function mounted(){
     this.getstart();
    },
   methods:{
   
    getstart:function(){
        var _this=this;
        axios.get('/admin/teacher/'+this.counter).then(function (response) {
        _this.items = response.data;
     ;
        });
    },
    left:function(){
        this.counter++;
        var _this = this;
        axios.get('/admin/teacher/'+this.counter).then(function (response) {
        _this.items = response.data;
       
        });
    },
    right:function(){
        if(this.counter<0) {
            this.counter=1;
        }else if(this.counter>1) {
            this.counter--;
        }

        var _this = this;
 
        axios.get('/admin/teacher/'+this.counter).then(function (response) {
        _this.items = response.data;
           
        });
    }
   },


});

*/
</script>
@endsection