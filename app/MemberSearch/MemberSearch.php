<?php

namespace App\MemberSearch;

use Illuminate\Http\Request;

class MemberSearch
{
    public static function apply(Request $filters)
    {
        $query = static::applyDecoratorsFromRequest($filters, (new Member)->newQuery());

        return static::getResults($query);
    }

    private static function applyDecoratorsFromRequest(Request $request, Builder $query)
    {
        foreach ($request->all() as $filterName => $value)
        {
            $decorator = static::createFilterDecorator($filterName);

            if (static::isValidDecorator($decorator))
            {
                $query = $decorator::apply($query, $value);
            }
        }

        return $query;
    }

    private static function createFilterDecorator($name)
    {
        return return __NAMESPACE__ . '\\Filters\\' .  studly_case($name);
    }

    private static function isValidDecorator($decorator)
    {
        return class_exists($decorator);
    }

    private static function getResults(Builder $query)
    {
        return $query->get();
    }
}
