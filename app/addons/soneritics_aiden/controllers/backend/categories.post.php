<?php
/*
 * The MIT License
 *
 * Copyright 2021 Jordi Jolink.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
/**
 * @var string $mode
 */
if (!defined('BOOTSTRAP')) { die('Access denied'); }

// Only available in the update mode
if ($mode === 'update') {
    // Arrange data
    $categoryId = empty($_REQUEST['category_id']) ? 0 : (int)$_REQUEST['category_id'];

    // Save possible extra category text
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        db_query(
            "REPLACE INTO ?:soneritics_aiden(category_id, `advisor_id`, `advisor_type`) VALUES(?i, ?s, ?s)",
            $categoryId,
            $_POST['soneritics_aidenadvisorid'],
            $_POST['soneritics_aidenadvisortype']
        );
    }

    // Set view vars
    \Tygh\Registry::get('view')->assign('soneritics_aidenadvisorid', fn_soneritics_aiden_get_advisor_id($categoryId));
    \Tygh\Registry::get('view')->assign('soneritics_aidenadvisortype', fn_soneritics_aiden_get_advisor_type($categoryId));
}