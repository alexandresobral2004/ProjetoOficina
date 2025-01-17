<?php

namespace App\Enums;

enum EmployeeRole: string
{
    case GERENTE = 'Gerente';
    case ATENDENTE = 'Atendente';
    case MECANICO = 'Mecânico';
    case AUXILIAR = 'Auxiliar';
}
