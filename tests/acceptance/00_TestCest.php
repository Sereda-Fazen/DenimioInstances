<?php
use \Step\Acceptance;

class TestCest {


    function footerSubscribe(\Page\HomePage $homePage)
    {
        $homePage->subscribeEmptyField();
        $homePage->subscribeInvalidEmail('123qwerty');
        //    $homePage->subscribeIsNotEmail('dev.denimio@yahoo.com');
        $homePage->subscribeSuccess('johndoe@domain.com');
    }











}
