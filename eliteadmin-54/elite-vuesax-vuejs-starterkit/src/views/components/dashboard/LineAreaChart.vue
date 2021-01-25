<script>
import { Line } from "vue-chartjs";

export default {
  extends: Line,
  data() {
    return {
      gradient: null,
      gradient2: null
    };
  },
  mounted() {
    this.gradient = this.$refs.canvas
      .getContext("2d")
      .createLinearGradient(0, 0, 0, 450);
    this.gradient2 = this.$refs.canvas
      .getContext("2d")
      .createLinearGradient(0, 0, 0, 450);

    this.gradient.addColorStop(0, "rgba(180, 190, 203, 0.5)");
    this.gradient.addColorStop(0.4, "rgba(180, 190, 203, 0.25)");
    this.gradient.addColorStop(1, "rgba(255, 255, 255, 0)");

    this.gradient2.addColorStop(0, "rgba(1, 192, 200, 0.5)");
    this.gradient2.addColorStop(0.4, "rgba(1, 192, 200, 0.25)");
    this.gradient2.addColorStop(1, "rgba(1, 192, 200, 0.2)");

    this.renderChart(
      {
        labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
        datasets: [
          {
            label: "Site A",
            borderColor: "rgba(180, 190, 203, 0.5)",
            pointBackgroundColor: "white",
            borderWidth: 2,
            pointBorderWidth: 0,
            backgroundColor: this.gradient,
            data: [0, 130, 80, 70, 180, 105, 250],
            pointStrokeColors: "rgba(180, 190, 203, 0.5)",
            lineTension: 0
          },
          {
            label: "Site B",
            borderColor: "rgba(1, 192, 200, 0.5)",
            pointBackgroundColor: "white",
            borderWidth: 2,
            pointBorderWidth: 0,
            backgroundColor: this.gradient2,
            data: [0, 100, 60, 200, 150, 90, 150],
            pointStrokeColors: "rgba(1, 192, 200, 0.5)",
            lineTension: 0
          }
        ]
      },
      { responsive: true, maintainAspectRatio: false }
    );
  }
};
</script>