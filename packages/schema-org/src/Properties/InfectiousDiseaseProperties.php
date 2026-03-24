<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface InfectiousDiseaseProperties extends MedicalConditionProperties
{
    /**
     * @param string|string[] $value
     */
    public function infectiousAgent(mixed $value): static;

    /**
     * @param InfectiousAgentClassProperties|InfectiousAgentClassProperties[]|IdReference|IdReference[] $value
     */
    public function infectiousAgentClass(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function transmissionMethod(mixed $value): static;
}
