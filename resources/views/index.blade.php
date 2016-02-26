<!DOCTYPE html>
<html>
<head>
  <title>HRMS</title>
  {{ HTML::style('assets/css/bootstrap.min.css') }}
</head>
<body>
<div class="container" style="margin-top:30px">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title"><strong>Sign in </strong></h3></div>
        <div class="panel-body">
          {{ Form::open(array('url' => '/login', 'method' => 'post')) }}
              {{ csrf_field() }}
              <div class="form-group">
                {{ Form::label('InputEmail', 'Email ID', array('class' => 'control-label')) }}
                {{ Form::email('email',null,array('class' => 'form-control','autofocus')) }}
              </div>

              <div class="form-group">
                {{ Form::label('InputPassword', 'Password', array('class' => 'control-label')) }}
                {{ Form::text('password',null,array('class' => 'form-control')) }}
              </div>

              {{ Form::submit('Sign In', array('class' => 'btn btn-sm btn-default')) }}
          {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
</body>
</html>