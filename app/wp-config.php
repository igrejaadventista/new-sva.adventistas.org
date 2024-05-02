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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'WP_DB_NAME');

/** MySQL database username */
define( 'DB_USER', 'WP_DB_USER');

/** MySQL database password */
define( 'DB_PASSWORD', 'WP_DB_PASSWORD');

/** MySQL hostname */
define( 'DB_HOST', 'WP_DB_HOST');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'DISALLOW_FILE_EDIT', true );

define( 'AS3CF_SETTINGS', serialize( array(
    'provider' => 'aws',
    'access-key-id' => 'AWS_S3_ACCESS_KEY',
    'secret-access-key' => 'AWS_S3_SECRET_KEY',
	'bucket' => 'WP_S3_BUCKET'
) ) );


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
define( 'AUTH_KEY',         'KRcUAe}|1XRZ$mg@@M+%$/MN8as.p:,CI|Hg{F<jc&$Q3:-!CiLA3h~IUm=XXhRq' );
define( 'SECURE_AUTH_KEY',  '(58)xQeeId@_Dt^<@y-ykL6%ovd@s0f&?v(5c}y#IYC-ipI6.u8!Q28)&dA>b0 J' );
define( 'LOGGED_IN_KEY',    'o.g3l;#GVR](cP(6ZtHP$sLK:/eE=KI%5MlWnQX#F2mH*3pJN)??GGN`&5X]-.h9' );
define( 'NONCE_KEY',        '}g@}yCLL4Ip#QaX@tfGw5q,|f@?Q3`$%^2~mS10CA@va*#}Rm8^U]uF?iW)N.e.D' );
define( 'AUTH_SALT',        'HFttS-&m:n:0~Z%QV<zum]*YEYR tn&X,dEvo^:H`H-9TV9OQD}Z4XV:C42e+d({' );
define( 'SECURE_AUTH_SALT', 'oY ouICm4zX_nRl=[ECB:F4=GrZ&FrFMaQ}Jykt(t+]/xEB>&m; BuF[HlMsfD^B' );
define( 'LOGGED_IN_SALT',   'tj!yX*oqGQ}ud?<Z|#P!Da,fV8D=I -[Z:LyAQBW#TZmd8PQ)4bgI$S?xkdDZrC=' );
define( 'NONCE_SALT',       'QG^i@H99%a4aiUA4vKnRO/UT;_kcWAcCC&]D2.J_cQIk }<_UqKK?FzbJ8w=Yz&[' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
