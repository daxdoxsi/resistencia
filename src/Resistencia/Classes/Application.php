<?php

namespace Resistencia\Classes;

use Resistencia\Libs\Language;

class Application {

    private string $configFilePath;
    private array $configGlobalData;
    private array $configLanguage;
    private array $configMemcached;
    private array $configDatabase;
    private array $configRoutes;
    private string $server_uri;
    public Language $lang;

    /**
     *
     */
    public function __construct() {

        # Check if configuration file exists
        $this->configFilePath = __DIR__.'/../../../.conf.php';
        if ( !file_exists($this->configFilePath) ) die("Configuration file is not defined...");

        # Reading configuration file
        $this->configGlobalData = require $this->configFilePath;

        # Split the global configuration file in sections
        $this->configLanguage   = $this->configGlobalData['language'];
        $this->configMemcached  = $this->configGlobalData['memcached'];
        $this->configDatabase   = $this->configGlobalData['database'];
        $this->configRoutes     = $this->configGlobalData['routes'];

        # Get current URI
        $this->server_uri = trim($_SERVER["REQUEST_URI"]," \t");

        # Init Language Class with configuration file
        $this->lang = new Language($this->configLanguage);

        # Parsing URL in order to extract the URI and the language
        if (strlen($this->server_uri) >= 2) {
            foreach ($this->lang->getCodes() as $id => $code) {
                if (strtolower(substr($this->server_uri, 0, strlen($code))) === $code) {
                    $this->lang->setCurrentLangCode($code);
                    $this->lang->setCurrentLangLabel($this->lang->getLabelByCode($code));
                    $this->lang->setCurrentLangId($this->lang->getIdByCode($code));
                    $this->lang->setLangDetected(true);
                    break;
                }
            } // Foreach
        }

        # Checking if language was found in the URL
        if (!$this->lang->isLangDetected()) {
            $this->lang->setCurrentLangCode($this->lang->getDefaultCode());
            $this->lang->setCurrentLangLabel($this->lang->getDefaultLabel());
            $this->lang->setCurrentLangId($this->lang->getIdByCode($this->lang->getDefaultCode()));
        }

    }

}