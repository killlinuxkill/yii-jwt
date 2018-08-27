# yii-jwt

# INSTALL
    composer require killwindows/yii-jwt

# CONFIG
    in main.php
```php
    'components'=>array(
        ...
        'JWT' => array(
            'class' => 'killwindows\JWT\JWT',
            'key' => 'YOUR-SECRET-KEY',
            'alg' => 'DEFAULT-ALG'
        ),
        ...
    ),
```
# USE
```php
    $token = ['id' => '45678', 'name' => 'Name'];
    $jwt = Yii::app()->JWT->encode($token);
    $decode = Yii::app()->JWT->decode($jwt);
