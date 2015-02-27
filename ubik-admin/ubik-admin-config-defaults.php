<?php // ==== CONFIGURATION ==== //

// Featured image/post thumbnail column in post list; true/false
defined( 'UBIK_ADMIN_POST_LIST_THUMBS' )    || define( 'UBIK_ADMIN_POST_LIST_THUMBS', false );

// Filter posts by tags; true/false
defined( 'UBIK_ADMIN_TAG_FILTER' )          || define( 'UBIK_ADMIN_TAG_FILTER', false );

// Inject some CSS to re-arrange the edit-tags.php template for term power users; true/false
defined( 'UBIK_ADMIN_TERM_EDIT_STYLE' )     || define( 'UBIK_ADMIN_TERM_EDIT_STYLE', false );

// Allow HTML in user descriptions; true/false
defined( 'UBIK_ADMIN_USER_ALLOW_HTML' )     || define( 'UBIK_ADMIN_USER_ALLOW_HTML', false );

// Cleam out the cruft in the default WordPress contact methods (AIM, Jabber, YIM); true/false
defined( 'UBIK_ADMIN_USER_CONTACT_CLEAN' )  || define( 'UBIK_ADMIN_USER_CONTACT_CLEAN', true );

// Additional contact methods hack; see source code for an array of options to filter; true/false
defined( 'UBIK_ADMIN_USER_CONTACT_METHOD' ) || define( 'UBIK_ADMIN_USER_CONTACT_METHOD', false );

// Switch for the magic "all settings" hack; true/false
defined( 'UBIK_ADMIN_VIEW_ALL_SETTINGS' )   || define( 'UBIK_ADMIN_VIEW_ALL_SETTINGS', false );

// Switch for the magic "view all shortcodes" hack; true/false
defined( 'UBIK_ADMIN_VIEW_ALL_SHORTCODES' ) || define( 'UBIK_ADMIN_VIEW_ALL_SHORTCODES', false );

// Master switch for the visual editor; true to disable editor, false to let WordPress control this
defined( 'UBIK_ADMIN_VISUAL_EDITOR_OFF' )   || define( 'UBIK_ADMIN_VISUAL_EDITOR_OFF', false );
