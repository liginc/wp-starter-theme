<?php

/**
 * ページネーション
 */

function get_pagination(int $range, bool $add_first_and_last = false)
{
    global $paged, $wp_query;
    $pages = (int) $wp_query->max_num_pages;
    $paged = empty($paged) ? 1 : (int) $paged;

    if ($pages <= 0) {
        return;
    }

    $prev = $paged !== 1 ? $paged - 1 : false;
    $next = $paged !== $pages ? $paged + 1 : false;

    $numbers = get_pagination_numbers($pages, $paged, $range);

    if ($add_first_and_last) {
        $numbers[] = 1;
        $numbers[] = $pages;
        $numbers = array_unique($numbers);
        sort($numbers);
    }

    $rtn = [
        "prev" => $prev,
        "next" => $next,
        "current" => $paged,
        "numbers" => $numbers,
    ];
    return $rtn;
}

function get_pagination_numbers(int $pages, int $paged, int $range)
{
    $rtn = [];
    $min_number = $range * 2 + 1;
    for ($i = max(1, $paged - $range); $i <= min($pages, $paged + $range); $i++) {
        $rtn[] = $i;
    }
    if (count($rtn) >= $min_number) {
        return $rtn;
    }

    if ($rtn[0] === 1) {
        for ($i = count($rtn) + 1; $i <= min($pages, $min_number); $i++) {
            $rtn[] = $i;
        }
    } else {
        for ($i = $rtn[0] - 1; $i >= max(1, $pages - $min_number + 1); $i--) {
            $rtn[] = $i;
        }
        sort($rtn);
    }
    return $rtn;
}
