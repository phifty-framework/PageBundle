<?php

namespace PageBundle\Model;


use Maghead\Runtime\Collection;

class PageCollectionBase
    extends Collection
{

    const SCHEMA_PROXY_CLASS = 'PageBundle\\Model\\PageSchemaProxy';

    const MODEL_CLASS = 'PageBundle\\Model\\Page';

    const TABLE = 'pages';

    const READ_SOURCE_ID = 'master';

    const WRITE_SOURCE_ID = 'master';

    const PRIMARY_KEY = 'id';

    public static function createRepo($write, $read)
    {
        return new \PageBundle\Model\PageRepoBase($write, $read);
    }

    public static function getSchema()
    {
        static $schema;
        if ($schema) {
           return $schema;
        }
        return $schema = new \PageBundle\Model\PageSchemaProxy;
    }
}
