<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\AdministrativeAreaProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DefinedTermProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\FinancialIncentiveProperties;
use Seo\SchemaOrg\Properties\GeoShapeProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\IncentiveQualifiedExpenseTypeProperties;
use Seo\SchemaOrg\Properties\IncentiveStatusProperties;
use Seo\SchemaOrg\Properties\IncentiveTypeProperties;
use Seo\SchemaOrg\Properties\LoanOrCreditProperties;
use Seo\SchemaOrg\Properties\MonetaryAmountProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\PersonProperties;
use Seo\SchemaOrg\Properties\PlaceProperties;
use Seo\SchemaOrg\Properties\ProductProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\PurchaseTypeProperties;
use Seo\SchemaOrg\Properties\QuantitativeValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Properties\UnitPriceSpecificationProperties;
use Seo\SchemaOrg\Type;

final class FinancialIncentive extends Type implements FinancialIncentiveProperties
{
    protected function type(): string
    {
        return 'FinancialIncentive';
    }

    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static
    {
        return $this->set('additionalType', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function alternateName(mixed $value): static
    {
        return $this->set('alternateName', $value);
    }

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function areaServed(mixed $value): static
    {
        return $this->set('areaServed', $value);
    }

    /**
     * @param string|string[]|TextObjectProperties|TextObjectProperties[]|IdReference|IdReference[] $value
     */
    public function description(mixed $value): static
    {
        return $this->set('description', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function disambiguatingDescription(mixed $value): static
    {
        return $this->set('disambiguatingDescription', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function eligibleWithSupplier(mixed $value): static
    {
        return $this->set('eligibleWithSupplier', $value);
    }

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function identifier(mixed $value): static
    {
        return $this->set('identifier', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function image(mixed $value): static
    {
        return $this->set('image', $value);
    }

    /**
     * @param LoanOrCreditProperties|LoanOrCreditProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|UnitPriceSpecificationProperties|UnitPriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function incentiveAmount(mixed $value): static
    {
        return $this->set('incentiveAmount', $value);
    }

    /**
     * @param IncentiveStatusProperties|IncentiveStatusProperties[]|IdReference|IdReference[] $value
     */
    public function incentiveStatus(mixed $value): static
    {
        return $this->set('incentiveStatus', $value);
    }

    /**
     * @param IncentiveTypeProperties|IncentiveTypeProperties[]|IdReference|IdReference[] $value
     */
    public function incentiveType(mixed $value): static
    {
        return $this->set('incentiveType', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|ProductProperties|ProductProperties[]|IdReference|IdReference[] $value
     */
    public function incentivizedItem(mixed $value): static
    {
        return $this->set('incentivizedItem', $value);
    }

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function incomeLimit(mixed $value): static
    {
        return $this->set('incomeLimit', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function provider(mixed $value): static
    {
        return $this->set('provider', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function publisher(mixed $value): static
    {
        return $this->set('publisher', $value);
    }

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function purchasePriceLimit(mixed $value): static
    {
        return $this->set('purchasePriceLimit', $value);
    }

    /**
     * @param PurchaseTypeProperties|PurchaseTypeProperties[]|IdReference|IdReference[] $value
     */
    public function purchaseType(mixed $value): static
    {
        return $this->set('purchaseType', $value);
    }

    /**
     * @param IncentiveQualifiedExpenseTypeProperties|IncentiveQualifiedExpenseTypeProperties[]|IdReference|IdReference[] $value
     */
    public function qualifiedExpense(mixed $value): static
    {
        return $this->set('qualifiedExpense', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validFrom(mixed $value): static
    {
        return $this->set('validFrom', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validThrough(mixed $value): static
    {
        return $this->set('validThrough', $value);
    }
}
