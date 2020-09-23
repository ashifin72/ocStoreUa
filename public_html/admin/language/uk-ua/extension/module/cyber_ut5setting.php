<?php
// Heading
$_['heading_title']    = '<span style="color:#43b02a;">Cyber</span>Store - Модуль Налаштування замовлень';

// Text
$_['text_module']      = 'Модуль';
$_['text_success']     = 'Налаштування модуля змінені!';
$_['text_edit']        = 'Налаштування модуля';

$_['entry_on_off_model_product']        			= 'Включити модель товару';
$_['entry_on_off_sku_product']        				= 'Включити SKU товару';
$_['entry_on_off_upc_product']        				= 'Включити UPC товару';
$_['entry_on_off_payment_method']        			= 'Включити метод оплати';
$_['entry_on_off_shipping_method']        			= 'Включити спосіб доставки';

$_['entry_on_off_column_product']        			= 'Включити Колонку Товару';
$_['entry_on_off_column_comment_manager']        	= 'Включити Колонку Коментар менеджера';
$_['entry_on_off_column_send_ttn_email']        	= 'Включити Колонку Відправлення ТТН на e-mail покупцю';
$_['entry_on_off_column_price_purchase']        	= 'Включити Колонку Ціна Закупки';
$_['entry_on_off_column_total_profit']        		= 'Включити Колонку Прибуток';
$_['entry_on_off_column_delivery_price']    		= 'Включити Колонку Вартість доставки';
$_['entry_on_off_column_build']    					= 'Включити Колонку Складання';
$_['entry_on_off_column_rise_product']    			= 'Включити Колонку Підйом';
$_['entry_on_off_column_manager_process_orders']    = 'Включити Колонку Менеджер';


$_['ttn_subject_text'] 								= 'Тема листа';
$_['ttn_subject_text_variables'] 					= 'Підтримуються змінні';
$_['entry_description_send_email_ttn'] 				= ' Шаблон листа TTN';
$_['it_supports_variable_or_html_tags'] 			= ' Підтримуються змінні та html теги';
$_['list_of_variables_text'] 						= 'Перелік змінних';
$_['list_of_variables_entry'] 						= '<table><tr><td>
<br/><b>~text_ttn~</b> - номер ТТН
<br/><b>~order_id~</b> - номер замовлення
<br/><b>~totals~</b> - сума замовлення в поточній валюті
<br/><b>~invoice_no~</b> - номер рахунку      
<br/><b>~invoice_prefix~</b> - префікс рахунку    
<br/><b>~store_id~</b> - id магазину          
<br/><b>~store_name~</b> - назва магазину          
<br/><b>~store_url~</b> - url магазину           			
<br/><b>~customer_id~</b> - id покупця 
<br/><b>~firstname~</b> - ім’я
<br/><b>~lastname~</b> - прізвище               
<br/><b>~telephone~</b> - телефон      
<br/><b>~fax~</b> - факс
<br/><b>~email~</b> - пошта              
<br/><b>~payment_firstname~</b> - ім’я платника      
<br/><b>~payment_lastname~</b> - прізвище платника
<br/><b>~payment_company~</b> - компанія платника
<br/><b>~payment_address_1~</b> - адреса платника
<br/><b>~payment_address_2~</b> - адреса2 платника
<br/><b>~payment_postcode~</b> - індекс платника
<br/><b>~payment_city~</b> - місто платника
<br/><b>~payment_zone_id~</b> - id гео зони платника
<br/><b>~payment_zone~</b> - гео зона платника
<br/><b>~payment_zone_code~</b> - код зони платника
<br/><b>~payment_country_id~</b> - id країни платника 
<br/><b>~payment_country~</b> - країна платника
<br/><b>~payment_iso_code_2~</b> - iso код платника
<br/><b>~payment_iso_code_3~</b>  - iso код платника    
<br/><b>~payment_address_format~</b> - формат адреси платника
<br/><b>~payment_method~</b> - метод оплати
<br/><b>~payment_code~</b> - код оплати
</td><td>
<br/><b>~shipping_firstname~</b> - ім’я для доставки
<br/><b>~shipping_lastname~</b> - прізвище для доставки
<br/><b>~shipping_company~</b> - компанія для доставки  
<br/><b>~shipping_address_1~</b> - адреса доставки
<br/><b>~shipping_address_2~</b> - адреса2 доставки
<br/><b>~shipping_postcode~</b> - індекс доставки
<br/><b>~shipping_city~</b> - місто доставки       
<br/><b>~shipping_zone_id~</b> - id гео зони доставки
<br/><b>~shipping_zone~</b> - гео зона доставки
<br/><b>~shipping_zone_code~</b>  - код зони доставки
<br/><b>~shipping_country_id~</b> - id країни доставки
<br/><b>~shipping_country~</b> - країна доставки
<br/><b>~shipping_iso_code_2~</b> - iso код доставки
<br/><b>~shipping_iso_code_3~</b> - iso код доставки 
<br/><b>~shipping_address_format~</b> - формат адреси доставки
<br/><b>~shipping_method~</b> - спосіб доставки
<br/><b>~shipping_code~</b> - код способу доставки     
<br/><b>~comment~</b> - коментар        
<br/><b>~total~</b> - загалом (в валюті за замовчуванням)         
<br/><b>~order_status_id~</b> - id статусу замовлення         
<br/><b>~order_status~</b> - статус замовлення
<br/><b>~language_id~</b> - id мови
<br/><b>~language_code~</b> - код мови  
<br/><b>~language_filename~</b> - файл мови
<br/><b>~language_directory~</b> - папка мови
<br/><b>~currency_id~</b> - id валюти
<br/><b>~currency_code~</b> - код валюти 
<br/><b>~currency_value~</b> - курс валюти
<br/><b>~ip~</b> - ip
<br/><b>~forwarded_ip~</b> - переадресований ip            
<br/><b>~user_agent~</b> - юзер агент          
<br/><b>~accept_language~</b> - мова 		
<br/><b>~date_modified~</b> - дата зміни замовлення   
<br/><b>~date_added~</b> - дата створення замовлення
</td></tr></table><br/>
Деякі змінні можуть не працювати, залежить від версії магазину.
';
// Error
$_['error_permission'] = 'У вас немає прав для зміни налаштувань модуля!';
$_['error_name'] = 'Назва модуля має містити від 3 до 64 символів!';
