/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    // KCFinder
    config.filebrowserBrowseUrl = 'public/assets_for_backend/plugins/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = 'public/assets_for_backend/plugins/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = 'public/assets_for_backend/plugins/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = 'public/assets_for_backend/plugins/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = 'public/assets_for_backend/plugins/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = 'public/assets_for_backend/plugins/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
    // ...
};
