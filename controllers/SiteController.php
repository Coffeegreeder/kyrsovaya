<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use app\assets\AppAsset;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\tovari;
use app\models\User;
use app\models\tag;
use app\models\cart;
use app\models\zakaz;
use app\models\adm;
use app\models\limit;
use app\models\redrec;
use app\models\search;
use app\models\sendemail;
use yii\data\Pagination;
use yii\widgets\LinkPage;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($tag=null,$search=null)
    {

        if (isset($tag)) {
            $query = tovari::find()->with('tag')->where(['id_tag'=>$tag]);
            $pages = new Pagination(['totalCount' =>count($query->all()), 'pageSize' => 12]);
            $model = $query->offset($pages->offset)
                ->limit($pages->limit)
                ->all();
        }else if (isset($_GET['search'])) {
            $query = tovari::find()->with('tag')->where(['like','name',$_GET['search']]);
            $pages = new Pagination(['totalCount' =>count($query->all()), 'pageSize' => 12]);
            $model = $query->offset($pages->offset)
                ->limit($pages->limit)
                ->all();
        }else {
            $model = tovari::find()->with('tag')->all();
            $query = tovari::find();
            $pages = new Pagination(['totalCount' =>count($query->all()), 'pageSize' => 12]);
            $model = $query->offset($pages->offset)
                ->limit($pages->limit)
                ->all();
        }
        $model1 = tag::find()->all();
        $model2= limit::find()->all();
        return $this->render('index',['model'=>$model,'model1'=>$model1, 'pages'=>$pages,'model2'=>$model2,'search'=>$search]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionAdmin()
    {
        if (!Yii::$app->user->isGuest) { 

        return $this->redirect('adminpanel'); 
        } 

        $model = new LoginForm(); 
        if ($model->load(Yii::$app->request->post()) && $model->login()) { 
            return $this->redirect('adminpanel'); 
        } 





        return $this->render('login', ['model' => $model,]); 
    }

       /**
     * Displays homepage.
     *
     * @return string
     */

    public function actionRedstuff($id)
    {
        $model = tovari::findOne($id);
         if($model->load(Yii::$app->request->post())&& $model->save())
        {
            $img=UploadedFile::getInstance($model,'foto');
            $imgpath='../web/images/shop/';
            if ($img) {
                $model->foto=$imgpath.$img;
                if ($model->save()) {
                        $img->saveAs($imgpath.$img);
                }    
            }
            $alert='Добавлено';
            return $this->render('redsruff', compact('model'));
        }
        return $this->render('redstuff', compact('model'));
    }

    public function actionRedtovari(){
        $model1 = tag::find()->all();
        $query = tovari::find();
        $model2= limit::find()->all();
        $pages = new Pagination(['totalCount' =>count($query->all()), 'pageSize' => 12]);
        $model = tovari::find()->with('tag')->all();
        $model = $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        return $this->render('redtovari',['model'=>$model,'model1'=>$model1, 'pages'=>$pages,'model2'=>$model2]);
    }
           /**
     * Displays homepage.
     *
     * @return string
     */

           /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionCart()
    {
        $model1=new zakaz();
        $model2= new limit();
        $ipus=Yii::$app->request->userIP;
        $model = cart::find()->where(['id_session'=>$ipus])->all();
        return $this->render('cart', compact('model','model1','model2'));
    }
	
	public function actionWatch($id=null)
    {   
		$stuff = tovari::find()->where('id = :id', [':id' => $id])->asArray()->all();
        $id=tovari::find()->select('id')->one();
	
		return $this->render('watch', compact('id','stuff'));
	}

    public function actionExit(){
        if (!Yii::$app->user->isGuest) { 
        Yii::$app->user->logout(); 
    } 
        return $this->goHome(); 
    }


    public function actionAdminpanel()
    {
        return $this->render('adminpanel');
    }

    public function actionAddtemplate()
    {
        $model=new tovari();
        if($model->load(Yii::$app->request->post()))
        {   
            $img=UploadedFile::getInstance($model,'foto');
            $imgpath='../web/images/shop/';
            if ($img) {
                $model->foto=$imgpath.$img;
                if ($model->save()) {
                        $img->saveAs($imgpath.$img);
                    }    
            }
            $alert='Добавлено';
            return $this->render('templateadds',['model'=>$model,'alert'=>$alert]);
        }
    }

    public function actionAddtag(){
        $model=new tag();
        return $this->render('addtag',compact('model'));
    }

    public function actiontagadds()
    {
        $model=new tag();
        if($model->load(Yii::$app->request->post())&& $model->save())
        {
            $alert='Добавлено';
            return $this->render('addtag',['model'=>$model,'alert'=>$alert]);
        }
    }

    public function actiontemplateadds(){
        $model=new tovari();

        return $this->render('templateadds',compact('model'));
    }

    public function actionAddcart($id){
        $crt=cart::find()->all();
        $ipus=Yii::$app->request->userIP;
        $model3 = new cart();
        $model3-> id_tovara=$id;
        $model3-> id_session=$ipus;
        if (!empty($crt)) {
            foreach ($crt as $key) {
                if ($key->id_tovara==$id) {
                    $crt1=cart::find()->where(['id_tovara'=>$id, 'id_session'=>$ipus])->one();
                    if (empty($crt1)) {
                        $model3->kolvo=1;
                        $model3->save();
                        return $this->redirect('index');
                    }
                    $crt1-> kolvo++;
                    $crt1->save();
                    return $this->redirect('index');
                }
            
            }
        $model3->kolvo=1;
        $model3->save();
        return $this->redirect('index');
        }   else {
                $model3->kolvo=1;
                $model3->save();
                return $this->redirect('index');
            }
    }

    

    public function actionDeletetov($id){
        $ye= cart::findOne($id);
        $ye->delete();
        return $this->redirect('cart');
    }

    public function actionZakaz($fullprice){
        $model=new zakaz();
        if($model->load(Yii::$app->request->post())&& $model->save())
        {   
            $ipus=Yii::$app->request->userIP;
            $fio=Yii::$app->request->post('zakaz')['fio'];
            $model->comment=Yii::$app->request->post('zakaz')['comment'];
            $model->card=Yii::$app->request->post('zakaz')['card'];
            $model->date=Yii::$app->request->post('zakaz')['date'];
            $model->cvc=Yii::$app->request->post('zakaz')['cvc'];
            $model->fullprice=$fullprice;
            $model->ip=$ipus;
            $model->save();
            $jop=Yii::$app->request->post('limit')['id_shop'];
            return $this->redirect(['adm?fio='.$fio.'&jop='.$jop,'model'=>$model,'jop'=>$jop]);
        }
    }

    public function actionAdm($fio,$jop){
        $ipus=Yii::$app->request->userIP;
        $model= cart::find()->where(['id_session'=>$ipus])->all();
        foreach ($model as $ewq) {
            $model3=new adm();
            $model3->id_tovara=$ewq->id_tovara;
            $limit = limit::find()->where(['id_tovara'=>$model3->id_tovara, 'id_shop'=>$jop])->one();
            if ($ewq->id_tovara==$model3->id_tovara) {
                $limit->kolvo --;
                $limit->save();
            }
            $model3->kolvo=$ewq->kolvo;
            $model2= zakaz::find()->where(['ip'=>$ipus, 'fio'=>$fio])->all();
            foreach ($model2 as $ewq) {
                $model3->id_zakaza=$ewq->id;
                break;
            }
            $model3->save();
        }
        return $this->redirect(['deletecart','model'=>$model,'model2'=>$model2,'model3'=>$model3,'limit'=>$limit]);
    }

    public function actionDeletecart(){
        $ipus=Yii::$app->request->userIP;
        $ye= cart::find()->where(['id_session'=>$ipus])->all();
        foreach ($ye as $key) {
        $key->delete();
        }
        return $this->redirect('index');
    }

    public function actionLookzak(){
        $model= adm::find()->with(['zakaz','tovari'])->all();
        return $this->render('lookzak',['model'=>$model]);
    }

    public function actionSendemail(){
        $mail= new sendemail();
        if ($mail->load(Yii::$app->request->post())&& $mail->save()) {
            return $this->redirect('contactus');
        }
    }
    public function actionLookmail(){
        $mail= sendemail::find()->all();
        return $this->render('lookmail',['mail'=>$mail]);
    }

    public function actionRedrec(){
        $new= new redrec();
        $ops= redrec::find()->where(['id'=>['1','2','3','4']])->all();
        $model= redrec::find()->with(['tovari'])->all();
        if ($new->load(Yii::$app->request->post())){
                $new->id_tovara = $key;
                $ops[0]->id_tovara=Yii::$app->request->post()['Redrec']['id_tovara']['1'];
                $ops[1]->id_tovara=Yii::$app->request->post()['Redrec']['id_tovara']['2'];
                $ops[2]->id_tovara=Yii::$app->request->post()['Redrec']['id_tovara']['3'];
                $ops[3]->id_tovara=Yii::$app->request->post()['Redrec']['id_tovara']['4'];
                $ops[0]->update();
                $ops[1]->update();
                $ops[2]->update();
                $ops[3]->update();
            return $this->render('redrec',['model'=>$model,'new'=>$new]);
        }
        return $this->render('redrec',['model'=>$model,'new'=>$new]);        
    }
}
