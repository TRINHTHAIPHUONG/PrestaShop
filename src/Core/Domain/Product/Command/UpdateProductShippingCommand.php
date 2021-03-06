<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

declare(strict_types=1);

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

use PrestaShop\Decimal\DecimalNumber;
use PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\DeliveryTimeNotesType;
use PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId;

/**
 * Updates product shipping options
 */
class UpdateProductShippingCommand
{
    /**
     * @var ProductId
     */
    private $productId;

    /**
     * @var DecimalNumber|null
     */
    private $width;

    /**
     * @var DecimalNumber|null
     */
    private $height;

    /**
     * @var DecimalNumber|null
     */
    private $depth;

    /**
     * @var DecimalNumber|null
     */
    private $weight;

    /**
     * @var DecimalNumber|null
     */
    private $additionalShippingCost;

    /**
     * @var int[]|null
     */
    private $carrierReferences;

    /**
     * @var DeliveryTimeNotesType
     */
    private $deliveryTimeNotesType;

    /**
     * @var string[]|null
     */
    private $localizedDeliveryTimeInStockNotes;

    /**
     * @var string[]|null
     */
    private $localizedDeliveryTimeOutOfStockNotes;

    /**
     * @param int $productId
     */
    public function __construct(int $productId)
    {
        $this->productId = new ProductId($productId);
    }

    /**
     * @return ProductId
     */
    public function getProductId(): ProductId
    {
        return $this->productId;
    }

    /**
     * @return DecimalNumber|null
     */
    public function getWidth(): ?DecimalNumber
    {
        return $this->width;
    }

    /**
     * @param string $width
     *
     * @return UpdateProductShippingCommand
     */
    public function setWidth(string $width): UpdateProductShippingCommand
    {
        $this->width = new DecimalNumber($width);

        return $this;
    }

    /**
     * @return DecimalNumber|null
     */
    public function getHeight(): ?DecimalNumber
    {
        return $this->height;
    }

    /**
     * @param string $height
     *
     * @return UpdateProductShippingCommand
     */
    public function setHeight(string $height): UpdateProductShippingCommand
    {
        $this->height = new DecimalNumber($height);

        return $this;
    }

    /**
     * @return DecimalNumber|null
     */
    public function getDepth(): ?DecimalNumber
    {
        return $this->depth;
    }

    /**
     * @param string $depth
     *
     * @return UpdateProductShippingCommand
     */
    public function setDepth(string $depth): UpdateProductShippingCommand
    {
        $this->depth = new DecimalNumber($depth);

        return $this;
    }

    /**
     * @return DecimalNumber|null
     */
    public function getWeight(): ?DecimalNumber
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     *
     * @return UpdateProductShippingCommand
     */
    public function setWeight(string $weight): UpdateProductShippingCommand
    {
        $this->weight = new DecimalNumber($weight);

        return $this;
    }

    /**
     * @return DecimalNumber|null
     */
    public function getAdditionalShippingCost(): ?DecimalNumber
    {
        return $this->additionalShippingCost;
    }

    /**
     * @param string $additionalShippingCost
     *
     * @return UpdateProductShippingCommand
     */
    public function setAdditionalShippingCost(string $additionalShippingCost): UpdateProductShippingCommand
    {
        $this->additionalShippingCost = new DecimalNumber($additionalShippingCost);

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getCarrierReferences(): ?array
    {
        return $this->carrierReferences;
    }

    /**
     * @param int[] $carrierReferences
     *
     * @return UpdateProductShippingCommand
     */
    public function setCarrierReferences(array $carrierReferences): UpdateProductShippingCommand
    {
        $this->carrierReferences = array_map('intval', $carrierReferences);

        return $this;
    }

    /**
     * @return DeliveryTimeNotesType|null
     */
    public function getDeliveryTimeNotesType(): ?DeliveryTimeNotesType
    {
        return $this->deliveryTimeNotesType;
    }

    /**
     * @param int $type
     *
     * @return UpdateProductShippingCommand
     */
    public function setDeliveryTimeNotesType(int $type): UpdateProductShippingCommand
    {
        $this->deliveryTimeNotesType = new DeliveryTimeNotesType($type);

        return $this;
    }

    /**
     * @return string[]
     */
    public function getLocalizedDeliveryTimeInStockNotes(): ?array
    {
        return $this->localizedDeliveryTimeInStockNotes;
    }

    /**
     * @param string[] $localizedDeliveryTimeInStockNotes
     *
     * @return UpdateProductShippingCommand
     */
    public function setLocalizedDeliveryTimeInStockNotes(array $localizedDeliveryTimeInStockNotes): UpdateProductShippingCommand
    {
        $this->localizedDeliveryTimeInStockNotes = $localizedDeliveryTimeInStockNotes;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getLocalizedDeliveryTimeOutOfStockNotes(): ?array
    {
        return $this->localizedDeliveryTimeOutOfStockNotes;
    }

    /**
     * @param string[] $localizedDeliveryTimeOutOfStockNotes
     *
     * @return UpdateProductShippingCommand
     */
    public function setLocalizedDeliveryTimeOutOfStockNotes(array $localizedDeliveryTimeOutOfStockNotes)
    {
        $this->localizedDeliveryTimeOutOfStockNotes = $localizedDeliveryTimeOutOfStockNotes;

        return $this;
    }
}
