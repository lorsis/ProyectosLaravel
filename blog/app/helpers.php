<?php

if (! function_exists('fechaActual')) {
    function fechaActual(string $formato = 'd/m/Y'): string
    {
        return date($formato);
    }
}
