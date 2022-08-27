<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class UniversityMail implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param string $attribute
     * @param mixed $value
     * @param \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        // check mail ends with @uwu.ac.lk
        if (!str_ends_with($value, "uwu.ac.lk")) {
            $fail(
                "You must register with the university provided mail address."
            );
        }
    }
}
