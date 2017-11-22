<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'btw');

/** Nome utente del database MySQL */
define('DB_USER', 'homestead');

/** Password del database MySQL */
define('DB_PASSWORD', 'secret');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FDmY>,ngV^rm0i8q!QBzn]zw[#S+y0DVG+xK*Ttfx6|XBBf jmlQjqB8R>|!HgT/');
define('SECURE_AUTH_KEY',  'V?]PEW!r@>8xZ@2bewhYaPJnmub{rsRhOoe%-dLt6L]g9bi]%wD}y:Bejo3~a]6s');
define('LOGGED_IN_KEY',    'iK87e^zOY?^gt[e|pB8^]$G9Zy+uKt_k-clobu2>4`moBGC43$YO,&!Wwjfqw(Hy');
define('NONCE_KEY',        'k{c/6*D5oyBiN}H{:v|$]% |Og>&o]9-#p0V$+rE_k_gB$s4`8}~6+vL49]lOz;2');
define('AUTH_SALT',        'GLTK)y~bL|t-7g3G+v_)+[%L(qgz=Gn+bha0pP~-;`KvV*H*|*uH,EsoH m  kCW');
define('SECURE_AUTH_SALT', ']-S`N|f>I2]Ec$y6fQ^AITgl1Y%#v}Mzk]QUED3-uL5^XJ;)rg+L+a-Or-WwD?(]');
define('LOGGED_IN_SALT',   'j!(M5Z m+A>8i[IJ@`=&s!F5ua6]]aYa<elZBSDo%s=@{tU&Y!]4T+w]XSoo GqG');
define('NONCE_SALT',       'sp(8=ux3n`KN+_ vP(GJ8gf(>Q^$mJFmFf{ehp-`Q<u8]*xDR2j$y%OGWM@tWm~p');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'dbbs_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');