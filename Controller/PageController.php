<?php
namespace PageBundle\Controller;

use Phifty\Routing\Controller;
use PageBundle\Model\Page;

class PageController extends Controller
{
    public $pageTemplate = '_page.html';

    public function init()
    {
        $bundle = $this->kernel->bundle('PageBundle');
        if ($t = $bundle->config('Template')) {
            $this->pageTemplate = $t;
        }

        if ($viewClass = $bundle->config('ViewClass') ) {
            $this->defaultViewClass = $viewClass;
        }
    }

    protected function getPageTemplate()
    {
        return $this->pageTemplate;
    }

    protected function renderPageContent($handle, $lang)
    {
        $page = Page::load([ 'lang' => $lang , 'handle' => $handle ]);
        if ($page) {
            return $this->render($this->getPageTemplate() ,array( 'page' => $page ));
        }

        if ($this->kernel->bundle('PageBundle')->config('lang_fallback') ) {
            $page = Page::load(array( 'handle' => $handle ) );
            if ($page) {
                return $this->render( $this->getPageTemplate() ,array( 'page' => $page ));
            }
        }
    }

    public function pageAction($handle, $title = '',$id = null)
    {
        return $this->renderPageContent($handle, $this->kernel->locale->current );
    }
}
