<?php

namespace app\modules\photobank\models;

use Yii;
use yii\base\Model;

class PhotobankForm extends Model
{
    public $files;
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['files'], 'file', 'maxFiles' => 5],
        ];
    }
    
    public function createEachModel()
    {
       
    }
}
