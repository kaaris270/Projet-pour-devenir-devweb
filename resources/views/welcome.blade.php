<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="">
        <header class="">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand logo" href="{{ url('/') }}"><img src="{{URL::asset('images\drapeau-republique-inénizienne.png')}}" class="d-flex align-items-start" width="130" height="65" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end align-self-center" id="navbarNavAltMarkup">
                        <div class="navbar-nav fs-5 mx-4">
                            <a class="bleu lien bleu mx-3" href="">Règles citoyennes</a>
                            <a class="bleu lien bleu mx-3" href="{{url('temoignage')}}">Témoignages</a>
                            <a class="bleu lien bleu mx-3" href="{{url('contact')}}">Contact</a>
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/deconnexion') }}" class="bleu lien bleu ms-3">Déconnexion</a>
                                @else
                                    <a href="{{ route('inscription') }}" class="bleu lien bleu mx-3">Inscription</a>
                                    <a href="{{ route('login') }}" class="bleu lien bleu ms-3">Connexion</a>
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
            <hr class="mx-5 bleu shadow">
        </header>
        <main>
            <div class="container animate__fadeInDown animate__delay-5s animate__slow">
                <h3 class="bleu">Actualités</h3>
                <p class="text-muted">
                    Ici, vous trouverez l'actualité récente du pays afin de 
                    participer aux mieux à l'évolution du pays.
                </p>
                <section class="vote imj">
                    <div class="py-5"></div>
                    <div class="py-5"></div>
                    <a class="lien" href="{{url('')}}">
                        <div class="d-flex align-self-end bgbleua mt-5 py-4 my-3">
                            <h3 class="d-flex align-items-center text-white mx-4">
                                Suivre cette actualité
                            </h3>
                        </div>
                    </a>
                    
                </section>
                <section class="imj arme">
                    <a class="lien" href="{{url('/armee')}}">
                        <div class="bgjaune d-flex py-4 my-3 ">
                            <h3 class="text-white align-items-center mx-4">
                                S’engager dans l'armée
                            </h3>
                        </div>
                    </a>
                </section>
                <section class="imj loua">
                    <a href="" class="lien">
                        <div class="bgrouge d-flex py-4 my-3 ">
                            <h3 class="text-white align-items-center mx-4">
                                S'informer sur l'histoire du pays
                            </h3>
                        </div>
                    </a>
                </section>
                
                <div class="row my-5">
                    <div class="col-sm-6 col-11">
                        <h3 class="bleu">Les lois</h3>
                        <p>
                            La constitution ayant fini d'être rédigé, 
                            tous les citoyens sont dans l'obligation 
                            de lire les règles et les devoirs auxquels 
                            ils doivent répondre.
                        </p>
                        <div class=" my-5">
                            <a href="" class="bgbleu fs-5 text-white lien py-2 px-4">En savoir plus</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-11">
                        <img class="img-fluid" src="{{URL::asset('images\lois1.png')}}" alt="">
                    </div>
                </div>
            </div>
            <section class="bgbleu py-5 mb-5">
                <div class="d-flex justify-content-center">
                    <p class="text-white col-sm-6 col-11">
                        Participer à la vie de ce pays vous a, sans aucun 
                        doute, aider à evoluer en tant que personne et 
                        temps que citoyen. Vous pouvez temoigner, 
                        partager votre experience.
                    </p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{url('temoignage')}}" class="blackbtn fs-5 text-white lien py-2 px-4">En savoir plus</a>
                </div>
            </section>
        </main>
        <footer>
            <hr class="mx-5 bleu">
            <div class="d-flex justify-content-sm-center py-4">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="lien text-muted mx-4 col-1 col-sm-auto">Politique de confidentialité</a>
                <a href="" data-bs-toggle="modal" data-bs-target="#example" class="lien text-muted mx-4 col-1 col-sm-auto">Cookies</a>
                <a href="{{url('contact')}}" class="lien text-muted mx-4 col-1 col-sm-auto">Contact</a>
                <a href="" data-bs-toggle="modal" data-bs-target="#e" class="lien text-muted mx-4 col-1 col-sm-auto">Condition d’utilisation</a>
            </div>
            <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Politique de confidentialité</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Les données personnelles collectées servent
                                uniquement à rendre les fonctiolatié accessibles
                                et n’ont pas vocation à être partagées en dehors des cas prévus par les 
                                lois et règlements. Elles peuvent néanmoins être 
                                rendues accessibles aux professionnel chargé du 
                                Service de données du Gouvernement, pour les 
                                stricts besoins et dans les limites de leur 
                                mission. <br><br>
                                Les traitements de données personnelles ont pour 
                                finalités d'offrir aux utilisateurs des moyens 
                                d’interagir avec lui et dassurer le bon 
                                fonctionnement du site. <br><br>
                                Vos données sont conservées par le Service 
                                de données du Gouvernement pendant 5 ans.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="example" aria-labelledby="example" aria-hidden="true" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Cookies</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Auncun cookies n'est mis en place sur ce site.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="e" aria-labelledby="e" aria-hidden="true" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Condition d’utilisation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>
                                En tant qu'utilisateur, vous avez l’obligation 
                                de ne pas tenter de nuire au bon fonctionnement 
                                du site ainsi qu'aux autres utilisateurs. <br><br>
                                Il est interdit d'utiliser ce site à des fins 
                                malveillant (partager du contenu illicite, 
                                montrer son adhésion à un groupe dangereux, 
                                ternir des propos injurieux et diffamatoire, etc
                                ).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
