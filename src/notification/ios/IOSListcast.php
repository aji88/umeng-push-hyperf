<?php

/*
 * This file is part of the ymz/umeng.
 *
 * (c) ymz y_m_z@126.com
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ymz\UMeng\notification\ios;

use ymz\UMeng\notification\IOSNotification;

class IOSListcast extends IOSNotification
{
    public function __construct()
    {
        parent::__construct();
        $this->data['type'] = 'listcast';
        $this->data['device_tokens'] = null;
    }
}
