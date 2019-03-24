 <html>
     
<head>
<link href="css/inari.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="background variants"></div>

	<input type="text" id="mediName1" class="highlight" readonly="readonly" value="Panotile Tropfen 8ml 40 Stk" />
	<input type="text" id="ean" class="highlight" readonly="readonly" value="7680319570284" />
	<input type="text" id="lgort1" class="highlight" readonly="readonly" value="9015" />
	<input type="text" id="beleg" class="highlight" readonly="readonly" value="5109" />
	<input type="text" id="charge" class="highlight" readonly="readonly" value="jkl789" />
	<input type="text" id="datum" class="highlight" readonly="readonly" value="22.02.2018" />
	<input type="text" id="lgort2" class="highlight" readonly="readonly" value="9015" />
	<input type="text" id="mediName2" class="highlight" readonly="readonly" value="Panotile Tropfen 8ml 40 Stk" />
	
	<div class="inari-title">Inari</div>
	<div class="inari">
		<label >Hersteller:</label>
		<input type="text" id="herstellerAnzeige" readonly="readonly" value="Zambon Switzerland Ltd" />
		
		<label >Verfalldatum:</label>
		<input type="text" id="verfalldatumAnzeige" readonly="readonly" value="02.2020" />
		
		<label >Seriennummer:</label>
		<input type="text" id="seriennummerAnzeige" readonly="readonly" value="Y1X5C9V7B5N3M" />
		
	<div class="status-text">
	<div class="status invalid">
		fälschung
	</div>
	<p>	ACHTUNG, bei dem von Ihnen eingescannten Medikament handelt es sich um eine Fälschung. </p>
	<p>	Diese Seriennummer wurde im SMVS bereits ausgecheckt. Bitte nehmen Sie mit dem Lieferanten Kontakt auf. </p>
	<p>	<b> Das Medikament muss gesperrt und in Quarantäne verschoben werden. </b> </p>
	</div>
			
	<?php
	$to = "bestellservice@streuli-pharma.ch";
	$subject = urlencode('Lieferung mit bereits existierender Seriennummer');
	$body = urlencode("Guten Tag ANSPRECHPARTNER,

	Mit Ihrer Lieferung (NUMMER, DATUM) haben wir folgende bereits existierende SERIENNUMMER: Y1X5C9V7B5N3M,
	ARTIKEL: Panotile Tropfen 8ml 40 Stk erhalten.
	
	Wir bitten Sie um Kontaktaufnahme um die notwendigen Schritte einzuleiten.

	Mit freundlichen Grüssen
	
	ABSENDER mit sämtlichen Kontaktdaten
	------
	Created by INARI");

	$urlGrossist = "mailto:$to?subject=$subject&body=$body";	
	
	$to = "info@zambon.com";
	$subject = urlencode('Lieferung mit bereits existierender Seriennummer');
	$body = urlencode("Guten Tag ANSPRECHSPARTNER,

	Mit Ihrer Lieferung (NUMMER, DATUM) haben wir folgende bereits existierende SERIENNUMMER: Y1X5C9V7B5N3M,
	ARTIKEL: Panotile Tropfen 8ml 40 Stk mit der CHARGE: jkl789 vom DATUM: 22.02.2018 erhalten.
	
	Wir bitten Sie um Kontaktaufnahme um die notwendigen Schritte einzuleiten.

	Mit freundlichen Grüssen
	
	ABSENDER mit sämtlichen Kontaktdaten
	------
	Created by INARI");

	$urlHersteller = "mailto:$to?subject=$subject&body=$body";	
?>

		<div class="buttons">
			<a class="mail" id="grossist" target="_blank" href="<?= $urlGrossist ?>">
				<i class="fa fa-envelope-o"></i>
				<span>Grossist</span>	
			</a>

			<a class="mail" id="hersteller" target="_blank" href="<?= $urlHersteller ?>">
				<i class="fa fa-envelope-o"></i>
				<span>Hersteller</span>
			</a>			
		
		</div>

	</div>
	
	<a id="prev" href="scanner3.php"> &laquo; </a>
	<a id="next" href="index.php"> &raquo; </a>
</body>
  
   </body>
   </html<