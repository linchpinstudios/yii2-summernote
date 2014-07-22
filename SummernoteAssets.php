<?php
/**
 * @link http://www.linchpinstudios.com/
 * @copyright Copyright (c) 2014 Linchpin Studios LLC
 * @license http://opensource.org/licenses/MIT
 */

namespace linchpinstudios\summernote;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DateTimePickerAssets extends AssetBundle
{
    public $sourcePath = '@vendor/HackerWins/summernote';
    public $css = [
        'dist/summernote.css',
    ];
    public $js = [
        'dist/summernote.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}