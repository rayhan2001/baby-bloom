<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public string $name;
    public string $label;
    public bool $required;
    public mixed $value;
    public bool $checked;

    public function __construct(
        string $name,
        string $label = '',
        bool $required = false,
        mixed $value = '1',
        ?bool $checked = false // nullable bool
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->required = $required;
        $this->value = $value;
        $this->checked = (bool) $checked; // ensure bool type
    }

    public function render(): View|Closure|string
    {
        return view('components.form.checkbox');
    }
}
