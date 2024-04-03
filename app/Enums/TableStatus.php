<?php

namespace App\Enums;

enum TableStatus: string
{
    case Pending = 'Đang chờ';
    case Avalaiable = 'Có sẵn';
    case Unavaliable = 'Không có sẵn';
}