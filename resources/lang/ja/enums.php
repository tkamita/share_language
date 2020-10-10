<?php

use App\Enums\FaceWindow;
use App\Enums\FloorInfo;

return [
    FaceWindow::class => [
        FaceWindow::EAST => '東',
        FaceWindow::WEST => '西',
        FaceWindow::NORTH => '南',
        FaceWindow::SOUTH => '北',
    ],
    FloorInfo::BOTH => '男女共用',
    FloorInfo::MEN => '男性限定',
    FloorInfo::WOMEN => '女性限定',
];
