<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
      <h5 class="navbar-brand title">كنيسة الملاك والرومانى</h5>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ml-auto">
            <a class="nav-link" href="/contact">{{trans('app.contact')}} <span class="sr-only">(current)</span></a>
          </li>
       

          @if(!(Auth::guard('admin')->check()|| Auth::guard('teacher')->check()||Auth::guard('web')->check()) )

          <li class="nav-item ml-auto">
          <a class="nav-link" href="/login">{{trans('app.Login')}}</a>
          </li>
          @else
          
          <li class="nav-item dropdown ">
            <li class="nav-item dropdown ml-auto">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if(Auth::guard('web')->check())
                {{ Auth::user()->name }} <span class="caret"></span>
                @elseif(Auth::guard('admin')->check())

                {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>

                @elseif(Auth::guard('teacher')->check())
                {{ Auth::guard('teacher')->user()->name }} <span class="caret"></span>
                @endif
              </a>
              <div class="dropdown-menu dropleft" aria-labelledby="navbarDropdown">
                @isstudent
                <a class="dropdown-item" href="{{route('studentsubject')}}">موادى</a>
                <a class="dropdown-item" href="{{route('studentresult')}}">{{trans('app.myresult')}}</a>
               @endisstudent

               @isteacher
                <a class="dropdown-item" href="{{route('teacher.myclass')}}">الفصل</a>
               @endisteacher
               @isadmin
               <a class="dropdown-item" href="{{route('admin.panel')}}">لوحة التحكم</a>
               @endisadmin
              
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="
              
                {{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{trans('app.logout')}}
                </a>

                <form id="logout-form" action="{{ route('logout') }}
               
                " method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
          
          </li>
          @endif
          <li class="nav-item ml-auto">
            <a class="nav-link" href="/gallary">{{trans('app.gallary')}}</a>
          </li>
          <li class="nav-item active ml-auto">
            <a class="nav-link" href="/">{{trans('app.home')}}</a>
          </li>
        </ul>
      </div>
  </div>
</nav>