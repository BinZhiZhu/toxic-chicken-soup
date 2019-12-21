<?php

namespace app\controllers;

use app\models\SoulEntity;
use yii\web\Controller;

/**
 * Class CronController
 * @package app\controllers
 */
class CronController extends Controller
{
    public function actionRun()
    {
        /** @var SoulEntity $entity */
        $entity = SoulEntity::find()
            ->orderBy('RAND()')
            ->one();

        //TODO 随机读取一条记录去推送

//        https://api.day.app/S2hoyLizWTiXYT2TyZ6G86/推送标题/这里改成你自己的推送内容


    }

}