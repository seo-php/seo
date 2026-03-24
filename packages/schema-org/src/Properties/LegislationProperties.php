<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\LegislationProperties as LegislationProperties1;

interface LegislationProperties extends CreativeWorkProperties
{
    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function jurisdiction(mixed $value): static;

    /**
     * @param LegislationProperties|LegislationProperties[]|IdReference|IdReference[] $value
     */
    public function legislationAmends(mixed $value): static;

    /**
     * @param LegislationProperties|LegislationProperties[]|IdReference|IdReference[] $value
     */
    public function legislationApplies(mixed $value): static;

    /**
     * @param LegislationProperties|LegislationProperties[]|IdReference|IdReference[] $value
     */
    public function legislationChanges(mixed $value): static;

    /**
     * @param LegislationProperties|LegislationProperties[]|IdReference|IdReference[] $value
     */
    public function legislationCommences(mixed $value): static;

    /**
     * @param LegislationProperties|LegislationProperties[]|IdReference|IdReference[] $value
     */
    public function legislationConsolidates(mixed $value): static;

    /**
     * @param LegislationProperties|LegislationProperties[]|IdReference|IdReference[] $value
     */
    public function legislationCorrects(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function legislationCountersignedBy(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function legislationDate(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function legislationDateOfApplicability(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function legislationDateVersion(mixed $value): static;

    /**
     * @param LegislationProperties|LegislationProperties[]|IdReference|IdReference[] $value
     */
    public function legislationEnsuresImplementationOf(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function legislationIdentifier(mixed $value): static;

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function legislationJurisdiction(mixed $value): static;

    /**
     * @param LegalForceStatusProperties|LegalForceStatusProperties[]|IdReference|IdReference[] $value
     */
    public function legislationLegalForce(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function legislationPassedBy(mixed $value): static;

    /**
     * @param LegislationProperties|LegislationProperties[]|IdReference|IdReference[] $value
     */
    public function legislationRepeals(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function legislationResponsible(mixed $value): static;

    /**
     * @param LegislationProperties|LegislationProperties[]|IdReference|IdReference[] $value
     */
    public function legislationTransposes(mixed $value): static;

    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function legislationType(mixed $value): static;
}
