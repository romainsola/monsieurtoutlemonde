@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading separator">
                    <div class="panel-title">Informations sur le blog</div>
                </div>
                <div class="panel-body">
                    <h3>{{ $blog->nom }}</h3>
                    <i>Créée le {{ $blog->created_at->format('d/m/Y')  }}</i>
                </div>
            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading separator">
                    <div class="panel-title">Derniers articles publiés</div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-condensed" id="condensedTable">
                            <thead>
                            <tr>
                                <th style="width:30%">Titre de l'article</th>
                                <th style="width:30%">Thème</th>
                                <th style="width:40%">Publiée</th>
                                <th style="width:40%">Date de création</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $articles as $article )
                                <tr>
                                    <td class="semi-bold">{{ $article->title }}</h5></td>
                                    <td>
                                        <label class="category" style="background-color: {{ $article->theme->color }}">{{  $article->theme->name }}</label>
                                    </td>
                                    @if( $article->active == 'O' )
                                        <td><i class="fa fa-check text-success"></i></td>
                                    @else
                                        <td><i class="fa fa-times text-danger"></i></td>
                                    @endif
                                    <td class="semi-bold">{{ $article->created_at->format('d/m/Y') }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection