@extends('layouts.simple')

@section('content')

<div class="content-for-layout" style="padding-top: 0;">
    <div class="customer-content-wrapper">
        <!-- Customer Login -->
        <section class="customer-login" data-register-swap>
            <h2>Clientes registrados</h2>
                <ul class="recover-password-notice">
                  <li class="reset-success success">Ya te enviamos un mail con las instrucciones para resetear tu contraseña</li>
                </ul>
            <form method="post" role="form" method="POST" action="{{ route('login') }}" id="customer_login" class="js-signup-form" accept-charset="UTF-8" ><input type="hidden" value="customer_login" />
            {{ csrf_field() }}
              <input id="email" type="email" class="form-control" placeholder="E-Mail" name="email" value="{{ old('email') }}" required autofocus>
              <input id="password" type="password" class="form-control" placeholder="Contraseña" name="password" required>
              <input type="submit" value="Ingresar" />
              <a href="{{ route('password.request') }}" class="show-forgot-password" onclick="return false;">¿Olvidaste tu contraseña?</a>
            </form>
        </section>
        <!-- End Customer Login -->
        <section class="register" data-register-swap>
            <h2>Nuevos clientes</h2>
            <div class="cover">
                <p>Registrate y comprá en forma rápida y segura</p>
                <div class="button-main" data-register-show>Registrarme</div>
            </div>
            <form class="form-horizontal" role="form" id="create_customer" method="POST" class="js-signup-form" accept-charset="UTF-8" action="{{ route('register') }}">
            {{ csrf_field() }}
                <input type="hidden" value="create_customer" name="form_type" />
                <input type="hidden" name="utf8" value="✓" />
                <!-- Errors are handled within customers/register.liquid -->
                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('email') }}" required autofocus placeholder="Nombre">
                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus placeholder="Apellido">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail">
                <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">
                <div class="checkbox-containers">
                    <div class="checkbox-container">
                        <input type="checkbox" name="customer[accepts_marketing]" checked="checked" value="true" id="accepts_marketing" />
                        <label for="accepts_marketing" style="font-weight:normal">Quiero recibir el boletín.</label>
                    </div>
                    <div class="checkbox-container">
                        <input class="js-terms-input" type="checkbox" name="customer[accepts_terms]" id="accepts_terms" />
                        <label for="accepts_terms" style="font-weight:normal">
                            Acepto los <a href=/pages/terminos-y-condiciones target='_blank'>Términos y Condiciones</a> de BevyBar, de su <a href=/pages/programa-vip target='_blank'>Programa VIP</a> y su <a href=/pages/privacy-policy target='_blank'>Política de Privacidad</a>.
                        </label>
                    </div>
                </div>
                <input type="submit" value="Crear" />
            </form>
        </section>
    </div>
    <div class="clear"></div>
</div>
@endsection
