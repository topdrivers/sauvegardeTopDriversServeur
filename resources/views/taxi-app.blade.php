@extends('user.layout.app')

<meta name="keywords" content="taxi application, taxi réservation, taxi téléphone, taxi android, taxi iOs">
<meta name="description" content="En plus de nous contacter par téléphone au 03 88 44 00 44 pour votre réservation vous avez la possibilité 
de réserver via notre application mobile compatible android et iOs.">

@section('content')
<div class="row gray-section no-margin">
    <div class="container">
        <div class="content-block">
            <h2>{{ $title }}</h2>
            <div class="title-divider"></div>
            <p> En plus de nous contacter par téléphone au 03 88 44 00 44 pour votre réservation vous avez la possibilité 
			de réserver via notre application mobile compatible android et iOs. Top Drivers est une application qui vous facilitera
			la réservation de votre taxi en imédiat ou différé, en paiement par CB ou espèce, avec le choix d'une berline ou 
			d'un van. L'application est très simple d'utilisation, ergonomique et fiable.
			Vous pourrez consulter l'estimation du tarif avant de lancer votre réservation. 
			Nous mettons régulièrememnt des coupons de réduction.
			L'application offre la possibilité de visualiser son taxi en temps réél sur son smartphone, et d'obtenir des 
			notifications lorsque le taxi est à votre hauteur ou lors de l'émission de la facture. 
			Une facture détaillée vous ai remis automatiquement sur votre boite e-mail. </p>
        </div>
    </div>
</div>
@endsection