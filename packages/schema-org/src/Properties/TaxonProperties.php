<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\TaxonProperties as TaxonProperties1;

interface TaxonProperties extends ThingProperties
{
    /**
     * @param string|string[]|TaxonProperties|TaxonProperties[]|IdReference|IdReference[] $value
     */
    public function childTaxon(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|IdReference|IdReference[] $value
     */
    public function hasDefinedTerm(mixed $value): static;

    /**
     * @param string|string[]|TaxonProperties|TaxonProperties[]|IdReference|IdReference[] $value
     */
    public function parentTaxon(mixed $value): static;

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function taxonRank(mixed $value): static;
}
