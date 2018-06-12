<img src="/storage/fotos/{{$student->foto}}">
   <div>
       <h3>Datos del Alumno</h3>
       <table>
           <tr>
               <td><p class="float-left" >
                       <b>Nombre: </b> {{ $student->nombre}}<br>
                       <b>Apellidos: </b> {{ $student->apellidos }}<br>
                       <b>Sexo: </b> {{ $student->sexo }}<br>
                       <b>DNI: </b> {{ $student->dni }}<br>
                       <b>Telefono: </b> {{ $student->telefono }}
                   </p>
               </td>
               <td><p class="float-left" >
                       <b>Fecha de nacimiento: </b> {{ $student->F_nacimiento }}<br>
                       <b>Localidad: </b> {{ $student->localidad_nacimiento }}<br>
                       <b>Provincia: </b> {{ $student->provincia_nacimiento }}<br>
                       <b>Pais: </b> {{ $student->pais_nacimiento }}<br>
                   </p>
               </td>
               <td>
                   <p class="float-left" >
                       <b>Domicilio: </b> {{ $student->domicilio}}<br>
                       <b>Municipio: </b> {{ $student->municipio }}<br>
                       <b>Provincia: </b> {{ $student->provincia }}<br>
                       <b>Codigo postal: </b> {{ $student->codigo_postal }}
                   </p>
               </td>
           </tr>
       </table>
   </div>
   <div class="clearfix"></div>
   <div>
      <h3>Datos de los progenitores</h3>
      @foreach( $student->parentts as $padre)
          <table>
              <tr>
                  <td><p class="float-left" >
                          <b>Nombre: </b> {{ $padre->nombre}}<br>
                          <b>Apellidos: </b> {{ $padre->apellidos }}<br>
                          <b>DNI: </b> {{ $padre->dni }}<br>
                          <b>Fecha de nacimiento: </b> {{ $padre->f_nacimiento }}<br>
                          <b>Telefono: </b> {{ $padre->telefono }}<br>
                      </p>
                  </td>
                  <td><p class="float-left" >
                          <b>Estudios: </b> {{ $padre->estudios }}<br>
                          <b>Profesion: </b> {{ $padre->profesion }}<br>
                          <b>Correo: </b> {{ $padre->correo }}<br>
                          <b>Dirección: </b> {{ $padre->direccion }}
                      </p>
                  </td>
              </tr>
          </table>
           <br>
      @endforeach
   </div>
   <div class="clearfix"></div>
   <div>
       <h3>Matrícula</h3>
       <table>
           <tr>
               <td><p class="float-left" >
                       <b>¿Se matricula por primera vez en el centro? </b> {{ $student->primer_centro ? 'SI' : 'NO'}}<br>
                       <b>Centro en el que estudió el curso anterior: </b> {{ $student->centro_anterior }}<br>
                       <b>¿Repite el mismo curso?: </b> {{ $student->repite ? 'SI' : 'NO'}}<br>
                       <b>Materias pendientes: </b> {{ $student->pendientes }}<br>
                       <b>Estidos realizados el curso anterior: </b> {{ $student->curso_anterior }}
                   </p>
               </td>
               <td><p class="float-left" >
                       <b>¿Es alumno con dictamen de escolarización? </b> {{ $student->dictamen ? 'SI' : 'NO'}}<br>
                       <b>Transporte escolar: </b> {{ $student->transporte }}<br>
                       <b>Ampa: </b> {{ $student->ampa ? 'SI' : 'NO'}}<br>
                       <b>Bilingüe: </b>{{ $student->bilingüe ? 'SI' : 'NO'}}
                   </p>
               </td>
           </tr>
       </table>
   </div>
   <div class="clearfix"></div>
   <div>
       <h3>Curso</h3>
       <table>
           <tr>
               <th width="35%">{{ $student->study->nombre }}</th>
               <td width="65%">{{ $student->study->descripcion }}</td>
           </tr>
           <tr>

           </tr>
       </table>
   </div>
   <table>
       <tr>
           <th>
               @foreach($student->optionals as $option)
                   @if($option->descripcion == 'Troncales')
                       Troncales:
                       @break
                   @endif
               @endforeach
           </th>
           <th>
               @foreach($student->optionals as $option)
                   @if($option->descripcion == 'De opción')
                       De opción:
                       @break
                   @endif
               @endforeach
           </th>
           <th>
               @foreach($student->optionals as $option)
                   @if($option->descripcion == 'Libre configuración')
                       Libre configuración:
                       @break
                   @endif
               @endforeach
           </th>
           <th>
               @foreach($student->optionals as $option)
                   @if($option->descripcion == 'Específica')
                       Específicas:
                       @break
                   @endif
               @endforeach
           </th>
           <th>
               @foreach($student->optionals as $option)
                   @if($option->descripcion == 'Específica I')
                       Específicas 2:
                       @break
                   @endif
               @endforeach
           </th>
       </tr>
       <tr>
           <td>
               @foreach($student->optionals as $option)
                   @if($option->descripcion == 'Troncales')
                       {{ $option->nombre }}<br>
                   @endif
               @endforeach
           </td>
           <td>
               @foreach($student->optionals as $option)

                   @if($option->descripcion == 'De opción')
                       {{ $option->nombre }}<br>
                   @endif
               @endforeach
           </td>
           <td>
               @foreach($student->optionals as $option)

                   @if($option->descripcion == 'Libre configuración')
                       {{ $option->pivot->orden }}- {{ $option->nombre }}<br>
                   @endif
               @endforeach
           </td>
           <td>
               @foreach($student->optionals as $option)
                   @if($option->descripcion == 'Específica')
                       {{ $option->pivot->orden }}-{{ $option->nombre }}<br>
                   @endif
               @endforeach
           </td>
           <td>
               @foreach($student->optionals as $option)
                   @if($option->descripcion == 'Específica I')
                       {{ $option->pivot->orden }}-{{ $option->nombre }}<br>
                   @endif
               @endforeach
           </td>
       </tr>
   </table>








