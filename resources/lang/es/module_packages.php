<?php

$word_title = 'Paquete';
$word_text = 'paquete';

return [
    // Title
    'module_title_s'        => $word_title,
    'module_title'          => $word_title.'s',

    // Tabs
    'tabs'              => [
        'general'           => 'General',
    ],

    // CRUD
    'crud'              => [
        'create'            => [
            'success'           => $word_title.' registrado con éxito',
            'error'             => 'Error al registrar el '.$word_text,
        ],
        'update'            => [
            'success'           => $word_title.' actualizado con éxito',
            'error'             => 'Error al actualizar el '.$word_text,
        ],
        'delete'            => [
            'success'           => $word_title.' eliminado con éxito',
            'error'             => 'Error al eliminar el '.$word_text,
        ],
        'restore'           => [
            'success'           => $word_title.' restaurado con éxito',
            'error'             => 'Error al restaurar el '.$word_text,
        ]
    ],
];
