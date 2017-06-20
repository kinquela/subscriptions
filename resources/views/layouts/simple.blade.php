<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/favicon.ico?17693065493374194414" type="image/x-icon" />
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/favicon.ico?17693065493374194414">
    <link rel="apple-touch-icon" sizes="57x57" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-57x57.png?17693065493374194414">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-57x57.png?17693065493374194414">
    <link rel="apple-touch-icon" sizes="72x72" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-72x72.png?17693065493374194414">
    <link rel="apple-touch-icon" sizes="114x114" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-114x114.png?17693065493374194414">
    <link rel="apple-touch-icon" sizes="120x120" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-120x120.png?17693065493374194414">
    <link rel="apple-touch-icon" sizes="144x144" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-114x114.png?17693065493374194414">
    <link rel="apple-touch-icon" sizes="152x152" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-152x152?17693065493374194414">
    <meta name="application-name" content="BevyBar">
    <meta name="msapplication-TileImage" content="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-140x140.png?17693065493374194414">
    <meta name="msapplication-TileColor" content="#1B2D38">
    <!-- Styles -->
    <link href="{{ asset('css/foundation.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css?asd') }}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
        ]) !!}
        ;
    </script>
</head>

<body>
    <header class="header">
<div class="flex-grow-1"></div>
<div class="flex-grow-1">
    <svg width="1130px" height="345px" viewBox="0 0 1130 345" version="1.1" xmlns="http://www.w3.org/2000/svg" class="logo-brand" xmlns:xlink="http://www.w3.org/1999/xlink">
        <!-- Generator: Sketch 3.8.3 (29802) - http://www.bohemiancoding.com/sketch -->
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Artboard">
                <g id="bevy_logo_no_tag" transform="translate(53.000000, 16.000000)">
                    <g id="Group">
                        <g transform="translate(606.000000, 0.000000)" id="Shape" fill="#FFFFFF">
                            <path d="M73.8,82.8 C57.6,82.8 43.5,89.4 36.9,96.1 L36.9,19 C36.9,9 29,0.8 18.7,0.8 C8.7,0.8 0.5,8.7 0.5,19 L0.5,177.4 C0.5,222.2 29.5,244.6 70.2,244.6 C115.8,244.6 142.4,218.5 142.4,163.7 C142.4,108.9 116.1,82.8 73.8,82.8 L73.8,82.8 Z M70,213.9 C50.5,213.9 36.8,200.6 36.8,177.4 L36.8,130.9 C36.8,130.9 50.1,113.9 70,113.9 C92.8,113.9 106.1,130.9 106.1,164.1 C106.1,196.8 93.3,213.9 70,213.9 L70,213.9 Z"></path>
                            <path d="M229.3,82.8 C200.3,82.8 183.7,94 174.1,104.4 C171.2,107.7 169.5,111.9 169.5,115.6 C169.5,124.3 176.6,131.4 185.3,131.4 C189.4,131.4 191.9,130.6 195.3,128.1 C203.6,121.9 214,115.2 228.9,115.2 C248.4,115.2 259.6,125.2 259.6,140.5 L259.6,146.7 L215.6,146.7 C186.2,146.7 160.9,162.9 160.9,194 C160.9,224.3 182.9,245 215.6,245 C235.9,245 250.4,240 259.6,225.5 C259.6,235.5 267.5,243.3 277.4,243.3 C287.3,243.3 295.2,235.4 295.2,225.5 L295.2,139.2 C296.1,103.5 271.2,82.8 229.3,82.8 L229.3,82.8 Z M260,184 C260,202.7 243.4,214.3 225.6,214.3 C206.9,214.3 197.8,206.4 197.8,193.6 C197.8,181.6 205.7,174.5 220.6,174.5 L260,174.5 L260,184 L260,184 Z"></path>
                            <path d="M400.6,83.2 C386.5,83.2 370.7,91.5 364.1,104.8 L364.1,103.1 C364.1,93.1 356.2,84.9 345.9,84.9 C335.9,84.9 327.7,92.8 327.7,103.1 L327.7,225 C327.7,235 335.6,243.2 345.9,243.2 C355.9,243.2 364.1,235.3 364.1,225 L364.1,155 C364.1,132.6 377.4,117.7 400.6,117.7 C410.1,117.7 417.6,109.8 417.6,100.7 C417.6,91.6 410.1,83.2 400.6,83.2 L400.6,83.2 Z"></path>
                        </g>
                        <g transform="translate(0.000000, 1.000000)" id="Shape">
                            <g transform="translate(36.000000, 112.000000)">
                                <path d="M32.8,0.5 C12.9,0.5 0,17.5 0,17.5 L0,63.5 C0,86.3 13.7,99.6 32.8,99.6 C55.6,99.6 68.5,83 68.5,50.2 C68.5,17.1 55.2,0.5 32.8,0.5 L32.8,0.5 Z"></path>
                                <path d="M189.2,0.5 C170.1,0.5 156,11.3 154.4,32.8 L220.3,32.8 C219.9,16.2 210.8,0.5 189.2,0.5 L189.2,0.5 Z"></path>
                            </g>
                            <g fill="#3FC2CD">
                                <path d="M72.6,81.8 C56.8,81.8 42.7,88.4 36.1,95.1 L36.1,18.8 C36.1,8.8 28.2,1 18.3,1 C7.9,0.5 0,8.8 0,18.8 L0,175.6 C0,220 28.6,242 68.8,242 C113.6,242 140.1,216.3 140.1,162.4 C139.8,107.5 114.5,81.8 72.6,81.8 L72.6,81.8 Z M68.8,211.2 C49.7,211.2 36,198.3 36,175.1 L36,129.5 C36,129.5 48.9,112.5 68.8,112.5 C91.2,112.5 104.5,129.1 104.5,161.9 C104.5,194.7 91.7,211.2 68.8,211.2 L68.8,211.2 Z"></path>
                                <path d="M291.6,147.7 C291.6,124.9 281.2,81.8 225.2,81.8 C180,81.8 153.4,110.4 153.4,161.4 C153.4,217 182,241.9 228.1,241.9 C258.4,241.9 275.8,229 281.6,223.7 C284.5,221.2 287.4,216.6 287.4,211.3 C287.4,202.6 280.3,195.5 271.6,195.5 C267.5,195.5 264.5,196.7 260.8,199.2 C252.9,204.6 242.6,209.6 228,209.6 C206,209.6 189,198.8 189,174.8 L271.1,174.8 C291.6,174.7 291.6,160.2 291.6,147.7 L291.6,147.7 Z M190,144.4 C191.7,123.2 205.8,112.1 224.8,112.1 C246.4,112.1 255.9,127.9 255.9,144.4 L190,144.4 L190,144.4 Z"></path>
                                <path d="M438,108.8 C438.8,107.1 439.2,104.7 439.2,101.7 C439.2,91.7 431.3,83.9 421.4,83.9 C411.4,83.9 406.5,91 404.8,95.1 L368.3,187.6 L331.8,95.1 C330.1,91 325.2,83.9 315.2,83.9 C305.2,83.9 297.4,91.8 297.4,101.7 C297.4,104.6 298.2,107.1 298.6,108.8 L351.7,229 C354.6,235.6 360.8,239.8 368.3,239.8 C375.8,239.8 382,235.7 384.9,229 L438,108.8 L438,108.8 Z"></path>
                                <path d="M571.9,83.9 C561.9,83.9 557,91 555.3,95.1 L518.8,187.2 C518.4,186.8 518.4,186.8 518,186.4 L481.9,95.2 C480.2,91.1 475.3,84 465.3,84 C455.3,84 447.5,91.9 447.5,101.8 C447.5,104.7 448.3,107.2 448.7,108.9 C448.7,108.9 487.7,193.9 492.2,213 C496.8,231.2 495.1,242 487.2,254.5 C477.7,269.4 461.1,278.6 443.2,278.6 C430.8,278.6 418.7,274 409.2,266.2 C402.1,260.4 391.8,261.2 386,268.3 C380.2,275.4 381,285.7 388.1,291.5 C403.4,304.8 423.4,311.8 443.7,311.8 C472.7,311.8 499.7,297.3 515.5,272.8 C519.6,266.6 526.3,250.4 527.1,248.7 L588.9,108.9 C589.7,107.2 590.1,104.8 590.1,101.8 C589.8,91.7 581.9,83.9 571.9,83.9 L571.9,83.9 Z"></path>
                                <path d="M478.2,220.3 L479,220.3 C481.1,219.9 482.7,217.4 481.9,215.3 C481.5,213.6 480.7,211.2 479.4,207.8 C478.6,205.7 476.1,204.5 474,205.3 C471.9,206.1 470.7,208.6 471.5,210.7 C472.3,213.6 473.2,215.7 473.6,217.3 C474.5,219.1 476.1,220.3 478.2,220.3 L478.2,220.3 Z"></path>
                                <path d="M442.9,268 C453.7,268 464.1,263.9 471.9,256.4 C474.4,254.3 476.5,251.4 478.1,248.9 C480.2,245.6 482.7,241.4 483.5,236 C483.9,233.9 482.3,231.4 480.2,231 C478.1,230.6 475.6,232.2 475.2,234.3 C474.8,237.6 473.5,240.1 471.1,243.8 C469.9,245.9 467.8,247.9 466.1,250 C459.9,256.2 451.6,259.5 442.9,259.5 C440.4,259.5 438.8,261.2 438.8,263.6 C438.8,266.4 440.9,268 442.9,268 L442.9,268 Z"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </g>
        </g>
    </svg>
    <a href="/" class="link-brand"></a>
</div>
<div class="flex-grow-1"></div>
</header>
    
    @yield('content') 
    
    <footer class="no-image-background" data-resize-when-filter-open>
    
        <!-- Start Mailing List(Mailchimp) Section -->
        <section class="mailing-list-section">
            <div class="heading">NEWSLETTER</div>
            <div class="message">Suscribite a nuestro newsletter para recibir novedades y promociones</div>
            <div class="email" data-email-reveal>
                <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate remote-subscribe" target="_blank" novalidate data-success-message="Suscripción exitosa" data-invalid_entry="Este email es inválido">
                    <div class="input-wrapper">
                        <input type="email" class="mailchimp-input" value="" name="email" id="mce-EMAIL" placeholder="Ingresá tu mail" />
                        <input type="image" src="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/arrow-right.svg?3348357575907650458" alt="Submit" class="submit" value="Suscribirme" name="subscribe" id="mc-embedded-subscribe" />
                    </div>
                    <div class="error-message js-analytics-validated--form" data-gtm-category="Newsletter Sign Up" data-gtm-label="footer" data-gtm-action=""></div>
                </form>
            </div>
        </section>
        <!-- End Mailing List(Mailchimp) Section -->

        <!-- Start Main Footer Section -->
        <section class="main-section">
            <!-- Left section in the main footer section -->
            <div class="left-section">
                <div class="footer-link-list-container">
                    <ul class="footer-link-list">
                        <li><a href="/pages/formas-de-pago">Forma de Pago</a></li>
                        <li><a href="/pages/costos-de-envio">Costos de Envío</a></li>
                        <li><a href="/pages/tiempos-de-envio">Tiempos de Envío</a></li>
                    </ul>
                </div>
            </div>
            <!-- Middle section in the main footer section (first)-->
            <div class="middle-section">
                <div class="footer-link-list-container">
                    <ul class="footer-link-list">
                        <li><a href="/pages/preguntas-frecuentes">Preguntas Frecuentes</a></li>
                        <li><a href="/pages/contacto">Contactanos</a></li>
                        <li><a href="/pages/terminos-y-condiciones">Términos y Condiciones</a></li>
                    </ul>
                </div>
            </div>
            <!-- Middle section in the main footer section (second)-->
            <div class="middle-section">
                <div class="social-link-list-container">
                    <div class="social-link-header">Seguinos</div>
                    <ul class="social-link-list">
                        <li>
                            <a href="http://facebook.com/bevybarAR/" data-gtm-category="Outbound Links" data-gtm-action="Social" data-gtm-label="Facebook" target="_blank" id="footer-social-facebook" class="facebook-social js-analytics">
                                <?xml version="1.0" encoding="utf-8"?>
                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve">
                                    <rect x="153.5" y="87.5" fill="#FFFFFF" stroke="#000000" width="197" height="321" />
                                    <path d="M426.19,73.81c-97.619-97.619-255.953-97.619-353.571,0C-25,171.429-25,329.762,72.619,427.381
c97.619,97.619,255.952,97.619,353.571,0C525,328.57,525,171.429,426.19,73.81z M322.619,148.81h-30.953
c0,0-20.236,1.19-20.236,16.667v35.714h47.618l1.19,53.571h-51.19v134.523h-51.191l2.381-134.523h-41.667v-47.619h39.286v-51.191
c0,0-2.381-20.238,16.667-38.095c0,0,11.905-14.286,36.905-14.286h51.19V148.81L322.619,148.81z" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="http://twitter.com/bevybar_AR" data-gtm-category="Outbound Links" data-gtm-action="Social" data-gtm-label="Twitter" target="_blank" id="footer-social-twitter" class="twitter-social js-analytics">
                                <?xml version="1.0" encoding="utf-8"?>
                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve">
                                    <rect x="102.5" y="118.5" fill="#FFFFFF" stroke="#000000" width="282" height="252" />
                                    <path d="M426.19,73.81c-97.619-97.619-255.953-97.619-353.571,0C-25,171.429-25,329.762,72.619,427.381
c97.619,97.619,255.952,97.619,353.571,0C525,328.57,525,171.429,426.19,73.81z M351.19,197.619v7.143
c0,69.048-52.382,148.81-148.811,148.81c-29.762,0-57.143-8.333-79.762-23.811c3.571,0,8.333,1.19,11.905,1.19
c25,0,47.619-8.333,65.476-22.618c-22.619,0-41.667-15.477-48.81-36.904c3.571,1.189,5.953,1.189,9.524,1.189
c4.762,0,9.524-1.189,14.286-2.381c-23.81-4.762-41.667-26.19-41.667-51.19v-1.191c7.143,3.572,15.476,5.953,23.81,5.953
c-14.286-9.524-23.81-25-23.81-44.048c0-9.523,2.381-19.047,7.143-26.19c26.19,32.143,64.286,52.381,108.333,54.762
c-1.19-3.572-1.19-8.333-1.19-11.905c0-28.572,23.81-52.381,52.381-52.381c15.477,0,28.571,5.952,38.096,16.667
c11.904-2.381,22.618-7.143,33.333-13.095c-3.57,11.905-11.904,22.619-22.619,28.571c10.715-1.19,20.238-3.571,29.763-8.333
C370.238,180.952,361.904,190.476,351.19,197.619z" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="http://instagram.com/bevybar_ar/" data-gtm-category="Outbound Links" data-gtm-action="Social" data-gtm-label="Instagram" target="_blank" id="footer-social-instagram" class="instagram-social js-analytics">
                                <?xml version="1.0" encoding="utf-8"?>
                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                <svg style="enable-background:new 0 0 512 512;" version="1.1" viewBox="10 6 488 488" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <style type="text/css">
                                    .instagram0 {
                                        fill: url(#SVGID_1_);
                                    }
                                    
                                    .instagram1 {
                                        fill: #FFFFFF;
                                    }
                                    </style>
                                    <g id="edges_instagram" />
                                    <g id="background_instagram">
                                        <radialGradient cx="50.1582" cy="15.1047" gradientTransform="matrix(5.233596e-02 -0.9986 0.8488 4.448556e-02 12.0003 498.8006)" gradientUnits="userSpaceOnUse" id="SVGID_1_" r="684.4449">
                                            <stop offset="0" style="stop-color:#FED576" />
                                            <stop offset="0.2634" style="stop-color:#F47133" />
                                            <stop offset="0.6091" style="stop-color:#BC3081" />
                                            <stop offset="1" style="stop-color:#4C63D2" />
                                        </radialGradient>
                                        <path class="instagram0" d="M18.8,250.1v12.8c3.3,122.4,101.9,220.7,219.2,229.9h36.1c118-9.3,214.9-108.5,218.1-230.1v-12.6   C489,126.3,388.7,25.9,267.9,19.7C137.9,13.1,22.4,117.4,18.8,250.1z" />
                                    </g>
                                    <g id="symbol_instagram">
                                        <g>
                                            <path class="instagram1" d="M256.6,138.3c37.7,0,42.2,0.1,57.1,0.8c13.8,0.6,21.2,3,26.2,4.9c6.6,2.6,11.3,5.7,16.2,10.7    c4.9,5,8,9.8,10.6,16.5c1.9,5.1,4.2,12.7,4.9,26.7c0.7,15.2,0.8,19.7,0.8,58.1s-0.1,42.9-0.8,58.1c-0.6,14-2.9,21.6-4.9,26.7    c-2.6,6.7-5.6,11.5-10.6,16.5c-4.9,5-9.6,8.1-16.2,10.7c-5,2-12.5,4.3-26.2,4.9c-14.9,0.7-19.4,0.8-57.1,0.8    c-37.7,0-42.2-0.1-57.1-0.8c-13.8-0.6-21.2-3-26.2-4.9c-6.6-2.6-11.3-5.7-16.2-10.7c-4.9-5-8-9.8-10.6-16.5    c-1.9-5.1-4.2-12.7-4.9-26.7c-0.7-15.2-0.8-19.7-0.8-58.1s0.1-42.9,0.8-58.1c0.6-14,2.9-21.6,4.9-26.7c2.6-6.7,5.6-11.5,10.6-16.5    c4.9-5,9.6-8.1,16.2-10.7c5-2,12.5-4.3,26.2-4.9C214.4,138.5,218.9,138.3,256.6,138.3 M256.6,112.4c-38.4,0-43.2,0.2-58.2,0.9    c-15,0.7-25.3,3.1-34.3,6.7c-9.3,3.7-17.2,8.6-25,16.6c-7.9,8-12.7,16-16.3,25.5c-3.5,9.1-5.9,19.6-6.6,34.9    c-0.7,15.3-0.8,20.2-0.8,59.2c0,39,0.2,43.9,0.8,59.2c0.7,15.3,3.1,25.7,6.6,34.9c3.6,9.4,8.4,17.5,16.3,25.5    c7.9,8,15.7,12.9,25,16.6c9,3.6,19.3,6,34.3,6.7c15.1,0.7,19.9,0.9,58.2,0.9s43.2-0.2,58.2-0.9c15-0.7,25.3-3.1,34.3-6.7    c9.3-3.7,17.2-8.6,25-16.6c7.9-8,12.7-16,16.3-25.5c3.5-9.1,5.9-19.6,6.6-34.9c0.7-15.3,0.8-20.2,0.8-59.2s-0.2-43.9-0.8-59.2    c-0.7-15.3-3.1-25.7-6.6-34.9c-3.6-9.4-8.4-17.5-16.3-25.5c-7.9-8-15.7-12.9-25-16.6c-9-3.6-19.3-6-34.3-6.7    C299.8,112.6,294.9,112.4,256.6,112.4L256.6,112.4z" />
                                            <path class="instagram1" d="M256.6,182.3c-40.1,0-72.5,33-72.5,73.8s32.5,73.8,72.5,73.8s72.5-33,72.5-73.8S296.6,182.3,256.6,182.3z     M256.6,304c-26,0-47.1-21.4-47.1-47.9s21.1-47.9,47.1-47.9c26,0,47.1,21.4,47.1,47.9S282.6,304,256.6,304z" />
                                            <ellipse class="instagram1" cx="332" cy="179.4" rx="16.9" ry="17.2" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Langify Switch Container -->
                <div class="langify-switch-container">
                    <div id="ly-languages-switcher" class="ly-languages-switcher">
                    </div>
                </div>
            </div>
            <!-- start right section in the main footer section -->
            <div class="right-section">
                <div class="security-logo-container">
                    <!-- data fiscal logo container that is used in bevybar only -->
                    <div class="data-fiscal-container">
                        <a class="data-fiscal" href="http://qr.afip.gob.ar/?qr=OB75AUcgxa_XPdsKN65hPQ,," target="_F960AFIPInfo">
                            <img class="b-lazy" data-src="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/dataweb.png?3348357575907650458" border="0">
                        </a>
                    </div>
                    <!-- hotsale logo container that is being used in bevybar store -->
                    <div class="hot-sale-logo-container">
                        <a class="hot-sale" href="http://www.hotsale.com.ar/bevybar" target="_blank">
                            <img src="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/hot_sale_logo_small.png?3348357575907650458" alt="" />
                        </a>
                    </div>
                    <!-- cyber monday logo container that is being used in bevybar store -->
                    <div class="cyber-monday-logo-container">
                        <a class="cyber-monday" href="" target="_blank">
                            <img src="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/cyber_monday_logo_compact.png?3348357575907650458" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Main Footer Section -->
        <!-- Start Most Searched Section -->
        <section class="most-searched-section">
            <div class="footer-most-searched">
                <h2>Cervezas más buscadas:</h2>
                <ul>
                    <li>
                        <h3><a href="/collections/corona">Corona</a></h3></li>
                    <li>
                        <h3><a href="/collections/patagonia-brewing-co">Patagonia</a></h3></li>
                    <li>
                        <h3><a href="/collections/cerveceria-antares">Antares</a></h3></li>
                    <li>
                        <h3><a href="/products/chalice-stella-artois-6">Stella Artois</a></h3></li>
                    <li>
                        <h3><a href="/collections/all-beers">Cerveza</a></h3></li>
                    <li>
                        <h3><a href="/collections/imports">Importadas</a></h3></li>
                    <li>
                        <h3><a href="/collections/accesorios">Copas</a></h3></li>
                    <li>
                        <h3><a href="/collections/artesanales">Cervezas Artesanales</a></h3></li>
                </ul>
            </div>
        </section>
        <section class="most-searched-section">
            <div class="footer-most-searched">
                <h2>Bebidas Más Buscadas</h2>
                <ul>
                    <li>
                        <h3><a href="/products/campari">Campari</a></h3></li>
                    <li>
                        <h3><a href="/collections/whisky">Whisky</a></h3></li>
                    <li>
                        <h3><a href="/collections/vodka">Vodka</a></h3></li>
                    <li>
                        <h3><a href="/products/johnnie-walker-black-label">Johnnie Walker</a></h3></li>
                    <li>
                        <h3><a href="/products/jagermeister">Jägermeister</a></h3></li>
                    <li>
                        <h3><a href="/products/jack-daniels-tennesse-whiskey">Jack Daniel's</a></h3></li>
                    <li>
                        <h3><a href="/collections/tequila">Tequila</a></h3></li>
                    <li>
                        <h3><a href="/products/absenta-aura">Absenta</a></h3></li>
                </ul>
            </div>
        </section>
        <!-- End Most Searched Section -->
        <!-- Start Disclaimer Section -->
        <section class="legal-section">
            <div class="legal-container">
                <p class="legal-footer">© PATAGONIA BREWING COMPANY 2016 BEBER CON MODERACIÓN. PROHIBIDA SU VENTA A MENORES DE 18 AÑOS</p>
                <p></p>
            </div>
        </section>
        <!-- End Disclaimer Section -->
    </footer>
    
    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('js/vendor/what-input.js') }}"></script>
    <script src="{{ asset('js/vendor/foundation.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
