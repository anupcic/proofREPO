<!DOCTYPE html>
<html style="padding-top: 80px; padding-bottom: 80px">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="keywords" content="mathematics,mathematical proofs">
    <meta name="description" content="mathematical_proofs">
    <meta name="author" content="Design innovation center, dudic">

    <title>ProofRepo</title>

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" /> -->
<!-- hhh  social icon bootstap-->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.0.0/bootstrap-social.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.0.0/bootstrap-social.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.0.0/bootstrap-social.min.css.map">
	 --> 
	 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-bootstrap/0.5pre/assets/js/bootstrap.min.js"></script>

</head>
<body>

	@yield('promo')
	@include('layouts.partials.nav')
	<div class="container">
		@yield('content')

		
	</div>
	
	@yield('search-keyword')
	
	
	
	<div class="footer">
	@yield('footer')
	@include('layouts.partials.footer')
			@yield('footer')
		
	</div>
	<script>
   $(function(){
      $(".dropdown-toggle").dropdown('toggle');
   }); 
</script>

</body>
</html> 