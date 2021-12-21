<?php
/*
 Credits:
 1. https://pixabay.com/en/fortune-cookie-cookie-fortune-1192836/
 2. https://commons.wikimedia.org/wiki/File:Fortune_cookie.jpg

 Exercise:
 We are going to build a website similar to https://www.astrology.com/game/fortune-cookie.html

 Instructions:
 1. The very first time index.php is opened in a web browser, no quote should be displayed.
 2. Only when the user clicks on the SUBMIT button, then index.php displays a randomly selected quote.
 3. Check out rand function (http://php.net/manual/en/function.rand.php)

 */

$quotes = [
    "Life is not fair, get used to it. -- Bill Gates",
    "When something is important enough, you do it even if the odds are not in your favor. -- Elon Musk",
    "I will hit you so hard even Google won't be able to find you. -- Sir Lay Foo",
    "Great things in business are never done by one person. They're done by a team of people. - Steve Jobs",
    "You never lose a dream. It just incubates as a hobby. -- Larry Page",
    "Seriously! I worry for you! -- Master Lee Y. L.",
    "Team Spirit. You Live I Live. You Die I Live. -- Krazy Korean Woman",
    "If you judge people, you have no time to love them. -- Mother Teresa"
];

if( isset($_POST['crack']) ) {
    // Someone pressed the submit button!
    $quote = $quotes[ rand(0, count($quotes) - 1) ];
}

?>
<html>
<body>
    <?php
        if( isset($quote) ) {
            echo "<h1>$quote</h1>";
            echo "<img src='img/open.jpeg'>";
        }
        else {
            echo "<img src='img/closed.jpeg'>";
        }
    ?>
    

    <form action='index.php' method='POST'>
        <br>
        <input type='submit' name='crack' value='Crack open your cookie!'>
    </form>

    <hr>
    <a href='index.php'>Home</a>

</body>
</html>

