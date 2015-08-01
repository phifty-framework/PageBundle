<?php
namespace PageBundle\Model;
use LazyRecord\Schema\SchemaDeclare;

class PageSchema extends SchemaDeclare
{
    public function schema()
    {
        $bundle = \PageBundle\PageBundle::getInstance();

        $this->column('title')
            ->varchar(512)
            ->label( _('頁面標題') );


        if ( $bundle->config('with_subtitle') ) {
            $this->column('subtitle')
                ->varchar(512)
                ->label( _('頁面子標題') );
        }

        $this->column('content')
            ->text()
            ->label('內文 HTML');

        $this->column('handle')
            ->varchar(120)
            ->label( _('Page Handle') );

        $this->mixin('CommonBundle\\Model\\Mixin\\MetaSchema');
        $this->mixin('Phifty\\Model\\Mixin\\I18NSchema');
    }

    public function bootstrap($record)
    {
        foreach( explode(' ','About') as $title ) {
            $pageId = preg_replace( '/\W/' , '_', strtolower( $title ) );
            foreach( explode(' ','zh_TW en') as $lang ) {
                $record->create(array(
                        'handle' => $pageId,
                        'title' => $title,
                        'html_title' => $title,
                        'lang' => $lang,
                        'content' => '<h1>Demo Title</h1><p>Fill Your Page <i>Content</i> Here</p>',
                ));
            }
        }
    }
}

