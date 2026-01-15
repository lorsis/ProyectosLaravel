<?php

function fechaActual(string $formato = "d/m/Y"): string
{
    return date($formato);
}
