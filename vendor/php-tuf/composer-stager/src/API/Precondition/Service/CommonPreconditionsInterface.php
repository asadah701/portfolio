<?php declare(strict_types=1);

namespace PhpTuf\ComposerStager\API\Precondition\Service;

/**
 * Asserts the preconditions common to all API operations.
 *
 * This interface exists solely to facilitate autowiring dependencies through type hinting.
 *
 * @see https://symfony.com/doc/current/service_container/autowiring.html
 *
 * @package Precondition
 *
 * @api This interface is subject to our backward compatibility promise and may be safely depended upon.
 */
interface CommonPreconditionsInterface extends PreconditionInterface
{
}
