const color = ["black", "brown", "red", "orange","yellow","green","blue","purple","gray","white"];
const multicor = ["silver","gold","black", "brown", "red", "orange","yellow","green","blue","purple"];
const tolerancecor = ["silver","gold","brown", "red","green","blue","purple"];
const ppmcor = ["brown", "red", "orange","yellow"];
function cal() {
  
  var st_1 = document.getElementById("resistor-calc-1st");
  var selectValue_st1 = st_1.value;
  
  var st_2 = document.getElementById("resistor-calc-2st");
  var selectValue_st2 = st_2.value;
  
  var st_3 = document.getElementById("resistor-calc-3st");
  var selectValue_st3 = st_3.value;
  
  var mtl = document.getElementById("resistor-calc-multiplier");
  var seletMultiplier = mtl.value;
  seletMultiplier = parseInt(seletMultiplier, 10);
  
  var sum = selectValue_st1 + selectValue_st2 + selectValue_st3;
  sum = parseInt(sum, 10);
  result = sum * seletMultiplier;
  
  var tor = document.getElementById("resistor-calc-tolerance");
  var selectTolerance = tor.value;
  
  var ppm = document.getElementById("resistor-calc-ppm");
  var selectPPm = ppm.value;
  
  if (result >= 1000 && result < 1000000) {
    result = result / 1000;
    result = result + "K";
  } else if (result >= 1000000) {
    result = result / 1000000;
    result = result + "M";
  }
  
  
  document.getElementById("output-this").innerHTML = ` ${result} \tOhms  \t${selectTolerance} \t ${selectPPm}`;
  
  document.getElementById("band-number1").style.backgroundColor = color[parseInt(selectValue_st1 , 10)];
  document.getElementById("band-number2").style.backgroundColor = color[parseInt(selectValue_st2 , 10)];
  document.getElementById("band-number3").style.backgroundColor = color[parseInt(selectValue_st3 , 10)];
  document.getElementById("band-multiplier").style.backgroundColor = multicor[multipliercal(seletMultiplier)];
  document.getElementById("band-tolerance").style.backgroundColor = tolerancecor[tolerancecal(selectTolerance)];
  document.getElementById("band-ppm").style.backgroundColor = ppmcor[ppmcal(selectPPm)];
  
} 

function tolerancecal(tolerance) {
  if (tolerance === "± 10%") {
    return 0;
  }
  else if (tolerance === "± 5%") {
    return 1;
  }
  else if (tolerance === "± 1%") {
    return 2;
  }
  else if (tolerance === "± 2%") {
    return 3;
  }
  else if (tolerance === "± 0.5%") {
    return 4;
  }
  else if (tolerance === "± 0.25%") {
    return 5;
  }
  else if (tolerance === "± 0.1%") {
    return 6;
  }
  
}

function multipliercal(sum) {
  switch (sum) {
    case 0.01:
      sum = 0;
      return sum;
      break;
    case 0.1:
      sum = 1;
      return sum;
      break;
    case 1:
      sum = 2;
      return sum;
      break;
    case 10:
      sum = 3;
      return sum;
      break;
    case 100:
      sum = 4;
      return sum;
      break;
    case 1000:
      sum = 5;
      return sum;
      break;
    case 10000:
      sum = 6;
      return sum;
      break;
    case 100000:
      sum = 7;
      return sum;
      break;
    case 1000000:
      sum = 8;
      return sum;
      break;
    case 10000000:
      sum = 9;
      return sum;
      break;
  }
}

function ppmcal(ppm) {
  if (ppm === "100") {
    return 0;
  } 
  else if (ppm === "50") {
    return 1;
  }
  else if (ppm === "15") {
    return 2;
  }
  else if (ppm === "25") {
    return 3;
  }
}
