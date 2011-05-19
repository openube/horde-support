<?php
/**
 * Ckeditor copy script - copies files used for Horde.
 *
 * Usage: horde-ckeditor.php -a [advpng binary]
 *                           -d [destination (horde/Editor base)]
 *                           -o [optipng binary]
 *                           -s [source]
 *
 * Copyright 1999-2010 The Horde Project (http://www.horde.org/)
 *
 * See the enclosed file COPYING for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author   Michael Slusarz <slusarz@horde.org>
 * @category Horde
 * @license  http://www.fsf.org/copyleft/lgpl.html LGPL
 * @package  maintainer_tools
 */

/* File list. */
$files = array(
    'LICENSE.html',
    'ckeditor.js',
    'ckeditor_basic.js',
    'LICENSE.html',
    'ckeditor.js',
    'ckeditor_basic.js',
    'config.js',
    'contents.css',
    'images/spacer.gif',
    'lang/_languages.js',
    'lang/af.js',
    'lang/ar.js',
    'lang/bg.js',
    'lang/bn.js',
    'lang/bs.js',
    'lang/ca.js',
    'lang/cs.js',
    'lang/cy.js',
    'lang/da.js',
    'lang/de.js',
    'lang/el.js',
    'lang/en-au.js',
    'lang/en-ca.js',
    'lang/en-gb.js',
    'lang/en-uk.js',
    'lang/en.js',
    'lang/eo.js',
    'lang/es.js',
    'lang/et.js',
    'lang/eu.js',
    'lang/fa.js',
    'lang/fi.js',
    'lang/fo.js',
    'lang/fr-ca.js',
    'lang/fr.js',
    'lang/gl.js',
    'lang/gu.js',
    'lang/he.js',
    'lang/hi.js',
    'lang/hr.js',
    'lang/hu.js',
    'lang/is.js',
    'lang/it.js',
    'lang/ja.js',
    'lang/km.js',
    'lang/ko.js',
    'lang/lt.js',
    'lang/lv.js',
    'lang/mn.js',
    'lang/ms.js',
    'lang/nb.js',
    'lang/nl.js',
    'lang/no.js',
    'lang/pl.js',
    'lang/pt-br.js',
    'lang/pt.js',
    'lang/ro.js',
    'lang/ru.js',
    'lang/sk.js',
    'lang/sl.js',
    'lang/sr-latn.js',
    'lang/sr.js',
    'lang/sv.js',
    'lang/th.js',
    'lang/tr.js',
    'lang/uk.js',
    'lang/vi.js',
    'lang/zh-cn.js',
    'lang/zh.js',
    'plugins/a11yhelp/dialogs/a11yhelp.js',
    'plugins/a11yhelp/lang/en.js',
    'plugins/a11yhelp/lang/he.js',
    'plugins/about/dialogs/about.js',
    'plugins/about/dialogs/logo_ckeditor.png',
    'plugins/autogrow/plugin.js',
    'plugins/clipboard/dialogs/paste.js',
    'plugins/colordialog/dialogs/colordialog.js',
    'plugins/dialog/dialogDefinition.js',
    'plugins/div/dialogs/div.js',
    'plugins/find/dialogs/find.js',
    'plugins/flash/dialogs/flash.js',
    'plugins/flash/images/placeholder.png',
    'plugins/forms/dialogs/button.js',
    'plugins/forms/dialogs/checkbox.js',
    'plugins/forms/dialogs/form.js',
    'plugins/forms/dialogs/hiddenfield.js',
    'plugins/forms/dialogs/radio.js',
    'plugins/forms/dialogs/select.js',
    'plugins/forms/dialogs/textarea.js',
    'plugins/forms/dialogs/textfield.js',
    'plugins/forms/images/hiddenfield.gif',
    'plugins/iframedialog/plugin.js',
    'plugins/image/dialogs/image.js',
    'plugins/link/dialogs/anchor.js',
    'plugins/link/dialogs/link.js',
    'plugins/link/images/anchor.gif',
    'plugins/liststyle/dialogs/liststyle.js',
    'plugins/liststyle/plugin.js',
    'plugins/pagebreak/images/pagebreak.gif',
    'plugins/pastefromword/filter/default.js',
    'plugins/pastetext/dialogs/pastetext.js',
    'plugins/scayt/dialogs/options.js',
    'plugins/scayt/dialogs/toolbar.css',
    'plugins/showblocks/images/block_address.png',
    'plugins/showblocks/images/block_blockquote.png',
    'plugins/showblocks/images/block_div.png',
    'plugins/showblocks/images/block_h1.png',
    'plugins/showblocks/images/block_h2.png',
    'plugins/showblocks/images/block_h3.png',
    'plugins/showblocks/images/block_h4.png',
    'plugins/showblocks/images/block_h5.png',
    'plugins/showblocks/images/block_h6.png',
    'plugins/showblocks/images/block_p.png',
    'plugins/showblocks/images/block_pre.png',
    'plugins/smiley/dialogs/smiley.js',
    'plugins/smiley/images/angel_smile.gif',
    'plugins/smiley/images/angry_smile.gif',
    'plugins/smiley/images/broken_heart.gif',
    'plugins/smiley/images/confused_smile.gif',
    'plugins/smiley/images/cry_smile.gif',
    'plugins/smiley/images/devil_smile.gif',
    'plugins/smiley/images/embaressed_smile.gif',
    'plugins/smiley/images/envelope.gif',
    'plugins/smiley/images/heart.gif',
    'plugins/smiley/images/kiss.gif',
    'plugins/smiley/images/lightbulb.gif',
    'plugins/smiley/images/omg_smile.gif',
    'plugins/smiley/images/regular_smile.gif',
    'plugins/smiley/images/sad_smile.gif',
    'plugins/smiley/images/shades_smile.gif',
    'plugins/smiley/images/teeth_smile.gif',
    'plugins/smiley/images/thumbs_down.gif',
    'plugins/smiley/images/thumbs_up.gif',
    'plugins/smiley/images/tounge_smile.gif',
    'plugins/smiley/images/whatchutalkingabout_smile.gif',
    'plugins/smiley/images/wink_smile.gif',
    'plugins/specialchar/dialogs/specialchar.js',
    'plugins/styles/styles/default.js',
    'plugins/stylescombo/styles/default.js',
    'plugins/table/dialogs/table.js',
    'plugins/tableresize/plugin.js',
    'plugins/tabletools/dialogs/tableCell.js',
    'plugins/templates/dialogs/templates.js',
    'plugins/templates/templates/default.js',
    'plugins/templates/templates/images/template1.gif',
    'plugins/templates/templates/images/template2.gif',
    'plugins/templates/templates/images/template3.gif',
    'plugins/uicolor/dialogs/uicolor.js',
    'plugins/uicolor/lang/en.js',
    'plugins/uicolor/lang/he.js',
    'plugins/uicolor/plugin.js',
    'plugins/uicolor/uicolor.gif',
    'plugins/uicolor/yui/assets/hue_bg.png',
    'plugins/uicolor/yui/assets/hue_thumb.png',
    'plugins/uicolor/yui/assets/picker_mask.png',
    'plugins/uicolor/yui/assets/picker_thumb.png',
    'plugins/uicolor/yui/assets/yui.css',
    'plugins/uicolor/yui/yui.js',
    'plugins/wsc/dialogs/ciframe.html',
    'plugins/wsc/dialogs/tmpFrameset.html',
    'plugins/wsc/dialogs/wsc.css',
    'plugins/wsc/dialogs/wsc.js',
    'skins/kama/dialog.css',
    'skins/kama/editor.css',
    'skins/kama/icons.png',
    'skins/kama/icons_rtl.png',
    'skins/kama/images/dialog_sides.gif',
    'skins/kama/images/dialog_sides.png',
    'skins/kama/images/dialog_sides_rtl.png',
    'skins/kama/images/mini.gif',
    'skins/kama/images/noimage.png',
    'skins/kama/images/sprites.png',
    'skins/kama/images/sprites_ie6.png',
    'skins/kama/images/toolbar_start.gif',
    'skins/kama/skin.js',
    'skins/kama/templates.css',
    'skins/office2003/dialog.css',
    'skins/office2003/editor.css',
    'skins/office2003/icons.png',
    'skins/office2003/icons_rtl.png',
    'skins/office2003/images/dialog_sides.gif',
    'skins/office2003/images/dialog_sides.png',
    'skins/office2003/images/dialog_sides_rtl.png',
    'skins/office2003/images/mini.gif',
    'skins/office2003/images/noimage.png',
    'skins/office2003/images/sprites.png',
    'skins/office2003/images/sprites_ie6.png',
    'skins/office2003/skin.js',
    'skins/office2003/templates.css',
    'skins/v2/dialog.css',
    'skins/v2/editor.css',
    'skins/v2/icons.png',
    'skins/v2/icons_rtl.png',
    'skins/v2/images/dialog_sides.gif',
    'skins/v2/images/dialog_sides.png',
    'skins/v2/images/dialog_sides_rtl.png',
    'skins/v2/images/mini.gif',
    'skins/v2/images/noimage.png',
    'skins/v2/images/sprites.png',
    'skins/v2/images/sprites_ie6.png',
    'skins/v2/images/toolbar_start.gif',
    'skins/v2/skin.js',
    'skins/v2/templates.css',
    'themes/default/theme.js'
);

/* custom plugins not part of official distribution */
$custom = array(
    'plugins/syntaxhighlight/dialogs/syntaxhighlight.js',
    'plugins/syntaxhighlight/images/syntaxhighlight.gif',
    'plugins/syntaxhighlight/lang/en.js',
    'plugins/syntaxhighlight/plugin.js'
);

/* Ignore these directories. */
$ignore = array(
    '_samples',
    '_source'
);

/* Strip BOM/Dos linebreaks for these extensions. */
$strip = array(
    'css',
    'html',
    'js'
);

require 'Console/Getopt.php';

$c = new Console_Getopt();
$argv = $c->readPHPArgv();
array_shift($argv);
$options = $c->getopt2($argv, 'a:d:o:s:');
if (PEAR::isError($options)) {
    print "Invalid arguments.\n";
    exit;
}

$advpng = $dest = $optipng = $source = null;

foreach ($options[0] as $val) {
    switch ($val[0]) {
    case 'a':
        $advpng = $val[1];
        break;

    case 'd':
        $dest = rtrim($val[1], '/ ');
        $dest_js = $dest . '/js';
        break;

    case 'o':
        $optipng = $val[1];
        break;

    case 's':
        $source = rtrim($val[1], '/ ');
        break;
    }
}

if (is_null($advpng) ||
    is_null($dest) ||
    is_null($optipng) ||
    is_null($source)) {
    exit("Invalid arguments.\n");
}

$installed = $not_copy = array();

$di = new RecursiveIteratorIterator(new IgnoreFilterIterator(new RecursiveDirectoryIterator($source)), RecursiveIteratorIterator::SELF_FIRST);
foreach ($di as $val) {
    if ($val->isFile()) {
        $pathname = $di->getSubPathname();

        if (in_array($pathname, $files)) {
            _installFile(
                $pathname,
                $dest_js,
                $di->getSubPath(),
                $val->getPathname(),
                pathinfo($val->getFileName(), PATHINFO_EXTENSION)
            );

            $installed[] = $pathname;
        } else {
            $not_copy[] = $pathname;
        }
    }
}

/* Copy custom plugins, add to the installed list */
foreach ($custom as $file) {
    _installFile(
        $file,
        $dest_js,
        pathinfo($file, PATHINFO_DIRNAME),
        dirname(__FILE__) . '/ckeditor/' . $file,
        pathinfo($file, PATHINFO_EXTENSION)
    );

    $installed[] = $file;
}

print "\npackage.xml data:\n" .
      "=================\n";

$xml = new SimpleXMLElement('<dir name="/" />');
$dirs['.'] = $xml;

foreach ($installed as $val) {
    $dname = dirname($val);
    $pos = -1;

    if (!isset($dirs[$dname])) {
        $dirlist = array();
        while (($pos = strpos($dname, '/', $pos + 1)) !== false) {
            $dirlist[] = substr($dname, 0, $pos);
        }
        $dirlist[] = $dname;

        foreach ($dirlist as $dir) {
            if (!isset($dirs[$dir])) {
                $dirs[$dir] = $dirs[dirname($dir)]->addChild('dir', '');
                $dirs[$dir]->addAttribute('name', basename($dir));
            }
        }
    }

    $tmp = $dirs[$dname]->addChild('file', '');
    $tmp->addAttribute('name', basename($val));
    $tmp->addAttribute('role', 'horde');
}

print str_replace(array('></file>', '</dir>', '><dir', '><file'), array("/>\n", "</dir>\n", ">\n<dir", ">\n<file"), $xml->asXML());

print "\n";
foreach ($installed as $val) {
    print '<install name="js/' . $val . '" as="js/ckeditor/' . $val ."\" />\n";
}

print "\nNot copied:\n" .
      "===========\n" .
      implode("\n", $not_copy) .
      "\n";

print "\nCopy config file... ";
copy(dirname(__FILE__) . '/ckeditor/config.js', $dest_js . '/config.js');
print "DONE.\n";

print "\nCompressing PNGs...\n";
system('php ' . dirname(__FILE__) . '/horde-compress-pngs.php -a ' . escapeshellarg($advpng) . ' -d ' . escapeshellarg($dest) . ' -o ' . escapeshellarg($optipng));
print "DONE.\n";

print "\nUpdating package.xml...\n";
system(escapeshellcmd(dirname($dest) . '/../components/bin/horde-components') . ' -u ' . escapeshellarg($dest));
print "DONE.\n";

class IgnoreFilterIterator extends RecursiveFilterIterator
{
    public function accept()
    {
        return !in_array($this->getInnerIterator()->getSubPath(), $GLOBALS['ignore']);
    }
}

function _installFile($file, $dest_js, $subpath, $orig_file, $ext)
{
    if (!file_exists($dest_js . '/' . $subpath)) {
        @mkdir($dest_js . '/' . $subpath, 0777, true);
    }

    $data = file_get_contents($orig_file);

    // Remove BOM & DOS linebreaks
    if (in_array($ext, $GLOBALS['strip'])) {
        $data = preg_replace(array("/^\xEF\xBB\xBF/", "/\r\n/"), array('', "\n"), $data);
    }

    file_put_contents($dest_js . '/' . $file, $data);

    switch ($ext) {
    case 'js':
        /* Compress javascript files. */
        system('php ' . dirname(__FILE__) . '/horde-js-compress.php --nojsmin --overwrite ' . escapeshellcmd($dest_js . '/' . $file));
        break;
    }
}
