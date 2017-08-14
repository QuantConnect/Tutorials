![QuantConnect Logo](https://cdn.quantconnect.com/web/i/logo-small.png)
# QuantConnect Tutorial Series
----------

This repository is a collection of WordPress and Jupyter notebook tutorials for LEAN demonstrating basic financial concepts, Python usage and introduction to Options and Machine Learning. Tutorials are categorized into 3 folders with each Category. The Jupyter notebook and the associated HTML webpage must use matching file names. The HTML is generated and displayed with wordpress.

## Introduction to Financial Python ##
This tutorial series starts from basic Python and finance concepts. If you have great investment ideas but don’t know how to build, or you think you need to learn some basic skills in quantitative finance, here is a good start point. These series include four parts: Python, basic math and statistics, basic finance regarding investment, and financial time series analysis, which is an advanced curriculum in quantitative finance.

We not only introduce the concepts but also show you how to apply the introduced technique step by step using Python code snippets. We use real financial datasets as examples, and show you what those charts in text book look like with real-world financial data. After each chapter, we also design a QC algorithm applying what we learned. We do this in order to let you have a more comprehensive understanding and see the differences between the theories and the practice — sometimes it can be hard to apply a simple concept.


## Tutorial Series ##

<table width="100%">
    <thead>
        <tr>
            <th colspan="2" align="left">Introduction to Financial Python</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-python-data-types-data-structures/"> 1. Data Types and Data Structures </a> </td>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-python-confidence-interval-hypothesis-testing/"> 8. Confidence Interval and Hypothesis Testing </a> </td>
        </tr>
        <tr>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-python-logical-operation-loop/"> 2. Logical Opertions and Loops </a> </td>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-python-simple-linear-regression/">9. Simple Linear Regression </a> </td>
        </tr>
        <tr>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-python-functions-object-oriented-programming/"> 3. Functions and Object-Oriented Programming </a> </td>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-python-multiple-linear-regression-residual-analysis/"> 10.Multiple Linear Regression </a> </td>
        </tr>
        <tr>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-python-numpy-basic-pandas/"> 4. NumPy and Basic Pandas </a> </td>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-python-linear-algebra/"> 11. Linear Algebra </a> </td>
        </tr>
 <tr>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-python-pandas-resampling-dataframe/"> 5. Pandas-Resampling and DataFrame </a> </td>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-python-modern-portfolio-theory/"> 12. Modern Portfolio Theory </a> </td>
        </tr>
        
  <tr>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-python-rate-return-mean-variance/"> 6.Rate of Return, Mean and Variance </a> </td>
            <td> <a href="https://www.quantconnect.com/tutorials/capital-asset-pricing-model/">13. Capital Asset Pricing Model </a> </td>
        </tr>
        
 <tr>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-python-random-variable-distributions/
"> 7. Random Variable and Distributions </a> </td>
            <td> <a href="None"> 14. Fama-French Multi-Factor Models(WIP) </a> </td>
        </tr>
    </tbody>
</table>

## Introduction to Options ##
The goal of this series is to introduce options to those who are option novices and have basic knowledge of applied mathematics, statistics and financial markets. We will primarily talk about the fundamentals of options and cover topics such as what are options, key terms and concepts option traders need to be familiar with(exercise and assignment,The moneyness, Intrinsic and time value of options etc.) After knowing the basics of options, we will teach how to use QuantConnect API to conduct your options research with over 4000 underlying stock symbols.

The following few options tutorials was created to help you understand exactly how options are used as investment and risk hedging tools. We will further discuss the pricing method of options like BSM model and monte carlo method. And then several metrics to gauge the options risks like the Greek lettters, different kinds of volatilities used in options pricing and trading. At the end of some tutorials, we will apply the knowledge in that tutorial to demonstrate some simple algorithms developed with Python on Quantconnect attempting to help you gain an insight into options trading and learn more efficient API tools to better customize your own trading algorithms. 


<table width="100%">
    <thead>
        <tr>
            <th colspan="2" align="left">Introduction to Options</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-options-general-features-options/"> 1. General Features of Options </a> </td>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-options-black-scholes-merton-model/"> 5. Options Pricing: Black-Scholes-Merton Model </a> </td>
        </tr>
        <tr>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-options-using-options-in-quantconnect/"> 2. Using Options in QuantConnect </a> </td>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-options-the-greek-letters/"> 6. The Greek Letters </a> </td>
        </tr>
        <tr>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-options-put-call-parity-and-arbitrage-strategies/"> 3. Put-Call Parity and Arbitrage Strategies </a> </td>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-options-historical-volatility-implied-volatility/"> 7. Historical Volatility and Implied Volatility </a> </td>
        </tr>
        <tr>
            <td> <a href="https://www.quantconnect.com/tutorials/introduction-options-stochastic-volatility/"> 4. Stochastic Processes and Monte Carlo Method </a> </td>
            <td> <a href="8"> 8. Local Volatility and Stochastic Volatility </a> </td>
        </tr>
    </tbody>
</table>



## Introduction to Machine Learning ##
This tutotial series aims to give you a general idea of what are machine learning algorithms and how could they be applied to your trading strategies. We start from supervised learning algorithms like the well-known neural network, support vehicle machine, etc. and then go to cover tree-based classifiers such as decision trees, random forest, etc. Next, we reach out to reinforcement learning and association rules. And in the end of this tutotial series, we introduce unsupervised learning, as well as heuristic algorithm. All of them play important roles in financial decisions.

Unlike most teachings in textbooks, our tutorials keep from going deep into math which dampens readers' enthusiasm. Instead, we use simple and easy-to-understand examples to illustrate the complex logic behind each machine learning algorithm. We the display the APIs in Python to make these tools handy for you. Finally, we end each tutorial with a trading algorithm combining and applying what you've learned with real market data.

<table width="100%">
    <thead>
        <tr>
            <th colspan="2" align="left">Introduction to Machine Learning</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <a href=""> 1. Structure and Construction of Neural Networks</a> </td>
            <td> <a href=""> 2. Kernel Function and Construction of Support Vector Machines</a> </td>
        </tr>
        <tr>
            <td> <a href=""> 3. Bayes' Theorem and Classification of Market Signals by Naive Bayes</a> </td>
            <td> <a href=""> 4. Using Entropy and Information Gain to Construct ID3 Decision Tree</a> </td>
        </tr>
        <tr>
            <td> <a href=""> 5. Random Subtrees and Class Prediction with Random Forest</a> </td>
            <td> <a href=""> 6. Boosting Ensemble and Making Predictions with AdaBoost</a> </td>
        </tr>
        <tr>
            <td> <a href=""> 7. Unsupervised Reinforcement Mechanism and Implementation of Q-Learning Algorithms</a> </td>
            <td> <a href=""> 8. Association Rule and Market Trend Analysis with Apriori Algorithms</a> </td>
        </tr>
 <tr>
            <td> <a href=""> 9. Centroid Rebalance and Stock Classification with K-Nearest Neighbors</a> </td>
            <td> <a href=""> 10. Optimizing Technical Indicators by Simulating Evolution Processes to Construct Genetic Algorithms</a> </td>
        </tr>
    </tbody>
</table>


