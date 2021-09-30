<?php
namespace app\models;

use yii\db\ActiveRecord;

class Book extends ActiveRecord
{
    public function rules()
    {
        return [
            [['bookName', 'author', 'publicationDate'], 'required'],
            [['bookName', 'author', 'publicationDate'], 'string', 'max' => 25],
        ];

    }
}