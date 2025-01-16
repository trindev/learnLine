Morris.Bar({
  element: "barColors",
  data: [
    { x: "01/12/2024", Sales: 6 },
    { x: "03/12/2024", Sales: 1 },
    { x: "04/12/2024", Sales: 2 },
    { x: "13/12/2024", Sales: 3 },
    { x: "16/12/2024", Sales: 2 },
    { x: "17/12/2024", Sales: 4 },
    { x: "20/12/2024", Sales: 7 },
    { x: "22/12/2024", Sales: 2 },
    { x: "23/12/2024", Sales: 5 },
    { x: "25/12/2024", Sales: 9 },
    { x: "27/12/2024", Sales: 3 },
    { x: "28/12/2024", Sales: 5 },
  ],
  xkey: "x",
  ykeys: ["Sales"],
  labels: ["การใช้ (ครั้ง)"],
  resize: true,
  gridLineColor: "#dfd6ff",
  hideHover: "auto",
  barColors: ["#1169f6"],
  xLabelAngle: 90, // เพิ่มมุมให้ข้อความแกน x เป็นแนวตั้ง
  barSizeRatio: 0.4, // ลดขนาดแท่งให้เล็กลง (50% ของพื้นที่ที่แท่งใช้ได้)
});
