var options = {
  chart: {
    height: 300,
    type: "area",
    toolbar: {
      show: false,
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: "straight",
    width: 3,
  },
  series: [
    {
      name: "Cash",
      data: [76, 77, 76, 77, 76, 77, 77,77],
    },
  ],
  grid: {
    borderColor: "#d8dee6",
    strokeDashArray: 5,
    xaxis: {
      lines: {
        show: true,
      },
    },
    yaxis: {
      lines: {
        show: false,
      },
    },
    padding: {
      top: 0,
      right: 30,
      bottom: 10,
      left: 30,
    },
  },
  xaxis: {
    categories: [
      "05/01/2025",
      "06/01/2025",
      "07/01/2025",
      "08/01/2025",
      "09/01/2025",
      "11/01/2025",
      "12/01/2025",
      "13/01/2025",
    ],
  },
  colors: ["#116aef", "#d0dfe9"],
  yaxis: {
    show: false,
  },
  markers: {
    size: 0,
    opacity: 0.2,
    colors: ["#116aef", "#d0dfe9"],
    strokeColor: "#fff",
    strokeWidth: 2,
    hover: {
      size: 7,
    },
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return "$" + val;
      },
    },
  },
};

var chart = new ApexCharts(document.querySelector("#medicalExpenses"), options);

chart.render();