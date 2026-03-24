<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ShippingServiceProperties extends StructuredValueProperties
{
    /**
     * @param FulfillmentTypeEnumerationProperties|FulfillmentTypeEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function fulfillmentType(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|ServicePeriodProperties|ServicePeriodProperties[]|IdReference|IdReference[] $value
     */
    public function handlingTime(mixed $value): static;

    /**
     * @param ShippingConditionsProperties|ShippingConditionsProperties[]|IdReference|IdReference[] $value
     */
    public function shippingConditions(mixed $value): static;

    /**
     * @param MemberProgramTierProperties|MemberProgramTierProperties[]|IdReference|IdReference[] $value
     */
    public function validForMemberTier(mixed $value): static;
}
