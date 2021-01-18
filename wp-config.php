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
define( 'DB_NAME', 'wpbanco' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',@eGo#N?-!e{v{GW_/$}|=]Pv}pk~I>e8BlD:lce1Rl_*)u?!~SL%tz>6=KYZ0ue' );
define( 'SECURE_AUTH_KEY',  'OB[dF:})J,[j55j/Oo.KRbLZ`:<DBd`d%kfC?f3BAA0lHy/[fcwF|;(.wEItKt~?' );
define( 'LOGGED_IN_KEY',    'GgBH$GgD3alalrxQVF~D3RUiT6z+.~[wc*s?L!heom,:gmnVNPZ@eL}h=u@d^N&?' );
define( 'NONCE_KEY',        '0`AM4P2pbRS4~^+pAA2D$Ex/JQm?0Igz#gDmN7NBhSt{*>^>x-?Y&X/MpftTyiTX' );
define( 'AUTH_SALT',        'V~vBAe4vZTEIES dV2^}[K56P=>^NFsLPP[Lq9>%ZK?pEb)X78eWvhKr1cm ?Ox ' );
define( 'SECURE_AUTH_SALT', '1k{R:]X}:X<VI!E|@,^82bBynwiuPOh`%8/M+T]4qqRTfMQFu_hl@~/mE6`kC$S}' );
define( 'LOGGED_IN_SALT',   'JxG;vz+vCd09hX0?1HG/t[4yVpI-CZJ^~o,H~( o0,:<:`<:Cv$$[B$|_mu1@/2_' );
define( 'NONCE_SALT',       '<_g<c}w#]uhi/e$0BE=cJwSaC[DK/5PhJQp_}a~2l`bM> 1HkTh`JAdvv3,!k-1/' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpcrs_';

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
