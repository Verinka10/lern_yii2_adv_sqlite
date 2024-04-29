<?php

namespace app\modules\photobank\controllers;

use app\modules\photobank\models\Photobank;
use app\modules\photobank\models\PhotobankSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\modules\photobank\models\PhotobankForm;
use yii\web\ServerErrorHttpException;
use yii\rest\ActiveController;

/**
 * PhotobankController implements the CRUD actions for Photobank model.
 */
class ImagesController extends ActiveController
{
    public $modelClass = 'app\modules\photobank\models\Photobank';

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'view' => [
                'class' => 'yii\rest\ViewAction',
                'modelClass' => $this->modelClass,
                'checkAccess' => [$this, 'checkAccess'],
            ],
        ];
    }
}
