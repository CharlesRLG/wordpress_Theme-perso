<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpressThemPerso' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpressThemPerso' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'n5j8C2Dr!p@w8H1h' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l4l$(oa<DF(rw#!8GbA^EmJ^@1r_^pp1_MBaP7/j$Q?+w<]8>*5=9TdJ:L|(r.QM' );
define( 'SECURE_AUTH_KEY',  ')@w7{(CvGVXk#8snHrYfQpXyM=F7:/!+9X5}OKKKT9@w.oP&^|.!LBoFeG~[XR}Q' );
define( 'LOGGED_IN_KEY',    'EN%|7EI.Zn7ubz*3 Z7i<V#eEa;$4cS~+mZ>v2i3=Q9D%qels|)qbT>OJs^$]9iQ' );
define( 'NONCE_KEY',        'U/0mL.5jk-68q5hVVTqbm)tBdAye-F~woo-efw:oZ!n],1}2RB3et^*B^[j`T,UJ' );
define( 'AUTH_SALT',        '[&]Yw3S@O}<OtOv@,#1y7@E^0!G/obq[uRKy7uHg[E&A3nvNeclm4MXSl]jw@^H@' );
define( 'SECURE_AUTH_SALT', '$5Aa_9Jxl^x^*i=-D{$R<,![lK5Dlp;g}=dT6Z8c3O$KpPVyRKEqw.G]^)|HkDY[' );
define( 'LOGGED_IN_SALT',   'v53#)Pyqs`&7)t1LU`D:a`sz m20P=/1q^`u42-ll(]d}9I.mSc?:r1w}A?H1Fm-' );
define( 'NONCE_SALT',       'sSol!Q[O(S?N[WE/* |FTB-^Ayn!6`G`JjH{cR-e@=V!5*8Kz#+JoFmbgofN5/,(' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
