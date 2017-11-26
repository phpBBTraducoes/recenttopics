<?php
/**
 *
 * @package Recent Topics Extension
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 2.2.6.1] (https://github.com/phpBBTraducoes)
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge(
	$lang, array(
	//forum acp
	'RECENT_TOPICS_LIST'            => 'Exibir tópicos recentes"',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'Ative para exibir tópicos neste fórum na extensão "tópicos recentes"',

	//acp title
	'RECENT_TOPICS'                 => 'Tópicos recentes',
	'RT_CONFIG'                     => 'Configuração',
	'RECENT_TOPICS_EXPLAIN'         => 'Nesta página você pode alterar as configurações específicas para a extensão Recent Topics. <br /> <br /> Fóruns específicos podem ser incluídos ou excluídos editando os respectivos fóruns em seu ACP. Certifique-se de verificar as permissões de usuário, que permitem aos usuários alterar algumas das configurações encontradas abaixo para si.',

	//global settings
	'RT_GLOBAL_SETTINGS'            => 'Configurações globais',
	'RT_DISPLAY_INDEX'              => 'Mostrar na página de índice',
	'RT_NUMBER'                     => 'Tópicos recentes',
	'RT_NUMBER_EXP'                 => 'Número de tópicos a apresentar.',
	'RT_PAGE_NUMBER'                => 'Páginas de tópicos recentes',
	'RT_PAGE_NUMBER_EXP'            => 'Digite 1 para desativar a paginação de tópicos recentes.',
	'RT_PAGE_NUMBERMAX'             => 'Número máximo de páginas',
	'RT_PAGE_NUMBERMAX_EXP'         => 'Defina o máximo da página (1-999) para exibir na paginação de tópicos recentes onde a opção "Exibição completa de páginas de tópicos recentes" está desabilitada.',
	'RT_MIN_TOPIC_LEVEL'            => 'Nível mínimo do tipo de tópico',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'Determina o nível mínimo do tipo de tópico a ser exibido. Ele só exibirá tópicos do nível definido e mais alto.',
	'RT_ANTI_TOPICS'                => 'Topicos excluídos',
	'RT_ANTI_TOPICS_EXP'            => 'Os IDs de tópicos a excluir, separados por "," (Exemplo: 7,9) </ b>',
	'RT_PARENTS'                    => 'Mostrar Fórum Pai',
	'RT_PARENTS_EXP'                => 'Exibir fóruns pai dentro da linha tópico de tópicos recentes.',

	//User Overridable settings. these apply for anon users and can be overridden by UCP
	'RT_OVERRIDABLE'                => 'UCP configurações substituíveis',
	'RT_LOCATION'                   => 'Mostrar local',
	'RT_LOCATION_EXP'               => 'Selecionar local para exibir tópicos recentes.',
	'RT_TOP'                        => 'Mostrar no topo',
	'RT_BOTTOM'                     => 'Mostrar no fundo',
	'RT_SIDE'                       => 'Mostrar no lado direito',
	'RT_SORT_START_TIME'            => 'Ordenar tópicos por a hora de início',
	'RT_SORT_START_TIME_EXP'        => 'Ative para classificar tópicos recentes pela hora de início do tópico, em vez da última hora de publicação.',
	'RT_UNREAD_ONLY'                => 'Mostrar apenas tópicos não lidos',
	'RT_UNREAD_ONLY_EXP'            => 'Ative para exibir somente tópicos não lidos (se eles são "recentes" ou não). Esta função usa as mesmas configurações (excluindo fóruns / tópicos etc.) como modo normal. Nota: isso só funciona para usuários conectados; Os convidados receberão a lista normal.',
	'RT_RESET_DEFAULT'              => 'Redefinir as configurações do usuário',
	'RT_RESET_DEFAULT_EXP'          => 'Redefinir as configurações do usuário para o padrão.',
	
	//Enable for extensions
	'RT_NICKVERGESSEN_NEWSPAGE'     => 'Suporte para a Extensão NewsPage',
	'RT_VIEW_ON'                    => 'Mostrar tópicos recentes:',

	//Version checker
	'RT_VERSION_CHECK'				=> 'Versão Check',
	'RT_LATEST_VERSION'				=> 'Última versão',
	'RT_EXT_VERSION'				=> 'Versão da extensão',
	'RT_VERSION_ERROR'				=> 'Não é possível verificar a versão mais recente!',
	'RT_CHECK_UPDATE'				=> 'Check <a href="http://www.avathar.be/bbdkp/index.php">avathar.be</a> para ver se há atualizações disponíveis.',

	//Donation
	'RT_DONATE_URL'             => 'http://www.avathar.be/bbdkp/app.php/page/donate',
	'PAYPAL_IMAGE_URL'          => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                => 'Doe usando PayPal',
	'RT_DONATE'					=> 'Doar para RecentTopics',
	'RT_DONATE_SHORT'			=> 'Faça uma doação ao RecentTopics',
	'RT_DONATE_EXPLAIN'			=> 'RecentTopics é 100% gratuito. É um projeto de hobby no qual estou gastando meu tempo e dinheiro, apenas por diversão. Se você gosta de usar RecentTopics, considere fazer uma doação. Eu realmente apreciaria isto. Sem condições.',
	)
);
