@extends('layouts.app')

@section('content')
    <body class="body2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <h2>Contactez-nous</h2>
                    <p class="text-muted">Contactez-nous pour d'avantages d'informations !</p>

                    <form action="/Contact" method="POST" novalidate>
                    {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}" >
                            <label for="name" class="control-label">Nom</label>
                            <input type="text" name="name" id="name" class="form-control" required="required">
                            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required="required">
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                            <label for="message" class="control-label sr-only">Message</label>
                            <textarea class="form-control" rows="10" cols="10" required="required" name="message" id="message"></textarea>
                            {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block" >Envoyer &raquo;</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
@endsection

        
    