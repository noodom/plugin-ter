<?php

require_once dirname(__FILE__).'/../../../../core/php/core.inc.php';
require_once dirname(__FILE__).'/../../core/php/class.SncfApi.php';

class ter extends eqLogic {

  /*************** Attributs ***************/

  /************* Static methods ************/

  /**************** Methods ****************/
  public function preInsert() {

  }

  public function postInsert() {

  }

  public function preSave() {

  }

  public function postSave() {
		$stopAreaFromName = $this->getCmd(null, 'stopAreaFromName');
		if (!is_object($stopAreaFromName)) {
			$stopAreaFromName = new terCmd();
			$stopAreaFromName->setLogicalId('stopAreaFromName');
			$stopAreaFromName->setIsVisible(1);
      		$stopAreaFromName->setOrder(1);
			$stopAreaFromName->setName(__('Gare de départ', __FILE__));
		}
		$stopAreaFromName->setType('info');
    $stopAreaFromName->setSubType('string');
		$stopAreaFromName->setEventOnly(1);
		$stopAreaFromName->setEqLogic_id($this->getId());
		$stopAreaFromName->save();

		$stopAreaToName = $this->getCmd(null, 'stopAreaToName');
		if (!is_object($stopAreaToName)) {
			$stopAreaToName = new terCmd();
			$stopAreaToName->setLogicalId('stopAreaToName');
			$stopAreaToName->setIsVisible(1);
      		$stopAreaToName->setOrder(2);
		    $stopAreaToName->setName(__('Gare d\'arrivée', __FILE__));
		}
		$stopAreaToName->setType('info');
		$stopAreaToName->setSubType('string');
		$stopAreaToName->setEventOnly(1);
		$stopAreaToName->setEqLogic_id($this->getId());
		$stopAreaToName->save();

		$trainNumber = $this->getCmd(null, 'trainNumber');
		if (!is_object($trainNumber)) {
			$trainNumber = new terCmd();
			$trainNumber->setLogicalId('trainNumber');
			$trainNumber->setIsVisible(1);
      		$trainNumber->setOrder(3);
      		$trainNumber->setName(__('Train n°', __FILE__));
		}
		$trainNumber->setType('info');
		$trainNumber->setSubType('string');
		$trainNumber->setEventOnly(1);
		$trainNumber->setEqLogic_id($this->getId());
		$trainNumber->save();

		$rawTimeDeparture = $this->getCmd(null, 'rawTimeDeparture');
		if (!is_object($rawTimeDeparture)) {
			$rawTimeDeparture = new terCmd();
			$rawTimeDeparture->setLogicalId('rawTimeDeparture');
			$rawTimeDeparture->setIsVisible(0);
      		$rawTimeDeparture->setOrder(4);
	        $rawTimeDeparture->setName(__('Heure brute départ train', __FILE__));
		}
		$rawTimeDeparture->setType('info');
		$rawTimeDeparture->setSubType('numeric');
		$rawTimeDeparture->setEventOnly(1);
		$rawTimeDeparture->setEqLogic_id($this->getId());
		$rawTimeDeparture->save();

		$timeDeparture = $this->getCmd(null, 'timeDeparture');
		if (!is_object($timeDeparture)) {
			$timeDeparture = new terCmd();
			$timeDeparture->setLogicalId('timeDeparture');
			$timeDeparture->setIsVisible(1);
      		$timeDeparture->setOrder(5);
	        $timeDeparture->setName(__('Heure départ train', __FILE__));
		}
		$timeDeparture->setType('info');
		$timeDeparture->setSubType('string');
		$timeDeparture->setEventOnly(1);
		$timeDeparture->setEqLogic_id($this->getId());
		$timeDeparture->save();

		$rawTimeArrival = $this->getCmd(null, 'rawTimeArrival');
		if (!is_object($rawTimeArrival)) {
			$rawTimeArrival = new terCmd();
			$rawTimeArrival->setLogicalId('rawTimeArrival');
			$rawTimeArrival->setIsVisible(0);
            $rawTimeArrival->setOrder(6);
            $rawTimeArrival->setName(__('Heure brute arrivée train', __FILE__));
		}
		$rawTimeArrival->setType('info');
		$rawTimeArrival->setSubType('numeric');
		$rawTimeArrival->setEventOnly(1);
		$rawTimeArrival->setEqLogic_id($this->getId());
		$rawTimeArrival->save();

		$timeArrival = $this->getCmd(null, 'timeArrival');
		if (!is_object($timeArrival)) {
			$timeArrival = new terCmd();
			$timeArrival->setLogicalId('timeArrival');
			$timeArrival->setIsVisible(1);
            $timeArrival->setOrder(7);
            $timeArrival->setName(__('Heure arrivée train', __FILE__));
		}
		$timeArrival->setType('info');
		$timeArrival->setSubType('string');
		$timeArrival->setEventOnly(1);
		$timeArrival->setEqLogic_id($this->getId());
		$timeArrival->save();

		$travelTime = $this->getCmd(null, 'travelTime');
		if (!is_object($travelTime)) {
			$travelTime = new terCmd();
			$travelTime->setLogicalId('travelTime');
			$travelTime->setIsVisible(1);
            $travelTime->setOrder(8);
            $travelTime->setName(__('Temps de trajet', __FILE__));
		}
		$travelTime->setType('info');
		$travelTime->setSubType('string');
		$travelTime->setEventOnly(1);
		$travelTime->setEqLogic_id($this->getId());
		$travelTime->save();

		$rawTimeDelayed = $this->getCmd(null, 'rawTimeDelayed');
		if (!is_object($rawTimeDelayed)) {
			$rawTimeDelayed = new terCmd();
			$rawTimeDelayed->setLogicalId('rawTimeDelayed');
			$rawTimeDelayed->setIsVisible(0);
            $rawTimeDelayed->setOrder(9);
            $rawTimeDelayed->setName(__('Retard brut', __FILE__));
		}
		$rawTimeDelayed->setType('info');
		$rawTimeDelayed->setSubType('numeric');
		$rawTimeDelayed->setEventOnly(1);
		$rawTimeDelayed->setEqLogic_id($this->getId());
		$rawTimeDelayed->save();

		$timeDelayed = $this->getCmd(null, 'timeDelayed');
		if (!is_object($timeDelayed)) {
			$timeDelayed = new terCmd();
			$timeDelayed->setLogicalId('timeDelayed');
			$timeDelayed->setIsVisible(1);
            $timeDelayed->setOrder(10);
            $timeDelayed->setName(__('Retard', __FILE__));
		}
		$timeDelayed->setType('info');
		$timeDelayed->setSubType('string');
		$timeDelayed->setEventOnly(1);
		$timeDelayed->setEqLogic_id($this->getId());
		$timeDelayed->save();


		$rawTimeToLeave = $this->getCmd(null, 'rawTimeToLeave');
		if (!is_object($rawTimeToLeave)) {
			$rawTimeToLeave = new terCmd();
			$rawTimeToLeave->setLogicalId('rawTimeToLeave');
			$rawTimeToLeave->setIsVisible(0);
            $rawTimeToLeave->setOrder(11);
            $rawTimeToLeave->setName(__('Heure brute de départ max', __FILE__));
		}
		$rawTimeToLeave->setType('info');
		$rawTimeToLeave->setSubType('numeric');
		$rawTimeToLeave->setEventOnly(1);
		$rawTimeToLeave->setEqLogic_id($this->getId());
		$rawTimeToLeave->save();

		$timeToLeave = $this->getCmd(null, 'timeToLeave');
		if (!is_object($timeToLeave)) {
			$timeToLeave = new terCmd();
			$timeToLeave->setLogicalId('timeToLeave');
			$timeToLeave->setIsVisible(1);
            $timeToLeave->setOrder(12);
            $timeToLeave->setName(__('Heure de départ max', __FILE__));
		}
		$timeToLeave->setType('info');
		$timeToLeave->setSubType('string');
		$timeToLeave->setEventOnly(1);
		$timeToLeave->setEqLogic_id($this->getId());
		$timeToLeave->save();

		$refreshA = $this->getCmd(null, 'refresha');
		if (!is_object($refreshA)) {
            $refreshA = new terCmd();
            $refreshA->setLogicalId('refresha');
            $refreshA->setOrder(13);
            $refreshA->setName(__('Màj Aller', __FILE__));
		}
		$refreshA->setType('action');
		$refreshA->setSubType('other');
		$refreshA->setEqLogic_id($this->getId());
		$refreshA->save();

    $refreshR = $this->getCmd(null, 'refreshr');
		if (!is_object($refreshR)) {
            $refreshR = new terCmd();
            $refreshR->setLogicalId('refreshr');
            $refreshR->setOrder(14);
            $refreshR->setName(__('Màj Retour', __FILE__));
		}
		$refreshR->setType('action');
		$refreshR->setSubType('other');
		$refreshR->setEqLogic_id($this->getId());
		$refreshR->save();

		$notify = $this->getCmd(null, 'notify');
		if (!is_object($notify)) {
            $notify = new terCmd();
            $notify->setLogicalId('notify');
            $notify->setOrder(15);
            $notify->setName(__('Notifier', __FILE__));
		}
		$notify->setType('action');
		$notify->setSubType('other');
		$notify->setEqLogic_id($this->getId());
		$notify->save();
  }

  public function preUpdate() {

  }

  public function postUpdate() {
      $this->postSave();
  }

  public function preRemove() {

  }

  public function postRemove() {

  }

  public function refreshData($ter,$mode) {
    //$apiKey = $ter->getConfiguration('apiKey');
    $apiKey = config::byKey('apiKey', 'ter', 0);
    if ($mode == 'ALLER') {
      $stopAreaFromId = $ter->getConfiguration('stopAreaFromId');
      $stopAreaFromTimeTo = $ter->getConfiguration('stopAreaFromTimeTo');
      $stopAreaToId = $ter->getConfiguration('stopAreaToId');
      $stopAreaToTimeTo = $ter->getConfiguration('stopAreaToTimeTo');
    } else {
      $stopAreaFromId = $ter->getConfiguration('stopAreaToId');
      $stopAreaFromTimeTo = $ter->getConfiguration('stopAreaToTimeTo');
      $stopAreaToId = $ter->getConfiguration('stopAreaFromId');
      $stopAreaToTimeTo = $ter->getConfiguration('stopAreaFromTimeTo');
    }

    $api = new SncfApi();
    $journeys = $api->retrieveJourneys($apiKey, $stopAreaFromId, $stopAreaToId);
      log::add('ter','debug','Journeys '.serialize($journeys));

      // find the right train...
      $currentDate = strtotime(date("Ymd\TH:i"));
      //$currentDate =  strtotime("20170509T18:40");
      $timeToStopArea = $stopAreaFromTimeTo * 60;
      for ($i= 0 ; $i < count($journeys); $i++) {
          $departureTime = strtotime($journeys[$i]['departureDate']) + ($journeys[$i]['retard'] * 60);
          log::add('ter','debug','n° '.$i.' => '.$currentDate.' - '.$departureTime.' > '.$timeToStopArea);
          if (($departureTime - $currentDate) > $timeToStopArea) {
            log::add('ter','debug','n° '.$i.' ok');
            break;
          }
      }
      log::add('ter','debug','selected journey n° '.$i);
      // compute data
      $timeToLeave = date('Hi',$departureTime - $timeToStopArea);
      $arrivalTime = date('Hi',strtotime($journeys[$i]['arrivalDate']) + ($journeys[$i]['retard'] * 60));
      $departureTime = date('Hi',$departureTime);

    // update widget info
     foreach ($ter->getCmd('info') as $cmd) {
      switch ($cmd->getLogicalId()) {

        case 'rawTimeToLeave':
          $value = $timeToLeave;
        break;
        case 'timeToLeave':
          $value = substr($timeToLeave,0,2)."h".substr($timeToLeave,2,2);
        break;

        case 'rawTimeDelayed':
          $value = $journeys[$i]['retard'];
        break;
        case 'timeDelayed':
          $value = $journeys[$i]['retard'];
        break;

        case 'travelTime':
          $value = substr($journeys[$i]['duration'],0,2)."h".substr($journeys[$i]['duration'],2,2);
        break;

        case 'rawTimeArrival':
          $value = $arrivalTime;
        break;
            case 'timeArrival':
              $value = substr($arrivalTime,0,2)."h".substr($arrivalTime,2,2);
            break;

        case 'rawTimeDeparture':
          $value = $departureTime;
        break;
              case 'timeDeparture':
                $value = substr($departureTime,0,2)."h".substr($departureTime,2,2);
              break;

        case 'trainNumber':
          $value = $journeys[$i]['trainNumber'];
        break;

        case 'stopAreaToName':
          $value = $journeys[$i]['gareTo'];
        break;

        case 'stopAreaFromName':
          $value = $journeys[$i]['gareFrom'];
        break;
      }
          $cmd->setCollectDate('');
          $cmd->event($value);
      log::add('ter','debug','set:'.$cmd->getLogicalId().' to '. $value);
      }
  }

  public function notifyJourney($ter) {
    // retrieve info
     foreach ($ter->getCmd('info') as $cmd) {
      switch ($cmd->getLogicalId()) {

        case 'timeToLeave':
        $timeToLeave = $cmd->execCmd();
        break;

        case 'timeDelayed':
        $timeDelayed = $cmd->execCmd();
        break;

        case 'travelTime':
        $travelTime = $cmd->execCmd();
        break;

        case 'timeArrival':
        $timeArrival = $cmd->execCmd();
        break;

        case 'timeDeparture':
        $timeDeparture = $cmd->execCmd();
        break;

        case 'trainNumber':
        $trainNumber = $cmd->execCmd();
        break;

        case 'stopAreaToName':
        $stopAreaToName = $cmd->execCmd();
        break;

        case 'stopAreaFromName':
        $stopAreaFromName = $cmd->execCmd();
        break;
      }
    }
    $message = "Votre prochain train, n°".$trainNumber.", au départ de ".$stopAreaFromName.
               " est à ".$timeDeparture.". Il arrivera à ".$stopAreaToName." ".
               "à ".$timeArrival." (Durée : ".$travelTime."). Partez avant ".$timeToLeave.
               " pour être sûr de l'attraper !";
    log::add('ter','debug',$message);
    if ($this->getConfiguration('notify') != "") {
        $cmdalerte = cmd::byId(str_replace('#','',$this->getConfiguration('notify')));
        $options['title'] = "Ne rattez pas votre train !";
        $options['message'] = $message;
        $cmdalerte->execCmd($options);
    }
  }

  /********** Getters and setters **********/

}

class terCmd extends cmd {

  /*************** Attributs ***************/

  /************* Static methods ************/

  /**************** Methods ****************/

  public function execute($_options = array()) {
		if ($this->getType() == '') {
		  return '';
		}

		log::add('ter', 'debug', $this->getLogicalId().' ('.$this->type.'/'.$this->subType.')');

		if ($this->type == 'action'){
      $ter = $this->getEqLogic();

      if ($this->getLogicalId() == 'refresha') {
				$ter->refreshData($ter, 'ALLER');
			}
      if ($this->getLogicalId() == 'refreshr') {
				$ter->refreshData($ter, 'RETOUR');
			}
      if ($this->getLogicalId() == 'notify') {
        $ter->notifyJourney($ter);
      }
		}
  }

  /********** Getters and setters **********/

}