const getRubros = async()=>{
    let resp;
    resp = await axios.get("api/rubros/get");
    return resp.data;
};