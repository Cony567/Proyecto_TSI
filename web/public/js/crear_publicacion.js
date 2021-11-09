tinymce.init({
  selector: '#descripcion-txt',
  height: 200,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

const cargarSelectZonas = (zonas,id_zona)=>{
  let select = document.querySelector(id_zona);
  for(let i=0;i<zonas.length;i++){
        let option = document.createElement("option");
        option.value = zonas[i].cod_zona;
        option.innerText = zonas[i].nom_zona;
        select.appendChild(option);
    }
}
const cargarSelectRubros = (rubros,id)=>{
  let select = document.querySelector(id);
  for(let i=0;i<rubros.length;i++){
        let option = document.createElement("option");
        option.value = rubros[i].cod_rubro;
        option.innerText = rubros[i].nom_rubro;
        select.appendChild(option);
    }
}
const cargarSelectDurac = (durac,id)=>{
  let select = document.querySelector(id);
  for(let i=0;i<durac.length;i++){
        let option = document.createElement("option");
        option.value = durac[i].cod_duracion;
        option.innerText = durac[i].titulo_duracion;
        select.appendChild(option);
    }
}

const cargarFechaActual = ()=>{
  let today = new Date();
  let dd = today.getDate();
  let mm = today.getMonth() + 1; //January is 0!
  let yyyy = today.getFullYear();

  if (dd < 10) {
    dd = '0' + dd;
  }

  if (mm < 10) {
    mm = '0' + mm;
  }

  today = yyyy + '-' + mm + '-' + dd ;
  return today;
}
document.addEventListener("DOMContentLoaded",async()=>{

  today = cargarFechaActual();

  let fecha = document.querySelector("#fecha-trabajo");
  fecha.value = today;
  let zonas = await getZonas();
  let rubros = await getRubros();
  let duraciones = await getDuraciones();
  cargarSelectZonas(zonas,"#zona-select");
  cargarSelectRubros(rubros,"#select-tipo-trabajo");
  cargarSelectDurac(duraciones,"#duracion-select");
});

document.querySelector("#btn-vista-previa").addEventListener("click", async()=>{
    let botonGuardar = document.querySelector("#guardar-btn");
    botonGuardar.disabled = false;
    
    let titulo_publicacion = document.querySelector('#nom-publicacion').value;
    let cod_rubro = document.querySelector('#select-tipo-trabajo').value;
    let cod_duracion = document.querySelector('#duracion-select').value;
    let cod_zona = document.querySelector('#zona-select').value;
    let fecha_ini = document.querySelector('#fecha-trabajo').value;
    let fecha_fin = document.querySelector('#fecha-fin-trabajo').value;
    let fecha_publicada = cargarFechaActual();
    let descripcion = tinymce.get("descripcion-txt").getContent();
    let cod_usuario = botonGuardar.name;

    publicacion = {}
    publicacion.titulo_publicacion = titulo_publicacion;
    publicacion.cod_rubro = cod_rubro;
    publicacion.cod_zona = cod_zona;
    publicacion.cod_duracion = cod_duracion;
    publicacion.fecha_ini = fecha_ini;
    publicacion.fecha_fin = fecha_fin;
    publicacion.fecha_publicada = fecha_publicada;
    publicacion.descripcion = descripcion;
    publicacion.tipo_oferta = "L";
    publicacion.cod_usuario = cod_usuario;

    console.log(publicacion);
    let desc_formulario = document.querySelector('#desc-vista');
    desc_formulario.innerHTML = descripcion;
    let resp = await crearPublicacion(publicacion);
  // AUN NO TERMINADO
});




