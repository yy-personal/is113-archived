<?php

class WiseMan {
    // Constant QUOTES is an associative array whose 
    //  key is category and
    //  value is an array of quotes (String)
    // Note: the number of categories and number of quotes may change.
    const QUOTES = [
        'love' => [
            'We always believe our first love is our last, and our last love our first.',
            'The art of love is largely the art of persistence.'
        ],

        'life' => [
            'There are many ways of going forward, but only one way of standing still.',
            'No one ever finds life worth living - one has to make it worth living.',
            'When one door closes, another opens',
            'Life is 10% what happens to us and 90% how we react to it.'
        ],

        'friend' => [
            'True friendship comes when the silence between two people is comfortable.',
            'A friend is someone who gives you total freedom to be yourself.',
            'A true friend never gets in your way unless you happen to be going down.',
        ]
    ];

    // TODO: Add code according to the comments below

    // private attribute category
    private $category;

    // Constructor that takes in 1 parameter $category and set it to its attribute category.
    public function __construct($category) {
        $this->category = $category;
    }

    // Public method getQuote() 
    // 1.  Get the list of quotes from the constant QUOTES for this object's category.
    //     Do NOT hard code.  The number of categories and number of quotes may change.
    //      Assumptions: 
    //      a.  Attribute category will always contain a valid value
    //      b.  There is at least 1 quote (String) per category.
    //
    // 2.  Return a random quote from the retrieved list.
    public function getQuote() {
        // 1.  Get the list of quotes from the constant QUOTES for this object's category.
        $quotes = self::QUOTES[ $this->category ];
        $size = count( $quotes );

        // 2.  Return a random quote from the retrieved list.
        $i = rand(0, $size-1);
        return $quotes[ $i ];
    }
    
}