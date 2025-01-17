<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Accueil CSS - L'art Sartorial</title>
        <meta charset="utf-8" >
        <!-- Métadonnées descriptives Open Graph Metatags -->
        <meta property="og:title" content="Accueil PHP - L'art Sartorial">
        <meta property="og:description" content="Découvrez l'art sartorial : définition, histoire, caractéristiques, 
            différences avec les habits basiques, et conseils.">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="fr_FR">
        <meta name="author" content= "Julian Beaubatie">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="canonical" href="https://moccasin-gnat-215913.hostingersite.com/php">
        <!-- Métadonnées LD-JSON -->
        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "WebSite",
              "name": "L'art Sartorial",
              "url": "https://moccasin-gnat-215913.hostingersite.com/php",
              "creator": ["Julian Beaubatie"],
              "description": "Découvrez l'art sartorial : définition, histoire, caractéristiques, différences avec les 
                habits basiques, et conseils."
            }
        </script>
        <!-- Ajout de Bootstrap + fichier CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <!-- Barre de navigation -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="https://moccasin-gnat-215913.hostingersite.com">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://moccasin-gnat-215913.hostingersite.com/css">Page CSS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://moccasin-gnat-215913.hostingersite.com/php">Page PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://moccasin-gnat-215913.hostingersite.com/js">Page JS</a>
                </li>
            </ul>
            <h1>Les bases de l'art Sartorial</h1>
        </header>
        <main>
            <!-- Section Définition et histoire -->
            <section>
                <h2>Définition et histoire</h2>
                    <p><em>Sartorial</em> est un emprunt à l'anglais, où cet adjectif a le sens beaucoup plus large de « vestimentaire », sans faire référence à un style ou à un courant vestimentaire précis. Ce mot vient du latin <em>sartor</em>, qui signifie « tailleur ».</p>
                    <p>L'adjectif <em>sartorial</em> est attesté en français avec son sens actuel dès 1977, mais il s'est surtout répandu au milieu des années 2010 lorsque des grands couturiers l'ont repris pour qualifier leurs défilés de mode masculine.</p>
                    <p>De nos jours, ce terme est utilisé pour désigner des habits qui sont vus comme classe et élégant, que ce soit chemises, costumes, chapeaux, souliers ou autres.</p>
            </section>
            <!-- Section Caractéristiques du style -->
            <section>
                <h2>Caractéristiques du style</h2>
                    <p>Les vêtements du style sartorial se distinguent par plusieurs éléments :</p>
                    <ul class="list-group list-group-horizontal-lg">
                        <li class="list-group-item">
                            <span>Textile</span> Les matières sont naturelles et adaptées aux situations, 
                                la laine et cachemire pour l'hiver, le lin pour l'été et en général du coton.</li>
                        <li class="list-group-item">
                            <span>Coupe</span> Contrairement aux différentes modes la coupe ne change que très peu, 
                                les vêtements ne doivent pas être larges ni serrés.</li>
                        <li class="list-group-item">
                            <span>Couleur</span> Généralement les couleurs sont assez sobres, bleu marine, gris, blanc, 
                                bleu clair, peu de couleurs extravagantes.</li>
                        <li class="list-group-item">
                            <span>Code</span> Un code vestimentaire est présent, il divague selon chaque personne, 
                                car certaines règles étaient utiles à leur époque, mais plus de nos jours.</li>
                    </ul>
            </section>
            <!-- Section Différences -->
            <section>
                <h2>Les différences</h2>
                    <p>Voici les différences fondamentales entre des habits basiques et sartoriaux :</p>
                    <div id ="diff" class="container my-3">
                        <img src="chemise.webp" class="img-fluid float-start me-3" alt="Image d'un homme portant une chemise">
                        <p>La chemise sartorial ici a un col assez large et long, la taille totale est également plus longue 
                            pour qu'elle reste bien en place dans le pantalon et ne contient presque jamais de pochette au torse.</p>
                    </div>
                    <div id ="diff" class="container my-3">
                        <img src="costume.jpg" class="img-fluid float-start me-3" alt="Image d'un homme portant un costume">
                        <p>Un bon costume possède des revers assez larges, la différence se fait surtout sur la coupe, 
                            par exemple l'emmanchure des manches monte assez haut ou laisser un peu de longueur de tissu dans 
                            le dos pour permettre de bouger les bras.</p>
                    </div>
                    <div id ="diff" class="container my-3">
                        <img src="costume_erreur.jpg" class="img-fluid float-start me-3" alt="Image d'un homme portant un costume moderne">
                        <p>Ici le costume à des revers fin mais il est pas mal du tout, cependant la chemise à un col beaucoup 
                            trop petit, on essaye normalement d'avoir le col qui passe juste en dessous du revers du costume, 
                            et on ne ferme pas tous les boutons d'une chemise sans porter de cravate.</p>
                    </div>
            </section>
            <!-- Section Conseils et références -->
            <section>
                <h2>Conseils et références</h2>
                    <p>Pour vous informer, en français, il existe les blogs de 
                        <a href="https://www.bonnegueule.fr/journal/">Bonne Gueule</a> et 
                        <a href="https://www.parisiangentleman.com/">Parisian Gentleman</a> mais également la chaîne YouTube 
                        <a href="https://www.youtube.com/@DiscussionsSartoriales">Discussions Sartoriales</a>.</p>
                    <p>Pour débuter je vous conseille 
                        <a href="https://www.youtube.com/watch?v=ccTIb36PdeI">cette vidéo</a></p>
                    <p>En voici la première minute :</p>
                    <video controls>
                        <source src="video.mp4" type="video/mp4">
                    </video>
            </section>
            <!-- Avis -->
            <section>
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-md-6"> 
                            <h2>Laissez un avis</h2>
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <div class="form-group col-12 col-md-6 mb-3">
                                        <input type="text" id="nom" name="nom" class="form-control" 
                                            required placeholder="Votre nom"/>
                                    </div>
                                    <div class="form-group col-12 col-md-6">
                                        <input type="email" id="email" name="email" class="form-control" 
                                            required placeholder="Votre adresse mail"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-12 col-md-6 mb-3">
                                        <input type="date" id="date" name="date" class="form-control" required/>
                                    </div>
                                    <div class="form-group col-12 col-md-6">
                                        <select id="note" name="note" class="form-select" required aria-label="Note">
                                            <option value="" disabled selected>Choisissez une note</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <textarea id="commentaire" name="commentaire" class="form-control" 
                                        required placeholder="Écrivez votre commentaire"></textarea>
                                </div>
                                <button class="btn btn-primary" type="submit" name="submit">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
                <h2>Commentaires des utilisateurs</h2>
                <?php include 'afficher_avis.php'; ?>
            </section>
        </main>
        <footer>
            <p>&copy; 2024 L'art Sartorial. Tous droits réservés.</p>
        </footer>        
    </body>
</html>


