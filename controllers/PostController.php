<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\Post;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class PostController extends Controller
{
    public function actionIndex()
    {
        $model = Post::find()->all();
        return $this->render('index',['model'=>$model]);
    }

}