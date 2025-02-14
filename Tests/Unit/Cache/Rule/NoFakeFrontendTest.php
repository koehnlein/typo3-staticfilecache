<?php

/**
 * Test the Fake Frontend Rule.
 */

declare(strict_types = 1);

namespace SFC\Staticfilecache\Tests\Unit\Cache\Rule;

use SFC\Staticfilecache\Cache\Rule\NoFakeFrontend;
use TYPO3\CMS\Core\Http\ServerRequest;

/**
 * Test the Fake Frontend Rule.
 *
 * @internal
 * @coversNothing
 */
class NoFakeFrontendTest extends AbstractRuleTest
{
    public function testCheckNoFakeFrontendController()
    {
        $this->markTestSkipped('Check TSFE in v10');

        $tsfe = $this->getTsfe();
        $request = new ServerRequest();
        $explanation = [];
        $skipProcessing = false;

        $fakeFrontendRule = new NoFakeFrontend();
        $fakeFrontendRule->checkRule($tsfe, $request, $explanation, $skipProcessing);
        self::assertFalse($skipProcessing);
    }
}
