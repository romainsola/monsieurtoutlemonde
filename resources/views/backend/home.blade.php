@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach($articles as $article)
                    <div class="panel panel-default">
                        <div class="panel-heading ">
                            <div class="row">
                                <div class="col-md-9 col-sm-8">
                                    <span class="label label-{{ $article->theme->color }}">{{ $article->theme->name }}</span>&nbsp;
                                    <b>{{ $article->title }}</b><br />
                                    <small>Créée le {{ $article->created_at->format('d/m/Y') }}</small>
                                    <br />
                                    @if($article->active == 'O')
                                        <small><i class="fa fa-check text-success"></i>&nbsp;En ligne</small>
                                    @else
                                        <small><i class="fa fa-times text-danger"></i>&nbsp;Non publiée</small>
                                    @endif
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="pull-right">
                                        <a href="{{ route('article.edit', $article) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                        <a href="{{ route('article.remove', $article) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                           {{ $article->content }}
                        </div>
                    </div>
                @endforeach

                    {{ $articles->links() }}

            </div>
            <div class="col-md-4">
                <a href="{{ route('article.new') }}" class="btn btn-warning pull-left"><i class="fa fa-pencil-square-o"></i>&nbsp;Ecrire un nouvel article</a>
                <a href="{{ route('article.new') }}" class="btn btn-default pull-right"><i class="fa fa-cogs"></i>&nbsp;Mes Paramètres</a>

                <div class="panel panel-default" style="margin-top: 50px;">
                    <div class="panel-heading">Informations sur mon blog</div>
                    <div class="panel-body">
                        Contenu
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection