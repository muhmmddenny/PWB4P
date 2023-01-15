<div class="content-wrapper">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <title>Grafik dengan Chart Js</title>
        <script src="<?php echo base_url() ?>/assets/chart/Chart.js"></script>
    </head>

    <body>
        <br>
        <h4>Grafik Data Karyawan</h4>
        <canvas id="myChart"></canvas>
        <?php
        $nama_karyawan = "";
        $jumlah = null;
        foreach ($hasil as $item) {
            $jur = $item->jurusan;
            $nama_jurusan .= "'$jur'" . ", ";
            $jum = $item->total;
            $jumlah .= "'$jum'" . ", ";
        }
        ?>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: [<?php echo $nama_jurusan; ?>],
                    datasets: [{
                        label: 'Data Jurusan Mahasiswa',
                        backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)', 'rgb(175, 238, 239)'],
                        borderColor: ['rgb(255, 99, 132)'],
                        data: [<?php echo $jumlah; ?>]
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                begitAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>

    </body>

    </html>
</div>