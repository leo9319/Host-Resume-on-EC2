const ctx = document.getElementById('myChart');

let ch = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: [
            ['Results', 'Reporting'],
            ['Cents to', 'the Cause '],
            ['Financial Transparency'],
            ['Current', 'Funding'],
            ['Cost', 'Effectiveness'],
        ] ,
        datasets: [
            {
                label: 'Financial Transparency',
                data: [9, 7.5, 8, 7, 8],
                backgroundColor: [
                    'rgba(119, 209, 243, 0.5)',
                    'rgba(253, 230, 138, 0.5)',
                    'rgba(196, 181, 253, 0.5)',
                    'rgba(234, 167, 252, 0.5)',
                    'rgba(172, 239, 200, 0.5)',
                ],
                hoverBackgroundColor: [
                    'rgba(119, 209, 243)',
                    'rgba(253, 230, 138)',
                    'rgba(196, 181, 253)',
                    'rgba(234, 167, 252)',
                    'rgba(172, 239, 200)',
                ],
                hoverBorderColor: [
                    'rgba(1, 169, 219)',
                    'rgba(252, 209, 77)',
                    'rgba(148, 98, 196)',
                    'rgba(207, 96, 216)',
                    'rgba(82, 181, 132)',
                ],
            },
        ]
    },
    options: {
        width: 200,
        height: 200,
        plugins: {
            title: {
                display: false
            },
            legend: {
                display: false
            },
            labels: {
                arc: false,
                position: 'border',
                fontSize: 10,
                render: 'value',

            },
            tooltip: {
                enabled: false
            }
        },
        responsive: true,
        scales: {
            r: {
                suggestedMin: 0,
                suggestedMax: 10,
                pointLabels: {
                    display: true,
                    position: 'outside',
                    centerPointLabels: true,
                    font: {
                        size: 12
                    },
                },
                ticks: {
                    display: false
                },
            }
        },
        'onClick': function (evt, data) {
            // scroll page to the top
            let currentScrollPos = window.scrollY;
            if(currentScrollPos < 152) {
                let newScrollPos = 152;
                window.scrollTo({
                    top: newScrollPos,
                    behavior: 'smooth'
                });
            }

            let lmHeader = document.getElementById('lm-header');
            let lmBorder = document.getElementById('lm-border');
            let lmBody = document.getElementById('lm-body');
            let tapInfo = document.getElementById('tap-info');
            let infoBucket = document.getElementById('info-bucket');


            let textContents = [
                {
                    header: "Results Reporting = 9 /10",
                    borderClass: "my-1 border-2 border-[#77D1F3]",
                    bodyContent: "Grades how openly a charity talks about what it does, what it achieves, and the impact of its work. A higher grade means more clear, detailed information is shared.\n" +
                        "\n" +
                        "This dimension makes up 35% of the Overall Charity Rating"
                },
                {
                    header: "Cents to the Cause = 7.5 /10",
                    borderClass: "my-1 border-2 border-[#FDE68A]",
                    bodyContent: "For every $1.00 you give, $0.75 go directly to programs after essential costs like fundraising and administration are covered. \n" +
                        "\n" +
                        "This dimension makes up 15% of the Overall Charity Rating "
                },
                {
                    header: "Financial Transparency= 8/10",
                    borderClass: "my-1 border-2 border-[#C4B5FD]",
                    bodyContent: "Rates how easily you can find a charity's financial info. A rating of 8 means that the charity has the most recent financial statement posted. \n" +
                        "\n" +
                        "This dimension makes up 15% of the Overall Charity Rating "
                },
                {
                    header: "Current Funding = 7/10",
                    borderClass: "my-1 border-2 border-[#EAA7FC]",
                    bodyContent: "Evaluates if a charity’s current funding covers its projected program costs. A lower score means the charity has fewer reserves, highlighting a more urgent need for support. Your contributions can directly impact this area.\n" +
                        "\n" +
                        "This dimension makes up 15% of the Overall Charity Rating "
                },
                {
                    header: "Cost Effectiveness = 8/10",
                    borderClass: "my-1 border-2 border-[#ACEFC8]",
                    bodyContent: "Reflects the tangible change each dollar you donate achieves, showing you the real-world benefits of your contributions. A higher Effectiveness score signals that a charity makes each dollar go further in creating real benefits, like better health and cost savings for the community.\n" +
                        "\n" +
                        "This dimension makes up 20% of the Overall Charity Rating "
                },
            ]

            if (data[0] !== undefined) {
                lmHeader.textContent = textContents[data[0].index].header
                lmBody.textContent = textContents[data[0].index].bodyContent
                lmBorder.className = '';
                lmBorder.classList.add(...textContents[data[0].index].borderClass.split(' '));
                tapInfo.classList.add('hidden');
                infoBucket.classList.remove('hidden');
            }

        }
    }
});
