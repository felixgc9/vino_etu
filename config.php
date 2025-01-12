<?php
/**
 * Fichier de configuration. Il est appelé par index.php et par test/index.php
 * Il contient notamment l'autoloader
 * @author Jonathan Martel
 * @version 1.1
 * @update 2013-03-11
 * @update 2014-09-23 Modification de la fonction autoload, utilisation des path + appel à la fonction native.
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
	
	


	function mon_autoloader($class) 
	{
		$dossierClasse = array('modeles/', 'vues/', 'lib/', 'lib/mysql/', '' );	// Ajouter les dossiers au besoin
		
		foreach ($dossierClasse as $dossier) 
		{
			//var_dump('./'.$dossier.$class.'.class.php');
			if(file_exists('./'.$dossier.$class.'.class.php'))
			{
				require_once('./'.$dossier.$class.'.class.php');
			}
		}
		
	  
	}
	
	spl_autoload_register('mon_autoloader');



// Liste des pays

$paysArray= array(
    "CA" => "Canada",
    "US" => "États-Unis",
    "AF" => "L'Afghanistan",
    "AX" => "Iles Aland",
    "AL" => "Albanie",
    "DZ" => "Algérie",
    "AS" => "Samoa américaines",
    "AD" => "Andorre",
    "AO" => "L'Angola",
    "AI" => "Anguilla",
    "AQ" => "Antarctique",
    "AG" => "Antigua-et-Barbuda",
    "AR" => "Argentine",
    "AM" => "Arménie",
    "AW" => "Aruba",
    "AU" => "Australie",
    "AT" => "L'Autriche",
    "AZ" => "Azerbaïdjan",
    "BS" => "Bahamas",
    "BH" => "Bahreïn",
    "BD" => "Bangladesh",
    "BB" => "Barbade",
    "BY" => "Biélorussie",
    "BE" => "Belgique",
    "BZ" => "Belize",
    "BJ" => "Bénin",
    "BM" => "Bermudes",
    "BT" => "Bhoutan",
    "BO" => "Bolivie",
    "BQ" => "Bonaire, Saint-Eustache et Saba",
    "BA" => "Bosnie Herzégovine",
    "BW" => "Botswana",
    "BV" => "Île Bouvet",
    "BR" => "Brésil",
    "IO" => "Territoire britannique de l'océan Indien",
    "BN" => "Brunei Darussalam",
    "BG" => "Bulgarie",
    "BF" => "Burkina Faso",
    "BI" => "Burundi",
    "KH" => "Cambodge",
    "CM" => "Cameroun",
    "CV" => "Cap-Vert",
    "KY" => "Îles Caïmans",
    "CF" => "République centrafricaine",
    "TD" => "Tchad",
    "CL" => "Chili",
    "CN" => "Chine",
    "CX" => "L'île de noël",
    "CC" => "Îles Cocos (Keeling)",
    "CO" => "Colombie",
    "KM" => "Comores",
    "CG" => "Congo",
    "CD" => "Congo, République démocratique du Congo",
    "CK" => "les Îles Cook",
    "CR" => "Costa Rica",
    "CI" => "Côte d'Ivoire",
    "HR" => "Croatie",
    "CU" => "Cuba",
    "CW" => "Curacao",
    "CY" => "Chypre",
    "CZ" => "République Tchèque",
    "DK" => "Danemark",
    "DJ" => "Djibouti",
    "DM" => "Dominique",
    "DO" => "République dominicaine",
    "EC" => "Equateur",
    "EG" => "Egypte",
    "SV" => "Le Salvador",
    "GQ" => "Guinée Équatoriale",
    "ER" => "Érythrée",
    "EE" => "Estonie",
    "ET" => "Ethiopie",
    "FK" => "Îles Falkland (Malvinas)",
    "FO" => "Îles Féroé",
    "FJ" => "Fidji",
    "FI" => "Finlande",
    "FR" => "France",
    "GF" => "Guyane Française",
    "PF" => "Polynésie française",
    "TF" => "Terres australes françaises",
    "GA" => "Gabon",
    "GM" => "Gambie",
    "GE" => "Géorgie",
    "DE" => "Allemagne",
    "GH" => "Ghana",
    "GI" => "Gibraltar",
    "GR" => "Grèce",
    "GL" => "Groenland",
    "GD" => "Grenade",
    "GP" => "Guadeloupe",
    "GU" => "Guam",
    "GT" => "Guatemala",
    "GG" => "Guernesey",
    "GN" => "Guinée",
    "GW" => "Guinée-Bissau",
    "GY" => "Guyane",
    "HT" => "Haïti",
    "HM" => "Îles Heard et McDonald",
    "VA" => "Saint-Siège (État de la Cité du Vatican)",
    "HN" => "Honduras",
    "HK" => "Hong Kong",
    "HU" => "Hongrie",
    "IS" => "Islande",
    "IN" => "Inde",
    "ID" => "Indonésie",
    "IR" => "Iran (République islamique d",
    "IQ" => "Irak",
    "IE" => "Irlande",
    "IM" => "île de Man",
    "IL" => "Israël",
    "IT" => "Italie",
    "JM" => "Jamaïque",
    "JP" => "Japon",
    "JE" => "Jersey",
    "JO" => "Jordan",
    "KZ" => "Kazakhstan",
    "KE" => "Kenya",
    "KI" => "Kiribati",
    "KP" => "République populaire démocratique de Corée",
    "KR" => "Corée, République de",
    "XK" => "Kosovo",
    "KW" => "Koweit",
    "KG" => "Kirghizistan",
    "LA" => "République démocratique populaire lao",
    "LV" => "Lettonie",
    "LB" => "Liban",
    "LS" => "Lesotho",
    "LR" => "Libéria",
    "LY" => "Jamahiriya arabe libyenne",
    "LI" => "Liechtenstein",
    "LT" => "Lituanie",
    "LU" => "Luxembourg",
    "MO" => "Macao",
    "MK" => "Macédoine, ancienne République yougoslave de",
    "MG" => "Madagascar",
    "MW" => "Malawi",
    "MY" => "Malaisie",
    "MV" => "Maldives",
    "ML" => "Mali",
    "MT" => "Malte",
    "MH" => "Iles Marshall",
    "MQ" => "Martinique",
    "MR" => "Mauritanie",
    "MU" => "Ile Maurice",
    "YT" => "Mayotte",
    "MX" => "Mexique",
    "FM" => "Micronésie, États fédérés de",
    "MD" => "Moldova, République de",
    "MC" => "Monaco",
    "MN" => "Mongolie",
    "ME" => "Monténégro",
    "MS" => "Montserrat",
    "MA" => "Maroc",
    "MZ" => "Mozambique",
    "MM" => "Myanmar",
    "NA" => "Namibie",
    "NR" => "Nauru",
    "NP" => "Népal",
    "NL" => "Pays-Bas",
    "AN" => "Antilles néerlandaises",
    "NC" => "Nouvelle Calédonie",
    "NZ" => "Nouvelle-Zélande",
    "NI" => "Nicaragua",
    "NE" => "Niger",
    "NG" => "Nigeria",
    "NU" => "Niue",
    "NF" => "l'ile de Norfolk",
    "MP" => "Îles Mariannes du Nord",
    "NO" => "Norvège",
    "OM" => "Oman",
    "PK" => "Pakistan",
    "PW" => "Palau",
    "PS" => "Territoire palestinien, occupé",
    "PA" => "Panama",
    "PG" => "Papouasie Nouvelle Guinée",
    "PY" => "Paraguay",
    "PE" => "Pérou",
    "PH" => "Philippines",
    "PN" => "Pitcairn",
    "PL" => "Pologne",
    "PT" => "Le Portugal",
    "PR" => "Porto Rico",
    "QA" => "Qatar",
    "RE" => "Réunion",
    "RO" => "Roumanie",
    "RU" => "Fédération Russe",
    "RW" => "Rwanda",
    "BL" => "Saint Barthélemy",
    "SH" => "Sainte-Hélène",
    "KN" => "Saint-Christophe-et-Niévès",
    "LC" => "Sainte-Lucie",
    "MF" => "Saint Martin",
    "PM" => "Saint-Pierre-et-Miquelon",
    "VC" => "Saint-Vincent-et-les-Grenadines",
    "WS" => "Samoa",
    "SM" => "Saint Marin",
    "ST" => "Sao Tomé et Principe",
    "SA" => "Arabie Saoudite",
    "SN" => "Sénégal",
    "RS" => "Serbie",
    "CS" => "Serbie et Monténégro",
    "SC" => "les Seychelles",
    "SL" => "Sierra Leone",
    "SG" => "Singapour",
    "SX" => "St Martin",
    "SK" => "Slovaquie",
    "SI" => "Slovénie",
    "SB" => "Les îles Salomon",
    "SO" => "Somalie",
    "ZA" => "Afrique du Sud",
    "GS" => "Géorgie du Sud et îles Sandwich du Sud",
    "SS" => "Soudan du sud",
    "ES" => "Espagne",
    "LK" => "Sri Lanka",
    "SD" => "Soudan",
    "SR" => "Suriname",
    "SJ" => "Svalbard et Jan Mayen",
    "SZ" => "Swaziland",
    "SE" => "Suède",
    "CH" => "la Suisse",
    "SY" => "République arabe syrienne",
    "TW" => "Taiwan, Province de Chine",
    "TJ" => "Tadjikistan",
    "TZ" => "Tanzanie, République-Unie de",
    "TH" => "Thaïlande",
    "TL" => "Timor-Leste",
    "TG" => "Aller",
    "TK" => "Tokelau",
    "TO" => "Tonga",
    "TT" => "Trinité-et-Tobago",
    "TN" => "Tunisie",
    "TR" => "dinde",
    "TM" => "Turkménistan",
    "TC" => "îles Turques-et-Caïques",
    "TV" => "Tuvalu",
    "UG" => "Ouganda",
    "UA" => "Ukraine",
    "AE" => "Emirats Arabes Unis",
    "GB" => "Royaume-Uni",
   
    "UM" => "Îles mineures éloignées des États-Unis",
    "UY" => "Uruguay",
    "UZ" => "Ouzbékistan",
    "VU" => "Vanuatu",
    "VE" => "Venezuela",
    "VN" => "Viet Nam",
    "VG" => "Îles Vierges britanniques",
    "VI" => "Îles Vierges américaines, États-Unis",
    "WF" => "Wallis et Futuna",
    "EH" => "Sahara occidental",
    "YE" => "Yémen",
    "ZM" => "Zambie",
    "ZW" => "Zimbabwe"
);
global $paysArray ;
define('PAYSARRAY', $paysArray);
?>
	

