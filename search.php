<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <link rel="stylesheet" type="text/css" href="css/icon.css">
  <script src="css/icon.js" type="text/javascript" charset="utf-8" async defer></script>


  <style>
.search-box{
  position: absolute;
  top: 48%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #2f3640;
  height: 60px;
  border-radius: 40px;
  padding: 10px;
}
.search-box:hover > .search-text{
width: 240px;
padding: 0 6px;
}
.search-box:hover > .search-btn{
  background: black;
}
.search-btn{
  color: #e84118;
  float: right;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: grey;
  display: flex;
  justify-content: center;
  align-items: center;
  transition:all 0.4s ease;
}
.search-text{
  border:none;
  background: none;
  outline: none;
  float: left;
  padding: 0;
  color: black;
  letter-spacing: 1px;
  font-weight: bold;
  font-size: 20px;
  transition:all 0.8s ease;
  line-height: 40px;
  width: 0px;
}

  </style>
</head>
<body>

	<form class="search-box ">
 		<input class="search-text" type="text" name="" placeholder="search">
 		<a class="search-btn" href=""><i class="fas fa-search"></i></a>
	


</body>
</html>







<!--<style>
	.t{
		padding-top: 20px;
	}
	.fa-search{
		font-size: 20px;
	}
	.btn-default{
		background: orange;
		width: 100px;
		padding: 12px;
	}
	.form-control{
		padding: 25px;
		font-size: 25px;
	}
</style>

	<title></title>
</head>
<body>
		<form class="t">
			<input type="text" name="search" placeholder="search">
			<button class="btn btn-default" type="submit">
				<i class="fa fa-search"></i>
			</button>
		</form>

</body>
</html>-->