<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface PeopleAudienceProperties extends AudienceProperties
{
    /**
     * @param MedicalConditionProperties|MedicalConditionProperties[]|IdReference|IdReference[] $value
     */
    public function healthCondition(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function requiredGender(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function requiredMaxAge(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function requiredMinAge(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function suggestedAge(mixed $value): static;

    /**
     * @param GenderTypeProperties|GenderTypeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function suggestedGender(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function suggestedMaxAge(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function suggestedMeasurement(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function suggestedMinAge(mixed $value): static;
}
