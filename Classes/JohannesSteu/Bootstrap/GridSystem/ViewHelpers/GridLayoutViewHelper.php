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

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Configuration\ConfigurationManager;

class GridLayoutViewHelper extends \TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper
{
    /**
     * @Flow\Inject
     * @var ConfigurationManager
     */
    protected $configurationManager;

    /**
     * Renders the layout class.
     *
     * @param string $layout
     * @param int   $columnNo
     *
     * @return string
     */
    public function render($layout, $columnNo = 1)
    {
        $settings = $this->configurationManager->getConfiguration(ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, 'JohannesSteu.Bootstrap.GridSystem.Layouts');

        if (array_key_exists($layout, $settings)) {
            if (array_key_exists('col-'.$columnNo, $settings[$layout])) {
                return $settings[$layout]['col-'.$columnNo];
            }
        }

        return '';
    }
}
