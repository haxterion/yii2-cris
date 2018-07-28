<?php
namespace frontend\models;
use Yii;
use yii\base\Model;
use yii\base\InvalidParamException;
use common\models\User;

/**
 * Password reset form
 */
class ResetPasswordForm extends Model
{
    public $password;

    /**
     * @var \common\models\User
     */
    private $_user;


    /**
     * Creates a form model given a token.
     *
     * @param string $token
     * @param array $config name-value pairs that will be used to initialize the object properties
     * @throws \yii\base\InvalidParamException if token is empty or not valid
     */

    /**
     * @inheritdoc
     */
    public function rules()
    {   
        return [
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Resets password.
     *
     * @return bool if password was reset.
     */
    public function resetPassword()
    {
        $models = new User();
         $user = User::findOne(Yii::$app->session->get('__id'));
         //$user = User::findOne(3);
         //zvar_dump($user);
         // var_dump($this->password);
         // die();
           $user->password_hash = Yii::$app->security->generatePasswordHash($this->password); //$models->validatePassword($this->password);
            //$user->update(false); 
        // $user = $this->_user;
        // $user->setPassword($this->password);
        // $user->removePasswordResetToken();

        return $user->update(false);
    }
}
