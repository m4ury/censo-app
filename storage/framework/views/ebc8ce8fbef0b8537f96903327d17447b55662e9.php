<?php $__env->startSection('title', 'REM P4: Seccion A'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h4 class="card-title text-bold mb-3">
                <a class="mx-3" href="<?php echo e(url('estadisticas')); ?>" title="Atras">
                    <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                    Volver
                </a>
                SECCIÓN A: PROGRAMA SALUD CARDIOVASCULAR
                (PSCV)
            </h4>
            <div class="col-md-12 table-responsive">
                <table id="pscv" class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="2" rowspan="3">CONCEPTO</th>
                            <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                            <th class="text-center" colspan="28">GRUPOS DE EDAD (en años) Y SEXO</th>
                            <th colspan="2" rowspan="2">Pueblos Originarios</th>
                            <th colspan="2" rowspan="2">Poblacion Migrantes</th>
                            <th rowspan="3">Pacientes Diabeticos</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">15 a 19 años</th>
                            <th nowrap="" colspan="2">20 a 24 años</th>
                            <th nowrap="" colspan="2">25 a 29 años</th>
                            <th nowrap="" colspan="2">30 a 34 años</th>
                            <th nowrap="" colspan="2">35 a 39 años</th>
                            <th nowrap="" colspan="2">40 a 44 años</th>
                            <th nowrap="" colspan="2">45 a 49 años</th>
                            <th nowrap="" colspan="2">50 a 54 años</th>
                            <th nowrap="" colspan="2">55 a 59 años</th>
                            <th nowrap="" colspan="2">60 a 64 años</th>
                            <th nowrap="" colspan="2">65 a 69 años</th>
                            <th nowrap="" colspan="2">70 a 74 años</th>
                            <th nowrap="" colspan="2">75 a 79 años</th>
                            <th nowrap="" colspan="2">80 y mas años</th>
                        </tr>
                        <tr>
                            <th>Ambos Sexos</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">NUMERO DE PERSONAS EN PSCV</th>
                            <td><?php echo e($total_pscv); ?></td>
                            <td><?php echo e($m_pscv); ?></td>
                            <td><?php echo e($f_pscv); ?></td>
                            <td><?php echo e($pscv_1519M); ?></td>
                            <td><?php echo e($pscv_1519F); ?></td>
                            <td><?php echo e($pscv_2024M); ?></td>
                            <td><?php echo e($pscv_2024F); ?></td>
                            <td><?php echo e($pscv_2529M); ?></td>
                            <td><?php echo e($pscv_2529F); ?></td>
                            <td><?php echo e($pscv_3034M); ?></td>
                            <td><?php echo e($pscv_3034F); ?></td>
                            <td><?php echo e($pscv_3539M); ?></td>
                            <td><?php echo e($pscv_3539F); ?></td>
                            <td><?php echo e($pscv_4044M); ?></td>
                            <td><?php echo e($pscv_4044F); ?></td>
                            <td><?php echo e($pscv_4549M); ?></td>
                            <td><?php echo e($pscv_4549F); ?></td>
                            <td><?php echo e($pscv_5054M); ?></td>
                            <td><?php echo e($pscv_5054F); ?></td>
                            <td><?php echo e($pscv_5559M); ?></td>
                            <td><?php echo e($pscv_5559F); ?></td>
                            <td><?php echo e($pscv_6064M); ?></td>
                            <td><?php echo e($pscv_6064F); ?></td>
                            <td><?php echo e($pscv_6569M); ?></td>
                            <td><?php echo e($pscv_6569F); ?></td>
                            <td><?php echo e($pscv_7074M); ?></td>
                            <td><?php echo e($pscv_7074F); ?></td>
                            <td><?php echo e($pscv_7579M); ?></td>
                            <td><?php echo e($pscv_7579F); ?></td>
                            <td><?php echo e($pscv_80M); ?></td>
                            <td><?php echo e($pscv_80F); ?></td>
                        </tr>
                        <tr>
                            <th rowspan="4" style="vertical-align: middle">CLASIFICACION DEL RIESGO
                                CARDIOVASCULAR
                            </th>
                        <tr>
                            <th>BAJO</th>
                            <td><?php echo e($p_bajo); ?></td>
                            <td><?php echo e($p_bajoM); ?></td>
                            <td><?php echo e($p_bajoF); ?></td>
                            <td><?php echo e($bajo_1519M); ?></td>
                            <td><?php echo e($bajo_1519F); ?></td>
                            <td><?php echo e($bajo_2024M); ?></td>
                            <td><?php echo e($bajo_2024F); ?></td>
                            <td><?php echo e($bajo_2529M); ?></td>
                            <td><?php echo e($bajo_2529F); ?></td>
                            <td><?php echo e($bajo_3034M); ?></td>
                            <td><?php echo e($bajo_3034F); ?></td>
                            <td><?php echo e($bajo_3539M); ?></td>
                            <td><?php echo e($bajo_3539F); ?></td>
                            <td><?php echo e($bajo_4044M); ?></td>
                            <td><?php echo e($bajo_4044F); ?></td>
                            <td><?php echo e($bajo_4549M); ?></td>
                            <td><?php echo e($bajo_4549F); ?></td>
                            <td><?php echo e($bajo_5054M); ?></td>
                            <td><?php echo e($bajo_5054F); ?></td>
                            <td><?php echo e($bajo_5559M); ?></td>
                            <td><?php echo e($bajo_5559F); ?></td>
                            <td><?php echo e($bajo_6064M); ?></td>
                            <td><?php echo e($bajo_6064F); ?></td>
                            <td><?php echo e($bajo_6569M); ?></td>
                            <td><?php echo e($bajo_6569F); ?></td>
                            <td><?php echo e($bajo_7074M); ?></td>
                            <td><?php echo e($bajo_7074F); ?></td>
                            <td><?php echo e($bajo_7579M); ?></td>
                            <td><?php echo e($bajo_7579F); ?></td>
                            <td><?php echo e($bajo_80M); ?></td>
                            <td><?php echo e($bajo_80F); ?></td>
                        </tr>
                        <tr>
                            <th>MODERADO</th>
                            <td><?php echo e($p_moderado); ?></td>
                            <td><?php echo e($p_moderadoM); ?></td>
                            <td><?php echo e($p_moderadoF); ?></td>
                            <td><?php echo e($mod_1519M); ?></td>
                            <td><?php echo e($mod_1519F); ?></td>
                            <td><?php echo e($mod_2024M); ?></td>
                            <td><?php echo e($mod_2024F); ?></td>
                            <td><?php echo e($mod_2529M); ?></td>
                            <td><?php echo e($mod_2529F); ?></td>
                            <td><?php echo e($mod_3034M); ?></td>
                            <td><?php echo e($mod_3034F); ?></td>
                            <td><?php echo e($mod_3539M); ?></td>
                            <td><?php echo e($mod_3539F); ?></td>
                            <td><?php echo e($mod_4044M); ?></td>
                            <td><?php echo e($mod_4044F); ?></td>
                            <td><?php echo e($mod_4549M); ?></td>
                            <td><?php echo e($mod_4549F); ?></td>
                            <td><?php echo e($mod_5054M); ?></td>
                            <td><?php echo e($mod_5054F); ?></td>
                            <td><?php echo e($mod_5559M); ?></td>
                            <td><?php echo e($mod_5559F); ?></td>
                            <td><?php echo e($mod_6064M); ?></td>
                            <td><?php echo e($mod_6064F); ?></td>
                            <td><?php echo e($mod_6569M); ?></td>
                            <td><?php echo e($mod_6569F); ?></td>
                            <td><?php echo e($mod_7074M); ?></td>
                            <td><?php echo e($mod_7074F); ?></td>
                            <td><?php echo e($mod_7579M); ?></td>
                            <td><?php echo e($mod_7579F); ?></td>
                            <td><?php echo e($mod_80M); ?></td>
                            <td><?php echo e($mod_80F); ?></td>
                        </tr>
                        <tr>
                            <th>ALTO</th>
                            <td><?php echo e($p_alto); ?></td>
                            <td><?php echo e($p_altoM); ?></td>
                            <td><?php echo e($p_altoF); ?></td>
                            <td><?php echo e($alto_1519M); ?></td>
                            <td><?php echo e($alto_1519F); ?></td>
                            <td><?php echo e($alto_2024M); ?></td>
                            <td><?php echo e($alto_2024F); ?></td>
                            <td><?php echo e($alto_2529M); ?></td>
                            <td><?php echo e($alto_2529F); ?></td>
                            <td><?php echo e($alto_3034M); ?></td>
                            <td><?php echo e($alto_3034F); ?></td>
                            <td><?php echo e($alto_3539M); ?></td>
                            <td><?php echo e($alto_3539F); ?></td>
                            <td><?php echo e($alto_4044M); ?></td>
                            <td><?php echo e($alto_4044F); ?></td>
                            <td><?php echo e($alto_4549M); ?></td>
                            <td><?php echo e($alto_4549F); ?></td>
                            <td><?php echo e($alto_5054M); ?></td>
                            <td><?php echo e($alto_5054F); ?></td>
                            <td><?php echo e($alto_5559M); ?></td>
                            <td><?php echo e($alto_5559F); ?></td>
                            <td><?php echo e($alto_6064M); ?></td>
                            <td><?php echo e($alto_6064F); ?></td>
                            <td><?php echo e($alto_6569M); ?></td>
                            <td><?php echo e($alto_6569F); ?></td>
                            <td><?php echo e($alto_7074M); ?></td>
                            <td><?php echo e($alto_7074F); ?></td>
                            <td><?php echo e($alto_7579M); ?></td>
                            <td><?php echo e($alto_7579F); ?></td>
                            <td><?php echo e($alto_80M); ?></td>
                            <td><?php echo e($alto_80F); ?></td>
                        </tr>
                        </tr>
                        <tr>
                            <th rowspan="7" style="vertical-align: middle">PERSONAS BAJO CONTROL SEGÚN PATOLOGÍA
                                Y
                                FACTORES DE RIESGO
                                (EXISTENCIA)
                            </th>
                        <tr>
                            <th>HIPERTENSOS</th>
                            <td><?php echo e($hta); ?></td>
                            <td><?php echo e($htaM); ?></td>
                            <td><?php echo e($htaF); ?></td>
                            <td><?php echo e($hta_1519M); ?></td>
                            <td><?php echo e($hta_1519F); ?></td>
                            <td><?php echo e($hta_2024M); ?></td>
                            <td><?php echo e($hta_2024F); ?></td>
                            <td><?php echo e($hta_2529M); ?></td>
                            <td><?php echo e($hta_2529F); ?></td>
                            <td><?php echo e($hta_3034M); ?></td>
                            <td><?php echo e($hta_3034F); ?></td>
                            <td><?php echo e($hta_3539M); ?></td>
                            <td><?php echo e($hta_3539F); ?></td>
                            <td><?php echo e($hta_4044M); ?></td>
                            <td><?php echo e($hta_4044F); ?></td>
                            <td><?php echo e($hta_4549M); ?></td>
                            <td><?php echo e($hta_4549F); ?></td>
                            <td><?php echo e($hta_5054M); ?></td>
                            <td><?php echo e($hta_5054F); ?></td>
                            <td><?php echo e($hta_5559M); ?></td>
                            <td><?php echo e($hta_5559F); ?></td>
                            <td><?php echo e($hta_6064M); ?></td>
                            <td><?php echo e($hta_6064F); ?></td>
                            <td><?php echo e($hta_6569M); ?></td>
                            <td><?php echo e($hta_6569F); ?></td>
                            <td><?php echo e($hta_7074M); ?></td>
                            <td><?php echo e($hta_7074F); ?></td>
                            <td><?php echo e($hta_7579M); ?></td>
                            <td><?php echo e($hta_7579F); ?></td>
                            <td><?php echo e($hta_80M); ?></td>
                            <td><?php echo e($hta_80F); ?></td>
                        </tr>
                        <tr>
                            <th>DIABETICOS</th>
                            <td><?php echo e($dm2); ?></td>
                            <td><?php echo e($dm2M); ?></td>
                            <td><?php echo e($dm2F); ?></td>
                            <td><?php echo e($dm2_1519M); ?></td>
                            <td><?php echo e($dm2_1519F); ?></td>
                            <td><?php echo e($dm2_2024M); ?></td>
                            <td><?php echo e($dm2_2024F); ?></td>
                            <td><?php echo e($dm2_2529M); ?></td>
                            <td><?php echo e($dm2_2529F); ?></td>
                            <td><?php echo e($dm2_3034M); ?></td>
                            <td><?php echo e($dm2_3034F); ?></td>
                            <td><?php echo e($dm2_3539M); ?></td>
                            <td><?php echo e($dm2_3539F); ?></td>
                            <td><?php echo e($dm2_4044M); ?></td>
                            <td><?php echo e($dm2_4044F); ?></td>
                            <td><?php echo e($dm2_4549M); ?></td>
                            <td><?php echo e($dm2_4549F); ?></td>
                            <td><?php echo e($dm2_5054M); ?></td>
                            <td><?php echo e($dm2_5054F); ?></td>
                            <td><?php echo e($dm2_5559M); ?></td>
                            <td><?php echo e($dm2_5559F); ?></td>
                            <td><?php echo e($dm2_6064M); ?></td>
                            <td><?php echo e($dm2_6064F); ?></td>
                            <td><?php echo e($dm2_6569M); ?></td>
                            <td><?php echo e($dm2_6569F); ?></td>
                            <td><?php echo e($dm2_7074M); ?></td>
                            <td><?php echo e($dm2_7074F); ?></td>
                            <td><?php echo e($dm2_7579M); ?></td>
                            <td><?php echo e($dm2_7579F); ?></td>
                            <td><?php echo e($dm2_80M); ?></td>
                            <td><?php echo e($dm2_80F); ?></td>
                        </tr>
                        <tr>
                            <th>DISLIPIDEMICOS</th>
                            <td><?php echo e($dlp); ?></td>
                            <td><?php echo e($dlpM); ?></td>
                            <td><?php echo e($dlpF); ?></td>
                            <td><?php echo e($dlp_1519M); ?></td>
                            <td><?php echo e($dlp_1519F); ?></td>
                            <td><?php echo e($dlp_2024M); ?></td>
                            <td><?php echo e($dlp_2024F); ?></td>
                            <td><?php echo e($dlp_2529M); ?></td>
                            <td><?php echo e($dlp_2529F); ?></td>
                            <td><?php echo e($dlp_3034M); ?></td>
                            <td><?php echo e($dlp_3034F); ?></td>
                            <td><?php echo e($dlp_3539M); ?></td>
                            <td><?php echo e($dlp_3539F); ?></td>
                            <td><?php echo e($dlp_4044M); ?></td>
                            <td><?php echo e($dlp_4044F); ?></td>
                            <td><?php echo e($dlp_4549M); ?></td>
                            <td><?php echo e($dlp_4549F); ?></td>
                            <td><?php echo e($dlp_5054M); ?></td>
                            <td><?php echo e($dlp_5054F); ?></td>
                            <td><?php echo e($dlp_5559M); ?></td>
                            <td><?php echo e($dlp_5559F); ?></td>
                            <td><?php echo e($dlp_6064M); ?></td>
                            <td><?php echo e($dlp_6064F); ?></td>
                            <td><?php echo e($dlp_6569M); ?></td>
                            <td><?php echo e($dlp_6569F); ?></td>
                            <td><?php echo e($dlp_7074M); ?></td>
                            <td><?php echo e($dlp_7074F); ?></td>
                            <td><?php echo e($dlp_7579M); ?></td>
                            <td><?php echo e($dlp_7579F); ?></td>
                            <td><?php echo e($dlp_80M); ?></td>
                            <td><?php echo e($dlp_80F); ?></td>
                        </tr>
                        <tr>
                            <th nowrap="">TABAQUISMO MAYOR A 55 AÑOS</th>
                            <td><?php echo e($tbq); ?></td>
                            <td><?php echo e($tbqM); ?></td>
                            <td><?php echo e($tbqF); ?></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td><?php echo e($tbq_5559M); ?></td>
                            <td><?php echo e($tbq_5559F); ?></td>
                            <td><?php echo e($tbq_6064M); ?></td>
                            <td><?php echo e($tbq_6064F); ?></td>
                            <td><?php echo e($tbq_6569M); ?></td>
                            <td><?php echo e($tbq_6569F); ?></td>
                            <td><?php echo e($tbq_7074M); ?></td>
                            <td><?php echo e($tbq_7074F); ?></td>
                            <td><?php echo e($tbq_7579M); ?></td>
                            <td><?php echo e($tbq_7579F); ?></td>
                            <td><?php echo e($tbq_80M); ?></td>
                            <td><?php echo e($tbq_80F); ?></td>
                        </tr>
                        <tr>
                            <th nowrap="">ANTECEDENTES DE INFARTO AGUDO AL MIOCARDIO (IAM)</th>
                            <td><?php echo e($iam); ?></td>
                            <td><?php echo e($iamM); ?></td>
                            <td><?php echo e($iamF); ?></td>
                            <td><?php echo e($iam_1519M); ?></td>
                            <td><?php echo e($iam_1519F); ?></td>
                            <td><?php echo e($iam_2024M); ?></td>
                            <td><?php echo e($iam_2024F); ?></td>
                            <td><?php echo e($iam_2529M); ?></td>
                            <td><?php echo e($iam_2529F); ?></td>
                            <td><?php echo e($iam_3034M); ?></td>
                            <td><?php echo e($iam_3034F); ?></td>
                            <td><?php echo e($iam_3539M); ?></td>
                            <td><?php echo e($iam_3539F); ?></td>
                            <td><?php echo e($iam_4044M); ?></td>
                            <td><?php echo e($iam_4044F); ?></td>
                            <td><?php echo e($iam_4549M); ?></td>
                            <td><?php echo e($iam_4549F); ?></td>
                            <td><?php echo e($iam_5054M); ?></td>
                            <td><?php echo e($iam_5054F); ?></td>
                            <td><?php echo e($iam_5559M); ?></td>
                            <td><?php echo e($iam_5559F); ?></td>
                            <td><?php echo e($iam_6064M); ?></td>
                            <td><?php echo e($iam_6064F); ?></td>
                            <td><?php echo e($iam_6569M); ?></td>
                            <td><?php echo e($iam_6569F); ?></td>
                            <td><?php echo e($iam_7074M); ?></td>
                            <td><?php echo e($iam_7074F); ?></td>
                            <td><?php echo e($iam_7579M); ?></td>
                            <td><?php echo e($iam_7579F); ?></td>
                            <td><?php echo e($iam_80M); ?></td>
                            <td><?php echo e($iam_80F); ?></td>
                        </tr>
                        <tr>
                            <th nowrap="">ANTECEDENTES DE ENF. CEREBRO VASCULAR</th>
                            <td><?php echo e($acv); ?></td>
                            <td><?php echo e($acvM); ?></td>
                            <td><?php echo e($acvF); ?></td>
                            <td><?php echo e($acv_1519M); ?></td>
                            <td><?php echo e($acv_1519F); ?></td>
                            <td><?php echo e($acv_2024M); ?></td>
                            <td><?php echo e($acv_2024F); ?></td>
                            <td><?php echo e($acv_2529M); ?></td>
                            <td><?php echo e($acv_2529F); ?></td>
                            <td><?php echo e($acv_3034M); ?></td>
                            <td><?php echo e($acv_3034F); ?></td>
                            <td><?php echo e($acv_3539M); ?></td>
                            <td><?php echo e($acv_3539F); ?></td>
                            <td><?php echo e($acv_4044M); ?></td>
                            <td><?php echo e($acv_4044F); ?></td>
                            <td><?php echo e($acv_4549M); ?></td>
                            <td><?php echo e($acv_4549F); ?></td>
                            <td><?php echo e($acv_5054M); ?></td>
                            <td><?php echo e($acv_5054F); ?></td>
                            <td><?php echo e($acv_5559M); ?></td>
                            <td><?php echo e($acv_5559F); ?></td>
                            <td><?php echo e($acv_6064M); ?></td>
                            <td><?php echo e($acv_6064F); ?></td>
                            <td><?php echo e($acv_6569M); ?></td>
                            <td><?php echo e($acv_6569F); ?></td>
                            <td><?php echo e($acv_7074M); ?></td>
                            <td><?php echo e($acv_7074F); ?></td>
                            <td><?php echo e($acv_7579M); ?></td>
                            <td><?php echo e($acv_7579F); ?></td>
                            <td><?php echo e($acv_80M); ?></td>
                            <td><?php echo e($acv_80F); ?></td>
                        </tr>
                        </tr>
                        <tr>
                            <th rowspan="7" style="vertical-align: middle">DETECCIÓN Y PREVENCION DE LA
                                PROGRESION
                                DE LA ENFERMEDAD RENAL CRÓNICA (ERC).
                            </th>
                        <tr>
                            <th nowrap="">SIN ENFERMEDAD RENAL (S/ERC)</th>
                            <td><?php echo e($s_erc); ?></td>
                            <td><?php echo e($s_ercM); ?></td>
                            <td><?php echo e($s_ercF); ?></td>
                            <td><?php echo e($s_erc_1519M); ?></td>
                            <td><?php echo e($s_erc_1519F); ?></td>
                            <td><?php echo e($s_erc_2024M); ?></td>
                            <td><?php echo e($s_erc_2024F); ?></td>
                            <td><?php echo e($s_erc_2529M); ?></td>
                            <td><?php echo e($s_erc_2529F); ?></td>
                            <td><?php echo e($s_erc_3034M); ?></td>
                            <td><?php echo e($s_erc_3034F); ?></td>
                            <td><?php echo e($s_erc_3539M); ?></td>
                            <td><?php echo e($s_erc_3539F); ?></td>
                            <td><?php echo e($s_erc_4044M); ?></td>
                            <td><?php echo e($s_erc_4044F); ?></td>
                            <td><?php echo e($s_erc_4549M); ?></td>
                            <td><?php echo e($s_erc_4549F); ?></td>
                            <td><?php echo e($s_erc_5054M); ?></td>
                            <td><?php echo e($s_erc_5054F); ?></td>
                            <td><?php echo e($s_erc_5559M); ?></td>
                            <td><?php echo e($s_erc_5559F); ?></td>
                            <td><?php echo e($s_erc_6064M); ?></td>
                            <td><?php echo e($s_erc_6064F); ?></td>
                            <td><?php echo e($s_erc_6569M); ?></td>
                            <td><?php echo e($s_erc_6569F); ?></td>
                            <td><?php echo e($s_erc_7074M); ?></td>
                            <td><?php echo e($s_erc_7074F); ?></td>
                            <td><?php echo e($s_erc_7579M); ?></td>
                            <td><?php echo e($s_erc_7579F); ?></td>
                            <td><?php echo e($s_erc_80M); ?></td>
                            <td><?php echo e($s_erc_80F); ?></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td><?php echo e($dm2_sErc); ?></td>
                        </tr>
                        <tr>
                            <th nowrap="">ETAPA G1 Y ETAPA G2 (VFG > 60 ml/min)</th>
                            <td><?php echo e($ercI_II); ?></td>
                            <td><?php echo e($ercI_IIM); ?></td>
                            <td><?php echo e($ercI_IIF); ?></td>
                            <td><?php echo e($ercI_II_1519M); ?></td>
                            <td><?php echo e($ercI_II_1519F); ?></td>
                            <td><?php echo e($ercI_II_2024M); ?></td>
                            <td><?php echo e($ercI_II_2024F); ?></td>
                            <td><?php echo e($ercI_II_2529M); ?></td>
                            <td><?php echo e($ercI_II_2529F); ?></td>
                            <td><?php echo e($ercI_II_3034M); ?></td>
                            <td><?php echo e($ercI_II_3034F); ?></td>
                            <td><?php echo e($ercI_II_3539M); ?></td>
                            <td><?php echo e($ercI_II_3539F); ?></td>
                            <td><?php echo e($ercI_II_4044M); ?></td>
                            <td><?php echo e($ercI_II_4044F); ?></td>
                            <td><?php echo e($ercI_II_4549M); ?></td>
                            <td><?php echo e($ercI_II_4549F); ?></td>
                            <td><?php echo e($ercI_II_5054M); ?></td>
                            <td><?php echo e($ercI_II_5054F); ?></td>
                            <td><?php echo e($ercI_II_5559M); ?></td>
                            <td><?php echo e($ercI_II_5559F); ?></td>
                            <td><?php echo e($ercI_II_6064M); ?></td>
                            <td><?php echo e($ercI_II_6064F); ?></td>
                            <td><?php echo e($ercI_II_6569M); ?></td>
                            <td><?php echo e($ercI_II_6569F); ?></td>
                            <td><?php echo e($ercI_II_7074M); ?></td>
                            <td><?php echo e($ercI_II_7074F); ?></td>
                            <td><?php echo e($ercI_II_7579M); ?></td>
                            <td><?php echo e($ercI_II_7579F); ?></td>
                            <td><?php echo e($ercI_II_80M); ?></td>
                            <td><?php echo e($ercI_II_80F); ?></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td><?php echo e($dm2_ercI_II); ?></td>
                        </tr>
                        <tr>
                            <th nowrap="">ETAPA G3a (VFG > 45 a 59 ml/min)</th>
                            <td><?php echo e($ercIIIa); ?></td>
                            <td><?php echo e($ercIIIaM); ?></td>
                            <td><?php echo e($ercIIIaF); ?></td>
                            <td><?php echo e($ercIIIa_1519M); ?></td>
                            <td><?php echo e($ercIIIa_1519F); ?></td>
                            <td><?php echo e($ercIIIa_2024M); ?></td>
                            <td><?php echo e($ercIIIa_2024F); ?></td>
                            <td><?php echo e($ercIIIa_2529M); ?></td>
                            <td><?php echo e($ercIIIa_2529F); ?></td>
                            <td><?php echo e($ercIIIa_3034M); ?></td>
                            <td><?php echo e($ercIIIa_3034F); ?></td>
                            <td><?php echo e($ercIIIa_3539M); ?></td>
                            <td><?php echo e($ercIIIa_3539F); ?></td>
                            <td><?php echo e($ercIIIa_4044M); ?></td>
                            <td><?php echo e($ercIIIa_4044F); ?></td>
                            <td><?php echo e($ercIIIa_4549M); ?></td>
                            <td><?php echo e($ercIIIa_4549F); ?></td>
                            <td><?php echo e($ercIIIa_5054M); ?></td>
                            <td><?php echo e($ercIIIa_5054F); ?></td>
                            <td><?php echo e($ercIIIa_5559M); ?></td>
                            <td><?php echo e($ercIIIa_5559F); ?></td>
                            <td><?php echo e($ercIIIa_6064M); ?></td>
                            <td><?php echo e($ercIIIa_6064F); ?></td>
                            <td><?php echo e($ercIIIa_6569M); ?></td>
                            <td><?php echo e($ercIIIa_6569F); ?></td>
                            <td><?php echo e($ercIIIa_7074M); ?></td>
                            <td><?php echo e($ercIIIa_7074F); ?></td>
                            <td><?php echo e($ercIIIa_7579M); ?></td>
                            <td><?php echo e($ercIIIa_7579F); ?></td>
                            <td><?php echo e($ercIIIa_80M); ?></td>
                            <td><?php echo e($ercIIIa_80F); ?></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td><?php echo e($dm2_ercIIIa); ?></td>
                        </tr>
                        <tr>
                            <th nowrap="">ETAPA G3b (VFG > 30 a 44 ml/min)</th>
                            <td><?php echo e($ercIIIb); ?></td>
                            <td><?php echo e($ercIIIbM); ?></td>
                            <td><?php echo e($ercIIIbF); ?></td>
                            <td><?php echo e($ercIIIb_1519M); ?></td>
                            <td><?php echo e($ercIIIb_1519F); ?></td>
                            <td><?php echo e($ercIIIb_2024M); ?></td>
                            <td><?php echo e($ercIIIb_2024F); ?></td>
                            <td><?php echo e($ercIIIb_2529M); ?></td>
                            <td><?php echo e($ercIIIb_2529F); ?></td>
                            <td><?php echo e($ercIIIb_3034M); ?></td>
                            <td><?php echo e($ercIIIb_3034F); ?></td>
                            <td><?php echo e($ercIIIb_3539M); ?></td>
                            <td><?php echo e($ercIIIb_3539F); ?></td>
                            <td><?php echo e($ercIIIb_4044M); ?></td>
                            <td><?php echo e($ercIIIb_4044F); ?></td>
                            <td><?php echo e($ercIIIb_4549M); ?></td>
                            <td><?php echo e($ercIIIb_4549F); ?></td>
                            <td><?php echo e($ercIIIb_5054M); ?></td>
                            <td><?php echo e($ercIIIb_5054F); ?></td>
                            <td><?php echo e($ercIIIb_5559M); ?></td>
                            <td><?php echo e($ercIIIb_5559F); ?></td>
                            <td><?php echo e($ercIIIb_6064M); ?></td>
                            <td><?php echo e($ercIIIb_6064F); ?></td>
                            <td><?php echo e($ercIIIb_6569M); ?></td>
                            <td><?php echo e($ercIIIb_6569F); ?></td>
                            <td><?php echo e($ercIIIb_7074M); ?></td>
                            <td><?php echo e($ercIIIb_7074F); ?></td>
                            <td><?php echo e($ercIIIb_7579M); ?></td>
                            <td><?php echo e($ercIIIb_7579F); ?></td>
                            <td><?php echo e($ercIIIb_80M); ?></td>
                            <td><?php echo e($ercIIIb_80F); ?></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td><?php echo e($dm2_ercIIIb); ?></td>
                        </tr>
                        <tr>
                            <th nowrap="">ETAPA G4 (VFG > 15 a 29 ml/min)</th>
                            <td><?php echo e($ercIV); ?></td>
                            <td><?php echo e($ercIVM); ?></td>
                            <td><?php echo e($ercIVF); ?></td>
                            <td><?php echo e($ercIV_1519M); ?></td>
                            <td><?php echo e($ercIV_1519F); ?></td>
                            <td><?php echo e($ercIV_2024M); ?></td>
                            <td><?php echo e($ercIV_2024F); ?></td>
                            <td><?php echo e($ercIV_2529M); ?></td>
                            <td><?php echo e($ercIV_2529F); ?></td>
                            <td><?php echo e($ercIV_3034M); ?></td>
                            <td><?php echo e($ercIV_3034F); ?></td>
                            <td><?php echo e($ercIV_3539M); ?></td>
                            <td><?php echo e($ercIV_3539F); ?></td>
                            <td><?php echo e($ercIV_4044M); ?></td>
                            <td><?php echo e($ercIV_4044F); ?></td>
                            <td><?php echo e($ercIV_4549M); ?></td>
                            <td><?php echo e($ercIV_4549F); ?></td>
                            <td><?php echo e($ercIV_5054M); ?></td>
                            <td><?php echo e($ercIV_5054F); ?></td>
                            <td><?php echo e($ercIV_5559M); ?></td>
                            <td><?php echo e($ercIV_5559F); ?></td>
                            <td><?php echo e($ercIV_6064M); ?></td>
                            <td><?php echo e($ercIV_6064F); ?></td>
                            <td><?php echo e($ercIV_6569M); ?></td>
                            <td><?php echo e($ercIV_6569F); ?></td>
                            <td><?php echo e($ercIV_7074M); ?></td>
                            <td><?php echo e($ercIV_7074F); ?></td>
                            <td><?php echo e($ercIV_7579M); ?></td>
                            <td><?php echo e($ercIV_7579F); ?></td>
                            <td><?php echo e($ercIV_80M); ?></td>
                            <td><?php echo e($ercIV_80F); ?></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td><?php echo e($dm2_ercIV); ?></td>
                        </tr>
                        <tr>
                            <th nowrap="">ETAPA G5 (VFG < 15 ml/min)</th>
                            <td><?php echo e($ercV); ?></td>
                            <td><?php echo e($ercVM); ?></td>
                            <td><?php echo e($ercVF); ?></td>
                            <td><?php echo e($ercV_1519M); ?></td>
                            <td><?php echo e($ercV_1519F); ?></td>
                            <td><?php echo e($ercV_2024M); ?></td>
                            <td><?php echo e($ercV_2024F); ?></td>
                            <td><?php echo e($ercV_2529M); ?></td>
                            <td><?php echo e($ercV_2529F); ?></td>
                            <td><?php echo e($ercV_3034M); ?></td>
                            <td><?php echo e($ercV_3034F); ?></td>
                            <td><?php echo e($ercV_3539M); ?></td>
                            <td><?php echo e($ercV_3539F); ?></td>
                            <td><?php echo e($ercV_4044M); ?></td>
                            <td><?php echo e($ercV_4044F); ?></td>
                            <td><?php echo e($ercV_4549M); ?></td>
                            <td><?php echo e($ercV_4549F); ?></td>
                            <td><?php echo e($ercV_5054M); ?></td>
                            <td><?php echo e($ercV_5054F); ?></td>
                            <td><?php echo e($ercV_5559M); ?></td>
                            <td><?php echo e($ercV_5559F); ?></td>
                            <td><?php echo e($ercV_6064M); ?></td>
                            <td><?php echo e($ercV_6064F); ?></td>
                            <td><?php echo e($ercV_6569M); ?></td>
                            <td><?php echo e($ercV_6569F); ?></td>
                            <td><?php echo e($ercV_7074M); ?></td>
                            <td><?php echo e($ercV_7074F); ?></td>
                            <td><?php echo e($ercV_7579M); ?></td>
                            <td><?php echo e($ercV_7579F); ?></td>
                            <td><?php echo e($ercV_80M); ?></td>
                            <td><?php echo e($ercV_80F); ?></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td><?php echo e($dm2_ercV); ?></td>
                        </tr>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/estadisticas/seccion-a.blade.php ENDPATH**/ ?>