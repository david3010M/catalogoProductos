<?php

declare(strict_types=1);

return [
    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'           => 'El campo :attribute no es una URL válida.',
    'after'                => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El campo :attribute solo puede contener letras.',
    'alpha_dash'           => 'El campo :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num'            => 'El campo :attribute solo puede contener letras y números.',
    'array'                => 'El campo :attribute debe ser un array.',
    'before'               => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'array'   => 'El campo :attribute debe contener entre :min y :max elementos.',
        'file'    => 'El archivo :attribute debe pesar entre :min y :max kilobytes.',
        'numeric' => 'El campo :attribute debe ser un valor entre :min y :max.',
        'string'  => 'El campo :attribute debe contener entre :min y :max caracteres.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'El campo confirmación de :attribute no coincide.',
    'date'                 => 'El campo :attribute no corresponde con una fecha válida.',
    'date_equals'          => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format'          => 'El campo :attribute no corresponde con el formato de fecha :format.',
    'different'            => 'Los campos :attribute y :other deben ser diferentes.',
    'digits'               => 'El campo :attribute debe ser un número de :digits dígitos.',
    'digits_between'       => 'El campo :attribute debe contener entre :min y :max dígitos.',
    'dimensions'           => 'El campo :attribute tiene dimensiones de imagen inválidas.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El campo :attribute debe ser una dirección de correo válida.',
    'ends_with'            => 'El campo :attribute debe finalizar con alguno de los siguientes valores: :values',
    'exists'               => 'El campo :attribute seleccionado no existe.',
    'file'                 => 'El campo :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute debe tener un valor.',
    'gt'                   => [
        'array'   => 'El campo :attribute debe contener más de :value elementos.',
        'file'    => 'El archivo :attribute debe pesar más de :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser mayor a :value.',
        'string'  => 'El campo :attribute debe contener más de :value caracteres.',
    ],
    'gte'                  => [
        'array'   => 'El campo :attribute debe contener :value o más elementos.',
        'file'    => 'El archivo :attribute debe pesar :value o más kilobytes.',
        'numeric' => 'El campo :attribute debe ser mayor o igual a :value.',
        'string'  => 'El campo :attribute debe contener :value o más caracteres.',
    ],
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El campo :attribute es inválido.',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El campo :attribute debe ser un número entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4'                 => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6'                 => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json'                 => 'El campo :attribute debe ser una cadena de texto JSON válida.',
    'lt'                   => [
        'array'   => 'El campo :attribute debe contener menos de :value elementos.',
        'file'    => 'El archivo :attribute debe pesar menos de :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser menor a :value.',
        'string'  => 'El campo :attribute debe contener menos de :value caracteres.',
    ],
    'lte'                  => [
        'array'   => 'El campo :attribute debe contener :value o menos elementos.',
        'file'    => 'El archivo :attribute debe pesar :value o menos kilobytes.',
        'numeric' => 'El campo :attribute debe ser menor o igual a :value.',
        'string'  => 'El campo :attribute debe contener :value o menos caracteres.',
    ],
    'max'                  => [
        'array'   => 'El campo :attribute no debe contener más de :max elementos.',
        'file'    => 'El archivo :attribute no debe pesar más de :max kilobytes.',
        'numeric' => 'El campo :attribute no debe ser mayor a :max.',
        'string'  => 'El campo :attribute no debe contener más de :max caracteres.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'            => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'array'   => 'El campo :attribute debe contener al menos :min elementos.',
        'file'    => 'El archivo :attribute debe pesar al menos :min kilobytes.',
        'numeric' => 'El campo :attribute debe ser al menos :min.',
        'string'  => 'El campo :attribute debe contener al menos :min caracteres.',
    ],
    'not_in'               => 'El campo :attribute seleccionado es inválido.',
    'not_regex'            => 'El formato del campo :attribute es inválido.',
    'numeric'              => 'El campo :attribute debe ser un número.',
    'password'             => 'La contraseña es incorrecta.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato del campo :attribute es inválido.',
    'required'             => 'El campo :attribute es obligatorio.',
    'required_if'          => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with'        => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without'     => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los campos :values están presentes.',
    'same'                 => 'Los campos :attribute y :other deben coincidir.',
    'size'                 => [
        'array'   => 'El campo :attribute debe contener :size elementos.',
        'file'    => 'El archivo :attribute debe pesar :size kilobytes.',
        'numeric' => 'El campo :attribute debe ser :size.',
        'string'  => 'El campo :attribute debe contener :size caracteres.',
    ],
    'starts_with'          => 'El campo :attribute debe comenzar con uno de los siguientes valores: :values',
    'string'               => 'El campo :attribute debe ser una cadena de caracteres.',
    'timezone'             => 'El campo :attribute debe ser una zona horaria válida.',
    'unique'               => 'El valor del campo :attribute ya está en uso.',
    'uploaded'             => 'El campo :attribute no se pudo subir.',
    'url'                  => 'El formato del campo :attribute es inválido.',
    'uuid'                 => 'El campo :attribute debe ser un UUID válido.',
    'attributes'           => [
        'address'                  => 'dirección',
        'affiliate_url'            => 'URL de afiliado',
        'age'                      => 'edad',
        'amount'                   => 'cantidad',
        'announcement'             => 'anuncio',
        'area'                     => 'área',
        'audience_prize'           => 'premio del público',
        'available'                => 'disponible',
        'birthday'                 => 'cumpleaños',
        'body'                     => 'contenido',
        'city'                     => 'ciudad',
        'compilation'              => 'compilación',
        'concept'                  => 'concepto',
        'conditions'               => 'condiciones',
        'content'                  => 'contenido',
        'country'                  => 'país',
        'cover'                    => 'cubierta',
        'created_at'               => 'creado el',
        'creator'                  => 'creador',
        'currency'                 => 'moneda',
        'current_password'         => 'contraseña actual',
        'customer'                 => 'cliente',
        'date'                     => 'fecha',
        'date_of_birth'            => 'fecha de nacimiento',
        'dates'                    => 'fechas',
        'day'                      => 'día',
        'deleted_at'               => 'eliminado el',
        'description'              => 'descripción',
        'display_type'             => 'tipo de visualización',
        'district'                 => 'distrito',
        'duration'                 => 'duración',
        'email'                    => 'correo electrónico',
        'excerpt'                  => 'extracto',
        'filter'                   => 'filtro',
        'finished_at'              => 'terminado en',
        'first_name'               => 'nombre',
        'gender'                   => 'género',
        'grand_prize'              => 'gran Premio',
        'group'                    => 'grupo',
        'hour'                     => 'hora',
        'image'                    => 'imagen',
        'image_desktop'            => 'imagen de escritorio',
        'image_main'               => 'imagen principal',
        'image_mobile'             => 'imagen móvil',
        'images'                   => 'imágenes',
        'is_audience_winner'       => 'es ganador de audiencia',
        'is_hidden'                => 'está oculto',
        'is_subscribed'            => 'está suscrito',
        'is_visible'               => 'es visible',
        'is_winner'                => 'es ganador',
        'items'                    => 'elementos',
        'key'                      => 'clave',
        'last_name'                => 'apellidos',
        'lesson'                   => 'lección',
        'line_address_1'           => 'línea de dirección 1',
        'line_address_2'           => 'línea de dirección 2',
        'login'                    => 'acceso',
        'message'                  => 'mensaje',
        'middle_name'              => 'segundo nombre',
        'minute'                   => 'minuto',
        'mobile'                   => 'móvil',
        'month'                    => 'mes',
        'name'                     => 'nombre',
        'national_code'            => 'código nacional',
        'number'                   => 'número',
        'password'                 => 'contraseña',
        'password_confirmation'    => 'confirmación de la contraseña',
        'phone'                    => 'teléfono',
        'photo'                    => 'foto',
        'portfolio'                => 'portafolio',
        'postal_code'              => 'código postal',
        'preview'                  => 'vista preliminar',
        'price'                    => 'precio',
        'product_id'               => 'ID del producto',
        'product_uid'              => 'UID del producto',
        'product_uuid'             => 'UUID del producto',
        'promo_code'               => 'código promocional',
        'province'                 => 'provincia',
        'quantity'                 => 'cantidad',
        'reason'                   => 'razón',
        'recaptcha_response_field' => 'respuesta del recaptcha',
        'referee'                  => 'árbitro',
        'referees'                 => 'árbitros',
        'reject_reason'            => 'motivo de rechazo',
        'remember'                 => 'recordar',
        'restored_at'              => 'restaurado el',
        'result_text_under_image'  => 'texto bajo la imagen',
        'role'                     => 'rol',
        'rule'                     => 'regla',
        'rules'                    => 'reglas',
        'second'                   => 'segundo',
        'sex'                      => 'sexo',
        'shipment'                 => 'envío',
        'short_text'               => 'texto corto',
        'size'                     => 'tamaño',
        'skills'                   => 'habilidades',
        'slug'                     => 'babosa',
        'specialization'           => 'especialización',
        'started_at'               => 'comenzó a las',
        'state'                    => 'estado',
        'status'                   => 'estado',
        'street'                   => 'calle',
        'student'                  => 'estudiante',
        'subject'                  => 'asunto',
        'tag'                      => 'etiqueta',
        'tags'                     => 'etiquetas',
        'teacher'                  => 'profesor',
        'terms'                    => 'términos',
        'test_description'         => 'descripción de prueba',
        'test_locale'              => 'idioma de prueba',
        'test_name'                => 'nombre de prueba',
        'text'                     => 'texto',
        'time'                     => 'hora',
        'title'                    => 'título',
        'type'                     => 'tipo',
        'updated_at'               => 'actualizado el',
        'user'                     => 'usuario',
        'username'                 => 'usuario',
        'value'                    => 'valor',
        'year'                     => 'año',
    ],
];
