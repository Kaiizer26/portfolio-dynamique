<main class="home-main">

    <!-- Nav Hero Banner --------------- -->
    <nav id="nav-index">
        <div id="nav-texte">
            <p id="nav-hello">Salut, je m'appelle</p>
            <h1 id="nav-dylan">Dylan Zakaharinivo</h1>
            <ul class="dynamic-txt">
                <li>
                    <h2>Etudiant à l'EFREI en Développement Web & Application</h2>
                </li>
                <li>
                    <h2>Recherche un stage en tant que Développeur Web</h2>
                </li>
                <li>
                    <h2>Recherche un stage en tant que Développeur de Jeu</h2>
                </li>
                <li>
                    <h2>Recherche un stage en tant que Designer UX/UI</h2>
                </li>

            </ul>
            <p>Bienvenue sur mon site.<span class="wave"> 👋🏼</span></p>
        </div>
        <img src="images/kaiizerpfp.jpg">

    </nav>
    <!-- Main A propos ----------------- -->
    <article class="about">
        <h2>A propos
            <hr>
        </h2>

        <div class="about-container">
            <img src="images/kaiizerpfp.jpg">
            <div class="about-right">
                <p>Etudiant en 2ème année de Bachelor Développement Web & Application, je suis actuellement en
                    recherche d’un stage en tant que Développeur (Front-End, Back-End, Application, Jeu).
                    N'ayant qu'une seule expérience professionnelle concrète à ce jour, je serai d'autant plus motivé,
                    passionné et prêt à répondre à chaque mission qui me sera confiée.</p>

                <p>Ma démarche en programmation et en Web Design se distingue par une approche créative, mettant
                    l'accent sur l'innovation et l'esthétique du site web. Ma capacité à m'adapter aux nouvelles
                    technologies témoigne de ma volonté d'apprendre constamment dans le domaine du développement
                    Web.</p>
            </div>
        </div>
    </article>
    <p></p>

    <!-- Section Compétences -->
    <section class="skills-section">

        <hr>
        <h2>Compétences</h2>

        <div class="skills-btn">
            <button class="btn-tech-out" id="btn-technologies">
                <h3 id="h3-technologies">Technologies</h3>
            </button>
            <button class="btn-tech-out" id="btn-outils">
                <h3 id="h3-outils">Outils</h3>
            </button>
        </div>



        <section class="skills-list">

            <?php foreach ($technologies as $technology): ?>

                <article class="technologies">
                    <img src="<?= $technology['image_path'] ?>">
                    <div class="section-article-texte">
                        <h3><?= $technology['name'] ?></h3>
                        <p><?= $technology['level'] ?></p>
                </article>

            <?php endforeach; ?>

            <?php foreach ($tools as $tool): ?>

                <article class="outils">
                    <img src="<?= $tool['image_path'] ?>">
                    <div class="section-article-texte">
                        <h3><?= $tool['name'] ?></h3>
                        <p><?= $tool['service'] ?></p>
                </article>

            <? endforeach; ?>
        </section>

    </section>

</main>