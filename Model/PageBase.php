<?php

namespace PageBundle\Model;


use Maghead\Runtime\Model;
use Maghead\Schema\SchemaLoader;
use Maghead\Runtime\Result;
use Maghead\Runtime\Inflator;
use Magsql\Bind;
use Magsql\ArgumentArray;
use DateTime;
use WebAction\Maghead\Traits\ActionCreatorTrait;

class PageBase
    extends Model
{

    use ActionCreatorTrait;

    const SCHEMA_PROXY_CLASS = 'PageBundle\\Model\\PageSchemaProxy';

    const READ_SOURCE_ID = 'master';

    const WRITE_SOURCE_ID = 'master';

    const TABLE_ALIAS = 'm';

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

    public static $column_names = array (
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

    public static $mixin_classes = array (
      0 => 'I18N\\Model\\Mixin\\I18NSchema',
      1 => 'CommonBundle\\Model\\Mixin\\MetaSchema',
    );

    protected $table = 'pages';

    public $id;

    public $title;

    public $content;

    public $handle;

    public $updated_on;

    public $created_on;

    public $updated_by;

    public $created_by;

    public $lang;

    public static function getSchema()
    {
        static $schema;
        if ($schema) {
           return $schema;
        }
        return $schema = new \PageBundle\Model\PageSchemaProxy;
    }

    public static function createRepo($write, $read)
    {
        return new \PageBundle\Model\PageRepoBase($write, $read);
    }

    public function getKeyName()
    {
        return 'id';
    }

    public function getKey()
    {
        return $this->id;
    }

    public function hasKey()
    {
        return isset($this->id);
    }

    public function setKey($key)
    {
        return $this->id = $key;
    }

    public function removeLocalPrimaryKey()
    {
        $this->id = null;
    }

    public function getId()
    {
        return intval($this->id);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getHandle()
    {
        return $this->handle;
    }

    public function getUpdatedOn()
    {
        return Inflator::inflate($this->updated_on, 'DateTime');
    }

    public function getCreatedOn()
    {
        return Inflator::inflate($this->created_on, 'DateTime');
    }

    public function getUpdatedBy()
    {
        return intval($this->updated_by);
    }

    public function getCreatedBy()
    {
        return intval($this->created_by);
    }

    public function getLang()
    {
        return $this->lang;
    }

    public function getAlterableData()
    {
        return ["id" => $this->id, "title" => $this->title, "content" => $this->content, "handle" => $this->handle, "updated_on" => $this->updated_on, "created_on" => $this->created_on, "updated_by" => $this->updated_by, "created_by" => $this->created_by, "lang" => $this->lang];
    }

    public function getData()
    {
        return ["id" => $this->id, "title" => $this->title, "content" => $this->content, "handle" => $this->handle, "updated_on" => $this->updated_on, "created_on" => $this->created_on, "updated_by" => $this->updated_by, "created_by" => $this->created_by, "lang" => $this->lang];
    }

    public function setData(array $data)
    {
        if (array_key_exists("id", $data)) { $this->id = $data["id"]; }
        if (array_key_exists("title", $data)) { $this->title = $data["title"]; }
        if (array_key_exists("content", $data)) { $this->content = $data["content"]; }
        if (array_key_exists("handle", $data)) { $this->handle = $data["handle"]; }
        if (array_key_exists("updated_on", $data)) { $this->updated_on = $data["updated_on"]; }
        if (array_key_exists("created_on", $data)) { $this->created_on = $data["created_on"]; }
        if (array_key_exists("updated_by", $data)) { $this->updated_by = $data["updated_by"]; }
        if (array_key_exists("created_by", $data)) { $this->created_by = $data["created_by"]; }
        if (array_key_exists("lang", $data)) { $this->lang = $data["lang"]; }
    }

    public function clear()
    {
        $this->id = NULL;
        $this->title = NULL;
        $this->content = NULL;
        $this->handle = NULL;
        $this->updated_on = NULL;
        $this->created_on = NULL;
        $this->updated_by = NULL;
        $this->created_by = NULL;
        $this->lang = NULL;
    }

    public function fetchCreatedBy()
    {
        return static::masterRepo()->fetchCreatedByOf($this);
    }

    public function fetchUpdatedBy()
    {
        return static::masterRepo()->fetchUpdatedByOf($this);
    }
}
