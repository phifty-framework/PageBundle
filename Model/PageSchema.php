<?php
namespace PageBundle\Model;
use LazyRecord\Schema\SchemaDeclare;

class PageSchema extends SchemaDeclare
{
    public function schema()
    {
        $this->column('title')
            ->varchar(512)
            ->label( _('頁面標題') );

        $this->column('subtitle')
            ->varchar(512)
            ->label( _('頁面子標題') );

        $this->column('html_title')
            ->varchar(512)
            ->label( '頁面標題 HTML' );

        $this->column('html_subtitle')
            ->varchar(512)
            ->label( '頁面副標題' );

        $this->column('content')
            ->text()
            ->label('內文 HTML');

        $this->column('identity')
            ->varchar(120)
            ->label( _('Page Identity') );

        $this->mixin('Phifty\\Model\\Mixin\\MetadataSchema');
        $this->mixin('Phifty\\Model\\Mixin\\I18NSchema');
    }

    public function bootstrap($record)
    {
        foreach( explode(' ','About') as $title ) {
            $pageId = preg_replace( '/\W/' , '_', strtolower( $title ) );
            foreach( explode(' ','zh_TW en') as $lang ) {
                $record->create(array(
                        'identity' => $pageId,
                        'title' => $title,
                        'html_title' => $title,
                        'lang' => $lang,
                        'content' => '<h1>Demo Title</h1><p>Fill Your Page <i>Content</i> Here</p>',
                ));
            }
        }
    }
}

