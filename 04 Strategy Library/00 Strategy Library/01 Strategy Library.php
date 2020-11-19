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
        'description' => 'Applies CAPM model to rank Dow Jones 30 companies.',
        'tags'=>'Intermediate,Momentum,Equities'
    ],
    [
        'name' => 'Combining Mean Reversion and Momentum in Forex Market',
        'link' => 'strategy-library/combining-mean-reversion-and-momentum-in-forex-market',
        'description' => 'Combines momentum and mean reversion techniques in the forex markets.',
        'tags'=>'Intermediate,Mean Reversion,Momentum,Forex'
    ],
    [
        'name' => 'Pairs Trading-Copula vs Cointegration',
        'link' => 'strategy-library/pairs-trading-copula-vs-cointegration',
        'description' => 'Applies Copula and Cointergration method to pairs trading.',
        'tags'=>'Expert,Pairs Trading,ETFs'
    ],
    [
        'name' => 'The Dynamic Breakout II Strategy',
        'link' => 'strategy-library/the-dynamic-breakout-ii-strategy',
        'description' => 'A demonstration of dynamic breakout II strategy.',
        'tags'=>'Intermediate,Breakout,Forex'
    ],
    [
        'name' => 'Dual Thrust Trading Algorithm',
        'link' => 'strategy-library/dual-thrust-trading-algorithm',
        'description' => 'A demontration of Dual Thrust Intraday strategy.',
        'tags'=>'Intermediate,Breakout,Equities'
    ],
    [
        'name' => 'Can Crude Oil Predict Equity Returns',
        'link' => 'strategy-library/can-crude-oil-predict-equity-returns',
        'description' => 'Applies regression method to predict the return from the stock market and compare it to the short-term U.S. T-bill rate.',
        'tags'=>'Intermediate,Momentum,ETFs'
    ],
    [
        'name' => 'Intraday Dynamic Pairs Trading using Correlation and Cointegration Approach',
        'link' => 'strategy-library/intraday-dynamic-pairs-trading-using-correlation-and-cointegration-approach',
        'description' => 'A high frequency pairs trading algorithm based on cointegration.',
        'tags'=>'Expert,Pairs Trading,Equities'
    ],
    [
        'name' => 'The Momentum Strategy Based on the Low Frequency Component of Forex Market',
        'link' => 'strategy-library/the-momentum-strategy-based-on-the-low-frequency-Component-of-forex-market',
        'description' => 'Applies high frequency filter to the momentum strategy.',
        'tags'=>'Intermediate,Momentum,Forex'
    ],
    [
        'name' => 'Stock Selection Strategy Based on Fundamental Factors',
        'link' => 'strategy-library/stock-selection-strategy-based-on-fundamental-factors',
        'description' => 'MorningStar Fundamental factors universe selection algorithm.',
        'tags'=>'Intermediate,Fundamental Factors,Equities'
    ],
    [
        'name' => 'Short-Term Reversal Strategy in Stocks',
        'link' => 'strategy-library/short-term-reversal-strategy-in-stocks',
        'description' => 'A short term reversal algorithm which gives the opposite signal by analyzing recent period price action.',
        'tags'=>'Intermediate,Long Short,Mean Reversion,Equities'
    ],
    [
        'name' => 'Fundamental Factor Long Short Strategy',
        'link' => 'strategy-library/fundamental-factor-long-short-strategy',
        'description' => 'A basic monthly rebalance long short algorithm based on fundamental factors.',
        'tags'=>'Intermediate,Fundamental Factors,Long Short,Equities'
    ],
    [
        'name' => 'Asset Class Trend Following',
        'link' => 'strategy-library/asset-class-trend-following',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/1'
        ],
        'description' => 'Selects ETFs over ten-month moving average and assigns an equally weighted allocation.',
        'tags'=>'Beginner,Momentum,ETFs'
    ],
    [
        'name' => 'Asset Class Momentum',
        'link' => 'strategy-library/asset-class-momentum',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/2'
        ],
        'description' => 'Selects ETFs in different asset classes with the highest momentum and assigns an equally weighted allocation.',
        'tags'=>'Beginner,Momentum,ETFs'
        
    ],
    [
        'name' => 'Residual Momentum',
        'link' => 'strategy-library/residual-momentum',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/136'
        ],
        'description' => 'Constructs a long/short portfolio based on trailing residual momentum normalized by its standard deviation',
        'tags'=>'Intermediate,Equities,Momentum'
        
    ],
    [
        'name' => 'Sector Momentum',
        'link' => 'strategy-library/sector-momentum',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/3'
        ],
        'description' => 'Selects ETFs in different sectors with the highest momentum and assigns an equally weighted allocation.',
        'tags'=>'Beginner,Momentum,ETFs'
    ],
    [
        'name' => 'Overnight Anomaly',
        'link' => 'strategy-library/overnight-anomaly',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/4'
        ],
        'description' => 'Buy SPY ETF at its closing price and sell it at the opening each day.',
        'tags'=>'Beginner,ETFs'
    ],
    [
        'name' => 'Forex Carry Trade',
        'link' => 'strategy-library/forex-carry-trade',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/5'
        ],
        'description' => 'Goes long the currency with the highest central bank interest rate and goes short the currency with the lowest interest rate.',
        'tags'=>'Beginner,Long Short,Forex'
    ],
    [
        'name' => 'Volatility Effect in Stocks',
        'link' => 'strategy-library/volatility-effect-in-stocks',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/7'
        ],
        'description' => 'Constructs equally weighted portfolios by selecting stocks with the lowest volatility in the past one year.',
        'tags'=>'Intermediate,Equities'
    ],
    [
        'name' => 'Forex Momentum',
        'link' => 'strategy-library/forex-momentum',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/8'
        ],
        'description' => 'Goes long currencies with strongest 12 month momentum against USD and goes short currencies with the lowest 12 month momentum against USD.',
        'tags'=>'Beginner,Momentum,Forex'
    ],
    [
        'name' => 'Pairs Trading with Stocks',
        'link' => 'strategy-library/pairs-trading-with-stocks',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/12'
        ],
        'description' => 'Looks for the security that minimizes the sum of squared deviations and long-short position is opened when pair prices have diverged by multiple of standard deviations.',
        'tags'=>'Expert,Pairs Trading,Mean Reversion,Equities'
    ],
    [
        'name' => 'Short Term Reversal',
        'link' => 'strategy-library/short-term-reversal',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/13'
        ],
        'description' => 'Goes long stocks with the lowest return in the previous month and goes short stocks with the greatest return from the previous month.',
        'tags'=>'Intermediate,Long Short,Mean Reversion,Equities'
    ],
    [
        'name' => 'Momentum Effect in Stocks',
        'link' => 'strategy-library/momentum-effect-in-stocks',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/14'
        ],
        'description' => 'Goes long stocks with the best 12-month momentum in the large-cap universe.',
        'tags'=>'Beginner,Momentum,Equities'
    ],
    [
        'name' => 'Momentum Effect in Country Equity Indexes',
        'link' => 'strategy-library/momentum-effect-in-country-equity-indexes',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/15'
        ],
        'description' => 'Goes long stocks with the best 12-month momentum in the country equity indexes ETFs.',
        'tags'=>'Beginner,Momentum,ETFs'
    ],
    [
        'name' => 'Mean Reversion Effect in Country Equity Indexes',
        'link' => 'strategy-library/mean-reversion-effect-in-country-equity-indexes',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/16'
        ],
        'description' => 'Goes long country equity indexes ETFs with the worst 36-month return and short ETFs with the best 36-month return.',
        'tags'=>'Beginner,Long Short,Mean Reversion,ETFs'

    ],
    [
        'name' => 'Liquidity Effect in Stocks',
        'link' => 'strategy-library/liquidity-effect-in-stocks',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/18'
        ],
        'description' => 'Goes long stocks with the lowest turnover and short on stocks with the highest turnover from the lowest market-cap quartile.',
        'tags'=>'Intermediate,Long Short,Equities'
    ],
    [
        'name' => 'Volatility Risk Premium Effect',
        'link' => 'strategy-library/volatility-risk-premium-effect',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/20'
        ],
        'description' => 'Sells at-the-money straddle with one month until maturity and buys an offsetting 15% out-of-the-money puts each month.',
        'tags'=>'Expert,Short Volatility,Options'
    ],
    [
        'name' => 'Momentum Effect in Commodities Futures',
        'link' => 'strategy-library/momentum-effect-in-commodities-futures',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/21'
        ],
        'description' => 'Goes long commodity futures with the highest momentum and short on futures with the lowest momentum.',
        'tags'=>'Intermediate,Long Short,Futures'
    ],
    [
        'name' => 'Small Capitalization Stocks Premium Anomaly',
        'link' => 'strategy-library/small-capitalization-stocks-premium-anomaly',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/25'
        ],
         'tags'=>'Intermediate,Fundamental Factors,Equities',
        'description' => 'Goes long stocks with the lowest market capitalization and rebalances the portfolio once a year.'
    ],
    [
        'name' => 'Paired Switching',
        'link' => 'strategy-library/paired-switching',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/44'
        ],
        'description' => 'Goes long asset with better performance over the last period and rebalances portfolio every quarter.',
        'tags'=>'Intermediate,Pairs Trading,Equities'
    ],
    [
        'name' => 'Term Structure Effect in Commodities',
        'link' => 'strategy-library/term-structure-effect-in-commodities',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/22'
        ],
        'description' => 'Buys each month the 20% of commodities with the highest roll-returns and shorts the 20% of commodities with the lowest roll-returns and holds the long-short positions for one month.',
        'tags'=>'Expert,Long Short,Futures'
    ],
    [
        'name' => 'Momentum Effect Combined with Term Structure in Commodities',
        'link' => 'strategy-library/momentum-effect-combined-with-term-structure-in-commodities',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/23'
        ],
        'description' => 'Portfolios are formed based on roll returns and the algorithm goes long and short contracts with the highest and lowest one-month performance.',
        'tags'=>'Expert,Long Short,Futures'
    ],
    [
        'name' => 'Book-to-Market Value Anomaly',
        'link' => 'strategy-library/book-to-market-value-anomaly',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/26'
        ],
        'description' => 'Quintile portfolios are formed based on the Book-to-Market ratio and the highest quintile is held for one year.',
        'tags'=>'Intermediate,Fundamental Factors,Equities'
    ],
    [
        'name' => 'Gold Market Timing',
        'link' => 'strategy-library/gold-market-timing',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/43'
        ],
        'description' => 'Goes long gold when the Fed model shows that the market is undervalued (the earnings yield is higher than the bond yield and their ratio is at least 2).',
        'tags'=>'Intermediate,Mean Reversion,ETFs'
    ],
    [
        'name' => 'Turn of the Month in Equity Indexes',
        'link' => 'strategy-library/turn-of-the-month-in-equity-indexes',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/41'
        ],
        'description' => 'Buys SPY the day before the end of the month and liquidates position on 3rd trading day of new month.',
        'tags'=>'Beginner,ETFs'
    ],
    [
        'name' => 'Momentum - Short Term Reversal Strategy',
        'link' => 'strategy-library/momentum-short-term-reversal-strategy',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/51'
        ],
        'description' => 'Goes long stocks with the decreasing return from the winner group and short stocks with the increasing return from the loser group.',
        'tags'=>'Intermediate,Long Short,Equities'
    ],
    [
        'name' => 'Pairs Trading with Country ETFs',
        'link' => 'strategy-library/pairs-trading-with-country-etfs',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/55'
        ],
        'description' => 'Identifies the price divergence from two highly correlated country ETFs and takes a market neutral position.',
        'tags'=>'Expert,Pairs Trading,ETFs'
    ],
    [
        'name' => 'Sentiment and Style Rotation Effect in Stocks',
        'link' => 'strategy-library/sentiment-and-style-rotation-effect-in-stocks',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/53'
        ],
        'description' => 'Creates long-short positions of growth and value stocks based on the investment sentiment.',
        'tags'=>'Expert,Long Short,Fundamental Factors,Equities'
    ],
    [
        'name' => 'Asset Growth Effect',
        'link' => 'strategy-library/asset-growth-effect',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/52'
        ],
        'description' => 'Creates long-short positions of stocks based on the annual change of their total assets.',
        'tags'=>'Intermediate,Long Short, Fundamental Factors,Equities'
    ],
    [
        'name' => 'Momentum and State of Market Filters',
        'link' => 'strategy-library/momentum-and-state-of-market-filters',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/54'
        ],
        'description' => 'Goes long and short stocks with the highest and lowest six-month momentum respectively if the previous 12 months return on the broad market index was positive.',
        'tags'=>'Intermediate,Long Short,Momentum,Equities'
    ],
    [
        'name' => 'Accrual Anomaly',
        'link' => 'strategy-library/accrual-anomaly',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/38'
        ],
        'description' => 'Decile portfolios are formed based on balance sheet based accruals and highest decile is shorted while lowest decile is bought for a year.',
        'tags'=>'Intermediate,Long Short,Equities'
    ],
    [
        'name' => 'Momentum in Mutual Fund Returns',
        'link' => 'strategy-library/momentum-in-mutual-fund-returns',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/85'
        ],
        'description' => 'Forms a long-short portfolio of asset management firms based on trailing rate of change and nearness to trailing high.',
        'tags'=>'Intermediate,Long Short,Equities'
    ],
    [
        'name' => 'Momentum and Style Rotation Effect',
        'link' => 'strategy-library/momentum-and-style-rotation-effect',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/91'
        ],
        'description' => 'Goes long style index ETF with the highest 12-month momentum and short ETF with the lowest 12-month momentum.',
        'tags'=>'Beginner,Long Short,ETFs'
    ],
    [
        'name' => 'Trading with WTI BRENT Spread',
        'link' => 'strategy-library/trading-with-wti-brent-spread',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/100'
        ],
        'description' => 'Goes long the spread if the spread is below 20-day moving average and short if the spread is above 20-day moving average.',
        'tags'=>'Intermediate,Mean Reversion,Commodities'
    ],
    [
        'name' => 'Momentum Effect in REITs',
        'link' => 'strategy-library/momentum-effect-in-reits',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/152'
        ],
        'description' => 'Tercile portfolios are formed based on momentum and the best performing portfolio is held.',
        'tags'=>'Intermediate,Momentum,ETFs'
    ],
    [
        'name' => 'Option Expiration Week Effect',
        'link' => 'strategy-library/option-expiration-week-effect',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/102'
        ],
        'description' => 'Goes long S&amp;P 100 index ETF during option expiration week and stays in cash during other days.',
        'tags'=>'Intermediate,Options'
    ],
    [
        'name' => 'Earnings Quality Factor',
        'link' => 'strategy-library/earnings-quality-factor',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/229'
        ],
        'description' => 'Goes long stocks with high earnings quality and short stocks with low earnings quality based on composite factor score.',
        'tags'=>'Intermediate,Long Short,Fundamental Factors,Equities'
    ],
    [
        'name' => 'January Effect in Stocks',
        'link' => 'strategy-library/january-effect-in-stocks',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/114'
        ],
        'description' => 'Invests into small cap stocks at the beginning of each January and stays invested in large cap stocks for rest of the year.',
        'tags'=>'Intermediate,Equities'
    ],
    [
        'name' => 'Momentum and Reversal Combined with Volatility Effect in Stocks',
        'link' => 'strategy-library/momentum-and-reversal-combined-with-volatility-effect-in-stocks',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/155'
        ],
        'description' => 'Goes long on stocks from the highest performing quintile from the highest volatility group and short on stocks from the lowest performing quintile from the highest volatility group.',
        'tags'=>'Intermediate,Long Short,Equities'
    ],
    [
        'name' => 'ROA Effect within Stocks',
        'link' => 'strategy-library/roa-effect-within-stocks',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/199'
        ],
        'description' => 'Goes long on stocks with highest ROA and short stocks with the lowest ROA from each market capitalization group.',
        'tags'=>'Intermediate,Long Short,Fundamental Factors,Equities'
    ],
    [
        'name' => 'January Barometer',
        'link' => 'strategy-library/january-barometer',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/113'
        ],
        'description' => "Invested in equity market with ETF only if January return is positive otherwise switch investments to T-Bills.",
        'tags'=>'Beginner,Equities'
    ],
    [
        'name' => 'Lunar Cycle in Equity Market',
        'link' => 'strategy-library/lunar-cycle-in-equity-market',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/61'
        ],
        'description' => "Goes long in emerging market index ETF 7 days before the new moon and switch to a short position on emerging market index ETF 7 days before the full moon.",
        'tags'=>'Intermediate,ETFs'
    ],
    [
        'name' => 'VIX Predicts Stock Index Returns',
        'link' => 'strategy-library/vix-predicts-stock-index-returns',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/58'
        ],
        'description' => "Goes long on equity index ETF if the VIX is in the highest percentile short if VIX is in the lowest percentile in the last two-year history.",
        'tags'=>'Beginner,Equities'
    ],
    [
        'name' => 'Combining Momentum Effect with Volume',
        'link' => 'strategy-library/combining-momentum-effect-with-volume',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/66'
        ],
        'description' => "Goes long stocks with the highest volume from the top momentum decile and short stocks with the highest volume from the bottom momentum decile.",
        'tags'=>'Intermediate,Long Short,Equities'
    ],
    [
        'name' => 'Short Term Reversal with Futures',
        'link' => 'strategy-library/short-term-reversal-with-futures',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/71'
        ],
        'description' => "Goes long (short) on futures from the high-volume, low-open interest group with the lowest (greatest) returns in the previous week.",
        'tags'=>'Intermediate,Long Short,Futures'
    ],
    [
        'name' => 'Pre-holiday Effect',
        'link' => 'strategy-library/pre-holiday-effect',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/83'
        ],
        'description' => "Invests in equity market 2 days preceding holiday days and stays in cash during the other trading days.",
        'tags'=>'Beginner,Equities'
    ],
    [
        'name' => 'Beta Factors in Stocks',
        'link' => 'strategy-library/beta-factors-in-stocks',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/77'
        ],
        'description' => "Goes long stocks with the bottom beta and short stocks with the top beta, securities are weighted by the ranked betas.",
        'tags'=>'Intermediate,Long Short,Equities'
    ],
    [
        'name' => 'Exploiting Term Structure of VIX Futures',
        'link' => 'strategy-library/exploiting-term-structure-of-vix-futures',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/198'
        ],
        'description' => "Buys or sells the nearest VIX futures based on the daily roll and hedge against the open positions with E-mini S&amp;P500 futures.",
        'tags'=>'Expert,Futures'
    ],
    [
        'name' => '12 Month Cycle in Cross-Section of Stocks Returns',
        'link' => 'strategy-library/12-month-cycle-in-cross-section-of-stocks-returns',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/125'
        ],
        'description' => "Reviews the returns from last January, going long on the top 10% winners and short the bottom 10%.",
        'tags'=>'Intermediate,Long Short,Momentum Equities'
    ],
    [
        'name' => 'Momentum Effect in Stocks in Small Portfolios',
        'link' => 'strategy-library/momentum-effect-in-stocks-in-small-portfolios',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/162'
        ],
        'description' => "Goes long in the 10 stocks with the highest performance and goes short in the 10 stocks with the lowest performance in the previous one year.",
        'tags'=>'Intermediate, Momentum,Equities'
    ],
    [
        'name' => 'Value Effect within Countries',
        'link' => 'strategy-library/value-effect-within-countries',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/207'
        ],
        'description' => "Invests in the cheapest 33% of country ETFs according to CAPE ratios.",
        'tags'=>'Intermediate,Fundamental Factors,ETFs'
    ],
    [
        'name' => 'Beta Factor in Country Equity Indexes',
        'link' => 'strategy-library/beta-factor-in-country-equity-indexes',
        'sources' => [
            'Quantpedia' => 'https://www.quantpedia.com/Screener/Details/78'
        ],
        'description' => "Goes long on the low-beta portfolio and short on the high-beta portfolio in country indexes ETFs.",
        'tags'=>'Intermediate,Long Short,ETFs'
    ],
    [
        'name' => 'Price to Earnings Anomaly',
        'link' => 'strategy-library/price-earnings-anomaly',
        'description' => "Invests in stocks with low P/E ratio.",
        'tags'=>'Beginner,Fundamental Factors,Equities'
    ],
    [
        'name' => 'Fama French Five Factors',
        'link' => 'strategy-library/fama-french-five-factors',
        'sources' => [
            'NYU' => 'https://www.sciencedirect.com/science/article/pii/S0304405X14002323'
        ],
        'description' => "Stock selecting strategy based on Fama-French Five Factors Model.",
        'tags'=>'Long Short,Fundamental Factors,Equities'
    ],
    [
        'name' => 'Mean-Reversion Statistical Arbitrage Strategy in Stocks',
        'link' => 'strategy-library/mean-reversion-statistical-arbitrage-strategy-in-stocks',
        'sources' => [
            'NYU' => 'https://www.math.nyu.edu/faculty/avellane/AvellanedaLeeStatArb071108.pdf'
        ],
        'description' => "Apply statistical arbitrage to take advantage of pricing inefficiencies in stocks.",
        'tags'=>'PCA,Mean Reversion,Stocks,Arbitrage'
    ],
	[
		'name' => 'Expected Idiosyncratic Skewness',
		'link' => 'strategy-library/expected-idiosyncratic-skewness',
		'sources' => [
			'NYU' => 'http://citeseerx.ist.psu.edu/viewdoc/download?doi=10.1.1.825.592&rep=rep1&type=pdf'
		],
		'description' => "Stock selection strategy that calculates expected idiosyncratic skewness using Fama-French three-factor model, sorts stocks based on the calculated skewness, and longs the bottom 5%.",
		'tags' => 'Equities, Skewness, Fundamental Factors, Statistical Arbitrage'
	],
    [
        'name' => 'Risk Premia in Forex Markets',
        'link' => 'strategy-library/risk-premia-in-forex-markets',
        'sources' => [
            'NYU' => 'https://arxiv.org/pdf/1409.7720.pdf'
        ],
        'description' => "A strategy based on asymmetric tail risks and excess returns in forex markets.",
        'tags'=>'Forex,Skewness,Risk Premium'

    ],
    [
        'name' => 'Seasonality Effect based on Same-Calendar Month Returns',
        'link' => 'strategy-library/seasonality-effect-based-on-same-calendar-month-returns',
        'sources' => [
            'NYU' => 'https://www.nber.org/papers/w20815.pdf'
        ],
        'description' => "A strategy that takes long and short positions based on historical same-calendar month returns",
        'tags'=>'Seasonality,Stocks,Universe Selection'

    ],
	[
		'name' => 'Standardized Unexpected Earnings',
		'link' => 'strategy-library/standardized-unexpected-earnings',
		'sources' => [
			'NYU' => 'https://www.jstor.org/stable/pdf/247321.pdf'
		],
		'description' => "Stock selection strategy that calculates the unexpected earnings, standardizes the unexpected earnings, goes long on the top 5%, and rebalances the portfolio monthly.",
		'tags' => 'Equities, Fundamental Factors, Earnings, Anomaly'
	],
    [
        'name' => 'Price and Earnings Momentum',
        'link' => 'strategy-library/price-and-earnings-momentum',
        'sources' => [
            'NYU' => 'http://papers.ssrn.com/sol3/papers.cfm?abstract_id=299107'
        ],
        'description' => "A momentum strategy based on quarterly returns and earnings growth",
        'tags'=>'Momentum, Stocks, Universe Selection, Historical Data, Rolling Window'

    ],
	[
		'name' => 'Improved Momentum Strategy on Commodities Futures',
		'link' => 'strategy-library/improved-momentum-strategy-on-commodities-futures',
		'sources' => [
			'NYU' => 'https://pdfs.semanticscholar.org/a2e9/df201d4b4774fda84a961cc804f2450988c5.pdf'
		],
		'description' => "An advanced momentum strategy that modifies the basic momentum strategies by introducing Baltas and Kosowski weights and rebalances the portfolio monthly. The new weighing scheme incorporates trend strength into the trading signal, uses an efficient volatility estimator, and adds a dynamic leverage mechanism.",
		'tags' => 'Momentum, Futures, Commodities'
	],
	[
		'name' => 'Commodities Futures Trend Following',
		'link' => 'strategy-library/commodities-futures-trend-following',
		'sources' => [
			'NYU' => 'https://arxiv.org/pdf/1404.3274.pdf'
		],
		'description' => "A simple trend following strategy on commodities futures.",
		'tags' => 'Momentum, Futures, Commodities'
	],
	[
     'name' => 'Forecasting Stock Prices using a Temporal CNN Model',
     'link' => 'strategy-library/forecasting-stock-prices-using-a-temporal-cnn-model',
     'sources' => [
         'Tampere University' => 'https://arxiv.org/pdf/1901.08280.pdf'
     ],
     'description' => "Applying a Temporal Convolutional Neural Network to forecasting future stock prices.",
     'tags' => 'Convolutional Neural Network, Equities, Forecasting, Deep Learning'
  ],
  [
     'name' => 'Leveraged ETFs with Systematic Risk Management',
     'link' => 'strategy-library/leveraged-etfs-with-systematic-risk-management',
     'sources' => [
      'The Lead-Lag Report' => 'https://papers.ssrn.com/sol3/papers.cfm?abstract_id=2741701'
     ],
     'description' => 'We apply Simple Moving Averages to manage the risk of holding leveraged ETFs in an attempt to beat the S&P500',
     'tags' => 'Simple Moving Average, Risk Management, S&P500, ETF'
  ],
  [
     'name' => 'Leveraged ETFs with Systematic Risk Management',
     'link' => 'leveraged-etfs-with-systematic-risk-management',
     'sources' => [
       'The Lead-Lag Report' => 'https://papers.ssrn.com/sol3/papers.cfm?abstract_id=2741701'
     ],
     'description' => 'We apply Simple Moving Averages to manage risk in holding leveraged ETFs in an attempt to by the S&P500',
     'tags' => 'Simple Moving Average, Risk Management, S&P500, ETF'
  ],
  [
     'name' => 'Ichimoku Clouds in the Energy Sector',
     'link' => 'strategy-library/ichimoku-clouds-in-the-energy-sector',
     'sources' => [
       'SSRN' => 'https://ssrn.com/abstract=3520582'
     ],
     'description' => 'A techincal indicator crossover strategy trading the largest energy companies.',
     'tags'=>'Intermediate, Technical Indicator, Ichimoku Cloud, Crossover, Equities'
  ],
  [
     'name' => 'Intraday ETF Momentum',
     'link' => 'strategy-library/intraday-etf-momentum',
     'sources' => [
       'NYU' => 'https://papers.ssrn.com/sol3/papers.cfm?abstract_id=2440866'
     ],
     'description' => "A momentum strategy based on returns of the market open",
     'tags'=>'Momentum, Stocks, Universe Selection, Equities, Anomaly'
  ],
  [
     'name' => 'Intraday Arbitrage Between Index ETFs',
     'link' => 'strategy-library/intraday-arbitrage-between-index-etfs',
     'sources' => [
       'SSRN' => 'https://papers.ssrn.com/sol3/papers.cfm?abstract_id=1709599'
     ],
     'description' => "A strategy that tracks the price paths of two correlated ETFs and takes advantage of mis-pricings that arise when the price paths diverge",
     'tags'=>'Intermediate, Equities, Arbitrage, Intraday'
  ],
  [
     'name' => 'Optimal Pairs Trading',
     'link' => 'strategy-library/optimal-pairs-trading',
     'sources' => [
       'arXiv' => 'https://arxiv.org/pdf/1411.5062.pdf'
     ],
     'description' => "Mathematically Deriving the Optimal Entry and Liquidation Values of a Pairs Trading Process",
     'tags'=>'Pairs Trading, Ornstein-Uhlenbeck Process, Optimal Stopping'
  ],
  [
     'name' => 'G-Score Investing',
     'link' => 'strategy-library/g-score-investing',
     'sources' => [
       'SSRN' => 'https://papers.ssrn.com/sol3/papers.cfm?abstract_id=403180'
     ],
     'description' => "Applying G-Score Investing to Invest in a Portfolio of Technology Stocks",
     'tags'=>'Fundamentals, Factor Investing, G-Score Investing, MorningStar data, equities'
  ],
  [
     'name' => 'SVM Wavelet Forecasting',
     'link' => 'strategy-library/svm-wavelet-forecasting',
     'sources' => [
       'Academia' => 'https://www.academia.edu/37180223/SVR_Wavelet_Adaptive_Model_for_Forecasting_Financial_Time_Series'
     ],
     'description' => "Forecasting EURJPY prices with an SVM Wavelet model",
     'tags'=>'Support Vector Machines (SVM), Forex, Forecasting, Wavelet, Discrete Wavelet Transform'
  ],
  [
     'name' => 'Gradient Boosting Model',
     'link' => 'strategy-library/gradient-boosting-model',
     'sources' => [
       'arXiv' => 'https://ssrn.com/abstract=2323899'
     ],
     'description' => "Forecasts future intraday returns with a gradient boosting model trained on technical indicators",
     'tags'=>'Gradient Boost, Regression Trees, Equities, Machine Learning'
  ],
  [
     'name' => 'Using News Sentiment to Predict Price Direction of Drug Manufacturers',
     'link' => 'strategy-library/using-news-sentiment-to-predict-price-direction-of-drug-manufacturers',
     'sources' => [
         'arXiv' => 'https://arxiv.org/abs/1812.04199'
     ],
     'description' => "Analyzes the news releases of drug manufacturers and places intraday trades for the stocks with positive news.",
     'tags'=>'Equities, NLP, News Sentiment, Drug Manufacturers, Tiingo, Intraday'
  ],
  [
     'name' => 'Gaussian Naive Bayes Model',
     'link' => 'strategy-library/gaussian-naive-bayes-model',
     'sources' => [
         'Academia' => 'https://www.academia.edu/7677227/Forecasting_the_direction_of_stock_market_index_movement_using_three_data_mining_techniques_the_case_of_Tehran_Stock_Exchange'
     ],
     'description' => "Forecasts the next day's return of technology stocks by fitting a gaussian naive bayes model to the historical returns of the technology sector constituents.",
     'tags'=>'Equities, Machine Learning, Naive Bayes, Gaussian'
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
