@extends('layouts.master',['title'=>'Contact'])
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

        <h2 class="text-center">Entrer en contact </h2>
        <p class="text-muted text-center">
          si vous rencontrez des problèmes avec ce service, veuillez <a href="https://loss.sangare24@gmail.com">demander de l'aide </a>.
        </p>

        <form class="" action="#" method="post">
          <div class="form-group">
            <label for="nom" class="control-label">Nom</label>
            <input type="text" name="nom" class="form-control" required="required">
          </div>

          <div class="form-group">
            <label for="email" class="control-label">E-mail</label>
            <input type="text" name="email" class="form-control"required="required">
          </div>

          <div class="form-group">
            <label for="message" class="control-label sr-only">message</label>
            <textarea name="message" class="form-control" rows="8"cols="10"placeholder="entrez votre message" required="required"></textarea>
          </div>

            <div class="form-group">
              <button class="btn btn-primary btn-block">soumettre une demande &raquo;</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection
