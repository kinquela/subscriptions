@extends('layouts.app')

@section('content')

<div>
    @if($customer->customer_subscriptions)
      <div class='row'>
          <h4>Estas suscripto a los siguientes planes</h4>
      </div>
      @foreach($customer->customer_subscriptions as $customerSubscription)
      <div class='row'>
          <div class='columns large-2'><b>${{number_format($customerSubscription['subscription']['price'],2)}}</b></div>
          <div class='columns large-3'>{{$customerSubscription['subscription']['title']}}</div>
          <div class='columns large-3'>{{$customerSubscription['subscription']['description']}}</div>
          <div class='columns large-3'><img src='{{$customerSubscription['subscription']['image']}}'/></div>
          <div class='columns large-1'><a href='/customer/subscription/{{$customerSubscription['id']}}'>Cancelar</a></div>
      </div>
      @endforeach
    @else
      Todavia no hay ninguna suscripcion activa, si queres elegi la tuya <a href='/'>ACA</a>
    @endif
</div>

@endsection
