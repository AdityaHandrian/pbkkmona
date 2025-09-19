<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCR Pencatatan Transaksi</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f9; display: flex; justify-content: center; padding-top: 40px; }
        .container { background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 100%; max-width: 500px; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: .5rem; font-weight: bold; }
        input, select, textarea { width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { padding: 0.75rem 1.5rem; cursor: pointer; border: none; background-color: #007bff; color: white; border-radius: 4px; }
        #spinner { display: none; margin-left: 10px; border: 4px solid #f3f3f3; border-top: 4px solid #3498db; border-radius: 50%; width: 24px; height: 24px; animation: spin 1s linear infinite; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload Struk untuk Isi Otomatis</h2>
        
        <form id="ocr-form">
             @csrf <div class="form-group">
                <label for="receipt_image">Gambar Struk</label>
                <input type="file" name="image" id="receipt_image" accept="image/png, image/jpeg, image/webp" required>
            </div>
            <div style="display: flex; align-items: center;">
                <button type="submit">Proses Gambar</button>
                <div id="spinner"></div>
            </div>
        </form>

        <hr style="margin: 2rem 0;">

        <h2>Form Transaksi</h2>
        <form action="/transactions" method="POST">
            @csrf
            <div class="form-group">
                <label for="type">Tipe</label>
                <select name="type" id="type">
                    <option value="expense">Expense (Pengeluaran)</option>
                    <option value="income">Income (Pemasukan)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Total (Amount)</label>
                <input type="number" name="amount" id="amount" placeholder="Contoh: 50000">
            </div>
            <div class="form-group">
                <label for="date">Tanggal Transaksi</label>
                <input type="date" name="date" id="date">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" id="description" rows="3" placeholder="Contoh: Pembelian ATK di Toko ABC"></textarea>
            </div>
            <button type="submit">Simpan Transaksi</button>
        </form>
    </div>

    <script>
        document.getElementById('ocr-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);
            const spinner = document.getElementById('spinner');

            spinner.style.display = 'inline-block';

            fetch('/process-receipt', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('[name=_token]').value
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert('Error: ' + data.error);
                } else {
                    document.getElementById('type').value = data.type || 'expense';
                    document.getElementById('amount').value = data.amount || '';
                    document.getElementById('date').value = data.date || '';
                    document.getElementById('description').value = data.description || '';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat memproses gambar.');
            })
            .finally(() => {
                spinner.style.display = 'none';
            });
        });
    </script>
</body>
</html>