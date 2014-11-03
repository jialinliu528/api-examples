<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.

class WebspaceTest extends TestCase
{

    public function testGetPermissionDescriptor()
    {
        $descriptor = $this->_client->webspace()->getPermissionDescriptor();
        $this->assertInternalType('array', $descriptor->permissions);
        $this->assertGreaterThan(0, count($descriptor->permissions));
    }

}