<!DOCTYPE html>
<html>
<head>
    <title>InterSwitch Payments</title>
</head>
<body>
    <div id="btn_div"></div>

<script id="qtScript" type="text/javascript" src="https://sandbox.interswitchng.com/quickteller.js/v3" onload="Quickteller.initialize()"></script>
<script type="text/javascript">
document.onreadystatechange = function() {

if(document.readyState === "complete"){

Quickteller.checkout({

"paymentCode" : "",

"buttonSize": "small | medium | large",

"redirectUrl": "http://example.com/redirect",

"amount": "",

"customerId": "",

"mobileNumber": "",

"emailAddress": ""

}, "btn_div", function(){

//fn called before loading payment pop-up.

}, function (status) {

//fn called just before closing payment pop-up.

});

}

}
</script>
</body>
</html>