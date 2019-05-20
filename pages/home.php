<?php





$datas = \App\entity\Article::getLast();
/**
 * @var $data App\entity\Article
 */
foreach ($datas as $data):?>
   <p><?= $data->getExtrait()?></p>
<?php endforeach ?>

