<?php

namespace MediaWiki\Extension\PkgStore;

use MWException;
use OutputPage, Parser, Skin;

/**
 * Class MW_EXT_Tooltip
 */
class MW_EXT_Tooltip
{
  /**
   * Register tag function.
   *
   * @param Parser $parser
   *
   * @return void
   * @throws MWException
   */
  public static function onParserFirstCallInit(Parser $parser): void
  {
    $parser->setFunctionHook('tooltip', [__CLASS__, 'onRenderTag']);
  }

  /**
   * Render tag function.
   *
   * @param Parser $parser
   * @param string $word
   * @param string $tooltip
   *
   * @return string
   */
  public static function onRenderTag(Parser $parser, string $word = '', string $tooltip = ''): string
  {
    // Argument: id.
    $getWord = MW_EXT_Kernel::outClear($word ?? '' ?: '');
    $outWord = $getWord;

    // Argument: tooltip.
    $getTooltip = MW_EXT_Kernel::outClear($tooltip ?? '' ?: '');
    $outTooltip = $getTooltip;

    // Out parser.
    return '<span class="mw-tooltip" title="' . $outTooltip . '">' . $outWord . '</span>';
  }

  /**
   * Load resource function.
   *
   * @param OutputPage $out
   * @param Skin $skin
   *
   * @return void
   */
  public static function onBeforePageDisplay(OutputPage $out, Skin $skin): void
  {
    $out->addModuleStyles(['ext.mw.tooltip.styles']);
  }
}
