// SIDEBAR TOGGLE

let sidebarOpen = false;
const sidebar = document.getElementById('sidebar');

function openSidebar() {
  if (!sidebarOpen) {
    sidebar.classList.add('sidebar-responsive');
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if (sidebarOpen) {
    sidebar.classList.remove('sidebar-responsive');
    sidebarOpen = false;
  }
}

// ---------- CHARTS ----------


// AREA CHART
const areaChartOptions = {
  series: [
    {
      name: 'Purchase Orders',
      data: [31, 40, 28, 51, 42, 109, 100],
    },
    {
      name: 'Sales Orders',
      data: [11, 32, 45, 32, 34, 52, 41],
    },
  ],
  chart: {
    type: 'area',
    background: 'transparent',
    height: 100,
    // width: 200,
    stacked: false,
    toolbar: {
      show: false,
    },
  },
  colors: ['#00ab57', '#d50000'],
  
  dataLabels: {
    enabled: false,
  },
  fill: {
    gradient: {
      opacityFrom: 0.4,
      opacityTo: 0.1,
      shadeIntensity: 1,
      stops: [0, 50],
      type: 'vertical',
    },
    type: 'gradient',
  },
  grid: {
    borderColor: '#55596e',
    yaxis: {
      lines: {
        show: false,
      },
    },
    xaxis: {
      lines: {
        show: false,
      },
    },
  },
  legend: {
    labels: {
      colors: '#000000',
    },
    show: false,
    position: 'top',
  },
  markers: {
    size: 0,
    strokeColors: '#1b2635',
    strokeWidth: 1,
  },
  stroke: {
    curve: 'smooth',
  },
  xaxis: {
    axisBorder: {
      color: '#55596e',
      show: false,
    },
    axisTicks: {
      color: '#55596e',
      show: false,
    },
    labels: {
      offsetY: 1,
      show: false,
      style: {
        colors: '#000000',
      },
    },
  },
  yaxis: [
    {
      
      labels: {
        show: false,
        style: {
          colors: ['#000000'],
        },
      },
    },
    {
      opposite: true,
      // title: {
      //   text: 'Sales Orders',
      //   style: {
      //     color: '#000000',
      //   },
      // },
      labels: {
        show: false,
        style: {
          colors: ['#f5f7ff'],
        },
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
    theme: 'dark',
  },
};

const areaChart = new ApexCharts(
  document.querySelector('.area-chart'),
  areaChartOptions
);
areaChart.render();
