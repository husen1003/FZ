<!DOCTYPE html>
<html>
<head>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <link rel="stylesheet" type="text/css" href="css/icon.css">
  <script src="css/icon.js" type="text/javascript" charset="utf-8" async defer></script> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">    
	  <div class="text-center">           
	      <div class="col-lg-6">
	        <h2>Password show / hide click</h2> 
	        <div class="input-group">
	          <input type="password" class="form-control pwd" value="iamapassword">
	          <span class="input-group-btn">
	            <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
	          </span>          
	        </div>
	      </div>
	  </div>  
	  <script>
	  	$(".reveal").on('click',function() {
    var $pwd = $(".pwd");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
    } else {
        $pwd.attr('type', 'password');
    }
});
	  </script>
</div>
</body>
</html>