<?php

/** @var \yii\web\View $this */
//use app\assets\ElementUI;
use app\assets\VueJs;
use yii\helpers\Html;

VueJs::register($this);
//ElementUI::register($this);
$this->off(\yii\web\View::EVENT_END_BODY, [\yii\debug\Module::getInstance(), 'renderToolbar']);

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <meta name="description"
              content="我们精心熬制了有屎以来最毒1000多条经典毒鸡汤,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。">
        <meta name="keywords" content="鸡汤,毒鸡汤,馊鸡汤">
        <meta http-equiv="Cache-Control" content="no-siteapp">
        <meta property="og:title" content="<?= Html::encode($this->title) ?>"/>
        <meta property="og:site_name" content="<?= Html::encode($this->title) ?>"/>
        <meta property="og:description" content="我们精心熬制了有屎以来最毒1000多条经典毒鸡汤,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。"/>
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="alternate icon" type="image/png" href="icon.png">
        <link href="./css/min.css" rel="stylesheet">
      <?php $this->head() ?>
    </head>
    <?php $this->beginBody() ?>
    <div id="app">
        <div class="top-wrap" style="position: absolute; top: 1vh;width: 100%;z-index: 999">
            <div class="container">
                <div class="row" style="margin-top: 30px;">
                    <div class="col">
                        <img src="./images/logo.png">
                    </div>
                    <div class="col">
                        <div class="float-right" style="padding-top: 0px;">
                            <a class="btn btn-primary btn-filled btn-xs" href="https://github.com/BinZhiZhu/toxic-chicken-soup">开源</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-wrapper" style="position: relative; top: -6vh;">
            <div class="container main-sentence justify-content-center text-center">
                <span id="sentence" style="font-size: 2rem;">{{title}}</span>
            </div>
        </div>
        <div class="foot-1" style="position: absolute; bottom: 7vh;width: 100%;">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <p class="lead text">截屏分享朋友</p>
                        <span class="btn btn-primary btn-filled btn-xs"><button class="btn btn-primary btn-filled btn-xs" @click="getSoulList()">再来一碗</button></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        new Vue({
            el: '#app',
            data() {
                return {
                    title: '',
                    fit: 'none',
                    logo_url: '',
                };
            },
            created: function () {
                this.getSoulList()
            },
            methods: {
                getSoulList() {
                    let url = '<?php echo \yii\helpers\Url::toRoute('main/get-one-soul-by-rand');?>';
                    axios.post(url)
                        .then(response => {
                            const resp = response.data;
                            console.log('获取soul结果', resp);
                            this.title = resp.result.list.title
                            this.logo_url = resp.result.logo_url
                        })
                        .catch(error => {
                            console.log(error)
                        });
                }
            },
        });
    </script>
    </body>
    </html>
<?php $this->endBody() ?>
    </html>
<?php $this->endPage() ?>