<?php

namespace Ibericode\Vat\Bundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class VatNumber extends Constraint
{
    public $message = '"{{ string }}" does not look like a valid VAT number.';
}
