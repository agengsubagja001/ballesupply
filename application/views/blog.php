<?php $this->load->view('partial/head'); ?>
<?php $this->load->view('partial/navbar'); ?>

<body>
<link href='https://fonts.googleapis.com/css?family=Anton|Passion+One|PT+Sans+Caption' rel='stylesheet' type='text/css'>

        <!-- Error Page -->
            <div class="error">
                <div class="container-floud">
                    <div class="col-xs-12 ground-color text-center">
                        <div class="container-error-404">
                            <div class="clip"><div class="shadow"><span class="digit thirdDigit"></span></div></div>
                            <div class="clip"><div class="shadow"><span class="digit secondDigit"></span></div></div>
                            <div class="clip"><div class="shadow"><span class="digit firstDigit"></span></div></div>
                            <div class="msg">OH!<span class="triangle"></span></div>
                        </div>
                        <h2 class="h1">Coming soon</h2>
                    </div>
                </div>
            </div>
        <!-- Error Page -->
        <script>
						function randomNum()
				{
					"use strict";
					return Math.floor(Math.random() * 9)+1;
				}
					var loop1,loop2,loop3,time=30, i=0, number, selector3 = document.querySelector('.thirdDigit'), selector2 = document.querySelector('.secondDigit'),
						selector1 = document.querySelector('.firstDigit');
					loop3 = setInterval(function()
					{
					"use strict";
						if(i > 40)
						{
							clearInterval(loop3);
							selector3.textContent = 4;
						}else
						{
							selector3.textContent = randomNum();
							i++;
						}
					}, time);
					loop2 = setInterval(function()
					{
					"use strict";
						if(i > 80)
						{
							clearInterval(loop2);
							selector2.textContent = 0;
						}else
						{
							selector2.textContent = randomNum();
							i++;
						}
					}, time);
					loop1 = setInterval(function()
					{
					"use strict";
						if(i > 100)
						{
							clearInterval(loop1);
							selector1.textContent = 4;
						}else
						{
							selector1.textContent = randomNum();
							i++;
						}
					}, time);

        </script>

        <!-- js blog -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>


