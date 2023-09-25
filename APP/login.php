
<!DOCTYPE html>
<html>
	<head>
		<title>LOGIN</title>

	    <style type="text/css">
			* {
			    margin: 0;
			    padding: 0;
			    box-sizing: border-box;
			    font-family: Calibri;
			}

			body {
			    display: flex;
			    justify-content: center;
			    align-items: center;
			    min-height: 100vh;
			}

			.UTAMA {
			    width: 100%;
			    display: flex;
			    width: 100%;
			    max-width: 1600px;
			    min-height: 680px;
			    background: #fff;
			}

			.LEFT {
			    width: 600px;
			    font-size: 18px;
			}

			.LEFT img{
			    padding-right:20px;
			    padding-left: 10px;
			}

			.RIGHT img {
			    width:900px;
			    height: 100%; 
			}

			form {
			    width: 350px;
			    margin: 60px auto;
			}

			h1 {
				color: #ffa12c;
				font-size: 50pt;
			    text-align: left;
			    font-weight: bolder;
			    text-transform: uppercase;
			}

			hr {
			    border-top: 2px solid navy;
			}

			p {
			    text-align: right;
			    margin: 10px;
			}

			input {
				font-size: 20px;
			    width: 350px;
			    margin: 2px;
			    border: none;
			    outline: none;
			    padding: 15px;
			    border-radius: 10px;
			    border: 1px solid gray;
			}

			button {
			    border: none;
			    outline: none;
			    padding: 8px;
			    width: 350px;
			    color: #fff;
			    font-size: 20px;
			    cursor: pointer;
			    margin-top: 20px;
			    border-radius: 10px;
			    background: #ffa12c;
			}

			button:hover {
			    background: navy;
			}

			/* action active */
             
            .toggle.active {
                background: url(img/close.png);
                background-repeat: no-repeat;
                background-size: 25px;
                background-position: center;
                cursor: pointer;
            }

			

		</style>
	</head>

	<body>
	    <div class="UTAMA">
	        <div class="LEFT">
	        	<img src="img/LOGO.png" align="LEFT">
	        	<br>KEMENTERIAN AGRARIA DAN TATA RUANG/<br>BADAN PERTANAHAN NASIONAL<br>
	        	KANWIL PAPUA<br><br><br>

		            <form action="login.php" method="post">
		                <h1>Login</h1>
		                <hr>
		            	<br>
		                <input type="text" placeholder="USERNAME">
		                <br>
		                <br>
						<input type="password" placeholder = "PASSWORD" value="" id="inputPassword">
						
						<input type="checkbox" onclick="myFunction()">Tampilkan Password
						   
						</input>
		                <button>Login</button>

		            </form>
	        </div>
	        <div class="RIGHT">
		        <img src="img/pict.webp">
			</div>
	    </div>

	    <script> 
        function myFunction() {
            var x = document.getElementById("inputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    	</script>

    	<?php 
    		if (isset ($_POST['submit'])) {
    			$user=mya
    		}
    		?>
						  
        

	</body>
</html>