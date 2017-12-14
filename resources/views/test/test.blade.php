<!DOCTYPE html>
<html>
<head>
    <title>dfgdffffffgf</title>
</head>
<body>
<p>
    <form>
        <em>
            <small>
                <a id="95101" class="quickteller-checkout-anchor" style="text-align: left;"></a>payment button will appear here shortly...
            </small>
        </em>
    </form>
    

</p>
</body>
</html>

<script type="text/javascript">
    (function () {
        var QTCheckout = QTCheckout || {};
        console.log(QTCheckout);
        var testMode = true;
        var baseUrl = "";
        QTCheckout.paymentItems = QTCheckout.paymentItems || [];
        QTCheckout.paymentItems.push({
            paymentCode: 95101,
            extraData: {
                amount: '20000000',
                buttonSize: 'medium',
                customerId: 'default',
                mobileNumber: 'default',
                emailAddress: 'default',
                redirectUrl: 'default'
            }
        });
        if (testMode == true) baseUrl = "https://testwebpay.interswitchng.com/quicktellercheckout/scripts/quickteller-checkout.js?v=";
        else baseUrl = "https://paywith.quickteller.com/scripts/quickteller-checkout-min.js?v=";
        if (!QTCheckout.qtScript) {
            var qtScript = document.createElement('script');
            qtScript.type = 'text/javascript';
            qtScript.async = true;
            qtScript.src = baseUrl + new Date().getDay();
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(qtScript, s);
            QTCheckout.qtScript = qtScript;
        }
        else if (QTCheckout.buildPaymentItemsUI) {
            QTCheckout.buildPaymentItemsUI();
        }
    })();

</script> 