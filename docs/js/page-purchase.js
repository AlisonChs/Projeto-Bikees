PayStandCheckout.checkoutComplete = function (data) {
  console.log("custom checkout complete:", data);
  alert("Obrigado pela compra");
};
PayStandCheckout.checkoutFailed = function (data) {
  console.log("custom checkout failed:", data);
  alert("Sentimos muito pelas dificuldades técnicas")
};
PayStandCheckout.init({
  "publishableKey": "eml9jvz7dsbglwtx53xtu9tl",
  "checkout_domain": "https://checkout.paystand.co/v2/",
  "domain": "https://api.paystand.co",
  "total": "10.00",
  "currency": "R$",
  "features": {
    "cards": true,
    "echeck": {
      "enabled": true
    }
  },
  "ui": {
    "billing": {
      "show": true,
      "autoFill": {
        "email": "test@test-email.com",
        "fullName": "Test User",
        "street1": "Rua Test t e s t",
        "street2": "Apt 3G",
        "city": "Test",
        "state": "SP",
        "country": "Brasil"
      }
    }
  },
  "meta": {
    "invoice" : {
      "number": "#CIN-001",
      "amount" : 10.00,
      "date" : "2015-09-10T04:00:00+00:00",
      "customer": "Matt Ouellette"
    },
  }
});
hljs.initHighlightingOnLoad();