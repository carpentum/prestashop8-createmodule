<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */
declare(strict_types=1);

namespace PrestaShop\Module\Mbo\Traits\Hooks;

use PrestaShop\Module\Mbo\Exception\ExpectedServiceNotFoundException;
use PrestaShop\Module\Mbo\Helpers\ErrorHelper;

trait UseActionObjectEmployeeDeleteBefore
{
    /**
     * Hook ActionObjectEmployeeDeleteBefore.
     */
    public function hookActionObjectEmployeeDeleteBefore($params): void
    {
        if (empty($params) || empty($params['object']) || !$params['object'] instanceof \Employee) {
            return;
        }
        try {
            $currentApiUser = $this->getAdminAuthenticationProvider()->getApiUser();
            if (!$currentApiUser) {
                throw new ExpectedServiceNotFoundException('Unable to get the Api User');
            }
        } catch (\Exception $e) {
            ErrorHelper::reportError($e);

            return;
        }
        if ($params['object']->id === $currentApiUser->id) {
            // Just set the ID to null, so the delete action can't be done
            $params['object']->id = null;
        }
    }
}
