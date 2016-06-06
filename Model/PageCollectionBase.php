<?php
namespace PageBundle\Model;
use LazyRecord\BaseCollection;
class PageCollectionBase
    extends BaseCollection
{
    const SCHEMA_PROXY_CLASS = 'PageBundle\\Model\\PageSchemaProxy';
    const MODEL_CLASS = 'PageBundle\\Model\\Page';
    const TABLE = 'pages';
    const READ_SOURCE_ID = 'default';
    const WRITE_SOURCE_ID = 'default';
    const PRIMARY_KEY = 'id';
}
