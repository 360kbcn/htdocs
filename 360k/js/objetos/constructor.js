function persona(first, last, age, eye, alto) {
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = eye;
    this.tall =alto;
}

function empleado(nombre, sueldo){
  this.nombre = nombre;
  this.sueldo = sueldo;
  this.empresa = "Netmind";
  this.departamento = "";
  this.sueldoNeto=function(){
    return this.sueldo*2;
  };
  this.irpf=function(){
    if (this.sueldo < 1500){
      return .2;
    }else if(this.sueldo >= 1500 && this.sueldo < 3000){
      return .3;
    }
    return .4;
  };
  this.neto=function(){
    return this.sueldo* (1-this.irpf());
  }
}

function producto(nombre, precio, dto){
  this.nombre = nombre;
  this.precio = precio;
  this.dto = dto;
  this.pvp=function(){
    return this.precio+(des()*1.21);
  };
  this.des=function(){
    return this.precio*(1-this.dto/100);
  }
}
