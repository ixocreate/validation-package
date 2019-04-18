<?php
declare(strict_types=1);

namespace Ixocreate\Validation;

use Ixocreate\ServiceManager\ServiceManagerConfigurator;
use Ixocreate\Validation\Validator;

/** @var ServiceManagerConfigurator $serviceManager */
$serviceManager->addFactory(Validator::class);
