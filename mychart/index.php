<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>My Chart JS</title>
</head>

<body>
    <div class="container">
        <canvas id="myChart"></canvas>
    </div>
    <script>
        let myChart = document.getElementById('myChart').getContext('2d');

        // Global Option
        Chart.defaults.global.defaultFontFamily = 'Lato';
        Chart.defaults.global.defaultFontFamily = 18;
        Chart.defaults.global.defaultFontFamily = '#777';

        let massPopChart = new Chart(myChart, {
            type: 'pie', //horizontalBar, pie, line,doughnutt, radar, polarArea
            data: {
                labels: ['adsasd', 'asdasd', 'asdasd', 'asdasdas', 'asdasd'],
                datasets: [{
                    label: 'Population',
                    data: [
                        123,
                        321,
                        324,
                        412,
                        123
                    ],
                    // backgroundColor:'green',
                    backgroundColor: [
                        '#29B0D0',
                        '#2A516E',
                        '#F07124',
                        '#CBE0E3',
                        '#979193'
                    ],
                    borderColor: '#777',
                    borderWidth: 1,
                    hoverBorderWidth: 3,
                    hoverBorderColor: '#000'
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Largest Cities In Massacgysetts',
                    fontSize: 25
                },
                lagend: {
                    display: true, //true or false
                    position: 'right',
                    labels: {
                        fontColor: '#000'
                    }
                },
                layout: {
                    padding: {
                        left: 50,
                        right: 0,
                        buttom: 0,
                        top: 0
                    }
                },
                tooltips: {
                    enabled: true
                }
            }
        });
    </script>

</body>

</html>