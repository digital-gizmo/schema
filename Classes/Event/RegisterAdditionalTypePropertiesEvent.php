<?php
declare(strict_types=1);

/*
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\Schema\Event;

final class RegisterAdditionalTypePropertiesEvent
{
    /**
     * @var string
     */
    private $type;

    /**
     * @param array<string>
     */
    private $additionalProperties = [];

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getAdditionalProperties(): array
    {
        return $this->additionalProperties;
    }

    public function registerAdditionalProperty(string $propertyName): void
    {
        if (!\in_array($propertyName, $this->additionalProperties)) {
            $this->additionalProperties[] = $propertyName;
        }
    }
}
