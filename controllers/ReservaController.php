<?php

namespace app\controllers;

use app\models\Reserva;
use app\models\ReservaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReservaController implements the CRUD actions for Reserva model.
 */
class ReservaController extends Controller
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
     * Lists all Reserva models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ReservaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Reserva model.
     * @param int $ID_RESERVA Id Reserva
     * @param int $ID_USER Id User
     * @param int $ID_LABORATORIO Id Laboratorio
     * @param int $ID_HORARIOS Id Horarios
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_RESERVA, $ID_USER, $ID_LABORATORIO, $ID_HORARIOS)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_RESERVA, $ID_USER, $ID_LABORATORIO, $ID_HORARIOS),
        ]);
    }

    /**
     * Creates a new Reserva model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Reserva();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID_RESERVA' => $model->ID_RESERVA, 'ID_USER' => $model->ID_USER, 'ID_LABORATORIO' => $model->ID_LABORATORIO, 'ID_HORARIOS' => $model->ID_HORARIOS]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Reserva model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID_RESERVA Id Reserva
     * @param int $ID_USER Id User
     * @param int $ID_LABORATORIO Id Laboratorio
     * @param int $ID_HORARIOS Id Horarios
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID_RESERVA, $ID_USER, $ID_LABORATORIO, $ID_HORARIOS)
    {
        $model = $this->findModel($ID_RESERVA, $ID_USER, $ID_LABORATORIO, $ID_HORARIOS);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_RESERVA' => $model->ID_RESERVA, 'ID_USER' => $model->ID_USER, 'ID_LABORATORIO' => $model->ID_LABORATORIO, 'ID_HORARIOS' => $model->ID_HORARIOS]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Reserva model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID_RESERVA Id Reserva
     * @param int $ID_USER Id User
     * @param int $ID_LABORATORIO Id Laboratorio
     * @param int $ID_HORARIOS Id Horarios
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID_RESERVA, $ID_USER, $ID_LABORATORIO, $ID_HORARIOS)
    {
        $this->findModel($ID_RESERVA, $ID_USER, $ID_LABORATORIO, $ID_HORARIOS)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Reserva model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID_RESERVA Id Reserva
     * @param int $ID_USER Id User
     * @param int $ID_LABORATORIO Id Laboratorio
     * @param int $ID_HORARIOS Id Horarios
     * @return Reserva the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_RESERVA, $ID_USER, $ID_LABORATORIO, $ID_HORARIOS)
    {
        if (($model = Reserva::findOne(['ID_RESERVA' => $ID_RESERVA, 'ID_USER' => $ID_USER, 'ID_LABORATORIO' => $ID_LABORATORIO, 'ID_HORARIOS' => $ID_HORARIOS])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
