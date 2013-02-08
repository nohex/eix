<?php

namespace Nohex\Eix\Core;

class MockApplication extends Application
{
    public function __construct(Settings $settings = null)
    {
        // Customise settings.
        $settings = new Settings('test/resources/');

        parent::__construct($settings);
    }
}
