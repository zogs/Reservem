<?php

namespace Zogs\PageBundle\Twig;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use Zogs\PageBundle\Entity\Page;

class PageLinkExtension extends \Twig_Extension
{
    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

    public function getFilters()
    {
        return array(
            'link2page' => new \Twig_Filter_Method($this, 'pageLink'),
        );
    }

    public function pageLink(Page $page)
    {        
        return $this->router->generate('ZogsPageBundle_view',array('slug'=>$page->getSlug()));
    }

    public function getName()
    {
        return 'user_page';
    }
}