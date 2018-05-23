<script>

import { Line } from 'vue-chartjs';

let days = [];
let clicks = [];

export default {
    extends: Line,
    data () {
      return {

        datacollection: {
        //Data to be represented on x-axis
          labels: days, 
          datasets: [
            {
              label: 'Clicks',
              backgroundColor: '#39c586d4',
              borderColor: '#51988a',
              pointBackgroundColor: '#ffffff',
              borderWidth: 1,
              pointBorderColor: '#ffb64d',
              //Data to be represented on y-axis
              data: clicks
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
                text: 'Line Chart for Number of clicks per day'
            },
          responsive: true,
          maintainAspectRatio: false
        }
      }
    },
    methods: {
        feed () {
            axios.post('/api/clickcount')
            .then(response => {
                let data = response.data;

                data.forEach(function(index, ele) {
                    days.push(index.days)
                    clicks.push(index.clicks)
                });

                
            })
            .catch(error => {
                console.log(error.data);
            })
        }
    },
    mounted () {
        this.feed();
    //renderChart function renders the chart with the datacollection and options object.
      this.renderChart(this.datacollection, this.options);
    }
}


</script>