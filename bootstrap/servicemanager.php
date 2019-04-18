<?php
declare(strict_types=1);

namespace Ixocreate\Validation;

use Ixocreate\Application\Service\ServiceManagerConfigurator;

/** @var ServiceManagerConfigurator $serviceManager */

$serviceManager->addFactory(Validator::class);
