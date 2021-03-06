<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'lbdc_fr');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'lbdc');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'tomtom03xx');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-<Cg^7!U:9<Sd6]s/-^%o}:(5Ratanx0kD|Bp}F2,Rqk24Y+DG]4[OEiEosu*c_~');
define('SECURE_AUTH_KEY',  '+jnf;4HQ<7{>QH;jF}*#%]CDY&jFp2]0)O%gQo5wL?~>n!{C2B<}my=6NS}kBdG;');
define('LOGGED_IN_KEY',    '?fNkGz @=hc7Vf+V%D*=3V/5rhq#1V(ZhW-zkHE[S^[l{[#SNkpGm$(Crce0~G|N');
define('NONCE_KEY',        'c0f~8-VZwzdmU)p_$1E~W,hI&>.^T&_tvtab}PFyGt!.1vro/>H6v=w{Cxw`RqQ|');
define('AUTH_SALT',        'F:AcjR-F+)[ug9:RO|zXsqkAN0?#)s{f+<n~tTDkf+ 7FduXmM`S:ORiB5#2I@sv');
define('SECURE_AUTH_SALT', 'e+96z?.an)!U30N}&*$]CGkvt2ge)-_!IU*yk!-yw3hLa9FvaBG$Vz+%+4)|>woh');
define('LOGGED_IN_SALT',   'EA@bg}t*Fs550Mu.s{j}?Pp^?(-/+AP>f{]2QcbXo>%6e=%sb/v::D,avz5Zxv/Y');
define('NONCE_SALT',       'z!+t%x+$ |KJbWMvh`NBe|UHG y TP#5*=8s$J;.,S<^V1L(`vt}[JE5T>k*NZkp');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
