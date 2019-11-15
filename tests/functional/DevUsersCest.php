<?php

/**
 * This is the model cest for table "dev_users".
 *
 * @property int $id
 * @property string $username 用户姓名
 * @property string $password 用户密码
 * @property string $salt 加密盐
 * @property int $status 状态
 * @property string $register_ip 注册ip
 * @property int $lastvisit_time 最后一次访问时间
 * @property string $lastvisit_ip 最后一次访问ip
 * @property int $register_time 注册时间
 * @property int $login_count 登入次数
 */
class DevUsersCest
{
    /**
    *
    * @param FunctionalTester $I
    * @throws Throwable
    * @throws \yii\base\Exception
    * @throws \yii\db\StaleObjectException
    */
    public function tryToTestDevUsersCurd(FunctionalTester $I)
    {
        //创建一个测试模型实例
        $model = new \app\models\DevUsers;
        
        $I->assertEmpty($model->id, "id 初始值为null");
            
        $I->assertEmpty($model->username, "username 初始值为null");
            
        $I->assertEmpty($model->password, "password 初始值为null");
            
        $I->assertEmpty($model->salt, "salt 初始值为null");
            
        $I->assertEmpty($model->status, "status 初始值为null");
            
        $I->assertEmpty($model->register_ip, "register_ip 初始值为null");
            
        $I->assertEmpty($model->lastvisit_time, "lastvisit_time 初始值为null");
            
        $I->assertEmpty($model->lastvisit_ip, "lastvisit_ip 初始值为null");
            
        $I->assertEmpty($model->register_time, "register_time 初始值为null");
            
        $I->assertEmpty($model->login_count, "login_count 初始值为null");
            
        $id = \app\common\Helper::random(9, true);

        //todo 判断随机生成的主键是否已经存在
        $model->id =$id;
        $I->assertEquals($model->id,$id);
            
        $username = \app\common\Helper::random(9, true);
        $model->username =$username;
        $I->assertEquals($model->username,$username);
            
        $password = \app\common\Helper::random(9, true);
        $model->password =$password;
        $I->assertEquals($model->password,$password);
            
        $salt = \app\common\Helper::random(9, true);
        $model->salt =$salt;
        $I->assertEquals($model->salt,$salt);
            
        $status = \app\common\Helper::random(9, true);
        $model->status =$status;
        $I->assertEquals($model->status,$status);
            
        $register_ip = \app\common\Helper::random(9, true);
        $model->register_ip =$register_ip;
        $I->assertEquals($model->register_ip,$register_ip);
            
        $lastvisit_time = \app\common\Helper::random(9, true);
        $model->lastvisit_time =$lastvisit_time;
        $I->assertEquals($model->lastvisit_time,$lastvisit_time);
            
        $lastvisit_ip = \app\common\Helper::random(9, true);
        $model->lastvisit_ip =$lastvisit_ip;
        $I->assertEquals($model->lastvisit_ip,$lastvisit_ip);
            
        $register_time = \app\common\Helper::random(9, true);
        $model->register_time =$register_time;
        $I->assertEquals($model->register_time,$register_time);
            
        $login_count = \app\common\Helper::random(9, true);
        $model->login_count =$login_count;
        $I->assertEquals($model->login_count,$login_count);
            
        //ensure Create
        $model->save();
        
        $I->assertNotEmpty($model->id)
        
        $I->assertEquals($model->id,$id);
    
        $I->assertEquals($model->username,$username);
    
        $I->assertEquals($model->password,$password);
    
        $I->assertEquals($model->salt,$salt);
    
        $I->assertEquals($model->status,$status);
    
        $I->assertEquals($model->register_ip,$register_ip);
    
        $I->assertEquals($model->lastvisit_time,$lastvisit_time);
    
        $I->assertEquals($model->lastvisit_ip,$lastvisit_ip);
    
        $I->assertEquals($model->register_time,$register_time);
    
        $I->assertEquals($model->login_count,$login_count);
    
        
        $I->assertTrue($model->refresh());
        
        // ensure Update
        $id = \app\common\Helper::random(9, true);
        $model->id =$id;
        $I->assertEquals($model->id,$id);
        
        $username = \app\common\Helper::random(9, true);
        $model->username =$username;
        $I->assertEquals($model->username,$username);
        
        $password = \app\common\Helper::random(9, true);
        $model->password =$password;
        $I->assertEquals($model->password,$password);
        
        $salt = \app\common\Helper::random(9, true);
        $model->salt =$salt;
        $I->assertEquals($model->salt,$salt);
        
        $status = \app\common\Helper::random(9, true);
        $model->status =$status;
        $I->assertEquals($model->status,$status);
        
        $register_ip = \app\common\Helper::random(9, true);
        $model->register_ip =$register_ip;
        $I->assertEquals($model->register_ip,$register_ip);
        
        $lastvisit_time = \app\common\Helper::random(9, true);
        $model->lastvisit_time =$lastvisit_time;
        $I->assertEquals($model->lastvisit_time,$lastvisit_time);
        
        $lastvisit_ip = \app\common\Helper::random(9, true);
        $model->lastvisit_ip =$lastvisit_ip;
        $I->assertEquals($model->lastvisit_ip,$lastvisit_ip);
        
        $register_time = \app\common\Helper::random(9, true);
        $model->register_time =$register_time;
        $I->assertEquals($model->register_time,$register_time);
        
        $login_count = \app\common\Helper::random(9, true);
        $model->login_count =$login_count;
        $I->assertEquals($model->login_count,$login_count);
        
        
        $model->save();
        
        $I->assertEquals($model->id,$id);
    
        $I->assertEquals($model->username,$username);
    
        $I->assertEquals($model->password,$password);
    
        $I->assertEquals($model->salt,$salt);
    
        $I->assertEquals($model->status,$status);
    
        $I->assertEquals($model->register_ip,$register_ip);
    
        $I->assertEquals($model->lastvisit_time,$lastvisit_time);
    
        $I->assertEquals($model->lastvisit_ip,$lastvisit_ip);
    
        $I->assertEquals($model->register_time,$register_time);
    
        $I->assertEquals($model->login_count,$login_count);
    
        
        $I->assertTrue($model->refresh());
        

        // ensure Retrieve
        $primaryKey = $model->primaryKey;
        $modelRecord = $model::findOne($primaryKey);
        $I->assertNotEmpty($modelRecord);
        $I->assertEquals($model::className(), get_class($modelRecord));
        
        $I->assertEquals($model->id,$id);
    
        $I->assertEquals($model->username,$username);
    
        $I->assertEquals($model->password,$password);
    
        $I->assertEquals($model->salt,$salt);
    
        $I->assertEquals($model->status,$status);
    
        $I->assertEquals($model->register_ip,$register_ip);
    
        $I->assertEquals($model->lastvisit_time,$lastvisit_time);
    
        $I->assertEquals($model->lastvisit_ip,$lastvisit_ip);
    
        $I->assertEquals($model->register_time,$register_time);
    
        $I->assertEquals($model->login_count,$login_count);
    
        
        //ensure del
        $model->delete();
        $I->assertFalse($model->refresh());
}


}
