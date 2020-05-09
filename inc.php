
<!doctype html>
<html>
<head>
<title>Receipt</title>
<style>
   table {
    border-collapse: collapse;
}

table{
    border: 2px solid #228dcb;
}
th{
    border: 1px solid black;
    height: 50px;
    text-align: left;
}
.nothidden{
    border: 1px solid black;
    height: 50px;
    text-align: left;
}
.hidden{  
   border-right: 1px solid white;
    height: 50px;
    text-align: left;
}
.hide{
   border-bottom: 1px solid white;
    height: 50px;
    text-align: left;
}
.hided{
    border-top: 1px solid black;
    height: 20px;
    text-align: left;
}
</style>
</head>
<body>
    <table>
                    <thead>
                        <tr>
						    <td class="nothidden"><img src="http://myfedexe.com/html/ltr/log.png"></td>
                            <td class="nothidden">FLight Name: '.$Flightname.'</td>
                            <td class="nothidden">Flight No: '.$Flightno.'</td>
                            <td class="nothidden">Dept TIme: '.$Departime.'</td>
                            <td class="nothidden">Arrival Time: '.$Arrivaltime.'</td>
                        </tr>
                    </thead>
                    <tbody>
						
                    </tbody>
	</table>
</body>
</html>