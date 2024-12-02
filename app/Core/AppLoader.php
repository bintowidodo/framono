<?php
    namespace App\Core;

    class AppLoader
    {
        protected $apps = [];

        public function __construct($configPath)
        {
            $this->apps = include $configPath;
        }

        public function load()
        {
            foreach ($this->apps as $app => $details) {
                if (!is_dir($details['path'])) {
                    throw new \Exception("Application $app not found at path: " . $details['path']);
                }
            }
        }

        public function getApps()
        {
            return $this->apps;
        }
    }
