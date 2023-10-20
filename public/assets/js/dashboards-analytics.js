/**
 * Dashboard Analytics
 */

'use strict';

(function () {
  let cardColor, headingColor, axisColor, shadeColor, borderColor;

  cardColor = config.colors.cardColor;
  headingColor = config.colors.headingColor;
  axisColor = config.colors.axisColor;
  borderColor = config.colors.borderColor;

  // Total Revenue Report Chart - Bar Chart
  // --------------------------------------------------------------------
  const totalRevenueChartEl = document.querySelector('#totalRevenueChart'),
    totalRevenueChartOptions = {
      series: [
        {
          name: 'ថ្លៃភ្លើង',
          data: [8, 7, 20, 9, 18, 12, 9, 23, 83, 13,12,5]
        },
        {
          name: 'ថ្លៃបន្ទប់',
          data: [18, 7, 15, 20, 18, 12, 9, 43, 53, 23,12,5]
        },
        {
          name: 'ថ្លៃទឹក',
          data: [18, 7, 15, 19, 18, 12, 9, 43, 53, 23,12,5]
        },
        {
          name: 'ថ្លៃសំរាម',
          data: [10, 70, 25, 30, 68, 82, 29, 30, 53, 23,52,50]
        },
      ],
      chart: {
        height: 300,
        stacked: false,
        type: 'bar',
        toolbar: { show: true }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '30%',
          borderRadius: 100,
        }
      },
      colors: [config.colors.primary, config.colors.info, config.colors.warning, config.colors.danger],
      dataLabels: {
        enabled: false
      },
      xaxis: {
        categories: ['មករា', 'កុម្ភះ', 'មីនា', 'មេសា', 'ឧសភា', 'មិថុនា', 'កក្កដា', 'សីហា', 'កញ្ញា', 'តុលា', 'វិច្ឆិកា', 'ធ្នូ'],
        labels: {
          style: {
            fontSize: '16px',
            colors: axisColor
          }
        },
      },
      yaxis: {
        labels: {
          style: {
            fontSize: '18px',
            colors: axisColor
          }
        }
      },
      responsive: [
        {
          breakpoint: 1700,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '40%'
              }
            }
          }
        },
      ],
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };
  if (typeof totalRevenueChartEl !== undefined && totalRevenueChartEl !== null) {
    const totalRevenueChart = new ApexCharts(totalRevenueChartEl, totalRevenueChartOptions);
    totalRevenueChart.render();
  }

})();
