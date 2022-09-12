<?php

namespace app\controllers;

use app\models\Horarios;
use app\models\HorariosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HorariosController implements the CRUD actions for Horarios model.
 */
class HorariosController extends Controller
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
     * Lists all Horarios models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new HorariosSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Horarios model.
     * @param int $ID_HORARIOS Id Horarios
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_HORARIOS)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_HORARIOS),
        ]);
    }

    /**
     * Creates a new Horarios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Horarios();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID_HORARIOS' => $model->ID_HORARIOS]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Horarios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID_HORARIOS Id Horarios
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID_HORARIOS)
    {
        $model = $this->findModel($ID_HORARIOS);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_HORARIOS' => $model->ID_HORARIOS]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Horarios model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID_HORARIOS Id Horarios
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID_HORARIOS)
    {
        $this->findModel($ID_HORARIOS)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Horarios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID_HORARIOS Id Horarios
     * @return Horarios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_HORARIOS)
    {
        if (($model = Horarios::findOne(['ID_HORARIOS' => $ID_HORARIOS])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
