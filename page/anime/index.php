<?php include '../../components/header.component.php'; ?>

<main>
    <section class="banner">
        <h2>Discover new anime</h2>
        <p>Find your new favorites, track your progress, watch videos.</p>
    </section>

    <section class="recommended">
        <h3>Popular this week</h3>
        <div class="card-container">
            <?php
                $animeList = [
                    [
                        "title" => "The Unaware Atelier Meister",
                        "img" => "../../assets/img/anime1.jpg"
                    ],
                    [
                        "title" => "Solo Leveling Season 2",
                        "img" => "../../assets/img/anime2.jpg"
                    ],
                    [
                        "title" => "Witch Watch",
                        "img" => "../../assets/img/anime3.jpg"
                    ],
                    [
                        "title" => "Kowloon Generic Romance",
                        "img" => "../../assets/img/anime4.jpg"
                    ]
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
