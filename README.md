Yii 2 Basic Project Template adminLTE 2.1.1
===========================================

CONFIGURATION
-------------

Alter and add into the SiteController.

~~~
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(Yii::$app->user->loginUrl);
    }

    public function beforeAction($action)
    {
        if (parent::beforeAction($action)) {
            // change layout for error action
            if ($action->id=='login')
                 $this->layout = 'login';
            return true;
        } else {
            return false;
        }
    }
~~~

Alter the method behaviors()

alter 'config/web.php'

set array keys:

~~~
    'layout'=>'column2',
    'layoutPath'=>'@app/themes/adminLTE/layouts',

    'components' => [
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                ''=>'site/index',
                '<action:(index|login|logout)>'=>'site/<action>',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>'
            ],
        ],

        Set the views path theme

        'view' => [
            'theme' => [
                'pathMap' => ['@app/views' => '@app/themes/adminLTE'],
                'baseUrl' => '@web/../themes/adminLTE',
            ],
        ],

     ]
~~~

Config gii to generator from custom

~~~
$config['modules']['gii'] = [
            'class' => 'yii\gii\Module',
            'generators' => [ //here
                'crud' => [ // generator name
                    'class' => 'yii\gii\generators\crud\Generator', // generator class
                    'templates' => [ //setting for out templates
                        'custom' => '@vendor/bmsrox/yii-adminlte-crud-template', // template name => path to template
                    ]
                ]
            ],
        ];
~~~

