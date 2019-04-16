<?php
declare(strict_types=1);

namespace Ixocreate\Package\Validation;

use Ixocreate\ServiceManager\ServiceManagerConfigurator;
use Ixocreate\Validation\Validator;

/** @var ServiceManagerConfigurator $serviceManager */
$serviceManager->addFactory(Validator::class);
