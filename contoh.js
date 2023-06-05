// Contoh skrip JavaScript

// Fungsi untuk menghitung faktorial suatu angka
function factorial(n) {
    if (n === 0 || n === 1) {
      return 1;
    }
    return n * factorial(n - 1);
  }
  
  // Mengambil argumen dari command line
  const number = process.argv[2];
  
  // Memastikan argumen berupa angka
  if (isNaN(number)) {
    console.log('Harap masukkan angka sebagai argumen.');
    process.exit(1);
  }
  
  // Menghitung faktorial dan menampilkan hasilnya
  const result = factorial(parseInt(number));
  console.log(`Faktorial dari ${number} adalah: ${result}`);
  