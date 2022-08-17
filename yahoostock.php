<?php
include_once('class.yahoostock.php');

$objYahooStock = new YahooStock;
$objYahooStock->addFormat("snl1d1t1cv"); 
$objYahooStock->addStock("AAPL");

foreach( $objYahooStock->getQuotes() as $code => $stock)
{
	print(" AAPL | ".$stock[6]); 
	print(" | ".$stock[7]); 
	print(" | ".$stock[8]); 
	print(" | ".$stock[9]); 
	print(" | ".$stock[10]); 
	print(" | ".$stock[11]); 
	
}
?>
</table>
