<?php

namespace PageBundle\Model;


use Maghead\Schema\RuntimeSchema;
use Maghead\Schema\RuntimeColumn;
use Maghead\Schema\Relationship\Relationship;
use Maghead\Schema\Relationship\HasOne;
use Maghead\Schema\Relationship\HasMany;
use Maghead\Schema\Relationship\BelongsTo;
use Maghead\Schema\Relationship\ManyToMany;

class PageSchemaProxy
    extends RuntimeSchema
{

    const SCHEMA_CLASS = 'PageBundle\\Model\\PageSchema';

    const LABEL = 'Page';

    const MODEL_NAME = 'Page';

    const MODEL_NAMESPACE = 'PageBundle\\Model';

    const MODEL_CLASS = 'PageBundle\\Model\\Page';

    const REPO_CLASS = 'PageBundle\\Model\\PageRepoBase';

    const COLLECTION_CLASS = 'PageBundle\\Model\\PageCollection';

    const TABLE = 'pages';

    const PRIMARY_KEY = 'id';

    const GLOBAL_PRIMARY_KEY = NULL;

    const LOCAL_PRIMARY_KEY = 'id';

    public static $column_hash = array (
      'id' => 1,
      'title' => 1,
      'content' => 1,
      'handle' => 1,
      'updated_on' => 1,
      'created_on' => 1,
      'updated_by' => 1,
      'created_by' => 1,
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
      4 => 'updated_on',
      5 => 'created_on',
      6 => 'updated_by',
      7 => 'created_by',
      8 => 'lang',
    );

    public $primaryKey = 'id';

    public $columnNamesIncludeVirtual = array (
      0 => 'id',
      1 => 'title',
      2 => 'content',
      3 => 'handle',
      4 => 'updated_on',
      5 => 'created_on',
      6 => 'updated_by',
      7 => 'created_by',
      8 => 'lang',
    );

    public $label = 'Page';

    public $readSourceId = 'master';

    public $writeSourceId = 'master';

    public $relations;

    public function __construct()
    {
        $this->relations = array( 
      'created_by' => \Maghead\Schema\Relationship\BelongsTo::__set_state(array( 
      'data' => array( 
          'foreign_schema' => 'UserBundle\\Model\\UserSchema',
          'foreign_column' => 'id',
          'self_schema' => 'PageBundle\\Model\\PageSchema',
          'self_column' => 'created_by',
        ),
      'accessor' => 'created_by',
      'where' => NULL,
      'orderBy' => array( 
        ),
      'onUpdate' => NULL,
      'onDelete' => NULL,
      'usingIndex' => false,
    )),
      'updated_by' => \Maghead\Schema\Relationship\BelongsTo::__set_state(array( 
      'data' => array( 
          'foreign_schema' => 'UserBundle\\Model\\UserSchema',
          'foreign_column' => 'id',
          'self_schema' => 'PageBundle\\Model\\PageSchema',
          'self_column' => 'updated_by',
        ),
      'accessor' => 'updated_by',
      'where' => NULL,
      'orderBy' => array( 
        ),
      'onUpdate' => NULL,
      'onDelete' => NULL,
      'usingIndex' => false,
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
      'onUpdate' => NULL,
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
      'onUpdate' => NULL,
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
      'onUpdate' => NULL,
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
      'onUpdate' => NULL,
      'length' => 120,
      'label' => 'Page Handle',
    ));
        $this->columns[ 'updated_on' ] = new RuntimeColumn('updated_on',array( 
      'locales' => NULL,
      'attributes' => array( 
          'timezone' => true,
          'default' => \Magsql\Raw::__set_state(array( 
      'value' => 'CURRENT_TIMESTAMP',
    )),
          'label' => '更新時間',
          'renderAs' => 'DateTimeInput',
          'widgetAttributes' => array( 
            ),
        ),
      'name' => 'updated_on',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'timestamp',
      'isa' => 'DateTime',
      'notNull' => false,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => \Magsql\Raw::__set_state(array( 
      'value' => 'CURRENT_TIMESTAMP',
    )),
      'timezone' => true,
      'default' => \Magsql\Raw::__set_state(array( 
      'value' => 'CURRENT_TIMESTAMP',
    )),
      'label' => '更新時間',
      'renderAs' => 'DateTimeInput',
      'widgetAttributes' => array( 
        ),
    ));
        $this->columns[ 'created_on' ] = new RuntimeColumn('created_on',array( 
      'locales' => NULL,
      'attributes' => array( 
          'timezone' => true,
          'default' => function() { return new \DateTime; },
          'label' => '建立時間',
          'renderAs' => 'DateTimeInput',
          'widgetAttributes' => array( 
            ),
        ),
      'name' => 'created_on',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'timestamp',
      'isa' => 'DateTime',
      'notNull' => true,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'timezone' => true,
      'default' => function() { return new \DateTime; },
      'label' => '建立時間',
      'renderAs' => 'DateTimeInput',
      'widgetAttributes' => array( 
        ),
    ));
        $this->columns[ 'updated_by' ] = new RuntimeColumn('updated_by',array( 
      'locales' => NULL,
      'attributes' => array( 
          'refer' => 'UserBundle\\Model\\UserSchema',
          'length' => NULL,
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
      'onUpdate' => NULL,
      'refer' => 'UserBundle\\Model\\UserSchema',
      'length' => NULL,
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
        $this->columns[ 'created_by' ] = new RuntimeColumn('created_by',array( 
      'locales' => NULL,
      'attributes' => array( 
          'refer' => 'UserBundle\\Model\\UserSchema',
          'length' => NULL,
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
      'onUpdate' => NULL,
      'refer' => 'UserBundle\\Model\\UserSchema',
      'length' => NULL,
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
        $this->columns[ 'lang' ] = new RuntimeColumn('lang',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 12,
          'validValues' => function() {
                    return array_flip(kernel()->locale->available());
                },
          'label' => '語言',
          'default' => function() {
                    $bundle = \I18N\I18N::getInstance();
                    if ($lang = $bundle->config('default_lang') ) {
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
      'onUpdate' => NULL,
      'length' => 12,
      'validValues' => function() {
                    return array_flip(kernel()->locale->available());
                },
      'label' => '語言',
      'default' => function() {
                    $bundle = \I18N\I18N::getInstance();
                    if ($lang = $bundle->config('default_lang') ) {
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
