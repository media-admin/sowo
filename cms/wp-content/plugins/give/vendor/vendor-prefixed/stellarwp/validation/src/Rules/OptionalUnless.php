<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by impress-org on 29-September-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

declare(strict_types=1);

namespace Give\Vendors\StellarWP\Validation\Rules;

use Closure;
use Give\Vendors\StellarWP\Validation\Commands\SkipValidationRules;
use Give\Vendors\StellarWP\Validation\Rules\Abstracts\ConditionalRule;

/**
 * Mark the value as optional unless the conditions pass
 *
 * @since 1.2.0
 *
 * @see Optional
 */
class OptionalUnless extends ConditionalRule
{
    /**
     * @since 1.2.2 correct id
     * @since 1.2.0
     */
    public static function id(): string
    {
        return 'optionalUnless';
    }

    /**
     * @since 1.2.0
     */
    public function __invoke($value, Closure $fail, string $key, array $values)
    {
        if (($value === '' || $value === null) && $this->conditions->fails($values)) {
            return new SkipValidationRules();
        }
    }
}
