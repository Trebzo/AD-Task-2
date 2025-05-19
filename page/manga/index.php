<?php include '../../components/header.component.php'; ?>

<main>
    <section class="banner">
        <h2>Discover trending manga</h2>
        <p>Explore top manga stories and start your collection.</p>
    </section>

    <section class="recommended">
        <h3>Top Manga Picks</h3>
        <div class="card-container">
            <?php
                $mangaList = [
                    ["title" => "One Piece", "img" => "../../assets/img/manga1.jpg"],
                    ["title" => "Chainsaw Man", "img" => "../../assets/img/manga2.jpg"],
                    ["title" => "Jujutsu Kaisen", "img" => "../../assets/img/manga3.jpg"],
                    ["title" => "Oshi no Ko", "img" => "../../assets/img/manga4.jpg"]
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
