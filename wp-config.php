<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'meediaonne_wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KQRC?+l7@PU!)83J}94D%?nP NPPC~x,?HLmWtMtjBf>r=JA$> Bv96H?OZ%!Dac' );
define( 'SECURE_AUTH_KEY',  'k5rrJ`8RFOk7)jn^IIqW$yS6mg- ;Po4=t^jEZ4<%@,PJbt=Bn3Dw:-dE-`}^i4Q' );
define( 'LOGGED_IN_KEY',    'YjZ)of(N_*{PT~^HM}*/BmSc;_nu^l^WNr(Awdz>FK?QJWF<w8/&M )]T*xsR~0V' );
define( 'NONCE_KEY',        'uirW4s!$9I6x3RDFs3Qp!`$tdt1B%1JP_$.na<jA^U1p5J]!/}5.U|*h`!-?q~A|' );
define( 'AUTH_SALT',        'e5{2X93a1o@]H)9UL^X/7I%if7)!uMELB7|R@rF]sphA,ct,%#y810LcFy&/<27b' );
define( 'SECURE_AUTH_SALT', 'i6R`c5pLew<FR?pyie}8XREFVdl%5 E^s6Lq6@<VKIOiX+mR_uEGi]x2ZcSs(~a5' );
define( 'LOGGED_IN_SALT',   'np.Y]L&OYD:lu^->c_ ,Qt#Z?2vt2?@Z;`f*Z&RLVd?44pBlR9]y=lF,V}),GTh=' );
define( 'NONCE_SALT',       '66#9_FDIzUS2_>f+(,hU#r;2=J7bl*:0dACA)0c@~[VAFPB?%t,Q%^7e9M,G .LD' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
