<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface CourseInstanceProperties extends EventProperties
{
    /**
     * @param string|string[] $value
     */
    public function courseMode(mixed $value): static;

    /**
     * @param ScheduleProperties|ScheduleProperties[]|IdReference|IdReference[] $value
     */
    public function courseSchedule(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function courseWorkload(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function instructor(mixed $value): static;
}
