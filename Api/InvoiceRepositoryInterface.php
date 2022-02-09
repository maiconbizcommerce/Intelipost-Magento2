<?php
/**
 * @package Intelipost\Shipping
 * @copyright Copyright (c) 2021 Intelipost
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

declare(strict_types=1);

namespace Intelipost\Shipping\Api;

interface InvoiceRepositoryInterface
{
    /**
     * Save item information
     *
     * @param \Intelipost\Shipping\Api\Data\InvoiceInterface[] $invoice
     * @return bool
     * @throws \Magento\Framework\Exception\LocalizedException
     * @api
     */
    public function saveInvoices($invoice);

    /**
     * Save Queue
     * @param \Intelipost\Shipping\Api\Data\InvoiceInterface $invoice
     * @return \Intelipost\Shipping\Api\Data\InvoiceInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Intelipost\Shipping\Api\Data\InvoiceInterface $invoice
    );

    /**
     * Retrieve Queue
     * @param string $id
     * @return \Intelipost\Shipping\Api\Data\InvoiceInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Retrieve Queue matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Intelipost\Shipping\Api\Data\InvoiceSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Queue
     * @param \Intelipost\Shipping\Api\Data\InvoiceInterface $invoice
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Intelipost\Shipping\Api\Data\InvoiceInterface $invoice
    );

    /**
     * Delete Queue by ID
     * @param string $id
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);

}
