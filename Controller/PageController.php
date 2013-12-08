<?php
namespace PageBundle\Controller;
use Phifty\Controller;
use PageBundle\Model\Page;

class PageController extends Controller
{
    public $pageTemplate = '_page.html';

    public function init()
    {
        $bundle = kernel()->bundle('PageBundle');
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

    public function renderPageContent($handle, $lang)
    {
        $page = new Page;
        $page->load( array( 'lang' => $lang , 'handle' => $handle ) );
        if ( $page->id ) {
            return $this->render( $this->getPageTemplate() ,array( 'page' => $page ));
        }

        if ( kernel()->bundle('PageBundle')->config('lang_fallback') ) {
            $page->load( array( 'handle' => $handle ) );
            if ($page->id) {
                return $this->render( $this->getPageTemplate() ,array( 'page' => $page ));
            }
        }
    }

    public function pageAction($handle, $title = '',$id = null)
    {
        return $this->renderPageContent($handle, kernel()->locale->current );
    }
}
