<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
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
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Pariatur at est sit nobis. Impedit voluptate quam enim 
                    obcaecati aut praesentium est provident, quos eaque minus 
                    id accusantium rem magni neque?
                </p>
                <section class="vote imj">
                    <div class="py-5"></div>
                    <div class="py-5"></div>
                    <a class="lien" href="{{url('')}}">
                    </a>
                    <div class="d-flex align-self-end bgbleua mt-5 py-4 my-3">
                            <h3 class="d-flex align-items-center text-white mx-4">
                                Suivre cette actualité
                            </h3>
                    </div>
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
                    <div class="bgrouge d-flex py-4 my-3 ">
                        <a class="lien" href="">
                            <h3 class="text-white align-items-center mx-4">
                                S'informer sur l'histoire du pays
                            </h3>
                        </a>
                        
                    </div>
                </section>
                
                <div class="row my-5">
                    <div class="col-sm-6 col-11">
                        <h3 class="bleu">Les lois</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Ut exercitationem voluptatem, repudiandae commodi, 
                            numquam quo cupiditate asperiores praesentium 
                            necessitatibus odit optio nostrum repellat ratione. 
                            Veritatis harum corrupti id quisquam esse!
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
            <section class="bgbleu py-5">
                <div class="d-flex justify-content-center">
                    <p class="text-white col-sm-6 col-11">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Facere, voluptate, voluptates laboriosam magnam odio 
                        distinctio sunt, vitae necessitatibus ducimus fuga magni 
                        alias non explicabo tempora suscipit accusantium tempore 
                        dolor temporibus.
                    </p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="" class="blackbtn fs-5 text-white lien py-2 px-4">En savoir plus</a>
                </div>
            </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
