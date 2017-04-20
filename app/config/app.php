<?php

namespace Config;

use ObjectivePHP\Application\Config\ActionNamespace;
use ObjectivePHP\Application\Config\ApplicationName;
use ObjectivePHP\Application\Config\LayoutsLocation;
use ObjectivePHP\Matcher\Matcher;
use ObjectivePHP\ServicesFactory\Config\Service;

return [
    new ApplicationName('AnsibleWeb'),
    new ActionNamespace('Project\\Action'),
    new LayoutsLocation('app/layouts'),
];