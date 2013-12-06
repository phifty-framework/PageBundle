<?php
namespace PageBundle\Controller;
use Phifty\Controller;
use PageBundle\Model\Page;

class PageController extends Controller
{
    public $pageTemplate = '_page.html';

    public function init()
    {
        $bundle = kernel()->plugin('PageBundle');
        if ( $t = $bundle->config('template') ) {
            $this->pageTemplate = $t;
        }
        if( $viewClass = $bundle->config('view_class') ) {
            $this->defaultViewClass = $viewClass;
        }
    }

    public function getPageTemplate()
    {
        return $this->pageTemplate;
    }

    public function renderPageContent($identity, $lang)
    {
        $page = new Page;
        $page->load( array( 'lang' => $lang , 'identity' => $identity ) );
        if ( $page->id ) {
            return $this->render( $this->getPageTemplate() ,array( 'page' => $page ));
        }

        if ( kernel()->plugin('PageBundle')->config('lang_fallback') ) {
            $page->load( array( 'identity' => $identity ) );
            if ($page->id) {
                return $this->render( $this->getPageTemplate() ,array( 'page' => $page ));
            }
        }
    }

    public function pageAction($identity,$title = '',$id = null)
    {
        $lang = kernel()->locale->current;
        return $this->renderPageContent($identity, $lang);
    }
}
