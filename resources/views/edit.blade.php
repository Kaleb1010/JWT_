<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update Form</title>

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
            <form  action="{{route('updated')}}" method="post"  id="signup-form" class="signup-form">
                @csrf
                <h2 class="form-title">Update</h2>
                <div class="form-group">
                    <input type="text" class="form-input" name="f_name" id="f_name" placeholder="First Name"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="l_name" id="l_name" placeholder="Last Name"/>

                </div>

                <div class="form-group">
                    <button type="submit" name="submit" id="submit" class="form-submit" >Update</button>
                </div>
            </form>

        </div>
    </div>

</div>

<!-- JS -->
<script src="{{asset("public/jquery/jquery.min.js")}}"></script>
<script src="{{asset("js/main.js")}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
