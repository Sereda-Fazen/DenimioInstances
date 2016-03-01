<?php
use \Step\Acceptance;

class TestCest {



    function loginWrongEmail(AcceptanceTester $I, \Page\Login $loginPage) {
        $loginPage->login('test@test.com', '123456');
        $I->see('Invalid login or password.', 'li.error-msg');
        $I->comment('Expected result: Please enter a valid email address.');
    }

    function forgotSuccess(Step\Acceptance\ForgotPassSteps $I, \Page\ForgotPass $forgotPage)
    {
        $forgotPage->forgot('denimio_test@yahoo.com');
    }

    function enterNewPass (Step\Acceptance\ForgotPassSteps $I)
    {
        $I->gMailAuth();
        $I->remoteWindow();
        $I->newPass();
    }


    function deleteOldMsg(Step\Acceptance\LoginSteps $I, Page\ForgotPass $deleteMsg){
        $deleteMsg->deleteMsg();

    }












}
