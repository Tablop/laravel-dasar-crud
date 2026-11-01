## API Documentation

Project ini menyediakan REST API untuk mengelola data kategori dan produk menggunakan metode CRUD (Create, Read, Update, Delete).

### 1. Kategori

Base endpoint: `/api/kategori`

| Method    | Endpoint                   | Fungsi                                    |
| --------- | -------------------------- | ----------------------------------------- |
| GET       | `/api/kategori`            | Mengambil seluruh data kategori.          |
| POST      | `/api/kategori`            | Menambahkan kategori baru.                |
| GET       | `/api/kategori/{kategori}` | Mengambil detail kategori berdasarkan ID. |
| PUT/PATCH | `/api/kategori/{kategori}` | Memperbarui data kategori.                |
| DELETE    | `/api/kategori/{kategori}` | Menghapus kategori.                       |

### 2. Produk

Base endpoint: `/api/produk`

| Method    | Endpoint               | Fungsi                                  |
| --------- | ---------------------- | --------------------------------------- |
| GET       | `/api/produk`          | Mengambil seluruh data produk.          |
| POST      | `/api/produk`          | Menambahkan produk baru.                |
| GET       | `/api/produk/{produk}` | Mengambil detail produk berdasarkan ID. |
| PUT/PATCH | `/api/produk/{produk}` | Memperbarui data produk.                |
| DELETE    | `/api/produk/{produk}` | Menghapus produk.                       |

### 3. Endpoint Lainnya

| Method | Endpoint    | Fungsi                      |
| ------ | ----------- | --------------------------- |
| GET    | `/`         | Halaman utama.              |
| GET    | `/about`    | Halaman informasi aplikasi. |
| GET    | `/api/user` | Mengambil informasi user.   |

### 4. HTTP Method

API menggunakan beberapa HTTP method berikut:

| Method    | Keterangan                   |
| --------- | ---------------------------- |
| GET       | Membaca atau mengambil data. |
| POST      | Membuat data baru.           |
| PUT/PATCH | Memperbarui seluruh data.    |
| DELETE    | Menghapus data.              |
