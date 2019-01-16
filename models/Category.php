<?php
/**
 * Created by PhpStorm.
 * User: Evil-Neighbour
 * Date: 15.01.2019
 * Time: 12:03
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
          return 'category';
    }

    public function getCategories() {
        return Category::find()->asArray()->all();
    }

}