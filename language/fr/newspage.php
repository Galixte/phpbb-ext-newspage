<?php

/**
 * This file is part of the NV Newspage Extension package.
 * @translated into French by Galixte (http://www.galixte.com)
 *
 * @copyright (c) nickvergessen <https://github.com/nickvergessen>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the license.txt file.
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'NEWS'						=> 'Nouvelles du forum',
	'NEWS_ADD_NEW'				=> 'Écrire une nouvelle',
	'NEWS_ADD_NEW_TITLE'		=> 'Ajouter des nouvelles',
	'NEWS_ARCHIVE_SHOW'			=> 'Permettre de classer par date',
	'NEWS_ARCHIVE'				=> 'Archives',
	'NEWS_ARCHIVE_OF'			=> 'Archives %s',
	'NEWS_ATTACH_SHOW'			=> 'Afficher les pièces jointes',
	'NEWS_ATTACH_SHOW_EXPLAIN'	=> 'Les pièces jointes en ligne seront toujours affichées.',
	'NEWS_CAT'					=> 'Catégories',
	'NEWS_CAT_SHOW'				=> 'Permettre de classer par forum',
	'NEWS_CHAR_LIMIT'			=> 'Nombre de caractères pour les extraits',
	'NEWS_COMMENTS'				=> 'Commentaires',
	'NEWS_FILTER_ARCHIVE'		=> 'Classer par date',
	'NEWS_FILTER_BY_ARCHIVE'	=> 'Classer les nouvelles par date',
	'NEWS_FILTER_BY_CATEGORY'	=> 'Classer les nouvelles par forum',
	'NEWS_FILTER_CATEGORY'		=> 'Classer par forum',
	'NEWS_FILTER_REMOVE'		=> 'Retirer le classement',
	'NEWS_FORUMS'				=> 'Sélectionner les forums des nouvelles',
	'NEWS_GO_TO_TOPIC'			=> 'Lien vers le sujet',
	'NEWS_NUMBER'				=> 'Nouvelles par page',
	'NEWS_PAGES'				=> 'Nombre de pages',
	'NEWS_POLL'					=> 'Sondage ',
	'NEWS_POLL_GOTO'			=> 'Cliquer ici pour voter !',
	'NEWS_POST_BUTTONS'			=> 'Afficher les boutons liés aux messages',
	'NEWS_POST_BUTTONS_EXPLAIN'	=> 'Citer, modifier, etc.',
	'NEWS_READ_FULL'			=> 'Lecture complète de la nouvelle',
	'NEWS_READ_HERE'			=> 'Ici',
	'NEWS_SAVED'				=> 'La paramètres ont été sauvegardés avec succès.',
	'NEWS_SHADOW_SHOW'			=> 'Afficher les sujets déplacés',
	'NEWS_USER_INFO'			=> 'Afficher les informations sur l’utilisateur',
	'NEWS_USER_INFO_EXPLAIN'	=> 'Avatar, champs du profil, etc.',

	'NO_NEWS'					=> 'Il n’y a aucune nouvelle.',
	'NO_NEWS_ARCHIVE'			=> 'Il n’y a aucune nouvelle dans cette archive.',
	'NO_NEWS_CATEGORY'			=> 'Il n’y a aucune nouvelle dans cette catégorie.',

	'NEWSPAGE'					=> 'Nouvelles',

	'VIEW_NEWS_POSTS'			=> array(
		0	=> 'Aucune nouvelle',
		1	=> '1 nouvelle',
		2	=> '%d nouvelles',
	),

	'VIEWONLINE_NEWS'			=> 'Consulte les nouvelles',
	'VIEWONLINE_NEWS_ARCHIVE'	=> 'Consulte les nouvelles de %s',
	'VIEWONLINE_NEWS_CATEGORY'	=> 'Consulte les nouvelles dans %s',
	'VIEWONLINE_NEWS_CATEGORY_ARCHIVE'	=> 'Consulte les nouvelles dans %s de %s',
));
