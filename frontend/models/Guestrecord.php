<?php
namespace app\models\form;

use app\models\Guestbook;
use app\models\Recordguestbook;
use Yii;
use yii\base\Model;
use yii\widgets\ActiveForm;

class GuestrecordForm extends Model
{
    private $guestbook;
    private $record_guestbook;

    public function rules()
    {
        return [
            [['guestbook'], 'required'],
            [['record_guestbook'], 'safe'],
        ];
    }

    public function afterValidate()
    {
        $error = false;
        if (!$this->guestbook->validate()) {
            $error = true;
        }
        if (!$this->record_guestbook->validate()) {
            $error = true;
        }
        if ($error) {
            $this->addError(null); // add an empty error to prevent saving
        }
        parent::afterValidate();
    }

    public function save()
    {
        if (!$this->validate()) {
            return false;
        }
        $transaction = Yii::$app->db->beginTransaction();
        if (!$this->guestbook->save()) {
            $transaction->rollBack();
            return false;
        }
        $this->record_guestbook->id_guestbook = $this->guestbook->id;
        if (!$this->record_guestbook->save(false)) {
            $transaction->rollBack();
            return false;
        }
        $transaction->commit();
        return true;
    }

    public function getGuestbook()
    {
        return $this->guestbook;
    }

    public function setGuestbook($guestbook)
    {
        if ($guestbook instanceof Guestbook) {
            $this->guestbook = $guestbook;
        } else if (is_array($guestbook)) {
            $this->guestbook->setAttributes($guestbook);
        }
    }

    public function getRecordguestbook()
    {
        if ($this->record_guestbook === null) {
            if ($this->guestbook->isNewRecord) {
                $this->record_guestbook = new Recordguestbook();
                $this->record_guestbook->loadDefaultValues();
            } else {
                $this->record_guestbook = $this->guestbook->record_guestbook;
            }
        }
        return $this->record_guestbook;
    }

    public function setRecordguestbook($record_guestbook)
    {
        if (is_array($record_guestbook)) {
            $this->record_guestbook->setAttributes($record_guestbook);
        } elseif ($record_guestbook instanceof Recordguestbook) {
            $this->record_guestbook = $record_guestbook;
        }
    }

    public function errorSummary($form)
    {
        $errorLists = [];
        foreach ($this->getAllModels() as $id => $model) {
            $errorList = $form->errorSummary($model, [
                'header' => '<p>Please fix the following errors for <b>' . $id . '</b></p>',
            ]);
            $errorList = str_replace('<li></li>', '', $errorList); // remove the empty error
            $errorLists[] = $errorList;
        }
        return implode('', $errorLists);
    }

    private function getAllModels()
    {
        return [
            'Guestbook' => $this->guestbook,
            'Recordguestbook' => $this->record_guestbook,
        ];
    }
}

