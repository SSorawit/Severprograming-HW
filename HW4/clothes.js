class ClothingItem {
    constructor(id, name, description, stock, size, color, material) {
      this.id = id;
      this.name = name;
      this.description = description;
      this.stock = stock;
      this.size = size;
      this.color = color;
      this.material = material;
    }

    ShowAllProduct() {
      return `
          <div class="product-type">
              <h2>${this.name}</h2>
              <p>Product ID: ${this.id}</p>
              <p>รายละเอียด: ${this.description}</p>
              <p>สต็อก: ${this.stock}</p>
              <p>คุณสมบัติ: ${this.size}</p>
              <p>สี: ${this.color}</p>
              <p>วัสดุ: ${this.material}</p>
          </div>
      `;
  }
  }
  
  const clothings = [
    new ClothingItem('C001', 'เสื้อเชิ้ต', 'เสื้อเชิ้ตทำจากผ้าฝ้าย', 10, 'L', 'ขาว', 'ฝ้าย'),
    new ClothingItem('C002', 'เสื้อโปโล', 'เสื้อโปโลใส่สบาย', 15, 'M', 'ฟ้า', 'ผ้าผสม'),
    new ClothingItem('C003', 'เสื้อ T-shirt', 'เสื้อ T-shirt ลายกราฟิก', 20, 'S', 'ดำ', 'ฝ้าย'),
    new ClothingItem('C004', 'กางเกงขาสั้น', 'กางเกงขาสั้นใส่สบาย', 5, 'M', 'น้ำเงิน', 'ยีนส์'),
    new ClothingItem('C005', 'กางเกงขายาว', 'กางเกงขายาวทรงตรง', 8, 'L', 'เทา', 'ผ้าผสม'),
    new ClothingItem('C006', 'กระโปรงสั้น', 'กระโปรงสั้นผ้าชีฟอง', 12, 'S', 'แดง', 'ชีฟอง'),
    new ClothingItem('C007', 'กระโปรงยาว', 'กระโปรงยาวผ้าฝ้าย', 7, 'M', 'เขียว', 'ฝ้าย')
  ];