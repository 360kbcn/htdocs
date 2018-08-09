
        <?php require_once "section/header.php"; ?>
        <?php require_once "section/nav.php"; ?>
        <main class="container">
          <div class="row">
      <div class="col-md-8">
        <?php

        $section = [];
        $visits = [];

        foreach($data['statics'] as $static){

          array_push($section, $static[0]);
          array_push($visits, $static[1]);
        }
        ?>
        <canvas id="myChart"></canvas>
        <script>

          var section = <?php echo json_encode($section);?>;
          var visits = <?php echo json_encode($visits);?>;

          var ctx = document.getElementById('myChart').getContext('2d');
          var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: section,
                datasets: [{
                    label: "visitas",
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: visits,
                }]
            },

            // Configuration options go here
            options: {
              legend: {
                display: false
              },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
          });
        </script>
      </div>
    </div>
  </main>

        <?php require_once "section/footer.php"; ?>
    