<?php
/**
 * Created by IntelliJ IDEA.
 * User: Gustavo
 * Date: 5/24/2018
 * Time: 4:42 PM
 */

$strategyMap = [
    [
        'name' => 'Example 1',
        'link' => 'strategy-library/example-1',
        'description' => 'Testing description of testing tutorial 1 eggs'
    ],
    [
        'name' => 'Example 2',
        'link' => 'strategy-library/example-2',
        'description' => 'Testing description of testing tutorial 2 milk'
    ],
    [
        'name' => 'Example 3',
        'link' => 'strategy-library/example-3',
        'description' => 'Testing description of testing tutorial 3 cake'
    ],
];

?>
<div class="row">
    <div class="search col-xs-12">
        <input type="text" id="strategy-library-search-box" class="form-control input-lg" placeholder="Search Strategy Tutorials" onchange="Tutorials.OnSearchChange()" onkeyup="Tutorials.OnSearchChange()">
    </div>
</div>
<br>
<table id="strategy-library-table" class="table table-striped qc-table">
    <thead>
    <tr>
        <th>
            Strategy Name
        </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($strategyMap as $strategy) { ?>
        <tr>
            <td>
                <a class="docs-internal-link" href="/tutorials2/<?= $strategy['link'] ?>"><?= $strategy['name'] ?></a>
                <p><?= $strategy['description'] ?></p>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<style>
    .documentation .page-sub-heading {
        display: none;
    }

    .documentation #strategy-library-search-box {
        margin: 30px 0;
    }

    .documentation #doc-content .pre-title-area > span {
        display: none;
    }

    .documentation #doc-content .pre-title-area > span:first-child {
        display: inline;
    }

    .documentation #doc-content #strategy-library-table tbody > tr > td > a {
        font-size: 24px;
        margin-top: 16px;
        display: block;
    }
</style>
