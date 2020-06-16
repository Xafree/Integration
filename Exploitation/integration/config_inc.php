<?php
$g_hostname               = 'localhost';
$g_db_type                = 'mysqli';
$g_database_name          = 'eeberst';
$g_db_username            = 'eeberst';
$g_db_password            = 'Yabie1shaema';

$g_default_timezone       = 'UTC';

$g_crypto_master_salt     = 'sv51PDR2FJA1hKwm5WWQ/LnAhyZXV4UGQG6a0rThdpg=';

#Re-définir la variable.
#AjouterLes variable que vous avez besoin.
$g_status_enum_string     = '10:new,20:feedback,50:assigned,70:test,75:test2,80:resolved,90:closed';

#Variable de priorité
$g_priority_enum_string = '10:none,20:low,30:normal,40:high,45:very high,50:urgent,60:immediate';

#Variable de sévérité
$g_severity_enum_string = '10:feature,20:trivial,30:text,40:tweak,50:minor,55:test,60:major,70:crash,80:block';
	
#Définition des changements de statuts pour les statuts standards
$g_status_enum_workflow[NEW_]='20:feedback,50:assigned,75:oui2,80:resolved';
$g_status_enum_workflow[FEEDBACK] ='10:new,50:assigned,70:test,75:oui2,80:resolved';
$g_status_enum_workflow[ASSIGNED] ='20:feedback,70:test,75:oui2,80:resolved,90:closed';
$g_status_enum_workflow[RESOLVED] ='50:assigned,90:closed';
$g_status_enum_workflow[CLOSED] ='50:assigned';

#Définition des couleurs des nouveaux statuts
$g_status_colors['test'] = '#F3E2A9';
$g_status_colors['oui2'] = '#353535';

#Icone de priorité  => don't forget to change constant value in constant_inc.php
$g_status_icon_arr[VERY_HIGH] = 'fa-chevron-up fa-lg red';

#Definition des changements de statuts possibles pour nos nouveaux statuts
$g_status_enum_workflow[TEST] ='20:feedback,50:assigned,75:oui2,80:resolved,90:closed';
$g_status_enum_workflow[TEST2] = '20:feedback,50:assigned,80:resolved,90:closed';






