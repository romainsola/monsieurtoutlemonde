@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{ route('article.new') }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading ">
                            <strong>Création de l'article</strong>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="title">Titre de l'article</label>
                                        <input type="text" class="form-control" id="title" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="theme">Thèmes</label>
                                        <select class="form-control" name="theme" id="theme">
                                            @foreach($themes as $theme)
                                                <option value="{{ $theme->id }}">{{ $theme->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="theme">Publication</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="active" id="active1" value="O" checked>
                                                Oui
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="active" id="active2" value="N">
                                                Non
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="editor1">Contenu</label>
                                        <textarea id="editor1" name="content"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-success"><i class="fa fa-floppy-o"></i>&nbsp;Enregistrer l'article</button>
                    <a href="{{ route('backend.home') }}" class="btn btn-danger pull-right"><i class="fa fa-reply"></i>&nbsp;Retour</a>
                    <div class="panel panel-default" style="margin-top: 20px;">
                        <div class="panel-body">
                            Informations
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('styles')
    <script src="https://cdn.ckeditor.com/4.6.1/standard-all/ckeditor.js"></script>
@endpush

@push('scripts')
    <script src="{{ asset('js/ckeditor_article.js') }}"></script>
@endpush