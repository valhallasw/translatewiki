<?php
/**
 * List of checks that should not be performed.
 *
 * @todo Use YAML?
 * @file
 * @author Niklas Laxström
 * @copyright Copyright © 2008-2010, Niklas Laxström
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

/**
 * The array takes input of arrays which define constraints. Checks which match
 * those constrains are skipped. Possible constrains are <tt>group</tt>,
 * <tt>check</tt>, <tt>code</tt> and <tt>message</tt>.
 */
$checkBlacklist = array(
	array(
		'check' => 'plural',
		'code' => array( 'az', 'bo', 'cdo', 'dz', 'id', 'fa', 'gan', 'gan-hans',
			'gan-hant', 'gn', 'hak', 'hu', 'ja', 'jv', 'ka', 'kk-arab',
			'kk-cyrl', 'kk-latn', 'km', 'kn', 'ko', 'lzh', 'mn', 'ms',
			'my', 'sah', 'sq', 'tet', 'th', 'to', 'tr', 'vi', 'wuu', 'xmf',
			'yo', 'yue', 'zh', 'zh-classical', 'zh-cn', 'zh-hans',
			'zh-hant', 'zh-hk', 'zh-sg', 'zh-tw', 'zh-yue'
		),
	),
	array(
		'group' => 'core',
		'check' => 'plural',
		'message' => array(
			'category-file-count', // Work around for http://bugzilla.wikimedia.org/42631
		),
	),
	array(
		'group' => 'core',
		'check' => 'variable',
		'message' => array(
			'activeusers-count', // Optional GENDER parameter
			'autoblockedtext', // Optional GENDER parameter
			'blocked-notice-logextract', // Optional GENDER parameter
			'blockedtext', // Optional GENDER parameter
			'blocklog-showlog', // Optional GENDER parameter
			'blocklog-showsuppresslog', // Optional GENDER parameter
			'confirmemail_body', // Optional time parameters
			'confirmemail_body_changed', // Optional time parameters
			'confirmemail_body_set', // Optional time parameters
			'currentrev-asof', // Optional time parameters
			'diff-multi-manyusers',
			'filehist-thumbtext', // Optional time parameters
			'group-autoconfirmed-member', // Optional GENDER parameter
			'group-bot-member', // Optional GENDER parameter
			'group-bureaucrat-member', // Optional GENDER parameter
			'group-suppress-member', // Optional GENDER parameter
			'group-sysop-member', // Optional GENDER parameter
			'group-user-member', // Optional GENDER parameter
			'history-feed-item-nocomment', // Optional time parameters
			'lastmodifiedatby', // Optional time parameters
			'listusers-blocked', // Optional GENDER parameter
			'logentry-delete-delete', // Optional GENDER parameter
			'logentry-delete-event', // Optional GENDER parameter
			'logentry-delete-restore', // Optional GENDER parameter
			'logentry-move-move', // Optional GENDER parameter
			'logentry-move-move-noredirect', // Optional GENDER parameter
			'logentry-move-move redir', // Optional GENDER parameter
			'logentry-move-move redir-noredirect', // Optional GENDER parameter
			'logentry-newusers-byemail', // Optional GENDER parameters
			'logentry-newusers-create', // Optional GENDER parameters
			'logentry-newusers-create2', // Optional GENDER parameters
			'logentry-newusers-autocreate', // Optional GENDER parameters
			'logentry-rights-autopromote', // Optional GENDER parameters
			'logentry-rights-rights', // Optional GENDER parameters
			'logentry-rights-rights-legacy', // Optional GENDER parameters
			'logentry-suppress-revision', // Optional GENDER parameters
			'login-userblocked', // Optional GENDER parameter
			'othercontribs', // Optional count parameter
			'perfcachedts', // Optional time parameters
			'prefs-memberingroups-type', // Optional parameter for group name
			'prefs-registration-date-time', // Optional time parameters
			'protect-expiring', // Optional time parameters
			'rcnotefrom', // Optional time parameters
			'revision-info', // Optional time parameters
			'revisionasof', // Optional time parameters
			'siteuser', // Optional GENDER parameter
			'sp-contributions-blocked-notice', // Optional GENDER parameter
			'userrights-changeable-col', // Optional PLURAL parameter
			'userrights-editusergroup', // Optional GENDER parameter
			'userrights-groups-help', // Optional GENDER parameter
			'userrights-groupsmember', // Optional PLURAL parameter
			'userrights-groupsmember-auto', // Optional PLURAL parameter
			'userrights-groupsmember-type', // Optional parameter for group name
			'userrights-unchangeable-col', // Optional PLURAL parameter
		),
	),
	array(
		'group' => 'core-1.19',
		'check' => 'variable',
		'message' => array(
			'mw-core-1.19-logentry-newusers-create2', // Optional GENDER parameter
			'mw-core-1.19-logentry-move-move redir-noredirect', // Optional GENDER parameter
			'mw-core-1.19-logentry-move-move redir', // Optional GENDER parameter
			'mw-core-1.19-logentry-move-move-noredirect', // Optional GENDER parameter
			'mw-core-1.19-logentry-move-move', // Optional GENDER parameter
			'mw-core-1.19-logentry-delete-restore', // Optional GENDER parameter
			'mw-core-1.19-logentry-delete-delete', // Optional GENDER parameter
		),
	),
	array(
		'group' => 'core-1.20',
		'check' => 'variable',
		'message' => array(
			'mw-core-1.20-logentry-newusers-create2', // Optional GENDER parameter
			'mw-core-1.20-logentry-move-move redir-noredirect', // Optional GENDER parameter
			'mw-core-1.20-logentry-move-move redir', // Optional GENDER parameter
			'mw-core-1.20-logentry-move-move-noredirect', // Optional GENDER parameter
			'mw-core-1.20-logentry-move-move', // Optional GENDER parameter
			'mw-core-1.20-logentry-delete-restore', // Optional GENDER parameter
			'mw-core-1.20-logentry-delete-delete', // Optional GENDER parameter
		),
	),
	array(
		'group' => 'core',
		'check' => 'plural',
		'message' => array(
			'diff-multi-manyusers', // Likely to not be needed in languages with same plural as English (many)
		),
	),
	array(
		'group' => 'core',
		'check' => 'plural',
		'code' => array( 'fr' ),
		'message' => array(
			'viewcount', // PLURAL not needed in French
		)
	),
	array(
		'group' => 'ext-abusefilter',
		'check' => 'variable',
		'message' => array(
			'abusefilter-edit-lastmod-text', // Optional username parameter for GENDER, optional time parameters
			'abusefilter-reautoconfirm-none', // Optional username parameter for GENDER
		)
	),
	array(
		'group' => 'ext-articlefeedbackv5',
		'check' => 'variable',
		'message' => array(
			'articlefeedbackv5-activity-item-request', // Optional GENDER parameter
			'articlefeedbackv5-activity-item-clear-flags', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-babel',
		'check' => 'variable',
		'message' => array(
			'babel', // Optional GENDER parameter
			'babel-0', // Optional GENDER parameter
			'babel-1', // Optional GENDER parameter
			'babel-2', // Optional GENDER parameter
			'babel-3', // Optional GENDER parameter
			'babel-4', // Optional GENDER parameter
			'babel-5', // Optional GENDER parameter
			'babel-N', // Optional GENDER parameter
			'babel-0-n', // Optional GENDER parameter
			'babel-1-n', // Optional GENDER parameter
			'babel-2-n', // Optional GENDER parameter
			'babel-3-n', // Optional GENDER parameter
			'babel-4-n', // Optional GENDER parameter
			'babel-5-n', // Optional GENDER parameter
			'babel-N-n', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-call',
		'check' => 'links',
		'message' => array(
			'call-text', // Contains links that are translated
		)
	),
	array(
		'group' => 'ext-categorysortheaders',
		'check' => 'links',
		'message' => array(
			'categorysortheaders-desc', // Contains links that are translated
		)
	),
	array(
		'group' => 'ext-categorytree',
		'check' => 'variable',
		'message' => array(
			'Categorytree-member-counts', // Optional counts: $4, and $5
		)
	),
	array(
		'group' => 'ext-centralauth',
		'check' => 'links',
		'message' => array(
			'centralauth-readmore-text', // Contains link to page that may be available in a translated version
			'centralauth-finish-problems', // Contains link to page that may be available in a translated version
		)
	),
	array(
		'group' => 'ext-centralauth',
		'check' => 'variable',
		'message' => array(
			'centralauth-centralautologin-logged-in', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-checkpoint',
		'check' => 'links',
		'message' => array(
			'checkpoint-notice', // Contains link parts that may need translation
		)
	),
	array(
		'group' => 'ext-checkuser',
		'check' => 'variable',
		'message' => array(
			'group-checkuser-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-citespecial',
		'check' => 'links',
		'message' => array(
			'cite_text', // Contains link parts that may need translation
		)
	),
	array(
		'group' => 'ext-codereview',
		'check' => 'variable',
		'message' => array(
			'code-stats-main', // Optional time parameters
			'group-svnadmins-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-confirmaccount',
		'check' => 'variable',
		'message' => array(
			'requestaccount-email-body', // Optional time parameters
			'confirmaccount-reject', // Optional time parameters
			'confirmaccount-held', // Optional time parameters
		)
	),
	array(
		'group' => 'ext-configure',
		'check' => 'variable',
		'message' => array(
			'configure-condition-description-4', // Optional parameter for PLURAL
			'configure-edit-old', // Optional time parameters
			'configure-old-summary-datetime', // Optional time parameters
			'configure-viewconfig-line', // Optional time parameters
		)
	),
	array(
		'group' => 'ext-configure-settings',
		'check' => 'links',
		'message' => array(
			'configure-setting-wgMaxRedirectLinksRetrieved', // Translatable link
		)
	),
	array(
		'group' => 'ext-contributionseditcount',
		'check' => 'variable',
		'message' => array(
			'contributionseditcount', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-editsubpages',
		'check' => 'links',
		'message' => array(
			'unlockedpages', // Contains links that are translated
		)
	),
	array(
		'group' => 'ext-educationprogram',
		'check' => 'plural',
		'message' => array(
			'logentry-student-remove', // Work around for http://bugzilla.wikimedia.org/42631
		)
	),
	array(
		'group' => 'ext-flagpage',
		'check' => 'links',
		'message' => array(
			'flagpage-templatelist', // Contains link in HTML comment
		)
	),
	array(
		'group' => 'ext-flaggedrevs-flaggedrevs',
		'check' => 'variable',
		'message' => array(
			'group-editor-member', // Optional GENDER parameter
			'group-reviewer-member', // Optional GENDER parameter
			'group-autoreview-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-flaggedrevs-configuredpages',
		'check' => 'variable',
		'message' => array(
			'configuredpages-list', // Parameter $1 only used when required for plural
		)
	),
	array(
		'group' => 'ext-flaggedrevs-pendingchanges',
		'check' => 'variable',
		'message' => array(
			'pendingchanges-list', // Parameter $1 only used when required for plural
		)
	),
	array(
		'group' => 'ext-flaggedrevs-problemchanges',
		'check' => 'variable',
		'message' => array(
			'problemchanges-list', // Parameter $1 only used when required for plural
		)
	),
	array(
		'group' => 'ext-flaggedrevs-qualityoversight',
		'check' => 'variable',
		'message' => array(
			'qualityoversight-list', // Parameter $1 only used when required for plural
		)
	),
	array(
		'group' => 'ext-flaggedrevs-reviewedpages',
		'check' => 'variable',
		'message' => array(
			'reviewedpages-list', // Parameter $1 only used when required for plural
		)
	),
	array(
		'group' => 'ext-flaggedrevs-reviewedversions',
		'check' => 'variable',
		'message' => array(
			'reviewedversions-review', // Optional time parameters, and name for GENDER
		)
	),
	array(
		'group' => 'ext-flaggedrevs-stabilization',
		'check' => 'variable',
		'message' => array(
			'stabilize-expiring', // Optional time parameters
		)
	),
	array(
		'group' => 'ext-flaggedrevs-stablepages',
		'check' => 'variable',
		'message' => array(
			'stablepages-list', // Parameter $1 only used when required for plural
		)
	),
	array(
		'group' => 'ext-flaggedrevs-unreviewedpages',
		'check' => 'variable',
		'message' => array(
			'unreviewedpages-list', // Parameter $1 only used when required for plural
		)
	),
	array(
		'group' => 'ext-linkfilter',
		'check' => 'variable',
		'message' => array(
			'group-linkadmin-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-liquidthreads',
		'check' => 'variable',
		'message' => array(
			'lqt-feed-title-all-from', // Optional PLURAL parameter ($2)
			'lqt-feed-title-new-threads-from', // Optional PLURAL parameter ($2)
			'lqt-feed-title-replies-from', // Optional PLURAL parameter ($2)
			'lqt-thread-edited-others', // Optional date and time parameters ($3/$4)
			'lqt-thread-edited-author', // Optional count, date and time parameters ($2/$3/$4)
		)
	),
	array(
		'group' => 'ext-livetranslate',
		'check' => 'variable',
		'message' => array(
			'group-tmxadmin-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-mirrortools',
		'check' => 'variable',
		'message' => array(
			'group-MirrorTools-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-newusernotification',
		'check' => 'variable',
		'message' => array(
			'newusernotifbody', // Optional time parameters
		)
	),
	array(
		'group' => 'ext-onlinestatus',
		'check' => 'variable',
		'message' => array(
			'onlinestatus-subtitle-offline', // Optional GENDER parameter
			'onlinestatus-subtitle-online', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-openstackmanager',
		'check' => 'plural',
		'code' => array( 'fr' ),
		'message' => array(
			'openstackmanager-instancetypelabel', // PLURAL not needed in French
		)
	),
	array(
		'group' => 'ext-patroller',
		'check' => 'variable',
		'message' => array(
			'group-patroller-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-push',
		'check' => 'variable',
		'message' => array(
			'group-pusher-member', // Optional GENDER parameter
			'group-bulkpusher-member', // Optional GENDER parameter
			'group-filepusher-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-semanticmediawiki',
		'check' => 'links',
		'message' => array(
			'smw_qc_query_help', // Contains links that are translated
		)
	),
	array(
		'group' => 'ext-semanticwatchlist',
		'check' => 'variable',
		'message' => array(
			'group-swladmins-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-qpoll',
		'check' => 'variable',
		'message' => array(
			'qp_user_polls_link', // Optional GENDER parameter
			'qp_user_missing_polls_link', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-regexblock',
		'check' => 'variable',
		'message' => array(
			'regexblock-match-stats-record', // Optional time parameters
			'regexblock-view-time', // Optional time parameters
		)
	),
	array(
		'group' => 'ext-renameuser',
		'check' => 'variable',
		'message' => array(
			'renameuser-renamed-notice', // Optional GENDER parameter
			'logentry-renameuser-renameuser-legacier', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-survey',
		'check' => 'variable',
		'message' => array(
			'group-surveyadmin-member', // Optional GENDER parameter
			'group-surveysubmit-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-timedmediahandler',
		'check' => 'links',
		'message' => array(
			'timedmedia-subtitle-new-desc', // Contains links that are translated
		)
	),
	array(
		'group' => 'ext-titleblacklist',
		'check' => 'variable',
		'code' => array(
			'gan', 'gan-hans', 'gan-hant', 'gn', 'hak', 'hu', 'ja',
			'ka', 'kk-arab', 'kk-cyrl', 'kk-latn', 'ko', 'lzh', 'mn', 'ms', 'sah', 'sq',
			'tet', 'th', 'wuu', 'xmf', 'yue', 'zh', 'zh-classical', 'zh-cn', 'zh-hans',
			'zh-hant', 'zh-hk', 'zh-sg', 'zh-tw', 'zh-yue'
		),
		'message' => array(
			'titleblacklist-invalid', // Param only used in plural
		)
	),
	array(
		'group' => 'ext-translate-core',
		'check' => 'links',
		'message' => array(
			'supportedlanguages-summary', // Contains links that are translated
		)
	),
	array(
		'group' => 'ext-translate-core',
		'check' => 'plural',
		'message' => array(
			'translate-checks-plural-dupe', // Message explaining the check.
		)
	),
	array(
		'group' => 'ext-translate-firststeps',
		'check' => 'links',
		'message' => array(
			'translate-fs-signup-text', // Contains links that are translated
		)
	),
	array(
		'group' => 'ext-uploadwizard',
		'check' => 'variable',
		'message' => array(
			'group-upwizcampeditors-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-whitelistedit',
		'check' => 'variable',
		'message' => array(
			'group-restricted-member', // Optional GENDER parameter
			'group-manager-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-widgets',
		'check' => 'variable',
		'message' => array(
			'group-widgeteditor-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-wikieditor',
		'check' => 'links',
		'message' => array(
			'wikieditor-toolbar-help-content-ilink-syntax', // Contains links that are translated
			'wikieditor-toolbar-help-content-file-syntax', // Contains links that are translated
		)
	),
	array(
		'group' => 'ext-wikibase-repo',
		'check' => 'links',
		'message' => array(
			'wikibase-newproperty-summary', // Contains links that are translated
			'wikibase-createitem-summary', // Contains links that are translated
		)
	),
	array(
		'group' => 'ext-wikiforum',
		'check' => 'variable',
		'message' => array(
			'group-forumadmin-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-wikilog',
		'check' => 'variable',
		'message' => array(
			'wikilog-comment-note-edited', // Optional parameter $3
			'wikilog-summary-categories', // Optional PLURAL parameter ($1)
			'wikilog-summary-footer', // Optional parameters $3, $4, $5, $6
			'wikilog-summary-footer-single', // Optional parameters $1, $2, $3, $4, $5, $6
		)
	),
	array(
		'group' => 'ext-wikimediaincubator',
		'check' => 'links',
		'message' => array(
			'wminc-code-macrolanguage', // Contains link that can be translated
		)
	),
	array(
		'group' => 'ext-wikimediaincubator',
		'check' => 'variable',
		'message' => array(
			'group-test-sysop-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'ext-wikimediamessages',
		'check' => 'variable',
		'message' => array(
			'group-abusefilter-member', // Optional GENDER parameter
			'group-accountcreator-member', // Optional GENDER parameter
			'group-arbcom-member', // Optional GENDER parameter
			'group-autopatrolled-member', // Optional GENDER parameter
			'group-autoreviewer-member', // Optional GENDER parameter
			'group-bigexport-member', // Optional GENDER parameter
			'group-confirmed-member', // Optional GENDER parameter
			'group-editprotected-member', // Optional GENDER parameter
			'group-eliminator-member', // Optional GENDER parameter
			'group-filemover-member', // Optional GENDER parameter
			'group-flood-member', // Optional GENDER parameter
			'group-founder-member', // Optional GENDER parameter
			'group-Image-reviewer-member', // Optional GENDER parameter
			'group-import-member', // Optional GENDER parameter
			'group-interface_editors-member', // Optional GENDER parameter
			'group-ipblock-exempt-member', // Optional GENDER parameter
			'group-OTRS-member-member', // Optional GENDER parameter
			'group-patroller-member', // Optional GENDER parameter
			'group-researcher-member', // Optional GENDER parameter
			'group-rollbacker-member', // Optional GENDER parameter
			'group-transwiki-member', // Optional GENDER parameter
			'group-trusted-member', // Optional GENDER parameter
			'group-steward-member', // Optional GENDER parameter
			'group-sysadmin-member', // Optional GENDER parameter
			'group-editinterface-member', // Optional GENDER parameter
			'group-Global_bot-member', // Optional GENDER parameter
			'group-Global_rollback-member', // Optional GENDER parameter
			'group-Global_sysops-member', // Optional GENDER parameter
			'group-Ombudsmen-member', // Optional GENDER parameter
			'group-Staff-member', // Optional GENDER parameter
		)
	),
	array(
		'group' => 'out-fudforum',
		'check' => 'variable',
		'message' => array(
			'page_timings', // Optional parameter for PLURAL
		)
	),
	array(
		'group' => 'out-fudforum',
		'check' => 'parameters',
		'message' => array(
			'page_timings', // Optional parameter for PLURAL
		)
	),
	array(
		'group' => 'out-osm-site',
		'check' => 'parameters',
		'message' => array(
			'notifier.signup_confirm_html.user_wiki_page', // Contains links that are translated
			'notifier.signup_confirm_plain.user_wiki_2', // Contains links that are translated
		)
	),
	array(
		'group' => 'wikia-autocreatewiki',
		'check' => 'balance',
		'message' => array(
			'autocreatewiki-welcometalk-wall', // Contains unbalanced {
		)
	),
	array(
		'group' => 'wikia-categoryselect',
		'check' => 'links',
		'message' => array(
			'categoryselect-tooltip', // Contains link parts that may need translation
			'categoryselect-code-view-placeholder', // Contains link parts that may need translation
		)
	),
	array(
		'group' => 'wikia-createnewwiki',
		'check' => 'variable',
		'message' => array(
			'cnw-upgrade-marketing', // Contains price with "$" which causes warnings when formatting differently.
		)
	),
	array(
		'group' => 'wikia-graceexpired',
		'check' => 'links',
		'message' => array(
			'graceexpired-header', // Contains link parts that may need translation
		)
	),
	array(
		'group' => 'wikia-hawelcome',
		'check' => 'links',
		'message' => array(
			'welcome-message-wall-user-staff', // Contains link parts that may need translation
		)
	),
	array(
		'group' => 'wikia-problemreports',
		'check' => 'links',
		'message' => array(
			'pr_introductory_text', // Contains link parts that may need translation
		)
	),
	array(
		'group' => 'wikia-sharedhelp',
		'check' => 'links',
		'message' => array(
			'sharedhelp-desc', // Contains link parts that may need translation
		)
	),
	array(
		'group' => 'wikia-specialsponsorpage',
		'check' => 'variable',
		'message' => array(
			'sponsor-price-45yr', // Contains $ sign that can be translated differently.
			'sponsor-price-5mo', // Contains $ sign that can be translated differently.
		)
	),
	array(
		'group' => 'wikia-stafflog',
		'check' => 'variable',
		'message' => array(
			'stafflog-piggybackloginmsg', // Contains optional additional parameters.
			'stafflog-piggybacklogoutmsg', // Contains optional additional parameters.
		)
	),
	array(
		'group' => 'wikia-wikiamobile',
		'check' => 'links',
		'message' => array(
			'wikiamobile-footer-link1', // Contains link parts that may need translation
			'wikiamobile-footer-link2', // Contains link parts that may need translation
			'wikiamobile-footer-link3', // Contains link parts that may need translation
		)
	),
// translatewiki.net specific
	array(
		'group' => 'page-Translating:Intro',
		'check' => 'links',
		'message' => array(
			'Translating:Intro/intro', // Contains links that are translated
		)
	),
);
