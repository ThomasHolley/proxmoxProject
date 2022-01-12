<?php
return array(
	"siteUrl"=>"http://127.0.0.1/proxmox/public/",
	"database"=>[
			"type"=>"mysql",
			"dbName"=>"proxmox",
			"serverName"=>"127.0.0.1",
			"port"=>8888,
			"user"=>"root",
			"password"=>"root",
			"options"=>array(),
			"cache"=>false,
			"wrapper"=>"Ubiquity\\db\\providers\\pdo\\PDOWrapper"
			],
	"sessionName"=>"proxmox",
	"namespaces"=>array(),
	"templateEngine"=>"Ubiquity\\views\\engine\\Twig",
	"templateEngineOptions"=>[
			"cache"=>false
			],
	"test"=>false,
	"debug"=>false,
	"logger"=>function (){return new \Ubiquity\log\libraries\UMonolog("proxmox",\Monolog\Logger::INFO);},
	"di"=>[
			"@exec"=>array("jquery"=>function ($controller){
						return \Ajax\php\ubiquity\JsUtils::diSemantic($controller);
					})
			],
	"cache"=>[
			"directory"=>"cache/",
			"system"=>"Ubiquity\\cache\\system\\ArrayCache",
			"params"=>array()
			],
	"mvcNS"=>[
			"models"=>"models",
			"controllers"=>"controllers",
			"rest"=>"",
			"domains"=>"domains"
			]
	);