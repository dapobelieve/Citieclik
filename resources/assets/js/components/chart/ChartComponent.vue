<script>

import { Line } from 'vue-chartjs';


export default {
    extends: Line,
    data () {
      return {
        datacollection: {
        //Data to be represented on x-axis
          labels: [], 
          datasets: [
            {
              label: 'Clicks',
              backgroundColor: '#a1f7e5',
              borderColor: '#51988a',
              pointBackgroundColor: '#ffffff',
              borderWidth: 1,
              pointBorderColor: '#ffb64d',
              //Data to be represented on y-axis
              data: []
            }
          ]
        },
        //Chart.js options that controls the appearance of the chart
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              },
              gridLines: {
                display: true
              }
            }],
            xAxes: [ {
              gridLines: {
                display: false
              }
            }]
          },
          legend: {
            display: true
          },
          title: {
                display: true,
                text: 'Line Chart for Number of clicks per month'
            },
          responsive: true,
          maintainAspectRatio: false
        }
      }
    },
    mounted () {
    //renderChart function renders the chart with the datacollection and options object.
      this.renderChart(this.datacollection, this.options);
    }
}


</script>