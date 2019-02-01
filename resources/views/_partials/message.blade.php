@if(Session::has('success'))

<div class="alert alert-success text-center" role="alert">

    <h5>{{Session::get('success') }}</h5>
    
</div>


@endif

@if(count($errors)>0)


<div class="alert alert-danger" role="alert">
        <strong>Errors:</strong>
    @foreach($errors->all() as $error )
      <p> {{$error}} </p> 
     @endforeach 
</div>


@endif