@extends('layout')

@section('content')
    




<section class="Bcontact">
  <div class="container">
    <div class="row text-light">
      <div class="col col-lg-6 col-md-12 col-sm-12">
        <h2>Contact</h2>
        <h3>Formulaire</h3>
        <form action="https://httpbin.org/post" method="post">
          <div class="row mb-3">
            <div class="col col-lg-6 col-md-12 col-sm-12">
              <label for="name">Nom :</label><br />
              <input
                class="bg-dark text-light"
                type="text"
                id="name"
                name="user_name"
                required
              />
            </div>
            <div class="col col-lg-6 col-md-12 col-sm-12">
              <label for="mail">E-mail :</label><br />
              <input
                class="bg-dark text-light"
                type="email"
                id="mail"
                name="user_mail"
                required
              />
            </div>
          </div>
          <div class="row mb-3">
            <div class="col col-lg-12 col-md-12 col-sm-12">
              <label for="object">Catégorie :</label><br />
              <select
                class="bg-dark text-light"
                id="obj"
                name="user_object"
              >
                <option value="mariage">Mariage</option>
                <option value="bapteme">Baptème</option>
                <option value="scolaire">Scolaire</option>
                <option value="paysage">Paysage</option>
                <option value="culinaire">Culinaire</option>
                <option value="autres"
                  >Autres (Préciser dans le message)</option
                >
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col col-lg-12 col-md-12 col-sm-12 mb-3">
              <label for="msg">Message :</label><br />
              <textarea
                class="bg-dark text-light"
                id="msg"
                name="user_message"
                required
              ></textarea>
            </div>
            <div class="row mb-5">
              <div class="col col-lg-2 col-md-6 col-sm-12 text-start">
                <button class="btn btn-success" type="submit">Envoi</button>
              </div>
              <div class="col col-lg-2 col-md-6 col-sm-12 text-end">
                <button class="btn btn-danger" type="reset">Effacer</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@stop