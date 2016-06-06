<?php
namespace PageBundle\Model;
use LazyRecord\Schema\RuntimeSchema;
use LazyRecord\Schema\RuntimeColumn;
use LazyRecord\Schema\Relationship;
class PageSchemaProxy
    extends RuntimeSchema
{
    const schema_class = 'PageBundle\\Model\\PageSchema';
    const model_name = 'Page';
    const model_namespace = 'PageBundle\\Model';
    const COLLECTION_CLASS = 'PageBundle\\Model\\PageCollection';
    const MODEL_CLASS = 'PageBundle\\Model\\Page';
    const PRIMARY_KEY = 'id';
    const TABLE = 'pages';
    const LABEL = 'Page';
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
    public $columnNames = array (
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
    public $primaryKey = 'id';
    public $columnNamesIncludeVirtual = array (
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
    public $label = 'Page';
    public $readSourceId = 'default';
    public $writeSourceId = 'default';
    public $relations;
    public function __construct()
    {
        $this->relations = array( 
      'created_by' => \LazyRecord\Schema\Relationship::__set_state(array( 
      'data' => array( 
          'type' => 3,
          'self_schema' => 'PageBundle\\Model\\PageSchema',
          'self_column' => 'created_by',
          'foreign_schema' => 'UserBundle\\Model\\UserSchema',
          'foreign_column' => 'id',
        ),
      'accessor' => 'created_by',
      'where' => NULL,
      'orderBy' => array( 
        ),
      'onUpdate' => NULL,
      'onDelete' => NULL,
    )),
      'updated_by' => \LazyRecord\Schema\Relationship::__set_state(array( 
      'data' => array( 
          'type' => 3,
          'self_schema' => 'PageBundle\\Model\\PageSchema',
          'self_column' => 'updated_by',
          'foreign_schema' => 'UserBundle\\Model\\UserSchema',
          'foreign_column' => 'id',
        ),
      'accessor' => 'updated_by',
      'where' => NULL,
      'orderBy' => array( 
        ),
      'onUpdate' => NULL,
      'onDelete' => NULL,
    )),
    );
        $this->columns[ 'id' ] = new RuntimeColumn('id',array( 
      'locales' => NULL,
      'attributes' => array( 
          'autoIncrement' => true,
          'renderAs' => 'HiddenInput',
          'widgetAttributes' => array( 
            ),
        ),
      'name' => 'id',
      'primary' => true,
      'unsigned' => true,
      'type' => 'int',
      'isa' => 'int',
      'notNull' => true,
      'enum' => NULL,
      'set' => NULL,
      'autoIncrement' => true,
      'renderAs' => 'HiddenInput',
      'widgetAttributes' => array( 
        ),
    ));
        $this->columns[ 'title' ] = new RuntimeColumn('title',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 512,
          'label' => '頁面標題',
        ),
      'name' => 'title',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'length' => 512,
      'label' => '頁面標題',
    ));
        $this->columns[ 'content' ] = new RuntimeColumn('content',array( 
      'locales' => NULL,
      'attributes' => array( 
          'renderAs' => 'TextareaInput',
          'widgetAttributes' => array( 
              'class' => '+=mceEditor',
            ),
          'label' => '內文 HTML',
        ),
      'name' => 'content',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'text',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'renderAs' => 'TextareaInput',
      'widgetAttributes' => array( 
          'class' => '+=mceEditor',
        ),
      'label' => '內文 HTML',
    ));
        $this->columns[ 'handle' ] = new RuntimeColumn('handle',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 120,
          'label' => 'Page Handle',
        ),
      'name' => 'handle',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'length' => 120,
      'label' => 'Page Handle',
    ));
        $this->columns[ 'created_on' ] = new RuntimeColumn('created_on',array( 
      'locales' => NULL,
      'attributes' => array( 
          'timezone' => true,
          'renderAs' => 'DateTimeInput',
          'widgetAttributes' => array( 
            ),
          'label' => '建立時間',
          'default' => function() {
                    return date('c');
                },
        ),
      'name' => 'created_on',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'timestamp',
      'isa' => 'DateTime',
      'notNull' => false,
      'enum' => NULL,
      'set' => NULL,
      'timezone' => true,
      'renderAs' => 'DateTimeInput',
      'widgetAttributes' => array( 
        ),
      'label' => '建立時間',
      'default' => function() {
                    return date('c');
                },
    ));
        $this->columns[ 'updated_on' ] = new RuntimeColumn('updated_on',array( 
      'locales' => NULL,
      'attributes' => array( 
          'timezone' => true,
          'renderAs' => 'DateTimeInput',
          'widgetAttributes' => array( 
            ),
          'default' => function() {
                    return date('c');
                },
          'label' => '更新時間',
        ),
      'name' => 'updated_on',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'timestamp',
      'isa' => 'DateTime',
      'notNull' => false,
      'enum' => NULL,
      'set' => NULL,
      'timezone' => true,
      'renderAs' => 'DateTimeInput',
      'widgetAttributes' => array( 
        ),
      'default' => function() {
                    return date('c');
                },
      'label' => '更新時間',
    ));
        $this->columns[ 'created_by' ] = new RuntimeColumn('created_by',array( 
      'locales' => NULL,
      'attributes' => array( 
          'refer' => 'UserBundle\\Model\\User',
          'default' => function() {
                    if (isset($_SESSION)) {
                        return kernel()->currentUser->id;
                    }
                },
          'renderAs' => 'SelectInput',
          'widgetAttributes' => array( 
            ),
          'label' => '建立者',
        ),
      'name' => 'created_by',
      'primary' => NULL,
      'unsigned' => true,
      'type' => 'int',
      'isa' => 'int',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'refer' => 'UserBundle\\Model\\User',
      'default' => function() {
                    if (isset($_SESSION)) {
                        return kernel()->currentUser->id;
                    }
                },
      'renderAs' => 'SelectInput',
      'widgetAttributes' => array( 
        ),
      'label' => '建立者',
    ));
        $this->columns[ 'updated_by' ] = new RuntimeColumn('updated_by',array( 
      'locales' => NULL,
      'attributes' => array( 
          'refer' => 'UserBundle\\Model\\User',
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
      'name' => 'updated_by',
      'primary' => NULL,
      'unsigned' => true,
      'type' => 'int',
      'isa' => 'int',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'refer' => 'UserBundle\\Model\\User',
      'default' => function() {
                    if ( isset($_SESSION) ) {
                        return kernel()->currentUser->id;
                    }
                },
      'renderAs' => 'SelectInput',
      'widgetAttributes' => array( 
        ),
      'label' => '更新者',
    ));
        $this->columns[ 'lang' ] = new RuntimeColumn('lang',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 12,
          'validValues' => function() {
                    return array_flip( kernel()->locale->available() );
                },
          'label' => '語言',
          'default' => function() {
                    $bundle = \I18N\I18N::getInstance();
                    if ( $lang = $bundle->config('default_lang') ) {
                        return $lang;
                    }
                    return kernel()->locale->getDefault();
                },
          'renderAs' => 'SelectInput',
          'widgetAttributes' => array( 
              'allow_empty' => true,
            ),
        ),
      'name' => 'lang',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'length' => 12,
      'validValues' => function() {
                    return array_flip( kernel()->locale->available() );
                },
      'label' => '語言',
      'default' => function() {
                    $bundle = \I18N\I18N::getInstance();
                    if ( $lang = $bundle->config('default_lang') ) {
                        return $lang;
                    }
                    return kernel()->locale->getDefault();
                },
      'renderAs' => 'SelectInput',
      'widgetAttributes' => array( 
          'allow_empty' => true,
        ),
    ));
    }
}
