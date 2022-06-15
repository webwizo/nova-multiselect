<?php

namespace Webwizo\NovaMultiselect;

use Laravel\Nova\Fields\Field;

class NovaMultiselect extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-multiselect';

    public function options($options)
    {
        if (is_callable($options)) {
            $options = $options();
        }

        return $this->withMeta([
            'options' => $options
        ]);

        // if (is_callable($options)) {
        //     $options = $options();
        // }

        // return $this->withMeta([
        //     'options' => collect($options ?? [])->map(function ($label, $value) {

        //         return is_array($label) ? $label + ['value' => $value] : ['label' => $label, 'value' => $value];
        //     })->values()->all(),
        // ]);
    }
}
