<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row align-self-center">
        <div class="col-lg col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?php echo e($totalPacientes); ?></h3>
                    <p>Total Pacientes en Prog. Cardiovascular</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="<?php echo e(route('pacientes.index')); ?>" class="small-box-footer">Mas información <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- ./col -->
        <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-pink">
                <div class="inner">
                    <h3><?php echo e($totalFemenino); ?></h3>
                    <p>Total Pacientes Mujeres</p>
                </div>
                <div class="icon">
                    <i class="fas fa-female"></i>
                </div>
                <a href="<?php echo e(url('/pacientes?q=femenino')); ?>" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-pink">
                <div class="inner">
                    <h3><?php echo e($femenino2064); ?></h3>
                    <p>Mujeres de 20 a 64 años</p>
                </div>
                <div class="icon">
                    <i class="fas fa-female"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-pink">
                <div class="inner">
                    <h3><?php echo e($femenino65mas); ?></h3>
                    <p>Mujeres de 65 años y mas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-female"></i>
                </div>
            </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-blue">
                <div class="inner">
                    <h3><?php echo e($totalMasculino); ?></h3>
                    <p>Total Pacientes Hombres</p>
                </div>
                <div class="icon">
                    <i class="fas fa-male"></i>
                </div>
                <a href="<?php echo e(url('/pacientes?q=masculino')); ?>" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-blue">
                <div class="inner">
                    <h3><?php echo e($masculino2064); ?></h3>
                    <p>Hombres de 20 a 64 años</p>
                </div>
                <div class="icon">
                    <i class="fas fa-male"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-blue">
                <div class="inner">
                    <h3><?php echo e($masculino65mas); ?></h3>
                    <p>Hombres de 65 años y mas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-male"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-orange">
                <div class="inner">
                    <h3><?php echo e($totalNaranjo); ?></h3>
                    <p>Pacientes Sector Naranjo</p>
                </div>
                <div class="icon">
                    <i class="fas fa-hospital-user"></i>
                </div>
                <a href="<?php echo e(url('/pacientes?q=naranjo')); ?>" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-lightblue">
                <div class="inner">
                    <h3><?php echo e($totalCeleste); ?></h3>
                    <p>Pacientes Sector Celeste</p>
                </div>
                <div class="icon">
                    <i class="fas fa-hospital-user"></i>
                </div>
                <a href="<?php echo e(url('/pacientes?q=celeste')); ?>" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-2 col-6">
            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3><?php echo e($compensados); ?></h3>
                    <p>Pacientes Compensados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-check"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-6">
            <div class="small-box bg-gradient-danger">
                <div class="inner">
                    <h3><?php echo e($noCompensados); ?></h3>
                    <p>Pacientes NO Compensados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-times"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-6">
            <div class="small-box bg-gradient-info">
                <div class="inner">
                    <h3><?php echo e($sinInfo); ?></h3>
                    <p>Pacientes Sin Información</p>
                </div>
                <div class="icon">
                    <i class="fas fa-question"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
    </div>
    
    <div class="card-body">
        <div class="d-flex">
            <p class="d-flex flex-column">
                
                <span>Total Pacientes</span>
            </p>
            <p class="ml-auto d-flex flex-column text-right">
                
                
            </p>
        </div>
        <!-- /.d-flex -->

        <div class="position-relative mb-4">
            <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                    <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                    <div class=""></div>
                </div>
            </div>
            <canvas id="myChart" height="200" style="display: block; width: 759px; height: 200px;" width="759"
                class="chartjs-render-monitor"></canvas>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Entre 15 y 19', 'Entre 20 y 24', 'Entre 25 y 29', 'Entre 30 y 34', 'Entre 35 y 39', 'Entre 40 y 44', 'Entre 45 y 49', 'Entre 50 y 54', 'Entre 55 y 59', 'Entre 60 y 64', 'Entre 65 y 69', 'Entre 70 y 74', 'Entre 75 y 79', 'Entre 80 y Mas'],
                datasets: [{
                    label: 'q Pacientes',
                    data: [
                        <?php echo e($in1519); ?>, <?php echo e($in2024); ?>, <?php echo e($in2529); ?>, <?php echo e($in3034); ?>, <?php echo e($in3539); ?>, <?php echo e($in4044); ?>, <?php echo e($in4549); ?>, <?php echo e($in5054); ?>,<?php echo e($in5559); ?>, <?php echo e($in6064); ?>,<?php echo e($in6569); ?>, <?php echo e($in7074); ?>,<?php echo e($in7579); ?>, <?php echo e($mas80); ?>

                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(0, 0, 255, 0.2)',
                        'rgba(0, 255, 0, 0.2)',
                        'rgba(255, 255, 0, 0.2)',
                        'rgba(0, 255, 255, 0.2)',
                        'rgba(255, 0, 255, 0.2)',
                        'rgba(128, 128, 128, 0.2)',
                        'rgba(0, 128, 0, 0.2)',
                        'rgba(0, 0, 128, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/home.blade.php ENDPATH**/ ?>