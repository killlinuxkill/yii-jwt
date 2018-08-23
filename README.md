# yii-jwt
    INSTALL
        composer require killlinuxkill/yii-jwt

    CONFIG
        'components'=>array(
            ...
            'JWT' => array(
                'class' => 'killlinuxkill\JWT',
                'key' => 'YOUR-SECRET-KEY',
                'alg' => 'DEFAULT-ALG'
            ),
            ...
        ),

    USE
