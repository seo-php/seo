<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface FinancialIncentiveProperties extends IntangibleProperties
{
    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function areaServed(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function eligibleWithSupplier(mixed $value): static;

    /**
     * @param LoanOrCreditProperties|LoanOrCreditProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|UnitPriceSpecificationProperties|UnitPriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function incentiveAmount(mixed $value): static;

    /**
     * @param IncentiveStatusProperties|IncentiveStatusProperties[]|IdReference|IdReference[] $value
     */
    public function incentiveStatus(mixed $value): static;

    /**
     * @param IncentiveTypeProperties|IncentiveTypeProperties[]|IdReference|IdReference[] $value
     */
    public function incentiveType(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|ProductProperties|ProductProperties[]|IdReference|IdReference[] $value
     */
    public function incentivizedItem(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function incomeLimit(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function provider(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function publisher(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function purchasePriceLimit(mixed $value): static;

    /**
     * @param PurchaseTypeProperties|PurchaseTypeProperties[]|IdReference|IdReference[] $value
     */
    public function purchaseType(mixed $value): static;

    /**
     * @param IncentiveQualifiedExpenseTypeProperties|IncentiveQualifiedExpenseTypeProperties[]|IdReference|IdReference[] $value
     */
    public function qualifiedExpense(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validFrom(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validThrough(mixed $value): static;
}
