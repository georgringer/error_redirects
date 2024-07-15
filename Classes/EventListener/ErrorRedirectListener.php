<?php

declare(strict_types=1);

namespace GeorgRinger\ErrorRedirects\EventListener;

use TYPO3\CMS\Core\Attribute\AsEventListener;
use TYPO3\CMS\Core\Configuration\Features;
use TYPO3\CMS\Core\Database\Connection;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Redirects\Event\RedirectWasHitEvent;

/**
 * Event listener to increment a matched redirect records' hit count
 */
final class ErrorRedirectListener
{


    #[AsEventListener('error-redirects-modify-response')]
    public function __invoke(RedirectWasHitEvent $event): void
    {
        $response = $event->getResponse();
        if (in_array($response->getStatusCode(), [410, 451], true)) {
            $response = $response->withoutHeader('location');
            $event->setResponse($response);
        }
    }
}
