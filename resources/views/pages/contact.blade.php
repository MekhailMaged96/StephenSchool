@extends('layouts.main')
@section('title','| الرئيسية')

@section('content')
 @include('_partials.withlogo')

    <div class="container">
            <div class="row">
                <div class=" offset-1 col-md-10 col-10 col-sm-10 offset-1">
                    <section class="contact">
                        <form action="" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label name="email">{{trans('app.email')}}</label>
                                        <input type="email" id="email" name="email" class="form-control"  placeholder="{{trans('app.email')}}">
                                    </div>
                                    <div class="form-group">
                                        <label name="subject">{{trans('app.subject')}}</label>
                                        <input name="subject" id="subject" class="form-control" placeholder="{{trans('app.subject')}}">
                                    </div>
                                    <div class="form-group">
                                        <label name="message">{{trans('app.message')}}</label>
                                        <textarea name="message"  id="message" class="form-control" placeholder="اكتب الرسالة هنا ..............."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg">ارسل</button>
                                </form>
                    </section>
                 </div>
        </div>
    </div>
</div>

        @include('_partials.footer')
@endsection
