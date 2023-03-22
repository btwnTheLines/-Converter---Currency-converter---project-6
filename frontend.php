<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include_once("backend.php");
    ?>
    <h2>
        Currency Converter
    </h2>
    <form action="\backend.php" method="post" target="_self">
        <p>Original Currency</p>
        <select name="original_currency">
            <option value="American Dollar">American Dollar</option>
            <option value="Argentina Peso">Argentina Peso</option>
            <option value="Australia Dollar">Australia Dollar</option>
            <option value="Botswana Pula">Botswana Pula</option>
            <option value="Bulgaria Lev">Bulgaria Lev</option>
            <option value="Brazil Real">Brazil Real</option>
            <option value="Brunei Darussalam Dollar">Brunei Darussalam Dollar</option>
            <option value="Canada Dollar">Canada Dollar</option>
            <option value="Chile Peso">Chile Peso</option>
            <option value="China Yuan Renminbi">China Yuan Renminbi</option>
            <option value="Colombia Peso">Colombia Peso</option>
            <option value="Czech Republic Koruna">Czech Republic Koruna</option>
            <option value="Denmark Krone">Denmark Krone</option>
            <option value="Euro Member Countries">Euro Member Countries</option>
            <option value="Hong Kong Dollar">Hong Kong Dollar</option>
            <option value="Hungary Forint">Hungary Forint</option>
            <option value="Iceland Krona">Iceland Krona</option>
            <option value="India Rupee">India Rupee</option>
            <option value="Indonesia Rupiah">Indonesia Rupiah</option>
            <option value="Iran Rial">Iran Rial</option>
            <option value="Israel Shekel">Israel Shekel</option>
            <option value="Japan Yen">Japan Yen</option>
            <option value="Kazakhstan Tenge">Kazakhstan Tenge</option>
            <option value="Malaysia Ringgit">Malaysia Ringgit</option>
            <option value="Mauritius Rupee">Mauritius Rupee</option>
            <option value="Mexico Peso">Mexico Peso</option>
            <option value="New Zealand Dollar">New Zealand Dollar</option>
            <option value="Norway Krone">Norway Krone</option>
            <option value="Oman Rial">Oman Rial</option>
            <option value="Pakistan Rupee">Pakistan Rupee</option>
            <option value="Philippines Peso">Philippines Peso</option>
            <option value="Poland Zloty">Poland Zloty</option>
            <option value="Qatar Riyal">Qatar Riyal</option>
            <option value="Romania Leu">Romania Leu</option>
            <option value="Russia Ruble">Russia Ruble</option>
            <option value="Saudi Arabia Riyal">Saudi Arabia Riyal</option>
            <option value="Singapore Dollar">Singapore Dollar</option>
            <option value="South Korean Won">South Korean Won</option>
            <option value="South African Rand">South African Rand</option>
            <option value="Sri Lanka Rupee">Sri Lanka Rupee</option>
            <option value="Sweden Krona">Sweden Krona</option>
            <option value="Switzerland Franc">Switzerland Franc</option>
            <option value="Taiwan New Dollar">Taiwan New Dollar</option>
            <option value="Thailand Baht">Thailand Baht</option>
            <option value="Trinidad and Tobago Dollar">Trinidad and Tobago Dollar</option>
            <option value="Turkey Lira">Turkey Lira</option>
            <option value="Venezuela Bolívar">Venezuela Bolívar</option>
        </select>
        <p>Amount to convert</p>
        <input type="text" name="amount" id="">
        <p>New Currency</p>
        <select name="new_currency">
            <option value="American Dollar">American Dollar</option>
            <option value="Argentina Peso">Argentina Peso</option>
            <option value="Australia Dollar">Australia Dollar</option>
            <option value="Botswana Pula">Botswana Pula</option>
            <option value="Bulgaria Lev">Bulgaria Lev</option>
            <option value="Brazil Real">Brazil Real</option>
            <option value="Brunei Darussalam Dollar">Brunei Darussalam Dollar</option>
            <option value="Canada Dollar">Canada Dollar</option>
            <option value="Chile Peso">Chile Peso</option>
            <option value="China Yuan Renminbi">China Yuan Renminbi</option>
            <option value="Colombia Peso">Colombia Peso</option>
            <option value="Czech Republic Koruna">Czech Republic Koruna</option>
            <option value="Denmark Krone">Denmark Krone</option>
            <option value="Euro Member Countries">Euro Member Countries</option>
            <option value="Hong Kong Dollar">Hong Kong Dollar</option>
            <option value="Hungary Forint">Hungary Forint</option>
            <option value="Iceland Krona">Iceland Krona</option>
            <option value="India Rupee">India Rupee</option>
            <option value="Indonesia Rupiah">Indonesia Rupiah</option>
            <option value="Iran Rial">Iran Rial</option>
            <option value="Israel Shekel">Israel Shekel</option>
            <option value="Japan Yen">Japan Yen</option>
            <option value="Kazakhstan Tenge">Kazakhstan Tenge</option>
            <option value="Malaysia Ringgit">Malaysia Ringgit</option>
            <option value="Mauritius Rupee">Mauritius Rupee</option>
            <option value="Mexico Peso">Mexico Peso</option>
            <option value="New Zealand Dollar">New Zealand Dollar</option>
            <option value="Norway Krone">Norway Krone</option>
            <option value="Oman Rial">Oman Rial</option>
            <option value="Pakistan Rupee">Pakistan Rupee</option>
            <option value="Philippines Peso">Philippines Peso</option>
            <option value="Poland Zloty">Poland Zloty</option>
            <option value="Qatar Riyal">Qatar Riyal</option>
            <option value="Romania Leu">Romania Leu</option>
            <option value="Russia Ruble">Russia Ruble</option>
            <option value="Saudi Arabia Riyal">Saudi Arabia Riyal</option>
            <option value="Singapore Dollar">Singapore Dollar</option>
            <option value="South Korean Won">South Korean Won</option>
            <option value="South African Rand">South African Rand</option>
            <option value="Sri Lanka Rupee">Sri Lanka Rupee</option>
            <option value="Sweden Krona">Sweden Krona</option>
            <option value="Switzerland Franc">Switzerland Franc</option>
            <option value="Taiwan New Dollar">Taiwan New Dollar</option>
            <option value="Thailand Baht">Thailand Baht</option>
            <option value="Trinidad and Tobago Dollar">Trinidad and Tobago Dollar</option>
            <option value="Turkey Lira">Turkey Lira</option>
            <option value="Venezuela Bolívar">Venezuela Bolívar</option>
        </select>
        <div>
            <input type="submit" value="Submit" style="margin-top: 1%; margin-bottom: 1%;">
        </div>
    </form>
    <div>
        <h4 style="margin-bottom: 0.4rem;">Full amount converted:</h4>
        <?php 
            if( !$new_currency_symbol==null ){
                if( !substr($new_amount,1,1) == "." ){
                    echo($new_currency_symbol.substr($new_amount,0, 5)." ".$new_currency."s'");
                }
                else{
                    echo($new_currency_symbol.substr($new_amount,0, 4)." ".$new_currency."s'");
                }
            }
        ?>
    </div>
    <div>
        <?php 
            if( !$original_currency_symbol==null ){
                echo(" per ".$original_currency_symbol.$amount." ".$original_currency."s'");
            }
        ?>
    </div>
    <div>
        <h4>
            Exchange Rate: <br>
            <?php 
                echo(
                    $original_currency_value." ".$new_currency."s'"." for every ".$convert_to_new." ".$original_currency
                );
            ?>
        </h4>
    </div>
</body>
</html>