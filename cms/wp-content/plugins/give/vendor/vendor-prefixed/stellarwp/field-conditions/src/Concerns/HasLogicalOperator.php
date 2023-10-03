<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by impress-org on 29-September-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

declare(strict_types=1);

namespace Give\Vendors\StellarWP\FieldConditions\Concerns;

use Give\Vendors\StellarWP\FieldConditions\Config;
use Give\Vendors\StellarWP\FieldConditions\Contracts\Condition;

trait HasLogicalOperator
{
    /**
     * @var 'and'|'or'
     */
    protected $logicalOperator;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setLogicalOperator(string $operator)
    {
        if ( ! in_array($operator, Condition::LOGICAL_OPERATORS, true)) {
            throw Config::throwInvalidArgumentException(
                "Invalid logical operator: $operator. Must be one of: " . implode(
                    ', ',
                    Condition::LOGICAL_OPERATORS
                )
            );
        }

        $this->logicalOperator = $operator;
    }

    /**
     * @since 1.0.0
     */
    public function getLogicalOperator(): string
    {
        return $this->logicalOperator;
    }
}
