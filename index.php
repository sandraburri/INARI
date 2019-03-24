 <html>
     
<head>
<link href="css/inari.css" type="text/css" rel="stylesheet">

<style >
#Einkaufsbeleg {
    position: absolute;
	top: 71px;
    left: 118px;
    width: 96px;
    height: 23px;
}

#Wareneingang {
    position: absolute;
	top: 114px;
    left: 119px;
    width: 77px;
    height: 23px;
}

#Lieferant {
    position: absolute;
	top: 136px;
    left: 119px;
    width: 200px;
    height: 23px;
}

#Speichern {
    position: absolute;
	top: 290px;
    left: 21px;
    width: 111px;
    height: 23px;
	line-height: 23px;
	padding: 0;
	border: 1px solid #4B0082;
	display: block;
	color: black;
	background: yellow;
	text-decoration: none;
	font-size: 12px;
	text-align: center;
	box-shadow: 2px 2px #999;
}

</style>
</head>

<body>
<div class="background startseite"></div>

    <select name="selectionfield1" id="Einkaufsbeleg" >
        <option data-lieferant="GlaxoSmithKline AG">123456 </option>
        <option data-lieferant="Pfizer PFE Switzerland GmbH">234567 </option>
        <option data-lieferant="Novartis">345678 </option>
        <option data-lieferant="Galexis">456789 </option>
    </select>
    
    <input type="text" id="Wareneingang" value="<?php echo date("d.m.Y") ?>" />
    <input type="text" id="Lieferant" value="" />
    <a id="Speichern" href="scanner1.php"> Speichern </a>

    <script type="text/javascript">
        var einkaufsbeleg = document.getElementById("Einkaufsbeleg");
        var lieferant = document.getElementById("Lieferant");
        
        einkaufsbeleg.addEventListener("change", function(event) {
            var input = event.target;
            var option = input.options[input.options.selectedIndex];
            var x = option.attributes["data-lieferant"].value || "";
 
            lieferant.value = x;
        });
    </script>
    
</div>
</body>
</html>