<?php

namespace Topxia\DataTag\Test;

use Topxia\Service\Common\BaseTestCase;
use Topxia\DataTag\LatestFinishedLearnsDataTag;

class LatestFinishedLearnsDataTagTest extends BaseTestCase
{   

    public function testGetData()
    {
        $datatag = new LatestFinishedLearnsDataTag();
        $datatag->getData(array('count' => 5));

    }

}