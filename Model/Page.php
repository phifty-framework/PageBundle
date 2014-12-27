<?php
namespace PageBundle\Model;
use CoreBundle\Linkable;

class Page extends \PageBundle\Model\PageBase implements Linkable
{
    public function getLink()
    {
        return "/" . join("/", array("page", $this->handle, $this->id, rawurlencode($this->title) ));
    }

    public function getUrl($absolute = false) {
        if ($absolute) {
            return kernel()->getBaseUrl() . $this->getLink();
        }
        return "/" . join("/", array("page", $this->handle, $this->id, rawurlencode($this->title) ));
    }

    public static function byHandle($handle, $lang = null) {
        $page = new self;
        $page->load(array( 'handle' => $handle, 'lang' => $lang ? $lang : kernel()->locale->current() ));
        if ( ! $page->id ) {
            $page->load(array( 'handle' => $handle) );
        }
        return $page;
    }
}
