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
