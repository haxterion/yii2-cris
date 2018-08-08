<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Guestbook;
use frontend\models\Recordguestbook;
use frontend\models\GuestbookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GuestbookController implements the CRUD actions for Guestbook model.
 */
class GuestbookController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Guestbook models.
     * @return mixed
     */
    public function BuatOrder()
    {
        
    }
    public function actionIndex()
    {
        $searchModel = new GuestbookSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Guestbook model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {   

        $model = new Guestbook();
        $modelr = new Recordguestbook();
        $modelr->load(Yii::$app->request->post('Recordguestbook'));
        // $test = Yii::$app->request->post('Recordguestbook');
        if (Yii::$app->request->post('Recordguestbook')['status'] == !NULL){


        $modelr->explanation = Yii::$app->request->post('Recordguestbook')['explanation'];
        $modelr->status = Yii::$app->request->post('Recordguestbook')['status'];
        $modelr->date_transaksi = Yii::$app->request->post('Recordguestbook')['date_transaksi'];
        $modelr->date_input = date('Y-m-d');
        $modelr->date_today = date('Y-m-d');
        $modelr->person_name = Yii::$app->user->identity->username;
        $modelr->price = Yii::$app->request->post('Recordguestbook')['price'];
        $model->price = Yii::$app->request->post('Recordguestbook')['price'];
        $modelr->id_guestbook = Yii::$app->request->post('Guestbook')['id'];
        $modelr->save();

        $update = Guestbook::findOne(['id', $id]);
        $update->status = Yii::$app->request->post('Recordguestbook')['status'];
        $update->date_transaksi = Yii::$app->request->post('Recordguestbook')['date_transaksi'];
        $update->date_input = date('Y-m-d');
        $update->date_today = date('Y-m-d');
        $update->price = Yii::$app->request->post('Recordguestbook')['price'];
        $update->person_name = Yii::$app->user->identity->username;
        $update->save();
    }
        $query1 = (new \yii\db\Query())
                    ->select(['*'])
                    ->from('record_guestbook')
                    ->where(['id_guestbook' => $id])
                    ->all();

        return $this->render('view', [
            // 'model1' => $model1,
            'model' => $this->findModel($id),
            'query1' => $query1,
        ]);

    }

    /**
     * Creates a new Guestbook model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    public function actionCreate()
    {
        
        $model = new Guestbook();
        $modelr = new Recordguestbook();
        $modelr->load(Yii::$app->request->post('Recordguestbook'));
        
        
        // $date_input = date(Y-m-d);
        
        $model->id_user = Yii::$app->user->id;
        $model->person_name = Yii::$app->user->identity->username;
        $modelr->id_user = Yii::$app->user->id;
        $modelr->person_name = Yii::$app->user->identity->username;
        // $modelr->id_guestbook = $model->id;
        $request = Yii::$app->request;
        $id = $request->get('id');
        
        if ($model->load(Yii::$app->request->post()) ){
            // var_dump($model->attributes);
            //var_dump($modelr->attributes);
            //var_dump($model->errors);
            //die();
            // $model->save();
            // $request = Yii::$app->request;
            $modelr->status = $_POST['Guestbook']['status'];
            
            $modelr->date_transaksi = $_POST['Guestbook']['date_transaksi'];
            $modelr->date_input = date('Y-m-d');
            $modelr->date_today = date('Y-m-d');
            $modelr->date_phone = date('Y-m-d'); 
            // $modelr->id_guestbook = $_GET['id'];

            if ($model->save(false)){
                $modelr->id_guestbook = $model->id;
                $modelr->save(false);
                return $this->redirect(['view', 'id' => $model->id]);
            }
            
           
            // $model->customer = $request->post('Guestbook')(['customer']);
            // $model->phone_number = $request->post('Guestbook')(['phone_number']);
            // $model->address = $request->post('Guestbook')(['address']);
            // $model->guest = $request->post('Guestbook')(['guest']);
            // $model->guest_address = $request->post('Guestbook')(['guest_address']);
            // $model->guest_pn = $request->post('Guestbook')(['guest_pn']);
            // $model->customer = $request->post('Guestbook')(['customer']);
            // $model->date_today = $request->post('Guestbook')(['date_today']);
            // $model->date_transaksi = $request->post('Guestbook')(['date_transaksi']);
            // $model->date_input = date(Y-m-d);
            // $model->status = $request->post('Guestbook')(['status']);
            // $model->id_user = $request->post('Guestbook')(['id_user']);
            // $model->person_name = $request->post('Guestbook')(['person_name']);
            
            // $modelr->id_guestbook = $request->post('Guestbook')(['id']);
            // $modelr->date_phone = $request->post('Guestbook')(['date_transaksi']);
            // $modelr->date_today = $request->post('Guestbook')(['date_today']);
            // $modelr->date_input = date(Y-m-d);
            // $modelr->date_transaksi = $request->post('Guestbook')(['date_transaksi']);
            // // $modelr->price = $request->post('Guestbook')(['price']);
            // $modelr->status = $request->post('Guestbook')(['status']);
            // $modelr->id_user = $request->post('Guestbook')(['id_user']);
            // $modelr->person_name = $request->post('Guestbook')(['person_name']);

            
        }

        return $this->render('create', [
            'model' => $model,
            'modelr' => $modelr,
        ]);
    }

    /**
     * Updates an existing Guestbook model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Guestbook model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Guestbook model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Guestbook the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Guestbook::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
