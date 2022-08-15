<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Combat</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <?php echo '<h1 style="color: red">'.json_encode($_POST).'</h1>'; ?>
        <div id="laVielle"></div>

            <form action="index.php" method="POST">
                <ul>
                    <li>
                        <input type="text" name="vieDeLaVieille" value="<?php echo $laVielle->getVie(); ?>" />
                        <input type="text" name="vieDuJeune" value="<?php echo $leJeune->getVie(); ?>" />
                        <input type="text" name="attaquant" value="<?php echo $attaquant; ?>" />
                    </li>
                    <li>
                        <button class="button" type="submit" value="coupDeCanne" name="attaqueName">Coup de canne</button> 
                        <button class="button" type="submit" value="sermon" name="attaqueName">Sermon</button>
                        <button class="button" type="submit" value="crochePied" name="attaqueName">Croche pied</button>
                        <button class="button" type="submit" value="coupDeCasquette" name="attaqueName">Coup de casquette</button>
                    </li>
                </ul>
            </form>



       <div id="leJeune"></div>
       <button class="button" name="button">Attaquer</button>
    </main>
</body>
</html>