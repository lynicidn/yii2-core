<?php

namespace fourteenmeister\core;

use Yii;

class ActiveRecord extends \yii\db\ActiveRecord
{

    protected $isChanged;

    public function beforeSave($insert)
    {
        $result = array_diff_assoc($this->attributes, $this->oldAttributes);
        $this->isChanged = empty($result) ? false : true;
        $session = Yii::$app->session;
        if(!$this->isChanged) {
            $session->setFlash('error', 'Внимание! Данные не изменены.');
            return false;
        }
        else {
            $session->removeAllFlashes();
        }
        return parent::beforeSave($insert);
    }

    public function isChanged() {
        return $this->isChanged;
    }

}