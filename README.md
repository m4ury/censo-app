1.- clonar el repositorio.<br>
2.- en la consola: composer require maatwebsite/excel.<br>
3.- composer install.<br>
4.- renombrar el archivo ".env.example" a ".env". <br> 
    (opcional)<br>
    modificar estas variables de entorno:<br>
        APP_INST= (nombre de institucion, ej.: ej hospital de ....)<br>
        APP_DIR= (direccion de institucion)<br>
        APP_CIUDAD= (ciudad)<br>
        APP_REGION= (region)<br>
        <br>
        APP_LAT= (para trabajar con openMaps y geoReferencia)<br>
        APP_LNG= (para trabajar con openMaps y geoReferencia)<br>
        <br>
        APP_SECTOR1= (sector 1, ej.: Rural)<br>
        APP_SECTOR2= (sector 2, ej.: Urbano)<br>
        APP_SECTOR3= (sector 3, ej.: Otro)<br>
        APP_COLOR_SECTOR1 = (color del sector 1)<br>
        APP_COLOR_SECTOR2 = (color del sector 2)<br>
        APP_COLOR_SECTOR3 = (color del sector 3)<br>
        
5.- en consola ejecutar: 
                         php artisan key:generate   
                         php artisan adminlte:install --only=main_views --force
                         php artisan migrate
                         php artisan db:seed (esto cargara las patologias que se encuentren en la clase PatologiaSeeder)
6.- se debe asignar perfil "admin" para visualizar todas las opciones del sistema.



Plataforma web dedicada a la gestión y manejo de información de población bajo control de los distintos programas de salud y ciclo vital, control y seguimiento de fichas de papel, estadísticas, digitalización y automatización de tareas administrativas.

Proporcionar información verídica, confiable y a tiempo de nuestros pacientes en control de los distintos programas de salud y ciclo vital, además entregar de manera consolidada reportes según se solicite y estadística semestral, avance en tiempo real de metas sanitarias más importantes, ej.: cantidad evaluaciones Pie diabético realizadas y pacientes diabéticos sin evaluar en el año en curso, cantidad EFAM realizados, Pacientes diabéticos e hipertensos bajo control y descompensados, Encuesta semestral de satisfacción usuaria, etc.
 Esto si bien, depende de un registro o una carga masiva hacia la base de datos del mismo sistema, el registro a este último, demora solo unos minutos, y ahorra días/semanas de bloqueo de agenda de profesionales al llegar periodo estadístico semestral (junio y diciembre), lo que libera la carga administrativa de cada profesional, pudiendo ocupar ese tiempo a dedicárselo a la atención de nuestros usuarios.

Otra ventaja, es que, al ser una plataforma web se puede trabajar en simultaneo, lo que permite distribuir carga de trabajo en cuanto al llenado de datos en la plataforma de manera segura, ya que el usuario debe estar registrado con perfil autorizado (permisos manejados en base de datos) y debe estar en un equipo dentro del establecimiento y conectado a la red del hospital.

Se puede determinar estrategias de acuerdo a información obtenida, y enfocarse en cierto paciente objetivo, además de poder realizar rescate de pacientes insistentes a los distintos programas.

Permite un mayor control de documentos físicos ficha clínica de nuestros pacientes, proporcionando información de donde, en qué fecha, y quien solicita el documento.

La información almacenada en base de datos es respaldada periódicamente, en caso de algún imprevisto.
