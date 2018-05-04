
    <h3>Datos padre</h3>
    <div class="form-row">
        <div class="form-group col-md-4">
            @foreach($opciones->options() as $opcion)
                <p>{{ $opcion->nombre }}</p>
            @endforeach
        </div>
        <div class="form-group col-md-4">
            <label for="centro_anterior">Centro en el que estudió el curso anterior</label>
            <input type="text" class="form-control" id="centro_anterior"  name="centro_anterior">
        </div>
        <div class="form-group col-md-4">
            <label for="dictamen">¿Es alumno/a con DICTAMEN DE ESOLARIZACIÓN?</label>
            <select id="dictamen" name="dictamen" class="form-control">
                <option>Seleccione</option>
                <option value="1">SI</option>
                <option value="0">NO</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="repite">¿Repite el mismo curso?</label>
            <select id="repite" name="repite" class="form-control">
                <option>Seleccione</option>
                <option value="1">SI</option>
                <option value="0">NO</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="pendientes">Materias pendientes</label>
            <input type="text" class="form-control" id="pendientes" name="pendientes">
        </div>
        <div class="form-group col-md-4">
            <label for="1_centro">Estudios realizados en el curso anterior :</label>
            <select id="1_centro" name="1_centro" class="form-control">
                <option>Seleccione</option>
                <option value="6_primaria">6º Primaria</option>
                <option value="1_eso">1º ESO</option>
                <option value="2_eso">2º ESO</option>
                <option value="3_eso">3º ESO</option>
                <option value="4_eso">4º ESO</option>
                <option value="2_pmar">2º PEMAR</option>
                <option value="eso">ESO</option>
                <option value="1_bachillerato">1º Bachillerato</option>
                <option value="2_bachillerato">2º Bachillerato</option>
                <option value="repite_1_bachillerato"> Repite 1º Bachillerato</option>
                <option value="repite_2_bachillerato"> Repite 2º Bachillerato</option>
                <option value="ciclo_formativo">Ciclo Formativo</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="ampa">¿Paga AMPA?</label>
            <select id="ampa" name="ampa" class="form-control">
                <option>Seleccione</option>
                <option value="1">SI</option>
                <option value="0">NO</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="1_centro">¿ Va a utilizar transporte escolar ?</label>
            <select id="1_centro" name="1_centro" class="form-control">
                <option>Seleccione</option>
                <option value="no">NO</option>
                <option value="aljucer_jardin">Aljucer jardin</option>
                <option value="aljucer_opel">Aljucer opel</option>
                <option value="aljucer_mueblesCaballero">Aljucer muebles Caballero</option>
                <option value="sanpio">San Pio</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="matricula">¿Curso del que se matricula ?</label>
            <select id="matricula" name="matricula" class="form-control">
                <option>Seleccione</option>
                <option value="no">NO</option>
                //@foereach() de los cursos
            </select>
        </div>
    </div>
