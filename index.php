<?php
include("common.php");

outputHeader("coco");

outputBannerNavigation("game");

?>



<!-- 本文 -->

<!--ゲーム画面-->
<div class="game">
    <div class="gameframe">

    </div>
    (PHP)
</div>

<footer>
    <div class="Introduction">
        <h2>Introduction</h2>
        <p>This game is that player shoots to moving balls by using right clicks. You starts this
            game, a player can get hit points every time player destroys moving ball. Time limit
            is two minutes, so You must hit to moving ball in time.</p>
    </div>
    <div class="list">
        <div class="Rules">
            <h2>Rules</h2>
            <p>・Time limmit is two minitue.</p>
            <p>・You can get 10 points every time you destroy targets.</p>
            <p>・If you play it, the point you got is refrected on tab for your latest score</p>
        </div>
        <div class="Score">
            <h2>Your <br>
                latest Score</h2>
            <p>pt</p>
        </div>
    </div>
</footer>
<!--フッター -->
<?php
outputFooter();
?>
