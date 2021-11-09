const getPublicaciones = async()=>{
    let resp;
    resp = await axios.get("api/publicaciones/get");
    return resp.data;
};
/*
const getCategorias = async()=>{
    let resp;
    resp = await axios.get("api/categoria/get");
    return resp.data;
};

const filtroProducto = async (filtro ="todos")=>{
    let resp;
    if(filtro == "todos"){
        resp = await axios.get("api/productos/get");
    }else {
        resp = await axios.get(`api/productos/filtrar?filtro=${filtro}`);
    }
    return resp.data;
};
const eliminarProducto = async(id)=>{
    try{
        let resp = await axios.post("api/productos/eliminar",{id},{
            headers: {
                'Content-Type':'application/json'
            }
        });
        return resp.data;
    }catch(e){
        return false;
    }
};

const actualizarProducto = async(producto)=>{
    try{
        let resp = await axios.post("api/productos/actualizar",producto,{
            headers: {
                'Content-Type':'application/json'
            }
        });
        return resp.data;
    }catch(e){
        return false;
    }
}; */

const crearPublicacion = async(publicacion)=>{
    let resp = await axios.post("api/publicaciones/create", publicacion, {
        headers: {
            'Content-Type':'application/json'
        }
    });
    return resp.data;
};

