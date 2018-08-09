var persona = {
  nombre:"Pedro",
  apellido:"Rios",
  edad:50,
  colorojos:"azules",
  completo:function(){
    return this.nombre;
  },
  mayorEdad:function(){
    return this.edad>=18;
  }
};
