<a name="readme-top">

<br/>

<br />
<div align="center">
  <a href="https://github.com/Trebzo/">
  <!-- TODO: If you want to add logo or banner you can add it here -->
    <img src="./assets/img/animeRECO.png" alt="Nyebe" width="130" height="100">
  </a>
<!-- TODO: Change Title to the name of the title of your Project -->
  <h3 align="center">animeRECO</h3>
</div>
<!-- TODO: Make a short description -->
<div align="center">
  animeRECO is a website which shares manga and animes that are popular and are top picked. 
  It is a website designed to help watchers and readers to help them on what to watch or read based on
  popularity and top picked.
</div>

<br />

<!-- TODO: Change the zyx-0314 into your github username  -->
<!-- TODO: Change the WD-Template-Project into the same name of your folder -->

![](https://visit-counter.vercel.app/counter.png?page=Trebzo/AD-CI4-Template-Project)

[![wakatime](https://wakatime.com/badge/user/018dd99a-4985-4f98-8216-6ca6fe2ce0f8/project/63501637-9a31-42f0-960d-4d0ab47977f8.svg)](https://wakatime.com/badge/user/018dd99a-4985-4f98-8216-6ca6fe2ce0f8/project/63501637-9a31-42f0-960d-4d0ab47977f8)

---

<br />
<br />

<!-- TODO: If you want to add more layers for your readme -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rule,-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

<!-- TODO: To be changed -->
<!-- The following are just sample -->

A simple PHP-based website that showcases anime and manga collections using arrays, functions, and modular components
Pages:

Landing Page (index.php) – Links to Anime and Manga sections.

Anime Page – Displays a list of anime using cards.

Manga Page – Displays a list of manga using cards.

Key Features:

PHP arrays & functions to render content

Reusable header and footer components

CSS-based custom banners and layout

Unified style with responsive design structure

### Key Components

<!-- TODO: List of Key Components -->
<!-- The following are just sample -->

1. Header (components/header.component.php)
2. Footer (components/footer.component.php)
3. Banner Section (unique to each page)
4. Card Display Section (using PHP loops)
5. Shared Styles (/assets/css/style.css)

### Technology

<!-- TODO: List of Technology Used -->
#### Language
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

## Rules, Practices and Principles

<!-- Do not Change this -->

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code         | Example                           |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal      | Utility              | Accoun.util.php                   |
   | Camel       | Components and Pages | index.php or footer.component.php |
8. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
9. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
10. File Structure to follow below.

```
AD-ProjectName
└─ assets
|   └─ css
|   |   └─ name.css
|   └─ img
|   |   └─ name.jpeg/.jpg/.webp/.png
|   └─ js
|       └─ name.js
└─ components
|   └─ header.component.php
|   └─ footer.component.php
└─ handlers
|   └─ name.handler.php
└─ pages
|  └─ anime
|     └─ assets
|     |  └─ css
|     |  |  
|     |  └─ img
|     |  |  └─ fire.jpg
|     |  |  └─ honey-lemon-soda.webp
|     |  |  └─ ippo.jpg
|     |  |  └─ my-hero.jpg
|     |  |  └─ one.jpg
|     |  |  └─ saga.jpg
|     |  |  └─ welcome-to-japan.jpg
|     |  └─ js
|     |     
|     └─ index.php
|  └─manga
|     └─ assets
|     |  └─ css
|     |  |  
|     |  └─ img
|     |  |  └─ chain.jpg
|     |  |  └─ ippo.webp
|     |  |  └─ juju.jpg
|     |  |  └─ one.jpg
|     |  |  └─ oshi.jpg
|     |  └─ js
|     |     
|     └─ index.php
|
|
|
|
|
|
|
└─ utils
|   └─ name.utils.php
└─ vendor
└─ .gitignore
└─ bootstrap.php
└─ composer.json
└─ composer.lock
└─ index.php
└─ readme.md
└─ router.php
```
> The following should be renamed: name.css, name.js, name.jpeg/.jpg/.webp/.png, name.component.php(but not the part of the `component.php`), Name.utils.php(but not the part of the `utils.php`)

## Resources

<!-- TODO: Add References -->

| Title        | Purpose                                                                       | Link          |
| ------------ | ----------------------------------------------------------------------------- | ------------- |
| mainheader.avif | Landing Page Banner                                                        | - https://screenrant.com/best-selling-manga-of-all-time/ |
| manga.webp   | manga page banner                                                             | https://www.reddit.com/r/VinlandSaga/comments/ojmyzs/manga_a_vinland_saga_twitter_header_created_by_me/ |
| danilo-pena-karz.jpg | anime page banner                                                     | https://www.artstation.com/artwork/03mv6w |


| anime images | Images used for the anime page                                                 | Link                                               |
|--------------|--------------------------------------------------------------------------------|----------------------------------------------------|
|my-hero.jpg   | Images used for the anime page                                                 |https://www.imdb.com/title/tt5626028/
|fire.jpg      |Images used for the anime page                                                  |https://www.imdb.com/title/tt9307686/
|honey-lemon-soda.webp| Images used for the anime page                                          |https://www.crunchyroll.com/news/latest/2024/12/2/honey-lemon-soda-release-date-trailer-visual-theme-songs
|ippo.jpg      |Images used for the anime page                                                  |https://www.imdb.com/title/tt0481256/
|one.jpg       |Images used for the anime page                                                  |https://www.imdb.com/title/tt4508902/
|saga.jpg      |Images used for the anime page                                                  |https://ph.pinterest.com/pin/597008494346787456/
|welcome-to-japan.jpg| Images used for the anime page                                           |https://www.imdb.com/title/tt30689448/

| manga images | Images used for the manga page                                                 | Link                                               |
|--------------|--------------------------------------------------------------------------------|----------------------------------------------------|
|chain.jpg     | Images used for the manga page                                                 |https://www.amazon.co.uk/Chainsaw-Man-Vol-1/dp/1974709930
|ippo.webp     | Images used for the manga page                                                 |https://ippo.fandom.com/wiki/Volume_140
|juju.jpg      | Images used for the manga page                                                 |https://www.viz.com/shonenjump/chapters/jujutsu-kaisen
|one.jpg       | Images used for the manga page                                                 |https://www.ubuy.com.ph/product/4157ZRL2G-one-piece-vol-100
|oshi.jpg      | Images used for the manga page                                                 |https://www.ebay.ph/itm/175685099860