<?php

declare(strict_types=1);

namespace MyVendor\MySitepackge\PageTitle;

use TYPO3\CMS\Core\PageTitle\AbstractPageTitleProvider;
use TYPO3\CMS\Core\Site\SiteFinder;

final class WebsiteTitleProvider extends AbstractPageTitleProvider
{
    public function __construct(SiteFinder $siteFinder)
    {
        $site = $siteFinder->getSiteByPageId($GLOBALS['TSFE']->page['uid']);
        $titles = [
            $GLOBALS['TSFE']->page['title'],
            $site->getAttribute('websiteTitle'),
        ];
        $this->title = implode(' - ', $titles);
    }
}
