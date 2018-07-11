<?php
/**
 * Created by IntelliJ IDEA.
 * User: Gustavo
 * Date: 5/24/2018
 * Time: 4:42 PM
 */

?>
<div class="row">
    <div class="search col-xs-12">
    <h2>Quantpedia Strategy Implementations</h2>
    </div>
</div>
<div class="row">
    <div class="search col-xs-12">
        <input type="text" id="strategy-library-search-box" class="form-control input-lg" placeholder="Search Strategy Tutorials" onchange="SLSearch.OnSearchChange()" onkeyup="SLSearch.OnSearchChange()">
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
    <?php foreach ($strategyMap as $strategy) {
        
        if (!array_key_exists('sources', $strategy)) continue;
        
        $sources = '';
        if (array_key_exists('sources', $strategy)) {
            $sources .= '<p class="sources">';
            $sources .= (count($strategy['sources']) > 1 ? 'Sources:' : 'Source:');
            foreach ($strategy['sources'] as $key => $source) {
                $sources .= " <a href=\"{$source}\" rel=\"nofollow\" >{$key}</a>,";
            }

            $sources = trim($sources, ',');
            $sources .= '</p>';
        }
        ?>
        <tr>
            <td>
                <a class="docs-internal-link" href="/tutorials/<?= $strategy['link'] ?>"><?= $strategy['name'] ?></a>
                <p><?= $strategy['description'] ?></p>
                <?= $sources ?>
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
<script type="application/javascript">
    /**
     * SLSearch static controller
     */
    var SLSearch = /** @class */ (function () {
        function SLSearch() {
        }

        /**
         * Handler for the vent of change in the strategy library search box
         * @constructor
         */
        SLSearch.OnSearchChange = function () {
            if (!SLSearch._BuildSearchMap())
                return;
            var table = $('#strategy-library-table');
            if (table.length == 0)
                return false;
            var search = $('#strategy-library-search-box').val();
            var options = {
                shouldSort: true,
                threshold: 0.8,
                location: 0,
                distance: 100,
                maxPatternLength: 32,
                minMatchCharLength: 3,
                keys: [
                    "text"
                ]
            };
            console.log('starting search');
            var result = SLSearch._StrategyLibraryMap;
            if (search != '') {
                var fuse = new Fuse(SLSearch._StrategyLibraryMap, options);
                result = fuse.search(search);
                if (result.length == 0) {
                    var cols = table.find('thead th').length;
                    result = [{
                        html: "<td colspan='" + cols + "' class='text-center' > No matching result </td>",
                        text: ''
                    }];
                }
            }
            var tableHtml = '';
            for (var i in result) {
                tableHtml += '<tr>' + result[i].html + '</tr>';
            }
            table.find('tbody').html(tableHtml);
            console.log(result);
        };
        /**
         * Builds the strategy library search map
         * @private
         */
        SLSearch._BuildSearchMap = function () {
            if (SLSearch._StrategyLibraryMap !== null)
                return true;
            var table = $('#strategy-library-table');
            if (table.length == 0)
                return false;
            SLSearch._StrategyLibraryMap = [];
            table.find('tbody > tr').each(function (i, el) {
                var text = $(el).text();
                text = text.replace(/(\s+|\n)/g, ' ');
                text = text.replace(/(\s+|\n)/g, ' ');
                SLSearch._StrategyLibraryMap.push({
                    'html': $(el).html(),
                    'text': text
                });
            });
            return true;
        };
        SLSearch._StrategyLibraryMap = null;
        return SLSearch;
    }());
</script>
