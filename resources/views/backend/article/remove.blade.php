@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{ URL::full() }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading ">
                            <strong>Suppression de l'article</strong>
                        </div>
                        <div class="panel-body">
                            <p>Etes-vous sûr de vouloir supprimer définitivement cet article ?</p>
                            <div style="margin-top:30px;">
                                <button class="btn btn-danger"><i class="fa fa-trash-o"></i>&nbsp;Supprimer définitivement</button>
                                <a href="{{ route('backend.home') }}" class="btn btn-default"><i class="fa fa-reply"></i>&nbsp;Retour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection