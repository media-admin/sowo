<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by impress-org on 31-August-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

declare(strict_types=1);

namespace Give\Vendors\StellarWP\FieldConditions\Contracts;

use JsonSerializable;

interface Condition extends JsonSerializable
{
    const LOGICAL_OPERATORS = ['and', 'or'];

    /**
     * Returns the logical operator for this condition.
     *
     * @since 1.0.0
     *
     * @return 'and'|'or'
     */
    public function getLogicalOperator(): string;

    /**
     * Returns true if the condition passes.
     *
     * @param array<string, mixed> $values
     */
    public function passes(array $values): bool;

    /**
     * Returns true if the condition fails.
     *
     * @param array<string, mixed> $values
     */
    public function fails(array $values): bool;
}
