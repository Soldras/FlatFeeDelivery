<?php
/*************************************************************************************/
/*                                                                                   */
/*      Thelia	                                                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : info@thelia.net                                                      */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      This program is free software; you can redistribute it and/or modify         */
/*      it under the terms of the GNU General Public License as published by         */
/*      the Free Software Foundation; either version 3 of the License                */
/*                                                                                   */
/*      This program is distributed in the hope that it will be useful,              */
/*      but WITHOUT ANY WARRANTY; without even the implied warranty of               */
/*      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the                */
/*      GNU General Public License for more details.                                 */
/*                                                                                   */
/*      You should have received a copy of the GNU General Public License            */
/*	    along with this program. If not, see <http://www.gnu.org/licenses/>.         */
/*                                                                                   */
/*************************************************************************************/

namespace FlatFeeDelivery;

use Thelia\Model\Country;
use Thelia\Module\BaseModule;
use Thelia\Module\DeliveryModuleInterface;

/**
 * Class FlatFeeDelivery
 * @package FlatFeeDelivery
 * @author Thelia <info@thelia.net>
 */
class FlatFeeDelivery extends BaseModule implements DeliveryModuleInterface
{
    /**
     * calculate and return delivery price
     *
     * @param Country $country
     *
     * @return mixed
     */
    public function getPostage(Country $country)
    {
        $postage = $country->getArea()->getPostage();

        return $postage === null ? 0:$postage;
    }

}
