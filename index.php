<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Chat</title>
    <link rel="stylesheet" href="ui/css/index.css">
</head>

<body>
    <div id="wrapper">
        <div id="left_pannel">
            <div id="user_info" style="padding: 10px;">
                <img id="profile_image" src="ui/images/male.jpg" alt="" srcset="" style="height:100px;width:100px;">
                <br>
                <span id="username">username</span>
                <br>
                <span id="email" style="font-size: 12px;opacity:0.5;">email@gmail.com</span>
                <br>
                <br>
                <br>
                <div>
                    <label id="label_chat" for="radio_chat">Chat <img src="ui/icons/chat.png" alt="" srcset=""></label>
                    <label id="label_contact" for="radio_contact">Contact <img src="ui/icons/contacts.png" alt="" srcset=""></label>
                    <label id="label_setting" for="radio_setting">Setting <img src="ui/icons/settings.png" alt="" srcset=""></label>
                    <label id="logout" for="radio_logout">Logout <img src="ui/icons/logout.png" alt="" srcset=""></label>
                </div>
            </div>

            <!-- <input type="button" value="Logout" id="logout"> -->

        </div>
        <div id="right_pannel">
            <div id="header">
                <div id="loader_hold" class="loader_on"><img style="width: 70px;" src="ui/icons/giphy.gif" alt="" srcset=""></div>

                <div id="image_vewer" class="image_off" onclick="close_image(event)">

                </div>
                My Chat
            </div>
            <div id="container" style="display: flex;">
                <div id="inner_left_pannel">

                </div>
                <input style="display: none;" type="radio" name="myradio" id="radio_chat">
                <input style="display: none;" type="radio" name="myradio" id="radio_contact">
                <input style="display: none;" type="radio" name="myradio" id="radio_setting">
                <div id="inner_right_pannel">
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/index1.js" type="text/javascript"></script>

<script src="js/index2.js" type="text/javascript">
    
</script>

<!-- // -->

</html>