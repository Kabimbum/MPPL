<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    // Data dari Laravel ke JS: ambil ID dan Nama Mahasiswa
    const mahasiswas = @json($mahasiswas->map(fn($m) => [
        'id' => $m->id,
        'name' => $m->name
    ]));

    function sanitizeFileName(name) {
        return name.replace(/[^a-z0-9]/gi, '_').toLowerCase();
    }

    function downloadKTM(id, name) {
        const ktmCard = document.getElementById('ktm-card-' + id);
        const safeName = sanitizeFileName(name);

        html2canvas(ktmCard, { useCORS: true, scale: 2 }).then(canvas => {
            const imgData = canvas.toDataURL('image/png');
            const link = document.createElement('a');
            link.href = imgData;
            link.download = 'KTM_' + safeName + '.png';
            link.click();
        }).catch(err => {
            console.error("Gagal render gambar:", err);
        });
    }

    function downloadAllKTMs() {
        mahasiswas.forEach((mhs, index) => {
            setTimeout(() => {
                downloadKTM(mhs.id, mhs.name);
            }, index * 1500); // jeda 1.5 detik antar download
        });
    }
</script>
