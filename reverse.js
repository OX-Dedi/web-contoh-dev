// Contoh skrip JavaScript

// Fungsi untuk membalikkan sebuah string
function reverseString(str) {
    return str.split('').reverse().join('');
  }
  
  // Mengambil argumen dari command line
  const input = process.argv[2];
  
  // Memastikan ada argumen yang diberikan
  if (!input) {
    console.log('Harap masukkan sebuah string sebagai argumen.');
    process.exit(1);
  }
  
  // Memanggil fungsi reverseString dan menampilkan hasilnya
  const reversed = reverseString(input);
  console.log(`String terbalik: ${reversed}`);
  