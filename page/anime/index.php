<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anime Picks | Anime Planet</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="wrapper">
        <?php include '../../components/header.component.php'; ?>

        <main>
            <section class="banner anime-banner">
                <h2>Discover new anime</h2>
                <p>Find your new favorites, track your progress, watch videos.</p>
            </section>

            <section class="recommended">
                <h3>Popular this week</h3>
                <div class="card-container">
                    <?php
                        $animeList = [
                            ["title" => "Welcome To Japan, Ms. Elf!", "img" => "assets/img/welcome-to-japan.jpg"],
                            ["title" => "Honey Lemon Soda", "img" => "assets/img/honey-lemon-soda.webp"],
                            ["title" => "Vinland Saga", "img" => "assets/img/saga.jpg"],
                            ["title" => "Hajime No Ippo", "img" => "assets/img/ippo.jpg"],
                            ["title" => "My Hero Academia", "img" => "assets/img/my-hero.jpg"],
                            ["title" => "Fire Force", "img" => "assets/img/fire.jpg"],
                            ["title" => "One Punch Man", "img" => "assets/img/one.jpg"]
                            
                        ];

                        function displayAnime($anime) {
                            echo '<div class="card">';
                            echo '<img src="' . $anime["img"] . '" alt="' . $anime["title"] . '">';
                            echo '<p class="title">' . $anime["title"] . '</p>';
                            echo '</div>';
                        }

                        foreach ($animeList as $anime) {
                            displayAnime($anime);
                        }
                    ?>
                </div>
            </section>
        </main>

        <?php include '../../components/footer.component.php'; ?>
    </div>
</body>
</html>
