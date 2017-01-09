<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 07.05.2016
 * Time: 10:28
 */

namespace app\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord{

    public static function tableName(){
        return 'category';
    }

    public function getProducts(){
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

} 