<?php
declare(strict_types=1);

/*
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\Schema\ViewHelpers\Type;

use Brotkrueml\Schema\Core\ViewHelpers\AbstractTypeViewHelper;

/**
 * A GeoCircle is a GeoShape representing a circular geographic area. As it is a GeoShape
 */
final class GeoCircleViewHelper extends AbstractTypeViewHelper
{
    protected static $typeModel = \Brotkrueml\Schema\Model\Type\GeoCircle::class;
}
