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
define( 'DB_NAME', 'teste_utrip' );

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
define( 'AUTH_KEY',         '>3L3fz&7xXNrDW;MlbGgHD1<]dm^yUa_fh3Yry,Y*rdv[WH&{8hDM0$Qxsi*#e~R' );
define( 'SECURE_AUTH_KEY',  'Oua>yH$;Uq7{S kWOdnc_7U~PQi3<n,5~`@$qy9zlo AHMXPm4K_GM%<>GCEv>ao' );
define( 'LOGGED_IN_KEY',    'p6T{jl/=oYV<YuGbIz?cN8h@Q$L`)=sF-L6yXe|E.)Beix=z7b*qxnC)_3SI.3<7' );
define( 'NONCE_KEY',        'X:/KSCuC3UD%ry.wLZ2`4LX_}K:UEgnn@MT%cIMU/w~qk{`j 1S%BJ&$Hbct|WKp' );
define( 'AUTH_SALT',        'ge>).zV$;0+`i{5kjVJ.M($os+.<Hy>MO`:fvalNQX6qWy~ ;7&KUv>L=dp>^hiB' );
define( 'SECURE_AUTH_SALT', '#:vhSA^g0OyzU_9|e:M#R-0V>F]6a|Cp`Jdpk86fS]?:i&x5s[NmSYw#bpYF~f0c' );
define( 'LOGGED_IN_SALT',   '^~<%/H@ElC1!T+l5k:G5+ygRLBk#V|?wpB#M/]wip}v5!c${{M;3^.mQ&mc*dkSD' );
define( 'NONCE_SALT',       'l~jJTUY [U9OQb8m}Eoi-nvbM%t4!lLaR7WK>qG.IvO1|L)z!n}GH.1:8/0*e$wD' );

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
