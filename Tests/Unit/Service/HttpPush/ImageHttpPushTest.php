<?php

/**
 * ImageHttpPushTest.
 */

declare(strict_types = 1);

namespace SFC\Staticfilecache\Tests\Unit\Service\HttpPush;

use SFC\Staticfilecache\Service\HttpPush\ImageHttpPush;

/**
 * ImageHttpPushTest.
 *
 * @internal
 * @coversNothing
 */
class ImageHttpPushTest extends AbstractHttpPushTest
{
    /**
     * Test get valid headers.
     */
    public function testGetValidHeaders()
    {
        $service = new ImageHttpPush();
        $service->canHandleExtension('jpg');
        $headers = $service->getHeaders($this->getExampleContent());

        $exepected = [
            [
                'path' => '/test1.jpg',
                'type' => 'image',
            ],
        ];

        self::assertEquals($exepected, $headers, 'Wrong header result from service');
        self::assertCount(1, $headers);
    }
}
