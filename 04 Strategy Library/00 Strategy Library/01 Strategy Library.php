<?php
/**
 * Created by IntelliJ IDEA.
 * User:
 * Date: 5/24/2018
 * Time: 4:42 PM
 */

$strategyMap = [
    [
        'name' => 'CAPM Alpha Ranking Strategy on Dow 30 Companies',
        'link' => 'strategy-library/capm-alpha-ranking-strategy-on-dow-30-companies',
        'description' => 'Applies CAPM model to rank Dow Jones 30 companies.'
    ],
    [
        'name' => 'Combining Mean Reversion and Momentum in Forex Market',
        'link' => 'strategy-library/combining-mean-reversion-and-momentum-in-forex-market',
        'description' => 'Combines momentum and mean reversion techniques in the forex markets.'
    ],
    [
        'name' => 'Pairs Trading-Copula vs Cointegration',
        'link' => 'strategy-library/pairs-trading-copula-vs-cointegration',
        'description' => 'Applies Copula and Cointergration method to pairs trading.'
    ],
    [
        'name' => 'The Dynamic Breakout II Strategy',
        'link' => 'strategy-library/the-dynamic-breakout-ii-strategy',
        'description' => 'A demonstration of dynamic breakout II strategy.'
    ],
    [
        'name' => 'Dual Thrust Trading Algorithm',
        'link' => 'strategy-library/dual-thrust-trading-algorithm',
        'description' => 'A demontration of Dual Thrust Intraday strategy.'
    ],
    [
        'name' => 'Can Crude Oil Predict Equity Returns',
        'link' => 'strategy-library/can-crude-oil-predict-equity-returns',
        'description' => 'Applies regression method to predict the return from the stock market and compare it to the short-term U.S. T-bill rate.'
    ],
    [
        'name' => 'Intraday Dynamic Pairs Trading using Correlation and Cointegration Approach',
        'link' => 'strategy-library/intraday-dynamic-pairs-trading-using-correlation-and-cointegration-approach',
        'description' => 'A high frequency pairs trading algorithm based on cointegration.'
    ],
    [
        'name' => 'The Momentum Strategy Based on the Low Frequency Compoment of Forex Market',
        'link' => 'strategy-library/the-momentum-strategy-based-on-the-low-frequency-Component-of-forex-market',
        'description' => 'Applies high frequency filter to the momentum strategy.'
    ],
    [
        'name' => 'Stock Selection Strategy Based on Fundamental Factors',
        'link' => 'strategy-library/stock-selection-strategy-based-on-fundamental-factors',
        'description' => 'MorningStar Fundamental factors universe selection algorithm.'
    ],
    [
        'name' => 'Short-Term Reversal Strategy in Stocks',
        'link' => 'strategy-library/short-term-reversal-strategy-in-stocks',
        'description' => 'A short term reversal algorithm which gives the opposite signal by analyzing recent period price action.'
    ],
    [
        'name' => 'Fundamental Factor Long Short Strategy',
        'link' => 'strategy-library/fundamental-factor-long-short-strategy',
        'description' => 'A basic monthly rebalance long short algorithm based on fundamental factors.'
    ],
    [
        'name' => 'Asset Class Trend Following',
        'link' => 'strategy-library/asset-class-trend-following',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/1'
        ],
        'description' => 'Selects ETFs over ten-month moving average and assigns an equally weighted allocation.'
    ],
    [
        'name' => 'Asset Class Momentum',
        'link' => 'strategy-library/asset-class-momentum',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/2'
        ],
        'description' => 'Selects ETFs in different asset classes with the highest momentum and assigns an equally weighted allocation.'
    ],
    [
        'name' => 'Sector Momentum',
        'link' => 'strategy-library/sector-momentum',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/3'
        ],
        'description' => 'Selects ETFs in different sectors with the highest momentum and assigns an equally weighted allocation.'
    ],
    [
        'name' => 'Overnight Anomaly',
        'link' => 'strategy-library/overnight-anomaly',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/4'
        ],
        'description' => 'Buy SPY ETF at its closing price and sell it at the opening each day.'
    ],
    [
        'name' => 'Forex Carry Trade',
        'link' => 'strategy-library/forex-carry-trade',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/5'
        ],
        'description' => 'Goes long the currency with the highest central bank interest rate and goes short the currency with the lowest interest rate.'
    ],
    [
        'name' => 'Volatility Effect in Stocks',
        'link' => 'strategy-library/volatility-effect-in-stocks',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/7'
        ],
        'description' => 'Constructs equally weighted portfolios by selecting stocks with the lowest volatility in the past one year.'
    ],
    [
        'name' => 'Forex Momentum',
        'link' => 'strategy-library/forex-momentum',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/8'
        ],
        'description' => 'Goes long currencies with strongest 12 month momentum against USD and goes short currencies with the lowest 12 month momentum against USD.'
    ],
    [
        'name' => 'Pairs Trading with Stocks',
        'link' => 'strategy-library/pairs-trading-with-stocks',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/12'
        ],
        'description' => 'Looks for the security that minimizes the sum of squared deviations and long-short position is opened when pair prices have diverged by multiple of standard deviations.'
    ],
    [
        'name' => 'Short Term Reversal',
        'link' => 'strategy-library/short-term-reversal',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/13'
        ],
        'description' => 'Goes long stocks with the lowest return in the previous month and goes short stocks with the greatest return from the previous month.'
    ],
    [
        'name' => 'Momentum Effect in Stocks',
        'link' => 'strategy-library/momentum-effect-in-stocks',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/14'
        ],
        'description' => 'Goes long stocks with the best 12-month momentum in the large-cap universe.'
    ],
    [
        'name' => 'Momentum Effect in Country Equity Indexes',
        'link' => 'strategy-library/momentum-effect-in-country-equity-indexes',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/15'
        ],
        'description' => 'Goes long stocks with the best 12-month momentum in the country equity indexes ETFs.'
    ],
    [
        'name' => 'Mean Reversion Effect in Country Equity Indexes',
        'link' => 'strategy-library/mean-reversion-effect-in-country-equity-indexes',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/16'
        ],
        'description' => 'Goes long country equity indexes ETFs with the worst 36-month return and short ETFs with the best 36-month return.'
    ],
    [
        'name' => 'Liquidity Effect in Stocks',
        'link' => 'strategy-library/liquidity-effect-in-stocks',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/18'
        ],
        'description' => 'Goes long stocks with the lowest turnover and short on stocks with the highest turnover from the lowest market-cap quartile.'
    ],
    [
        'name' => 'Volatility Risk Premium Effect',
        'link' => 'strategy-library/volatility-risk-premium-effect',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/20'
        ],
        'description' => 'Sells at-the-money straddle with one month until maturity and buys an offsetting 15% out-of-the-money puts each month.'
    ],
    [
        'name' => 'Momentum Effect in Commodities Futures',
        'link' => 'strategy-library/momentum-effect-in-commodities-futures',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/21'
        ],
        'description' => 'Goes long commodity futures with the highest momentum and short on futures with the lowest momentum.'
    ],
    [
        'name' => 'Small Capitalization Stocks Premium Anomaly',
        'link' => 'strategy-library/small-capitalization-stocks-premium-anomaly',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/25'
        ],
        'description' => 'Goes long stocks with the lowest market capitalization and rebalances the portfolio once a year.'
    ],
    [
        'name' => 'Term Structure Effect in Commodities',
        'link' => 'strategy-library/term-structure-effect-in-commodities',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/22'
        ],
        'description' => 'Buys each month the 20% of commodities with the highest roll-returns and shorts the 20% of commodities with the lowest roll-returns and holds the long-short positions for one month.'
    ],
    [
        'name' => 'Momentum Effect Combined with Term Structure in Commodities',
        'link' => 'strategy-library/momentum-effect-combined-with-term-structure-in-commodities',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/23'
        ],
        'description' => 'Portfolios are formed based on roll returns and the algorithm goes long and short contracts with the highest and lowest one-month performance.'
    ],
    [
        'name' => 'Book-to-Market Value Anomaly',
        'link' => 'strategy-library/book-to-market-value-anomaly',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/26'
        ],
        'description' => 'Quintile portfolios are formed based on the Book-to-Market ratio and the highest quintile is held for one year.'
    ],
    [
        'name' => 'Gold Market Timing',
        'link' => 'strategy-library/gold-market-timing',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/43'
        ],
        'description' => 'Goes long gold when the Fed model shows that the market is undervalued (the earnings yield is higher than the bond yield and their ratio is at least 2).'
    ],
    [
        'name' => 'Turn of the Month in Equity Indexes',
        'link' => 'strategy-library/turn-of-the-month-in-equity-indexes',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/41'
        ],
        'description' => 'Buys SPY the day before the end of the month and liquidates position on 3rd trading day of new month.'
    ]
    [
        'name' => 'Paired Switching',
        'link' => 'strategy-library/paired-switching',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/44'
        ],
        'description' => 'Goes long asset with better performance over the last period and rebalances portfolio every quarter.'
    ]
    [
        'name' => 'Accrual Anomaly',
        'link' => 'strategy-library/accrual-anomaly',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/38'
        ],
        'description' => 'Decile portfolios are formed based on balance sheet based accruals and highest decile is shorted while lowest decile is bought for a year.'
    ]
];

?>
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
