<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ExerciseActionProperties extends PlayActionProperties
{
    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function course(mixed $value): static;

    /**
     * @param DietProperties|DietProperties[]|IdReference|IdReference[] $value
     */
    public function diet(mixed $value): static;

    /**
     * @param DistanceProperties|DistanceProperties[]|IdReference|IdReference[] $value
     */
    public function distance(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function exerciseCourse(mixed $value): static;

    /**
     * @param ExercisePlanProperties|ExercisePlanProperties[]|IdReference|IdReference[] $value
     */
    public function exercisePlan(mixed $value): static;

    /**
     * @param DietProperties|DietProperties[]|IdReference|IdReference[] $value
     */
    public function exerciseRelatedDiet(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function exerciseType(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function fromLocation(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function opponent(mixed $value): static;

    /**
     * @param SportsActivityLocationProperties|SportsActivityLocationProperties[]|IdReference|IdReference[] $value
     */
    public function sportsActivityLocation(mixed $value): static;

    /**
     * @param SportsEventProperties|SportsEventProperties[]|IdReference|IdReference[] $value
     */
    public function sportsEvent(mixed $value): static;

    /**
     * @param SportsTeamProperties|SportsTeamProperties[]|IdReference|IdReference[] $value
     */
    public function sportsTeam(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function toLocation(mixed $value): static;
}
