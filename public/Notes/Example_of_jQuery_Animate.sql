<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        #the-box{
            width: 200px;
            height: 200px;
            background-color: cyan;
            border: 3px solid black;
            text-align: center;
            position: relative;
        }
        #msg{
            border-radius: 5px;
            background-color: #4cc94e;
            width: 100%;
            height: 20px;
            padding:10px 0;
            text-align: center;
            font-weight: bolder;
            position: absolute;
            bottom: 0;
        }
        .button {
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>  
</head>
<body>
    <h1>jQuery Animate</h1>
    <button class="button" id="animate">Animate</button>
    <br>
    <br>
    <div id="the-box">The Box content</div>
    <p id="msg">Animation completed!</p>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script   src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"   integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI="   crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function (){
            'use strict';
            //It's always a best practice to save the element in a jQuery var starting with a $ sign
            var $box = $('#the-box');
            var $btn = $('#animate');
            var $msg = $('#msg');
            $msg.hide();

            //Create an eventListener for the button and calls a function with the animation
            $btn.click(function(e){
                $msg.fadeOut();
                animateBox($box);
                animateBoxStack();
                $(this).attr('disabled','disabled');
            });

            //Animates the box within a JSON
            function animateBox($el){
                $el.animate({
                    left: "+=30px",
                    top:  "+=50px",
                    borderRadius: "40px",
                    transform: "rotate(360deg)"
                    // height: "toggle"
                    // opacity:"toggle"
                }, 1000, function(){
                    //callback function procedure
                    $msg.fadeIn();
                    $btn.removeAttr('disabled');
                });
            }

            //Animates the box within a JSON
            function animateBoxStack(){
                $box.animate({
                    left: "+=10px",
                    top:  "+=10px"
                }, 1000).animate({
                    //Note: this css property required jQuery UI library
                    backgroundColor: "red"
                },1000).animate({
                    fontSize: '+    =1em'
                }, 1000);
            }

        });
    </script>
</body>
</html>