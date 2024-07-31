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
}