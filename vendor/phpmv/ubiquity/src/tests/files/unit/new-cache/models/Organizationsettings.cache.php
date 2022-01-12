<?php
return array (
				"#tableName" => "Organizationsettings",
				"#primaryKeys" => array ("idSettings" => "idSettings","idOrganization" => "idOrganization" ),
				"#manyToOne" => array ("organization","settings" ),
				"#fieldNames" => array ("idSettings" => "idSettings","idOrganization" => "idOrganization","value" => "value","organization" => "idOrganization","settings" => "idSettings" ),
				"#memberNames" => array ("idSettings" => "idSettings","idOrganization" => "idOrganization","value" => "value","organization" => "idOrganization","settings" => "idSettings" ),
				"#fieldTypes" => array ("idSettings" => "int(11)","idOrganization" => "int(11)","value" => "varchar(100)","organization" => false,"settings" => false ),
				"#nullable" => array ("value" ),
				"#notSerializable" => array ("organization","settings" ),
				"#transformers" => array (),
				"#accessors" => array ("idSettings" => "setIdSettings","idOrganization" => "setIdOrganization","value" => "setValue" ),
				"#joinColumn" => array ("organization" => array ("className" => "models\\Organization","name" => "idOrganization","nullable" => false ),"settings" => array ("className" => "models\\Settings","name" => "idSettings","nullable" => false ) ),
				"#invertedJoinColumn" => array ("idOrganization" => array ("member" => "organization","className" => "models\\Organization" ),"idSettings" => array ("member" => "settings","className" => "models\\Settings" ) ) );
