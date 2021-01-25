<script>
import { Line } from "vue-chartjs";

export default {
  extends: Line,
  data() {
    return {};
  },
  mounted() {
    this.renderChart(
      {
        labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],

        datasets: [
          {
            label: "Iphone",
            borderColor: "#00bfc7",
            pointBackgroundColor: "white",
            borderWidth: 3,
            backgroundColor: "transparent",
            pointBorderWidth: 3,
            data: [50, 130, 80, 70, 180, 105, 250]
          },
          {
            label: "Ipad",
            borderColor: "#fb9678",
            pointBackgroundColor: "white",
            borderWidth: 3,
            backgroundColor: "transparent",
            pointBorderWidth: 3,
            data: [80, 100, 60, 200, 150, 100, 150]
          }
        ]
      },
      {
        responsive: true,
        maintainAspectRatio: false,
        gridLines: {
          color: "#e0e0e0"
        },
        legend: {
          position: "bottom"
        }
      }
    );
  }
};
</script>