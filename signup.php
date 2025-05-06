<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "ui/css/signup.css"/>
    <title>My Chat</title>
  
</head>

<body>
    <div id="wrapper">
        <div id="header">
            My Chat
            <div style="font-size: 20px;">Sign up</div>
        </div>
        <div id="error">some text</div>
        <form action="" id="myform">
            <input type="text" name="username" id="" placeholder="username"><br>
            <input type="email" name="email" id="" placeholder="email"><br>
            <div style="padding: 10px;">
                Gender:<br>
                <input type="radio" value="Male" name="gender_male" id="">Male<br>
                <input type="radio" value="Female" name="gender_female" id="">Female<br>
            </div>
            <input type="password" name="password" id="" placeholder="Password"><br>
            <input type="password" name="password2" id="" placeholder="Retype Password"><br>
            <!-- <input type="password" name="password2" id="" placeholder="Retype Password"><br> -->
            <input type="button" value="Sign Up" id="signup_button">
            <br>
            <br>
            <a href="login.php" style="display: block;text-align:center;">
                Already have an account?? Login hear
            </a>
        </form>

    </div>
</body>
<script src="js/signup.js" type="text/javascript">
    
</script>

<!-- //part 12 is finesd next day part  -->

</html>