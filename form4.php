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
  <h2>Enter Semester III Marks</h2>
  <form class="form" action="form4.php" id="form"  method="post">
    <!-------
1. BS-100C, BS-100E, BS-111, CE-115, CS-100, EC-100, ME-113, ME-114
2. BS-100P, BS-121, CE-100, CE-122, EE-100, ME-123, ME-124, REE-100
3. BS - 211 CS-211 CS-212 CS-213 CS-214 EC-219 EE-212
------->
<br>

1. BS-211
    <fieldset class="form-fieldset ui-input __first">
      <input type="number" id="bs211mid" tabindex="0" />
      <label for="bs211mid">
        <span data-text="Mid-term">Mid-term</span>
      </label>
      <input type="number" id="bs211th" tabindex="0" />
      <label for="bs211th">
        <span data-text="Theory">Theory</span>
      </label>
      <input type="number" id="bs211pr" tabindex="0" />
      <label for="bs211pr">
        <span data-text="Practical">Practical</span>
      </label>

<br><br>
2. CS-211

     <input type="number" id="cs211mid" tabindex="0" />
          <label for="cs211mid">
            <span data-text="Mid-term">Mid-term</span>
          </label>
          <input type="number" id="cs211th" tabindex="0" />
          <label for="cs211th">
            <span data-text="Theory">Theory</span>
          </label>
          <input type="number" id="cs211pr" tabindex="0" />
          <label for="cs211pr">
            <span data-text="Practical">Practical</span>
          </label>


<br><br>
3. CS-212
<input type="number" id="cs212mid" tabindex="0" />
     <label for="cs212mid">
       <span data-text="Mid-term">Mid-term</span>
     </label>
     <input type="number" id="cs212th" tabindex="0" />
     <label for="cs212th">
       <span data-text="Theory">Theory</span>
     </label>
     <input type="number" id="cs212pr" tabindex="0" />
     <label for="cs212pr">
       <span data-text="Practical">Practical</span>
     </label>


     <br><br>
     4. CS-213
     <input type="number" id="cs213mid" tabindex="0" />
          <label for="cs213mid">
            <span data-text="Mid-term">Mid-term</span>
          </label>
          <input type="number" id="cs213th" tabindex="0" />
          <label for="cs213th">
            <span data-text="Theory">Theory</span>
          </label>
          <input type="number" id="cs213pr" tabindex="0" />
          <label for="cs213pr">
            <span data-text="Practical">Practical</span>
          </label>

          <br><br>
          5. CS-214
          <input type="number" id="cs214mid" tabindex="0" />
               <label for="cs214mid">
                 <span data-text="Mid-term">Mid-term</span>
               </label>
               <input type="number" id="cs214th" tabindex="0" />
               <label for="cs214th">
                 <span data-text="Theory">Theory</span>
               </label>
               <input type="number" id="cs214pr" tabindex="0" />
               <label for="cs214pr">
                 <span data-text="Practical">Practical</span>
               </label>


                         <br><br>
                         6. EC-219
                         <input type="number" id="ec219mid" tabindex="0" />
                              <label for="ec219mid">
                                <span data-text="Mid-term">Mid-term</span>
                              </label>
                              <input type="number" id="ec219th" tabindex="0" />
                              <label for="ec219th">
                                <span data-text="Theory">Theory</span>
                              </label>
                              <input type="number" id="ec219pr" tabindex="0" />
                              <label for="ec219pr">
                                <span data-text="Practical">Practical</span>
                              </label>
<br><br>
                              7. EE-212
                              <input type="number" id="ee212mid" tabindex="0" />
                                   <label for="ee212mid">
                                     <span data-text="Mid-term">Mid-term</span>
                                   </label>
                                   <input type="number" id="ee212th" tabindex="0" />
                                   <label for="ee212th">
                                     <span data-text="Theory">Theory</span>
                                   </label>
                                   <input type="number" id="ee212pr" tabindex="0" />
                                   <label for="ee212pr">
                                     <span data-text="Practical">Practical</span>
                                   </label>



      </fieldset>


<!-------------

    <fieldset class="form-fieldset ui-input __second">
      <input type="number" id="BS-100E" tabindex="0" />
      <label for="BS-100E">
        <span data-text="BS-100E">BS-100E</span>
      </label>
    </fieldset>

    <fieldset class="form-fieldset ui-input __third">
      <input type="number" id="BS-111" />
      <label for="BS-111">
        <span data-text="BS-111">BS-111</span>
      </label>
    </fieldset>

    <fieldset class="form-fieldset ui-input __fourth">
      <input type="number" id="CE-115" />
      <label for="CE-115">
        <span data-text="CE-115">CE-115</span>
      </label>
    </fieldset>

    <fieldset class="form-fieldset ui-input __fifth">
      <input type="number" id="CS-100" />
      <label for="CS-100">
        <span data-text="CS-100">CS-100</span>
      </label>
    </fieldset>

    <fieldset class="form-fieldset ui-input __sixth">
      <input type="number" id="EC-100" />
      <label for="EC-100">
        <span data-text="EC-100">EC-100</span>
      </label>
    </fieldset>

    <fieldset class="form-fieldset ui-input __seventh">
      <input type="number" id="ME-113" />
      <label for="ME-113">
        <span data-text="ME-113">ME-113</span>
      </label>
    </fieldset>

    <fieldset class="form-fieldset ui-input __eighth">
      <input type="number" id="ME-114" />
      <label for="ME-114">
        <span data-text="ME-114">ME-114</span>
      </label>
    </fieldset>

    <h2>Enter Semester II Marks</h2>

    --------------->

    <div class="form-footer">
      <button class="btn" id = "next4" type="submit" >Next</button>
    </div>
  </form>




</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#next4').click(function(e){


			var valid = this.form.checkValidity();

			if(valid){


			var bs211mid 	= $('#bs211mid').val();
      var bs211th 	= $('#bs211th').val();
      var bs211pr 	= $('#bs211pr').val();

			var cs211mid	= $('#cs211mid').val();
      var cs211th	= $('#cs211th').val();
      var cs211pr	= $('#cs211pr').val();

			var cs212mid  = $('#cs212mid').val();
      var cs212th  = $('#cs212th').val();
      var cs212pr  = $('#cs212pr').val();

			var cs213mid = $('#cs213mid').val();
      var cs213th = $('#cs213th').val();
      var cs213pr = $('#cs213pr').val();

			var cs214mid 	= $('#cs214mid').val();
      var cs214th 	= $('#cs214th').val();
      var cs214pr 	= $('#cs214pr').val();

      var ec219mid 	= $('#ec219mid').val();
      var ec219th 	= $('#ec219th').val();
      var ec219pr 	= $('#ec219pr').val();

      var ee212mid 	= $('#ee212mid').val();
      var ee212th 	= $('#ee212th').val();
      var ee212pr 	= $('#ee212pr').val();




				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'process4.php',
          data: {bs211mid: bs211mid,bs211th: bs211th,bs211pr: bs211pr,
            cs211mid: cs211mid,cs211th:cs211th, cs211pr: cs211pr,
            cs212mid: cs212mid,cs212th: cs212th,cs212pr:cs212pr,
          cs213mid: cs213mid,cs213th: cs213th,cs213pr:cs213pr,
          cs214mid: cs214mid,cs214th: cs214th,cs214pr:cs214pr,
          ec219mid: ec219mid,ec219th: ec219th,ec219pr:ec219pr,
          ee212mid: ee212mid,ee212th: ee212th,ee212pr:ee212pr,
          },
					success: function(data){
            $("form").trigger("reset");
            Swal.fire({
  								'title': 'Next',
  								'text': data,
  								'type': 'success'
  								}).then(function() {
                      window.location = "http://localhost/form/form5.php";
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
