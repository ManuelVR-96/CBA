<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registro</title>

    <!-- Icons font CSS-->
    <link href="vendor3/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor3/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor3/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor3/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/mainr.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-100 p-b-100 font-poppins">
        <div class="wrapper wrapper--w960">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title" align="center">Formulario de Registro</h2>
                     @if ( session('mensaje') )
                    <div class="alert alert-success" color="blue">{{ session('mensaje') }}</div>
                    @endif
                    <form action="{{ route('registrar_op') }}" method="POST">
                       @csrf
                       @error('nombres')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          El nombre es requerido
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @enderror 
                        @if ($errors->has('cedula'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          La cédula es requerida
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @endif
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">No Identificación</label>
                                    <input class="input--style-4" type="text" name="cedula">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nombres</label>
                                    <input class="input--style-4" type="text" name="nombres">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Apellidos</label>
                                    <input class="input--style-4" type="text" name="apellidos">
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Cargo</label>
                                    <input class="input--style-4" type="text" name="cargo">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nivel Educativo</label>
                                    <input class="input--style-4" type="text" name="nivel">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Formación</label>
                                    <input class="input--style-4" type="text" name="formacion">
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Fecha de Vinculación</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" name="vinculacion">
                                        

                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Fecha de Nacimiento</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="date" name="nacimiento">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Dirección</label>
                                    <input class="input--style-4" type="text" name="direccion">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Correo Electronico</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Contraseña</label>
                                    <input class="input--style-4" type="text" name="password">
                                </div>
                            </div>
                           
                        </div>
                      
                        <div class="p-t-15" align="center">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Enviar</button>
                            <a href="admin" class="btn btn--radius-2 btn--blue">Cancelar</a>       
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor3/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor3/select2/select2.min.js"></script>
    <script src="vendor3/datepicker/moment.min.js"></script>
    <script src="vendor3/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->