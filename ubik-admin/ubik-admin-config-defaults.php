<?php // ==== CONFIGURATION ==== //

// Additional contact methods hack; true/false
defined( 'UBIK_ADMIN_CONTACT_METHODS' )     || define( 'UBIK_ADMIN_CONTACT_METHODS', false );

// Text editor font size; string or false to default to '18px'
defined( 'UBIK_ADMIN_EDITOR_FONT_SIZE' )    || define( 'UBIK_ADMIN_EDITOR_FONT_SIZE', false );

// Text editor font stack; string or false to default back to Helvetica Neue etc. (see code)
defined( 'UBIK_ADMIN_EDITOR_FONT_STACK' )   || define( 'UBIK_ADMIN_EDITOR_FONT_STACK', '"Noto Serif", "Helvetica Neue", Helvetica, Arial, "Nimbus Sans L", "Liberation Sans", sans-serif' );

// Text editor custom Google Fonts declaration; string or false to disable
defined( 'UBIK_ADMIN_EDITOR_GOOGLE_FONTS' ) || define( 'UBIK_ADMIN_EDITOR_GOOGLE_FONTS', 'Noto+Serif:400' );

// Text editor line-height; string or false to default to '1.5'
defined( 'UBIK_ADMIN_EDITOR_LINE_HEIGHT' )  || define( 'UBIK_ADMIN_EDITOR_LINE_HEIGHT', false );

// Master switch for styling the text editor; true/false to disable entirely
defined( 'UBIK_ADMIN_EDITOR_STYLE' )        || define( 'UBIK_ADMIN_EDITOR_STYLE', true );

// Featured image/post thumbnail column in post list; true/false
defined( 'UBIK_ADMIN_POST_LIST_THUMBS' )    || define( 'UBIK_ADMIN_POST_LIST_THUMBS', false );

// Filter posts by tags; true/false
defined( 'UBIK_ADMIN_TAG_FILTER' )          || define( 'UBIK_ADMIN_TAG_FILTER', false );

// Inject some CSS to re-arrange the edit-tags.php template for term power users; true/false
defined( 'UBIK_ADMIN_TERM_EDIT_STYLE' )     || define( 'UBIK_ADMIN_TERM_EDIT_STYLE', false );

// Allow HTML in user descriptions; true/false
defined( 'UBIK_ADMIN_USER_ALLOW_HTML' )     || define( 'UBIK_ADMIN_USER_ALLOW_HTML', false );

// Switch for the magic "all settings" hack; true/false
defined( 'UBIK_ADMIN_VIEW_ALL_SETTINGS' )   || define( 'UBIK_ADMIN_VIEW_ALL_SETTINGS', false );

// Switch for the magic "view all shortcodes" hack; true/false
defined( 'UBIK_ADMIN_VIEW_ALL_SHORTCODES' ) || define( 'UBIK_ADMIN_VIEW_ALL_SHORTCODES', false );

// Master switch for the visual editor; true to disable editor, false to let WordPress control this
defined( 'UBIK_ADMIN_VISUAL_EDITOR_OFF' )   || define( 'UBIK_ADMIN_VISUAL_EDITOR_OFF', false );
