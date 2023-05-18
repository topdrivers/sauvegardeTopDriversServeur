@extends('user.layout.app')

@section('content')
<div class="banner row no-margin" alt = "taxi" style="background-image: url('{{ asset('asset/img/taxi.jpg') }}');">
    <div class="banner-overlay"></div>
    <div class="container">
        <div class="col-md-8">
            <h2 class="banner-head"><span class="strong">Le metier qui vous met en valeur</span><br>Gérer votre temps, Conduisez quand vous voulez </h2>
        </div>
        <div class="col-md-4">
            <div class="banner-form">
                <div class="row no-margin fields">
                    <div class="left">
                        <img src="{{asset('asset/img/icon-application-chauffeur.png')}}" alt="icon application chauffeur">
                    </div>
                    <div class="right">
                        <a href="{{url('provider/register')}}">
                            <h3>S'inscrire pour conduire</h3>
                            <h5>Inscription <i class="fa fa-chevron-right"></i></h5>
                        </a>
                    </div>
                </div>

                <div class="row no-margin fields">
                    <div class="left">
                        <img src="{{asset('asset/img/icon-application-chauffeur.png')}}" alt="icon application chauffeur">
                    </div>
                    <div class="right">
                        <a href="{{url('provider/login')}}">
                            <h3>Se connecter pour conduire</h3>
                            <h5>Se connecter <i class="fa fa-chevron-right"></i></h5>
                        </a>
                    </div>
                </div>

                <p class="note-or">Ou <a href="{{ url('login') }}">Se connecter</a> avec votre compte professionnel</p>
            </div>
        </div>
    </div>
</div>

<div class="row white-section no-margin">
    <div class="container">
        
        <div class="col-md-4 content-block small">
            <h2>Gérer votre propre planning</h2>
            <div class="title-divider"></div>
            <p>Vous pouvez conduire avec {{ Setting::get('site_title', 'Tranxit') }} n'iporte quand, jour ou nuit, 365 par an. Il suffit de vous connecter à notre application pour recevoir vos courses.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Faites davantage de chiffres</h2>
            <div class="title-divider"></div>
            <p>Les tarifs de courses commencent avec un montant de base, puis augmentent avec le temps et la distance. Et lorsque la demande est supérieure à la normale, les conducteurs en font plus.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Laissez l'application ouvrir la voie</h2>
            <div class="title-divider"></div>
            <p>Il suffit de toucher l'application et d'aller. Vous obtiendrez des instructions détaillées, des outils pour vous aider à en faire plus et une assistance 24h / 24 et 7j / 7, tous disponibles dans l'application.</p>
        </div>

    </div>
</div>

<div class="row gray-section no-margin full-section">
    <div class="container">                
        <div class="col-md-6 content-block">
            <h3>A propos de l'application</h3>
            <h2>Conçu spécialement pour les Taxis</h2>
            <div class="title-divider"></div>
            <p>Lorsque vous voulez gagner de l'argent, il suffit d'ouvrir l'application et vous commencerez à recevoir des requêtes de clients sur votre mobile. Vous obtiendrez des informations sur votre client et des indications sur son emplacement et sa destination. Lorsque le voyage est terminé, vous recevrez une autre demande à proximité. Et si vous êtes prêt à quitter la route, vous pouvez vous déconnecter à tout moment.</p>
            <a class="content-more-btn" href="#">VOIR COMMENT CA MARCHE <i class="fa fa-chevron-right"></i></a>
        </div>
        <div class="col-md-6 full-img text-center" style="background-image: url({{ asset('asset/img/application-chauffeur.jpg') }});" alt="application pour chauffeur"> 
            <!-- <img src="img/anywhere.png"> -->
        </div>
    </div>
</div>

<div class="row white-section no-margin">
    <div class="container">
        
        <div class="col-md-4 content-block small">
            <h2>Récompenses</h2>
            <div class="title-divider"></div>
            <p>Vous êtes dans le siège du conducteur. Alors récompensez-vous avec des réductions sur le carburant, l'entretien des véhicules, les factures de téléphone cellulaire, et plus encore. Réduisez vos dépenses quotidiennes et rapportez de l'argent supplémentaire.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Exigences</h2>
            <div class="title-divider"></div>
            <p>Sachez que vous êtes prêt à prendre la route. Que vous conduisiez votre propre voiture ou un véhicule sous licence, vous devez satisfaire aux exigences minimales et effectuer un contrôle de sécurité en ligne.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Sécurité</h2>
            <div class="title-divider"></div>
            <p>Lorsque vous conduisez avec {{ Setting::get('site_title', 'Tranxit') }}, vous bénéficiez d'une assistance 24h / 24, 7j / 7 et d'une assurance. Et tous les clients sont vérifiés avec leurs informations personnelles et leur numéro de téléphone, ainsi vous saurez qui vous ramasser et nous aussi.</p>
        </div>

    </div>
</div>
            
<div class="row find-city no-margin">
    <div class="container">
        <h2>Commencer à gagner de l'argent</h2>
        <p>Prêt à gagner de l'argent ? La première étape consiste à vous inscrire en ligne.</p>

        <button type="submit" class="full-primary-btn drive-btn">Conduisez maintenant</button>
    </div>
</div>

<div class="footer-city row no-margin" style="background-image: url({{ asset('asset/img/footer-city.png') }});"></div>
@endsection