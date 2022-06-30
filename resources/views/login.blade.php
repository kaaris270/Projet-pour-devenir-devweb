<!DOCTYPE html>
<html lang="en">
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
                </div>
            </div>
        </div>
    </nav>
    <hr class="mx-5 bleu shadow">
</header>
<body>
    <main class="">
        <div class="container">
            <h3 class="bleu">Connectez-vous</h3>
            <p class="text-muted">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Pariatur at est sit nobis. Impedit voluptate quam enim 
                obcaecati aut praesentium est provident, quos eaque minus 
                id accusantium rem magni neque?
            </p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="{{ route("login") }}" method="POST" class="col-5 mb-4 mt-5">
                @csrf
                <label class="form-label text-muted mt-4" for="mail">Adresse email</label>
                <input type="email" name="email" id="mail" placeholder="" class="form-control">
                <label class="form-label text-muted mt-4" for="mdp">Mot de passe</label>
                <input type="password" name="password" id="mdp" placeholder="" class="form-control mb-4">
                <a class="d-flex justify-content-center" href="{{ route('inscription') }}">Inscrivez vous si vous n’avez pas de compte</a>
                    <div class="d-flex justify-content-center">
                        <input type="submit" name="Login" value="Connexion" class="bgbleu fs-5 text-white lien py-1 px-4 border-0 my-3">
                    </div>
                </form>
        </div>
    </main>
    <footer>
        <hr class="mx-5 bleu shadow">
        <div class="d-flex justify-content-center flex-nowrap py-4">
            <a href="" class="lien text-muted mx-4">Politique de confidentialité</a>
            <a href="" class="lien text-muted mx-4">Cookies</a>
            <a href="{{url('contact')}}" class="lien text-muted mx-4">Contact</a>
            <a href="" class="lien text-muted mx-4">Condition d’utilisation</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>