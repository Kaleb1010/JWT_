<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>
<body>
<div class="main">


    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="container">
        <div class="signup-content">
            <form  action="{{route('log_in')}}" method="post"  id="signup-form" class="signup-form">
                @csrf
                <h2 class="form-title">Sign In</h2>
                <div class="form-group">
                    <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>

                </div>
                <div class="form-group">
                    <label for="role">Roles:</label>
                    <select class="form-input" name="role" id="role">
                        <option value=""></option>
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" id="submit" class="form-submit" >Login</button>
                </div>
            </form>

        </div>
    </div>

</div>

<!-- JS -->
<script src="{{asset("public/jquery/jquery.min.js")}}"></script>
<script src="{{asset("js/main.js")}}"></script>
</body>
</html>
