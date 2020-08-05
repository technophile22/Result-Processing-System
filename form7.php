<?php
require_once('config.php');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta name="viewport" content="width=device-width">
<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>

<div class="container-fluid">


  <h1 style="font-size:18px;">Result Processing System</h1>
 
  <form class="form" action="form7.php" id="form"  method="post">
<fieldset style = "margin-top:30%;" class="form-fieldset ui-input __first">
     
<input type="number" id="roll_no" tabindex="0" />
      <label for="roll_no">
        <span data-text="Enter the Roll no">Enter the Roll no</span>
      </label>
</fieldset>
    <div style = "margin-top:20%;" class="form-footer">
      <button class="btn" id = "next7" type="submit">GET RESULT</button>
    </div>
  </form>




</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#next7').click(function(e){


			var valid = this.form.checkValidity();

			if(valid){

					var roll_no 	= $('#roll_no').val();






				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'process7.php',
          data: {roll_no:roll_no

          },
					success: function(data){
            $("form").trigger("reset");
            Swal.fire({
  								'title': 'Next',
  								'text': data,
  								'type': 'success'
  								}).then(function() {
                      window.location = "http://localhost/form/form8.php";
                  });
          },
          error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}

        });
     }

  });


});

</script>
<script>

var $input = $('.form-fieldset > input');

$input.blur(function (e) {
  $(this).toggleClass('filled', !!$(this).val());
});
</script>





<!---css----->
<style>
@import "bourbon";
 body {
	 background-color: #363e4a;
	 font-family: "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
	 font-size: 16px;
	 color: #fff;
	 line-height: 1.5;
}
 h1 {
	 font-family: "Texta", "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
	 font-weight: 700;
	 text-transform: uppercase;
	 letter-spacing: 4px;
	 text-align: center;
}
 h2 {
	 font-weight: 400;
	 font-size: 24px;
	 color: rgba(255, 255, 255, .5);
   font-family: 'Roboto', sans-serif;
}
 .container-fluid {
	 max-width: 400px;
	 margin: 0 auto;
	 padding: 20px 16px 40px 16px;
	 transform: translateZ(0);
	 text-align: center;

}
 .form-footer {
	 margin-top: 2em;
}
 .ui-input {
	 position: relative;
	 padding: 0;
	 border: 0;
}
 .ui-input input {
	 font-family: "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
	 border: 0;
	 background: none;
	 padding: 16px 0 16px 0;
	 font-size: 24px;
	 outline: 0;
	 width: 100%;
	 tap-highlight-color: rgba(0, 0, 0, 0);
	 touch-callout: none;
}
 .ui-input input + label {
	 position: relative;
	 display: block;
	 padding: 8px 0 8px 0;
	 text-transform: uppercase;
	 font-size: 14px;
	 letter-spacing: 0.0875em;
	 font-weight: 500;
	 text-align: left;
}
 .ui-input input + label::before, .ui-input input + label::after {
	 position: absolute;
	 top: 0;
	 left: 0;
	 content: "";
	 width: 100%;
	 height: 1px;
}
 .ui-input input + label::before {
	 background-color: rgba(255, 255, 255, .2);
}
 .ui-input input + label::after {
	 transform: scaleX(0);
	 transform-origin: left;
	 transition: transform 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
	 background-color: #6eb1ff;
	 height: 2px;
}
 .ui-input input + label span {
	 position: absolute;
	 color: rgba(255, 255, 255, .2);
	 transition: color 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
}
 .ui-input input + label span::after {
	 content: attr(data-text);
	 position: absolute;
	 overflow: hidden;
	 left: 0;
	 transform: scaleX(1);
	 white-space: nowrap;
	 color: #fff;
	 background-image: linear-gradient(to right, #4a90e2 50%, rgba(255, 255, 255, 0) 0%);
	 background-position: 100% 50%;
	 background-size: 200%;
	 -webkit-background-clip: text;
	 -webkit-text-fill-color: transparent;
	 backface-visibility: hidden;
	 perspective: 1000;
	 transform: translateZ(0);
	 transition: background-position 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
}
 .ui-input input:focus + label::after, .ui-input input.error + label::after, .ui-input input:invalid + label::after, .ui-input input.filled + label::after {
	 transform: scaleX(1);
	 transform-origin: left;
}
 .ui-input input:focus + label span::after, .ui-input input.error + label span::after, .ui-input input:invalid + label span::after, .ui-input input.filled + label span::after {
	 background-image: linear-gradient(to right, rgba(255, 255, 255, 1) 50%, rgba(255, 255, 255, 0) 0%);
	 background-position: 0% 50%;
}
 .ui-input input.filled {
	 color: #fff;
}
 .ui-input input.filled + label::after {
	 background-color: #fff;
}
 .ui-input input.filled + label span::after {
	 background-image: linear-gradient(to right, #fff 50%, rgba(255, 255, 255, 0) 0%);
	 background-position: 0% 50%;
}
 .ui-input input:focus {
	 color: #6eb1ff;
}
 .ui-input input:focus + label::after {
	 background-color: #6eb1ff;
}
 .ui-input input:focus + label span::after {
	 background-image: linear-gradient(to right, #6eb1ff 50%, rgba(255, 255, 255, 0) 0%);
	 background-position: 0% 50%;
}
 .ui-input input.error, .ui-input input:invalid {
	 color: #e66161;
}
 .ui-input input.error + label::after, .ui-input input:invalid + label::after {
	 background-color: #e66161;
}
 .ui-input input.error + label span::after, .ui-input input:invalid + label span::after {
	 background-image: linear-gradient(to right, #e66161 50%, rgba(255, 255, 255, 0) 0%);
	 background-position: 0% 50%;
}
 .btn {
	 border: 0;
	 background-color: #50617a;
	 padding: 18px 30px;
	 font-size: 14px;
	 line-height: 1.5;
	 text-transform: uppercase;
	 letter-spacing: 0.0875em;
	 font-weight: 500;
	 color: #fff;
	 font-family: "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
	 border-radius: 100px;
	 outline: 0;
	 transition: background-color 300ms cubic-bezier(0.215, 0.61, 0.355, 1), color 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
}
 .btn:focus, .btn:active, .btn:hover {
	 background-color: #6eb1ff;
	 color: white;
}
 .__first, .__second, .__third, .__fourth, .__fifth {
	 animation-name: fadeIn;
	 animation-duration: 180ms;
	 animation-fill-mode: both;
	 animation-iteration-count: 1;
}
 .__first {
	 animation-delay: 0;
}
 .__second {
	 animation-delay: 80ms;
}
 .__third {
	 animation-delay: 180ms;
}
 .__fourth {
	 animation-delay: 360ms;
}
.__fifth {
  animation-delay: 400ms;
}

 @keyframes fadeIn {
	 from {
		 opacity: 0;
		 transform: translate3d(0, -25%, 0);
	}
	 to {
		 opacity: 1;
		 transform: translate3d(0, 0, 0);
	}
}

</style>

</body>
</html>
