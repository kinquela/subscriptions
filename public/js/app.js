$(document).foundation()

// SHOW/HIDE REGISTER FORM
$('[data-register-show]').click(function( event ) {
    console.log('aca');
    $('#create_customer').show();
});


// ignaciom.gonzalez@gmail.com account
Mercadopago.setPublishableKey("TEST-ac4dcb05-4037-4d53-a9da-ccbd488e9054");
Checkout.setPublishableKey("TEST-ac4dcb05-4037-4d53-a9da-ccbd488e9054");

$("#tokenizerCardForm").submit(function( event ) {
    var $form = $(this);
    console.log($form);
    Checkout.createToken($form, mpResponseHandler);
    event.preventDefault();
    return false;
});

var mpResponseHandler = function(status, response) {
    var $form = $('#tokenizerCardForm');

    if (response.error) {
        alert("ocurri&oacute; un error: "+JSON.stringify(response));
    } else {
        console.log(response);
        var card_token_id = response.id;
        $form.append($('<input type="hidden" id="card_token_id" name="card_token_id"/>').val(card_token_id));
        console.log(card_token_id);//6c66f4efbfa0e1933ca07d2f48962dae
        $form.get(0).submit();
    }
}

function addEvent(el, eventName, handler){
    if (el.addEventListener) {
           el.addEventListener(eventName, handler);
    } else {
        el.attachEvent('on' + eventName, function(){
          handler.call(el);
        });
    }
};

function getBin() {
    var ccNumber = document.querySelector('input[data-checkout="cardNumber"]');
    return ccNumber.value.replace(/[ .-]/g, '').slice(0, 6);
}

function guessingPaymentMethod(event) {
    var bin = getBin();
    if (event.type == "keyup") {
        if (bin.length >= 6) {
            Mercadopago.getPaymentMethod({
                "bin": bin
            }, setPaymentMethodInfo);
        }
    } else {
        setTimeout(function () {
            if (bin.length >= 6) {
                Mercadopago.getPaymentMethod({
                    "bin": bin
                }, setPaymentMethodInfo);
            }
        }, 100);
    }
}

function setPaymentMethodInfo(status, response) {
    if (status == 200) {
        // do somethings ex: show logo of the payment method
        var form = document.querySelector('#pay');

        if (document.querySelector("input[name=paymentMethodId]") == null) {
            var paymentMethod = document.createElement('input');
            paymentMethod.setAttribute('name', "paymentMethodId");
            paymentMethod.setAttribute('type', "hidden");
            paymentMethod.setAttribute('value', response[0].id);

            form.appendChild(paymentMethod);
        } else {
            document.querySelector("input[name=paymentMethodId]").value = response[0].id;
        }
    }
};

addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'keyup', guessingPaymentMethod);
addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'change', guessingPaymentMethod);


/*
function setPaymentMethodInfo(status, response) {
    if (status == 200) {
        $("#paymentMethodId").value = response[0].id;

    }
}

$('#cardNumber').keyup(function () {
    var bin = getBin();
    if (bin.length >= 6) {
        Mercadopago.getPaymentMethod({
            "bin": bin
        }, setPaymentMethodInfo);
    }

});
$('#cardNumber').change(function () {
    var bin = getBin();
    setTimeout(function () {
        if (bin.length >= 6) {
            Mercadopago.getPaymentMethod({
                "bin": bin
            }, setPaymentMethodInfo);
        }
    }, 100);
});
*/

var checkout = {};

checkout.processPayment = function () {
    if ($('#mercadopago_customer_id')) {
        $.when(MercadoPagoMock.createCard($('#mercadopago_customer_id'))).then(
                function (card) {
                    alert(card, $('#mercadopago_customer_id'));
                },
                function (error) {

                }
        );
    } else {
        $.when(MercadoPagoMock.createCustomer()).then(
                function (customer) {
                    $.when(MercadoPagoMock.createCard()).then(
                            function (card) {
                                alert(card, 'customer');
                            },
                            function (error) {

                            }
                    );
                    alert(customer.customerID);
                },
                function (error) {
                    alert(error);
                }
        );
    }



}
var MercadoPagoMock = {
    createCard: function (customerId) {
        return 'a';
    },
    createCustomer: function (customerData) {
        var dfd = jQuery.Deferred();
        if (confirm('se fue a mercadopago')) {
            dfd.resolve({customerID: 11111});
        } else {
            dfd.reject("Tenemos que ver que mostrar en este caso");
        }

//

//            var MP = require("mercadopago");
//
//            var mp = new MP("ACCESS_TOKEN");
//
//            var createCustomer = mp.post("/v1/customers", {"email": "test@test.com"});
//
//            createCustomer.then(
//                    function (customerData) {
//                        console.log(customerData);
//                    },
//                    function (error) {
//                        console.log(error);
//                    });

        return dfd.promise();

    }
}
