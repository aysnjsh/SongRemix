<?php
$artist = "DripReport";
$title = "Skechers";
$mood = "Comedic";

$intro = [
    "I tried to stop, but I can't stop",
    "I just can't stop thinking about her",
    "I don't know, all I remember was she wear the Skechers",
    "The light-up ones."
];

$chorus = [
    "Shawty bad with the Skechers on",
    "Wanna hold your hand, make you my girl",
    "Light-up, light-up Skechers",
    "Light up, light up my world",
    "Shawty bad with the Skechers on",
    "Wanna hold your hand, make you my girl",
    "Light-up, light-up Skechers",
    "Light up, light up my world."
];

$verse = [
    "I like your Skechers",
    "You like me, my Gucci shoe",
    "I'll buy you the purse",
    "Only if you show me your hoops",
    "I like your Skechers, you like me too",
    "Bring your friends, all of us in the pool",
    "Nice lil' beach, all my drip make her drool",
    "Brand new whip, come and sit in the coupe."
];

$bridge = [
    "I just wanna make you mine, hop inside the ride",
    "Nina by my side, promise you it all be fine",
    "I-I just wanna make you mine, hop inside the ride",
    "Nina by my side, promise it's gon' be alright."
];

$verseCount = 1;
$repeatChorus = 2;

$nouns = ["her", "Skechers", "ones", "hand", "girl", "world", "me", "Gucci shoe", "purse", "hoops", "friends", "pool", "beach", "drip", "whip", "coupe", "mine", "ride", "Nina", "side"];
$verbs = ["tried", "stop", "thinking", "remember", "wear", "hold", "make", "light", "like", "buy", "show", "bring", "sit", "want", "hop", "promise"];

?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <style>
            body { 
                font-family: "Lucida Console", "Courier New", monospace;
                color: rgba(226, 192, 0, 1);
                padding: 20px; 
                line-height: 2;
                background-color: #222;
            }
            .chorus {
                font-weight: bold;
            }
            .image-box {
            position: absolute;
            right: 30px;
            top: 30px;
            }
            .image-box img {
            width: 250px;
            border-radius: 20px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.4);
            }
        </style>
    </head>
    <body>
        <div class="image-box">
            <img src="Skechers.png" alt="Album Image">
        </div>

    <h1><?php echo $title; ?></h1>
    <p><strong>Artist:</strong> <?php echo $artist; ?></p>
    <p><strong>Mood:</strong> <?php echo $mood; ?></p>
    <p><strong>Verse Count:</strong> <?php echo $verseCount; ?></p>
    <p><strong>Chorus Repeats:</strong> <?php echo $repeatChorus; ?></p>

    <h2>Intro</h2>
    <p><?php echo $intro[0]; ?><br>
    <?php echo $intro[1]; ?><br>
    <?php echo $intro[2]; ?><br>
    <?php echo $intro[3]; ?></p>

    <h2>Chorus</h2>
    <p class="chorus"><?php echo $chorus[0]; ?><br>
    <?php echo $chorus[1]; ?><br>
    <?php echo $chorus[2]; ?><br>
    <?php echo $chorus[3]; ?></p>

    <p class="chorus"><?php echo $chorus[0]; ?><br>
    <?php echo $chorus[1]; ?><br>
    <?php echo $chorus[2]; ?><br>
    <?php echo $chorus[3]; ?></p>

    <h2>Verse</h2>
    <p><?php echo $verse[0]; ?><br>
    <?php echo $verse[1]; ?><br>
    <?php echo $verse[2]; ?><br>
    <?php echo $verse[3]; ?><br>
    <?php echo $verse[4]; ?><br>
    <?php echo $verse[5]; ?><br>
    <?php echo $verse[6]; ?><br>
    <?php echo $verse[7]; ?></p>

    <h2>Chorus</h2>
    <p class="chorus"><?php echo $chorus[0]; ?><br>
    <?php echo $chorus[1]; ?><br>
    <?php echo $chorus[2]; ?><br>
    <?php echo $chorus[3]; ?></p>

    <h2>Bridge</h2>
    <p class="bridge"><?php echo $bridge[0]; ?><br>
    <?php echo $bridge[1]; ?><br>
    <?php echo $bridge[2]; ?><br>
    <?php echo $bridge[3]; ?></p>

    <h2>Chorus</h2>
    <p class="chorus"><?php echo $chorus[0]; ?><br>
    <?php echo $chorus[1]; ?><br>
    <?php echo $chorus[2]; ?><br>
    <?php echo $chorus[3]; ?></p>

    </body>

</html>
