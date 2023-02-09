<?php

namespace App\Enums;

enum TableStatus: string
{
    case Pending = 'Pending';
    case Avalaiable = 'avalible';
    case Unavaliable = 'unavailable';

}