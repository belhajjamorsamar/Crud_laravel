@extends('Produits.tamplate')
@section('content')

<div class="row">
          <!-- Column -->
          <div class="col-lg-12 col-md-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title m-b-40 mt-3 align-self-center">Ajouter un nouveau produit</h5>
                <div class="row">
                 
                  <!-- End of product slider -->
                  <div class="col-lg-8 col-md-8">
                    <div class="row">
                      <div class="form-wrap form-wrap2 mt-4">
                        <form class="form-horizontal">
                          <div class="col-sm-12 col-xs-12">
                            <div class="form-group m-b-15">
                              <label class="control-label text-primary font-12 m-b-5">Nom du produit </label>
                              <div>
                                <input type="email" class="form-control font-14"  placeholder="Nom :">
                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="form-group m-b-15">
                            <div class="row m-0 m-b-20">
                              <div class="col-sm-6 col-xs-12">
                                <label class="control-label font-14 m-b-5">Selectionner la Categorie</label>
                                <div>
                                  <select class="custom-select font-14 m-b-5" data-style="btn-default btn-outline">
                                    <option  data-tokens="Category">Selectionner la Categorie </option>
                                    <option data-tokens="Category 1">womean accesoires</option>
                                    <option data-tokens="Category 2">fourniture</option>
                                    <option data-tokens="Category 3">Fashion</option>*
                                    <option data-tokens="Category 3">autres</option>
                                  </select>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="form-group m-b-15">
                            <div class="row m-0 m-b-20">
                              <div class="col-md-3 col-xs-12">
                                <label class="control-label font-14 m-b-5">Prix ​​unitaire</label>
                                <div>
                                  <input type="text" class="form-control font-14 m-b-5"  placeholder="Prix ​​unitaire">
                                </div>
                              </div>
                              <div class="col-md-6 col-xs-12 m-b-5">
                                <label class="control-label font-14 m-b-5 ">Devise</label>
                                <div >
                                  <select class="custom-select" data-style="btn-default btn-outline">
                                    <option  data-tokens="Category">Devise</option>
                                    <option data-tokens="Category 4">Dinar</option>
                                    <option data-tokens="Category 5">EURO</option>
                                    <option data-tokens="Category 6">Bitcoin</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-3 col-xs-12">
                                <label class="control-label m-b-5">Quantité</label>
                                <div>
                                  <input type="text" class="form-control font-14 m-b-5"  placeholder="Quantité">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                         
                          <div class="form-group row m-b-15">
                            <div class="col-sm-12">
                              <label class="col-12 p-t-0 m-b-5">Description</label>
                              <div class="col-12">
                                <textarea class="form-control textarea-lg"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row m-l-0 m-b-10">
                            <div class="col-md-6 col-xs-12 m-b-10">
                              <div class="p-l-15 p-r-15">
                                <input type="checkbox" checked class="js-switch" data-color="#4886ff" data-size="small">
                                <label class="m-l-10"> Disponible</label>
                              </div>
                            </div>
                            <div class="col-md-6  col-xs-12 text-right">
                              <div class="p-l-15 p-r-15">
                                <button type="button" class="btn waves-effect waves-light btn-rounded btn-success">Enregistrer</button>
                                <button type="button" class="btn btn-rounded waves-effect waves-light btn-outline-default">
Annuler</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection