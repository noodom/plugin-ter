<?php

require_once dirname(__FILE__).'/../../../core/php/core.inc.php';

function ter_install() {

}

function ter_update() {
    foreach (eqLogic::byType('ter') as $ter) {
        $ter->save();
    }
}

function ter_remove() {

}

