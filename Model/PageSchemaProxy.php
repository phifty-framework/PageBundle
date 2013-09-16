<?php
namespace PageBundle\Model;

use LazyRecord;
use LazyRecord\Schema\RuntimeSchema;
use LazyRecord\Schema\Relationship;

class PageSchemaProxy extends RuntimeSchema
{

    public static $column_names = array (
  0 => 'title',
  1 => 'subtitle',
  2 => 'html_title',
  3 => 'html_subtitle',
  4 => 'content',
  5 => 'identity',
  6 => 'created_on',
  7 => 'updated_on',
  8 => 'created_by',
  9 => 'updated_by',
  10 => 'id',
  11 => 'lang',
);
    public static $column_hash = array (
  'title' => 1,
  'subtitle' => 1,
  'html_title' => 1,
  'html_subtitle' => 1,
  'content' => 1,
  'identity' => 1,
  'created_on' => 1,
  'updated_on' => 1,
  'created_by' => 1,
  'updated_by' => 1,
  'id' => 1,
  'lang' => 1,
);
    public static $mixin_classes = array (
  0 => 'Phifty\\Model\\Mixin\\I18NSchema',
  1 => 'Phifty\\Model\\Mixin\\MetadataSchema',
);
    public static $column_names_include_virtual = array (
  0 => 'title',
  1 => 'subtitle',
  2 => 'html_title',
  3 => 'html_subtitle',
  4 => 'content',
  5 => 'identity',
  6 => 'created_on',
  7 => 'updated_on',
  8 => 'created_by',
  9 => 'updated_by',
  10 => 'id',
  11 => 'lang',
);

    const schema_class = 'PageBundle\\Model\\PageSchema';
    const collection_class = 'PageBundle\\Model\\PageCollection';
    const model_class = 'PageBundle\\Model\\Page';
    const model_name = 'Page';
    const model_namespace = 'PageBundle\\Model';
    const primary_key = 'id';
    const table = 'pages';
    const label = 'Page';

    public function __construct()
    {
        /** columns might have closure, so it can not be const */
        $this->columnData      = array( 
  'title' => array( 
      'name' => 'title',
      'attributes' => array( 
          'type' => 'varchar(512)',
          'isa' => 'str',
          'size' => 512,
          'label' => '頁面標題',
        ),
    ),
  'subtitle' => array( 
      'name' => 'subtitle',
      'attributes' => array( 
          'type' => 'varchar(512)',
          'isa' => 'str',
          'size' => 512,
          'label' => '頁面子標題',
        ),
    ),
  'html_title' => array( 
      'name' => 'html_title',
      'attributes' => array( 
          'type' => 'varchar(512)',
          'isa' => 'str',
          'size' => 512,
          'label' => '頁面標題 HTML',
        ),
    ),
  'html_subtitle' => array( 
      'name' => 'html_subtitle',
      'attributes' => array( 
          'type' => 'varchar(512)',
          'isa' => 'str',
          'size' => 512,
          'label' => '頁面副標題',
        ),
    ),
  'content' => array( 
      'name' => 'content',
      'attributes' => array( 
          'type' => 'text',
          'isa' => 'str',
          'label' => '內文 HTML',
        ),
    ),
  'identity' => array( 
      'name' => 'identity',
      'attributes' => array( 
          'type' => 'varchar(120)',
          'isa' => 'str',
          'size' => 120,
          'label' => '頁面識別',
        ),
    ),
  'created_on' => array( 
      'name' => 'created_on',
      'attributes' => array( 
          'type' => 'timestamp',
          'isa' => 'DateTime',
          'timezone' => true,
          'null' => true,
          'renderAs' => 'DateTimeInput',
          'widgetAttributes' => array( 
            ),
          'label' => '建立於',
          'default' => function() {
                return date('c');
            },
        ),
    ),
  'updated_on' => array( 
      'name' => 'updated_on',
      'attributes' => array( 
          'type' => 'timestamp',
          'isa' => 'DateTime',
          'timezone' => true,
          'null' => true,
          'renderAs' => 'DateTimeInput',
          'widgetAttributes' => array( 
            ),
          'default' => function() {
                return date('c');
            },
          'label' => '更新時間',
        ),
    ),
  'created_by' => array( 
      'name' => 'created_by',
      'attributes' => array( 
          'type' => 'integer',
          'isa' => 'int',
          'refer' => 'User\\Model\\User',
          'default' => function() {
                if ( isset($_SESSION) ) {
                    return kernel()->currentUser->id;
                }
            },
          'renderAs' => 'SelectInput',
          'widgetAttributes' => array( 
            ),
          'label' => '建立者',
        ),
    ),
  'updated_by' => array( 
      'name' => 'updated_by',
      'attributes' => array( 
          'type' => 'integer',
          'isa' => 'int',
          'refer' => 'User\\Model\\User',
          'default' => function() {
                if ( isset($_SESSION) ) {
                    return kernel()->currentUser->id;
                }
            },
          'renderAs' => 'SelectInput',
          'widgetAttributes' => array( 
            ),
          'label' => '更新者',
        ),
    ),
  'id' => array( 
      'name' => 'id',
      'attributes' => array( 
          'type' => 'integer',
          'isa' => 'int',
          'primary' => true,
          'autoIncrement' => true,
        ),
    ),
  'lang' => array( 
      'name' => 'lang',
      'attributes' => array( 
          'type' => 'varchar(12)',
          'isa' => 'str',
          'size' => 12,
          'validValues' => function() {
                return array_flip( kernel()->locale->available() );
            },
          'label' => '語言',
          'default' => function() {
                return kernel()->locale->getDefault();
            },
          'renderAs' => 'SelectInput',
          'widgetAttributes' => array( 
            ),
        ),
    ),
);
        $this->columnNames     = array( 
  'title',
  'subtitle',
  'html_title',
  'html_subtitle',
  'content',
  'identity',
);
        $this->primaryKey      = 'id';
        $this->table           = 'pages';
        $this->modelClass      = 'PageBundle\\Model\\Page';
        $this->collectionClass = 'PageBundle\\Model\\PageCollection';
        $this->label           = 'Page';
        $this->relations       = array( 
  'created_by' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 4,
      'self_schema' => 'PageBundle\\Model\\PageSchema',
      'self_column' => 'created_by',
      'foreign_schema' => 'User\\Model\\User',
      'foreign_column' => 'id',
    ),
)),
  'updated_by' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 4,
      'self_schema' => 'PageBundle\\Model\\PageSchema',
      'self_column' => 'updated_by',
      'foreign_schema' => 'User\\Model\\User',
      'foreign_column' => 'id',
    ),
)),
);
        $this->readSourceId    = 'default';
        $this->writeSourceId    = 'default';
        parent::__construct();
    }

}
