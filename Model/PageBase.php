<?php
namespace PageBundle\Model;
use LazyRecord\Schema\SchemaLoader;
use LazyRecord\Result;
use SQLBuilder\Bind;
use SQLBuilder\ArgumentArray;
use PDO;
use SQLBuilder\Universal\Query\InsertQuery;
use LazyRecord\BaseModel;
class PageBase
    extends BaseModel
{
    const SCHEMA_CLASS = 'PageBundle\\Model\\PageSchema';
    const SCHEMA_PROXY_CLASS = 'PageBundle\\Model\\PageSchemaProxy';
    const COLLECTION_CLASS = 'PageBundle\\Model\\PageCollection';
    const MODEL_CLASS = 'PageBundle\\Model\\Page';
    const TABLE = 'pages';
    const READ_SOURCE_ID = 'default';
    const WRITE_SOURCE_ID = 'default';
    const PRIMARY_KEY = 'id';
    const FIND_BY_PRIMARY_KEY_SQL = 'SELECT * FROM pages WHERE id = :id LIMIT 1';
    public static $column_names = array (
      0 => 'id',
      1 => 'title',
      2 => 'content',
      3 => 'handle',
      4 => 'created_on',
      5 => 'updated_on',
      6 => 'created_by',
      7 => 'updated_by',
      8 => 'lang',
    );
    public static $column_hash = array (
      'id' => 1,
      'title' => 1,
      'content' => 1,
      'handle' => 1,
      'created_on' => 1,
      'updated_on' => 1,
      'created_by' => 1,
      'updated_by' => 1,
      'lang' => 1,
    );
    public static $mixin_classes = array (
      0 => 'I18N\\Model\\Mixin\\I18NSchema',
      1 => 'CommonBundle\\Model\\Mixin\\MetaSchema',
    );
    protected $table = 'pages';
    public $readSourceId = 'default';
    public $writeSourceId = 'default';
    public function getSchema()
    {
        if ($this->_schema) {
           return $this->_schema;
        }
        return $this->_schema = SchemaLoader::load('PageBundle\\Model\\PageSchemaProxy');
    }
    public function getId()
    {
            return $this->get('id');
    }
    public function getTitle()
    {
            return $this->get('title');
    }
    public function getContent()
    {
            return $this->get('content');
    }
    public function getHandle()
    {
            return $this->get('handle');
    }
    public function getCreatedOn()
    {
            return $this->get('created_on');
    }
    public function getUpdatedOn()
    {
            return $this->get('updated_on');
    }
    public function getCreatedBy()
    {
            return $this->get('created_by');
    }
    public function getUpdatedBy()
    {
            return $this->get('updated_by');
    }
    public function getLang()
    {
            return $this->get('lang');
    }
}
