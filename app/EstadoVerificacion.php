<?php

namespace App;

enum EstadoVerificacion: string
{
    case PENDIENTE = 'pendiente';
    case VERIFICADO = 'verificado';
    case RECHAZADO = 'rechazado';
}