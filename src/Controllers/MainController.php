<?php

namespace BattleShip\Controllers;

use \BattleShip\Models\Board;

class MainController extends CoreController {

    public function home() {
        // afficher la page d'accueil
        // <==> render la vue Home

        echo $this->templates->render('main/home', [
            "boardWidth" => Board::WIDTH,
            "boardHeight" => Board::HEIGHT
        ]);
    }

}
