<?php

/*
 * This file is part of Laravel Identicon.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Identicon;

use Identicon\Identicon;

/**
 * Generate an identicon.
 *
 * @param mixed $value
 *
 * @return string
 */
function identicon($value) : string
{
    $generator = config('identicon.generator');

    $identicon = new Identicon(new $generator());

    return $identicon->getImageDataUri($value);
}
