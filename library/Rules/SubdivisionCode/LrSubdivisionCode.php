<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Rules\SubdivisionCode;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Liberia subdivision code.
 *
 * ISO 3166-1 alpha-2: LR
 *
 * @link http://www.geonames.org/LR/administrative-division-liberia.html
 */
class LrSubdivisionCode extends AbstractSearcher
{
    public $haystack = array(
        'BG', // Bong
        'BM', // Bomi
        'CM', // Grand Cape Mount
        'GB', // Grand Bassa
        'GG', // Grand Gedeh
        'GK', // Grand Kru
        'LO', // Lofa
        'MG', // Margibi
        'MO', // Montserrado
        'MY', // Maryland
        'NI', // Nimba
        'RI', // River Cess
        'SI', // Sinoe
    );

    public $compareIdentical = true;
}