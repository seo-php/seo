<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface QuestionProperties extends CommentProperties
{
    /**
     * @param AnswerProperties|AnswerProperties[]|ItemListProperties|ItemListProperties[]|IdReference|IdReference[] $value
     */
    public function acceptedAnswer(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function answerCount(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function eduQuestionType(mixed $value): static;

    /**
     * @param CommentProperties|CommentProperties[]|CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function parentItem(mixed $value): static;

    /**
     * @param AnswerProperties|AnswerProperties[]|ItemListProperties|ItemListProperties[]|IdReference|IdReference[] $value
     */
    public function suggestedAnswer(mixed $value): static;
}
