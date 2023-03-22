<?php

$currency_symbols = [
    "American Dollar" =>	"$",
    "Argentina Peso" =>	"$",
    "Australia Dollar" =>	"$",
    "Botswana Pula" =>	"P",
    "Bulgaria Lev" =>	"лв",
    "Brazil Real" =>	"R$",
    "Brunei Darussalam Dollar" =>	"$",
    "Canada Dollar" =>	"$",
    "Chile Peso" =>	"$",
    "China Yuan Renminbi" =>	"¥",
    "Colombia Peso" =>	"$",
    "Czech Republic Koruna" =>	"Kč",
    "Denmark Krone" =>	"kr",
    "Euro Member Countries" =>	"€",
    "Hong Kong Dollar" =>	"$",
    "Hungary Forint" =>	"Ft",
    "Iceland Krona" =>	"kr",
    "India Rupee" =>	"₹",
    "Indonesia Rupiah" =>	"Rp",
    "Iran Rial" =>	"﷼",
    "Israel Shekel" =>	"₪",
    "Japan Yen" =>	"¥",
    "Kazakhstan Tenge" =>	"лв",
    "Malaysia Ringgit" =>	"RM",
    "Mauritius Rupee" =>	"₨",
    "Mexico Peso" =>	"$",
    "New Zealand Dollar" =>	"$",
    "Norway Krone" =>	"kr",
    "Oman Rial" =>	"﷼",
    "Pakistan Rupee" =>	"₨",
    "Philippines Peso" =>	"₱",
    "Poland Zloty" =>	"zł",
    "Qatar Riyal" =>	"﷼",
    "Romania Leu" =>	"lei",
    "Russia Ruble" =>	"₽",
    "Saudi Arabia Riyal" =>	"﷼",
    "Singapore Dollar" =>	"$",
    "South Korean Won" =>	"₩",
    "South African Rand" =>	"R",
    "Sri Lanka Rupee" =>	"₨",
    "Sweden Krona" =>	"kr",
    "Switzerland Franc" =>	"CHF",
    "Taiwan New Dollar" =>	"NT$",
    "Thailand Baht" =>	"฿",
    "Trinidad and Tobago Dollar" =>	"TT$",
    "Turkey Lira" =>	"₺",
    "Venezuela Bolívar" =>	"Bs",
];

$currency_values = [
    "American Dollar" =>	1.00,
    "Argentina Peso" =>	203.36,
    "Australia Dollar" =>	1.49,
    "Botswana Pula" =>	13.28,
    "Bulgaria Lev" =>	1.83,
    "Brazil Real" =>	5.28,
    "Brunei Darussalam Dollar" =>	1.34,
    "Canada Dollar" =>	1.37,
    "Chile Peso" =>	826.94,
    "China Yuan Renminbi" =>	6.88,
    "Colombia Peso" =>	4840.69,
    "Czech Republic Koruna" =>	22.48,
    "Denmark Krone" =>	6.97,
    "Euro Member Countries" =>	0.94,
    "Hong Kong Dollar" =>	7.84,
    "Hungary Forint" =>	373.63,
    "Iceland Krona" =>	140.21,
    "India Rupee" =>	82.62,
    "Indonesia Rupiah" =>	15354.7,
    "Iran Rial" =>	42243.36,
    "Israel Shekel" =>	3.67,
    "Japan Yen" =>	131.21,
    "Kazakhstan Tenge" =>	462.29,
    "Malaysia Ringgit" =>	4.49,
    "Mauritius Rupee" =>	46.47,
    "Mexico Peso" =>	19.04,
    "New Zealand Dollar" =>	1.6,
    "Omani Rial" =>	0.38,
    "Pakistani Rupee" =>	283.01,
    "Philippine Peso" =>	54.53,
    "Polish Zloty" =>	4.41,
    "Qatari Riyal" =>	3.64,
    "Romanian New Leu" =>	4.61,
    "Russian Ruble" =>	77.16,
    "Saudi Arabian Riyal" =>	3.75,
    "Singapore Dollar" =>	1.34,
    "South African Rand" =>	18.51,
    "South Korean Won" =>	1311.03,
    "Sri Lankan Rupee" =>	334.00,
    "Swedish Krona" =>	10.49,
    "Swiss Franc" =>	0.93,
    "Taiwan New Dollar" =>	30.53,
];

$new_currency_symbol="";
$original_currency_symbol="";

//Retrieve data from post request
if( empty($_REQUEST)==false ){
    $original_currency = $_POST['original_currency'];
    $amount = $_POST['amount'];
    $new_currency = $_POST['new_currency'];

    /////
    //Currency symbol collector
    /////
    $original_currency_symbol = $currency_symbols[$original_currency];
    $new_currency_symbol = $currency_symbols[$new_currency];

    /////
    //Conversion section
    /////
    //Currencies all based on value vs the dollar (base_currency)

    //Get value of the currency
    $original_currency_value = $currency_values[$original_currency];
    $new_currency_value = $currency_values[$new_currency];

    //Create conversion values
    $convert_to_base = ($currency_values["American Dollar"]/$original_currency_value);
    $convert_to_new = ($new_currency_value/$currency_values["American Dollar"]);

    //Final conversion
    $new_amount = $amount*$convert_to_base*$convert_to_new;
}

?>