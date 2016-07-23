<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 16/6/16
 * Time: 下午5:15
 */
return [
    'params' => [
        'DATA_BACKUP_PATH' => Yii::getAlias('database') . '/data/',
        'DATA_BACKUP_PART_SIZE' => 20971520,
        'DATA_BACKUP_COMPRESS' => 1,
        'DATA_BACKUP_COMPRESS_LEVEL' => 9,
    ]
];