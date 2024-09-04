@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="../assets/vendor/apexcharts/dist/apexcharts.css">
<style type="text/css">
  .apexcharts-tooltip.apexcharts-theme-light {
    background-color: transparent !important;
    border: none !important;
    box-shadow: none !important;
  }
</style>

    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
      <!-- Grid -->
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
          <div class="p-4 md:p-5">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                Total users
              </p>
              <div class="hs-tooltip">
                <div class="hs-tooltip-toggle">
                  <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                    <path d="M12 17h.01" />
                  </svg>
                  <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                    Administrateurs
                  </span>
                </div>
              </div>
            </div>

            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
            {{ $admins }}
              </h3>
              <span class="flex items-center gap-x-1 text-green-600">
                <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                  <polyline points="16 7 22 7 22 13" />
                </svg>
                <span class="inline-block text-sm">
                  1.7%
                </span>
              </span>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
          <div class="p-4 md:p-5">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                Utilisateurs
              </p>
            </div>

            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                {{ $users }}
              </h3>
            </div>
          </div>
        </div>
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <div class="p-4 md:p-5">
              <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                  Sessions
                </p>
              </div>
  
              <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                  {{ $users }}
                </h3>
              </div>
            </div>
          </div>
        <!-- End Card -->

        <!-- Card -->

        <!-- End Card -->

        <!-- Card -->

        <!-- End Card -->
      </div>
      <!-- End Grid -->



      <!-- Card -->
      <!-- Card -->
    <div class="p-4 md:p-5 min-h-[410px] flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
    <!-- Header -->
    <div class="flex justify-between items-center">
      <div>
        <h2 class="text-sm text-gray-500 dark:text-neutral-500">
          Sessions
        </h2>
        <p class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
          15
        </p>
      </div>

      <div>
        <span class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-teal-100 text-teal-800 dark:bg-teal-500/10 dark:text-teal-500">
          <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14"/><path d="m19 12-7 7-7-7"/></svg>
          25%
        </span>
      </div>
    </div>
    <!-- End Header -->

    <div id="hs-multiple-bar-charts"></div>
  </div>
  <!-- End Card -->

      <!-- End Card -->
    </div>
  </div>
  <script src="../assets/vendor/lodash/lodash.min.js"></script>
  <script src="../assets/vendor/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/js/hs-apexcharts-helpers.js"></script>

  <script>
    window.addEventListener("load", () => {
      (function () {
        buildChart(
          "#hs-multiple-bar-charts",
          (mode) => ({
            chart: {
              type: "bar",
              height: 300,
              toolbar: {
                show: false,
              },
              zoom: {
                enabled: false,
              },
            },
            series: [
              {
                name: "Chosen Period",
                data: [
                  2, 4, 0, 2, 0, 2, 0, 1, 0,
                  4, 
                ],
              },
              {

              },
            ],
            plotOptions: {
              bar: {
                horizontal: false,
                columnWidth: "16px",
                borderRadius: 0,
              },
            },
            legend: {
              show: false,
            },
            dataLabels: {
              enabled: false,
            },
            stroke: {
              show: true,
              width: 8,
              colors: ["transparent"],
            },
            xaxis: {
              categories: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
              ],
              axisBorder: {
                show: false,
              },
              axisTicks: {
                show: false,
              },
              crosshairs: {
                show: false,
              },
              labels: {
                style: {
                  colors: "#9ca3af",
                  fontSize: "13px",
                  fontFamily: "Inter, ui-sans-serif",
                  fontWeight: 400,
                },
                offsetX: -2,
                formatter: (title) => title.slice(0, 3),
              },
            },
            yaxis: {
              labels: {
                align: "left",
                minWidth: 0,
                maxWidth: 140,
                style: {
                  colors: "#9ca3af",
                  fontSize: "13px",
                  fontFamily: "Inter, ui-sans-serif",
                  fontWeight: 400,
                },
                formatter: (value) => (value >= 1000 ? `${value / 1000}` : value),
              },
            },
            states: {
              hover: {
                filter: {
                  type: "darken",
                  value: 0.9,
                },
              },
            },
            tooltip: {
              y: {
                formatter: (value) =>
                  `$${value >= 1000 ? `${value / 1000}` : value}`,
              },
              custom: function (props) {
                const { categories } = props.ctx.opts.xaxis;
                const { dataPointIndex } = props;
                const title = categories[dataPointIndex];
                const newTitle = `${title}`;

                return buildTooltip(props, {
                  title: newTitle,
                  mode,
                  hasTextLabel: true,
                  wrapperExtClasses: "min-w-28",
                  labelDivider: ":",
                  labelExtClasses: "ms-2",
                });
              },
            },
            responsive: [
              {
                breakpoint: 568,
                options: {
                  chart: {
                    height: 300,
                  },
                  plotOptions: {
                    bar: {
                      columnWidth: "14px",
                    },
                  },
                  stroke: {
                    width: 8,
                  },
                  labels: {
                    style: {
                      colors: "#9ca3af",
                      fontSize: "11px",
                      fontFamily: "Inter, ui-sans-serif",
                      fontWeight: 400,
                    },
                    offsetX: -2,
                    formatter: (title) => title.slice(0, 3),
                  },
                  yaxis: {
                    labels: {
                      align: "left",
                      minWidth: 0,
                      maxWidth: 140,
                      style: {
                        colors: "#9ca3af",
                        fontSize: "11px",
                        fontFamily: "Inter, ui-sans-serif",
                        fontWeight: 400,
                      },
                      formatter: (value) =>
                        value >= 1000 ? `${value / 1000}` : value,
                    },
                  },
                },
              },
            ],
          }),
          {
            colors: ["#2563eb", "#d1d5db"],
            grid: {
              borderColor: "#e5e7eb",
            },
          },
          {
            colors: ["#6b7280", "#2563eb"],
            grid: {
              borderColor: "#404040",
            },
          }
        );
      })();
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <canvas id="myChart" width="400" height="200"></canvas>
  <script>
    window.addEventListener("load", () => {
        // Récupérer les données PHP
        let dataFromPHP = <?php echo json_encode($t_sessions); ?>;
        
        // Préparer les données pour Chart.js
        let labels = dataFromPHP.map(item => `${item.month}/${item.year}`);
        let data = dataFromPHP.map(item => item.total_sessions);
        
        // Créer le graphique avec Chart.js
        const ctx = document.getElementById('myChart').getContext('2d');
        new Chart(ctx, {
            type: 'line', // Type du graphique
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Sessions',
                    data: data,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 2,
                    fill: true, // Remplit la zone sous la ligne
                    tension: 0.1 // Courbure de la ligne
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return `Sessions: ${tooltipItem.raw}`;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Month/Year'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Total Sessions'
                        }
                    }
                }
            }
        });
    });
</script>

@endsection
