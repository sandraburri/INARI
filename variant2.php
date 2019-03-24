 <html>
     
<head>
<link href="css/inari.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="background variants"></div>

	<input type="text" id="mediName1" class="highlight" readonly="readonly" value="Ponstan Kapseln 250 mg 100 Stk" />
	<input type="text" id="ean" class="highlight" readonly="readonly" value="9313212106967" />
	<input type="text" id="lgort1" class="highlight" readonly="readonly" value="5678" />
	<input type="text" id="beleg" class="highlight" readonly="readonly" value="8765" />
	<input type="text" id="charge" class="highlight" readonly="readonly" value="fgh456" />
	<input type="text" id="datum" class="highlight" readonly="readonly" value="06.03.2018" />
	<input type="text" id="lgort2" class="highlight" readonly="readonly" value="5678" />
	<input type="text" id="mediName2" class="highlight" readonly="readonly" value="Ponstan Kapseln 250 mg 100 Stk" />
	
	<div class="inari-title">Inari</div>		
	<div class="inari">
		<label >Hersteller:</label>
		<input type="text" id="herstellerAnzeige" readonly="readonly" value="Pfizer PFE Switzerland GmbH" />
		
		<label >Verfalldatum:</label>
		<input type="text" id="verfalldatumAnzeige" readonly="readonly" value="03/2024" />
		
		<label >Seriennummer:</label>
		<input type="text" id="seriennummerAnzeige" readonly="readonly" value="Q9W8E7R6T5Z4U" />
			
		<div class="status-text">
			<div class="status invalid">
				fälschung
			</div>
			<p>	ACHTUNG, bei dem von Ihnen eingescannten Medikament handelt es sich möglicherweise um eine Fälschung. </p>
			<p>	Diese Seriennummer existiert im SMVS nicht. Bitte nehmen Sie mit dem Lieferanten Kontakt auf. </p>
			<p>	<b> Das Medikament muss gesperrt und in Quarantäne verschoben werden. </b> </p>
		</div>	

<?php
	$to = "info@galenica.com";
	$subject = urlencode('Lieferung mit inexistenter Seriennummer');
	$body = urlencode("Guten Tag ANSPRECHPARTNER,

	Mit Ihrer Lieferung (NUMMER, DATUM) haben wir folgende inexistente SERIENNUMMER: Q9W8E7R6T5Z4U,
	ARTIKEL: Ponstan Kapseln 250 mg 100 Stk erhalten.
	
	Wir bitten Sie, das Fehlen der Serialisierungsnummer umgehend abzuklären und mit uns Kontakt aufzunehmen, damit die notwendigen Schritte abgesprochen werden können.

	Mit freundlichen Grüssen
	
	ABSENDER mit sämtlichen Kontaktdaten
	------
	Created by INARI");

	$urlGrossist = "mailto:$to?subject=$subject&body=$body";	
	
	$to = "info.ch@pfizer.com";
	$subject = urlencode('Lieferung mit inexistenter Seriennummer');
	$body = urlencode("Guten Tag ANSPRECHSPARTNER,

	Mit Ihrer Lieferung (NUMMER, DATUM) haben wir folgende inexistente SERIENNUMMER: Q9W8E7R6T5Z4U,
	ARTIKEL: Ponstan Kapseln 250 mg 100 Stk mit der CHARGE: fgh456 vom DATUM: 06.03.2018 erhalten.
	
	Wir bitten Sie, das Fehlen der Serialisierungsnummer umgehend abzuklären und mit uns Kontakt aufzunehmen, damit die notwenigen Schritte abgesprochen werden können.

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
	
	<a id="prev" href="scanner2.php"> &laquo; </a>
	<a id="next" href="scanner3.php"> &raquo; </a>
</body>
  
   </body>
   </html<