<?php

namespace PageBundle\Action;

use WebAction\RecordAction\BulkRecordAction;

class BulkCopyPage extends BulkRecordAction
{
    public $recordClass = 'PageBundle\\Model\\Page';

    public function schema()
    {
        $this->param('lang')
            ->required();
        parent::schema();
    }

    public function run()
    {
        $bundle = \PageBundle\PageBundle::getInstance();

        $newRecord = new $this->recordClass;
        $records = $this->loadRecords();
        $newLang = $this->arg('lang');
        $newCategory = $this->arg('category_id');
        foreach($records as $record) {
            $args = $record->getData();
            // unset primary key for avoiding duplicated primary key
            unset($args['id']);

            if ($newLang) {
                $args['lang'] = $newLang;
            }
            $ret = $newRecord->create($args);
            if ( ! $ret->success ) {
                return $this->error($ret->exception);
            }
            if ( ! $newRecord->id ) {
                return $this->error('複製錯誤');
            }
        }
        return $this->success( count($records) . ' 個項目複製成功。');
    }
}

