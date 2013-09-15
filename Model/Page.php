<?php
namespace PageBundle\Model;

class Page 
extends \PageBundle\Model\PageBase
{
    public function getLink()
    {
        return "/" . join("/", array("page", $this->identity, $this->id, $this->title));
    }
}
