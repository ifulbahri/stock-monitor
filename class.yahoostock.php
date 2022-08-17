<?php
//Class to fetch stock data from Yahoo! Finance

class YahooStock {
    
    private $stocks = array();
	private $format;
    public function addStock($stock)
    {
        $this->stocks[] = $stock;
    }
	
	public function addFormat($format)
    {
        $this->format = $format;
    }

    public function getQuotes()
    {        
        $result = array();		
		$format = $this->format;
        
        foreach ($this->stocks as $stock)
        {            
			//fetch data
            $s = file_get_contents("https://query1.finance.yahoo.com/v7/finance/download/AAPL?period1=1577982443&period2=1609604843&interval=1d&events=history&includeAdjustedClose=true");
            
            $data = explode( ',', $s);
			
            $result[$stock] = $data;
        }
        return $result;
    }
}
