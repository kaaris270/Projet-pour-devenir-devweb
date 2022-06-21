<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
{{-- 
        @foreach ($posts as $post)
			<tr>
				<td>
					<!-- Lien pour afficher un Post : "posts.show" -->
					<a href="{{ route('posts.show', $post) }}" title="Lire l'article" >{{ $post->title }}</a>
				</td>
				<td>
					<!-- Lien pour modifier un Post : "posts.edit" -->
					<a href="{{ route('posts.edit', $post) }}" title="Modifier l'article" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un Post : "posts.destroy" -->
					<form method="POST" action="{{ route('posts.destroy', $post) }}" >
						<!-- CSRF token -->
						@csrf
						<!-- <input type="hidden" name="_method" value="DELETE"> -->
						@method("DELETE")
						<input type="submit" value="x Supprimer" >
					</form>
				</td>
			</tr>
			@endforeach --}}


        
        <div class="container">
            @foreach($temoignages as $temoignage)
            <div class="row my-5 border">
                <div class="col-sm-10">
                    {{-- @while ($temoignage->users_id = user()->get()->id) --}}
                    <p class="fw-bold fs-4">{{
                        $temoignage->users_id)
                        // User::find($temoignage->users_id)->nom
                    }}</p>
                    {{-- @endwhile --}}
                    <img src="https://www.handiclubnimois.fr/wp-content/uploads/2020/10/blank-profile-picture-973460_1280.png" class="pb-4" alt="" width="80px">
                </div>
                <div class="col-sm-12">
                    <p>{{$temoignage->text}}</p>
                </div>
                @if (Route::has('login'))
                
                    @auth
                    @if ($temoignage->users_id === Auth::user()->id )
                        <input type="button" value="">
                        <input type="button" value="">
                    @endif
                    @if (Auth::user()->email == "admin@admin.com")
                        <input type="button" value="">
                        <input type="button" value="">
                    @endif
                    @endauth
                @endif
            </div>
            @endforeach
            @if (Route::has('login'))
            <form action="{{ route("temoignage") }}" method="POST" class="mb-3">
                @csrf
                <label for="exampleFormControlTextarea1" class="form-label">Ajoutez une reponse</label>
                <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
                <input class="" type="submit" name="creer">
            </form>
            @endif
        </div>


            {{-- <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" >
                <!-- Le token CSRF -->
                @csrf
                <p>
                    <label for="title" >Titre</label><br/>
                    <input type="text" name="title" value="{{ old('title') }}"  id="title" placeholder="Le titre du post" >
                    <!-- Le message d'erreur pour "title" -->
                    @error("title")
                    <div>{{ $message }}</div>
                    @enderror
                </p>
                <p>
                    <label for="content" >Contenu</label><br/>
                    <textarea name="content" id="content" lang="fr" rows="10" cols="50" placeholder="Le contenu du post" >{{ old('content') }}</textarea>
                    <!-- Le message d'erreur pour "content" -->
                    @error("content")
                    <div>{{ $message }}</div>
                    @enderror
                </p>
                <input type="submit" name="valider" value="Valider" >
            </form>
        </div> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
