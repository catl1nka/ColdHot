<?php

namespace catl1nka\ColdHot\Controller;

use catl1nka\ColdHot\View\View;
use function cli\line;

class Controller
{
    public function startGame()
    {
        line("Start the game!");

        $view = new View();
        $view->showGame();
    }
}