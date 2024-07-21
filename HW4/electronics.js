class ElectronicItem {
    constructor(id, name, description, stock, features) {
      this.id = id;
      this.name = name;
      this.description = description;
      this.stock = stock;
      this.features = features;
    }

    ShowAllProduct() {
      return `
          <div class="product-type">
              <h2>${this.name}</h2>
              <p>Product ID: ${this.id}</p>
              <p>รายละเอียด: ${this.description}</p>
              <p>สต็อก: ${this.stock}</p>
              <p>คุณสมบัติ: ${this.features}</p>
          </div>
      `;
  }
  }
  
  const electronics = [
    new ElectronicItem('E001', 'ทีวี', 'ทีวีจอแบน 42 นิ้ว', 5, 'ทีวี Sony ความคมชัดระดับ 10k'),
    new ElectronicItem('E002', 'วิดีโอ', 'เครื่องเล่นวิดีโอ Blu-ray', 7, 'เครื่องเล่น DVD จาก Sumsung'),
    new ElectronicItem('E003', 'โทรศัพท์', 'สมาร์ทโฟนหน้าจอ 6 นิ้ว', 20, 'iphone12 จอ 6 นิ้ว จาก Apple'),
    new ElectronicItem('E004', 'คอมพิวเตอร์', 'คอมพิวเตอร์ตั้งโต๊ะสเปกสูง', 10, 'Acer nitro v 15 ram 16 CPU core i9 GTX4050 จอ 165 Hz')
  ];