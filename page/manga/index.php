<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manga Picks | Anime Planet</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="wrapper">
        <?php include '../../components/header.component.php'; ?>

        <main>
            <section class="banner manga-banner">
                <h2>Discover trending manga</h2>
                <p>Explore top manga stories and start your collection.</p>
            </section>

            <section class="recommended">
                <h3>Top Manga Picks</h3>
                <div class="card-container">
                    <?php
                        $mangaList = [
                            ["title" => "One Piece", "img" => "assets/img/one.jpg"],
                            ["title" => "Chainsaw Man", "img" => "assets/img/chain.jpg"],
                            ["title" => "Jujutsu Kaisen", "img" => "assets/img/juju.jpg"],
                            ["title" => "Oshi no Ko", "img" => "assets/img/oshi.jpg"],
                            ["title" => "Hajime No Ippo The Fighting", "img" => "assets/img/ippo.webp"],
                        ];

                        function displayManga($manga) {
                            echo '<div class="card">';
                            echo '<img src="' . $manga["img"] . '" alt="' . $manga["title"] . '">';
                            echo '<p class="title">' . $manga["title"] . '</p>';
                            echo '</div>';
                        }

                        foreach ($mangaList as $manga) {
                            displayManga($manga);
                        }
                    ?>
                </div>
            </section>
        </main>

        <?php include '../../components/footer.component.php'; ?>
    </div>
</body>
</html>
