<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>LoginForm</title>
</head>

<body>
    <main>
        <section class="container flex">
            <form class="flex" action="rec.php">
                <div class="form-title flex">
                    <h2>Login</h2>
                </div>
               
                <div class="user-info flex">
                    <div class="user-box">
                        <input type="text" name="un" required="">
                        <label>Username</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="pwd" required="">
                        <label>Password</label>
                    </div>
                </div>
                <div class="wrapper flex">
                    <input type="submit" class="flex" class="scale rotate-4" value="Login">
			
                    <p><a href="#">Forgot Your Password?</a>
					<br><a href="registrationform.html" >Register </a>
					</p>
                </div>
            </form>
        </section>
        <section>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.8)" />
                    <use xlink:href="#gentle-wave" x="48" y="6" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="4" fill="rgba(255,255,255,0.5" />
                    <use xlink:href="#gentle-wave" x="48" y="2" fill="rgba(255,255,255,0.3)" />
                </g>
            </svg>
        </section>
    </main>

</body>

</html>