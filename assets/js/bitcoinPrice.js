let d = new Date();
//document.body.innerHTML = "<h1>Today's date is " + d + "</h1>"
//document.getElementById("bitcoinPrice").innerHTML = "$5"
// $.getJSON("https://blockchain.info/ticker", function(data){
//     //data is the JSON string
//     alert("hello")
//     alert((JSON.stringify(data))
//     //document.body.innerHTML = "<h1>Today's date is " + d + "</h1>"
// });


var xmlhttp = new XMLHttpRequest();
//var url = "https://blockchain.info/ticker";
var url = "https://bitpay.com/api/rates/usd"

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myArr = JSON.parse(this.responseText);
        myFunction(myArr);
    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

function myFunction(arr) {
    //var btcInUSD = arr["USD"]["15m"];
    var btcInUSD = arr["rate"]
    var stringPrice = "(1 btc = $" + btcInUSD.toFixed(2) + ")";
    var twentyDollar = "$20 (~" + (20/btcInUSD * 1000).toFixed(3) + " mBTC)"
    var twentyDollar = "$20 (~" + (20/btcInUSD * 1000).toFixed(3) + " mBTC)"
    //document.getElementById("bitcoinPrice").innerHTML = stringPrice;
    document.getElementById("twentyDollarBTC").innerHTML = createBTCPriceString(btcInUSD, 20);
    document.getElementById("tenDollarBTC").innerHTML = createBTCPriceString(btcInUSD, 10);
    document.getElementById("fifteenDollarBTC").innerHTML = createBTCPriceString(btcInUSD, 15);

    document.getElementById("btcRate").innerHTML = stringPrice;
    
}

function createBTCPriceString(btcInUSD, price) {

    return "$" + price + " (~" + (price/btcInUSD * 1000).toFixed(3) + " mBTC)"
}



