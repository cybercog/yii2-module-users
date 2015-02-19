<?php
/**
 * Activation email view.
 *
 * @var \yii\web\View $this View
 * @var \common\modules\users\models\User $user
 */
use yii\helpers\Html;
use yii\helpers\Url;
$url = Url::toRoute(['/users/guest/recovery-confirmation', 'token' => $user['access_token']], true); 
?>
<p><?=Yii::t('users.send', 'BODY_RECOVERY_HELLO {name}', ['name' => $user['username']])?></p>
<p><?=Yii::t('users.send', 'BODY_RECOVERY_TOKEN {url}', ['url' => Html::a(Html::encode($url), $url)])?></p>