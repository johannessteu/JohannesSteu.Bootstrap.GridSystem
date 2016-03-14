<?php
namespace JohannesSteu\Bootstrap\GridSystem\ViewHelpers;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "TYPO3.Media".           *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Configuration\ConfigurationManager;

/**
 *
 *
 */
class GridLayoutViewHelper extends \TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * @Flow\Inject
     * @var ConfigurationManager
     */
    protected $configurationManager;

    /**
     * Renders an HTML tag from a given asset.
     *
     * @param array $layout
     * @param int $columnNo
     * @return string
     */
    public function render($layout, $columnNo = 1)
    {
        $layoutSettings = $this->configurationManager->getConfiguration(ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, 'JohannesSteu.Bootstrap.GridSystem.Layouts');
        $breakpointClasses = $this->configurationManager->getConfiguration(ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, 'JohannesSteu.Bootstrap.GridSystem.breakpointClassNames');

        $class = "";
        foreach ($layout as $breakpoint => $setting) {
            if (array_key_exists($setting, $layoutSettings)) {
                if(array_key_exists("col-".$columnNo, $layoutSettings[$setting])) {
                    $class .= " " . $breakpointClasses[$breakpoint].$layoutSettings[$setting]["col-".$columnNo];
                }
            }
        }

        return $class;
    }
}
