<?php
namespace PageBundle\Model;

class PageBase  extends \Phifty\Model {
const schema_proxy_class = 'PageBundle\\Model\\PageSchemaProxy';
const collection_class = 'PageBundle\\Model\\PageCollection';
const model_class = 'PageBundle\\Model\\Page';
const table = 'pages';

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

}
