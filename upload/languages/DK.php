<?php

/**
 * This file is part of LEPTON Core, released under the GNU GPL
 * Please see LICENSE and COPYING files in your package for details, specially for terms and warranties.
 *
 * NOTICE:LEPTON CMS Package has several different licenses.
 * Please see the individual license in the header of each single file or info.php of modules and templates.
 *
 * @author          Website Baker Project, LEPTON Project
 * @copyright       2004-2010 Website Baker Project
 * @copyright       2010-2015 LEPTON Project
 * @link            http://www.LEPTON-cms.org
 * @license         http://www.gnu.org/licenses/gpl.html
 * @license_terms   please see LICENSE and COPYING files in your package
 *
 */


// include class.secure.php to protect this file and the whole CMS!
if (defined('LEPTON_PATH')) {
  include(LEPTON_PATH.'/framework/class.secure.php');
} else {
	$oneback = "../";
	$root = $oneback;
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= $oneback;
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) {
		include($root.'/framework/class.secure.php');
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php



// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
	define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_directory = 'DK';
$language_code = 'dk';
$language_name = 'Dansk';
$language_version = '2.1';
$language_platform = '2.x';
$language_author = 'Hoerts';
$language_license = 'GNU General Public License';
$language_guid = '2BF67D57-4B19-40CC-A63E-50CBDD81048D';

$MENU = array(
	'ACCESS' 				=> 'Adgang',
	'ADDON' 				=> 'Tilf&oslash;jelse',
	'ADDONS' 				=> 'Tilf&oslash;jelser',
	'ADMINTOOLS' 			=> 'Admin v&aelig;rkt&oslash;jer',
	'BREADCRUMB' 			=> 'Du er her: ',
	'FORGOT' 				=> 'Modtag login detaljer',
	'GROUP' 				=> 'Gruppe',
	'GROUPS' 				=> 'Grupper',
	'HELP' 					=> 'Hj&aelig;lp',
	'LANGUAGES' 			=> 'Sprog',
	'LOGIN' 				=> 'Login',
	'LOGOUT' 				=> 'Log-ud',
	'MEDIA' 				=> 'Media',
	'MODULES' 				=> 'Moduler',
	'PAGES' 				=> 'Sider',
	'PREFERENCES' 			=> 'Pr&aelig;ferencer',
	'SETTINGS' 				=> 'Indstillinger',
	'START' 				=> 'Start',
	'TEMPLATES' 			=> 'Templates',
	'USERS' 				=> 'Brugere',
	'VIEW' 					=> 'Se',
	'SERVICE'				=> 'Service'
); // $MENU

$TEXT = array(
	'ACCOUNT_SIGNUP' 		=> 'Registrering',
	'ACTION_NOT_SUPPORTED'	=> 'Handling ikke tilladt',
	'ACTIONS' 				=> 'Handlinger',
	'ACTIVE' 				=> 'Aktiv',
	'ADD' 					=> 'Tilf&oslash;j',
	'ADDON' 				=> 'Tilf&oslash;jelse',
	'ADD_SECTION' 			=> 'Tilf&oslash;j sektion',
	'ADMIN' 				=> 'Admin',
	'ADMINISTRATION' 		=> 'Administration',
	'ADMINISTRATION_TOOL' 	=> 'Administrations V&aelig;rkt&oslash;j',
	'ADMINISTRATOR' 		=> 'Administrator',
	'ADMINISTRATORS' 		=> 'Administratorer',
	'ADVANCED' 				=> 'Advanceret',
	'ALLOWED_FILETYPES_ON_UPLOAD' => 'Tilladte filtyper ved upload',
	'ALLOWED_VIEWERS' 		=> 'tilladte bes&oslash;gende',
	'ALLOW_MULTIPLE_SELECTIONS' => 'Tillad flere valg',
	'ALL_WORDS' 			=> 'Alle ord',
	'ANCHOR' 				=> 'Bogm&aelig;rke',
	'ANONYMOUS' 			=> 'Anonym',
	'ANY_WORDS' 			=> 'Ethvert ord',
	'APP_NAME' 				=> 'Applikationsnavn',
	'ARE_YOU_SURE' 			=> 'Er du sikker?',
	'AUTHOR' 				=> 'Forfatter',
	'BACK' 					=> 'Tilbage',
	'BACKUP' 				=> 'Backup',
	'BACKUP_ALL_TABLES' 	=> 'Lav en backup af alle tabler i databasen',
	'BACKUP_DATABASE' 		=> 'Database backup',
	'BACKUP_MEDIA' 			=> 'Lav backup af medie-filer',
	'BACKUP_WB_SPECIFIC' 	=> 'Lav kun backup af WB-specifikke tabeller',
	'BASIC' 				=> 'Grundl&aelig;ggende',
	'BLOCK' 				=> 'Blok',
	'BACKEND_TITLE'	        => 'Backendtitle',
	'CALENDAR' 				=> 'kalender',
	'CANCEL' 				=> 'Fortryd',
	'CAN_DELETE_HIMSELF' 	=> 'Kan slette sig selv',
	'CAPTCHA_VERIFICATION' 	=> 'Captcha Verifikation',
	'CAP_EDIT_CSS' 			=> 'Redigér CSS',
	'CHANGE' 				=> '&AElig;ndre',
	'CHANGES' 				=> '&AElig;ndringer',
	'CHANGE_SETTINGS' 		=> 'Redigér indstillinger',
	'CHARSET' 				=> 'tegns&aelig;t',
	'CHECKBOX_GROUP' 		=> 'Checkbox Gruppe',
	'CLOSE' 				=> 'Luk',
	'CODE' 					=> 'Kode',
	'CODE_SNIPPET' 			=> 'Kodestump',
	'COLLAPSE' 				=> 'Sl&aring sammen',
	'COMMENT' 				=> 'Kommentér',
	'COMMENTING' 			=> 'Kommenterer',
	'COMMENTS' 				=> 'Kommentarer',
	'CREATE_FOLDER' 		=> 'Lav en mappe',
	'CURRENT' 				=> 'Nuv&aelig;rende',
	'CURRENT_FOLDER' 		=> 'Nuv&aelig;rende mappe',
	'CURRENT_PAGE' 			=> 'Nuv&aelig;rende side',
	'CURRENT_PASSWORD' 		=> 'Nuv&aelig;rende password',
	'CUSTOM' 				=> 'Brugerdefineret',
	'DATABASE' 				=> 'Database',
	'DATE' 					=> 'Dato',
	'DATE_FORMAT' 			=> 'Dato format',
	'DEFAULT' 				=> 'Standard',
	'DEFAULT_CHARSET' 		=> 'Standard tegns&aelig;t',
	'DEFAULT_TEXT' 			=> 'Standard tekst',
	'DELETE' 				=> 'Slet',
	'DELETED' 				=> 'Slettet',
	'DELETE_DATE' 			=> 'Slet dato',
	'DELETE_ZIP' 			=> 'Slet zip-arkiv efter udpakning',
	'DESCRIPTION' 			=> 'Beskrivelse',
	'DESIGNED_FOR' 			=> 'Designet til',
	'DIRECTORIES' 			=> 'Biblioteker (Mapper)',
	'DIRECTORY_MODE' 		=> 'Bibliotekstilstand',
	'DISABLED' 				=> 'Sl&aringet fra',
	'DISPLAY_NAME' 			=> 'Vis navn',
	'EMAIL' 				=> 'Email',
	'EMAIL_ADDRESS' 		=> 'Email addresse',
	'EMPTY_TRASH' 			=> 'T&oslash;m papirkurv',
	'ENABLE_JAVASCRIPT'		=> "V&aelig;r venlig at sl&aring JavaScript til for at bruge denne form.",
	'ENABLED' 				=> 'Sl&aringet til',
	'END' 					=> 'Slut',
	'ERROR' 				=> 'Fejl',
	'EXACT_MATCH' 			=> 'Eksakt s&oslash;gning',
	'EXECUTE' 				=> 'Udf&oslash;r',
	'EXPAND' 				=> 'Fold ud',
	'EXTENSION' 			=> 'Udvidelse',
	'FIELD' 				=> 'Felt',
	'FILE' 					=> 'Fil',
	'FILES' 				=> 'Filer',
	'FILESYSTEM_PERMISSIONS' => 'Tilladelser til filstystemet',
	'FILE_MODE' 			=> 'Fil tilstand',
	'FINISH_PUBLISHING' 	=> 'Afslut udgivelse',
	'FOLDER' 				=> 'Mappe',
	'FOLDERS' 				=> 'Mapper',
	'FOOTER' 				=> 'Footer',
	'FORGOTTEN_DETAILS' 	=> 'Har du glemt dine login-oplysninger?',
	'FORGOT_DETAILS' 		=> 'Glemt login-oplysninger?',
	'FROM' 					=> 'Fra',
	'FRONTEND' 				=> 'Forside',
	'FULL_NAME' 			=> 'Fulde navn',
	'FUNCTION' 				=> 'Funktion',
	'GROUP' 				=> 'Gruppe',
	'HEADER' 				=> 'Hoved (overligger)',
	'HEADING' 				=> 'Overskrift',
	'HEADING_CSS_FILE' 		=> 'Aktuel modulfil: ',
	'HEIGHT' 				=> 'H&oslash;jde',
	'HELP_LEPTOKEN_LIFETIME'		=> 'i sekunder, 0 betyder ingen CSRF beskyttelse!',
	'HELP_MAX_ATTEMPTS'		=> 'Dette er max. antal login fors&oslash;g.',
	'HIDDEN' 				=> 'Skjult',
	'HIDE' 					=> 'Gem',
	'HIDE_ADVANCED' 		=> 'Gem avancerede muligheder',
	'HOME' 					=> 'Hjem',
	'HOMEPAGE_REDIRECTION' 	=> 'Viderestilling af hjemmeside',
	'HOME_FOLDER' 			=> 'Personlig folder',
	'HOME_FOLDERS' 			=> 'Personlig foldere',
	'HOST' 					=> 'V&aelig;rt',
	'ICON' 					=> 'Ikon',
	'IMAGE' 				=> 'Billede',
	'INLINE' 				=> 'In-line',
	'INSTALL' 				=> 'Install&eacute;r',
	'INSTALLATION' 			=> 'Installation',
	'INSTALLATION_PATH' 	=> 'Installations sti',
	'INSTALLATION_URL' 		=> 'Installations URL',
	'INSTALLED' 			=> 'installeret',
	'INTRO' 				=> 'Introduktion',
	'INTRO_PAGE' 			=> 'Intro-side',
	'INVALID_SIGNS' 		=> 'skal begynde med et bogstav eller indeholder ugyldige tegn',
	'KEYWORDS' 				=> 'N&oslash;gleord',
	'LANGUAGE' 				=> 'Sprog',
	'LAST_UPDATED_BY' 		=> 'Sidst opdateret af',
	'LENGTH' 				=> 'L&aelig;ngde',
	'LEPTOKEN_LIFETIME'		=> 'Leptoken Levetid',
	'LEVEL' 				=> 'Niveau',
	'LIBRARY'				=> 'Bibliotek',
	'LICENSE'				=> 'Licens',
	'LINK' 					=> 'Link',
	'LINUX_UNIX_BASED' 		=> 'Linux/Unix baseret',
	'LIST_OPTIONS' 			=> 'Vis valgmuligheder',
	'LOGGED_IN' 			=> 'Logget ind',
	'LOGIN' 				=> 'Login',
	'LONG' 					=> 'Lang',
	'LONG_TEXT' 			=> 'Lang Tekst',
	'LOOP' 					=> 'Liste',
	'MAIN' 					=> 'Hovedoversigt',
	'MANAGE' 				=> 'Administrer',
	'MANAGE_GROUPS' 		=> 'Administrer grupper',
	'MANAGE_USERS' 			=> 'Administrer brugere',
	'MATCH' 				=> 'Match',
	'MATCHING' 				=> 'Matchende',
	'MAX_ATTEMPTS'		=> 'Tilladte login fors&oslash;g',
	'MAX_EXCERPT' 			=> 'Max linier i udsnit',
	'MAX_SUBMISSIONS_PER_HOUR' => 'Max. indsendte bidrag pr. time',
	'MEDIA_DIRECTORY' 		=> 'Medie mappe',
	'MENU' 					=> 'Menu',
	'MENU_ICON_0' 			=> 'Menu-ikon normal',
	'MENU_ICON_1' 			=> 'Menu-ikon sv&aelig;vende',
	'MENU_TITLE' 			=> 'Menu titel',
	'MESSAGE' 				=> 'Besked',
	'MODIFY' 				=> '&AElig;ndre',
	'MODIFY_CONTENT' 		=> '&AElig;ndre indhold',
	'MODIFY_SETTINGS' 		=> '&AElig;ndre indstillinger',
	'MODULE_ORDER' 			=> 'Modul-r&aelig;kkef&oslash;lge ved s&oslash;gning',
	'MODULE_PERMISSIONS' 	=> 'Modul rettigheder',
	'MORE' 					=> 'Mere',
	'MOVE_DOWN' 			=> 'Flyt ned',
	'MOVE_UP' 				=> 'Flyt op',
	'MULTIPLE_MENUS' 		=> 'Flere menuer',
	'MULTISELECT' 			=> 'Multi valg',
	'NAME' 					=> 'Navn',
	'NEED_CURRENT_PASSWORD' => 'bekr&aelig;ft med nuv&aelig;rende adgangskode',
	'NEED_PASSWORD_TO_CONFIRM' => 'Bekr&aelig;ft venligst med dit nuv&aelig;rende adgangskode',
	'NEED_TO_LOGIN' 		=> 'Brug for at logge ind?',
	'NEW_PASSWORD' 			=> 'Nyt kodeord',
	'NEW_USER_HINT'			=> 'Minimum l&aelig;ngde for brugernavn: %d tegn, Minimum l&aelig;ngde for adgangskode: %d tegn!',
	'NEW_WINDOW' 			=> 'Nyt vindue',
	'NEXT' 					=> 'N&aelig;ste',
	'NEXT_PAGE' 			=> 'N&aelig;ste side',
	'NO' 					=> 'Nej',
	'NO_LEPTON_ADDON'       => 'Denne tilf&oslash;jelse kan ikke bruges sammen med LEPTON',
	'NONE' 					=> 'Ingen',
	'NONE_FOUND' 			=> 'Ingen fundne',
	'NOT_FOUND' 			=> 'Ikke fundet',
	'NOT_INSTALLED' 		=> 'ikke installeret',
	'NO_RESULTS' 			=> 'Ingen resultater',
	'OF' 					=> 'Af',
	'ON' 					=> 'p&aring',
	'OPEN' 					=> '&Aringben',
	'OPTION' 				=> 'Muligheder',
	'OTHERS' 				=> 'Andre',
	'OUT_OF' 				=> 'Ud af',
	'OVERWRITE_EXISTING' 	=> 'Overskriv eksisterende',
	'PAGE' 					=> 'Side',
	'PAGES_DIRECTORY' 		=> 'Side mappe',
	'PAGES_PERMISSION' 		=> 'Side tilladselse',
	'PAGES_PERMISSIONS' 	=> 'Side tilladelser',
	'PAGE_EXTENSION' 		=> 'Siden udvidelse',
	'PAGE_ICON' 			=> 'Side billede',
	'PAGE_ID'               => 'Side ID',
	'PAGE_LANGUAGES' 		=> 'Sprog',
	'PAGE_LEVEL_LIMIT' 		=> 'Side mappe',
	'PAGE_SPACER' 			=> 'Side pladsmark&oslash;r',
	'PAGE_TITLE' 			=> 'Titel p&aring; side',
	'PAGE_TRASH' 			=> 'Papirkurv til sider',
	'PARENT' 				=> 'Overliggende niveau',
	'PASSWORD' 				=> 'Adgangskode',
	'PATH' 					=> 'Sti',
	'PHP_ERROR_LEVEL' 		=> 'PHP fejlrapporteringsniveau',
	'PLEASE_LOGIN' 			=> 'Log ind',
	'PLEASE_SELECT' 		=> 'V&aelig;lg venligst',
	'POST' 					=> 'Indl&aelig;g',
	'POSTS_PER_PAGE' 		=> 'Indl&aelig;g pr. side',
	'POST_FOOTER' 			=> 'Fod (bund) p&aring; indl&aelig;g',
	'POST_HEADER' 			=> 'Hoved p&aring; indl&aelig;g',
	'PREVIOUS' 				=> 'Forrige',
	'PREVIOUS_PAGE' 		=> 'Forrige side',
	'PRIVATE' 				=> 'Privat',
	'PRIVATE_VIEWERS' 		=> 'Private bes&oslash;gende',
	'PROFILES_EDIT' 		=> '&AElig;ndre profil',
	'PUBLIC' 				=> 'Offentlig',
	'PUBL_END_DATE' 		=> 'Slut dato',
	'PUBL_START_DATE' 		=> 'Start dato',
	'RADIO_BUTTON_GROUP' 	=> 'Radio knap gruppe',
	'READ' 					=> 'L&aelig;s',
	'READ_MORE' 			=> 'L&aelig;s mere',
	'REDIRECT_AFTER' 		=> 'Viderestil efter',
	'REGISTERED' 			=> 'Registeret',
	'REGISTERED_VIEWERS' 	=> 'Registrerede brugere',
	'REGISTERED_CONTENT'	=> 'Dette indl&aelig;g er kun for registrerede brugere',
	'RELOAD' 				=> 'Opdater',
	'REMEMBER_ME' 			=> 'Husk mig',
	'RENAME' 				=> 'Omd&oslash;b',
	'RENAME_FILES_ON_UPLOAD' => 'Omd&oslash;b filer n&aringr de bliver oploadet',
	'REQUIRED' 				=> 'Kr&aelig;vet',
	'REQUIREMENT' 			=> 'Krav',
	'RESET' 				=> 'Nulstil',
	'RESIZE' 				=> 'Skift st&oslash;rrelse',
	'RESIZE_IMAGE_TO' 		=> 'Forst&oslash;r/formindsk billede til',
	'RESTORE' 				=> 'Gendan',
	'RESTORE_DATABASE' 		=> 'Gendan database',
	'RESTORE_MEDIA' 		=> 'Gendan medie-filer',
	'RESULTS' 				=> 'Resultater',
	'RESULTS_FOOTER' 		=> 'Resultatfod (bund)',
	'RESULTS_FOR' 			=> 'Resultater for',
	'RESULTS_HEADER' 		=> 'Resultathoved',
	'RESULTS_LOOP' 			=> 'Resultat liste',
	'RETYPE_NEW_PASSWORD' 	=> 'Gentag nyt adgangskode',
	'RETYPE_PASSWORD' 		=> 'Gentag adgangskode',
	'SAME_WINDOW' 			=> 'Samme vindue',
	'SAVE' 					=> 'Gem',
	'SEARCH' 				=> 'S&oslash;g',
	'SEARCH_FOR'  => 'S&oslash;g efter',
	'SEARCHING' 			=> 'S&oslash;gning',
	'SECTION' 				=> 'Sektion',
	'SECTION_BLOCKS' 		=> 'Sektion blokke',
	'SECTION_ID' => 'Sektion ID',
	'SEC_ANCHOR' 			=> 'Sektions hoved tekst',
	'SELECT_BOX' 			=> 'V&aelig;lg boks',
	'SEND_DETAILS' 			=> 'Send detaljer',
	'SEPARATE' 				=> 'Separat',
	'SEPERATOR' 			=> 'Separator',
	'SERVER_EMAIL' 			=> 'Server Email',
	'SERVER_OPERATING_SYSTEM' => 'Server Operativsystem',
	'SESSION_IDENTIFIER' 	=> 'Session ID',
	'SETTINGS' 				=> 'Indstillinger',
	'SHORT' 				=> 'Kort',
	'SHORT_TEXT' 			=> 'Kort tekst',
	'SHOW' 					=> 'Vis',
	'SHOW_ADVANCED' 		=> 'Vis avancerede muligheder',
	'SIGNUP' 				=> 'Bliv medlem',
	'SIZE' 					=> 'St&oslash;rrelse',
	'SMART_LOGIN' 			=> 'Smart login',
	'START' 				=> 'Start',
	'START_PUBLISHING' 		=> 'Start offentligg&oslash;relse',
	'SUBJECT' 				=> 'Emne',
	'SUBMISSIONS' 			=> 'Indsendte bidrag',
	'SUBMISSIONS_STORED_IN_DATABASE' => 'Indsendte bidrag gemt i databasen',
	'SUBMISSION_ID' 		=> 'Tilf&oslash;jelses ID',
	'SUBMITTED' 			=> 'Tilf&oslash;jet',
	'SUCCESS' 				=> 'Succes',
	'SYSTEM_DEFAULT' 		=> 'System standard',
	'SYSTEM_PERMISSIONS' 	=> 'System tillqadelser',
	'TABLE_PREFIX' 			=> 'Tabel pr&aelig;fiks',
	'TARGET' 				=> 'M&aringl',
	'TARGET_FOLDER' 		=> 'M&aringl folder',
	'TEMPLATE' 				=> 'Template',
	'TEMPLATE_PERMISSIONS' 	=> 'Template tilladelser',
	'TEXT' 					=> 'Tekst',
	'TEXTAREA' 				=> 'Tekst omr&aringde',
	'TEXTFIELD' 			=> 'Tekstfelt',
	'THEME' 				=> 'Admin theme',
	'TIME' 					=> 'Tid',
	'TIMEZONE' 				=> 'Tidszone',
	'TIME_FORMAT' 			=> 'Tids format',
	'TIME_LIMIT' 			=> 'Max tid til uddrag per modul',
	'TITLE' 				=> 'Titel',
	'TO' 					=> 'Til',
	'TOP_FRAME' 			=> 'Top Frame',
	'TRASH_EMPTIED' 		=> 'Skraldespanden er tom',
	'TXT_EDIT_CSS_FILE' 	=> 'Rediger CSS definitionerne i tekst feltet nedenunder.',
	'TYPE' 					=> 'Type',
	'UNINSTALL' 			=> 'Afinstaller',
	'UNKNOWN' 				=> 'Ukendt',
	'UNLIMITED' 			=> 'U-begr&aelig;nset',
	'UNZIP_FILE' 			=> 'Opload og udpak et Zip-arkiv',
	'UP' 					=> 'Op',
	'UPGRADE' 				=> 'Opgrader',
	'UPLOAD_FILES' 			=> 'Opload file(r)',
	'URL' 					=> 'URL',
	'USER' 					=> 'Bruger',
	'USERNAME' 				=> 'Brugernavn',
	'USERS_ACTIVE' 			=> 'Brugeren er aktiveret',
	'USERS_CAN_SELFDELETE' 	=> 'Brugeren kan slette sig selv',
	'USERS_CHANGE_SETTINGS' => 'Brugren kan &aelig;ndre sine egen indstillinger',
	'USERS_DELETED' 		=> 'Brugeren er markeret til sletning',
	'USERS_FLAGS' 			=> 'Brugerm&aelig;rker',
	'USERS_PROFILE_ALLOWED' => 'Brugeren kan lave en udvidet profil',
	'VERIFICATION' 			=> 'Indtast Verifikation',
	'VERSION' 				=> 'Version',
	'VIEW' 					=> 'Se',
	'VIEW_DELETED_PAGES' 	=> 'Se slettede sider',
	'VIEW_DETAILS' 			=> 'Se detaljer',
	'VISIBILITY' 			=> 'Synlighed',
	'WBMAILER_DEFAULT_SENDER_MAIL' => 'Standard fra-adresse',
	'WBMAILER_DEFAULT_SENDER_NAME' => 'Standard afsendernavn',
	'WBMAILER_DEFAULT_SETTINGS_NOTICE' => 'Angiv standard "FRA"-adresse og "AFSENDER"-navn nedenfor. Det anbefales at angive FRA-adresse som: <strong>admin@dit-dom&aelig;ne.dk</strong>. Nogle udbydere (f.eks. <em>mail.com</em>) kan afvise emails med en FRA-adresse som <em>navn@mail.com</em>, hvis de er sendt via en anden udbyder, for at undg&aring; spam.<br /><br />Standardv&aelig;rdierne benyttes kun, hvis ingen andre v&aelig;rdier angives i WebsiteBaker. Hvis din server underst&oslash;tter <acronym title="Simple mail transfer protocol">SMTP</acronym>, kan du v&aelig;lge at bruge denne til udg&aring;ende emails.',
	'WBMAILER_FUNCTION' 	=> 'Mailprogram',
	'WBMAILER_NOTICE' 		=> '<strong>SMTP mail-program indstillinger:</strong><br />Indstillingerne nedenfor er kun n&oslash;dvendige, hvis du vil sende emails via <acronym title="Simple mail transfer protocol">SMTP</acronym>. Hvis du ikke kender adressen p&aring; din SMTP-v&aelig;rt eller de kr&aelig;vede indstillinger, s&aring; hold dig til standardprogrammet, PHP MAIL.',
	'WBMAILER_PHP' 			=> 'PHP MAIL',
	'WBMAILER_SEND_TESTMAIL' => 'Send test mail',
	'WBMAILER_SMTP' 		=> 'SMTP',
	'WBMAILER_SMTP_AUTH' 	=> 'SMTP godkendelse',
	'WBMAILER_SMTP_AUTH_NOTICE' => '- skal kun anvendes hvis din SMTP-v&aelig;rt bruger adgangskontrol',
	'WBMAILER_SMTP_HOST' 	=> 'SMTP Host',
	'WBMAILER_SMTP_PASSWORD' => 'SMTP adgangskode',
	'WBMAILER_SMTP_USERNAME' => 'SMTP brugernavn',
  'WBMAILER_TESTMAIL_FAILED' => 'Test-mailsen blev ikke sendt, tjek venligst dine indstillinger!',
	'WBMAILER_TESTMAIL_SUCCESS' => 'Test-mailsen blev sendt med succes, tjek venligst din indbakke.',
  'WBMAILER_TESTMAIL_TEXT' => 'Dette er en obligatorisk test-mail: php mailer fungerer',
	'WEBSITE' 				=> 'Websted',
	'WEBSITE_DESCRIPTION' 	=> 'Webstedets beskrivelse',
	'WEBSITE_FOOTER' 		=> 'Webstedets bund (footer)',
	'WEBSITE_HEADER' 		=> 'Webstedets hoved',
	'WEBSITE_KEYWORDS' 		=> 'Webstedets n&oslash;gleord',
	'WEBSITE_TITLE' 		=> 'Webstedets navn',
	'WELCOME_BACK' 			=> 'Velkommen tilbage',
	'WIDTH' 				=> 'Bredde',
	'WINDOW' 				=> 'Vindue',
	'WINDOWS' 				=> 'Vinduer',
	'WORLD_WRITEABLE_FILE_PERMISSIONS' => 'Globale fil tilladelser',
	'WRITE' 				=> 'Skriv',
	'WYSIWYG_EDITOR' 		=> 'WYSIWYG Editor',
	'WYSIWYG_STYLE'	 		=> 'WYSIWYG Style',
	'YES' 					=> 'Ja',
	'BASICS'	=> array(
		'day'		=> "dag",		# day, singular
		'day_pl'	=> "dage",		# day, plural
		'hour'		=> "time", 		# hour, singular
		'hour_pl'	=> "timer",		# hour, plural
		'minute'	=> "minut",	# minute, singular
		'minute_pl'	=> "minuter",	# minute, plural
	)
); // $TEXT

$HEADING = array(
	'ADDON_PRECHECK_FAILED' => 'Tilf&oslash;jelsens krav er ikke opfyldt',
	'ADD_CHILD_PAGE' 		=> 'Tilf&oslash;j underside',
	'ADD_GROUP' 			=> 'Tilf&oslash;je gruppe',
	'ADD_GROUPS' 			=> 'Tilf&oslash;j grupper',
	'ADD_HEADING' 			=> 'Tilf&oslash;j overskrift',
	'ADD_PAGE' 				=> 'Tilf&oslash;je side',
	'ADD_USER' 				=> 'Tilf&oslash;j bruger',
	'ADMINISTRATION_TOOLS' 	=> 'Administrator v&aelig;rkt&oslash;jer',
	'BROWSE_MEDIA' 			=> 'Gennemse mediafolderen',
	'CREATE_FOLDER' 		=> 'Lav ny mappe',
	'DEFAULT_SETTINGS' 		=> 'Standard indstillinger',
	'DELETED_PAGES' 		=> 'Slettede sider',
	'FILESYSTEM_SETTINGS' 	=> 'Filsystemets indstillinger',
	'GENERAL_SETTINGS' 		=> 'Generelle indstilinger',
	'INSTALL_LANGUAGE' 		=> 'Installer sprogpakke',
	'INSTALL_MODULE' 		=> 'Installer modul',
	'INSTALL_TEMPLATE' 		=> 'Installer template',
	'INVOKE_MODULE_FILES' 	=> 'H&aring;ndter modulfiler manuelt',
	'LANGUAGE_DETAILS' 		=> 'Sprog detaljer',
	'MANAGE_SECTIONS' 		=> 'Administrer sektioner',
	'MODIFY_ADVANCED_PAGE_SETTINGS' => 'Rediger avancerede side indstillinger',
	'MODIFY_DELETE_GROUP' 	=> '&AElig;ndre/slet gruppe',
	'MODIFY_DELETE_PAGE' 	=> '&AElig;ndre/slette side',
	'MODIFY_DELETE_USER' 	=> '&AElig;ndre/slette bruger',
	'MODIFY_GROUP' 			=> 'Rediger gruppe',
	'MODIFY_GROUPS' 		=> 'Rediger grupper',
	'MODIFY_INTRO_PAGE' 	=> 'Rediger intro side',
	'MODIFY_PAGE' 			=> 'Rediger sider',
	'MODIFY_PAGE_SETTINGS' 	=> 'Rediger side indstillinger',
	'MODIFY_USER' 			=> 'Rediger bruger',
	'MODULE_DETAILS' 		=> 'Modul detaljer',
	'MY_EMAIL' 				=> 'Min e-mail',
	'MY_PASSWORD' 			=> 'Mit adgangskode',
	'MY_SETTINGS' 			=> 'Mine indstillinger',
	'SEARCH_SETTINGS' 		=> 'S&oslash;ge indstillinger',
	'SEARCH_PAGE' 			=> 'S&oslash;ge side',
	'SECURITY_SETTINGS'		=> 'Sikkerheds indstillinger',
	'SERVER_SETTINGS' 		=> 'Server indstllinger',
	'TEMPLATE_DETAILS' 		=> 'Template detaljer',
	'UNINSTALL_LANGUAGE' 	=> 'Afinstaller sprog',
	'UNINSTALL_MODULE' 		=> 'Afinstaller modul',
	'UNINSTALL_TEMPLATE' 	=> 'Afinstaller template',
	'UPGRADE_LANGUAGE' 		=> 'Opgrader sprogfiler',
	'UPLOAD_FILES' 			=> 'Upload fil(er)',
	'VISIBILITY' 			=> 'Synlighed',
	'WBMAILER_SETTINGS' 	=> 'Mail indstillinger'
); // $HEADING

$MESSAGE = array(
	'ADDON_ERROR_RELOAD' 	=> 'Fejl under opdatering af tilf&oslash;jelse.',
	'ADDON_GROUPS_MARKALL' => 'Marker / afmarker alle',
	'ADDON_LANGUAGES_RELOADED' => 'Sprog opdateret uden problemer',
	'ADDON_MANUAL_FTP_LANGUAGE' => '<strong>BEM&AElig;RK!</strong> Af sikkerhedsgrunde b&oslash;r sprogfiler kun indl&aelig;ses i folderen /languages/ med FTP, og opgraderingsfunktionen b&oslash;r bruges til registrering/opdatering.',
	'ADDON_MANUAL_FTP_WARNING' => 'Advarsel: Eksisterende moduler i databasen vil g&aring; tabt. ',
	'ADDON_MANUAL_INSTALLATION' => 'N&aring;r moduler overf&oslash;res med FTP (anbefales ikke), udf&oslash;res installatonsfunktionerne  <tt>installer</tt>, <tt>opgrader</tt> eller <tt>afinstaller</tt> ikke automatisk. Modulerne vil m&aring;ske ikke fungere korrekt eller bliver rigtigt afinstallerett.<br /><br />Du kan nedenfor udf&oslash;re modulfunktionerne manuelt for moduler, der er overf&oslash;rt via FTP.',
	'ADDON_MANUAL_INSTALLATION_WARNING' => 'Advarsel: Eksisterende moduler i databasen vil g&aring; tabt. Brug kun denne funktion, hvis du oplever problemer med moduler, der er overf&oslash;rt med FTP.',
	'ADDON_MANUAL_RELOAD_WARNING' => 'Advarsel: Eksisterende moduler i databasen vil g&aring; tabt. ',
	'ADDON_MODULES_RELOADED' => 'Moduler er genindl&aelig;st',
	'ADDON_PRECHECK_FAILED' => 'Installation af tilf&oring;jelsen mislykkedes. Dit system opfylder ikke kravene til denne tilf&oring;jelse. For at f&aring; denne tilf&oslash;jelse til at virke i dit system, skal du rette de forhold, der opregnes nedenfor.',
	'ADDON_RELOAD' 			=> 'Opdater databasen med information fra tilf&oslash;jelsesfiler (f.eks. efter FTP-overf&oslash;rsel).',
	'ADDON_TEMPLATES_RELOADED' => 'Templates blev opdateret',
	'ADMIN_INSUFFICIENT_PRIVELLIGES' => 'Du har ikke den n&oslash;dvendige adgang til dette omr&aring;de',
	'FORGOT_PASS_ALREADY_RESET' => 'Adgangskoden kan desv&aelig;rre kun nulstilles en gang pr time.',
	'FORGOT_PASS_CANNOT_EMAIL' => 'Kunne ikke sende din adgangskode til din email-adresse - Kontakt en systemadministrator',
	'FORGOT_PASS_EMAIL_NOT_FOUND' => 'Mail-adressen du brugte findes desv&aelig;rre ikek i vores database.',
	'FORGOT_PASS_NO_DATA' 	=> 'Indtast venligt din mail-adresse nedenunder',
	'FORGOT_PASS_PASSWORD_RESET' => 'Dit brugernavn og adgangskode, er blevet sendt til din mail-adresse',
	'FRONTEND_SORRY_NO_ACTIVE_SECTIONS' => 'Desv&aelig;rre, der er ikke noget aktivt indhold',
	'FRONTEND_SORRY_NO_VIEWING_PERMISSIONS' => 'Du har ikke retigheder til at se denne side',
	'GENERIC_ALREADY_INSTALLED' => 'Allerede installeret',
	'GENERIC_BAD_PERMISSIONS' => 'Der kunne desv&aelig;rre ikke skrives til m&aringlmappen',
	'GENERIC_CANNOT_UNINSTALL' => 'Kan ikke afinstallere',
	'GENERIC_CANNOT_UNINSTALL_IN_USE' => 'Kan ikke afinstallere: den valgte fil er i brug',
	'GENERIC_CANNOT_UNINSTALL_IN_USE_TMPL' => '<br /><br />{{type}} <b>{{type_name}}</b> kunne ikke afinstalleres, da den stadig er i brug p&aring {{pages}}.<br /><br />',
	'GENERIC_CANNOT_UNINSTALL_IN_USE_TMPL_PAGES' => 'denne side;disse sider',
	'GENERIC_CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE' => 'Kan ikke afinstalle denne template <b>{{name}}</b>, da den er i brug!',
	'GENERIC_CANNOT_UNZIP' 	=> 'Kan ikke udpakke filen',
	'GENERIC_CANNOT_UPLOAD' => 'Kan ikke oploade filen',
	'GENERIC_COMPARE' 		=> ' succesfuldt',
	'GENERIC_ERROR_OPENING_FILE' => 'Fejl ved &aringbning af filen.',
	'GENERIC_FAILED_COMPARE' => 'mislykkedes',
	'GENERIC_FILE_TYPE' 	=> 'Bem&aelig;rk venligst, at filen du oploader skal v&aelig;re af f&oslash;lgende format:',
	'GENERIC_FILE_TYPES' 	=> 'Bem&aelig;rk venligst, at filen du oploader skal v&aelig;re i en af f&oslash;lgende formater:',
	'GENERIC_FILL_IN_ALL' 	=> 'G&aring venligst tilbage, og udfyld alle felter',
	'GENERIC_INSTALLED' 	=> 'Installeret med succes',
	'GENERIC_INVALID' 		=> 'Der er fejl i filen du oploadede',
	'GENERIC_INVALID_ADDON_FILE' => 'Der er fejl i LEPTON installations filen. Tjek venligst *.zip arkivet.',
	'GENERIC_INVALID_LANGUAGE_FILE' => 'LEPTON sprogfilen er fejlbeh&aelig;ftet. Tjek venligst tekst filen.',
	'GENERIC_IN_USE' 		=> ' men bruges i ',
	'GENERIC_MODULE_VERSION_ERROR' => 'Modulet er ikke installeret korrekt!',
	'GENERIC_NOT_COMPARE' 	=> ' ikke muligt',
	'GENERIC_NOT_INSTALLED' => 'Ikke installeret',
	'GENERIC_NOT_UPGRADED' 	=> 'Opgradering ikke muligt.',
	'GENERIC_PLEASE_BE_PATIENT' => 'V&aelig;r venligst t&aringlmodig, det kan tage et stykke tid.',
	'GENERIC_PLEASE_CHECK_BACK_SOON' => 'Kig venligst snart ind igen.',
	'GENERIC_SECURITY_ACCESS'	=> 'Sikkerheds brud!! Adgang n&aelig;gtet',
	'GENERIC_SECURITY_OFFENSE'	=> 'Sikkerheds brud!! Blev n&aelig;gtet at gemme data!!',
	'GENERIC_UNINSTALLED' 	=> 'Afinstalleret med succes',
	'GENERIC_UPGRADED' 		=> 'Opgraderet med succes',
	'GENERIC_VERSION_COMPARE' => 'Versions sammenligning',
	'GENERIC_VERSION_GT' 	=> 'Opgradering n&oslash;dvendigt!',
	'GENERIC_VERSION_LT' 	=> 'Nedgrader',
	'GENERIC_WEBSITE_UNDER_CONSTRUCTION' => 'Websiden er under opbygning',
	'GROUPS_ADDED' 			=> 'Gruppe tilf&oslash;jet med succes',
	'GROUPS_CONFIRM_DELETE' => 'Er du sikker p&aring du vil slette den valgte gruppe, (og alle brugere som er tilknyttet gruppen)?',
	'GROUPS_DELETED' => 'Gruppe slettet med succes',
	'GROUPS_GROUP_NAME_BLANK' => 'Gruppe navn er blank',
	'GROUPS_GROUP_NAME_EXISTS' => 'Gruppe navnet eksisterer allerede',
	'GROUPS_NO_GROUPS_FOUND' => 'Der blev ikke fundet nogen grupper',
	'GROUPS_SAVED' 			=> 'Gruppen er gemt med succes',
	'LANG_MISSING_PARTS_NOTICE' => 'Installation af sprog fejlede, en eller flere, af f&oslash;lgende variabler mangler:<br />language_code<br />language_name<br />language_version<br />language_license',
	'LOGIN_AUTHENTICATION_FAILED' => 'Brugernavn eller adgangskode er ikke korrekt',
	'LOGIN_BOTH_BLANK' 		=> 'Indtast venligst dit brugernavn og adgangskode nedenfor',
	'LOGIN_PASSWORD_BLANK' 	=> 'Indtast adgangskode',
	'LOGIN_PASSWORD_TOO_LONG' => 'Den indstastede adgangskode er for langt',
	'LOGIN_PASSWORD_TOO_SHORT' => 'Den indstastede adgangskode er for kort',
	'LOGIN_USERNAME_BLANK' 	=> 'Indtast venligst et brugernavn',
	'LOGIN_USERNAME_TOO_LONG' => 'Brugernavnet er for langt',
	'LOGIN_USERNAME_TOO_SHORT' => 'Brugernavnet er for kort',
	'MEDIA_BLANK_EXTENSION' => 'Du har ikke angivet en filtype',
	'MEDIA_BLANK_NAME' 		=> 'Du har ikke angivet et nyt navn',
	'MEDIA_CANNOT_DELETE_DIR' => 'Kan ikke slette den &oslash;nskede mappe',
	'MEDIA_CANNOT_DELETE_FILE' => 'Kan ikke slette den &oslash;nskede fil',
	'MEDIA_CANNOT_RENAME' 	=> 'Omd&oslash;bning fejlede',
	'MEDIA_CONFIRM_DELETE' 	=> 'Er du sikker p&aring du &oslash;nsker at slette den f&oslash;lgende fil eller mappe?',
	'MEDIA_CONFIRM_DELETE_FILE'	=> 'Er du sikker p&aring du vil slette filen {name}?',
	'MEDIA_CONFIRM_DELETE_DIR'	=> 'Er du sikker p&aring du vil slette folderen {name}?',
	'MEDIA_DELETED_DIR' 	=> 'Folderen slettet med succes',
	'MEDIA_DELETED_FILE' 	=> 'Filen er slettet succes',
	'MEDIA_DIR_ACCESS_DENIED' => 'Den specificerede mappe eksisterer ikke, eller adgang ikke tilladt.',
	'MEDIA_DIR_DOES_NOT_EXIST' => 'Mappen eksisterer ikke',
	'MEDIA_DIR_DOT_DOT_SLASH' => 'Kan ikke inkludere ../ i mappens navn',
	'MEDIA_DIR_EXISTS' 		=> 'Der findes allerede en mappe det navn',
	'MEDIA_DIR_MADE' 		=> 'Mappe oprettet med succes',
	'MEDIA_DIR_NOT_MADE' 	=> 'Oprettelse af mappe mislykkedes',
	'MEDIA_FILE_EXISTS' 	=> 'Der findes allerede en fil med det navn',
	'MEDIA_FILE_NOT_FOUND' 	=> 'Filen blev ikke fundet',
	'MEDIA_NAME_DOT_DOT_SLASH' => 'Kan ikke inkludere ../ i navnet',
	'MEDIA_NAME_INDEX_PHP' 	=> 'Kan ikke bruge index.php som navn',
	'MEDIA_NONE_FOUND' 		=> 'Denne mappe er tom',
	'MEDIA_RENAMED' 		=> 'Omd&oslash;bt med succes',
	'MEDIA_SINGLE_UPLOADED' => ' filen blev oploadet med succes',
	'MEDIA_TARGET_DOT_DOT_SLASH' => 'Kan ikke have ../ i placeringen af mappen',
	'MEDIA_UPLOADED' 		=> ' filerne blev oploadet med succes',
	'MOD_MISSING_PARTS_NOTICE' => 'Installationen af modulet "%s" fejlede, en eller flere, af f&oslash;lgende variabler mangler:<br />module_directory<br />module_name<br />module_version<br />module_author<br />module_license<br />module_guid<br />module_function',
	'MOD_FORM_EXCESS_SUBMISSIONS' => 'Beklager! Denne formular er blevet afsendt for mange gange indenfor den sidste time, og du vil derfor blive afvist - Pr&oslash;v igen om en times tid!',
	'MOD_FORM_INCORRECT_CAPTCHA' => 'Verifikationstallene (ogs&aring; kendt som Captcha) som du tastede er ikke korrekte. Hvis du har problemer med at l&aelig;se Captha tallene, s&aring; kontakt venligst sidens Administrator p&aring; denne mailadresse: <a href="mailto:'.SERVER_EMAIL.'">'.SERVER_EMAIL.'</a>',
	'MOD_FORM_REQUIRED_FIELDS' => 'Du skal udfylde f&oslash;lgende felter:',
	'PAGES_ADDED' 			=> 'Siden er tilf&oslash;jet med succes',
	'PAGES_ADDED_HEADING' 	=> 'Overskrift til side tilf&oslash;jet',
	'PAGES_BLANK_MENU_TITLE' => 'Indtast venligst en overskrift til menuen',
	'PAGES_BLANK_PAGE_TITLE' => 'Indtast venligst en overskrift til siden',
	'PAGES_CANNOT_CREATE_ACCESS_FILE' => 'Fejl under oprettelse af adgangsfil i "pages" mappen, (utilstr&aelig;kkelige rettigheder)',
	'PAGES_CANNOT_DELETE_ACCESS_FILE' => 'Fejl under sletning af adgangsfil i "pages" mappen, (utilstr&aelig;kkelige rettigheder)',
	'PAGES_CANNOT_REORDER' 	=> 'Fejl ved omorganisering af siden',
	'PAGES_DELETED' 		=> 'Siden blev slettet',
	'PAGES_DELETE_CONFIRM' 	=> 'Er du sikker p&aring du vil slette den va&aelig;gte side &laquo;%s&raquo; (og alle dens undersider)',
	'PAGES_INSUFFICIENT_PERMISSIONS' => 'Du har ikke rettigheder til at slette denne side',
	'PAGES_INTRO_EMPTY' 		=> 'Tilf&oslash;j venligst noget indhold, en tom Intro side kan ikke gemmes.',
	'PAGES_INTRO_LINK' 		=> 'Klik HER for at redigere Intro siden',
	'PAGES_INTRO_NOT_WRITABLE' => 'Kan ikke skrive til page-mappe/intro.php, (utilstr&aelig;kkelige rettigheder)',
	'PAGES_INTRO_SAVED' 	=> 'Intro siden blev gemt',
	'PAGES_LAST_MODIFIED' 	=> 'Sidste &aelig;ndring af',
	'PAGES_NOT_FOUND' 		=> 'Siden blev ikke fundet',
	'PAGES_NOT_SAVED' 		=> 'Fejl ved fors&oslash;g p&aring at gemme siden',
	'PAGES_PAGE_EXISTS' 	=> 'En side med samme eller lignende overskrift eksisterer allerede',
	'PAGES_REORDERED' 		=> 'Siden blev omorganiseret',
	'PAGES_RESTORED' 		=> 'Siden er gendannet',
	'PAGES_RETURN_TO_PAGES' => 'Tilbage til sider',
	'PAGES_SAVED' 			=> 'Siden blev gemt',
	'PAGES_SAVED_SETTINGS' 	=> 'Side indstillingerne blev gemt',
	'PAGES_SECTIONS_PROPERTIES_SAVED' => 'Sektionens egenskaber blev &aelig;ndret',
	'PREFERENCES_CURRENT_PASSWORD_INCORRECT' => 'Adgangskoden du indtastede er ikke korrekt',
	'PREFERENCES_DETAILS_SAVED' => 'Detaljerne blev gemt',
	'PREFERENCES_EMAIL_UPDATED' => 'E-mailadressen blev opdateret',
	'PREFERENCES_INVALID_CHARS' => 'Du har brugt ugyldige tegn i adgangskoden, gyldige tegn er: a-z\A-Z\0-9\_\-\!\#\*\+',
	'PREFERENCES_PASSWORD_CHANGED' => 'Adgangskoden blev &aelig;ndret',
	'PREFERENCES_PASSWORD_MATCH' => 'Passwords do not match',	
	'RECORD_MODIFIED_FAILED' => 'Indl&aelig;gget blev ikke &aelig;ndret.',
	'RECORD_MODIFIED_SAVED' => 'Indl&aelig;gget blev opdateret.',
	'RECORD_NEW_FAILED' 	=> 'Der blev ikke tilf&oslash;jet et nyt indl&aelig;g.',
	'RECORD_NEW_SAVED' 		=> 'Der blev tilf&oslash;jet et nyt indl&aelig;g.',
	'SETTINGS_MODE_SWITCH_WARNING' => 'Bem&aelig;rk venligst: Klikke du p&aring denne knap bliver alle &aelig;ndringer nulstillet',
	'SETTINGS_SAVED' 		=> 'Indstillingerne blev gemt',
	'SETTINGS_UNABLE_OPEN_CONFIG' => 'Kan ikke &aringbne konfigurations filen',
	'SETTINGS_UNABLE_WRITE_CONFIG' => 'Kan ikke skrive til konfigurations filen',
	'SETTINGS_WORLD_WRITEABLE_WARNING' => 'Bem&aelig;rk venligst: Dette anbefales kun i testmilj&oslash;er',
	'SIGNUP2_ADMIN_INFO' 	=> '
En ny bruger er registreret.

Brugernavn: {LOGIN_NAME}
BrugerId: {LOGIN_ID}
E-Mail: {LOGIN_EMAIL}
IP-Adressw: {LOGIN_IP}
Registrations dato: {SIGNUP_DATE}
----------------------------------------
Dette er en automatisk meddelelse!

',
	'SIGNUP2_BODY_LOGIN_FORGOT' => '
Hej {LOGIN_DISPLAY_NAME},
Denne besked er sendt, fordi funktionen  \'Glemt adgangskode\' er blevet anvendt.

Dine nye \'{LOGIN_WEBSITE_TITLE}\' logind-oplysninger er:

Brugernavn: {LOGIN_NAME}
Adgangskode: {LOGIN_PASSWORD}

Din adgangskode er &aelig;ndret til ovenst&aring;ende.
Det betyder, at din gamle adgangskode ikke kan anvendes mere.
Hvis du har sp&oslash;rgsm&aring;l til eller problemer med dine nye adgangsoplysninger
b&oslash;r du kontakte webstedet eller administatoren for \'{LOGIN_WEBSITE_TITLE}\'.
Husk at slette din browsers hukommelse (cache) for at undg&aring; problemer med at logge ind.

Venlig hilsen
------------------------------------
Denne besked er sendt automatisk

',
	'SIGNUP2_BODY_LOGIN_INFO' => '
Hej {LOGIN_DISPLAY_NAME},

Velkommen til \'{LOGIN_WEBSITE_TITLE}\'.

Dine adgangsoplysninger til \'{LOGIN_WEBSITE_TITLE}\' er:
Brugernavn: {LOGIN_NAME}
Adgangskode: {LOGIN_PASSWORD}

Venlig hilsen

Hvis du har modtaget denne besked ved en fejl, bedes du straks slette den.
------------------------------------
Denne besked er sendt automatisk
',
	'SIGNUP2_SUBJECT_LOGIN_INFO' => 'Dine LEPTON login detaljer...',
	'SIGNUP_NO_EMAIL' 		=> 'Du skal indtaste en email-adresse',
	'START_CURRENT_USER' 	=> 'Du er logger på som:',
	'START_INSTALL_DIR_EXISTS' => 'ADVARSEL, Installations mappe eksisterer stadig!',
	'START_WELCOME_MESSAGE' => 'Velkommen til LEPTON administration',
	'STATUSFLAG_32'			=> 'Cannot delete User, User got statusflags 32 in table users.',	
	'SYSTEM_FUNCTION_DEPRECATED'=> 'The function <b>%s</b> is deprecated, use the function <b>%s</b> instead!',
	'SYSTEM_FUNCTION_NO_LONGER_SUPPORTED' => 'Den funktion <b>%s</b> er ud-dateret og bliver ikke l&aelig;ngere supporteret!',
	'SYSTEM_SETTING_NO_LONGER_SUPPORTED' => 'Den indstilling <b>%s</b> bliver ikke l&aelig;ngere supporteret, og vil blive ignoreret!',
	'TEMPLATES_CHANGE_TEMPLATE_NOTICE' => 'Bem&aelig;rk venligst: for at &aelig;ndre din skabelon, skal du ind i indstillinger',
	'TEMPLATES_MISSING_PARTS_NOTICE' => 'Indstllation af skabelonen fejlede, da en (eller flere) af f&oslash;lgende variabler mangler:<br />template_directory<br />template_name<br />template_version<br />template_author<br />template_license<br />template_function ("theme" eller "template")',
	'USERS_ADDED' 			=> 'Brugeren blev til&oslash;jet',
	'USERS_CANT_SELFDELETE' => 'Funktionen fejlede, du kan ikke slette dig selv!',
	'USERS_CHANGING_PASSWORD' => 'Bem&aelig;rk venligst: du beh&oslash;ver kun at indtaste i felterne ovenfor, hvis du &oslash;nsker at &aelig;ndre brugerens adgangskode',
	'USERS_CONFIRM_DELETE' 	=> 'Er du sikker på du vil slette den valgte bruger?',
	'USERS_DELETED' 		=> 'Brugeren blev slettet',
	'USERS_EMAIL_TAKEN' 	=> 'Email adressen du indtastede er allerede i brug',
	'USERS_INVALID_EMAIL' 	=> 'Du indtastede en ugyldig emailadresse',
	'USERS_NAME_INVALID_CHARS' => 'Der er indtastet ugyldige tegn i brugernavnet',
	'USERS_NO_GROUP' 		=> 'Der er ikke valgt en gruppe',
	'USERS_PASSWORD_MISMATCH' => 'Adgangskoderne du indtastede er ikke ens',
	'USERS_PASSWORD_TOO_SHORT' => 'Din adgangskode er for kort',
	'USERS_SAVED' 			=> 'Brugeren blev gemt',
	'USERS_USERNAME_TAKEN' 	=> 'Brugernavnet er allerede i brug',
	'USERS_USERNAME_TOO_SHORT' => 'Brugernavnet du indtastede er for kort'
); // $MESSAGE

$OVERVIEW = array(
	'ADMINTOOLS' 			=> 'Tilg&aring; dine LEPTON administrations v&aelig;rkt&oslash;jer...',
	'GROUPS' 				=> 'Administrer bruger-grupperne og deres adgangs tilladelser...',
	'HELP' 					=> 'Har du et sp&oslash;rgsm&aelig;l? Find dit svar...',
	'LANGUAGES' 			=> 'Administrer sprogfiler...',
	'MEDIA' 				=> 'Administrer filerne i Media mappen...',
	'MODULES' 				=> 'Modul administration...',
	'PAGES' 				=> 'Administrer siderne p&aelig; hjemmesiden...',
	'PREFERENCES' 			=> '&AElit;ndre dine  pr&elig;ferencer som f.eks email-addresse, adganskode, osv... ',
	'SETTINGS' 				=> '&AElit;ndre indstillingerne for hjemmesiden...',
	'START' 				=> 'Administrations overblik',
	'TEMPLATES' 			=> '&AElit;ndre din hjemmesides udseende med nye skabeloner...',
	'USERS' 				=> 'Administrer brugere som kan logge ind på hjemmesiden...',
	'VIEW' 					=> 'Gennemse hjemmesiden i et nyt vindue...'
);

/*
 * Create the old languages definitions only if specified in settings
 */
if (ENABLE_OLD_LANGUAGE_DEFINITIONS) {
	foreach ($MESSAGE as $key => $value) {
		$x = strpos($key, '_');
		$MESSAGE[substr($key, 0, $x)][substr($key, $x+1)] = $value;
	}
}
?>
