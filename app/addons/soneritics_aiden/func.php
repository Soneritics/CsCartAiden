<?php
if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_soneritics_aiden_get_advisor_id(int $categoryId)
{
    return db_get_field(
        "SELECT `advisor_id` FROM ?:soneritics_aiden WHERE category_id = ?i",
        $categoryId
    );
}

function fn_soneritics_aiden_get_advisor_type(int $categoryId)
{
    return db_get_field(
        "SELECT `advisor_type` FROM ?:soneritics_aiden WHERE category_id = ?i",
        $categoryId
    );
}
