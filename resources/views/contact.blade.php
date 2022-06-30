<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
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
<body>
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
        <div class="container mt-5">
            <h3 class="bleu">Actualités</h3>
            <p class="text-muted">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur at est sit nobis. Impedit voluptate quam enim obcaecati aut praesentium est provident, quos eaque minus id accusantium rem magni neque?
            </p>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('Message envoyé avec succes')}}
                </div>
            @endif
            <form class="col-12 col-sm-8" method="post" action="{{ route('contact.store') }}">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control mb-3" name="email" id="email">
                </div>
                <div class="form-group">
                    <label>Sujet</label>
                    <input type="text" class="form-control mb-3" name="sujet" id="sujet">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control mb-3" name="message" id="message" rows="4"></textarea>
                </div>
                
                <p class="text-muted"><input type="checkbox" name="" id="">    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur eos quis, aliquid dolorem magni maxime fuga repellendus molestias! Adipisci facilis quibusdam voluptatum veritatis rerum modi officiis magnam debitis natus iste.</p>
                <input type="submit" name="send" value="Envoyer" class="bgbleu fs-5 text-white lien py-1 px-4 border-0 my-3">
            </form>
            <p class="py-5 text-muted">
                Conformément à l’article 13 du Règlement 2016/679 du 27/04/16 relatif à la protection des personnes physiques à l'égard du traitement des données à caractère personnel et à la libre circulation de ces données, le responsable de traitement est le Service d'Information du Gouvernement, le Délégué à la Protection des données peut être contacté via la page Contacter le DPD.
                Les informations recueillies sur ce formulaire sont enregistrées dans un fichier informatisé servant à la prise de contact avec le Service d'Information du Gouvernement.
                <br class="mt-3">Les données collectées sont l’adresse e-mail, le nom et le prénom. Elles sont conservées pendant 1 mois et sont destinées uniquement au Service d'Information du Gouvernement.
                <br class="mb-3">
                Voici nos coordonnées :
                <br class="mb-3">
                xxxxxx@xx.xx.fr
                <br class="mb-3">ou
                <br class="mb-3">Service d'Information du Gouvernement
                <br>20 avenue de xxxx xxxx xxx
                <br>Adresse postale : 
            </p>
        </div>
    </main>
</body>
</html>