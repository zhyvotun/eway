<?php
$this->title = "TestоВАЯ страничка";
foreach ($list as $item):?>
    <h1><a href="<?php echo Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']]); ?>">
            <?php echo $item['title']; ?></a></h1>
    <p><?php echo $item['content']; ?></p>

    <hr>
<?php endforeach;

/** s
 * Created by PhpStorm.
 * User: zhyvotun
 * Date: 25.10.18
 * Time: 16:52
 */