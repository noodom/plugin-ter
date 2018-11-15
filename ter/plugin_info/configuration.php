<?php

require_once dirname(__FILE__).'/../../../core/php/core.inc.php';

include_file('core', 'authentification', 'php');

if (!isConnect()) {
  throw new Exception('{{401 - Refused access}}');
}
?>
<form class="form-horizontal">
  <fieldset>
    <div class="form-group">
      <label class="col-sm-3 control-label">
        {{Clé API}}
      </label>
      <div class="col-sm-9">
        <input class="configKey form-control" data-l1key="apiKey" placeholder="xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" />
        <p class="help-block">Obtenez votre clé d'accès <a href="https://data.sncf.com/api" target="_blank">SNCF Open Data</a></p>
      </div>
    </div>
  </fieldset>
</form>