<?php

/*
 * This file is part of the Ruler package, an OpenSky project.
 *
 * (c) 2011 OpenSky Project Inc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ruler\Operator;

use Ruler\Proposition;
use Ruler\Variable;

/**
 * Abstract Comparison Operator class.
 *
 * @abstract
 * @author     Justin Hileman <justin@shopopensky.com>
 * @implements Proposition
 */
abstract class ComparisonOperator implements Proposition
{
    protected $left;
    protected $right;

    /**
     * Comparison Operator constrcutor.
     *
     * @param Variable $left
     * @param Variable $right
     */
    public function __construct(Variable $left, Variable $right)
    {
        $this->left  = $left;
        $this->right = $right;
    }
}
