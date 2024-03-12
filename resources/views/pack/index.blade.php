<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PACK</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <!--

INSTRUCTIONS:
- Using html and css, create the design we shared with you on Figma.

WHAT WE EXPECT FROM YOU:
- Your code should be scalable and maintainable.
- Your code should be component-based.
- Your code should support all modern browsers.
- You are completely free to use the new css features.
-->

    <!-- YOUR HTML STARTS HERE -->

    <section class="plans__container">
        <div class="plans">
            <div class="planItem__container">
                <!--free plan starts -->
                <div class="planItem planItem--free">

                    <div class="card">
                        <div class="card__header">
                            <div class="card__icon symbol symbol--rounded"></div>
                            <h2>Standard</h2>
                        </div>
                        <div class="card__desc">Le Pack Standard est parfait pour ceux qui recherchent un accès simple
                            et abordable à leurs services bancaires de base. Avec ce pack, vous bénéficiez des
                            fonctionnalités suivantes :</div>
                    </div>

                    <div class="price">3000Fcfa<span>/ mois</span></div>

                    <ul class="featureList">
                        <li>1.000.0000 plafond</li>
                        <li>Own analytics platform</li>
                        <li>Consultation des soldes et des relevés de compte</li>
                        <li>Transferts bancaires nationaux</li>
                    </ul>

                    <button class="button">
                        <a href="{{ route('register', ['pack_id' => '1']) }}">Commencer</a>
                    </button>
                </div>
                <!--free plan ends -->

                <!--pro plan starts -->
                <div class="planItem planItem--pro">
                    <div class="card">
                        <div class="card__header">
                            <div class="card__icon symbol"></div>
                            <h2>Premium</h2>
                            <div class="card__label label">Meilleur Prix</div>
                        </div>
                        <div class="card__desc"> Le Pack Premium offre une expérience bancaire supérieure, avec des
                            fonctionnalités avancées conçues pour répondre à vos besoins financiers spécifiques.
                        </div>
                    </div>
                    <div class="price">5000Fcfa<span>/ mois</span></div>

                    <ul class="featureList">
                        <li>5.000.000 Plafond</li>
                        <li>Transferts d'argent internationaux</li>
                        <li>Gestion de portefeuille d'investissement</li>
                        <li>Service clientèle dédié avec assistance rapide et personnalisée</li>
                    </ul>

                    <button class="button">
                        <a href="{{ route('register', ['pack_id' => '2']) }}">Commencer</a>
                    </button>
                </div>
                <!--pro plan ends -->

                <!--entp plan starts -->
                <div class="planItem planItem--entp">
                    <div class="card">
                        <div class="card__header">
                            <div class="card__icon"></div>
                            <h2>Gold</h2>
                        </div>
                        <div class="card__desc"> Le Pack Gold est conçu pour ceux qui recherchent le nec plus ultra en
                            matière de services bancaires et financiers. Avec ce pack, vous bénéficiez des avantages
                            suivants :</div>
                    </div>
                    <div class="price">12.000Fcfa / mois</div>

                    <ul class="featureList">
                        <li>10.000.000 Plafond</li>
                        <li>Conseils financiers personnalisés</li>
                        <li>Assurance voyage et assurance fraude</li>
                        <li>Accès à des services haut de gamme avec frais réduits ou gratuits</li>
                    </ul>

                    <button class="button">
                        <a href="{{ route('register', ['pack_id' => '3']) }}">Commencer</a>
                    </button>
                </div>
                <!--entp plan ends -->

            </div>
        </div>
    </section>
    <!-- partial -->

</body>

</html>
