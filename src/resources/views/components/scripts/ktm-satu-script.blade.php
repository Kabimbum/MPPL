<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function sanitizeFileName(name) {
        return name.replace(/[^a-z0-9]/gi, '_').toLowerCase();
    }

    function downloadKTM() {
        const ktmCard = document.getElementById('ktm-card');
        const name = @json($mahasiswa->name); // Ambil nama dari Blade ke JS
        const fileName = 'KTM_' + sanitizeFileName(name) + '.png';

        html2canvas(ktmCard, { useCORS: true, scale: 2 }).then(canvas => {
            const imgData = canvas.toDataURL('image/png');
            const link = document.createElement('a');
            link.href = imgData;
            link.download = fileName;
            link.click();
        }).catch(err => {
            console.error("Gagal mengunduh KTM:", err);
        });
    }
</script>
