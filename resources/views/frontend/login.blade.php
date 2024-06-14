<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>login</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>* {
            margin: 0;
            padding: 0;
            border: none;
            box-sizing: border-box; 
            font-family: sans-serif;
        }
        body {
            background: linear-gradient(45deg, #8e2de2, #4a00e0);
            background-repeat: no-repeat;
            min-width: 100vw;
            min-height: 100vh;
            display:flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            background: white;
            min-width: 320px;
            min-height: 40vh;
            padding: 2rem;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        
        }
        main h1 {
            font-weight: 600;
            margin-bottom: 2rem;
            position: relative;
        }
        main h1::before {
            position: absolute;
            width: 25px;
            height: 4px;
            content: '';
            bottom: 1px;
            left: 0;
            border-radius: 8px;
            background: linear-gradient(45deg, #8e2de2, #4a00e0)
        }
        form {
            display: flex;
            flex-direction: column;
        }
        .input-field {
            position: relative;
        }
        form .input-field:first-child {
            margin-bottom: 1.5rem;
        }
        .input-field .underline::before {
            content: '';
            position: absolute;
            height: 1px;
            width: 100%;
            bottom: -5px;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
        
        }
        .input-field .underline::after {
            content: '';
            position: absolute;
            height: 1px;
            width: 100%;
            bottom: -5;
            left: 0;
            background: linear-gradient(45deg, #8e2de2, #4a00e0);
            transform: scaleX(0);
            transition: all .3s ease-in-out;
            transform-origin: left;
        } 
        .input-field input:focus ~ .underline::after {
            transform: scaleX(1);
        }
        .input-field input {
            outline: none;
            font-size: 0.9em;
            color: rgba(0, 0, 0, 0.7);
            width: 100%;
        }
        .input-field input::placeholder{
            color: rgba(0, 0, 0, 0.5);
        }
        form input[type="submit"] {
            margin-top: 2rem;
            padding: 0.4rem;
            width: 100%;
            background: linear-gradient(to left, #4776e6, #8e54e9);
            cursor: pointer;
            color: white;
            font-weight: 300;
            font-size: 0.9rem;
            border-radius: 4px;
            transition: all 0.3s ease
        }
        form input[type="submit"]:hover {
            letter-spacing: 0.5px;
            background: linear-gradient(to right, #4776e6, #8e54e9);
        }
        .footer {
            display: flex;
            flex-direction: column;
            margin-top: 1rem;
        }
        .footer  span {
            color: rgba(0, 0, 0, 0.7);
            font-size: 0.8rem;
            text-align: center;
        }
        .footer .social-media {
            padding: 0.4rem;
            border-radius: 4px;
            font-size: 0.85rem;
            width: 100%;
            cursor: pointer;
            margin-top: 1rem;
        }
        .footer .social-media a i {
            margin: 0 0.5rem;
            width: 15px
        }
        .footer .social-media a {
            text-decoration: none;
            color: white
        }
        .footer .social-media.twitter{
            background: linear-gradient(to right, #56a7f2, #468aca )
        }
        .footer .social-media.facebook {
            background: linear-gradient(to right, #1e3c72, #2a5298)
        }</style>
    </head>
    <body>
        <main class="container">
            
            <h1>Login</h1>
            <form action="">
                <div class="input-field">
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                    <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="password" name="password" id="password" pattern="[a-z][8]" placeholder="Enter your password" required>
                    <div class="underline"></div>
                </div>
                <input type="submit" value="Continue">
            </form>
            <div class="footer">
                <span>Or connect with social media</span>
                <div class="social-media">
                    <div class="social-media twitter">
                        <a href="#"><i class="fab fa-twitter"></i> Sign in with twitter
                        </a>
                    </div>
                    <div class="social-media facebook">
                        <a href="#"><i class="fab fa-facebook-f"></i>
                            Sign in with facebook
                        </a>
                    </div>


                </div>
            </div>
        </main>

    </body>
</html>