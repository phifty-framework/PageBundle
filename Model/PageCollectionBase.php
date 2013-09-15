<?php
namespace PageBundle\Model;

class PageCollectionBase  extends \LazyRecord\BaseCollection {
const schema_proxy_class = '\\PageBundle\\Model\\PageSchemaProxy';
const model_class = '\\PageBundle\\Model\\Page';
const table = 'pages';


}
