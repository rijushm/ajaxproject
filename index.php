<!DOCTYPE html>
<html>
<head>
	<title>AJAX Project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


	<div class="header bg-success">
		<h1 class="text-light text-center">Welcome</h1>
	</div>
	<div class="text-center mb-5">
		<h2>Hi, I'm Riju Sharma</h2>
		<p></p>
		<button class="btn btn1 btn-success mt-3">Know more</button>
	</div>


<div class="text-center">
	<p class="text-center text-secondary">This is a login, signup & feedback page using jQuery AJAX</p>
	<p class="text-center text-secondary">100% working on Local Database</p>
	<button class="btn loginbtn mr-2 btn-success">Log In</button>
	<button class="btn signupbtn mr-2 ml-2 btn-success">Sign Up</button>
	<button class="btn feedbackbtn ml-2 btn-success">Feedback</button>
	<button class="btn sourcecode ml-2 btn-success"><a href="https://rijushm.github.io/ajaxproject/" class="text-light">Source code</a></button>
</div>



<!-- form start -->
<div id="forms"></div>

<div id="getfeedback">
	<div class="text-center mt-5 mb-2">
  <h3 class="bg-success text-light">You can watch your feedbacks here:</h3>
  <button class="btn btn-dark" id="getfeedbtn">All Feedbacks</button>
</div>

<div id="getfeed mt-5">
  <table class="table table-hover">
    <thead>
      <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
      <th>Rating</th>
      </tr>
    </thead>

    <tbody class="response">
      
    </tbody>

  </table>
</div>
</div>



<footer class="bg-success m-0 mt-5">
	<h1 class="text-light text-center">Thank You</h1>
</footer>



	<script>
		$('document').ready(function(){
			$('.btn1').click(function(){
				$('h2').css('color','green');
				$.post('load.php',
				{
					name: "Riju Sharma",
					age: "20",
					role: "Front-end developer",
					occupation: "Student",
					college: "Techno International Batanagar",
					hobbies: "Coding, Drawing",
					location: "Kolkata, India",

				},
				function(data, status){
					alert("data: "+data+ "\nstatus: "+status);
					// $('p').load('load.php');
				});
			});


			$('.signupbtn').click(function(){
				$('#forms').load('signup.html');
			});

			var form = $('#sighupform');

			$('#signupsub').click(function(){

				$.ajax({
					url: form.attr("action"),
					type: 'post',
					data: $("#signupform input").serialize(),

					success: function(data){
						console.log(data);
					}
				});

			});




			$('.loginbtn').click(function(){
				$('#forms').load('login.html');
			});


			$('#eye').click(function(){
					$('#pwd').attr('type','text');
				});


			var form = $('#loginform');

			$('#loginsub').click(function(){

				$.ajax({
					url: form.attr("action"),
					type: 'post',
					data: $("#loginform input").serialize(),

					success: function(data){
						console.log(data);
					}
				});
			});

			$('.feedbackbtn').click(function(){
				$('#forms').load('feedback.html');
			});

			var form = $('#feedbackform');

			$('#feedbacksub').click(function(){

				$.ajax({
					url: form.attr("action"),
					type: 'post',
					data: $("#feedbackform input").serialize(),

					success: function(data){
						console.log(data);
					}
				});
			});

			$('#getfeedbtn').click(function(){
				$.ajax({

					url: 'displayajax.php',
					type: 'post',

					success: function(responsedata){
						$('.response').html(responsedata);
					}
				});
			});

		});
	</script>



</body>
</html>