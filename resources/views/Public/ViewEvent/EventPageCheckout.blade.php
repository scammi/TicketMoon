@extends('Public.ViewEvent.Layouts.EventPage')

@section('head')

@stop

@section('content')
    @include('Public.ViewEvent.Partials.EventHeaderSection')
    <h1><?php echo $preference_id ?></h1>
    @include('Public.ViewEvent.Partials.EventCreateOrderSection')
    <script>var OrderExpires = {{strtotime($expires)}};</script>
    <script>
        const mp = new MercadoPago('TEST-8fc21640-da5b-4459-9148-9372b86755b3', {
            locale: 'es-AR'
        });

        mp.checkout({
            preference: {
            id: '<?php echo $preference_id ?>'
            },
            render: {
            container: '.cho-container',
            label: 'Pagar',
            }
        });
    </script>
    @include('Public.ViewEvent.Partials.EventFooterSection')
@stop

