<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'before_or_equal'      => 'The :attribute doit être une date antérieure ou égale à :date.',
    'between'              => [
        'numeric' => 'The :attribute doit être compris entre :min et :max.',
        'file'    => 'The :attribute doit être compris entre :min et :max kilobytes.',
        'string'  => 'The :attribute doit être compris entre :min et :max caratères.',
        'array'   => 'The :attribute doit être compris entre :min et :max articles.',
    ],
    'boolean'              => 'Le champs :attribute doit être vrai ou faux.',
    'confirmed'            => 'La confirmation :attribute  ne correspondent pas.',
    'date'                 => ":attribute n'est pas une date valide.",
    'date_format'          => ':attribute ne correspond pas au format :format.',
    'different'            => ':attribute and :other doivent être différents.',
    'digits'               => ':attribute doit être :digits digits.',
    'digits_between'       => ':attribute doit être compris entre :min et :max digits.',
    'dimensions'           => ":attribute possède des dimensions d'image non valide.",
    'distinct'             => 'Le champs :attribute a une valeur dupliquée.',
    'email'                => ':attribute doit être une adresse e-mail valide.',
    'exists'               => ':attribute selectionné est invalide.',
    'file'                 => ':attribute doit être un fichier.',
    'filled'               => 'Le champs :attribute est requis.',
    'image'                => ':attribute doit être une image.',
    'in'                   => ':attribute sélectionné est invalide.',
    'in_array'             => "Le champs :attribute n'existe pas dans :other.",
    'integer'              => ':attribute doit être un entier.',
    'ip'                   => ':attribute doit être une adresse IP valide.',
    'json'                 => ':attribute doit être une chaîne JSON valide',
    'max'                  => [
        'numeric' => ':attribute ne doit pas être plus grand que :max.',
        'file'    => ':attribute ne doit pas être plus grand que :max kilobytes.',
        'string'  => ':attribute ne doit pas être plus grand que :max caractères.',
        'array'   => ':attribute ne doit pas avoir plus de :max articles.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'Le champs :attribute est requis quand aucun :values est présent.',
    'same'                 => ':attribute et :other doivent correspondre',
    'size'                 => [
        'numeric' => ':attribute doit avoir :size.',
        'file'    => ':attribute doit avoir :size kilobytes.',
        'string'  => ':attribute doit avoir :size caractères.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
