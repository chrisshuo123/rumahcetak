// MENGATUR UKURAN FONT KATA SESUAI DENGAN JUMLAH KATA //

$(function() {

    var $quote = $("p.highlighted");
    
    var $numWords = $quote.text().split(" ").length;
    
    if (($numWords >= 1) && ($numWords < 5)) {
        $quote.css("font-size", "27px");
    }
    else if (($numWords >= 6) && ($numWords < 15)) {
        $quote.css("font-size", "22px");
    }
    else if (($numWords >= 16) && ($numWords < 30)) {
        $quote.css("font-size", "17px");
    }
    else if (($numWords >= 30) && ($numWords < 60)) {
        $quote.css("font-size", "13px");
    }
    else {
        $quote.css("font-size", "10px"); // setkan note di MySql max 100 words
    }    
	
});

$(function() {

    var $quote = $("h3.highlighted");
    
    var $numWords = $quote.text().split(" ").length;
    
    if (($numWords >= 1) && ($numWords < 10)) {
        $quote.css("font-size", "40px");
    }
    else if (($numWords >= 10) && ($numWords < 20)) {
        $quote.css("font-size", "32px");
    }
    else if (($numWords >= 20) && ($numWords < 30)) {
        $quote.css("font-size", "28px");
    }
    else if (($numWords >= 30) && ($numWords < 40)) {
        $quote.css("font-size", "24px");
    }
    else {
        $quote.css("font-size", "20px");
    }    
	
});