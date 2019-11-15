<?php

class UserCurdCest
{
    public function tryToTestCurd(FunctionalTester $I)
    {
        $model = new app\models\DevUsers();

        $I->assertEmpty($model->id, "id 初始值为null");

        $I->assertEmpty($model->username, "username 初始值为null");


    }
}