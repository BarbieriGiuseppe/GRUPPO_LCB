@extends('medico.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica il tuo indirizzo mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nuovo link di verifica è stato inviato al tuo indirizzo email') }}
                        </div>
                    @endif

                    {{ __('Prima di procedere, controlla la tua mail per il link di verifica') }}
                    {{ __('Non hai ricevuto la mail?') }},
                    <form class="d-inline" method="POST" action="{{ route('medico.verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Richiedine un altra ') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
