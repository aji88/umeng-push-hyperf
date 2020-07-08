<?php

/*
 * This file is part of the ymz/umeng.
 *
 * (c) ymz y_m_z@126.com
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ymz\UMeng\Tests;

use PHPUnit\Framework\TestCase;
use ymz\UMeng\Android;

class NotificationTest extends TestCase
{
    protected $config = [
        'appKey' => '5b1df163f********',
        'appMasterSecret' => 'i7tzdarswt***********',
        'debug' => false,
    ];

    public function testsendAndroidCustomizedcast()
    {
        $andorid = new Android($this->config);

        $params = [
            'ticker' => '测试提示文字',
            'title' => '测试标题',
            'text' => '测试文字描述',
            'after_open' => 'go_app',
        ];
        $extra = [
            'key1' => 'val1',
            'key2' => 'val2',
        ];
        $response = $andorid->sendAndroidBroadcast($params, $extra);
        $this->assertTrue(true);
    }

    public function testsendAndroidBroadcast()
    {
    }
}
