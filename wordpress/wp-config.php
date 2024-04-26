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
define( 'DB_NAME', 'tafort' );

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
define( 'AUTH_KEY',         '4E7;d@O#kTMx7<Iw+~AcHeqArK~Ij&%~Bx^qcjtQFplm-SA?9@X_2*o5CX2PBgb<' );
define( 'SECURE_AUTH_KEY',  ',:E=SXMtZw;Z6 <6>g)KTo[3d*Vl4.h9.R:2o4e_F_ZXyDK(9Epd>z4;~]l,k-~+' );
define( 'LOGGED_IN_KEY',    'z31G&OQ-UJ%V1&F)f#b/E|.`}ci+[<c>I?8+0UDg#Z*l# ?[k6ftZ8s@L.uYyX]|' );
define( 'NONCE_KEY',        'Q9iUDSo[~-ro~{r+Jy7)d?S!-<Elaz8pS_.M.5HO?2~(nd*oOX{,{qVIo{r-}|Jy' );
define( 'AUTH_SALT',        ')8vT^Y,.7Nw8=hfaE=^l!9qDB2]BF)Z6vBG%NV<C:/-,M_XCj !HMB+lW;eDRxKS' );
define( 'SECURE_AUTH_SALT', 'k3><NT^U@W-/ECl]asa</I7ZKK j~.tJ]+!:{k);A_bHYOSt1D=Qb}_RmC*+;]^6' );
define( 'LOGGED_IN_SALT',   '=Q3W_gB.[}eHOk2ttnJyI0x>_k)OtO8y,2YLJ[irN^[}Tpl~o]f+FkI68ty+o^Q1' );
define( 'NONCE_SALT',       'V1n:FC!tNmDEiq2>stp#J!;cvLkA[&kRvd0y9*eDSsO~PE]]lrb@ab(1H/~_|$Vh' );

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
