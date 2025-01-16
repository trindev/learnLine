var options = {
  chart: {
    height: 323,
    type: "line",
    toolbar: {
      show: false,
    },
  },
  dataLabels: {
    enabled: false,
  },
  fill: {
    type: 'solid',
    opacity: [0.1, 1],
  },
  stroke: {
    curve: "smooth",
    width: [0, 4]
  },
  series: [{
    name: 'การใช้ (ครั้ง)',
    type: 'area',
    data: [5, 6, 7, 4, 3, 4, 2, 8, 10, 2, 6, 8, 4, 5, 2]
  }, {
    name: 'ค่าเฉลี่ย',
    type: 'line',
    data: [4.93, 4.93, 4.93, 4.93, 4.93, 4.93, 4.93, 4.93, 4.93, 4.93, 4.93, 4.93, 4.93, 4.93, 4.93]
  }],
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
      left: 20,
      right: 10,
      bottom: 20 // เพิ่มระยะห่างด้านล่างเพื่อป้องกันวันที่ตกขอบ
    },
  },
  xaxis: {
    categories: [
      "01/12/2024" ,
      "05/12/2024" ,
      "06/12/2024" ,
      "09/12/2024" ,
      "12/12/2024" ,
      "13/12/2024" ,
      "14/12/2024" ,
      "17/12/2024" ,
      "18/12/2024" ,
      "19/12/2024" ,
      "20/12/2024" ,
      "22/12/2024" ,
      "26/12/2024" ,
      "27/12/2024" ,
      "29/12/2024" 
       ], 
       labels: {
        rotate: -45, // หมุนข้อความ
        align: 'center', // จัดให้อยู่กลาง
        padding: {
          left: 10,  // เพิ่มระยะห่างด้านซ้าย
          right: 10, // เพิ่มระยะห่างด้านขวา
        },
        style: {
          fontSize: '12px',
          colors: ['#6c757d']
        },
      }, 
      tooltip: {
        enabled: true // เพิ่ม tooltip เมื่อ hover บนวันที่
      },
      tickPlacement: 'on', // วาง tick ไว้ตรงกับข้อความ
  },
  yaxis: {
    labels: {
      show: true, // เปิดให้แสดงตัวเลข
      align: 'right', // จัดข้อความตัวเลขไปทางขวา
      offsetX: -10, // ปรับระยะห่างแนวนอน
      style: {
        fontSize: '12px', // กำหนดขนาดฟอนต์
        colors: ['#6c757d'], // สีของตัวเลข
      },
      formatter: function (val) { // รูปแบบการแสดงค่า
        return Math.round(val); // แสดงค่าตัวเลขเต็ม
      }
    },
    axisBorder: {
      show: false // ซ่อนเส้นขอบแกน Y
    },
    axisTicks: {
      show: false // ซ่อนเส้น tick บนแกน Y
    },
  },  
  legend: {
    position: 'bottom',
    horizontalAlign: 'center',
  },
  colors: ["#116AEF", "#0ebb13", "#5394F5", "#75AAF9", "#96BFFC", "#B7D4FF"],
  markers: {
    size: 0,
    opacity: 0.3,
    colors: ["#116AEF", "#0ebb13", "#5394F5", "#75AAF9", "#96BFFC", "#B7D4FF"],
    strokeColor: "#ffffff",
    strokeWidth: 1,
    hover: {
      size: 7,
    },
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return val;
      },
    },
  },
};

var chart = new ApexCharts(document.querySelector("#patients"), options);

chart.render();