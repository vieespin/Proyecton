<?php

namespace app\controllers;

use app\models\Laboratorios;
use app\models\LaboratoriosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LaboratoriosController implements the CRUD actions for Laboratorios model.
 */
class LaboratoriosController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Laboratorios models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new LaboratoriosSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Laboratorios model.
     * @param int $ID_LABORATORIO Id Laboratorio
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_LABORATORIO)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_LABORATORIO),
        ]);
    }

    /**
     * Creates a new Laboratorios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Laboratorios();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID_LABORATORIO' => $model->ID_LABORATORIO]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Laboratorios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID_LABORATORIO Id Laboratorio
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID_LABORATORIO)
    {
        $model = $this->findModel($ID_LABORATORIO);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_LABORATORIO' => $model->ID_LABORATORIO]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Laboratorios model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID_LABORATORIO Id Laboratorio
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID_LABORATORIO)
    {
        $this->findModel($ID_LABORATORIO)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Laboratorios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID_LABORATORIO Id Laboratorio
     * @return Laboratorios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_LABORATORIO)
    {
        if (($model = Laboratorios::findOne(['ID_LABORATORIO' => $ID_LABORATORIO])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
