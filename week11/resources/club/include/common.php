<?php

// this will autoload the class that we need in our code
spl_autoload_register(function($class) {
 
    // we are assuming that it is in the same directory as common.php
    // otherwise we have to do
    // $path = 'path/to/' . $class . ".php"    
    $path =  $class . ".php";
    require $path; 
  
});

session_start();

function printErrors($errors) {
	print "<ul style='color:red;'>";
	
	foreach ($errors as $error) {
		print "<li>$error</li>";
	}
	
	print "</ul>";   
}



function printCodes($codes) {
    foreach($codes as $code) {
        echo "{$code->getID()}: '{$code-> getDescription()}'<br/>";
    }
}

function findCodeDesc($codes, $req_id) {
    foreach($codes as $code) {
        if ( $req_id == $code->getID() ) return $code-> getDescription();
    }
    return 'Not found';
}

function printQuotes($quotes, $userID = false) {
    $codeDAO = new CodeDAO();
    $userDAO = new UserDAO();
    $quoteDAO = new QuoteDAO();
    $quoteCategories = $codeDAO->getQuoteCategoryCodes();
    $emotions = $codeDAO->getEmotionCodes();
    

    if ( count($quotes) == 0 ) {
        echo "None<br/>";
    } else {
        foreach($quotes as $quote) {
            $category = findCodeDesc($quoteCategories, $quote->getCategoryID() );
            
            $user = $userDAO->getByID($quote->getCreatedByID() );
            echo "[$category] By {$user->getUsername()}: ";
    
            foreach ($emotions as $emotion) {
                $count = $quote->getEmotionCount($emotion->getID());
                echo "&nbsp;&nbsp;{$emotion->getDescription()} X $count";
            }
            echo "<br>
                {$quote->getQuote()}<br/>
            ";
    
            if ( $userID !== false ) {
                $emotionIDs = $quoteDAO->getReadQuoteEmotions($userID, $quote->getID());
                echo 'I ';
                $emotionDescs = [];
                foreach( $emotionIDs as $emotionID) {
                    $emotionDescs[] = findCodeDesc($emotions, $emotionID);
                }
                echo implode(', ',$emotionDescs) . ' this quote.<br>
                ';
            }
            echo '<br>
            ';
        }
    }




}


?>
