<?php

namespace app\controllers;

use app\components\AdminBaseController;
use app\helpers\FileHelper;
use app\models\PetImage;
use Yii;
use app\models\Pet;
use app\models\PetSearch;
use yii\bootstrap\ActiveForm;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PetController implements the CRUD actions for Pet model.
 */
class PetController extends AdminBaseController
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Pet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pet model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Pet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Pet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->imageFiles = $model->petImages;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Pet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        foreach($model->petImages as $image) {
            @unlink($image->source_url);
        }
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pet::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionUpload($id) {
        $model = $this->findModel($id);

        $files = UploadedFile::getInstances($model, 'imageFiles');
        foreach($files as $file) {
            $image = new PetImage();
            if ($file) {

                $extension = explode('/', $file->type)[1];
                $fileName = 'images/pets/' . time() . '_' . rand(10000, 99999) . '.' . $extension;

                $file->saveAs($fileName);
                $image->source_url = $fileName;
                $image->pet_id = $model->id;
                if (!$image->save()) {
                    echo '<pre>';
                    var_dump($image->getErrors());
                    die();
                }


            }
        }
        return true;
    }

    public function actionAdd($index) {
        $model = new PetImage();
        $response = $this->renderPartial('/layouts/template-add',[
            'model' => $model,
            'attribute' => 'source_url',
            'index' => $index
        ]);
        return json_encode($response);
    }

    public function actionRemove($id) {
        /** @var PetImage $model */
        $model = PetImage::findOne(['id'=>$id]);
        @unlink($model->source_url);
        $model->delete();
        return;
    }
}