const getDuraciones = async()=>{
    let resp;
    resp = await axios.get("api/duraciones/get");
    return resp.data;
};