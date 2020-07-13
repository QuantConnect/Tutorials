![QuantConnect Logo](https://cdn.quantconnect.com/web/i/logo-small.png)
# QuantConnect LEAN Tutorials

[Tutorial Website][1] | [Documentation][2] | [Download LEAN][3] | [Slack Channel][8]
----------

This repository is a collection of WordPress and Jupyter notebook tutorials for LEAN demonstrating financial concepts and LEAN. Tutorials are categorized into folders with each Category and Tutorial Series. The Jupyter notebook and the associated HTML webpage must use matching file names. The HTML is generated and displayed with wordpress.

Lean Engine is an open-source fully managed C# algorithmic trading engine built for desktop and cloud usage. It was designed in Mono and operates in Windows, Linux and Mac platforms. For more information about the LEAN Algorithmic Trading engine see the [Lean][4] Engine repository.


## New Tutorial Requests and Edits ##

Please submit new tutorial requests as an issue to the [Tutorials][5] repository. Before submitting an issue please read others to ensure it is not a duplicate. Edits and fixes for clarity are warmly welcomed!

## Mailing List ##

The mailing list for the project can be found on [Google Groups][6]

## Contributors and Pull Requests ##

Contributions are warmly very welcomed but we ask you read the existing code to see how it is formatted, commented and ensure contributions match the existing style. All code submissions must include accompanying tests. Please see the [contributor guide lines][7].

## Strategy Library Development Workflow ##
To publish a strategy to our [Strategy Library](https://www.quantconnect.com/tutorials/strategy-library/strategy-library), follow these steps:
1. Review filtered sources like SSRN, arxiv, and other academic journals/papers for a strategy to implement. Try to adhere to the [Quant League competition](https://www.quantconnect.com/competitions/quant-league-1) criteria and the Alpha Streams [minimum criteria](https://www.quantconnect.com/docs/alpha-streams/submitting-an-alpha#Submitting-an-Alpha-Minimum-Criteria) and [review process](https://www.quantconnect.com/docs/alpha-streams/submitting-an-alpha#Submitting-an-Alpha-Subsequent-Review-Process).
2. Post a 3-point development plan to [our Slack channel](https://www.quantconnect.com/slack) and wait for approval by @jaredbroad or @alexcatarino. See an example [here](https://cdn.quantconnect.com/i/tu/development-plan-example.png).
3. Develop the strategy (add [license and imports](https://github.com/QuantConnect/Lean/blob/master/Algorithm.Python/BasicTemplateAlgorithm.py#L1) to main.py).
4. Add an Issue to the [Tutorials repo](https://github.com/QuantConnect/Tutorials/issues) ([example](https://github.com/QuantConnect/Tutorials/issues/277)).
5. Add @alexcatarino as a [collaborator](https://www.quantconnect.com/blog/collaborating-in-quantconnect/) to the project.
6. Publish a strategy write-up in the Slack channel and wait for approval (see [Strategy Library](https://www.quantconnect.com/tutorials/strategy-library/strategy-library) for examples).
7. Convert the strategy write-up to HTML form ([examples](https://github.com/QuantConnect/Tutorials/tree/master/04%20Strategy%20Library)).
8. Make PR (following the [Contributor's Guidelines](https://github.com/QuantConnect/Lean/blob/master/CONTRIBUTING.md)):
    - If the write-up includes images, upload them [here](https://www.quantconnect.com/admin/cdnUpload).
    - Add summary HTML files to [Strategy Library directory](https://github.com/QuantConnect/Tutorials/tree/master/04%20Strategy%20Library). If it's a non-Quantpedia strategy, set the ID number (in the directory name) to the next available after 1023.
    - If the strategy is from Quantpedia, add strategy ID and backtest ID to [quantpedia.json](https://github.com/QuantConnect/Tutorials/blob/master/quantpedia.json).
    - Add strategy metadata to [this file](https://github.com/QuantConnect/Tutorials/blob/master/04%20Strategy%20Library/00%20Strategy%20Library/01%20Strategy%20Library.php) (Currently semi-sorted by Quantpedia strategy ID).
9. After the PR is merged, send @jaredbroad the URL and a 1-sentence summary of what the paper/strategy is about and post the strategy to the forum with the backtest of the algorithm and a short summary of the project ([example](https://www.quantconnect.com/forum/discussion/8608/strategy-library-addition-residual-momentum/p1)).

[1]: https://www.quantconnect.com/tutorials "Tutorials Viewer"
[2]: https://www.quantconnect.com/lean/docs "Lean Documentation"
[3]: https://github.com/QuantConnect/Lean/archive/master.zip
[4]: https://github.com/QuantConnect/Lean
[5]: https://github.com/QuantConnect/Tutorials/issues
[6]: https://groups.google.com/forum/#!forum/lean-engine
[7]: https://github.com/QuantConnect/Lean/blob/master/CONTRIBUTING.md
[8]: https://www.quantconnect.com/slack
