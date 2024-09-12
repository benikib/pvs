@extends('layouts.personnel')
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
                Total de surveillances
              </p>
              <div class="hs-tooltip">
                <div class="hs-tooltip-toggle">
                  <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                    <path d="M12 17h.01" />
                  </svg>

                </div>
              </div>
            </div>

            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
            {{ $totalsurveillance }}
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
                 total Examen à surveile
              </p>
            </div>

            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                {{ $examens_restants }}
              </h3>
            </div>
          </div>
        </div>
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">

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

          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          <canvas id="myChart" width="800" height="400"></canvas>

          <script>
            window.addEventListener("load", () => {
                // Récupérer les données PHP
                let dataFromPHP = <?php echo json_encode($totalsurveillances); ?>;

                // Préparer les données pour Chart.js
                let labels = dataFromPHP.map(item => `Session ${item.session_id}`);
                let data = dataFromPHP.map(item => item.total);

                // Créer le graphique avec Chart.js
                const ctx = document.getElementById('myChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar', // Type du graphique
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Nombre de  participation',
                            data: data,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
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
                                        return `Nombre de fois: ${tooltipItem.raw}`;
                                    }
                                }
                            }
                        },
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: 'Session ID' // L'étiquette de l'axe des X
                                },
                                ticks: {
                                    autoSkip: false // Pour éviter les étiquettes coupées
                                }
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: 'Nombre de  participation' // L'étiquette de l'axe des Y
                                },
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
          </script>
        </div>
        <!-- End Header -->
    </div>






@endsection
