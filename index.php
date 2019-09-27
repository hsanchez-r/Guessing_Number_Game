<?php
//destroy the cookie when reloading the game.
setcookie('random', 0, time() - 3600);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Guessing the Number Game</title>
        <style type="text/css">
            body {
                background-color: #FFFFCC;
                text-align: -moz-center; /* for Firefox */
                text-align: center;
                padding-left: 100px;
                padding-right: 100px;
            }

            div.placeholder {
                border: 0px solid #3366CC;
                width: 500px;
                background-color: #3366CC;
                padding: 10px; 
                margin: 0 auto;
            }
            div.controls {
                color: white;
                text-align: left;
                margin-top: 10px;
                margin-left: 50px;
            }
            div#score {
                display: inline-block;
                background-color: #fff;
                color: #000;
                width: 50px;
                text-align: center;
                margin-top: 8px;
                margin-left: 1px;
            }
            div#divMessage {
                padding-top: 10px;
                color: #fff;
            }
        </style>
        <!-- link to an external js file guess.js -->
        <script src="guess.js"></script>
    </head>
    <body>
        <h2><font size="16pt">Guessing the Number</font></h2>
        <h3>GOOD LUCK AND HAVE FUN</h3>
        <div class="placeholder">
            <div class="img"><img src="guess.gif" alt="" /></div>
            <div class="controls">
                Guess: <input type="number" id="guess" size="5" autofocus="" placeholder="number 1 - 100" required min="1" max="100"/>
                <button onclick="play()">Guess</button>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" style="display:inline">
                    <input type="Submit" value="Reload" />
                </form>
                <br>Score: 
				<!-- div block to display score -->
                <div id="score">100</div>
            </div>
			<!-- div block to display message -->
                <div id="divMessage"></div>
        </div>
    </body>
</html>