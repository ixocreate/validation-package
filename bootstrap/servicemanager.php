<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOLIT GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Validation;

use Ixocreate\Application\Service\ServiceManagerConfigurator;

/** @var ServiceManagerConfigurator $serviceManager */
$serviceManager->addFactory(Validator::class);
