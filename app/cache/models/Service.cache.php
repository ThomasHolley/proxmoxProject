<?php
return array("#tableName"=>"service","#primaryKeys"=>["id"=>"id"],"#manyToOne"=>[],"#fieldNames"=>["id"=>"id","service"=>"service","vmservicess"=>"vmservicess"],"#memberNames"=>["id"=>"id","service"=>"service","vmservicess"=>"vmservicess"],"#fieldTypes"=>["id"=>"int(11)","service"=>"varchar(150)","vmservicess"=>"mixed"],"#nullable"=>["id","service"],"#notSerializable"=>["vmservicess"],"#transformers"=>[],"#accessors"=>["id"=>"setId","service"=>"setService","vmservicess"=>"setVmservicess"],"#oneToMany"=>["vmservicess"=>["mappedBy"=>"service","className"=>"models\\Vmservices"]]);