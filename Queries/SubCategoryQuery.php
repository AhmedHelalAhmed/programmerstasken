<?php

namespace Queries;

use Classes\WaitingTimeline;

class SubCategoryQuery implements Query
{
    public function canNotContinue(\Classes\Query $query, WaitingTimeline $waitingTimeline): bool
    {
        return $query->getQuestionType() != '*' && $query->getSubCategory() && $waitingTimeline->getSubCategory() != $query->getSubCategory();
    }
}