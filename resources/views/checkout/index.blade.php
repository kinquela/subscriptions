@extends('layouts.checkout')

@section('content')

<!--<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js" type="text/javascript"></script>-->
<!--<script src="https://secure.mlstatic.com/org-img/checkout/custom/1.0/checkout.js" type="text/javascript"></script>-->
<script src="{{ asset('js/vendor/mp/mercadopago.js') }}"></script>
<script src="{{ asset('js/vendor/mp/checkout.js') }}"></script>

<div class="content">
  <div class="wrap">
  <div class="sidebar">
    <div class="sidebar__content">
      <div class="order-summary order-summary--is-collapsed">
        <div class="order-summary__sections">
          <div class="order-summary__section order-summary__section--product-list">
            <div class="order-summary__section__content">
              <table class="product-table">
                <caption class="visually-hidden">Carrito de compras</caption>
                <thead>
                  <tr>
                    <th scope="col"><span class="visually-hidden">Imagen del producto</span></th>
                    <th scope="col"><span class="visually-hidden">Descripción</span></th>
                    <th scope="col"><span class="visually-hidden">Precio</span></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="product">
                    <td class="product__image">
                      <div class="product-thumbnail">
                        <div class="product-thumbnail__wrapper">
                          <img class="product-thumbnail__image" src="{{$subscription['image']}}">
                        </div>
                      </div>
                    </td>
                  <td class="product__description">
                    <span class="product__description__name order-summary__emphasis">{{$subscription['title']}}</span>
                    <span class="product__description__variant order-summary__small-text">{{$subscription['description']}}</span>
                  </td>
                  <td class="product__price">
                    <span class="order-summary__emphasis">{{$subscription['price']}}</span>
                  </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main" role="main">
    <div class="main__header">
      <a href="https://www.bevybar.com.ar" class="logo logo--left">
      <h1 class="logo__text visually-hidden">BevyBar</h1>
      <img alt="BevyBar" class="logo__image logo__image--medium" src="/img/bevybar_logo.png">
    </a>
  </div>
  <div class="main__content disable-map">
    <div class="step" data-step="contact_information">
      <form action="/checkout/success" method="get" id="tokenizerCardForm" name="tokenizerCardForm" class="edit_checkout animate-floating-labels">
        <input id='mercadopago_customer_id' type='hidden' name='mercadopago_customer_id'>
        <input id="customer_id" name="user_id" value="{{$user->id}}" type="hidden"/>
        <input id="customer_first_name" name="customer_first_name" value="{{$user->first_name}}" type="hidden" />
        <input id="customer_last_name" name="customer_last_name" value="{{$user->last_name}}" type="hidden" />
        <input id="customer_email" name="customer_email" value="{{$user->email}}" type="hidden" />
        <div class="step__sections">
        <div class="section section--contact-information">
          <div class="section__header">
            <div class="layout-flex layout-flex--tight-vertical layout-flex--loose-horizontal layout-flex--wrap">
              <h2 class="section__title layout-flex__item layout-flex__item--stretch">Información de cliente</h2>
            </div>
          </div>
          <div class="section__content">
            <div class="logged-in-customer-information">
              <div class="logged-in-customer-information__avatar-wrapper">
                <div class="logged-in-customer-information__avatar gravatar" style="background-image: url(https://cdn.shopify.com/s/assets/checkout_stable/default-gravatar-5ad673c45c717c5f83e82f5087d841e9cdf55e4b38458bb0b7272b8585dd6b4f.svg);filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='//proxy.shopifycdn.com/05cbdcf826c9004b5dcb20d9741a3ac6ffcd64888706b8daa017bcfdb0c3e3a2/www.gravatar.com/avatar/68710219a57667be514e5d9341010c4e.jpg?s=100&amp;d=blank', sizingMethod='scale')" role="img" aria-label="Avatar">
                </div>
              </div>
              <p class="logged-in-customer-information__paragraph">
                <span class="page-main__emphasis">{{$user->first_name}} {{$user->last_name}}</span>
                <span data-rtl-ensure="">({{$user->email}})‎</span>
                <br>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar la sesión</a>
              </p>
            </div>
          </div>
        </div>
        <div class="section section--shipping-address">
          <div class="section__header">
            <h2 class="section__title">
              Dirección de envío
              <p class="subtitle">Te recordamos que el correo pasa de lunes a viernes de 9 a 18hs. Te recomendamos elegir un domicilio en el que haya alguien para recibirlo.</p>
            </h2>
          </div>
          <div class="section__content">
            <div class="fieldset">
            <div class="row">
                <div class="small-12 large-8 columns">
                    <label class="field__label" for="calle">Calle
                        <input id="calle" name="calle" value="" type="text" placeholder="Nombre de la calle donde vives"/>
                    </label>
                </div>
                <div class="small-12 large-4 columns">
                  <label class="field__label" for="numero">Número
                    <input id="numero" name="numero" value="" type="text" placeholder="Número de tu vivienda"/>
                  </label>
                </div>
                <div class="small-12 large-6 columns">
                    <label class="field__label" for="piso">Piso
                        <input id="piso" name="piso" value="" type="text" placeholder="Piso en el que vives"/>
                    </label>
                </div>
                <div class="small-12 large-6 columns">
                    <label class="field__label" for="dpto">Departamento
                        <input id="dpto" name="dpto" value="" type="text" placeholder="Departamento en el que vives"/>
                    </label>
                </div>
                <div class="small-12 large-12 columns">
                    <label class="field__label" for="ciudad">Ciudad
                        <input id="ciudad" name="ciudad" value="" type="text" placeholder="Cidad en la que vives"/>
                    </label>
                </div>
                <div class="small-12 large-8 columns">
                    <label class="field__label" for="provincia">Provincia
                        <select id="provincia" name="provincia" class="field__input field__input--select" value="" placeholder="Selecciona tu provincia">
                            <option value="" disabled="">Provincia</option>
                            <option data-code="B" value="Buenos Aires">Buenos Aires</option>
                            <option data-code="K" value="Catamarca">Catamarca</option>
                            <option data-code="H" value="Chaco">Chaco</option>
                            <option data-code="U" value="Chubut">Chubut</option>
                            <option data-code="C" selected value="Ciudad Autónoma de Buenos Aires">Ciudad Autónoma de Buenos Aires</option>
                            <option data-code="X" value="Córdoba">Córdoba</option>
                            <option data-code="W" value="Corrientes">Corrientes</option>
                            <option data-code="E" value="Ente Ríos">Ente Ríos</option>
                            <option data-code="P" value="Formosa">Formosa</option>
                            <option data-code="Y" value="Jujuy">Jujuy</option>
                            <option data-code="L" value="La Pampa">La Pampa</option>
                            <option data-code="F" value="La Rioja">La Rioja</option>
                            <option data-code="M" value="Mendoza">Mendoza</option>
                            <option data-code="N" value="Misiones">Misiones</option>
                            <option data-code="Q" value="Neuquén">Neuquén</option>
                            <option data-code="R" value="Río Negro">Río Negro</option>
                            <option data-code="A" value="Salta">Salta</option>
                            <option data-code="J" value="San Juan">San Juan</option>
                            <option data-code="D" value="San Luis">San Luis</option>
                            <option data-code="Z" value="Santa Cruz">Santa Cruz</option>
                            <option data-code="S" value="Santa Fe">Santa Fe</option>
                            <option data-code="G" value="Santiago Del Estero">Santiago Del Estero</option>
                            <option data-code="V" value="Tierra Del Fuego">Tierra Del Fuego</option>
                            <option data-code="T" value="Tucumán">Tucumán</option>
                        </select>
                    </label>
                </div>
                <div class="small-12 large-4 columns">
                    <label class="field__label" for="cp">Código postal
                        <input id="cp" name="cp" value="" type="text" placeholder="1111"/>
                    </label>
                </div>
                <div class="small-12 large-12 columns">
                    <label class="field__label" for="telefono">Teléfono
                        <input id="telefono" name="telefono" value="" class="field__input" type="text" placeholder="Su número de teléfono"/>
                    </label>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="step__footer">
        <button name="button" type="submit" class="step__footer__continue-btn btn ">
          <span class="btn__content">Finalizar compra!</span>
          <i class="btn__spinner icon icon--button-spinner"></i>
        </button>
        <a class="step__footer__previous-link" href="https://www.bevybar.com.ar/cart">
          <svg class="icon-svg icon-svg--color-accent icon-svg--size-10 previous-link__icon rtl-flip" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
          <path d="M8 1L7 0 3 4 2 5l1 1 4 4 1-1-4-4"></path>
          </svg>
          <span class="step__footer__previous-link-content">Volver a las suscripciones</span>
        </a>
      </div>
    </form>
  </div>
  </div>
    <div class="main__footer" role="contentinfo">
      <div role="contentinfo" aria-label="Pie de página">
        <ul class="policy-list">
          <li class="policy-list__item">
            <a title="Política de devoluciones" data-modal="policy-18345731" data-close-text="Cerrar" href="https://www.bevybar.com.ar/11035152/policies/18345731.html">Política de devoluciones</a>
          </li>
          <li class="policy-list__item">
            <a title="Política de privacidad" data-modal="policy-18345795" data-close-text="Cerrar" href="https://www.bevybar.com.ar/11035152/policies/18345795.html">Política de privacidad</a>
          </li>
          <li class="policy-list__item">
            <a title="Condiciones de servicio" data-modal="policy-18345859" data-close-text="Cerrar" href="https://www.bevybar.com.ar/11035152/policies/18345859.html">Condiciones de servicio</a>
          </li>
        </ul>
      </div>
    </div>
</div>


<div class="reveal" id="wait-modal" data-reveal>
  <h1>Yendo a Mercadopago</h1>
  <p class="lead">Aca iria el loader, pero aca vamos a poner el callback de mercadopago.</p>
  <button class='button button-bevy' >Respuesta de mercadopago</button>
  <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">&times;</span>
  </button>
</div>

<!--
<div class="row text-right">
    <button onclick='checkout.processPayment()' class="button button-bevy large">Finalizar Compra!</button>
</div>
-->

<div class="reveal" id="wait-modal" data-reveal>
    <h1>Yendo a Mercadopago</h1>
    <p class="lead">Aca iria el loader, pero aca vamos a poner el callback de mercadopago.</p>
    <button class='button button-bevy' >Respuesta de mercadopago</button>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endsection
