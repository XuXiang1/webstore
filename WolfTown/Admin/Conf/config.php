<?php
return array(
		'TMPL_L_DELIM'=>'<{', 
		'TMPL_R_DELIM'=>'}>', 
		'DB_TYPE'=>'mysql',   
		'DB_HOST'=>'localhost',
		'DB_NAME'=>'a0805150053',
		'DB_USER'=>'a0805150053',    
		'DB_PWD'=>'8ed82f57',       
		'DB_PORT'=>'3306',    
		'DB_PREFIX'=>'tb_',  
		'SHOW_PAGE_TRACE'=>false,
		//DEFAULT_THEME'=>'your',
		//'TMPL_DETECT_THEME'=>true,
		//'THEME_LIST'=>'your,my',
		'TMPL_PARSE_STRING'=>array(           
				'__CSS__'=>__ROOT__.'/Public/Css',
				'__JS__'=>__ROOT__.'/Public/Js',
				'__IMG__'=>__ROOT__.'/Public/images',
		),
		'URL_ROUTER_ON'   => true, 
		'URL_ROUTE_RULES' => array( 
		),
		'LAYOUT_ON'=>true,	
		'URL_CASE_INSENSITIVE'=>true,	
		'TEMPLATE_CHARSET'	 =>'utf-8', // 模板模板编码
		'OUTPUT_CHARSET'	 =>'utf-8',
		'LOG_RECORD' => true, // 开启日志记录
		'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR', // 只记录EMERG ALERT CRIT ERR 错误
);
?>