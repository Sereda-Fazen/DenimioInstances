<?php
use \Step\Acceptance;

class TestCest {


    function MyAddress(\Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $I->login();
        $MyAccountPage->accountAddress('alex', 'sereda', '+39063636369', 'Test12', 'Kharkov', '54423', 'Kharkov');
        $I->waitForElement('li.success-msg');
        $I->comment('Expected result: The address has been saved.');
        $I->waitAlertWindow();
        $I->comment('Expected result: The address has been deleted.');
        $MyAccountPage->accountAddress('alex', 'sereda', '+39063636369', 'Test12', 'Kharkov', '54423', 'Kharkov');
        $I->waitForElement('li.success-msg');
        $I->comment('Expected result: The address has been saved.');
    }












}
