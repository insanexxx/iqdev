<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Iq Dev</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='script.js'></script>
    <script src="assets/jquery.min.js"></script>
    <script src="assets/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="assets/jquery-ui.css">
    <script src="assets/jquery.validate.min.js"></script>
</head>

<body>
    
<div class="header">
    <div class="headtxt"><h1 id="head">Deposit Calculator</h1></div>
</div>
<div class="main">
    <h1 id="mainheader">Депозитный калькулятор</h1>
    <h2 id="mainheader">Калькулятор депозитов позволяет рассчитать ваши доходы после внесения суммы на счет в банке по определенному тарифу.</h2>
    <form id="mainform" onsubmit="Send()" method="POST" >
        <table>
            <tr>
                <td><div class="leftcolumn">
                    <p><input class="inputs" id="datepicker" type="date" placeholder="Дата открытия" name="startDate"/></p>
                    <p><input class="inputs" type="text" placeholder="Сумма вклада" name="sum"/></p>
                    <p><input id="check" type="checkbox" checked/>Ежемесячное пополнение вклада</p>
                </div></td>
                <td><div class="rightcolumn">
                    <p><input class="inputs" type="text" placeholder="Срок вклада" name="term"/></p>
                    <p><input class="inputs" type="text" placeholder="Процентная ставка, % годовых" name="percent"/></p>
                    <p><input class="inputs" type="text" placeholder="Сумма ежемесячного пополнения вклада" name="sumAdd"/></p>
                </div></td>
            </tr>
        </table> 
        <p><input id="calcbutton" type="submit" value="Рассчитать"/></p>    
        
        <div id="result">_____________________________________________
            
        </div>
    </form>
</div>    
</body>
</html>