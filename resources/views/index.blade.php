<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{padding-top:20px;}
	</style>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="{{url('checkLogin')}}">
			    	{{ csrf_field() }}
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Email" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>