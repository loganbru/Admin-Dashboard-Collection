var chart = new Chartist.Line('.thresholdChart', {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  series: [
    {name: 'Flights', data: [40000, 45000, 35000, 52000, 80000, 82000, 99000, 72000, 80000, 124000, 100000, 120000]},
    {name: 'Hotels', data: [30000, 21000, 22000, 31000, 50000, 41000, 52000, 44000, 61000, 58000, 70000, 82000]},
    {name: 'Taxi', data: [6000, 7000, 12000, 000, 10000, 9000, 18000, 21000, 19000, 18000, 50000, 42000]}
  ]
}, {
  // Remove this configuration to see that chart rendered with cardinal spline interpolation
  // Sometimes, on large jumps in data values, it's better to use simple smoothing.
  lineSmooth: Chartist.Interpolation.simple({
    divisor: 2
  }),
  fullWidth: true,
  height: "190px",
  showArea: true,
  chartPadding: {
    right: 10,
    left: 20,
    top: 20,
    bottom: 0,
  },
  plugins: [
    Chartist.plugins.tooltip()
  ],
  low: 0,
});
