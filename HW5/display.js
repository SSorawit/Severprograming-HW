function toggleContent() {
    const display_box = [
      document.getElementById("box-1"),
      document.getElementById("box-2"),
      document.getElementById("box-3"),
      document.getElementById("box-4"),
      document.getElementById("box-5"),
      document.getElementById("box-6"),
      document.getElementById("box-show")
    ];
    var select = document.getElementById("select-4_6");
    if (select.value === "4") {
      display_box[0].style.display = "block";
      display_box[1].style.display = "block";
      display_box[3].style.display = "block";
      display_box[4].style.display = "block";
      display_box[6].style.display = "block";
      document.getElementById("box-resistor-calc-multiplier").innerHTML =
        "ตัวคูณ (แถบที่ 3)";
      document.getElementById("box-band-tolerance").innerHTML =
        "ความเผื่อ (แถบที่ 4)";
    } else if (select.value === "5") {
      display_box[0].style.display = "block";
      display_box[1].style.display = "block";
      display_box[2].style.display = "block";
      display_box[3].style.display = "block";
      display_box[4].style.display = "block";
      display_box[6].style.display = "block";
    } else if (select.value === "6") {
      display_box[0].style.display = "block";
      display_box[1].style.display = "block";
      display_box[2].style.display = "block";
      display_box[3].style.display = "block";
      display_box[4].style.display = "block";
      display_box[5].style.display = "block";
      display_box[6].style.display = "block";
    } else {
      Array.from(display_box).forEach((item) => {
        item.style.display = "none";
      });
    }
  }
  