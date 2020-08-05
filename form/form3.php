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
  <h2>Enter Semester II Marks</h2>
  <form class="form" action="form3.php" id="form"  method="post">
    <!-------
1. BS-100C, BS-100E, BS-111, CE-115, CS-100, EC-100, ME-113, ME-114
2. BS-100P, BS-121, CE-100, CE-122, EE-100, ME-123, ME-124, REE-100
------->
<br>

1. BS-100P
    <fieldset class="form-fieldset ui-input __first">
      <input type="number" id="bs100Pmid" tabindex="0" />
      <label for="bs100Pmid">
        <span data-text="Mid-term">Mid-term</span>
      </label>
      <input type="number" id="bs100Pth" tabindex="0" />
      <label for="bs100Pth">
        <span data-text="Theory">Theory</span>
      </label>
      <input type="number" id="bs100Ppr" tabindex="0" />
      <label for="bs100Ppr">
        <span data-text="Practical">Practical</span>
      </label>

<br><br>
2. BS-121

     <input type="number" id="bs121mid" tabindex="0" />
          <label for="bs121mid">
            <span data-text="Mid-term">Mid-term</span>
          </label>
          <input type="number" id="bs121th" tabindex="0" />
          <label for="bs121th">
            <span data-text="Theory">Theory</span>
          </label>
          <input type="number" id="bs121pr" tabindex="0" />
          <label for="bs121pr">
            <span data-text="Practical">Practical</span>
          </label>


<br><br>
3. CE-100
<input type="number" id="ce100mid" tabindex="0" />
     <label for="ce100mid">
       <span data-text="Mid-term">Mid-term</span>
     </label>
     <input type="number" id="ce100th" tabindex="0" />
     <label for="ce100th">
       <span data-text="Theory">Theory</span>
     </label>
     <input type="number" id="ce100pr" tabindex="0" />
     <label for="ce100pr">
       <span data-text="Practical">Practical</span>
     </label>


     <br><br>
     4. CE-122
     <input type="number" id="ce122mid" tabindex="0" />
          <label for="ce122mid">
            <span data-text="Mid-term">Mid-term</span>
          </label>
          <input type="number" id="ce122th" tabindex="0" />
          <label for="ce122th">
            <span data-text="Theory">Theory</span>
          </label>
          <input type="number" id="ce122pr" tabindex="0" />
          <label for="ce122pr">
            <span data-text="Practical">Practical</span>
          </label>

          <br><br>
          5. EE-100
          <input type="number" id="ee100mid" tabindex="0" />
               <label for="ee100mid">
                 <span data-text="Mid-term">Mid-term</span>
               </label>
               <input type="number" id="ee100th" tabindex="0" />
               <label for="ee100th">
                 <span data-text="Theory">Theory</span>
               </label>
               <input type="number" id="ee100pr" tabindex="0" />
               <label for="ee100pr">
                 <span data-text="Practical">Practical</span>
               </label>


                         <br><br>
                         6. ME-123
                         <input type="number" id="me123mid" tabindex="0" />
                              <label for="me123mid">
                                <span data-text="Mid-term">Mid-term</span>
                              </label>
                              <input type="number" id="me123th" tabindex="0" />
                              <label for="me123th">
                                <span data-text="Theory">Theory</span>
                              </label>
                              <input type="number" id="me123pr" tabindex="0" />
                              <label for="me123pr">
                                <span data-text="Practical">Practical</span>
                              </label>
<br><br>
                              7. ME-124
                              <input type="number" id="me124mid" tabindex="0" />
                                   <label for="me124mid">
                                     <span data-text="Mid-term">Mid-term</span>
                                   </label>
                                   <input type="number" id="me124th" tabindex="0" />
                                   <label for="me124th">
                                     <span data-text="Theory">Theory</span>
                                   </label>
                                   <input type="number" id="me124pr" tabindex="0" />
                                   <label for="me124pr">
                                     <span data-text="Practical">Practical</span>
                                   </label>

                                   <br><br>
                                   8. REE-100
                                   <input type="number" id="ree100mid" tabindex="0" />
                                        <label for="ree100mid">
                                          <span data-text="Mid-term">Mid-term</span>
                                        </label>
                                        <input type="number" id="ree100th" tabindex="0" />
                                        <label for="ree100th">
                                          <span data-text="Theory">Theory</span>
                                        </label>
                                        <input type="number" id="ree100pr" tabindex="0" />
                                        <label for="ree100pr">
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
      <button class="btn" id = "next3" type="submit" >Next</button>
    </div>
  </form>




</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#next3').click(function(e){


			var valid = this.form.checkValidity();

			if(valid){


			var bs100Pmid 	= $('#bs100Pmid').val();
      var bs100Pth 	= $('#bs100Pth').val();
      var bs100Ppr 	= $('#bs100Ppr').val();

			var bs121mid	= $('#bs121mid').val();
      var bs121th	= $('#bs121th').val();
      var bs121pr	= $('#bs121pr').val();

			var ce100mid  = $('#ce100mid').val();
      var ce100th  = $('#ce100th').val();
      var ce100pr  = $('#ce100pr').val();

			var ce122mid = $('#ce122mid').val();
      var ce122th = $('#ce122th').val();
      var ce122pr = $('#ce122pr').val();

			var ee100mid 	= $('#ee100mid').val();
      var ee100th 	= $('#ee100th').val();
      var ee100pr 	= $('#ee100pr').val();

      var me123mid 	= $('#me123mid').val();
      var me123th 	= $('#me123th').val();
      var me123pr 	= $('#me123pr').val();

      var me124mid 	= $('#me124mid').val();
      var me124th 	= $('#me124th').val();
      var me124pr 	= $('#me124pr').val();

      var ree100mid 	= $('#ree100mid').val();
      var ree100th 	= $('#ree100th').val();
      var ree100pr 	= $('#ree100pr').val();


				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'process3.php',
          data: {bs100Pmid: bs100Pmid,bs100Pth: bs100Pth,bs100Ppr: bs100Ppr,
            bs121mid: bs121mid,bs121th:bs121th, bs121pr: bs121pr,
            ce100mid: ce100mid,ce100th: ce100th,ce100pr:ce100pr,
          ce122mid: ce122mid,ce122th: ce122th,ce122pr:ce122pr,
          ee100mid: ee100mid,ee100th: ee100th,ee100pr:ee100pr,
          me123mid: me123mid,me123th: me123th,me123pr:me123pr,
          me124mid: me124mid,me124th: me124th,me124pr:me124pr,
          ree100mid: ree100mid,ree100th: ree100th,ree100pr:ree100pr,
          },
					success: function(data){
            $("form").trigger("reset");
            Swal.fire({
  								'title': 'Next',
  								'text': data,
  								'type': 'success'
  								}).then(function() {
                      window.location = "http://localhost/form/form4.php";
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
