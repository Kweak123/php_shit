<?php

namespace app\controllers;

use app\models\Book;
use Yii;

class BooksController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Book();

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Book added');
            return $this->redirect(['books/index']);
        }


        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $model = Book::findOne($id);
        $model -> delete();
        Yii::$app->session->setFlash('success', 'Book has been deleted');
        return $this->redirect(['books/index']);
    }

    public function actionIndex()
    {
        $booksList = Book::find()->all();
        return $this->render('index', [
            'booksList' => $booksList,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Book::findOne($id);

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Book has been updated');
            return $this->redirect(['books/index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

}
