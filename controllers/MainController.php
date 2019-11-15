<?php

namespace app\controllers;

use app\models\SoulEntity;
use Yii;
use yii\web\Controller;

/**
 * Class MainController
 * @package app\controllers
 */
class MainController extends Controller
{
    public function actionIndex()
    {
        Yii::$app->view->title = '毒鸡汤 - 壮士可要来一碗！';

        return $this->render('index');
    }

    /**
     * 随机一条鸡汤
     *
     * @return object
     * @throws \yii\base\InvalidConfigException
     */
    public function actionGetOneSoulByRand()
    {
        $entity = SoulEntity::find()
            ->orderBy('RAND()')
            ->one();

        return Yii::createObject([
            'class' => 'yii\web\Response',
            'format' => \yii\web\Response::FORMAT_JSON,
            'data' => [
                'code' => 200,
                'message' => '',
                'result' => [
                  'list'=>$entity,
                  'logo_url'=> Yii::$app->request->getHostInfo().'/images/logo.png'
                ]
            ]
        ]);
    }
}
