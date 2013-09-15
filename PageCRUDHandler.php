<?php
namespace PageBundle;

use Phifty\Bundle;
use Phifty\Routing\RouteSet;
use Phifty\Region;
use Phifty\CRUDHandler;
use PageBundle\PageBundle;

class PageCRUDHandler extends \AdminUI\CRUDHandler
{
    /* CRUD Attributes */
    public $modelClass = 'PageBundle\\Model\\Page';
    public $crudId     = 'pages';
    public $listColumns = array('title');
    public $canBulkEdit = true;
    public $canBulkCopy = false;

    public $listRightColumns = array(
        'updated_on',
        'created_on',
    );

    public function init()
    {
        parent::init();
        $this->plugin = PageBundle::getInstance();
    }
}
