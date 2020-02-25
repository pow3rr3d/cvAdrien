<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'cvAdrien' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jO@jgr-%ezjqh~WYUXd&h0T5j*JT=Gep,!p,:@lg1HNt8yUlC],l93`WL:@D|RZW' );
define( 'SECURE_AUTH_KEY',  '-c8vww(. Rti_QNwRLc(Q}N[XoJN9ir`m[eYLh19,Wqwz6x{~)O#&rdqex<^</PN' );
define( 'LOGGED_IN_KEY',    '9[LAu  =+U(Ftk{dHNe*vO9U|3/FUgrW3[eQ({<#=c{HRS!;}(y<^|{r6!J{6[/B' );
define( 'NONCE_KEY',        ']bSURMq&B&iS/G6kM)6HQGT2gfO=brm`^:(SnyIzsMB]<_[HpHckfIN>[($+ui$U' );
define( 'AUTH_SALT',        'y<,_7BQWDcWn<miN.1n`.j&8f[[.]`-^T,tP0QUQ6<{&v<{S-YTJ^bt]6}7K&o31' );
define( 'SECURE_AUTH_SALT', '<J68hEV]1yBMLz+3X#y+g*1*4~`Q,^|G850gf0g/71dD>qp%gwlxVU<UPLj1SGql' );
define( 'LOGGED_IN_SALT',   '>(3XaZ$s+Vb)=EFbO]Vw7qwZAVdTNyC-h.]jOYmi&hsyjj,LAy}+h_$[Jhnh8)p/' );
define( 'NONCE_SALT',       '1&Zo4x)j)FsW@v/rL[hH{{OB5nq 4&y/PR=jpxCu]k1(H7AfB{WK/g#3!Buhp>Fb' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
