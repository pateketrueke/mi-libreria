<?php

/* Especificaciones */

# asignación sencilla
config('clave', 'valor');

# asignación múltiple
config(array('clave' => 'valor'));

# asignación múltiple (fancy)
config(function ($t) {
  $t->clave = 'valor';
});


/* Contenedor estático de configuraciones */

function config($key = NULL, $val = NULL) {
  static $bag = array();

  if (func_num_args() === 0) {
    // Si no hay argumentos devolvemos la configuración
    return $bag;
  } elseif (is_string($key)) {
    if (func_num_args() === 1) {
      // Si solo hay un argumento devolvemos la opción (getter)
      return isset($bag[$key]) ? $bag[$key] : NULL;
    } else {
      // Si hay dos argumentos asignamos un único valor (setter)
      $bag[$key] = $val;
    }
  }

  // TODO: implementar los specs restantes
}


/* Pruebas */

print_r(config());
