<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
{{--    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">--}}

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>
<body>
<div class="main">


        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container">
            <div class="signup-content">
                <form action="{{route('register')}}" method="post" >
                    @csrf
                    <h2 class="form-title">Create account</h2>


                    <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-input" name="f_name" id="f_name" placeholder="First Name"/>
                    </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-input" name="l_name" id="l_name" placeholder="Last Name"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                    </div>
                    <div class="form-group">
                        <select class="form-input" name="role" id="role" >
                            <option value=""></option>
                            <option value="">admin</option>
                            <option value="">user</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" id="submit" class="form-submit">SUBMIT</button>
                    </div>
                </form>
                <p class="">
{{--                    Have already an account ? <a href="{{route('login')}}" class="loginhere-link">Login here</a>--}}
                </p>

            </div>
        </div>

</div>

<!-- JS -->
<script src="{{asset("public/jquery/jquery.min.js")}}"></script>
<script src="{{asset("js/main.js")}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
