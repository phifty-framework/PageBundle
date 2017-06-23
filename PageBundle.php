<?php
namespace PageBundle;

use Phifty\Bundle;

class PageBundle extends Bundle
{
    public function defaultConfig()
    {
        return array(
            'template' => '_page.html',
            'view_class' => null,
            'with_title' => true,
            'with_html_title' => false,
            'with_subtitle' => false,
            'show_page_link' => false,
            'lang_fallback' => true,
            'with_lang' => true,
            'styles' => array(),
        );
    }

    public function boot()
    {
        $this->mount('/bs/page', PageCRUDHandler::class);
        $this->route('/page/:handle(/:id/:title)','PageController:page');
        $this->addRecordAction( 'Page' , ['Create','Update','Delete','BulkDelete']);
    }
}
