<?php
declare(strict_types=1);

/**
 *
 * This file is part of Aura for PHP.
 *
 * @license http://opensource.org/licenses/mit-license.php MIT
 *
 */
namespace Aura\Filter\Rule\Sanitize;

/**
 *
 * Strips non-alphanumeric characters from the value.
 *
 * @package Aura.Filter
 *
 */
class Alnum
{
    /**
     *
     * Strips non-alphanumeric characters from the value.
     *
     * @param object $subject The subject to be filtered.
     *
     * @param string $field The subject field name.
     *
     * @return bool Always true.
     *
     */
    public function __invoke(object $subject, string $field): bool
    {
        $subject->$field = preg_replace('/[^\p{L}\p{Nd}]/u', '', $subject->$field);
        return true;
    }
}
