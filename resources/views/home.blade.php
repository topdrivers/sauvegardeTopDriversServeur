@extends('user.layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tableau de bord </div>

                <div class="panel-body">
                    Vous êtes connecté ! <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                <span class="s-icon"><i class="ti-palette"></i></span>
                                <span class="s-text">Déconnexion</span>
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection