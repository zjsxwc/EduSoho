<?php

namespace Topxia\DataTag\Test;

use Topxia\Service\Common\BaseTestCase;
use Topxia\DataTag\UserLatestLearnCoursesDataTag;

class UserLatestLearnCoursesDataTagTest extends BaseTestCase
{   

    public function testGetData()
    {
        $datatag = new UserLatestLearnCoursesDataTag();
        $datatag->getData(array('userId' => 1, 'count' => 5));

    }

}