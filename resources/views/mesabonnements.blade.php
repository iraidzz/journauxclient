@extends('layouts.template')
@section('content')
    <style>
        hr {
            height: 4px;
            margin-bottom:-3px;
        }
        .hr-primary{
            background-image: -webkit-linear-gradient(left, rgba(0,0,0,.6), rgba(246, 205, 85,.6), rgba(52,54,86,100));
        }

        .hr-input{
            background-image: -webkit-linear-gradient(left, rgba(0,0,0,0.3), rgba(255, 190, 0,.5), rgba(0,0,0,0.3));
        }
        .text-jaunefonce {
            color: #000000;
        }
    </style>

    @foreach($publications as $article)
        <!-- Portfolio Grid Section -->
        <div class="container" >
            <div class="row" >
                <hr class="hr-primary" style="margin-top: 0px;" />
                <div class="col-lg-12 text-center">
                    {{--<div class="row" style="background-color: rgba(255,0,0,0.25)">--}}
                    <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
                        <div class="form-group col-xs-5">
                            <a href="#portfolioModal{{$article['id']}}" class="portfolio-link" data-toggle="modal"><BR>
                                <img width="80px" height="80px" src="{{$article['photo_couverture']}}" class="img-responsive img-centered" alt="">
                            </a>
                        </div>
                        <div class="form-group col-xs-7">
                            <BR><label>Nom</label>
                            <input type="text" class="hr-input text-jaunefonce" style="text-align: center; -webkit-border-radius: 7px;-moz-border-radius: 7px;border-radius: 7px;" disabled value="{{$article['titre']}}">
                            <label>Fin abonnement</label><br>
                            <input type="text" class="hr-input text-jaunefonce" style="text-align: center; -webkit-border-radius: 7px;-moz-border-radius: 7px;border-radius: 7px;" disabled value="10/12/2017">
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <a href="#portfolioModal{{$article['id']}}" class="btn btn-primary" data-toggle="modal">
                            <i> Détail</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="portfolio-modal modal fade" id="portfolioModal{{$article['id']}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>{{$article['titre']}}</h2>
                                    <img width="210px" height="100px" class="img-responsive img-centered" src="{{$article['photo_couverture']}}" alt="">
                                    <p class="text-muted">
                                        {{$article['description']}}
                                    </p>
                                    <p>
                                        {{$article['nombre_numero']}} magazines par an <br>
                                        {{$article['prix_annuel']}}€ par an <br>
                                    </p>

                                    <a href="" class="btn btn-primary">
                                        <i class="glyphicon glyphicon-heart"> Renouveler abonnement <br>(1 année)</i>
                                    </a><br><br>
                                    <a href="" class="btn btn-danger">
                                        <i class="glyphicon glyphicon-ban-circle"> Suspendre abonnement</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection