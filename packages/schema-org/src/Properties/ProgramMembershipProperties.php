<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ProgramMembershipProperties extends IntangibleProperties
{
    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function hostingOrganization(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function member(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function members(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function membershipNumber(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function membershipPointsEarned(mixed $value): static;

    /**
     * @param MemberProgramProperties|MemberProgramProperties[]|IdReference|IdReference[] $value
     */
    public function program(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function programName(mixed $value): static;
}
